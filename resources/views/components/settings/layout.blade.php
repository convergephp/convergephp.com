<x-layout.index>
    <div>
        <header class="col-span-12 mx-auto h-full text-center">
            <h3 class="text-3xl font-medium text-gray-700 text-white">{{ $title ?? '' }}</h3>
            <p class="text-lg font-medium text-gray-600">{{ $subTitle ?? '' }}</p>
        </header>
        <div
            class="container relative mx-auto grid max-w-5xl grid-cols-12 items-start rounded-xl px-6 pb-10 transition-colors duration-300 md:gap-x-10 md:px-12 2xl:gap-x-12">
            <div class="z-10 justify-self-center sm:pt-8 md:col-span-4 md:block">
                <aside class="menu">
                    <ul>
                        <li>
                            <div class="font-medium text-lg">licensing Managment</div>
                            <ul class="mt-8 ml-3 flex flex-col gap-y-2">
                                <x-settings.link 
                                    href="{{ route('boards.transactions') }}" label="Transactions" 
                                    :active="request()->RouteIs('boards.transactions')" 
                                    wire:navigate.hover
                                />

                                <x-settings.link 
                                    href="{{ route('boards.licenses') }}" 
                                    :active="request()->RouteIs('boards.licenses')" 
                                    label="Licenses" 
                                    wire:navigate.hover
                                />
                                
                                <x-settings.link 
                                    :active="request()->RouteIs('boards.activations')" 
                                    href="{{ route('boards.activations') }}" label="Activations" 
                                    wire:navigate.hover
                                />
                                
                                <x-settings.link 
                                    :active="request()->RouteIs('boards.billing')"
                                    href="{{ route('boards.billing') }}" label="Billing Portal" 
                                    wire:navigate.hover
                                />

                            </ul>
                        </li>
                        <li class="">
                            <div class="font-medium text-lg">Account Settings</div>
                            <ul class="mt-8 ml-3 flex flex-col gap-y-2">
                                <x-settings.link 
                                    href="{{ route('settings.profile') }}" 
                                    :active="request()->RouteIs('settings.profile')" 
                                    label="Profile Account" 
                                    wire:navigate.hover
                                />
                                <x-settings.link 
                                    href="{{ route('settings.password') }}" 
                                    :active="request()->RouteIs('settings.password')" 
                                    label="Password" 
                                    wire:navigate.hover
                                />
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
    
            <div class="col-span-12 text-gray-700 md:col-span-8 dark:text-white">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout.index>
