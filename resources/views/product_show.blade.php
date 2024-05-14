<x-layout>
    <x-slot:title>Product Detail</x-slot:title>
    <div class="lg:mx-auto transition-transform -translate-x-full sm:translate-x-0">
        <!-- Process -->
        
        <!-- Product  -->
        <section
            class="lg:max-w-7xl max-w-4xl mx-auto grid items-start grid-cols-1 lg:grid-cols-5 gap-12 lg:mx-[25px]"
        >
            <!-- class="lg:w-full mx-auto flex flex-wrap xl:justify-center overflow-hidden" -->
            <section class="mb-5 lg:col-span-3 w-full">
                <div class="">
                    <img
                        alt="ecommerce"
                        class="w-full lg:h-[650px] object-cover object-center rounded-[10px]"
                        src="{{$product->assets->first()->path}}"
                    />
                </div>
                <div class="w-[472px] h-[100px] flex justify-between m-auto mt-3">
                    <div
                        class="w-[100px] h-[100px] bg-neutral-100 rounded-[10px] justify-center items-center inline-flex"
                    >
                        <img
                            class="w-[100px] h-[100px] rounded-[10px]"
                            src="{{$product->assets->skip(1)->first()->path}}"
                        />
                    </div>
                    <div
                        class="w-[100px] h-[100px] bg-neutral-100 rounded-[10px] justify-center items-center inline-flex"
                    >
                        <img
                            class="w-[100px] h-[100px] rounded-[10px]"
                            src="{{$product->assets->skip(2)->first()->path}}"
                        />
                    </div>
                    <div
                        class="w-[100px] h-[100px]bg-neutral-100 rounded-[10px] justify-center items-center inline-flex"
                    >
                        <img
                            class="w-[100px] h-[100px] rounded-[10px]"
                            src="{{$product->assets->skip(3)->first()->path}}"
                        />
                    </div>
                    <div
                        class="w-[100px] h-[100px]bg-neutral-100 rounded-[10px] justify-center items-center inline-flex"
                    >
                        <img
                            class="w-[100px] h-[100px] rounded-[10px]"
                            src="{{$product->assets->skip(4)->first()->path}}"
                        />
                    </div>
                </div>
            </section>

            <section class="lg:col-span-2 lg:py-6">
                <!-- class="xl:w-[450px]  lg:px-6 lg:py-6 mt-6 lg:mt-0 flex flex-col justify-between" -->
                <h1 class="text-3xl font-medium mb-1">
                    {{ $product->name }}
                </h1>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg
                            fill="currentColor"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-4 h-4"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                            ></path>
                        </svg>
                        <svg
                            fill="currentColor"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-4 h-4 text-warning-light"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                            ></path>
                        </svg>
                        <svg
                            fill="currentColor"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-4 h-4 text-warning-light"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                            ></path>
                        </svg>
                        <svg
                            fill="currentColor"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-4 h-4 text-warning-light"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                            ></path>
                        </svg>
                        <svg
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-4 h-4 text-warning-light"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="text-warning-light"
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                            ></path>
                        </svg>
                        <span class="text-gray-600 ml-3">4 Reviews</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                        <div class="w-8 h-4 relative">
                            <div
                                class="w-4 h-4 left-[-0px] top-0 absolute bg-zinc-300 rounded-full"
                            ></div>
                            <div
                                class="w-4 h-4 left-[8px] top-0 absolute bg-red-600 rounded-full"
                            ></div>
                            <div
                                class="w-4 h-4 left-[16px] top-0 absolute bg-blue-700 rounded-full"
                            ></div>
                        </div>
                    </span>
                </div>
                <span class="title-font font-medium text-2xl">$58.00</span>

                <p class="leading-relaxed mt-4">
                    Let your shoe game shimmer in the Nike Air Force 1 '07
                    Essential. It takes the classic AF-1 design to the next level
                    with its premium leather upper and iridescent Swoosh.
                </p>
                <div class="flex justify-between mt-8">
                    <div class="justify-start items-center gap-6 inline-flex">
                        <div
                            class="text-xl font-normal leading-tight tracking-wide"
                        >
                            Select Size
                        </div>
                    </div>
                    <div class="justify-start items-center gap-6 inline-flex">
                        <a
                            href="#side-guide"
                            class="text-text-normal text-xl font-normal leading-tight tracking-wide"
                        >
                            Size Guide
                        </a>
                    </div>
                </div>
                <div class="flex mt-6 items-center pb-5 mb-5">
                    <div class="flex items-center">
                        <fieldset class="mt-4">
                            <legend class="sr-only">Choose a size</legend>
                            <div
                                class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4"
                            >
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-not-allowed bg-gray-50 text-gray-200"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="XXS"
                                        disabled
                                        class="sr-only"
                                        aria-labelledby="size-choice-0-label"
                                    />
                                    <span id="size-choice-0-label">37</span>
                                    <span
                                        aria-hidden="true"
                                        class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200"
                                    >
                                        <svg
                                            class="absolute inset-0 h-full w-full stroke-2 text-gray-200"
                                            viewBox="0 0 100 100"
                                            preserveAspectRatio="none"
                                            stroke="currentColor"
                                        >
                                            <line
                                                x1="0"
                                                y1="100"
                                                x2="100"
                                                y2="0"
                                                vector-effect="non-scaling-stroke"
                                            />
                                        </svg>
                                    </span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="XS"
                                        class="sr-only"
                                        aria-labelledby="size-choice-1-label"
                                    />
                                    <span id="size-choice-1-label">38</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="S"
                                        class="sr-only"
                                        aria-labelledby="size-choice-2-label"
                                    />
                                    <span id="size-choice-2-label">38.5</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="M"
                                        class="sr-only"
                                        aria-labelledby="size-choice-3-label"
                                    />
                                    <span id="size-choice-3-label">39</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="L"
                                        class="sr-only"
                                        aria-labelledby="size-choice-4-label"
                                    />
                                    <span id="size-choice-4-label">39.5</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="XL"
                                        class="sr-only"
                                        aria-labelledby="size-choice-5-label"
                                    />
                                    <span id="size-choice-5-label">40</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="2XL"
                                        class="sr-only"
                                        aria-labelledby="size-choice-6-label"
                                    />
                                    <span id="size-choice-6-label">41</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                                <!-- Active: "ring-2 ring-indigo-500" -->
                                <label
                                    class="group relative flex items-center justify-center rounded-md border py-3 px-8 text-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-2.5 h-12 cursor-pointer bg-white text-gray-900 shadow-sm"
                                >
                                    <input
                                        type="radio"
                                        name="size-choice"
                                        value="3XL"
                                        class="sr-only"
                                        aria-labelledby="size-choice-7-label"
                                    />
                                    <span id="size-choice-7-label">42</span>
                                    <!--
                            Active: "border", Not Active: "border-2"
                            Checked: "border-indigo-500", Not Checked: "border-transparent"
                            -->
                                    <span
                                        class="pointer-events-none absolute -inset-px rounded-md"
                                        aria-hidden="true"
                                    ></span>
                                </label>
                            </div>
                        </fieldset>
                        <!-- <div class="grid grid-cols-3 gap-7">
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 38.5
                            </div>
                        </button>
                        </div>
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 40
                            </div>
                        </button>
                        </div>
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 41
                            </div>
                        </button>
                        </div>
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 42.5
                            </div>
                        </button>
                        </div>
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 44
                            </div>
                        </button>
                        </div>
                        <div class="h-12 justify-center items-start inline-flex">
                        <button
                            class="px-8 py-2.5 rounded-small border border-black border-opacity-50 justify-center items-center inline-flex"
                        >
                            <div class="text-gray-800 text-[1rem] leading-7">
                            EU 45
                            </div>
                        </button>
                        </div>
                    </div> -->
                    </div>
                </div>

                <div class="flex">
                    <button
                        class="flex justify-center items-center text-white bg-primary hover:bg-primary-dark border-0 h-12 px-12 focus:outline-none rounded-[10px]"
                    >
                        Add to cart
                    </button>

                    <form class="max-w-xs mx-auto">
                        <label
                            for="quantity-input"
                            class="block text-sm font-medium dark:text-white"
                        ></label>
                        <div class="h-12 flex items-center max-w-[8rem]">
                            <button
                                type="button"
                                id="decrement-button"
                                data-input-counter-decrement="quantity-input"
                                class="hover:bg-active-light border border-divider rounded-s p-3 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none"
                            >
                                <!-- dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 dark:focus:ring-gray-700 -->
                                <svg
                                    class="w-3 h-3 text-black-900 dark:text-black"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 18 2"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M1 1h16"
                                    />
                                </svg>
                            </button>
                            <input
                                type="text"
                                id="quantity-input"
                                data-input-counter
                                aria-describedby="helper-text-explanation"
                                class="border-x-0 border border-divider h-12 text-center text-sm block w-full focus:outline-none"
                                aria-valuenow="1"
                                value="1"
                                required
                            />
                            <!-- dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" -->
                            <button
                                type="button"
                                id="increment-button"
                                data-input-counter-increment="quantity-input"
                                class="hover:bg-active-light border border-divider rounded-e p-3 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none"
                            >
                                <!-- dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 dark:focus:ring-gray-700 -->
                                <svg
                                    class="w-3 h-3"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 18 18"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 1v16M1 9h16"
                                    />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <button
                        class="rounded-[10px]-full w-12 h-12 border border-divider p-0 inline-flex items-center justify-center text-active ml-4"
                    >
                        <svg
                            fill="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"
                            ></path>
                        </svg>
                    </button>
                </div>
            </section>
        </section>

        <!-- Feature Section  -->
        <section class="bg-white dark:bg-gray-900">
            <div class="py-24 px-4 mx-auto max-w-screen-xl sm:py-18 lg:px-6">
                <div
                    class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0"
                >
                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 rounded-full bg-[#abaeb1] h-20 w-20 dark:bg-primary-900"
                        >
                            <div
                                class="flex justify-center items-center rounded-full h-12 w-12 bg-primary"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-discount-check"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#ffffff"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"
                                    />
                                    <path d="M9 12l2 2l4 -4" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">
                            100% Original
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 rounded-full bg-[#abaeb1] h-20 w-20 dark:bg-primary-900"
                        >
                            <div
                                class="flex justify-center items-center rounded-full h-12 w-12 bg-primary"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-clock"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#ffffff"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"
                                    />
                                    <path d="M12 7v5l3 3" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">
                            10 Day Replacement
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 rounded-full bg-[#abaeb1] h-20 w-20 dark:bg-primary-900"
                        >
                            <div
                                class="flex justify-center items-center rounded-full h-12 w-12 bg-primary"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-shield"
                                    width="40"
                                    height="40"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="#ffffff"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        stroke="none"
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                    />
                                    <path
                                        d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">
                            1 Year Warranty
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Plan it, create it, launch it. Collaborate seamlessly
                            with all the organization and hit your marketing goals
                            every month with our marketing plan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Review Section  -->
        <section class="my-18 relative">
            <div class="w-full max-w-7xl px-4 md:px-5 lg:px-6 mx-auto">
                <div class="">
                    <h2
                        class="font-manrope font-bold text-3xl sm:text-4xl leading-10 mb-8 text-center"
                    >
                        Customer reviews & rating
                    </h2>
                    <div class="grid grid-cols-12 mb-11">
                        <div class="col-span-12 xl:col-span-4 flex items-center">
                            <div
                                class="box flex flex-col gap-y-4 w-full max-xl:max-w-3xl mx-auto"
                            >
                                <div class="flex items-center w-full">
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        5
                                    </p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_12042_8589)">
                                            <path
                                                d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                class="fill-warning-light"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12042_8589">
                                                <rect
                                                    width="20"
                                                    height="20"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p
                                        class="h-2 w-full sm:min-w-[278px] rounded-[30px] bg-gray-200 ml-5 mr-3"
                                    >
                                        <span
                                            class="h-full w-[30%] rounded-[30px] bg-warning-light flex"
                                        ></span>
                                    </p>
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        30
                                    </p>
                                </div>
                                <div class="flex items-center w-full">
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        4
                                    </p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_12042_8589)">
                                            <path
                                                d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                class="fill-warning-light"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12042_8589">
                                                <rect
                                                    width="20"
                                                    height="20"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p
                                        class="h-2 w-full xl:min-w-[278px] rounded-[30px] bg-gray-200 ml-5 mr-3"
                                    >
                                        <span
                                            class="h-full w-[40%] rounded-[30px] bg-warning-light flex"
                                        ></span>
                                    </p>
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        40
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        3
                                    </p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_12042_8589)">
                                            <path
                                                d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                class="fill-warning-light"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12042_8589">
                                                <rect
                                                    width="20"
                                                    height="20"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p
                                        class="h-2 w-full xl:min-w-[278px] rounded-[30px] bg-gray-200 ml-5 mr-3"
                                    >
                                        <span
                                            class="h-full w-[20%] rounded-[30px] bg-warning-light flex"
                                        ></span>
                                    </p>
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        20
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        2
                                    </p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_12042_8589)">
                                            <path
                                                d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                class="fill-warning-light"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12042_8589">
                                                <rect
                                                    width="20"
                                                    height="20"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p
                                        class="h-2 w-full xl:min-w-[278px] rounded-[30px] bg-gray-200 ml-5 mr-3"
                                    >
                                        <span
                                            class="h-full w-[16%] rounded-[30px] bg-warning-light flex"
                                        ></span>
                                    </p>
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        16
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        1
                                    </p>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_12042_8589)">
                                            <path
                                                d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                class="fill-warning-light"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_12042_8589">
                                                <rect
                                                    width="20"
                                                    height="20"
                                                    fill="white"
                                                />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p
                                        class="h-2 w-full xl:min-w-[278px] rounded-[30px] bg-gray-200 ml-5 mr-3"
                                    >
                                        <span
                                            class="h-full w-[8%] rounded-[30px] bg-warning-light flex"
                                        ></span>
                                    </p>
                                    <p
                                        class="font-medium text-lg py-[1px] mr-[2px]"
                                    >
                                        8
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-span-12 max-xl:mt-8 xl:col-span-8 xl:pl-8 w-full min-h-[230px]"
                        >
                            <div
                                class="grid grid-cols-12 h-full px-8 max-lg:py-8 rounded-3xl bg-gray-100 w-full max-xl:max-w-3xl max-xl:mx-auto"
                            >
                                <div
                                    class="col-span-12 md:col-span-8 flex items-center"
                                >
                                    <div
                                        class="flex flex-col sm:flex-row items-center max-lg:justify-center w-full h-full"
                                    >
                                        <div
                                            class="sm:pr-3 sm:border-r border-gray-200 flex items-center justify-center flex-col"
                                        >
                                            <h2
                                                class="font-manrope font-bold text-5xl text-center mb-4"
                                            >
                                                4.3
                                            </h2>
                                            <div
                                                class="flex items-center gap-3 mb-4"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <p
                                                class="font-normal text-lg leading-8 text-gray-400"
                                            >
                                                46 Ratings
                                            </p>
                                        </div>

                                        <div
                                            class="sm:pl-3 sm:border-l border-gray-200 flex items-center justify-center flex-col"
                                        >
                                            <h2
                                                class="font-manrope font-bold text-5xl text-center mb-4"
                                            >
                                                4.8
                                            </h2>
                                            <div
                                                class="flex items-center gap-3 mb-4"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="36"
                                                    height="36"
                                                    viewBox="0 0 36 36"
                                                    fill="none"
                                                >
                                                    <g
                                                        clip-path="url(#clip0_13624_3137)"
                                                    >
                                                        <path
                                                            d="M17.1033 2.71738C17.4701 1.97413 18.5299 1.97413 18.8967 2.71738L23.0574 11.1478C23.2031 11.4429 23.4846 11.6475 23.8103 11.6948L33.1139 13.0467C33.9341 13.1659 34.2616 14.1739 33.6681 14.7524L26.936 21.3146C26.7003 21.5443 26.5927 21.8753 26.6484 22.1997L28.2376 31.4656C28.3777 32.2825 27.5203 32.9055 26.7867 32.5198L18.4653 28.145C18.174 27.9919 17.826 27.9919 17.5347 28.145L9.21334 32.5198C8.47971 32.9055 7.62228 32.2825 7.76239 31.4656L9.35162 22.1997C9.40726 21.8753 9.29971 21.5443 9.06402 21.3146L2.33193 14.7524C1.73841 14.1739 2.06593 13.1659 2.88615 13.0467L12.1897 11.6948C12.5154 11.6475 12.7969 11.4429 12.9426 11.1478L17.1033 2.71738Z"
                                                            class="fill-warning-light"
                                                        />
                                                    </g>
                                                    <defs>
                                                        <clipPath
                                                            id="clip0_13624_3137"
                                                        >
                                                            <rect
                                                                width="36"
                                                                height="36"
                                                                fill="white"
                                                            />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <p
                                                class="font-normal text-lg leading-8 text-gray-400"
                                            >
                                                Last Month
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-span-12 md:col-span-4 max-lg:mt-8 md:pl-8"
                                >
                                    <div
                                        class="flex items-center flex-col justify-center w-full h-full"
                                    >
                                        <button
                                            class="rounded-full px-6 py-4 bg-primary font-semibold text-lg text-white whitespace-nowrap mb-6 w-full text-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-primary-dark hover:shadow-primary-light"
                                        >
                                            Write A Review
                                        </button>
                                        <button
                                            class="rounded-full px-6 py-4 bg-white font-semibold text-lg text-primary-dark whitespace-nowrap w-full text-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-primary-light hover:shadow-primary-light"
                                        >
                                            See All Reviews
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pb-8 border-b border-gray-200 max-xl:max-w-3xl max-xl:mx-auto"
                    >
                        <h4
                            class="font-manrope font-semibold text-3xl leading-10 mb-6"
                        >
                            Most helpful positive review
                        </h4>
                        <div
                            class="flex sm:items-center flex-col sm:flex-row justify-between mb-4"
                        >
                            <div class="flex items-center gap-3">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_13624_2974)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            class="fill-warning-light"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2974">
                                            <rect
                                                width="30"
                                                height="30"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_13624_2974)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            class="fill-warning-light"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2974">
                                            <rect
                                                width="30"
                                                height="30"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_13624_2974)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            class="fill-warning-light"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2974">
                                            <rect
                                                width="30"
                                                height="30"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_13624_2974)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            class="fill-warning-light"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2974">
                                            <rect
                                                width="30"
                                                height="30"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_13624_2974)">
                                        <path
                                            d="M14.1033 2.56698C14.4701 1.82374 15.5299 1.82374 15.8967 2.56699L19.1757 9.21093C19.3214 9.50607 19.6029 9.71064 19.9287 9.75797L27.2607 10.8234C28.0809 10.9426 28.4084 11.9505 27.8149 12.5291L22.5094 17.7007C22.2737 17.9304 22.1662 18.2614 22.2218 18.5858L23.4743 25.8882C23.6144 26.7051 22.7569 27.3281 22.0233 26.9424L15.4653 23.4946C15.174 23.3415 14.826 23.3415 14.5347 23.4946L7.9767 26.9424C7.24307 27.3281 6.38563 26.7051 6.52574 25.8882L7.7782 18.5858C7.83384 18.2614 7.72629 17.9304 7.49061 17.7007L2.1851 12.5291C1.59159 11.9505 1.91909 10.9426 2.73931 10.8234L10.0713 9.75797C10.3971 9.71064 10.6786 9.50607 10.8243 9.21093L14.1033 2.56698Z"
                                            class="fill-warning-light"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_13624_2974">
                                            <rect
                                                width="30"
                                                height="30"
                                                fill="white"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-center gap-3">
                                <h6
                                    class="font-semibold text-lg leading-8 text-black"
                                >
                                    @john.doe
                                </h6>
                                <p
                                    class="font-medium text-base leading-7 text-gray-400"
                                >
                                    Nov 01, 2023
                                </p>
                            </div>
                        </div>

                        <p class="font-normal text-lg leading-8 text-gray-500">
                            I recently had the opportunity to explore Pagedone's UI
                            design system, and it left a lasting impression on my
                            workflow. The system seamlessly blends user-friendly
                            features with a robust set of design components, making
                            it a go-to for creating visually stunning and consistent
                            interfaces.
                        </p>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between pt-8 max-xl:max-w-3xl max-xl:mx-auto"
                    >
                        <p class="font-normal text-lg py-[1px] text-black">
                            46 reviews
                        </p>
                        <form>
                            <div class="flex">
                                <div class="relative">
                                    <div class="absolute -left-0 px-2 top-0 py-2">
                                        <p
                                            class="font-normal text-lg leading-8 text-gray-500"
                                        >
                                            Sort by:
                                        </p>
                                    </div>
                                    <input
                                        type="text"
                                        class="block w-60 h-11 pr-4 pl-20 py-2.5 text-lg leading-8 font-medium rounded-full cursor-pointer shadow-xs bg-transparent placeholder-black focus:outline-gray-200"
                                        placeholder="Most Relevant"
                                    />
                                    <div
                                        id="dropdown-button"
                                        data-target="dropdown"
                                        class="dropdown-toggle flex-shrink-0 cursor-pointer z-10 inline-flex items-center py-2.5 px-4 text-base font-medium text-center text-gray-900 bg-transparent absolute right-0 top-2 pl-2"
                                        type="button"
                                    >
                                        <svg
                                            class="ml-2"
                                            width="12"
                                            height="7"
                                            viewBox="0 0 12 7"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M1 1.5L4.58578 5.08578C5.25245 5.75245 5.58579 6.08579 6 6.08579C6.41421 6.08579 6.74755 5.75245 7.41421 5.08579L11 1.5"
                                                stroke="#6B7280"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </div>
                                    <div
                                        id="dropdown"
                                        class="absolute top-9 right-0 z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                                    >
                                        <ul
                                            class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdown-button"
                                        >
                                            <li>
                                                <a
                                                    href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >
                                                    Most Relevant
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >
                                                    last week
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="#"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                >
                                                    oldest
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @foreach ($related as $relatedProduct)
            <div class="product">
                <h4>{{ $relatedProduct->name }}</h4>
                <!-- Display other product details -->
            </div>
        @endforeach
    </div>
</x-layout>