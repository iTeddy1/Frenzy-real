{{-- @props(['products']) --}}
@extends("layouts.app")
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
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true"
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
                    class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                    <svg class="h-4 w-4 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div> --}}
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("home") }}

        <div class="mt-10 flex">
            <div>
                <form class="mx-auto max-w-md" action='/' method="GET">
                    <label class="sr-only mb-2 text-sm font-medium text-text-dark"
                        for="default-search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-text-normal" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-text-normal focus:border-divider focus:ring-primary"
                            id="default-search" name="query" type="search" placeholder="Search..." required />

                    </div>
                </form>
            </div>
            <div class="ml-auto inline-flex items-center justify-between">
                <div class="flex font-public break-words text-center text-lg font-bold leading-6 ">
                    Sort by:
                    <a class="btn btn-secondary"
                        href="{{ route("home") }}">
                        {!! 1 == "1"
                            ? '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 15l6 -6l6 6" />
                                    </svg>'
                            : '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg>' 
                        !!}

                    </a>

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
                    :tag="$product['tag']"
                    :regularprice="$product['regular_price']" 
                    :saleprice="$product['sale_price']" 
                    :image="$product->assets->first()->path"
                    :hoverimage="$product->assets->skip(1)->first()->path" 
                    :urlid="$product['id']"/>
                @endforeach
            </div>
            <div>{{ $products->links() }}</div>
        </section>
    </div>
