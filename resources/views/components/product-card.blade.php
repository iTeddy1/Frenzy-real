@props([
    "name" => "Nike Air Force 1 '07 Essential",
    "regularprice" => 20,
    "saleprice" => 0,
    "image" => "",
    "hoverimage" => "",
])

<div
    class="mx-auto mt-4 flex w-full flex-col justify-between overflow-hidden rounded-lg border bg-white p-2 font-public shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)]">
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
                    <svg class="icon icon-tabler icon-tabler-heart" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                </div>
            </div>

            <div class="relative h-[34px] w-[34px]">
                <div class="absolute left-0 top-0 h-[34px] w-[34px] rounded-full bg-white"></div>
                <div class="absolute left-[5px] top-[5px] inline-flex h-6 w-6 items-center justify-center">
                    <svg class="icon icon-tabler icon-tabler-eye" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                    </svg>
                </div>
            </div>
        </div>
        <img class="peer rounded-lg object-cover" src="{{ $image }}" alt="product image" />
        <img class="peer absolute -right-96 top-0 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0"
            src="{{ $hoverimage }}" alt="product image" />

    </div>

    <div class="flex flex-col text-left">
        <h3 class="text-md font-semibold">{{ $name }}</h3>

        <div class="flex items-center justify-between pt-10">
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
                <span class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                    ${{ $regularprice }}
                </span>
                <span class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                    ${{ $saleprice }}
                </span>
            </div>
        </div>
    </div>
</div>