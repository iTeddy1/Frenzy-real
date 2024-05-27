<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class PaymentController extends Controller
{
    public function payment()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));
        $shipping = Session::get('shipping', []);

        return view('checkout.payment', ['cart' => $cart, 'total' => $total, 'shipping' => $shipping]);
    }

    public function storePayment(Request $request)
    {
        $cart = Session::get('cart', []);
        $shipping = Session::get('shipping', []);
        $total = array_sum(array_column($cart, 'total_price'));

        // VNPay configuration
        $vnp_Url = env('VNPAY_URL');
        $vnp_Returnurl = env('VNPAY_RETURN_URL');
        $vnp_TmnCode = env('VNPAY_TMNCODE');
        $vnp_HashSecret = env('VNPAY_HASHSECRET');

        $vnp_TxnRef = time(); // Unique transaction ID
        $vnp_OrderInfo = "Payment for order #" . $vnp_TxnRef;
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $total * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $request->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect($vnp_Url);
    }

    public function vnpayReturn(Request $request)
    {
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount') / 100;

        if ($vnp_ResponseCode == "00") {
            // Create order
            $cart = Session::get('cart', []);
            $shipping = Session::get('shipping', []);
            $total = array_sum(array_column($cart, 'total_price'));

            $order = new Order();
            $order->user_id = Auth::id();
            $order->total_price = $total;
            $order->address = $shipping['address'];
            $order->status = 'Pending';
            $order->save();

            // Save order items
            foreach ($cart as $item) {
                $order->products()->attach($item['product_id'], [
                    'quantity' => $item['quantity'],
                    'price' => $item['price']
                ]);
            }

            // Clear the cart
            Session::forget('cart');
            Session::forget('shipping');

            return redirect()->route('user.checkout.success');
        } else {
            // Payment failed
            return redirect()->route('checkout.payment')->with('error', 'Payment failed. Please try again.');
        }
    }
}
