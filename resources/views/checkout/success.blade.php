@extends('layouts.app')

@section("content")
<?php
header('Content-type: text/html; charset=utf-8');


$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa'; //Put your secret key in there

if (!empty($_GET)) {
    $partnerCode = $_GET["partnerCode"];
    $accessKey = $_GET["accessKey"];
    $orderId = $_GET["orderId"];
    $localMessage = utf8_encode($_GET["localMessage"]);
    $message = $_GET["message"];
    $transId = $_GET["transId"];
    $orderInfo = utf8_encode($_GET["orderInfo"]);
    $amount = $_GET["amount"];
    $errorCode = $_GET["errorCode"];
    $responseTime = $_GET["responseTime"];
    $requestId = $_GET["requestId"];
    $extraData = $_GET["extraData"];
    $payType = $_GET["payType"];
    $orderType = $_GET["orderType"];
    $extraData = $_GET["extraData"];
    $m2signature = $_GET["signature"]; //MoMo signature


    //Checksum
    $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
        "&orderType=" . $orderType . "&transId=" . $transId . "&message=" . $message . "&localMessage=" . $localMessage . "&responseTime=" . $responseTime . "&errorCode=" . $errorCode .
        "&payType=" . $payType . "&extraData=" . $extraData;

    $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

    echo "<script>console.log('Debug huhu Objects: " . $rawHash . "' );</script>";
    echo "<script>console.log('Debug huhu Objects: " . $secretKey . "' );</script>";
    echo "<script>console.log('Debug huhu Objects: " . $partnerSignature . "' );</script>";


    if ($m2signature == $partnerSignature) {
        if ($errorCode == '0') {
            $result = '<div class="alert alert-success"><strong>Payment status: </strong>Success</div>';
        } else {
            $result = '<div class="alert alert-danger"><strong>Payment status: </strong>' . $message .'/'.$localMessage. '</div>';
        }
    } else {
        $result = '<div class="alert alert-danger">This transaction could be hacked, please check your signature and returned signature</div>';
    }
}

?>

    <section class="bg-white py-8 antialiased md:py-16">
        <div class="mx-auto max-w-2xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl mb-2">Thanks for your order!</h2>
            {{-- <p class="text-gray-500 mb-6 md:mb-8">Your order <a href="#" class="font-medium text-gray-900 hover:underline">#{{ $orderId }}</a> will be processed within 24 hours during working days. We will notify you by email once your order has been shipped.</p> --}}
            <div class="space-y-4 sm:space-y-2 rounded-lg border border-gray-100 bg-gray-50 p-6 mb-6 md:mb-8">
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Date</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">14 May 2024</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Payment Method</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">{{ $orderType ?? $order['payment_method'] }}</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Name</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">{{ $shipping->first_name . ' ' . $shipping->last_name}}</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Address</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">{{ $shipping->address }}</dd>
                </dl>
                <dl class="sm:flex items-center justify-between gap-4">
                    <dt class="font-normal mb-1 sm:mb-0 text-gray-500">Phone</dt>
                    <dd class="font-medium text-gray-900 sm:text-end">{{ $shipping->phone_number }}</dd>
                </dl>
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ route('user.orders.show', $order)}}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary focus:z-10 focus:ring-4 focus:ring-gray-100">Track your order</a>
                <a href="{{ route('home') }}" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary focus:z-10 focus:ring-4 focus:ring-gray-100">Return to shopping</a>
            </div>
        </div>
    </section>
@endsection