@extends('layouts.admin')
<x-slot:title>
    Product List
</x-slot:title>
@section('content')
<div class="flex flex-col items-center justify-start gap-2.5 p-5">
    {{-- heading --}}
    <div class="flex items-center justify-between w-full ">
        <div>
            <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
                Product List</div>
            {{-- roadmap --}}
            {{ Breadcrumbs::render("admin.products") }}
        </div>
        <div><a href="products/create">New Product</a></div>
    </div>

    <div class="w-full grid gap-6 md:grid-cols-3 mb-8">
        <div class="p-6 border rounded bg-white">
            <div>
                <span class="font-medium">Total Products</span>
            </div>
            <div class="text-3xl font-semibold">{{$products->total()}}</div>
        </div>

        <div class="p-6 border rounded bg-white">
            <div>
                <span class="font-medium">Product Inventory</span>
            </div>
            <div class="text-3xl font-semibold">{{$totalQuantity}}</div>
        </div>

        <div class="p-6 border rounded bg-white">
            <div>
                <span class="font-medium overflow-auto">Average Price</span>
            </div>
            <div class="text-3xl font-semibold">{{number_format($averagePrice, 2)}}</div>
        </div>
    </div>

    {{-- main --}}
    <div
        class="flex flex-col items-start justify-start gap-2.5 self-stretch rounded border border-divider bg-white py-5 shadow">
        {{-- filter --}}
        <div class="flex items-center justify-center gap-4 self-stretch px-4">
            <select
                class="flex w-[200px] items-center justify-between self-stretch rounded-small border border-divider p-2.5 text-opacity-50 focus:outline-none"
                id="status" name="status">
                <option value="">Status</option>
                <option value="in_stock">In stock</option>
                <option value="low_stock">Low stock</option>
                <option value="out_of_stock">Out of stock</option>
            </select>
            <div class="align-center relative flex shrink grow basis-0 justify-start self-stretch">

                <form class="ml-auto" action='{{route("admin.products.index")}}' method="GET">
                    <label class="sr-only mb-2 text-sm font-medium text-text-dark"
                        for="admin-search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-text-normal" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-text-normal focus:border-divider focus:ring-primary "
                            id="admin-search" name="query" type="search" placeholder="Search..." required />

                    </div>
                </form>
            </div>
        </div>
        <div class="w-full overflow-x-auto">
            <table class="w-full overflow-x-auto">
                {{-- header --}}
                <thead>
                    <tr>
                        <td class="w-[30px] px-6 py-4 text-left font-bold text-gray-600">
                            <input type="checkbox">
                        </td>

                        <td class="w-2/5 px-6 py-4 text-left font-bold text-gray-600">
                            <div class="text-base font-extrabold text-gray-400">
                                Product</div>
                        </td>

                        <td class="w-1/4 px-6 py-4 text-left font-bold text-gray-600">
                            <div class="self-stretch text-base font-bold text-gray-400">
                                Create at
                            </div>
                        </td>

                        <td class="w-[15%] px-6 py-4 text-left font-bold text-gray-600">
                            <div class="text-base font-bold text-gray-400">Price</div>
                        </td>
                        <td class="px-6 py-4 text-left font-bold text-gray-600">
                            Quantity
                        </td>
                        <td class="px-6 py-4 text-center font-bold text-gray-600">
                            <div class="self-stretch text-base font-bold text-gray-400">
                                Visibility
                            </div>
                        </td>
                        <td class="w-[40px] px-6 py-4 text-left font-bold text-gray-600"></td>
                    </tr>
                </thead>
                {{-- product list --}}
                <tbody id="product-list">
                    @foreach ($products as $product)
                    {{-- {{ $product }} --}}
                    <tr>
                        <td class="border-b border-divider px-6 py-4">
                            <input name="" type="checkbox">
                        </td>
                        <td class="w-2/5 border-b border-gray-200 px-6 py-4">
                            <a class="flex h-[50px] gap-2.5" href="{{route('admin.products.show', $product->id)}}">
                                <img class="h-[50px] w-[50px] rounded" alt="{{ $product->name }}"
                                src="{{$product->assets->first()->path }}" />
                                {{-- {{str_contains($product->assets->first()->path, 'https') ? $product->assets->first()->path :  url('storage/assets/product/' . $product->assets->first()->path) }} --}}
                                <p class="h-[26px] grow truncate text-base font-semibold text-gray-800">
                                    {{ $product->name }}
                                </p>
                            </a>
                        </td>

                        <td class="border-b border-gray-200 px-6 py-4">
                            {{ $product->created_at }}</td>
                        <td class="border-b border-gray-200 px-6 py-4">
                            {{ number_format($product->regular_price) }}₫
                        <td class="border-b border-gray-200 px-6 py-4">
                            {{ $product->quantity ?? 0}}
                        <td class="border-b border-gray-200 px-6 py-4 text-center">
                            @if ($product->quantity !== 0)
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FF5630" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M10 10l4 4m0 -4l-4 4" />
                              </svg>
                            @endif
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
                                    <x-dropdown-link :href="route('admin.products.edit', $product)">
                                        Edit
                                    </x-dropdown-link>
                                    <form id='delete_form' method="POST" action="{{ route('admin.products.destroy', ['product' => $product->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-dropdown-link :href="route('admin.products.destroy', $product)" 
                                        onclick="event.preventDefault();
                                        if(confirm('Are you sure you want to delete this product?')) this.closest('form').submit();">
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
    </div>
    {{-- pagination --}}

</div>
<div class="w-full px-4">{{ $products->links() }}</div>

@endsection
