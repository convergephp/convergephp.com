<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-theme="black">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <title>Laravel</title>

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

    <body class="bg-base-200 scrollbar-hidden text-base-content min-h-screen !font-sans antialiased">

        {{ $slot }}

        @livewireScriptConfig
    </body>

</html>
