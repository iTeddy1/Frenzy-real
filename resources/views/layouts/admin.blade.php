<!DOCTYPE html>
<html lang="en">

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

<body class="font-public" x-data="{ darkMode: false }">
    <div class="flex h-full overflow-hidden">
        @include("layouts.partials.admin-sidebar")
        {{-- <x-header /> --}}
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            @include("layouts.partials.navigation")
            <main>
                <div class="mx-auto max-w-screen-2xl px-4 md:p-6 2xl:p-10">
                    @yield("content")
                </div>
            </main>
        </div>
    </div>
    @include("layouts.partials.footer")
</body>

</html>
