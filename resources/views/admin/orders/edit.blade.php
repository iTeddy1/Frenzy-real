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
    <form class="flex w-full gap-2.5" id="order" action="{{ route("admin.orders.update", $orderDetails->id) }}" method="POST">
        @csrf
        @method("PATCH")

        {{-- left form --}}
        <div
            class="flex w-2/3 flex-col items-start justify-start gap-2.5 rounded border border-zinc-200 bg-white p-2.5">
            <div class="w-full flex justify-between gap-6">
                <div class="block w-1/2">
                    <div class="text-base font-semibold leading-tight text-gray-400">Order Id</div>
                    <input class=" self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                        name="name" value="{{ $orderDetails->id }}" disabled/>
                </div>
                <div class="w-1/2">
                    <div class="text-base font-semibold leading-tight text-gray-400">Customer</div>
                    <input class="self-stretch rounded border border-zinc-300 bg-white p-2.5 focus:outline-none" id="name"
                        name="name" value="{{ $orderDetails->user->first_name }}" />
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
                <div class="flex justify-between">
                    <select class="rounded-small border px-3 py-2" name="city" id="city" required>
                      <option class="p-2" value="{{ $orderDetails->address->city}}" selected>{{ $orderDetails->address->city}}</option>           
                      </select>
                                
                      <select class="rounded-small border px-3 py-2" name="district" id="district" required>
                      <option class="p-2" value="{{ $orderDetails->address->district}}" selected>{{ $orderDetails->address->district}}</option>
                      </select>
                      
                      <select class="rounded-small border px-3 py-2" name="ward" id="ward" required>
                      <option class="p-2" value="{{ $orderDetails->address->ward}}" selected>{{ $orderDetails->address->ward}}</option>
                    </select>                     
                  </div>
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
                    {{ $orderDetails->created_at->format("d M Y")}}
                </div>
            </div>

            <div class="flex items-start flex-col justify-center gap-2.5">
                <div class="text-base font-semibold leading-tight text-black text-opacity-50" for="color">
                    Last modified at
                </div>
                <div>
                    {{ $orderDetails->updated_at->format("d M Y")}}
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
