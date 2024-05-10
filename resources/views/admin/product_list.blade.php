<x-layout>
    <x-slot:title>
        Product List
    </x-slot:title>
    <div class=" p-5 flex-col justify-start items-center gap-2.5 inline-flex">
        {{-- heading --}}
        <div class="self-stretch text-gray-800 text-2xl font-bold font-['Public Sans'] leading-normal tracking-wide">
            Product List</div>
        {{-- roadmap --}}
        <div class="flex self-stretch justify-between">
            <div class="self-stretch justify-start items-center gap-2.5 flex">
                <div class="opacity-50 text-black text-sm font-normal font-['Public Sans'] leading-[21px]">Dashboard
                </div>
                <div class="w-[13.19px] h-[0px] origin-top-left rotate-[117.05deg] opacity-50 border border-black"></div>
                <div class="text-gray-800 text-sm font-normal font-['Public Sans'] leading-[21px]">E-Commerce</div>
                <div class="w-[13.19px] h-[0px] origin-top-left rotate-[117.05deg] border border-black"></div>
                <div class="text-black text-sm font-normal font-['Public Sans'] leading-[21px]">List</div>
            </div>
            <a href="/products/create"
                class="px-5 py-2 bg-green-600 rounded-[10px] justify-center items-center gap-2.5 inline-flex text-neutral-50 text-base font-semibold font-['Public Sans'] leading-tight"
                type="submit" form="product">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus stroke-neutral-50"
                    width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                </svg>
                Create Product
            </a>
        </div>
        {{-- main --}}
        <div
            class="py-5 self-stretch bg-white rounded-[10px] shadow border border-divider flex-col justify-start items-start gap-2.5 flex">
            {{-- filter --}}
            <div class="self-stretch px-[15px] justify-center items-center gap-[15px] flex">
                <select
                    class="w-[200px] self-stretch p-2.5 rounded-[5px] border text-opacity-50 border-divider focus:outline-none justify-between items-center flex"
                    name="status" id="status">
                    <option value="">Status</option>
                    <option value="in_stock">In stock</option>
                    <option value="low_stock">Low stock</option>
                    <option value="out_of_stock">Out of stock</option>
                </select>
                <div class="relative flex grow shrink basis-0 self-stretch justify-start align-center">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class=" icon icon-tabler icon-tabler-search stroke-[#637381]" width="20" height="20"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                            <path d="M21 21l-6 -6" />
                        </svg>
                    </div>
                    <input
                        class="pl-10 grow shrink basis-0 self-stretch p-2.5 rounded-[5px] border border-divider focus:outline-none justify-start items-center gap-2.5 flex"
                        placeholder="Search..." />
                </div>
            </div>
            {{-- header --}}
            <div class="p-5 self-stretch bg-neutral-100 justify-start items-center gap-2.5 flex">
                <input type="checkbox">
                <div class="min-w-[500px] max-w-[500px] text-gray-400 text-base font-extrabold font-['Public Sans']">
                    Product</div>
                <div class="w-[200px] self-stretch text-gray-400 text-base font-bold font-['Public Sans']">
                    Create at
                </div>
                <div class="w-[150px] text-gray-400 text-base font-bold font-['Public Sans']">Price</div>
                <div class="w-[150px] self-stretch text-gray-400 text-base font-bold font-['Public Sans']">
                    Status
                </div>
            </div>
            {{-- product list --}}
            <div class="px-2.5 self-stretch border-b border-blue-100 flex-col justify-center items-start flex">
                @foreach ($products as $product)
                    {{-- {{ $product }} --}}
                    <div class="self-stretch p-2.5 bg-white justify-start items-center gap-2.5 flex">
                        <input type="checkbox" name="">
                        <a href="/products/edit/{{$product->id}}" class="min-w-[500px] max-w-[500px] h-[50px] justify-start items-center gap-2.5 flex">
                            <img class="w-[50px] h-[50px] rounded-[10px]" src="https://via.placeholder.com/50x50" />
                            <div class="grow h-[26px] text-gray-800 text-base font-semibold font-['Public Sans']">
                                {{ $product->name }}</div>
                        </a>
                        <div class="w-[200px] text-gray-800 text-base font-bold font-['Public Sans']">
                            {{ $product->created_at }}</div>
                        <div class="w-[150px] text-gray-800 text-base font-bold font-['Public Sans']">
                            ${{ $product->regular_price }}</div>
                        <div class="w-[150px] text-emerald-800 text-base font-bold font-['Public Sans']">
                            @if ($product->status === 'in_stock')
                                <div class="text-green-900">In Stock</div>
                            @elseif ($product->status === 'low_stock')
                                <div class="text-yello-500">Low Stock</div>
                            @else
                                <div class="text-red-800">Out of Stock</div>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{-- pagination --}}
                <div class="p-2.5 self-stretch grow shrink justify-center flex">
                    <div class="w-[154px] justify-center items-center gap-2.5 flex space space-x-5">
                        <i class="fa-solid fa-angle-left"></i>
                        <div
                            class="text-center text-black text-[15px] font-extrabold font-['Public Sans'] leading-snug flex justify-center align-center">
                            <span>1</span>
                        </div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
