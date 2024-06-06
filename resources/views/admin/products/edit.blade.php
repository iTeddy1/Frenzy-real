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
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" id="product" class="gap-2.5 flex">
            @csrf
            @method('PATCH')

            {{-- left form --}}
            <div
                class="w-[600px] p-2.5 rounded border border-zinc-200 flex-col justify-start items-start gap-2.5 inline-flex">
                <input class="self-stretch p-2.5 bg-white rounded border border-zinc-300 focus:outline-none"
                    placeholder="Product Name" id="name" name="name" value="{{ $product->name }}" />
                <div class="text-gray-400 text-base font-semibold leading-tight">Description</div>

                <textarea class="self-stretch h-[200px] p-2.5 rounded border border-zinc-300 focus:outline-none"
                    placeholder="Write something awesome..." id="description" name="description" value="{{ $product->description }}"></textarea>

                <div class="text-gray-400 text-base font-semibold leading-tight">Images</div>
                <img src="{{ $product->assets->first()->path ?? '' }}" alt="">
                <div class="w-full h-[200px] relative bg-black bg-opacity-5 rounded border border-zinc-200">
                    <label for="image" class="w-[103px] h-[101px] left-[49px] top-[49px] absolute cursor-pointer">
                        <input type="file" class="hidden" id="image" name="images">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-photo stroke-primary" width="100" height="100"
                            viewBox="0 0 24 24" stroke-width="1" class="" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 8h.01" />
                            <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                           <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                            <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                        </svg>
                    </label>
                    <div
                        class="left-[187px] top-[66px] absolute text-gray-800 text-2xl font-bold font-['Inter'] leading-normal tracking-wide">
                        Select files</div>
                    <div class="w-[455px] h-[31px] left-[186px] top-[102px] absolute">
                        <span class="text-black text-base font-normal leading-normal">
                            Drop file here or click
                        </span>
                        <label for="image" class="cursor-pointer">
                            <input type="file" class="hidden" id="image" name="images">
                            <span
                                class="text-green-600 text-base font-normal underline leading-normal">
                                browse
                            </span>
                        </label>
                        <span class="text-black text-base font-normal leading-normal">
                            thorough your machine
                        </span>
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
                    <a href="admin/products" class="px-4 py-4 rounded border ">
                        Cancel
                    </a>
                    <button
                        class="w-[340px] px-12 py-4 bg-green-600 rounded justify-center items-center gap-2.5 inline-flex text-neutral-50 text-base font-semibold leading-tight"
                        type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endsection
