@extends("layouts.app")

@section("content")
    <div class="mx-5 ">
        <div class="mb-8" >
            <h1 class="text-2xl font-bold">Checkout</h1>
            {{ Breadcrumbs::render('user.checkout.shipping') }}
        </div>    
        <div>
            <h2 class="sr-only">Steps</h2>

            <div class="mx-auto lg:w-2/5">
              <div
                class="overflow-hidden rounded-full bg-background-default-dark"
              >
                <div class="h-2 w-1/2 rounded-full bg-primary"></div>
              </div>

              <ol
                class="mt-4 grid grid-cols-3 text-sm font-medium "
              >
                <li
                  class="flex items-center justify-start sm:gap-1.5"
                >
                <span class="hidden text-primary sm:inline"><a href="{{route('user.checkout.cart')}}">Cart</a></span>

                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-check stroke-primary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M11.5 17h-5.5v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                    <path d="M15 19l2 2l4 -4" />
                  </svg>
                </li>

                <li class="flex items-center justify-center sm:gap-1.5">
                  <span class="hidden text-primary sm:inline">Address</span>

                  <svg
                    class="size-6 sm:size-5 stroke-primary"
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
        <form action="{{ route("user.checkout.storeShipping") }}" method="POST">
            @csrf
            <div class="h-screen pt-12 ">
                <div class="container mx-auto">
                    <div class="flex flex-col gap-12 lg:flex-row">
                        <div class="rounded border border-divider lg:w-2/3 bg-white">
                            <h1 class="my-4 px-4 text-2xl font-bold">Address</h1>
                            <div class="rounded p-4 pt-0 shadow-md">
                                <!-- Shipping Address -->
                                <div class="mb-6">
                                    <div class="grid grid-cols-2 gap-8">
                                        <div>
                                            <label class="mb-2 block text-text-light" for="first_name">
                                                First Name
                                            </label>
                                            <input name="first_name"
                                                class="w-full rounded-small border px-3 py-2"
                                                id="first_name" type="text" required />
                                        </div>
                                        <div>
                                            <label class="mb-2 block text-text-light" for="last_name">
                                                Last Name
                                            </label>
                                            <input name="last_name"
                                                class="w-full rounded-small border px-3 py-2"
                                                id="last_name" type="text" required />
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="mb-2 block text-text-light" for="address">
                                            Address
                                        </label>
                                        <input name="address"
                                            class="w-full rounded-small border px-3 py-2"
                                            id="address" type="text" required />
                                    </div>

                                    <div class="mt-4">
                                        <label class="mb-2 block text-text-light" for="city">
                                            City
                                        </label>
                                        <div class="flex gap-8">
                                          <select class="rounded-small w-full border px-3 py-2" name="city" id="city" required>
                                            <option class="p-2" value="" selected>City</option>           
                                            </select>
                                                      
                                            <select class="rounded-small w-full border px-3 py-2" name="district" id="district" required>
                                            <option class="p-2" value="" selected>District</option>
                                            </select>
                                            
                                            <select class="rounded-small w-full border px-3 py-2" name="ward" id="ward" required>
                                            <option class="p-2" value="" selected>Ward</option>
                                          </select>                     
                                        </div>
                                    </div>

                                    <div class="mt-4 grid grid-cols-2 gap-8">
                                        <div>
                                            <label class="mb-2 block text-text-light" for="phone">
                                                Phone
                                            </label>
                                            <input name="phone_number"
                                                class="w-full rounded-small border px-3 py-2"
                                                id="phone_number" type="text" required />
                                        </div>
                                        <div>
                                            <label class="mb-2 block text-text-light" for="shippingOption">
                                                Delivery options
                                            </label>
                                            <select
                                                class="w-full rounded-small border px-3 py-2"
                                                id="" name="delivery_option">
                                                <option value="0">Standard delivery (Free)</option>
                                                <option value="25">Fast delivery ($2)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <button
                                            class="mt-4 ml-auto rounded bg-primary px-4 py-2 font-semibold text-white hover:bg-primary-dark"
                                            type="submit">
                                            Payment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:w-1/3 rounded">
                            <div class="w-full rounded border bg-white p-4 shadow-md">
                                <h2 class="mb-4 text-2xl font-bold">Summary</h2>
                                <div class="mb-2 flex justify-between">
                                    <span class="text-text-light">Subtotal</span>
                                    <span>{{ number_format($total) }}₫</span>
                                </div>
                                <div class="mb-2 flex justify-between">
                                    <span class="text-text-light">Shipping</span>
                                    <span>0₫</span>
                                </div>
                                <hr class="my-2" />
                                <div class="mb-2 flex justify-between">
                                    <span class="font-semibold">Total Price</span>
                                    <span class="font-semibold text-error">{{ number_format($total) }}₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

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
  promise.then(function (result) {
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
    cities.onchange = function () {
      district.length = 1;
      ward.length = 1;
      if(this.options[this.selectedIndex].dataset.id != ""){
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
    district.onchange = function () {
      ward.length = 1;
      const dataCity = data.filter((n) => n.Id === cities.options[cities.selectedIndex].dataset.id);
      if (this.options[this.selectedIndex].dataset.id != "") {
        const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex].dataset.id)[0].Wards;

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
