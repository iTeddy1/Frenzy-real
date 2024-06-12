@extends("layouts.admin")

@section("content")
<div class="flex w-full flex-col items-start justify-between gap-2.5 p-5">
        {{-- heading --}}
    <div class="mb-10">
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Edit order
            {{-- road map --}}
        </div>
        {{-- {{ Breadcrumbs::render("admin.orders.edit", $order) }} --}}
    </div>
        {{-- form --}}
    <form class="flex w-full gap-2.5" id="order" action="{{ route("admin.orders.update", $order->id) }}" method="POST">
        @csrf
        @method("PATCH")

        {{-- left form --}}
        <div
            class="flex w-2/3 flex-col items-start justify-start gap-2.5 rounded border border-zinc-200 bg-white p-2.5">
            <div class="w-full flex justify-between gap-6">
                <div class="block w-1/2">
                    <div class="text-base font-semibold leading-tight text-gray-400">Order Id</div>
                    <input class=" self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                        name="name" value="{{ $order->id }}" disabled/>
                </div>
                <div class="w-1/2">
                    <div class="text-base font-semibold leading-tight text-gray-400">Customer</div>
                    <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                        name="name" value="{{ $order->user->first_name }}" />
                </div>
            </div>
            <div class="text-base font-semibold leading-tight text-gray-400">Status</div>
            <div class="percent-options grid grid-cols-2 gap-4 w-full mt-2">
                <div>
                    <input type="radio" name="tip" id="tip1" value="pending" class="peer sr-only">
                    <label for="tip1" class="btn_5 flex items-center justify-center border-none rounded p-1.5 font-mono font-bold text-xl cursor-pointer text-white bg-primary hover:bg-primary-dark peer-checked:bg-error">
                        Pending
                    </label>
                </div>
                <div>
                    <input type="radio" name="tip" id="tip2" value="processing" class="peer sr-only">
                    <label for="tip2" class="btn_10 flex items-center justify-center border-none rounded p-1.5 font-mono font-bold text-xl cursor-pointer text-white bg-primary hover:bg-primary-dark peer-checked:bg-error">
                        Processing
                    </label>
                </div>
                <div>
                    <input type="radio" name="tip" id="tip3" value="shipped" class="peer sr-only">
                    <label for="tip3" class="btn_15 flex items-center justify-center border-none rounded p-1.5 font-mono font-bold text-xl cursor-pointer text-white bg-primary hover:bg-primary-dark peer-checked:bg-error">
                        Shipped
                    </label>
                </div>
                <div>
                    <input type="radio" name="tip" id="tip4" value="delivered" class="peer sr-only">
                    <label for="tip4" class="btn_25 flex items-center justify-center border-none rounded p-1.5 font-mono font-bold text-xl cursor-pointer text-white bg-primary hover:bg-primary-dark peer-checked:bg-error">
                        Delivered
                    </label>
                </div>
                <div>
                    <input type="radio" name="tip" id="tip5" value="cancelled" class="peer sr-only">
                    <label for="tip5" class="btn_50 flex items-center justify-center border-none rounded p-1.5 font-mono font-bold text-xl cursor-pointer text-white bg-primary hover:bg-primary-dark peer-checked:bg-error">
                        Cancelled
                    </label>
                </div>
            </div>
            <div  class="w-full">
                <div class="text-base font-semibold leading-tight text-gray-400">Street Address</div>
                <input class="w-full mt-2 self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name" /> 
            </div>
        </div>

    {{-- right form --}}
        <div
            class="inline-flex w-1/3 flex-col items-start gap-[17px] self-stretch rounded border border-zinc-200 bg-white px-[15px] py-[19px]">
            <div class="text-base font-semibold leading-tight text-gray-400">Quantity</div>
            <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" name="quantity"
                type="number" value="" min="1" />

            <div class="flex items-center flex-col justify-center gap-2.5">
                <div class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                    Created at
                </div>
                <div>
                    {{ $order->created_at->format("d M Y")}}
                </div>
            </div>

            <div class="flex items-start flex-col justify-center gap-2.5">
                <div class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                    Last modified at
                </div>
                <div>
                    {{ $order->updated_at->format("d M Y")}}
                </div>
            </div>
            <div class="self-stretch text-base font-semibold leading-tight text-gray-400">
                Gender
            </div>


            <div class="flex gap-3 self-stretch">
                <a class="rounded border px-4 py-4" href="admin/orders">
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
