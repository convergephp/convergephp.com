<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-theme="black">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
              rel="stylesheet">
        <script defer
                src="https://cdn.jsdelivr.net/npm/@alpinejs/anchor@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
                defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @paddleJS
    </head>

    <body class="bg-base-200 text-base-content font-sans antialiased">
        {{-- NAVBARE HEADER --}}
        @include('partials.navbar')

        <section class="bg-base-200 pt-[6rem]">
            {{ $slot }}
        </section>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>
