<header class="sticky inset-x-0 top-0 z-50 transition-all duration-300"
        x-data="{
            mobileMenuOpen: false,
            toolkitOpen: false,
            solutionsOpen: false,
            scrolled: false
        }">
    {{-- <div x-show="!scrolled">
        <x-banner class="bg-base-100 sticky top-0 flex w-full" />
    </div> --}}
    <div class="relative flex justify-center">
        <div x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
             :class="{ 'bg-transparent': !scrolled, 'backdrop-blur-md bg-base-100/70 my-2 rounded-3xl shadow-md': scrolled }"
             class="relative mx-2 w-full max-w-7xl px-3 md:mx-0">
            <nav class="flex items-center justify-between md:min-h-[5rem]"
                 aria-label="Global">
                {{-- LOGO --}}
                <a href="/"
                   wire:navigate.hover>
                    <x-app-logo-2 class="h-[1.4rem] !stroke-cyan-900 md:h-[1.6rem]"></x-app-logo-2>
                </a>

                {{-- NAVBAR ITEMS - DESKTOP --}}
                <div
                     class="text-base-content hover:text-base-content/80 hidden min-h-[5rem] flex-1 items-center justify-start px-4 text-sm font-medium transition md:flex">
                    <x-navbar.link :active="request()->routeIs('converge-docs')"
                                   :href="route('converge-docs')">Documentation</x-navbar.link>

                    {{-- <x-navbar.link href="{{ route('products.index') }}"
                                   : active="request()->routeIs('products.index')"
                                   wire:navigate.hover>Toolkits</x-navbar.link> --}}

                    <x-navbar.link href="{{ route('roadmap') }}"
                                   :active="request()->routeIs('roadmap')"
                                   wire:navigate.hover>Roadmap</x-navbar.link>
                </div>

                {{-- THEME SWITCHER --}}
                <div class="flex h-full min-h-[5rem] grow items-center justify-end gap-2">
                    <x-theme-switcher class="md:order-5" />

                    {{-- Actions buttons --}}
                    {{-- @if (Auth::check())
                        <form method="POST"
                              action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-sm btn-square bg-base-300/80 rounded-sm border border-gray-400/20 md:px-8">
                                <span class="hidden md:block">{{ __('Logout') }}</span>
                                <x-iconsax-bul-logout class="w-5 md:hidden" />
                            </button>
                        </form>
                        <a href="{{ route('boards.licenses') }}"
                           wire:navigate.hover
                           class="btn btn-sm btn-square bg-base-300/80 rounded-sm border border-gray-400/20 md:max-w-fit md:px-8">
                            <span class="hidden md:block">Board</span>
                            <x-iconsax-bul-setting-2 class="w-5 md:hidden" />
                        </a>
                    @endif
                    @if (!Auth::check() && !Request()->routeIs('login') && !Request()->routeIs('register'))
                        <a href="{{ route('login') }}"
                           wire:navigate.hover
                           class="btn btn-sm btn-square md:btn-link bg-base-300/80 btn-ghost rounded-sm border border-gray-400/20 px-0 no-underline md:!px-8">
                            <span class="hidden md:inline">{{ __('Login') }}</span>
                            <x-iconsax-bul-login-1 class="w-5 md:hidden" />
                        </a>
                    @endif --}}

                    {{-- MOBILE MENU TOGGLE BUTTON --}}
                    <div class="flex items-center md:hidden">
                        <button x-on:click="mobileMenuOpen = !mobileMenuOpen"
                                class="btn btn-square btn-sm bg-base-300/80 rounded-sm"
                                aria-expanded="false"
                                x-bind:aria-expanded="mobileMenuOpen.toString()">
                            <span class="sr-only">Open main menu</span>
                            {{-- Icon when menu is closed --}}
                            <svg x-show="!mobileMenuOpen"
                                 stroke="currentColor"
                                 fill="currentColor"
                                 class="text-base-content h-6 w-6"
                                 stroke-width="0"
                                 viewBox="0 0 24 24"
                                 color="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                            </svg>

                            {{-- Icon when menu is open --}}
                            <svg x-show="mobileMenuOpen"
                                 class="h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 style="display: none;">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>

            {{-- MOBILE MENU PANEL --}}
            <div x-show="mobileMenuOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="bg-base-200 absolute left-0 right-0 top-full mt-2 h-screen rounded-3xl shadow-lg md:hidden"
                 style="display: none;">
                <div class="space-y-1 pb-3 pt-2">
                    {{-- Documentation Link --}}
                    <a href="{{ route('converge-docs') }}"
                       class="text-base-content hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Documentation
                    </a>

                    {{-- <a href="{{ route('products.index') }}"
                       wire:navigate.hover
                       class="{{ request()->routeIs('products.index') ? '!text-primary' : 'text-base-content' }} hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Toolkits
                    </a> --}}

                    <a href="{{ route('roadmap') }}"
                       wire:navigate.hover
                       class="{{ request()->routeIs('roadmap') ? '!text-primary' : 'text-base-content' }} hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Roadmap
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
