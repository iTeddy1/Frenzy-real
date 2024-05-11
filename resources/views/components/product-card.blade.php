@props(["name", "regular_price", "sale_price", "colorway", "images" => []])

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
                <span class="font-['Public Sans'] text-base font-medium leading-normal text-gray-400 line-through">
                    $190
                </span>
                <span class="font-['Public Sans'] text-base font-medium leading-normal text-gray-800">
                    $150
                </span>
            </div>
        </div>
    </div>
</div>
