@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['total_price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <strong>Total: ${{ $total }}</strong>
    </div>
    <a href="{{ route('user.checkout.shipping') }}" class="btn btn-primary">Proceed to Shipping</a>
</div>
<div class="mx-5 flex flex-col justify-center">
    
    <div>
      <h2 class="sr-only">Steps</h2>

      <div class="md:w-2/5 mx-auto">
        <div class="overflow-hidden rounded-full bg-background-default-dark">
          <div class="h-2 w-0 rounded-full bg-primary"></div>
        </div>

        <ol
          class="mt-4 grid grid-cols-3 text-sm font-medium"
        >
          <li
            class="flex items-center justify-start sm:gap-1.5"
          >
            <span class="hidden text-primary sm:inline">Cart</span>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-shopping-cart size-6 stroke-primary sm:size-5"
 
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="#000000"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M17 17h-11v-14h-2" />
              <path d="M6 5l14 1l-1 7h-13" />
            </svg>
          </li>

          <li
            class="flex items-center justify-center  sm:gap-1.5"
          >
            <span class="hidden sm:inline">Address</span>

            <svg
              class="size-6 sm:size-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
              />
            </svg>
          </li>

          <li class="flex items-center justify-end sm:gap-1.5">
            <span class="hidden sm:inline">Payment</span>

            <svg
              class="size-6 sm:size-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
              />
            </svg>
          </li>
        </ol>
      </div>
    </div>
    <div class="h-screen pt-12">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-4">
          <div class="md:w-3/4 border rounded shadow-md">
            <h1 class="text-2xl font-bold my-4 px-4">Cart</h1>
            <div class="w-full rounded-lg mb-4 overflow-auto">
              <table class="w-full overflow-auto">
                <thead
                  class="bg-background-neutral-light h-[70px] text-left font-bold text-text-light"
                >
                  <tr class="">
                    <th class="px-4">Product</th>
                    <th class="px-4">Price</th>
                    <th class="px-4 text-center">Quantity</th>
                    <th class="px-4">Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="">
                  <tr>
                    <td class="p-4">
                      <div class="flex items-center">
                        <img
                          class="h-20 w-20 mr-4 rounded"
                          src="https://static.nike.com/a/images/t_PDP_1728_v1/20488f52-3686-476c-b4b8-0ca430c34a05/air-force-1-07-essential-shoe-BHN3Db.jpg"
                          alt="Product image"
                        />
                        <span class="font-semibold">Product name</span>
                      </div>
                    </td>
                    <td class="p-4">$19.99</td>
                    <td class="p-4">
                      <div
                        class="h-9 flex m-auto items-center max-w-[8rem]"
                      >
                        <button
                          type="button"
                          id="decrement-button"
                          data-input-counter-decrement="quantity-input"
                          class="text-black hover:bg-gray-200 border border-divider rounded-s p-3 h-9 focus:ring-gray-100 focus:ring-2 focus:outline-none"
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
                          class="border-x-0 border border-divider h-9 text-center text-black text-sm block w-full"
                          aria-valuenow="1"
                          value="1"
                          required
                        />
                        <!-- dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" -->
                        <button
                          type="button"
                          id="increment-button"
                          data-input-counter-increment="quantity-input"
                          class="hover:bg-gray-200 border border-divider rounded-e p-3 h-9 focus:ring-gray-100 focus:ring-2 focus:outline-none"
                        >
                          <!-- dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 dark:focus:ring-gray-700 -->
                          <svg
                            class="w-3 h-3 text-gray-900 dark:text-black"
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
                    </td>
                    <td class="p-4">$19.99</td>
                    <td>
                      <button>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-trash"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="#000000"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path
                            stroke="none"
                            d="M0 0h24v24H0z"
                            fill="none"
                          />
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path
                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                          />
                          <path
                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                          />
                        </svg>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-4">
                      <div class="flex items-center">
                        <img
                          class="h-20 w-20 mr-4 rounded"
                          src="https://static.nike.com/a/images/t_PDP_1728_v1/20488f52-3686-476c-b4b8-0ca430c34a05/air-force-1-07-essential-shoe-BHN3Db.jpg"
                          alt="Product image"
                        />
                        <span class="font-semibold">Product name</span>
                      </div>
                    </td>
                    <td class="p-4">$19.99</td>
                    <td class="p-4">
                      <div
                        class="h-9 flex m-auto items-center max-w-[8rem]"
                      >
                        <button
                          type="button"
                          id="decrement-button"
                          data-input-counter-decrement="quantity-input"
                          class="text-black hover:bg-gray-200 border border-divider rounded-s p-3 h-9 focus:ring-gray-100 focus:ring-2 focus:outline-none"
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
                          class="border-x-0 border border-divider h-9 text-center text-black text-sm block w-full"
                          aria-valuenow="1"
                          value="1"
                          required
                        />
                        <!-- dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" -->
                        <button
                          type="button"
                          id="increment-button"
                          data-input-counter-increment="quantity-input"
                          class="hover:bg-gray-200 border border-divider rounded-e p-3 h-9 focus:ring-gray-100 focus:ring-2 focus:outline-none"
                        >
                          <!-- dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 dark:focus:ring-gray-700 -->
                          <svg
                            class="w-3 h-3 text-gray-900 dark:text-black"
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
                    </td>
                    <td class="p-4">$19.99</td>
                    <td class="">
                      <button>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-trash"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="#000000"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path
                            stroke="none"
                            d="M0 0h24v24H0z"
                            fill="none"
                          />
                          <path d="M4 7l16 0" />
                          <path d="M10 11l0 6" />
                          <path d="M14 11l0 6" />
                          <path
                            d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"
                          />
                          <path
                            d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"
                          />
                        </svg>
                      </button>
                    </td>
                  </tr>
                  <!-- More product rows -->
                </tbody>
              </table>
            </div>
          </div>
          <div class="md:w-1/4 rounded">
            <div class="bg-white border rounded shadow-md p-4">
              <h2 class="text-2xl font-bold mb-4">Summary</h2>
              <div class="flex justify-between mb-2">
                <span class="text-text-light">Subtotal</span>
                <span>$19.99</span>
              </div>
              <div class="flex justify-between mb-2">
                <span class="text-text-light">Taxes</span>
                <span>$1.99</span>
              </div>
              <div class="flex justify-between mb-2">
                <span class="text-text-light">Shipping</span>
                <span>$0.00</span>
              </div>
              <hr class="my-2" />
              <div class="flex justify-between mb-2">
                <span class="font-semibold">Total Price</span>
                <span class="font-semibold text-error">$21.98</span>
              </div>
            </div>
            <button
              class="bg-primary hover:bg-primary-dark text-white font-semibold py-2 px-4 rounded mt-4 w-full"
            >
              Checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
