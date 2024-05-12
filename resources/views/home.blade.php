@props(["products"])

<x-layout>
    <x-slot:title>
        Home Page
    </x-slot:title>
    <div class="mx-auto w-full max-w-screen-2xl p-4 md:p-6 2xl:p-8">
        {{-- <div class="relative w-full" id="carousel-example">
            <!-- Carousel wrapper -->
            <div class="relative left-[-1.5%] h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="absolute left-0 h-full w-full opacity-100 duration-700 ease-in-out" id="carousel-item-1">
                    <img class="absolute left-1/2 top-1/2 max-w-max -translate-x-1/2 -translate-y-1/2 transform rounded-xl"
                        src="{{ Vite::asset("/public/images/sld1.png") }}" alt="..." />
                </div>
                <!-- Item 2 -->
                <div class="absolute left-0 h-full w-full opacity-0 duration-700 ease-in-out" id="carousel-item-2">
                    <img class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform rounded-xl"
                        src="{{ Vite::asset("/public/images/sld2.png") }}" alt="..." />
                </div>
                <!-- Item 3 -->
                <div class="absolute left-0 h-full w-full opacity-0 duration-700 ease-in-out" id="carousel-item-3">
                    <img class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform rounded-xl"
                        src="{{ Vite::asset("/public/images/sld3.png") }}" alt="..." />
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                <button class="h-3 w-3 rounded-full" id="carousel-indicator-1" type="button" aria-current="true"
                    aria-label="Slide 1"></button>
                <button class="h-3 w-3 rounded-full" id="carousel-indicator-2" type="button" aria-current="false"
                    aria-label="Slide 2"></button>
                <button class="h-3 w-3 rounded-full" id="carousel-indicator-3" type="button" aria-current="false"
                    aria-label="Slide 3"></button>
            </div>
            <!-- Slider controls -->
            <button
                class="group absolute left-44 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                id="data-carousel-prev" type="button">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button
                class="group absolute right-44 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                id="data-carousel-next" type="button">
                <span
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div> --}}
        <div class="font-['Public Sans'] self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("home") }}

        <div class="mt-10 flex">
            <div>
                <form class="mx-auto max-w-md">
                    <label class="sr-only mb-2 text-sm font-medium text-text-dark dark:text-white"
                        for="default-search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-text-normal dark:text-text-normal" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-text-normal focus:border-divider focus:ring-primary dark:border-divider dark:bg-background-default-dark dark:text-white dark:placeholder-gray-400 dark:focus:border-primary dark:focus:ring-primary"
                            id="default-search" type="search" placeholder="Search..." required />

                    </div>
                </form>
            </div>

            <div class="ml-auto inline-flex items-center justify-between">
                <div class="font-inter ml-auto mr-16 break-words text-right text-lg font-bold leading-6 text-black">
                    Filter:
                </div>

                <div class="font-inter break-words text-center text-lg font-bold leading-6 text-black">
                    Sort by:
                    <i class="bx bx-chevron-down ml-1"></i>
                </div>
            </div>
        </div>

        <!--Products-->
        {{-- <div class="mt-16 flex items-center space-x-5">
            <div class="ml h-14 w-6 bg-[#007B55]"></div>
            <div class="font-public-sans break-words text-2xl font-semibold text-green-600">
                Our Products
            </div>
        </div>

        <div class="mt-none explore font-public-sans leading-12 mb-10 text-4xl font-bold tracking-wide text-black">
            Explore Our Products
        </div> --}}
        <section>
            <div class="mx-auto mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">

                @foreach ($products as $product)
                <x-product-card 
                :name="$product['name']"
                :regularprice="$product['regular_price']" 
                :saleprice="$product['sale_price']" 
                :images="$product['images']" 
                />
            @endforeach
            </div>

        </section>

        <div class="mt-14 flex items-center justify-center">
            <button class="flex h-8 w-8 items-center justify-center rounded-full bg-[#00AC55]"
                onclick="decreaseValue()">
                <i class="bx bx-left-arrow-alt text-white"></i>
            </button>
            <span class="font-inter ml-5 mr-5 px-3 text-center text-lg font-semibold leading-6 text-black"
                id="numberInput">
                1
            </span>
            <button class="flex h-8 w-8 items-center justify-center rounded-full bg-[#00AC55]"
                onclick="increaseValue()">
                <i class="bx bx-right-arrow-alt text-white"></i>
            </button>
        </div>
    </div>

</x-layout>
