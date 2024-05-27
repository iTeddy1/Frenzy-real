@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Payment</h1>

    <form action="{{ route('user.checkout.storePayment') }}" method="POST" id="payment-form">
        @csrf
        <button type="submit" id="redirect" class="redirect btn btn-primary">Submit Payment</button>
    </form>
</div>

@endsection
