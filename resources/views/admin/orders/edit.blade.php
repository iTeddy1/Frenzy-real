@extends("layouts.admin")

@section("content")
    <div class="flex w-full flex-col items-start justify-between gap-2.5 p-5">
        {{-- heading --}}
        <div class="mb-10">
            <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
                Edit order
                {{-- road map --}}
            </div>
            {{ Breadcrumbs::render("admin.orders.edit", $orderDetails) }}
        </div>
        {{-- form --}}
        <form class="flex w-full gap-2.5" id="order" action="{{ route("admin.orders.update", $orderDetails) }}"
            method="POST">
            @csrf
            @method("PATCH")

            {{-- left form --}}
            <div class="flex w-2/3 flex-col gap-8">
                <div class="w-full flex flex-col rounded items-start justify-start gap-4 border border-divider bg-white p-2.5">
                    <div class="flex w-full justify-between gap-6">
                        <div class="w-1/2">
                            <div class="flex flex-col">
                                <div class="text-base font-semibold leading-tight text-gray-400">First name</div>
                                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                                    id="name" name="first_name" value="{{ $orderDetails->user->first_name }}" />
                            </div>
                        </div>
                        <div class="ml-auto w-1/2">
                            <div class="flex flex-col">
                                <div class="text-base font-semibold leading-tight text-gray-400">Last name</div>
                                <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                                    id="name" name="last_name" value="{{ $orderDetails->user->last_name }}" />
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="text-base font-semibold leading-tight text-gray-400">Status</div>
                        <div class="percent-options mt-2 flex w-1/2 flex-wrap gap-4">
                            <div>
                                <input class="peer sr-only" id="tip1" name="status" type="radio" {{ $orderDetails->status == 'pending' ? 'checked' : '' }} value="pending">
                                <label
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded border-divider bg-background-neutral-light p-1.5 font-semibold text-text-dark peer-checked:bg-secondary peer-checked:text-white"
                                    for="tip1">
                                    <svg class="icon peer-checked:text-white icon-tabler icon-tabler-stars" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#A6B0BB"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17.8 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                        <path
                                            d="M6.2 19.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                        <path
                                            d="M12 9.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                                    </svg>
                                    Pending
                                </label>
                            </div>
                            <div>
                                <input class="peer sr-only" id="tip2" name="status" type="radio" {{ $orderDetails->status == 'processing' ? 'checked' : '' }} value="processing">
                                <label
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded border-divider bg-background-neutral-light p-1.5 font-semibold text-text-dark peer-checked:bg-warning peer-checked:text-white"
                                    for="tip2">
                                    <svg class="icon peer-checked:stroke-white icon-tabler icon-tabler-refresh" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#A6B0BB"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                    </svg>
                                    Processing
                                </label>
                            </div>
                            <div>
                                <input class="peer sr-only" id="tip3" name="status" type="radio" {{ $orderDetails->status == 'shipped' ? 'checked' : '' }} value="shipped">
                                <label
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded border-divider bg-background-neutral-light p-1.5 font-semibold text-text-dark peer-checked:bg-primary-dark peer-checked:text-white"
                                    for="tip3">
                                    <svg class="icon peer-checked:text-white icon-tabler icon-tabler-truck-delivery peer-checked:stroke-white"
                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#A6B0BB" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                        <path d="M3 9l4 0" />
                                    </svg>
                                    Shipped
                                </label>
                            </div>
                            <div>
                                <input class="peer sr-only" id="tip4" name="status" type="radio" {{ $orderDetails->status == 'delivered' ? 'checked' : '' }} value="delivered">
                                <label
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded border-divider bg-background-neutral-light p-1.5 font-semibold text-text-dark peer-checked:bg-primary peer-checked:text-white"
                                    for="tip4">
                                    <svg class="icon peer-checked:text-white icon-tabler icon-tabler-discount-check" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#A6B0BB"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                                        <path d="M9 12l2 2l4 -4" />
                                    </svg>
                                    Delivered
                                </label>
                            </div>
                            <div>
                                <input class="peer sr-only" id="tip5" name="status" type="radio" {{ $orderDetails->status == 'cancelled' ? 'checked' : '' }} value="cancelled">
                                <label
                                    class="flex cursor-pointer items-center justify-center gap-2 rounded border-divider bg-background-neutral-light p-1.5 font-semibold text-text-dark peer-checked:bg-error peer-checked:text-white"
                                    for="tip5">
                                    <svg class="icon peer-checked:text-white icon-tabler icon-tabler-circle-x" xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="#A6B0BB" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                    Cancelled
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="w-full">
                        <div class="text-base font-semibold leading-tight text-gray-400">Street Address</div>
                        <div class="flex gap-4">
                            <select class="rounded-small border px-3 py-2" id="city" name="city" required>
                                <option class="p-2" value="{{ $orderDetails->address->city }}" selected>
                                    {{ $orderDetails->address->city }}</option>
                            </select>

                            <select class="rounded-small border px-3 py-2" id="district" name="district" required>
                                <option class="p-2" value="{{ $orderDetails->address->district }}" selected>
                                    {{ $orderDetails->address->district }}</option>
                            </select>

                            <select class="rounded-small border px-3 py-2" id="ward" name="ward" required>
                                <option class="p-2" value="{{ $orderDetails->address->ward }}" selected>
                                    {{ $orderDetails->address->ward }}</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="text-base font-semibold leading-tight text-gray-400">Phone number</div>
                        <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none"
                            id="name" name="phone_number" value="{{ $orderDetails->address->phone_number }}" />
                    </div>
                </div>
                <div class="w-full flex-col rounded items-start justify-start gap-4 border border-divider bg-white ">
                    <div class="w-full">
                        <div class="text-base font-semibold leading-tight text-gray-400 p-2.5">Order Items</div>
                        <table class="mt-2 w-full border-collapse border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-200 p-2 text-left">Item</th>
                                    <th class="border border-gray-200 p-2 text-left">Quantity</th>
                                    <th class="border border-gray-200 p-2 text-left">Price</th>
                                    <th class="border border-gray-200 p-2 text-left">Total</th>
                                    <th class="border border-gray-200 p-2 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails->items as $item)
                                    <tr>
                                        <td class="border border-gray-200 p-2">{{ $item->product->name }}</td>
                                        <td class="border border-gray-200 p-2">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="border border-gray-200 p-2">{{ number_format($item->price) }}₫</td>
                                        <td class="border border-gray-200 p-2">{{ number_format($item->price * $item->quantity) }}₫</td>
                                        <td class="border border-gray-200 p-2 text-center">
                                            {{-- <button class="text-red-500 hover:text-red-700" type="button">Remove</button> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                {{-- right form --}}
                <div
                    class="flex w-1/3 flex-col items-start gap-4 h-fit rounded border border-divider bg-white px-4 py-[19px]">
                    <div class="flex flex-col items-center justify-center gap-2.5">
                        <div class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                            Created at
                        </div>
                        <div>
                            {{ $orderDetails->created_at->format("d M Y") }}
                        </div>
                    </div>

                    <div class="flex flex-col items-start justify-center gap-2.5">
                        <div class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                            Last modified at
                        </div>
                        <div>
                            {{ $orderDetails->updated_at->format("d M Y") }}
                        </div>
                    </div>
                    <div class="self-stretch text-base font-semibold leading-tight text-gray-400">
                        Gender
                    </div>

                    <div class="flex gap-3 self-stretch">
                        <a class="rounded border px-4 py-4" href="{{ route('admin.orders.index') }}">
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

    <script>
        var cities = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                var opt = document.createElement('option');
                opt.value = x.Name;
                opt.text = x.Name;
                opt.setAttribute('data-id', x.Id);
                cities.options.add(opt);
            }
            cities.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.options[this.selectedIndex].dataset.id != "") {
                    const result = data.filter(n => n.Id === this.options[this.selectedIndex].dataset.id);

                    for (const k of result[0].Districts) {
                        var opt = document.createElement('option');
                        opt.value = k.Name;
                        opt.text = k.Name;
                        opt.setAttribute('data-id', k.Id);
                        district.options.add(opt);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === cities.options[cities.selectedIndex].dataset.id);
                if (this.options[this.selectedIndex].dataset.id != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex]
                        .dataset.id)[0].Wards;

                    for (const w of dataWards) {
                        var opt = document.createElement('option');
                        opt.value = w.Name;
                        opt.text = w.Name;
                        opt.setAttribute('data-id', w.Id);
                        wards.options.add(opt);
                    }
                }
            };
        }

    </script>
@endsection
