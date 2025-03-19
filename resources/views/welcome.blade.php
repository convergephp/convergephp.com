<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black bg-white dark:text-white/50">
        {{-- ANIMATED LINE --}}
        <x-animated-line-svg height="68"
                             direction="ltr"
                             duration="2"
                             strokeWidth="2"
                             colorStart="#2EB9DF"
                             background="transparent"
                             colorEnd="#9E00FF"
                             class="transfor fixed left-0 top-[120px] hidden md:left-20 md:block lg:left-52" />

        <x-animated-line-svg height="68"
                             direction="ltr"
                             duration="2"
                             strokeWidth="2"
                             colorStart="#2EB9DF"
                             background="transparent"
                             colorEnd="#9E00FF"
                             class="transfor fixed right-10 top-[320px] hidden md:block" />

        {{-- NAVBARE HEADER --}}
        @include('partials.navbar')

        {{-- HERO SECTION --}}
        @include('partials.hero')
    </body>
</html>
