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
                {{ Breadcrumbs::render("products") }}
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
                    <span class="font-medium">Average Price</span>
                </div>
                <div class="text-3xl font-semibold">{{$averagePrice}}</div>
            </div>
        </div>

        {{-- main --}}
        <div
            class="flex flex-col items-start justify-start gap-2.5 self-stretch rounded-[10px] border border-divider bg-white py-5 shadow">
            {{-- filter --}}
            <div class="flex items-center justify-center gap-4 self-stretch px-4">
                <select
                    class="flex w-[200px] items-center justify-between self-stretch rounded-[5px] border border-divider p-2.5 text-opacity-50 focus:outline-none"
                    id="status" name="status">
                    <option value="">Status</option>
                    <option value="in_stock">In stock</option>
                    <option value="low_stock">Low stock</option>
                    <option value="out_of_stock">Out of stock</option>
                </select>
                <div class="align-center relative flex shrink grow basis-0 justify-start self-stretch">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="icon icon-tabler icon-tabler-search stroke-[#637381]"
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </div>
                    <input
                        class="flex shrink grow basis-0 items-center justify-start gap-2.5 self-stretch rounded-[5px] border border-divider p-2.5 pl-10 focus:outline-none"
                        placeholder="Search..." />
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
                <tbody >
                    @foreach ($products as $product)
                        {{-- {{ $product }} --}}
                        <tr class="">
                            <td class="border-b border-divider px-6 py-4">
                                <input name="" type="checkbox">
                            </td>
                            <td class="w-2/5 border-b border-gray-200 px-6 py-4">
                                <a class="flex h-[50px] gap-2.5" href="{{route('admin.products.show', $product->id)}}">
                                    <img class="h-[50px] w-[50px] rounded-[10px]"
                                        src="{{ $product->assets->first()->path }}" />
                                    <p
                                        class="h-[26px] grow truncate text-base font-semibold text-gray-800">
                                        {{ $product->name }}
                                    </p>
                                </a>
                            </td>

                            <td class="border-b border-gray-200 px-6 py-4">
                                {{ $product->created_at }}</td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                ${{ $product->regular_price }}
                            <td class="border-b border-gray-200 px-6 py-4">
                                {{ $product->quantity ?? 0}}
                            <td class="border-b border-gray-200 px-6 py-4 text-center">
                                @if ($product->quantity !== 0)
                                <svg style="--c-400:var(--success-400);--c-500:var(--success-500);" class="fi-ta-icon-item fi-ta-icon-item-size-lg h-6 w-6 fi-color-custom text-custom-500 dark:text-custom-400 fi-color-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                  </svg>
                                @else
                                <svg style="--c-400:var(--danger-400);--c-500:var(--danger-500);" class="fi-ta-icon-item fi-ta-icon-item-size-lg h-6 w-6 fi-color-custom text-custom-500 dark:text-custom-400 fi-color-danger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                  </svg>
                                @endif
                            </td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <svg class="icon icon-tabler icon-tabler-dots-vertical"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                            <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                        </svg>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link  :href="route('admin.products.edit', $product)">
                                            Edit
                                        </x-dropdown-link>
                                        <x-dropdown-link x-on:click="$dispatch('open-modal', 'myModal')"  >
                                            Delete
                                        </x-dropdown-link>
                                    </x-slot>
                                                                      
                                </x-dropdown>
                                <x-modal name="myModal" maxWidth="2xl">
                                    <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Delete product
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                Your modal content goes here.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                       <button form="delete_form" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Confirm
                                        </button>
                                        <button x-on:click="$dispatch('close-modal', 'myModal')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                            Cancel
                                        </button>
                                    </div>
                                </x-modal>
                                
                            </td>
                        </tr>
                        <form id='delete_form' method="POST" action="{{ route('admin.products.destroy', ['product' => $product->id]) }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                </div>
                </div>
        {{-- pagination --}}

    </div>
    </table>
    <div class="w-full px-4">{{ $products->links() }}</div>

    </div>
@endsection
