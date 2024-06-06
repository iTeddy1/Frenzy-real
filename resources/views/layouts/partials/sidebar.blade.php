
<div class="flex h-screen overflow-hidden bg-white">
  <div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
      <div class="flex flex-col flex-grow overflow-y-auto bg-white border-r">
        <div class="flex flex-shrink-0 items-center px-4">
          <a class="text-lg font-semibold tracking-tighter text-black focus:outline-none focus:ring" href="/">
            <span class="flex items-center gap-2 mt-auto">
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
              Home
            </p>
            <ul>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="#_">
                  <ion-icon class="size-4 md hydrated" name="aperture-outline" role="img" aria-label="aperture outline"></ion-icon>
                  <span class="ml-4"> Dashboard </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="#_">
                  <ion-icon class="size-4 md hydrated" name="trending-up-outline" role="img" aria-label="trending up outline"></ion-icon>
                  <span class="ml-4"> Performance </span>
                </a>
              </li>
            </ul>
            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
              ECOMMERCE
            </p>
            <ul>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="{{route('home')}}">
                  <ion-icon class="size-4 md hydrated" name="newspaper-outline" role="img" aria-label="newspaper outline"></ion-icon>
                  <span class="ml-4"> List </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="#_">
                  <ion-icon class="size-4 md hydrated" name="sync-outline" role="img" aria-label="sync outline"></ion-icon>
                  <span class="ml-4"> Create </span>
                  <span class="inline-flex ml-auto items-center rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-500">
                    25
                  </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="#_">
                  <ion-icon class="size-4 md hydrated" name="shield-checkmark-outline" role="img" aria-label="shield checkmark outline"></ion-icon>
                  <span class="ml-4"> Checklist </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="">
                  <ion-icon class="size-4 md hydrated" name="thumbs-up-outline" role="img" aria-label="thumbs up outline"></ion-icon>
                  <span class="ml-4"> TLD </span>
                </a>
              </li>
            </ul>
            <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase">
              Contact
            </p>
            <ul>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="{{route('contact')}}">
                  <ion-icon class="size-4 md hydrated" name="albums-outline" role="img" aria-label="albums outline"></ion-icon>
                  <span class="ml-4"> Contact </span>
                  <span class="inline-flex ml-auto items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-500">
                    25
                  </span>
                </a>
              </li>
              <li>
                <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-primary-lighter hover:scale-95 hover:text-[#00AC55]" href="#_">
                  <ion-icon class="size-4 md hydrated" name="link-outline" role="img" aria-label="link outline"></ion-icon>
                  <span class="ml-4"> Links </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
