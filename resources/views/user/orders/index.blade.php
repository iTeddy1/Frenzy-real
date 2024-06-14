@extends("layouts.app")

@section("content")
<div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
    <div>
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("user.orders") }}
    </div>
    <div class="mt-10">
        @if($orders->isEmpty())
            <p class="text-gray-600">You have no orders.</p>
        @else
        <div class="flex flex-col items-start justify-start self-stretch rounded border border-divider bg-white py-5 shadow">
            <div class="w-full overflow-x-auto">
                <table class="w-full overflow-x-auto">
                    {{-- header --}}
                    <thead>
                        <tr>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                                <input type="checkbox">
                            </td>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                                <div class="text-base font-extrabold text-gray-400">
                                    Order ID</div>
                            </td>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                                <div class="self-stretch text-base font-bold text-gray-400">
                                    Payment Method
                                </div>
                            </td>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                                <div class="text-base font-bold text-gray-400">Total</div>
                            </td>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                                <div class="text-base font-bold text-gray-400">Status</div>
                            </td>
                            <td class="px-6 py-4 text-center font-bold text-gray-600">
                                <div class="self-stretch text-base font-bold text-gray-400">
                                    Order Date
                                </div>
                            </td>
                            <td class="px-6 py-4 text-left font-bold text-gray-600">
                            </td>
                        </tr>
                    </thead>
                    {{-- order list --}}
                    <tbody id="product-list">
                        @foreach ($orders as $order)
                        <tr>
                            <td class="border-b border-divider px-6 py-4">
                                <input type="checkbox">
                            </td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                <a class="flex gap-2.5" href="{{route('admin.orders.show', $order)}}">
                                    <p class="grow truncate text-base text-gray-800">
                                        {{ $order->id }}
                                    </p>
                                </a>
                            </td>

                            <td class="border-b border-gray-200 px-6 py-4">
                                {{ $order->payment_method === 'cod' ? 'Cash on deliver' : 'Pay with Momo ATM'}}</td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                {{ number_format($order->total) }}₫</td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                <x-order-status :status="$order['status']"/> 
                            </td>
                            <td class="border-b border-gray-200 px-6 py-4 text-center">
                                {{ $order->created_at->format('d M Y') }}</td>
                            </td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- pagination --}}
            <div class="w-full px-4">{{ $orders->links() }}</div>
        </div>
        @endif
    </div>
</div>
@endsection

