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
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
                defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-base-200 text-base-content font-sans antialiased">

        @include('partials.navbar')

        <section class="bg-base-200 pt-[6rem]">
            <div class="mx-auto max-w-7xl px-4 py-8 lg:px-6 lg:py-10">
                {{-- Title --}}
                <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                    <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-tight">
                        Flexible Plans for Every Developer
                    </h2>
                    <p class="text-base-content mb-5 font-light sm:text-xl">
                        Choose the perfect package for your project needs, from solo development to enterprise solutions
                    </p>
                </div>

                <div class="flex flex-wrap justify-center space-y-8 sm:gap-2">

                    <!-- Solo Developer Plan -->
                    <x-pricing-card title="Starter Pack"
                                    description="Perfect for solo developers"
                                    price="29"
                                    period="/lifetime licence"
                                    :features="['One production licence', '5 licence key', 'Forever updates']" />

                    <!-- Agency Plan -->
                    <x-pricing-card title="Agency"
                                    description="Ideal for teams and multiple client projects"
                                    price="99"
                                    period="/lifetime licence"
                                    :features="[
                                        'Unlimited dev, staging, and production projects',
                                        'No setup, or hidden fees',
                                        'Team size: <span class=\'font-semibold\'>unlimited</span>',
                                        'Unlimited license keys',
                                        'Unlimited production domains',
                                        'Email support',
                                        'Forever updates',
                                    ]" />
                </div>
            </div>
        </section>

        <script>
            AOS.init();
        </script>
    </body>

</html>
