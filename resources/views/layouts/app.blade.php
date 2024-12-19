<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("app.name", "Frenzy") }}</title>
    <link rel="shortcut icon"  href="{{ Vite::asset("/public/images/logo.png") }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body class="font-public">
    <div class="flex h-screen overflow-auto">
        @auth
        @if(Auth::user()->role === 'admin')
            @include('layouts.partials.admin-sidebar')
        @elseif(Auth::user()->role === 'user')
            @include('layouts.partials.sidebar')
        @endif
        @endauth
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            @include("layouts.partials.navigation")
            <main class="">
                <div class="mx-auto 2xl:mx-0 p-4 md:p-6 2xl:p-10">
                    @yield('content')
                </div>
            </main>
            @include("layouts.partials.footer")
        </div>
    </div>
</body>

</html>
