<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Frenzy</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(["resources/css/app.css", "resources/js/app.js"])
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
