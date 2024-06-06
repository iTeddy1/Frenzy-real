@extends('layouts.admin')
@section('content')
<x-slot:title>
        Modify Product
    </x-slot:title>
    <div class="p-5 flex-col justify-start items-start gap-2.5 inline-flex">
        {{-- heading --}}
        <div class="self-stretch text-gray-800 text-2xl font-bold leading-normal tracking-wide">
            Modify product</div>
        {{-- road map --}}
        {{ Breadcrumbs::render('admin.products.edit', $product) }}

        {{-- form --}}
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" id="product" class="gap-2.5 flex"       enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            {{-- left form --}}
            <div
                class="w-[600px] p-2.5 rounded-[10px] border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                <input class="self-stretch p-2.5 bg-white rounded border border-zinc-300 focus:outline-none"
                    placeholder="Product Name" id="name" name="name" value="{{ $product->name }}" />
                <div class="text-gray-400 text-base font-semibold leading-tight">Description</div>

                <textarea class="self-stretch h-[200px] p-2.5 rounded border border-zinc-300 focus:outline-none"
                    placeholder="Write something awesome..." id="description" name="description" value="{{ $product->description }}"></textarea>

                <div class="text-gray-400 text-base font-semibold leading-tight">Images</div>
                <div>
                    <div>
                        <label for="">Update Images</label>
                        <input type="file" name="assets[]" id="" multiple>
                    </div>
                    <div class="flex">
                        @if($product->assets)
                            @foreach ($product->assets as $asset)
                            <div>
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                <img src="{{ $asset->path }}" width="80" height="80" alt="">
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            {{-- right form --}}
            <div
                class="self-stretch px-[15px] py-[19px] bg-white rounded border border-zinc-200 flex-col items-start gap-[17px] inline-flex">
                <div class="text-gray-400 text-base font-semibold leading-tight">Quantity</div>
                <input type="number"
                    class="self-stretch p-2.5 bg-white rounded border border-zinc-300 focus:outline-none"
                    name="quantity" min="1" value="{{ $product->quantity }}" />

                <div class="justify-center items-center gap-2.5 flex">
                    <label for="color"
                        class="text-black text-opacity-50 text-base font-semibold leading-tight">
                        Color
                    </label>
                    <input type="color" id="colors" class="w-6 h-6 border" name="color"
                        value="{{ $product->colorway ?? '' }}">
                </div>

                <div class="self-stretch text-gray-400 text-base font-semibold leading-tight">
                    Gender
                </div>
                <div class="self-stretch justify-start items-center gap-5 inline-flex">
                    <div class="justify-center items-center gap-2.5 flex">
                        <input type="radio" id="men" name="gender" class="w-6 h-6 rounded-full border border-green-600" value="men"   {{ old('men', $product->gender) ? 'checked' : '' }}>
                        <label for="men" class="text-black text-opacity-50 text-base font-semibold leading-tight">
                            Men
                        </label>
                    </div>
                    <div class="justify-center items-center gap-2.5 flex">
                        <input type="radio" id="women" name="gender" class="w-6 h-6 rounded-full border border-green-600" value="women"   {{ old('women', $product->gender) ? 'checked' : '' }}>
                        <label for="women" class="text-black text-opacity-50 text-base font-semibold leading-tight">
                            Women
                        </label>
                    </div>
                    <div class="justify-center items-center gap-2.5 flex">
                        <input type="radio" id="kids" name="gender" class="w-6 h-6 rounded-full border border-green-600" value="kids"   {{ old('kids', $product->gender) ? 'checked' : '' }}>
                        <label for="kids" class="text-black text-opacity-50 text-base font-semibold leading-tight">
                            Kids
                        </label>
                    </div>
                </div>

                <div class="text-gray-400 text-base font-semibold leading-tight">Regular Price
                </div>
                <input type="number"
                    class="self-stretch p-2.5 bg-white rounded border border-zinc-300 focus:outline-none"
                    name="regular_price" min="0" value="{{ $product->regular_price }}" />
                <div class="text-gray-400 text-base font-semibold leading-tight">Sale Price</div>
                <input type="number"
                    class="self-stretch p-2.5 bg-white rounded border border-zinc-300 focus:outline-none"
                    name="sale_price" min="0" value="{{ $product->sale_price }}" />
                <div class="flex self-stretch gap-3">
                    <a href="admin/products" class="px-4 py-4 rounded-[10px] border ">
                        Cancel
                    </a>
                    <button
                        class="w-[340px] px-12 py-4 bg-green-600 rounded-[10px] justify-center items-center gap-2.5 inline-flex text-neutral-50 text-base font-semibold leading-tight"
                        type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endsection
