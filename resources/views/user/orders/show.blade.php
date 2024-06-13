@extends("layouts.app")

@section("content")

<div class="transition-transform mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
        <div class="mb-10">
            <h1 class="text-2xl font-bold">Order Details</h1>
            {{ Breadcrumbs::render('user.orders.show', $order) }}
        </div>
        <div class="container">
            <h1>Order Details</h1>
            <div>
                <h2>Order ID: {{ $order->id }}</h2>
                <p>Date: {{ $order->created_at->format('d-m-Y') }}</p>
                <p>Status: {{ $order->status }}</p>
                <p>Total: ${{ $order->total }}</p>
            </div>
        
            <div>
                <h3>Shipping Address</h3>
                @if ($orderDetails->address)
                    <p>{{ $orderDetails->address->first_name }} {{ $orderDetails->address->last_name }}</p>
                    <p>{{ $orderDetails->address->address }}</p>
                    <p>{{ $orderDetails->address->city }}</p>
                    <p>{{ $orderDetails->address->phone_number }}</p>
                @endif
            </div>
        
            <div>
                <h3>Order Items</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderDetails->items as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ $item->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
