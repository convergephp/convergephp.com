<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="dark">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"
              rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
                defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-white font-sans antialiased dark:bg-black dark:text-white/50">
        {{-- NAVBARE HEADER --}}
        @include('partials.navbar')

        {{-- HERO SECTION --}}
        @include('partials.hero')

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>

</html>
