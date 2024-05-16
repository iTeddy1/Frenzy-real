@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['total_price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <strong>Total: ${{ $total }}</strong>
    </div>
    <a href="{{ route('checkout.shipping') }}" class="btn btn-primary">Proceed to Shipping</a>
</div>
@endsection
