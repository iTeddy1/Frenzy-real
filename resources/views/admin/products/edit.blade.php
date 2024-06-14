@extends("layouts.admin")

@section("content")
    <div class="inline-flex flex-col items-start justify-between gap-2.5 p-5">
        {{-- heading --}}
        <div class="mb-10">
            <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
                Edit product
                {{-- road map --}}
            </div>
            {{ Breadcrumbs::render("admin.products.edit", $product) }}
        </div>

        {{-- form --}}
        <form class="flex gap-2.5" id="product" action="{{ route("admin.products.update", $product->id) }}" method="POST">
            @csrf
            @method("PATCH")

            {{-- left form --}}
            <div
                class="inline-flex w-[600px] flex-col items-start justify-start gap-2.5 rounded border border-zinc-200 p-2.5">
                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                    name="name" value="{{ $product->name }}" placeholder="Product Name" />
                <div class="text-base font-semibold leading-tight text-gray-400">Description</div>

                <textarea class="h-[200px] self-stretch rounded border border-zinc-300 p-2.5 focus:outline-none" id="description"
                    name="description" value="{{ $product->description }}" placeholder="Write something awesome..."></textarea>

                <div class="text-base font-semibold leading-tight text-gray-400">Images</div>
                <div class="">
                    @foreach ($product->assets as $index => $asset)
                        @if ($index == 4)
                        @break
                    @endif
                    <div
                        class="thumbnail inline-flex h-[100px] w-[100px] cursor-pointer items-center justify-center rounded bg-neutral-100">
                        <img class="rounded border-transparent" id="thumbnail-{{ $product->id }}"
                            src="{{ $asset->path }}" alt="{{ $asset->filename }}" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- right form --}}
        <div
            class="inline-flex flex-col items-start gap-[17px] self-stretch rounded border border-zinc-200 bg-white px-[15px] py-[19px]">
            <div class="text-base font-semibold leading-tight text-gray-400">Quantity</div>
            <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" name="quantity"
                type="number" value="{{ $product->quantity }}" min="0" />

            <div class="flex items-center justify-center gap-2.5">
                <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                    Color
                </label>
                <input class="h-6 w-6 border" id="colors" name="color" type="color"
                    value="{{ $product->colorway ?? "" }}">
            </div>

            <div class="self-stretch text-base font-semibold leading-tight text-gray-400">
                Gender
            </div>
            <div class="inline-flex items-center justify-start gap-5 self-stretch">
                <div class="flex items-center justify-center gap-2.5">
                    <input class="h-6 w-6 rounded-full border border-green-600" id="men" name="gender"
                        type="radio" value="men" {{ old("men", $product->gender) ? "checked" : "" }}>
                    <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="men">
                        Men
                    </label>
                </div>
                <div class="flex items-center justify-center gap-2.5">
                    <input class="h-6 w-6 rounded-full border border-green-600" id="women" name="gender"
                        type="radio" value="women" {{ old("women", $product->gender) ? "checked" : "" }}>
                    <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="women">
                        Women
                    </label>
                </div>
                <div class="flex items-center justify-center gap-2.5">
                    <input class="h-6 w-6 rounded-full border border-green-600" id="kids" name="gender"
                        type="radio" value="kids" {{ old("kids", $product->gender) ? "checked" : "" }}>
                    <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="kids">
                        Kids
                    </label>
                </div>
            </div>

            <div class="text-base font-semibold leading-tight text-gray-400">Regular Price
            </div>
            <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                name="regular_price" type="number" value="{{ $product->regular_price }}" min="0" />
            <div class="text-base font-semibold leading-tight text-gray-400">Sale Price</div>
            <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                name="sale_price" type="number" value="{{ $product->sale_price }}" min="0" />
            <div class="flex gap-3 self-stretch">
                <a class="rounded border px-4 py-4" href="{{ route('admin.products.index')}}">
                    Cancel
                </a>
                <button
                    class="inline-flex w-[340px] items-center justify-center gap-2.5 rounded bg-green-600 px-12 py-4 text-base font-semibold leading-tight text-neutral-50"
                    type="submit">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
