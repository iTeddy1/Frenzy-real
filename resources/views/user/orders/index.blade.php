@extends("layouts.app")

@section("content")
<div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
    <div>
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("home") }}
    </div>
    <div class="container">
        <h1>Your Orders</h1>
        @if($orders->isEmpty())
            <p class="text-gray-600">You have no orders.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            <td>{{ $order->status }}</td>
                            <td>${{ $order->total }}</td>
                            <td>
                                <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div>{{ $orders->links() }}</div>

    </div>
</div>
@endsection