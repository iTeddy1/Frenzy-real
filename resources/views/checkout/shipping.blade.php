@extends("layouts.app")

@section("content")
    <div class="">
        <h1>Shipping Information</h1>

        <form action="{{ route("user.checkout.storeShipping") }}" method="POST">
            @csrf
            <div class="h-screen pt-12">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col gap-12 md:flex-row">
                        <div class="rounded border border-divider md:w-2/3">
                            <h1 class="my-4 px-4 text-2xl font-bold">Address</h1>
                            <div class="rounded p-4 shadow-md dark:border-gray-700 dark:bg-gray-800">
                                <!-- Shipping Address -->
                                <div class="mb-6">
                                    <div class="grid grid-cols-2 gap-8">
                                        <div>
                                            <label class="mb-2 block text-text-light dark:text-white" for="first_name">
                                                First Name
                                            </label>
                                            <input name="first_name"
                                                class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                                id="first_name" type="text" required />
                                        </div>
                                        <div>
                                            <label class="mb-2 block text-text-light dark:text-white" for="last_name">
                                                Last Name
                                            </label>
                                            <input name="last_name"
                                                class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                                id="last_name" type="text" required />
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="mb-2 block text-text-light dark:text-white" for="address">
                                            Address
                                        </label>
                                        <input name="address"
                                            class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                            id="address" type="text" required />
                                    </div>

                                    <div class="mt-4">
                                        <label class="mb-2 block text-text-light dark:text-white" for="city">
                                            City
                                        </label>
                                        <input name="city"
                                            class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                            id="city" type="text" required />
                                    </div>

                                    <div class="mt-4 grid grid-cols-2 gap-8">
                                        <div>
                                            <label class="mb-2 block text-text-light dark:text-white" for="phone">
                                                Phone
                                            </label>
                                            <input name="phone_number"
                                                class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-gray-700 dark:text-white"
                                                id="phone_number" type="text" required />
                                        </div>
                                        <div>
                                            <label class="mb-2 block text-text-light dark:text-white" for="shippingOption">
                                                Delivery options
                                            </label>
                                            <select
                                                class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-background-paper-dark dark:text-white"
                                                id="" name="delivery_option">
                                                <option value="0">Standard delivery (Free)</option>
                                                <option value="25">Fast delivery ($2)</option>
                                            </select>
                                            {{-- <input r name="ingOption"equired
                                                class="w-full rounded-small border px-3 py-2 dark:border-none dark:bg-background-paper-dark dark:text-white"
                                                id="shippingOption" type="text" /> --}}
                                        </div>
                                    </div>
                                    <div class="ml-4 flex w-1/2">
                                        <button
                                            class="mt-4 w-full rounded bg-primary px-4 py-2 font-semibold text-white hover:bg-primary-dark"
                                            href="user/checkout/shipping">
                                            Checkout
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="w-full rounded md:w-1/4">
                            <div class="w-full rounded border bg-white p-4 shadow-md">
                                <h2 class="mb-4 text-2xl font-bold">Summary</h2>
                                <div class="mb-2 flex justify-between">
                                    <span class="text-text-light">Subtotal</span>
                                    <span>${{ $total }}</span>
                                </div>
                                <div class="mb-2 flex justify-between">
                                    <span class="text-text-light">Taxes</span>
                                    <span>$1.99</span>
                                </div>
                                <div class="mb-2 flex justify-between">
                                    <span class="text-text-light">Shipping</span>
                                    <span>$0.00</span>
                                </div>
                                <hr class="my-2" />
                                <div class="mb-2 flex justify-between">
                                    <span class="font-semibold">Total Price</span>
                                    <span class="font-semibold text-error">${{ $total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection
