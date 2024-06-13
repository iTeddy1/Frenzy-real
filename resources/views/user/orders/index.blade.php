@extends("layouts.app")

@section("content")
<div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
    <div>
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("home") }}
    </div>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-gray-900 mb-6">Your Orders</h1>
        @if($orders->isEmpty())
            <p class="text-gray-600">You have no orders.</p>
        @else
        <div class="overflow-x-auto">
            <table class="table min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Total</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="bg-white hover:bg-gray-100 transition duration-150">
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $order->id }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $order->address->first()->first_name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $order->address->first()->last_name}}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $order->created_at->format('d-m-Y') }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $order->status }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm text-gray-700">${{ $order->total }}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-sm">
                                <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-primary text-primary hover:text-primary-light">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        @endif
    </div>
</div>
@endsection