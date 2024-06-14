@extends("layouts.app")

@section("content")

<div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
    <div class="mb-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Order Details</h1>
        {{ Breadcrumbs::render('user.orders.show', $order) }}
    </div>
    <div class="container mx-auto p-6 bg-white shadow-md rounded">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-700">Order ID: {{ $order->id }}</h2>
            <p class="text-gray-600">Date: {{ $order->created_at->format('d-m-Y') }}</p>
            <p class="text-gray-600">Status: <span class="font-medium">{{ $order->status }}</span></p>
            <p class="text-gray-600">Total: <span class="font-medium">{{ number_format($order->total) }}₫</span></p>
        </div>
    
        <div class="mb-6">
            <h3 class="text-lg font-semibold text-gray-700 ">Shipping Address</h3>
            @if ($orderDetails->address)
                <p class="text-gray-600">Customer name: {{ $orderDetails->address->first_name }} {{ $orderDetails->address->last_name }}</p>
                <p class="text-gray-600">
                    Address: {{$orderDetails->address['ward'] . ', ' . $orderDetails->address['district'] . ', ' . $orderDetails->address['city']}}
                </p>
                <p class="text-gray-600">Phone number: {{ $orderDetails->address->phone_number }}</p>
            @endif
        </div>
    
        <div>
            <h3 class="text-lg font-semibold text-gray-700">Order Items</h3>
            <div class="overflow-x-auto rounded">
                <table class="min-w-full border border-gray-200">
                    <thead class="rounded">
                        <tr class="w-full bg-gray-100 border-b border-gray-200 ">
                            <th class="py-2 px-4 text-left text-gray-600 font-semibold">Product</th>
                            <th class="py-2 px-4 text-left text-gray-600 font-semibold">Quantity</th>
                            <th class="py-2 px-4 text-left text-gray-600 font-semibold">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orderDetails->items as $item)
                            <tr class="w-full border-b border-gray-200">
                                <td class="py-2 px-4 text-gray-700">
                                    <a class="flex h-[50px] gap-2.5" href="{{ route('products.show', $item->product)}}">
                                        <img class="h-[50px] w-[50px] rounded" alt="{{ $item->product->name }}"
                                        src="{{$item->product->assets->first()->path }}" />
                                        <p class="h-[26px] grow truncate text-base font-semibold text-gray-800">
                                            {{ $item->product->name }}
                                        </p>
                                    </a>
                                </td>
                                <td class="py-2 px-4 text-gray-700">{{ $item->quantity }}</td>
                                <td class="py-2 px-4 text-gray-700">{{ number_format($item->price) }}₫</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
