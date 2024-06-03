<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    // public function cart()
    // {
    //     $cart = Auth::user()->cart;

    //     dd($cart);
    //     return view('checkout.cart', ['cart' => $cart, 'total' => $total]);
    // }

    public function shipping()
    {
        $cart = Auth::user()->cart;
        return view('checkout.shipping', ['total' => $cart->total]);
    }

    public function storeShipping(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            // 'delivery_option' => 'required|in:0,25'
        ]);
        $validated['user_id'] = Auth::user()->id;
        Address::create($validated);
        // Session::put('shipping', $request->only('address'));

        return redirect()->route('user.checkout.payment');
    }

    public function payment(Request $request)
    {
        $cart = Auth::user()->cart;

        $shipping = Auth::user()->addresses->first();
        // dd($shipping);
        return view('checkout.payment', ['cart' => $cart, 'total' => $cart->total, 'shipping' => $shipping]);
    }

    public function momo_payment(Request $request)
    {
        // 9704000000000018
        // NGUYEN VAN A
        // 03/07
        $cart = Auth::user()->cart;

        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";

        $partnerCode = "MOMOBKUN20180529";
        $accessKey = "klm05TvNBzhg7h7j";
        $secretKey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "$cart->total";
        $orderId = time() . "";
        $returnUrl = "http://localhost:8000/user/checkout/success";
        $notifyurl = "http://localhost:8000/paymomo/ipn_momo.php";
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
        
        //! Use QR payment
        // $extraData = "merchantName=MoMo Partner";
        // $requestType = "captureMoMoWallet";
        // //before sign HMAC SHA256 signature
        // $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
        // $signature = hash_hmac("sha256", $rawHash, $secretKey);
        // $data = array(
        //     'partnerCode' => $partnerCode,
        //     'accessKey' => $accessKey,
        //     'requestId' => $requestId,
        //     'amount' => $amount,
        //     'orderId' => $orderId,
        //     'orderInfo' => $orderInfo,
        //     'returnUrl' => $returnUrl,
        //     'notifyUrl' => $notifyurl,
        //     'extraData' => $extraData,
        //     'requestType' => $requestType,
        //     'signature' => $signature
        // );

        $result = execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json

        //Just a example, please check more in there
        return redirect($jsonResult['payUrl']);
        // header('Location: ' . $jsonResult['payUrl']);

        // return redirect()->route('user.checkout.success');
    }

    public function success()
    {
        $user = Auth::user();
        $cart = $user->cart;
        // Create an order record (optional, but recommended)
        $order = Order::create([
            'user_id' => $user->id,
            'cart_id' => $cart->id,
            'total' => $cart->total,
        ]);

        // Save each cart item to the order items (if you have order_items table)
        // foreach ($cart->items as $item) {
        //     $order->items()->create([
        //         'product_id' => $item->product_id,
        //         'quantity' => $item->quantity,
        //         'price' => $item->price,
        //         'size' => $item->size,
        //         // Add any other order item details you need
        //     ]);
        // }

        $order->save();

        // Delete the cart and its items
        $cart->items()->delete();
        $cart->delete();

        return view('checkout.success');
    }
}


