<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session("status")" />

    <section class="flex min-h-screen w-full items-stretch">
        <div
            class="relative hidden w-1/2 items-center bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')] bg-cover bg-no-repeat lg:flex">
            <div class="absolute inset-0 z-0 opacity-60"></div>
        </div>
        <div class="z-0 flex w-full items-center justify-center px-0 md:px-16 lg:w-1/2">
            <div
                class="absolute inset-0 z-10 items-center bg-gray-500 bg-[url('https://images.pexels.com/photos/10471216/pexels-photo-10471216.jpeg')] bg-cover bg-no-repeat lg:hidden">
                <div class="absolute inset-0 z-0 bg-gray-600 opacity-60"></div>
            </div>
            <div class="z-20 m-[60px] w-full">
                <h1 class="mb-8 text-center text-4xl font-semibold text-white lg:text-text-dark">Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="-mx-3 flex">
                        <div class="mb-5 w-full px-3">

                            <!-- Email Address -->
                            <div>
                                <x-forms.input-label class="text-[16px] text-white lg:text-text-dark" for="email"
                                    :value="__('Email')" />
                                <div class="flex">
                                    <div
                                        class="pointer-events-none z-10 flex w-10 items-center justify-center pl-1 text-center">
                                        <svg class="icon icon-tabler icon-tabler-mail text-lg text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="40"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                            <path d="M3 7l9 6l9 -6" />
                                        </svg>
                                    </div>
                                    <x-forms.text-input
                                        class="mt-1 -ml-10 w-full rounded-md border border-gray-200 py-2 pl-10 pr-3 outline-none focus:border-blue-500"
                                        id="email" name="email" type="email" placeholder="Enter your email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                </div>
                                <x-forms.input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="-mx-3 flex">
                        <div class="mb-5 w-full px-3">
                            <div class="mt-4">
                                <x-forms.input-label class="text-white lg:text-text-dark" for="password"
                                    :value="__('Password')" />
                                <div class="flex">
                                    <div
                                        class="pointer-events-none z-10 flex w-10 items-center justify-center pl-1 text-center">
                                        <svg class="icon icon-tabler icon-tabler-brand-samsungpass text-lg text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="40"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 10m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                            <path d="M7 10v-1.862c0 -2.838 2.239 -5.138 5 -5.138s5 2.3 5 5.138v1.862" />
                                            <path
                                                d="M10.485 17.577c.337 .29 .7 .423 1.515 .423h.413c.323 0 .633 -.133 .862 -.368a1.27 1.27 0 0 0 .356 -.886c0 -.332 -.128 -.65 -.356 -.886a1.203 1.203 0 0 0 -.862 -.368h-.826a1.2 1.2 0 0 1 -.861 -.367a1.27 1.27 0 0 1 -.356 -.886c0 -.332 .128 -.651 .356 -.886a1.2 1.2 0 0 1 .861 -.368h.413c.816 0 1.178 .133 1.515 .423" />
                                        </svg>

                                    </div>

                                    <x-forms.text-input
                                        class="mt-1 -ml-10 w-full rounded-lg border border-gray-200 py-2 pl-10 pr-3 outline-none focus:border-blue-500"
                                        id="password" name="password" type="password" placeholder="Password" required
                                        autocomplete="current-password" />

                                    <x-forms.input-error class="mt-2" :messages="$errors->get('password')" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mt4 mb-2 flex flex-wrap items-center justify-between">
                        <div class="mt-4 block">
                            <label class="inline-flex items-center" for="remember_me">
                                <input
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:outline-none focus:ring-indigo-500"
                                    id="remember_me" name="remember" type="checkbox" checked>
                                <span
                                    class="ml-2 text-[16px] text-white lg:text-gray-700">{{ __("Remember me") }}</span>
                            </label>
                        </div>

                        <div class="mt-4 flex items-center justify-end">
                            @if (Route::has("password.request"))
                                <a class="float-right text-[16px] text-error-dark hover:text-secondary-darker hover:underline lg:text-secondary-dark"
                                    href="{{ route("password.request") }}">
                                    {{ __("Forgot your password?") }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <x-primary-button
                        class="w-full flex justify-center items-center rounded-md bg-primary px-4 py-2 text-center font-semibold text-white hover:bg-primary-darker">
                        <div class="text-center text-[16px]">
                            {{ __("Log in") }}
                        </div>
                    </x-primary-button>
                </form>
                <div class="mt-6 text-center text-blue-500">
                    <a class="text-[16px] text-error-dark hover:text-secondary-darker hover:underline lg:text-secondary-dark"
                        href="{{ route("register") }}">Sign
                        up Here</a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
