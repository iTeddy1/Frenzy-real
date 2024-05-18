<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    @vite(["resources/css/app.css", "resources/js/app.js"])

</head>

<body class="">
    <main class="grid min-h-full place-items-center px-6 lg:px-8">
        <div class="text-center">
            <table>
                <tr>
                    <td>
                        <p class="font-rubik text-[250px] text-error-dark">4</p>
                    </td>
                    <td>
                        <img class="mr-[10px]" src="{{ Vite::asset("/public/images/error-404.png") }}">
                    </td>
                    <td>
                        <p class="font-rubik text-[250px] text-error-dark">4</p>
                    </td>
                </tr>
                <tr>
                    <td class="font-roboto text-3xl font-normal not-italic text-text-normal pb-8" colspan="3">
                        oops...nothing in here
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <a href="/"
                            class="font-public-sans via-var(--Background-On-Light, #F4F6F7) h-[60px] w-[275px] rounded-xl border border-solid border-primary bg-gradient-to-r from-white to-white stroke-primary stroke-1 text-3xl font-normal text-primary">
                            GO BACK HOME
                        </a>
                    </td>
                </tr>

            </table>
        </div>
    </main>
</body>

</html>
