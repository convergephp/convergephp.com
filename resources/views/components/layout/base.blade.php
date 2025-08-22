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

        <!-- Primary Meta Tags -->
        <title>{{ $title ?? 'Converge - Laravel Documentation Framework ' }} - Laravel Documentation Framework</title>
        <meta name="title"
              content="Converge - Laravel Documentation Framework" />
        <meta name="description"
              content="Advanced documentation management framework for Laravel artisans" />
        <meta name="keywords"
              content="laravel, documentation, framework, converge, developer tools" />
        <meta name="author"
              content="Mohamed CHARRAFI & Ayoub EL HAJJI" />
        <meta name="robots"
              content="index, follow" />
        <meta name="language"
              content="{{ str_replace('_', '-', app()->getLocale()) }}" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type"
              content="website" />
        <meta property="og:url"
              content="{{ url()->current() }}" />
        <meta property="og:title"
              content="Converge - Laravel Documentation Framework" />
        <meta property="og:description"
              content="Advanced documentation management framework for Laravel artisans" />
        <meta property="og:image"
              content="{{ url(asset('images/converge.png')) }}" />
        <meta property="og:image:width"
              content="1200" />
        <meta property="og:image:height"
              content="630" />
        <meta property="og:site_name"
              content="Converge" />
        <meta property="og:locale"
              content="{{ str_replace('_', '-', app()->getLocale()) }}" />

        <!-- Twitter -->
        <meta property="twitter:card"
              content="summary_large_image" />
        <meta property="twitter:url"
              content="{{ url()->current() }}" />
        <meta property="twitter:title"
              content="Converge - Laravel Documentation Framework" />
        <meta property="twitter:description"
              content="Advanced documentation management framework for Laravel artisans" />
        <meta property="twitter:image"
              content="{{ url(asset('images/converge.png')) }}" />

        <!-- Mobile Meta Tags -->
        <meta name="apple-mobile-web-app-capable"
              content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style"
              content="black" />
        <meta name="format-detection"
              content="telephone=no" />

        <!-- Canonical URL to prevent duplicate content -->
        <link rel="canonical"
              href="{{ url()->current() }}" />

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
            "image": "{{ asset('images/converge.png') }}"
        }
        </script>

        {{-- google analytics --}}
        <x-analytics.gtags />
         <!-- paddle -->
        @paddleJS([])
    </head>

    <body class="bg-base-200 text-base-content min-h-screen !font-sans antialiased">
      <div class="relative">
            <x-fluxtor-banner/>
      </div>

        {{ $slot }}

        <!-- Footer -->
        <x-partials.footer />

        @vite(['resources/js/app.js'])
        @livewireScriptConfig
    </body>

</html>
