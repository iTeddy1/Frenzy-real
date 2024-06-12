@extends("layouts.app")

@section("content")

<div class="transition-transform mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
        <div class="mb-10">
            <h1 class="text-2xl font-bold">Order Details</h1>
            {{-- {{ Breadcrumbs::render('products.show', $product) }} --}}
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
                <p>{{ $order->address->first()->first_name }} {{ $order->address->first()->last_name }}</p>
                <p>{{ $order->address->first()->address }}</p>
                <p>{{ $order->address->first()->city }}</p>
                <p>{{ $order->address->first()->phone_number }}</p>
            </div>
        
            <div>
                <h3>Order Items</h3>
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $item)
                            <tr>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ $item->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>

    </div>
@endsection
