<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-theme="black">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <meta name="description"
              content="{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}">

        <!-- SEO and Social Media Meta Tags -->
        <meta property="og:title"
              content="{{ $title ?? 'Converge' }}">
        <meta property="og:description"
              content="{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}">
        <meta property="og:type"
              content="website">
        <meta property="og:url"
              content="{{ url()->current() }}">
        <meta property="og:image"
              content="{{ asset('exemple-2.png') }}">
        <meta name="twitter:card"
              content="{{ asset('exemple-2.png') }}">

        <title>{{ $title ?? 'Converge' }}</title>

        <!-- Favicon -->
        <link rel="icon"
              type="image/png"
              sizes="32x32"
              href="{{ asset('storage/images/favicon.png') }}">
        <link rel="icon"
              type="image/png"
              sizes="16x16"
              href="{{ asset('storage/images/favicon.png') }}">
        <link rel="apple-touch-icon"
              sizes="180x180"
              href="{{ asset('storage/images/favicon.png') }}">

        <!-- Theme handling with reduced FOUC -->
        <script>
            // Immediately set theme to prevent flash of unstyled content
            (function() {
                const savedThemeIndex = localStorage.getItem('theme-index') ?? '1';
                const themes = ['light', 'black'];
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                // Use saved theme or system preference as fallback
                if (savedThemeIndex !== null) {
                    document.documentElement.setAttribute('data-theme', themes[parseInt(savedThemeIndex)]);
                } else {
                    document.documentElement.setAttribute('data-theme', prefersDark ? 'black' : 'light');
                }
            })();
        </script>

        @vite(['resources/css/app.css'])

        <!-- Paddle JS with defer attribute -->
        @paddleJS()
    </head>

    <body class="bg-base-200 text-base-content min-h-screen !font-sans antialiased">

        {{ $slot }}

        <!-- Footer -->
        <x-partials.footer />

        @vite(['resources/js/app.js'])
        @livewireScriptConfig
    </body>

</html>
