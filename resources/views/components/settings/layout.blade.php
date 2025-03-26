<x-layout.index>
    <div>
        <header class="col-span-12 mx-auto h-full text-center">
            <h3 class="text-3xl font-medium text-gray-700 text-white">{{ $title ?? '' }}</h3>
            <p class="text-lg font-medium text-gray-600">{{ $subTitle ?? '' }}</p>
        </header>
        <div
            class="container relative mx-auto grid max-w-4xl grid-cols-12 items-start rounded-xl px-6 py-10 transition-colors duration-300 md:gap-x-10 md:px-12 2xl:gap-x-12">
            <div class="z-10 justify-self-center sm:pt-8 md:col-span-4 md:block">
                <aside class="menu">
                    <ul>
                        <li class="">
                            <div>Settings</div>
                            <ul class="mt-8 ml-3 flex flex-col gap-y-2">
                                <x-settings.link href="{{ route('settings.profile') }}" label="Account" wire:navigate.hover
                                :active="request()->RouteIs('settings.profile')" />
                                <x-settings.link href="{{ route('settings.password') }}" label="Profile Account" wire:navigate.hover
                                :active="request()->RouteIs('settings.password')" />
                            </ul>
                        </li>
                        <li class="">
                            <div>Settings</div>
                            <ul class="mt-8 ml-3 flex flex-col gap-y-2">
                                <x-settings.link href="{{ route('board.transactions') }}" label="Account" wire:navigate.hover
                                :active="request()->RouteIs('board.transactions')" />
                                <x-settings.link href="{{ route('settings.password') }}" label="Profile Account" wire:navigate.hover
                                :active="request()->RouteIs('board.transactions')" />
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
