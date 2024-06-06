@extends("layouts.admin")

@section("content")
    <x-slot:title>
        Create Product
    </x-slot:title>
    <div class="flex flex-col items-start justify-start gap-2.5 p-5">
        {{-- heading --}}
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Create a new product</div>
        {{-- road map --}}
        {{ Breadcrumbs::render("admin.products.create") }}

        {{-- form --}}
        <form class="flex flex-col md:flex-row w-full gap-6"  action="{{ route("admin.products.index") }}" method="POST"  enctype="multipart/form-data">
            @csrf
            {{-- left form --}}
            <div
                class="flex flex-col lg:w-3/4 items-start justify-start gap-2.5 rounded border border-zinc-200 p-2.5">
                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                    name="name" placeholder="Product Name" />
                <div class="text-base font-semibold leading-tight text-gray-400">Description</div>
                <textarea class="h-[200px] self-stretch rounded border border-zinc-300 p-2.5 focus:outline-none" id="description"
                    name="description" placeholder="Write something awesome..."></textarea>
                <div class="text-base font-semibold leading-tight text-gray-400">Images</div>
                {{-- <x-forms.input-error :messages="$errors->get('image')" class="mt-2" /> --}}
                <div class="flex flex-col w-full items-center justify-center">
                    <label
                        class="flex bg-gray-800 hover:bg-gray-700 text-white text-base px-5 py-3 outline-none rounded w-max cursor-pointer mx-auto "
                        for="images">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 fill-white inline" viewBox="0 0 32 32">
                            <path
                              d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                              data-original="#000000" />
                            <path
                              d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                              data-original="#000000" />
                          </svg>
                          Upload
                    </label>
                        <input class="hidden" id="images" name="assets[]" type="file" min="5" multiple/>
                    <div class="mb-3 w-full flex justify-center flex-col">                    
                        <img class="" id="image-preview" src="https://cdn.dribbble.com/users/4438388/screenshots/15854247/media/0cd6be830e32f80192d496e50cfa9dbc.jpg?resize=1000x750&vertical=center"
                              alt="preview image" style="max-height: 2fff50px;">
                    </div>
                </div>
            </div>
            {{-- right form --}}
            <div
                class="flex flex-col items-start gap-[18px] self-stretch rounded border border-zinc-200 bg-white px-[15px] py-[19px]">
                <div class="text-base font-semibold leading-tight text-gray-400">Quantity</div>
                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" name="quantity"
                    type="number" min="0" />

                <div class="flex items-center justify-center gap-2.5">
                    <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                        Color
                    </label>
                    <input class="h-6 w-6 border" id="colors" name="color" type="color">
                </div>
                <div class="self-stretch text-base font-semibold leading-tight text-gray-400">
                    Gender
                </div>
                <div class="inline-flex items-center justify-start gap-5 self-stretch">
                    <div class="flex items-center justify-center gap-2.5">
                        <input class="h-6 w-6 rounded-full border border-green-600" name="gender" type="radio"
                            value="men">
                        <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="gender">
                            Men
                        </label>
                    </div>
                    <div class="flex items-center justify-center gap-2.5">
                        <input class="h-6 w-6 rounded-full border border-green-600" name="gender" type="radio"
                            value="women">
                        <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="gender">
                            Women
                        </label>
                    </div>
                    <div class="flex items-center justify-center gap-2.5">
                        <input class="h-6 w-6 rounded-full border border-green-600" name="gender" type="radio"
                            value="kids">
                        <label class="text-base font-semibold leading-tight text-black text-opacity-50" for="gender">
                            Kids
                        </label>
                    </div>
                </div>
                <div class="text-base font-semibold leading-tight text-gray-400">Regular Price</div>
                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                    name="regular_price" type="number" min="0" />
                <div class="text-base font-semibold leading-tight text-gray-400">Sale Price</div>
                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                    name="sale_price" type="number" min="0" />
                <button
                    class="inline-flex w-[340px] items-center justify-center gap-2.5 rounded bg-green-600 px-12 py-4 text-base font-semibold leading-tight text-neutral-50"
                    type="submit">
                    Create Product
                </button>
            </div>
        </form>
    </div>
@endsection

