<x-layout>
    <x-slot:title>
        Product List
    </x-slot:title>

    <div class="inline-flex flex-col items-center justify-start gap-2.5 p-5">
        {{-- heading --}}
        <div class="font-['Public Sans'] self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Product List</div>
        {{-- roadmap --}}
        {{ Breadcrumbs::render("products") }}

        {{-- main --}}
        <div
            class="flex flex-col items-start justify-start gap-2.5 self-stretch rounded-[10px] border border-divider bg-white py-5 shadow">
            {{-- filter --}}
            <div class="flex items-center justify-center gap-[15px] self-stretch px-[15px]">
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
            <table class="w-full table-fixed">
                {{-- header --}}
                <thead>
                    <tr >
                        <td class="w-[30px] py-4 px-6 text-left text-gray-600 font-bold">
                            <input type="checkbox">
                        </td>

                        <td class="w-2/5 py-4 px-6 text-left text-gray-600 font-bold">
                            <div class="font-['Public Sans'] text-base font-extrabold text-gray-400 ">
                                Product</div>
                        </td>

                        <td class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold">
                            <div class="font-['Public Sans'] self-stretch text-base font-bold text-gray-400">
                                Create at
                            </div>
                        </td>

                        <td class="w-[15%] py-4 px-6 text-left text-gray-600 font-bold">
                            <div class="font-['Public Sans'] text-base font-bold text-gray-400">Price</div>
                        </td>

                        <td class="w-1/4 py-4 px-6 text-center text-gray-600 font-bold">

                            <div class="font-['Public Sans'] self-stretch text-base font-bold text-gray-400">
                                Status
                            </div>
                        </td>
                        <td class="w-[40px] py-4 px-6 text-left text-gray-600 font-bold"></td>
                    </tr>
                </thead>
                {{-- product list --}}
                <tbody class="">
                    @foreach ($products as $product)
                        {{-- {{ $product }} --}}
                        <tr class="">
                            <td class="border-b border-divider px-6 py-4">
                                <input name="" type="checkbox">
                            </td>
                            <td class="border-b border-gray-200 px-6 py-4 w-2/5">
                                <a class="flex h-[50px] gap-2.5"
                                    href="/products/show/{{ $product->id }}">
                                    <img class="h-[50px] w-[50px] rounded-[10px]"
                                        src="{{ $product->assets->first()->path }}" />
                                    <p
                                        class="font-['Public Sans'] h-[26px] grow text-base font-semibold text-gray-800 truncate">
                                        {{ $product->name }}
                                    </p>
                                </a>
                            </td>

                            <td class=" border-b border-gray-200 px-6 py-4">
                                {{ $product->created_at }}</td>
                            <td class="border-b border-gray-200 px-6 py-4">
                                ${{ $product->regular_price }}
                            <td class="border-b border-gray-200 px-6 py-4 text-center">
                                @if ($product->status === "in_stock")
                                    <span class="rounded-full bg-green-500 px-2 py-1 text-xs text-green-900">In
                                        Stock</span>
                                @elseif ($product->status === "low_stock")
                                    <span class="text-yello-500 rounded-full bg-yellow-500 px-2 py-1 text-xs">Low
                                        Stock</span>
                                @else
                                    <span class="flex rounded-full bg-red-500 px-2 py-1 text-xs text-red-800">Out of
                                        Stock</span>
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
                                        <x-dropdown-link  :href="route('products.edit', $product)">
                                            Edit
                                        </x-dropdown-link>
                                        <x-dropdown-link  :href="route('products.show', $product)">
                                            Delete
                                        </x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                    @endforeach
        </div>
        {{-- pagination --}}
        
    </div>
    </table>

    </div>
</x-layout>
