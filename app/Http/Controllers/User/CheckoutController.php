<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function cart()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));

        return view('checkout.cart', ['cart' => $cart, 'total' => $total]);
    }

    public function shipping()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));
        return view('checkout.shipping', ['total' => $total]);
    }

    public function storeShipping(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        Session::put('shipping', $request->only('address'));

        return redirect()->route('user.checkout.payment');
    }

    public function payment()
    {
        $cart = Session::get('cart', []);
        $total = array_sum(array_column($cart, 'total_price'));
        $shipping = Session::get('shipping', []);

        return view('checkout.payment', ['cart' => $cart, 'total' => $total, 'shipping' => $shipping]);
    }

    public function momo_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";


        $partnerCode = "MOMOBKUN20180529";
        $accessKey = "klm05TvNBzhg7h7j";
        $secretKey = "at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa";
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $orderId = time() . "";
        $returnUrl = "http://localhost:8000/user/checkout/success";
        $notifyurl = "http://localhost:8000/paymomo/ipn_momo.php";
        // Lưu ý: link notifyUrl không phải là dạng localhost

        //! Use ATM payment
        $bankCode = "SML";
        $requestType = "payWithMoMoATM";
        $extraData = "";
        $requestId = time() . "";
        $rawHash = "partnerCode=".$partnerCode."&accessKey=".$accessKey."&requestId=".$requestId."&bankCode=".$bankCode."&amount=".$amount."&orderId=".$orderId."&orderInfo=".$orderInfo."&returnUrl=".$returnUrl."&notifyUrl=".$notifyurl."&extraData=".$extraData."&requestType=".$requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data =  array('partnerCode' => $partnerCode,
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
                       'signature' => $signature);
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
        return view('checkout.success');
    }
}


