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

        {{-- THEME --}}
        <script>
            const savedThemeIndex = localStorage.getItem('theme-index');
            const themes = ['light', 'black'];

            if (savedThemeIndex !== null) {
                document.documentElement.setAttribute('data-theme', themes[parseInt(savedThemeIndex)]);
            }
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @paddleJS
    </head>

    <body class="bg-base-200 text-base-content h-screen !font-sans antialiased">
        {{-- NAVBARE HEADER --}}
        @include('partials.navbar')

        <section class="px-4 pt-[10rem]">
            <div class="m-auto max-w-2xl">
                {{ $slot }}
            </div>
        </section>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        @livewireScriptConfig
    </body>

</html>
