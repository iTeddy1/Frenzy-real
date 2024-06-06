@extends("layouts.app")
<x-slot:title>Product Detail</x-slot:title>
@section("content")

<div class="transition-transform lg:mx-auto">
        <div class="mx-[25px] py-4">
            <h1 class="text-3xl font-bold mb-4">Product Details</h1>
            {{ Breadcrumbs::render('products.show', $product) }}
        </div>
        <!-- Process -- Product  -->
        <section class="mx-auto grid max-w-4xl grid-cols-1 items-start gap-12 lg:mx-[25px] lg:max-w-7xl lg:grid-cols-5">
            <!-- class="mx-auto flex flex-wrap overflow-hidden lg:w-full xl:justify-center" -->
            <section class="mb-5 w-full lg:col-span-3">
                <div class="">
                    <img class="w-full rounded object-cover object-center transition-opacity duration-300 ease-in-out lg:h-[650px]"
                        id="mainImage" src="{{ $product->assets->first()->path }}" alt="ecommerce" />
                </div>
                <div class="m-auto mt-3 flex h-[100px] w-[475px] justify-between">
                    <div
                        class="thumbnail inline-flex h-[100px] w-[100px] cursor-pointer items-center justify-center rounded bg-neutral-100">
                        <img class="h-[100px] w-[100px] rounded border-transparent" id="thumbnail-{{ $product->id }}"
                            src="{{ $product->assets->skip(1)->first()->path }}" />
                    </div>
                    <div
                        class="thumbnail inline-flex h-[100px] w-[100px] items-center justify-center rounded bg-neutral-100">
                        <img class="h-[100px] w-[100px] rounded border-transparent"
                            id="thumbnail-{{ $product->id }}" src="{{ $product->assets->skip(2)->first()->path }}" />
                    </div>
                    <div
                        class="thumbnail h-[100px]bg-neutral-100 inline-flex w-[100px] items-center justify-center rounded">
                        <img class="h-[100px] w-[100px] rounded border-transparent"
                            id="thumbnail-{{ $product->id }}" src="{{ $product->assets->skip(3)->first()->path }}" />
                    </div>
                    <div
                        class="thumbnail h-[100px]bg-neutral-100 inline-flex w-[100px] items-center justify-center rounded">
                        <img class="h-[100px] w-[100px] rounded border-transparent"
                            id="thumbnail-{{ $product->id }}" src="{{ $product->assets->skip(4)->first()->path }}" />
                    </div>
                </div>
            </section>

            <section class="lg:col-span-2 lg:py-6">
                <h1 class="mb-1 text-3xl font-medium">
                    {{ $product->name }}
                </h1>
                <div class="mb-4 flex">
                    <span class="flex items-center">
                        <svg class="h-4 w-4" fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="h-4 w-4 text-warning-light" fill="currentColor" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="h-4 w-4 text-warning-light" fill="currentColor" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="h-4 w-4 text-warning-light" fill="currentColor" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <svg class="h-4 w-4 text-warning-light" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <span class="ml-3 text-gray-600">4 Reviews</span>
                    </span>
                    <span class="ml-3 flex border-l-2 border-gray-200 py-2 pl-3">
                        <div class="relative h-4 w-8">
                            <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-zinc-300"></div>
                            <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-red-600"></div>
                            <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-blue-700"></div>
                        </div>
                    </span>
                </div>
                <div class="flex justify-between">
                    <span class="title-font text-2xl font-medium">{{ number_format($product->regular_price) }}₫</span>
                    @if($product->sale_price)  
                        <span class="title-font text-2xl font-medium text-gray-400 line-through">
                            {{ number_format($product->sale_price) }}₫
                        </span>
                    @endif

                </div>

                <p class="mt-4 leading-relaxed">
                    {{ $product->description }}
                </p>
                <div class="mt-8 flex justify-between">
                    <div class="inline-flex items-center justify-start gap-6">
                        <div class="text-xl font-normal leading-tight tracking-wide">
                            Select Size
                        </div>
                    </div>
                    <div class="inline-flex items-center justify-start gap-6">
                        <a class="text-xl font-normal leading-tight tracking-wide text-text-normal" href="#side-guide">
                            Size Guide
                        </a>
                    </div>
                </div>
                <form class="w-full" id="select-product" action="{{ route("user.cart.add") }}" method="POST">
                    @csrf
                    <div class="mb-5 mt-6 w-full pb-5">
                        <div class="mb-5 mt-6 w-full">
                            <input name="product_id" type="hidden" value="{{ $product->id }}">
                            <div class="mt-4">
                                <div class="sr-only">Choose a size</div>
                                <div class="grid grid-cols-4 gap-4 md:grid-cols-3 lg:grid-cols-4">
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <label
                                            class="flex h-12 cursor-not-allowed items-center justify-center rounded-md border text-base text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1"
                                            for="size-choice-0-label">
                                            <input class="peer sr-only" id="size-choice-0-label" name="size-choice"
                                                type="radio" required value="37" />
                                            <span>37</span>
                                            {{-- <span
                                            class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200"
                                            aria-hidden="true">
                                            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200"
                                                viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                <line x1="0" y1="100" x2="100" y2="0"
                                                    vector-effect="non-scaling-stroke" />
                                            </svg>
                                        </span> --}}
                                        </label>

                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-1-label" name="size-choice"
                                            type="radio" required value="38" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-1-label">
                                            <span>38</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>
                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-2-label" name="size-choice"
                                            type="radio" required value="38.5" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-2-label">
                                            <span>38.5</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>

                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-3-label" name="size-choice"
                                            type="radio" required value="39" />
                                        <label
                                            class="peer-checked:bg-red flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-3-label">
                                            <span>39</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>

                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-4-label" name="size-choice"
                                            type="radio" required value="39.5" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-4-label">
                                            <span>39.5</span>
                                            <!--
                                                            Active: "border", Not Active: "border-2"
                                                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                        -->

                                        </label>
                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-5-label" name="size-choice"
                                            type="radio" required value="40" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-5-label">
                                            <span>40</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>

                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-6-label" name="size-choice"
                                            type="radio" required value="41" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-6-label">
                                            <span>41</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>

                                    </div>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <div>
                                        <input class="peer sr-only" id="size-choice-7-label" name="size-choice"
                                            type="radio" required value="42" />
                                        <label
                                            class="flex h-12 cursor-pointer items-center justify-center rounded-md border bg-white text-base text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none peer-checked:border-active sm:flex-1"
                                            for="size-choice-7-label">
                                            <span>42</span>
                                            <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                            <span class="pointer-events-none absolute -inset-px rounded-md"
                                                aria-hidden="true"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center gap-4 lg:justify-between">
                        <button
                            class="flex h-12 items-center justify-center rounded border-0 bg-primary px-12 text-white hover:bg-primary-dark focus:outline-none"
                            form="select-product" type="submit">Add to Cart</button>

                        <label class="block text-sm font-medium" for="quantity"></label>
                        <div class="flex h-12 max-w-[8rem] items-center">
                            <button
                                class="h-12 rounded-s border border-divider p-3 hover:bg-active-light focus:outline-none focus:ring-2 focus:ring-gray-100"
                                id="decrement-button" type="button"
                                onclick="updateQuantity({{ $product->id }}, 'decrement')">
                                <svg class="text-black-900 h-3 w-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input
                                class="block h-12 w-full border border-x-0 border-divider text-center text-sm focus:outline-none"
                                id="quantity-input-{{ $product->id }}" name="quantity" type="text" value="1"
                                aria-describedby="helper-text-explanation" aria-valuenow="1" required />
                            <button
                                class="h-12 rounded-e border border-divider p-3 hover:bg-active-light focus:outline-none focus:ring-2 focus:ring-gray-100"
                                id="increment-button" type="button"
                                onclick="updateQuantity({{ $product->id }}, 'increment')">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                        {{-- <button
                            class="ml-4 inline-flex h-12 w-12 items-center justify-center rounded border border-divider p-0 text-active">
                            <svg class="h-5 w-5" fill="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                </path>
                            </svg>
                        </button> --}}
                    </div>
                </form>

            </section>
        </section>

        <!-- Feature Section  -->
        <section class="bg-white">
            <div class="sm:py-18 mx-auto max-w-screen-xl px-4 py-24 lg:px-6">
                <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
                    <div class="flex flex-col items-center">
                        <div
                            class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-[#abaeb1]">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary">
                                <svg class="icon icon-tabler icon-tabler-discount-check"
                                    xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                                    <path d="M9 12l2 2l4 -4" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">
                            100% Original
                        </h3>
                        <p class="text-center text-gray-500">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-[#abaeb1]">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary">
                                <svg class="icon icon-tabler icon-tabler-clock" xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 7v5l3 3" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">
                            10 Day Replacement
                        </h3>
                        <p class="text-center text-gray-500">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-[#abaeb1]">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary">
                                <svg class="icon icon-tabler icon-tabler-shield" xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">
                            1 Year Warranty
                        </h3>
                        <p class="text-center text-gray-500">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mainImage = document.getElementById('mainImage');
            const thumbnails = document.querySelectorAll('.thumbnail img');
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Update main image src
                    mainImage.style.opacity = 0; // Start transition
                    setTimeout(() => {
                        mainImage.src = this.src;
                        mainImage.style.opacity = 1; // End transition
                    }, 300); // Match the duration in CSS

                    // Remove active class from all thumbnails
                    thumbnails.forEach(img => img.classList.remove('active'));
                    // Add active class to clicked thumbnail
                    this.classList.add('active');
                });
            });

            // Set the first thumbnail as active on load
            if (thumbnails.length > 0) {
                thumbnails[0].classList.add('active');
            }
        });

        function updateQuantity(itemId, operation) {
            let quantityInput = document.getElementById('quantity-input-' + itemId);
            let currentQuantity = +(quantityInput.value);

            if (operation === 'increment') {
                quantityInput.value = currentQuantity + 1;
            } else if (operation === 'decrement' && currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        }
    </script>
    <style>
        .thumbnail img.active {
            border: 2px solid #00AC55;
        }

        #mainImage {
            transition: opacity 0.3s ease-in-out;
        }
    </style>
@endsection
