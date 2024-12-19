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
        // 4111111111111111
        // NGUYEN VAN A
        // 01/25
        // 123
        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod === 'cod') {
            return $this->storePayment($request);
        }

        $user = Auth::user();
        $cart = $user->cart;
        $amount = "$cart->total";

        // Create Order
        $orderData = [
            'user_id' => $user->id,
            'payment_method' => 'atm',
            'total' => $cart->total,
            'status' => 'pending',
        ];

        $order = $this->createOrder(
            $orderData,
            $user,
            session('address_id')
        );
        session(['order' => $order]);

        $config = [
            "appid" => 553,
            "key1" => "9phuAOYhan4urywHTh0ndEXiV3pKHr5Q",
            "key2" => "Iyz2habzyr7AG8SgvoBCbKwKi3UzlLi3",
            "endpoint" => "https://sandbox.zalopay.com.vn/v001/tpe/createorder"
          ];

        $embeddata = [
        "merchantinfo" => "embeddata123",
        "redirecturl" => route('user.checkout.success'),
        ];
        $items = [
        [ "itemid" => "knb", "itemname" => "kim nguyen bao", "itemprice" => 198400, "itemquantity" => 1 ]
        ];
        $order = [
        "appid" => $config["appid"],
        "apptime" => round(microtime(true) * 1000), // miliseconds
        "apptransid" => date("ymd")."_".uniqid(), // mã giao dich có định dạng yyMMdd_xxxx
        "appuser" => "demo",
        "item" => json_encode($items, JSON_UNESCAPED_UNICODE),
        "embeddata" => json_encode($embeddata, JSON_UNESCAPED_UNICODE),
        "amount" => $amount,
        "description" => "Lazada - Thanh toán đơn hàng #".$order["apptransid"],
        "bankcode" => ''
        ];

        // appid|apptransid|appuser|amount|apptime|embeddata|item
        $data = $order["appid"]."|".$order["apptransid"]."|".$order["appuser"]."|".$order["amount"]
        ."|".$order["apptime"]."|".$order["embeddata"]."|".$order["item"];
        $order["mac"] = hash_hmac("sha256", $data, $config["key1"]);

        $context = stream_context_create([
        "http" => [
          "header" => "Content-type: application/x-www-form-urlencoded\r\n",
          "method" => "POST",
          "content" => http_build_query($order)
        ]
        ]);

        $resp = file_get_contents($config["endpoint"], false, $context);
        $result = json_decode($resp, true);

        return redirect($result['orderurl']);
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

        // // Clear the cart
        // $cart->items()->delete();
        // $cart->delete();

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

        session()->forget('payment_token');
        return view('checkout.success', ['shipping' => $shipping, 'order' => $order]);
    }
}


