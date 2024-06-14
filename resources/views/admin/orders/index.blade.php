@extends('layouts.admin')

@section('content')
<div class="flex flex-col items-center justify-start gap-2.5 p-5">
    <div class="flex items-center justify-between w-full mb-10">
        <div class="">
            <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800 ">
                Order List
            </div>
            {{-- roadmap --}}
            {{ Breadcrumbs::render("admin.orders") }}
        </div>
    </div>
    {{-- main --}}
    <div
        class="flex flex-col items-start justify-start self-stretch rounded border border-divider bg-white py-5 shadow">
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
                                ID</div>
                        </td>

                        <td class="px-6 py-4 text-left font-bold text-gray-600">
                            <div class="self-stretch text-base font-bold text-gray-400">
                                Customer
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
                        <td class="px-6 py-4 text-left font-bold text-gray-600"></td>
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
                            {{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                        <td class="border-b border-gray-200 px-6 py-4">
                            {{ number_format($order->total) }}₫</td>
                        <td class="border-b border-gray-200 px-6 py-4">
                            <x-order-status :status="$order['status']"/> 
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4 text-center">
                            {{ $order->created_at->format('d M Y') }}</td>
                        
                        </td>
                        <td class="border-b border-gray-200 px-6 py-4">
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <svg class="icon icon-tabler icon-tabler-dots-vertical"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    </svg>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('admin.orders.edit', $order)">
                                        Edit
                                    </x-dropdown-link>
                                    <form id='delete_form' method="POST" action="{{ route('admin.orders.destroy', ['order' => $order->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-dropdown-link :href="route('admin.orders.destroy', $order)" 
                                        onclick="event.preventDefault();
                                        if(confirm('Are you sure you want to delete this order ?')) this.closest('form').submit();">
                                            Delete
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>

                            </x-dropdown>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- pagination --}}
        <div class="w-full px-4">{{ $orders->links() }}</div>
    </div>
</div>
@endsection
