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
    <div class="mb-4 w-full">
        <form method="GET" action="{{ route('admin.orders.index') }}" class="flex items-center gap-4">
            <div class='p-2 border rounded-lg bg-white'>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}" class="mt-1 block w-full rounded-md border-text-dark focus:ring-text-dark p-2 shadow-sm">
            </div>
            <div class='p-2 border rounded-lg bg-white'>
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}" class="mt-1 block w-full rounded-md border-text-dark focus:ring-text-dark p-2 shadow-sm">
            </div>
            <div class='p-2 border rounded-lg bg-white'>
                <label for="min_total" class="block text-sm font-medium text-gray-700">Min Total</label>
                <input type="number" id="min_total" name="min_total" value="{{ request('min_total') }}" class="mt-1 block w-full rounded-md border-text-dark focus:ring-text-dark p-2 shadow-sm">
            </div>
            <div class='p-2 border rounded-lg bg-white'>
                <label for="max_total" class="block text-sm font-medium text-gray-700">Max Total</label>
                <input type="number" id="max_total" name="max_total" value="{{ request('max_total') }}" class="mt-1 block w-full rounded-md border-text-dark focus:ring-text-dark p-2 shadow-sm">
            </div>
            <button type="submit" class="btn btn-primary mt-6">
                Filter
            </button>
        </form>
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
                        <td class="border-b border-gray-200 px-6 py-4" x-data="{ showModal: false, deleteUrl: '' }">
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <svg class="icon icon-tabler icon-tabler-dots-vertical" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                    <x-dropdown-link href="#" @click.prevent="
                                        deleteUrl = '{{ route('admin.orders.destroy', $order) }}';
                                        showModal = true;">
                                        Delete
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>

                            <!-- Confirm Delete Modal -->
                            <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95">
                                <div class="bg-white rounded-lg shadow-lg w-96">
                                    <div class="p-4">
                                        <h5 class="text-lg font-bold">Confirm Delete</h5>
                                        <p>Are you sure you want to delete this order?</p>
                                    </div>
                                    <div class="flex justify-end p-4 border-t">
                                        <button type="button" class="btn btn-secondary mr-2"
                                            @click="showModal = false">Cancel</button>
                                        <form id="deleteOrderForm" :action="deleteUrl" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit" class="btn btn-danger">Delete</x-danger-button>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
