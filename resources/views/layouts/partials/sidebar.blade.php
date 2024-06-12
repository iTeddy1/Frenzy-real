
<div class="flex h-screen overflow-hidden bg-white">
  <div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
      <div class="flex flex-col flex-grow overflow-y-auto bg-white border-r">
        <div class="flex flex-shrink-0 items-center px-4">
          <a class="text-lg font-semibold tracking-tighter text-black focus:outline-none focus:ring" href="/">
            <span class="flex items-center gap-2 mt-auto p-[10px]">
              <span class="size-12">
                <img src="{{ Vite::asset("/public/images/logo.png") }}" >
              </span>
              <span>Frenzy</span>
            </span>
          </a>
          <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
            <svg fill="currentColor" viewBox="0 0 20 20" class="size-6">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="flex flex-col flex-grow px-4 mt-5">
          <nav class="flex-1 space-y-1 bg-white">
            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
              ECOMMERCE
            </p>
            <ul>            
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{route('home')}}">
                  <ion-icon class="size-4 md hydrated" name="sync-outline" role="img" aria-label="sync outline"></ion-icon>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                  </svg>
                  <span class="ml-4 font-semibold"> Home </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{route('products.index')}}">
                  <ion-icon class="size-4 md hydrated" name="newspaper-outline" role="img" aria-label="newspaper outline"></ion-icon>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-bag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                  </svg>
                  <span class="ml-4 font-semibold"> Shop </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{ route('user.checkout.cart')}}">
                  <ion-icon class="size-4 md hydrated" name="shield-checkmark-outline" role="img" aria-label="shield checkmark outline"></ion-icon>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17h-11v-14h-2" />
                    <path d="M6 5l14 1l-1 7h-13" />
                  </svg>
                  <span class="ml-4 font-semibold"> Cart </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{route('user.orders.index')}}">
                  <ion-icon class="size-4 md hydrated" name="sync-outline" role="img" aria-label="sync outline"></ion-icon>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                  </svg>
                  <span class="ml-4 font-semibold"> Orders </span>
                </a>
              </li>
            </ul>
            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
              Contact
            </p>
            <ul>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{route('contact')}}">
                  <ion-icon class="size-4 md hydrated" name="albums-outline" role="img" aria-label="albums outline"></ion-icon>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00AC55" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                    <path d="M3 7l9 6l9 -6" />
                  </svg>
                  <span class="ml-4 font-semibold"> Contact </span>
                </a>
              </li>
            </ul>
            @if (Auth::user() && !Auth::user()->hasVerifiedEmail())
            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
              Verify Email
            </p>
            <ul>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-primary" href="{{route('verification.notice')}}">
                  <ion-icon class="size-4 md hydrated" name="albums-outline" role="img" aria-label="albums outline"></ion-icon>
                  <span class="ml-4 font-semibold"> Verify </span>
                </a>
              </li>
            </ul>
            @endif
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
