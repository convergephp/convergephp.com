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

    <body class="bg-base-200 text-base-content !font-sans antialiased">
      

        <div class=" bg-white/5">
            <header class="col-span-12 mx-auto h-full text-center">
                <h3 class="text-3xl font-medium text-white text-gray-700 ">{{ $title ?? '' }}</h3>
                <p class="text-gray-600 text-lg font-medium">{{ $subTitle ??''}}</p>
            </header>
            <div class="container relative  mx-auto grid max-w-4xl grid-cols-12 items-start rounded-xl  px-6 py-10 transition-colors duration-300 md:gap-x-10 md:px-12 2xl:gap-x-12">
                <div class="sm:pt-8  justify-self-center z-10 md:col-span-4 md:block">
                    <aside class="menu">
                        <ul class="mt-8 flex flex-col gap-y-2">
                            <x-settings.link
                                href="{{ route('settings.profile') }}"
                                label="Account"
                                wire:navigate.hover
                                :active="request()->RouteIs('settings.profile')"
                            />    
                            <x-settings.link
                                href="{{ route('settings.password') }}"
                                label="Profile Account"
                                wire:navigate.hover
                                :active="request()->RouteIs('settings.password')"
                            />
                            <x-settings.link
                                href="{{ route('settings.password') }}"
                                label="Profile Account"
                                wire:navigate.hover
                                :active="request()->RouteIs('settings.password')"
                            />
                        </ul>
                    </aside>
                </div>
            
                <div class="col-span-12 md:col-span-8 text-gray-700 dark:text-white">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @livewireScriptConfig
    </body>

</html>
