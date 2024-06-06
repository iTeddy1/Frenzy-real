<x-guest-layout>
    <section class="min-h-screen flex items-stretch">
        <div
            class="lg:flex w-1/2 hidden  bg-no-repeat bg-cover relative items-center  bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')] ">
            <div class="absolute  opacity-60 inset-0 z-0"></div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center  md:px-16 px-0 z-0">
            <div
                class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center  bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')] ">
                <div class="absolute bg-gray-700 opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20 m-[50px]">

                <h1 class="text-4xl font-semibold mb-8 lg:text-text-dark text-white text-center">Sign Up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-5">

                            <x-forms.input-label for="first_name" class="lg:text-text-dark text-white" :value="__('First name')" />
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user text-gray-400  text-lg" width="25"
                                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                </div>
                                <x-forms.text-input id="first_name"
                                    class="w-full mt-1 -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="First name" type="text" name="first_name" :value="old('first_name')"
                                    required autofocus autocomplete="first_name" />
                            </div>
                            <x-forms.input-error :messages="$errors->get('first_name')" class="mt-2" />
                        </div>

                        <div class="w-1/2 px-3 mb-5">

                        <x-forms.input-label for="last_name" class="lg:text-text-dark text-white" :value="__('Last name')" />
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-user text-gray-400  text-lg" width="25"
                                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                </div>
                                <x-forms.text-input id="last_name" 
                                class="w-full mt-1 -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="Last name"
                                     type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                            </div>
                            <x-forms.input-error :messages="$errors->get('last_name')" class="mt-2" />
                        </div>
                    </div>


                    <!-- Email Address -->
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">

                            <x-forms.input-label for="email" class="lg:text-text-dark text-white"
                                :value="__('Email')" />
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-mail text-gray-400 text-lg" width="25"
                                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                        <path d="M3 7l9 6l9 -6" />
                                    </svg>
                                </div>
                                <x-forms.text-input id="email"
                                    class="w-full mt-1 -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="Inter your email" type="email" name="email" :value="old('email')"
                                    required autocomplete="email" />
                            </div>
                            <x-forms.input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">

                            <x-forms.input-label for="password" class="lg:text-text-dark text-white"
                                :value="__('Password')" />
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-samsungpass text-gray-400 text-lg"
                                        width="25" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 10m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                        <path d="M7 10v-1.862c0 -2.838 2.239 -5.138 5 -5.138s5 2.3 5 5.138v1.862" />
                                        <path
                                            d="M10.485 17.577c.337 .29 .7 .423 1.515 .423h.413c.323 0 .633 -.133 .862 -.368a1.27 1.27 0 0 0 .356 -.886c0 -.332 -.128 -.65 -.356 -.886a1.203 1.203 0 0 0 -.862 -.368h-.826a1.2 1.2 0 0 1 -.861 -.367a1.27 1.27 0 0 1 -.356 -.886c0 -.332 .128 -.651 .356 -.886a1.2 1.2 0 0 1 .861 -.368h.413c.816 0 1.178 .133 1.515 .423" />
                                    </svg>

                                </div>
                                <x-forms.text-input id="password"
                                    class="w-full mt-1 -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-indigo-500"
                                    type="password" name="password" placeholder="Password" required
                                    autocomplete="new-password" />
                            </div>
                            <x-forms.input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-8">

                            <x-forms.input-label for="password_confirmation" class="lg:text-text-dark text-white"
                                :value="__('Confirm Password')" />
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-samsungpass text-gray-400 text-lg"
                                        width="25" height="40" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M4 10m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                        <path d="M7 10v-1.862c0 -2.838 2.239 -5.138 5 -5.138s5 2.3 5 5.138v1.862" />
                                        <path
                                            d="M10.485 17.577c.337 .29 .7 .423 1.515 .423h.413c.323 0 .633 -.133 .862 -.368a1.27 1.27 0 0 0 .356 -.886c0 -.332 -.128 -.65 -.356 -.886a1.203 1.203 0 0 0 -.862 -.368h-.826a1.2 1.2 0 0 1 -.861 -.367a1.27 1.27 0 0 1 -.356 -.886c0 -.332 .128 -.651 .356 -.886a1.2 1.2 0 0 1 .861 -.368h.413c.816 0 1.178 .133 1.515 .423" />
                                    </svg>

                                </div>
                                <x-forms.text-input id="password_confirmation"
                                    class="w-full mt-1 -ml-10 pl-10 pr-3 py-2 rounded-lg border border-gray-200 outline-none focus:border-indigo-500"
                                    type="password" placeholder="Confirm Password" name="password_confirmation"
                                    required autocomplete="new-password" />
                            </div>
                            <x-forms.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="block mt-2">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="mb-3 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none"
                                checked name="remember">
                            <span
                                class="ml-2 mb-3 text-[16px] text-white lg:text-gray-700">{{ __('I accept the Terms of Use & Privacy Policy') }}</span>
                        </label>
                    </div>


                    <x-primary-button
                        class="bg-primary hover:bg-primary-darker flex justify-center text-white font-semibold rounded-md py-2  px-4 w-full ">
                        <div class="text-[16px] ">
                            {{ __('Sign Up') }}
                        </div>
                    </x-primary-button>


                </form>
                <div class="flex items-center  mt-4">
                    <p class=" ml-2 text-[16px] text-white lg:text-active-dark"> Already have an account?
                        <a class="mt-6  text-center hover:underline hover:text-secondary-light lg:text-secondary-dark text-error-dark"
                            href="{{ route('login') }}">
                            {{ __('Login here') }}
                        </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>