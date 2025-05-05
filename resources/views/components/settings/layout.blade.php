<x-layout.index>
    <div class="mx-auto max-w-7xl px-3 pt-6">

        {{-- Header --}}
        <header class="w-full overflow-hidden rounded-lg text-center">
            <div data-aos="fade-up"
                 data-aos-duration="500"
                 class="mx-auto grid max-w-5xl items-start justify-center gap-5">
                <div class="text-3xl/[1.07] font-bold tracking-tight md:text-4xl/[1.07]">
                    <span
                          class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text tracking-widest text-transparent">
                        {{ $title ?? '' }}
                    </span>
                </div>
                <div class="text-base-content/50 text-lg tracking-wide">
                    {{ $subTitle ?? '' }}
                </div>
            </div>
        </header>

        {{-- Body --}}
        <div
             class="relative mx-auto mt-8 grid w-full gap-6 rounded-xl pb-10 transition-colors duration-300 md:grid-cols-12">

            {{-- MOBIL NAVIGATION --}}
            <div class="block w-full overflow-x-auto py-2 md:hidden">
                <div class="no-scrolle scrollbar-hidden flex space-x-2 overflow-x-auto pb-2 dark:border-gray-700">
                    <a href="{{ route('boards.licenses') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('boards.licenses'),
                       ])
                       wire:navigate.hover>Licenses</a>

                    <a href="{{ route('boards.transactions') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('boards.transactions'),
                       ])
                       wire:navigate.hover>Transactions</a>

                    <a href="{{ route('boards.activations') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('boards.activations'),
                       ])
                       wire:navigate.hover>Activations</a>
                    <a href="{{ route('boards.billing') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('boards.billing'),
                       ])
                       wire:navigate.hover>Billing</a>
                    <a href="{{ route('settings.profile') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('settings.profile'),
                       ])
                       wire:navigate.hover>Profile</a>
                    <a href="{{ route('settings.password') }}"
                       @class([
                           'btn btn-ghost btn-sm border-b border-base-100',
                           '!text-primary border-primary' => request()->RouteIs('settings.password'),
                       ])
                       wire:navigate.hover>Password</a>
                </div>
            </div>

            <!-- DESCTOP SIDBARE NAVIGATION -->
            <div class="hidden w-full md:col-span-3 md:block">
                <aside class="menu w-full p-0 md:sticky">
                    <ul class="list flex w-full flex-col gap-y-6 p-0">
                        <div class="border-base-300 bg-base-100 w-full overflow-hidden rounded-lg border py-4">
                            {{-- Group name --}}
                            <li class="p-4 text-sm tracking-wide opacity-60">Licensing
                                Management</li>
                            {{-- Items --}}
                            <div class="flex flex-col p-0">
                                <x-settings.link href="{{ route('boards.licenses') }}"
                                                 :active="request()->RouteIs('boards.licenses')"
                                                 label="Licenses"
                                                 icon="iconsax-bul-key-square"
                                                 wire:navigate.hover />

                                <x-settings.link href="{{ route('boards.transactions') }}"
                                                 label="Transactions"
                                                 :active="request()->RouteIs('boards.transactions')"
                                                 icon="iconsax-bul-transaction-minus"
                                                 wire:navigate.hover />

                                <x-settings.link :active="request()->RouteIs('boards.activations')"
                                                 href="{{ route('boards.activations') }}"
                                                 label="Activations"
                                                 icon="iconsax-bul-folder-minus"
                                                 wire:navigate.hover />

                                <x-settings.link :active="request()->RouteIs('boards.billing')"
                                                 href="{{ route('boards.billing') }}"
                                                 icon="iconsax-bul-dollar-circle"
                                                 label="Billing Portal"
                                                 wire:navigate.hover />
                            </div>
                        </div>

                        <div class="border-base-300 bg-base-100 w-full overflow-hidden rounded-lg border py-4">
                            {{-- Group name --}}
                            <li class="p-4 text-sm tracking-wide opacity-60">Account Settings</li>

                            {{-- Items --}}
                            <div class="flex flex-col p-0">
                                <x-settings.link href="{{ route('settings.profile') }}"
                                                 :active="request()->RouteIs('settings.profile')"
                                                 label="Profile Account"
                                                 icon="iconsax-bul-profile-circle"
                                                 wire:navigate.hover />
                                <x-settings.link href="{{ route('settings.password') }}"
                                                 :active="request()->RouteIs('settings.password')"
                                                 label="Password"
                                                 icon="iconsax-bul-password-check"
                                                 wire:navigate.hover />

                                <x-settings.link href="{{ route('filament.admin.pages.dashboard') }}"
                                                 :active="request()->RouteIs('filament.admin.pages.dashboard')"
                                                 label="Admin"
                                                 icon="iconsax-bul-user-octagon" />
                            </div>
                        </div>
                    </ul>
                </aside>
            </div>

            <!-- Main content - Full width on mobile, 8 cols on md+ -->
            <div class="bg-base-100 w-full rounded-lg p-4 py-0 text-gray-700 md:col-span-9 dark:text-white">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout.index>
