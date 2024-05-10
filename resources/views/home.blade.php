<x-layout>
    <x-slot:title>
        Home Page
    </x-slot:title>
    {{ Breadcrumbs::render('home') }}
    <div class="mx-auto w-full max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <div class="relative w-full" id="carousel-example">
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
        </div>

        <div class="sticky mt-10">
            <div class="">
                <div class="inline-flex h-10 items-center gap-2 rounded-md border border-solid border-[#E0E4E8] p-1">
                    <input class="w-[100px] bg-transparent pl-5 text-[#212B36] focus:outline-none" type="text"
                        placeholder="Search" />
                    <span class="flex items-center justify-center pr-2 text-lg text-black">
                        <i class="bx bx-search"></i>
                    </span>
                </div>
            </div>
        </div>

        <!--Products-->
        <div class="mt-16 flex items-center space-x-5">
            <div class="ml h-14 w-6 bg-[#007B55]"></div>
            <div class="font-public-sans break-words text-2xl font-semibold text-green-600">
                Our Products
            </div>
        </div>

        <div class="mt-3 flex justify-between">
            <div class="font-inter ml-auto mr-16 break-words text-right text-lg font-bold leading-6 text-black">
                Filter:
            </div>

            <div class="font-inter break-words text-center text-lg font-bold leading-6 text-black">
                Sort by:
                <i class="bx bx-chevron-down ml-1"></i>
            </div>
        </div>

        <div
            class="mt-none explore font-public-sans leading-12 mb-10 text-4xl font-bold tracking-wide text-black">
            Explore Our Products
        </div>
        <section>
            <div class="flex">
                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-red-500 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                Sale
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic1.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Nike Dunk Low Retro</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-cyan-400"></div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-orange-500">
                                        </div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-stone-100">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                                        $190
                                    </span>
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $150
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-red-500 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                Sale
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic1.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Nike Dunk Low Retro</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-cyan-400"></div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-orange-500">
                                        </div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-stone-100">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                                        $190
                                    </span>
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $150
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-cyan-400 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                New
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic2.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Nike Air Max 1 '87</h3>
                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-amber-900">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-yellow-500">
                                        </div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-stone-100">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $150
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic3.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Black and Blue Gaze</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-sky-400"></div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-zinc-900"></div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-orange-500">
                                        </div>
                                        <div class="absolute left-[24px] top-0 h-4 w-4 rounded-full bg-stone-100">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $180
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-red-500 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                Sale
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic4.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Nike Air Force 1 '07</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-stone-100">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-[#b7cac6]"></div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                                        $115
                                    </span>
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $110
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-red-500 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                Sale
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic5.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Air Jordan 1 Low</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-[#007939]">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-[#e4ce9f]"></div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                                        $115
                                    </span>
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $110
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg" src="{{ Vite::asset("/public/images/pic6.png") }}"
                            style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Air Jordan 1 High OG</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-[#efeae7]">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-zinc-900"></div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-[#db963b]">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $140
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-cyan-400 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                New
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg"
                            src="{{ Vite::asset("/public/images/pic7.png") }}" style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">LeBron Witness 8</h3>
                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-[#f73707]">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-[#e2106c]"></div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-[#bfd7b7]">
                                        </div>
                                        <div class="absolute left-[24px] top-0 h-4 w-4 rounded-full bg-[#222534]">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $110
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute left-[12px] top-[7px] inline-flex h-[26px] w-[53px] items-center justify-center gap-2.5 rounded bg-cyan-400 px-3 py-1">
                            <div class="font-['Poppins'] text-xs font-bold uppercase leading-[18px] text-neutral-50">
                                New
                            </div>
                        </div>
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg"
                            src="{{ Vite::asset("/public/images/pic8.png") }}" style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">LeBron NXXT Gen</h3>
                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-[#008568]">
                                        </div>
                                        <div class="absolute left-[8px] top-0 h-4 w-4 rounded-full bg-[#d7af68]"></div>
                                        <div class="absolute left-[16px] top-0 h-4 w-4 rounded-full bg-[#7b0404]">
                                        </div>
                                        <div class="absolute left-[24px] top-0 h-4 w-4 rounded-full bg-[#c6c1b9]">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $110
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-4 h-[370px] w-[280px] max-w-sm overflow-hidden rounded-lg border bg-white p-2 font-[sans-serif] shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
                    <div class="relative">
                        <div
                            class="absolute right-[6px] top-[7px] inline-flex h-[76px] w-[34px] flex-col items-start justify-start gap-2">
                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div class="absolute left-[5px] top-[5px] h-6 w-6">
                                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative h-[34px] w-[34px]">
                                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                                <div
                                    class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="#000000" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <img class="h-[250px] w-[260px] rounded-lg"
                            src="{{ Vite::asset("/public/images/pic9.png") }}" style="block-size: fit-content" />
                    </div>

                    <div class="h-[75px] w-[260px] pl-3 text-left">
                        <h3 class="text-lg font-semibold">Nike Calm</h3>

                        <div>
                            <div class="flex items-center justify-between pt-8">
                                <!-- Color Pallette  -->
                                <span class="flex">
                                    <div class="relative h-4 w-8">
                                        <div class="absolute left-[-0px] top-0 h-4 w-4 rounded-full bg-[#c7b098]">
                                        </div>
                                    </div>
                                </span>

                                <!-- Price  -->
                                <div class="flex gap-1.5">
                                    <span
                                        class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                                        $50
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
