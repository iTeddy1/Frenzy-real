<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Frenzy') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-public">
        <div class="flex h-screen overflow-hidden">
            @include("layouts.sidebar")
            {{-- <x-header /> --}}
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    
                @include("layouts.navigation")
                <main>
                    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
