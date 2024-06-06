<!-- resources/views/cart/index.blade.php -->
@extends("layouts.app")

@section("content")
    <div class="mx-5 flex flex-col justify-center">
        <div class="mx-[25px] py-4">
            <h1 class="text-3xl font-bold mb-4">Checkout</h1>
            {{ Breadcrumbs::render('user.checkout.cart', $cart) }}
        </div>        
        <div>
            <h2 class="sr-only">Steps</h2>

            <div class="mx-auto md:w-2/5">
                <div class="overflow-hidden rounded-full bg-background-default-dark">
                    <div class="h-2 w-0 rounded-full bg-primary"></div>
                </div>

                <ol class="mt-4 grid grid-cols-3 text-sm font-medium">
                    <li class="flex items-center justify-start sm:gap-1.5">
                        <span class="hidden text-primary sm:inline">Cart</span>
                        <svg class="icon icon-tabler icon-tabler-shopping-cart size-6 sm:size-5 stroke-primary"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="#000000"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                    </li>

                    <li class="flex items-center justify-center sm:gap-1.5">
                        <span class="hidden sm:inline">Address</span>

                        <svg class="size-6 sm:size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </li>

                    <li class="flex items-center justify-end sm:gap-1.5">
                        <span class="hidden sm:inline">Payment</span>

                        <svg class="size-6 sm:size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </li>
                </ol>
            </div>
        </div>

        {{-- Cart table  --}}
        <div class="h-screen pt-12">
            <div class="container mx-auto pl-4">
                <div class="flex flex-col gap-4 md:flex-row">
                    <div class="w-full rounded border shadow-md md:w-3/4">
                       
                        <div class="mx-4 flex flex-col">
                            <h1 class="mt-4 text-2xl font-bold">Cart</h1>
                            <span class="">({{$cart->items->count() >=1 ?  $cart->items->count() . ' item' : $cart->items->count() .' items'}})</span>
                        </div>
                        <div class="mb-4 overflow-auto rounded-lg bg-white">
                            @if ($cart && $cart->items->count())
                                <table class="w-full overflow-auto">
                                    <thead class="h-[70px] bg-background-neutral-light text-left font-bold text-text-light">
                                        <tr>
                                            <th class="px-4">Product</th>
                                            <th class="px-4">Quantity</th>
                                            <th class="px-4">Price</th>
                                            <th class="px-4">Total</th>
                                            <th class="px-4">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart->items as $item)
                                            <tr>
                                                <td class="p-4">
                                                    <div class="flex items-center">
                                                        <a href="/products/{{ $item->product->id }}">
                                                            <img class="mr-4 h-20 w-20 rounded"
                                                                src="{{ $item->product->assets->first()->path }}"
                                                                alt="Product image" />
                                                        </a>
                                                        <div class="flex flex-col font-semibold">
                                                            {{ $item->product->name }}
                                                            <span>size: {{ $item->size }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4">
                                                    <form id="update-form-{{ $item->id }}"
                                                        action="{{ route("user.cart.update") }}" method="POST">
                                                        @csrf
                                                        <div class="flex h-9 max-w-[8rem] items-center">
                                                            <input name="cart_item_id" type="hidden"
                                                                value="{{ $item->id }}">

                                                            <button
                                                                class="h-9 rounded-s border border-divider p-3 text-black hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100"
                                                                type="button"
                                                                onclick="updateQuantity({{ $item->id }}, 'decrement')">
                                                                <svg class="text-black-900 h-3 w-3"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 18 2">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M1 1h16" />
                                                                </svg>
                                                            </button>
                                                            <input
                                                                class="block h-9 w-full border border-x-0 border-divider text-center text-sm text-black"
                                                                id="quantity-input-{{ $item->id }}" name="quantity"
                                                                type="text" value="{{ $item->quantity }}" required>
                                                            <button
                                                                class="h-9 rounded-e border border-divider p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100"
                                                                type="button"
                                                                onclick="updateQuantity({{ $item->id }}, 'increment')">
                                                                <svg class="h-3 w-3 text-gray-900"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 18 18">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M9 1v16M1 9h16" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    {{-- <input name="cart_item_id" type="hidden"
                                                            value="{{ $item->id }}">
                                                        <input name="quantity" type="number" value="{{ $item->quantity }}"
                                                            onchange="this.form.submit()"> --}}
                                                </td>
                                                <td class="p-4">{{ number_format($item->price) }}₫</td>
                                                <td class="p-4">{{ number_format($item->quantity * $item->price) }}₫</td>
                                                <td class="p-4">
                                                    <div class="my-auto flex items-center">
                                                        <button form="update-form-{{ $item->id }}">Update</button>
                                                        <form action="{{ route("user.cart.remove") }}" method="POST">
                                                            @csrf
                                                            <div>
                                                                <input name="cart_item_id" type="hidden"
                                                                    value="{{ $item->id }}">
                                                                <button type="submit">
                                                                    <svg class="icon icon-tabler icon-tabler-trash"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="#000000"
                                                                        fill="none" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                                            fill="none" />
                                                                        <path d="M4 7l16 0" />
                                                                        <path d="M10 11l0 6" />
                                                                        <path d="M14 11l0 6" />
                                                                        <path
                                                                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                        <path
                                                                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="mx-auto max-w-4xl rounded-lg bg-white px-10 py-4 shadow-lg">
                                    <div class="flex flex-col items-center justify-center py-12">
                                        <svg class="mb-4 h-24 w-24 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V15H18.4433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z">
                                            </path>
                                        </svg>
                                        <p class="mb-4 text-lg font-semibold text-gray-600">Your shopping cart is empty.
                                        </p>
                                        <a href="/"
                                            class="rounded-md bg-blue-500 px-6 py-2 text-white shadow-md transition-colors duration-300 hover:bg-blue-600">
                                            Let's go shopping!
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="w-full rounded md:w-1/4">
                        <div class="w-full rounded border bg-white p-4 shadow-md">
                            <h2 class="mb-4 text-2xl font-bold">Summary</h2>
                            <div class="mb-2 flex justify-between">
                                <span class="text-text-light">Subtotal</span>
                                <span>{{ number_format($cart->total ?? 0) }}₫</span>
                            </div>
                            <div class="mb-2 flex justify-between">
                                <span class="text-text-light">Taxes</span>
                                <span>$0</span>
                            </div>
                            <div class="mb-2 flex justify-between">
                                <span class="text-text-light">Shipping</span>
                                <span>$0.00</span>
                            </div>
                            <hr class="my-2" />
                            <div class="mb-2 flex justify-between">
                                <span class="font-semibold">Total Price</span>
                                <span class="font-semibold text-error">{{ number_format($cart->total ?? 0) }}₫</span>
                            </div>
                        </div>
                        <form action="{{ route("user.checkout.shipping") }}">
                            @csrf
                            <button
                                class="mt-4 w-full rounded bg-primary px-4 py-2 font-semibold text-white hover:bg-primary-dark">
                                Checkout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
@endsection
