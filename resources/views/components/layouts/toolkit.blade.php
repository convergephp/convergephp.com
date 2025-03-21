<x-layouts.marketing>
    <div class="m-auto max-w-7xl">
        {{ $slot }}
    </div>

    <div class="mx-auto max-w-7xl px-4 py-8 lg:px-6 lg:py-20">
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
</x-layouts.marketing>
