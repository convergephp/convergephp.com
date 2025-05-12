<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-theme="black">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <meta name="description"
              content="{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}">

        <!-- SEO Meta Tags -->
        <meta name="robots"
              content="index, follow">
        <meta name="keywords"
              content="{{ $keywords ?? 'laravel, documentation, framework, converge, developer tools' }}">
        <meta name="author"
              content="{{ $author ?? 'Converge Team' }}">
        <meta name="copyright"
              content="{{ $copyright ?? date('Y') . ' Converge' }}">
        <meta name="language"
              content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta name="revisit-after"
              content="7 days">
        <meta name="generator"
              content="Laravel">

        <!-- Canonical URL to prevent duplicate content -->
        <link rel="canonical"
              href="{{ url()->current() }}">

        <!-- Open Graph / Facebook Meta Tags -->
        <meta property="og:title"
              content="{{ $title ?? 'Converge' }}">
        <meta property="og:description"
              content="{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}">
        <meta property="og:type"
              content="website">
        <meta property="og:url"
              content="{{ url()->current() }}">
        <meta property="og:image"
              content="{{ asset('images/converge.webp') }}">
        <meta property="og:image:alt"
              content="Converge - Laravel Documentation Framework">
        <meta property="og:site_name"
              content="Converge">
        <meta property="og:locale"
              content="{{ str_replace('_', '-', app()->getLocale()) }}">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card"
              content="summary_large_image">
        <meta name="twitter:title"
              content="{{ $title ?? 'Converge' }}">
        <meta name="twitter:description"
              content="{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}">
        <meta name="twitter:image"
              content="{{ asset('images/converge.webp') }}">
        <meta name="twitter:image:alt"
              content="Converge - Laravel Documentation Framework">

        <!-- Mobile Meta Tags -->
        <meta name="apple-mobile-web-app-capable"
              content="yes">
        <meta name="apple-mobile-web-app-status-bar-style"
              content="black">
        <meta name="format-detection"
              content="telephone=no">

        <title>{{ $title ?? 'Converge' }} - Laravel Documentation Framework</title>

        <!-- Favicon -->
        <link rel="icon"
              type="image/png"
              sizes="32x32"
              href="{{ asset('images/favicon.png') }}">
        <link rel="icon"
              type="image/png"
              sizes="16x16"
              href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon"
              sizes="180x180"
              href="{{ asset('images/favicon.png') }}">

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

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Converge",
            "description": "{{ $description ?? 'Advanced documentation management framework for Laravel artisans' }}",
            "url": "{{ url('/') }}",
            "image": "{{ asset('images/converge.webp') }}"
        }
        </script>

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
