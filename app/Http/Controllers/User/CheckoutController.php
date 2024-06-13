<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function cart()
    {
        $cart = Auth::user()->cart;
        return view('checkout.cart', ['cart' => $cart]);
    }

    public function shipping()
    {
        $cart = Auth::user()->cart;

        return view('checkout.shipping', ['total' => $cart->total]);
    }

    public function storeShipping(Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart;
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            // 'delivery_option' => 'required|in:0,25'
        ]);

        $validated['user_id'] = $user->id;
        $address = Address::create($validated);
        session(['address_id' => $address->id]);

        return redirect()->route('user.checkout.payment', ['cart' => $cart, 'address_id' => $address->id, $address]);
    }

    public function payment(Request $request)
    {
        $cart = Auth::user()->cart;
        $shipping = Address::find($request->query('address_id'));
        // dd($shipping);
        return view('checkout.payment', ['cart' => $cart, 'shipping' => $shipping]);
    }

    public function momoPayment(Request $request)
    {
        // 9704000000000018
        // NGUYEN VAN A
        // 03/07
        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod === 'cod') {
            return $this->storePayment($request);
        }

        $user = Auth::user();
        $cart = $user->cart;
        $amount = "$cart->total";

        $endpoint = env('PAYMENT_ENDPOINT');
        $partnerCode = env('PAYMENT_PARTNER_CODE');
        $accessKey = env('PAYMENT_ACCESS_KEY');
        $secretKey = env('PAYMENT_SECRET_KEY');

        $orderInfo = "Thanh toán qua MoMo";
        $orderId = time() . "";
        $returnUrl = "http://localhost:8000/user/checkout/success";
        $notifyurl = route('user.checkout.storePayment');
        // Lưu ý: link notifyUrl không phải là dạng localhost

        //! Use ATM payment
        $bankCode = "SML";
        $requestType = "payWithMoMoATM";
        $extraData = "";
        $requestId = time() . "";
        $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&bankCode=" . $bankCode . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'returnUrl' => $returnUrl,
            'bankCode' => $bankCode,
            'notifyUrl' => $notifyurl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);
        // decode json
        if ($jsonResult['message'] == 'Success') {
            // dd($cart);
            $orderData = [
                'user_id' => $user->id,
                'payment_method' => 'atm',
                'total' => $cart->total,
                'status' => 'pending',
            ];
            // dd($orderData);
            $this->createOrder(
                $orderData,
                $user,
                session('address_id')
            );
        }
        return redirect($jsonResult['payUrl']);
    }
    public function createOrder($orderData, $user, $addressId)
    {
        $cart = $user->cart;

        $order = Order::create($orderData);

        // Create order items
        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        OrderHistory::create([
            'order_id' => $order->id,
            'status_id' => OrderStatus::where('status', 'pending')->first()->id,
        ]);

        DB::table('order_address')->insert([
            'order_id' => $order->id,
            'address_id' => $addressId,
        ]);

        // Clear the cart
        $cart->items()->delete();
        $cart->delete();

        return $order;
    }

    public function storePayment(Request $request)
    {
        $user = Auth::user();
        $cart = $user->cart;
        $addressId = session('address_id');

        $paymentMethod = $request->query('payment_method', 'cod');
        // dd($cart);
        $orderData = [
            'user_id' => $user->id,
            'payment_method' => $paymentMethod,
            'total' => $cart->total,
            'status' => 'pending',
        ];
        $order = $this->createOrder($orderData, $user, $addressId);
        // dd($order);
        return redirect()->route('user.checkout.success')->with('order', $order);
    }


    public function success(Request $request)
    {
        $order = session('order');
        $shipping = (DB::table('addresses')
            ->join('order_address', 'addresses.id', '=', 'order_address.address_id')
            ->where('order_address.order_id', $order->id)
            ->first());
        Log::info($order);

        return view('checkout.success', ['shipping' => $shipping, 'order' => $order]);
    }
}


