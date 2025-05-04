<x-banner />
<header class="border-base-300/30 bg-base-200 sticky inset-x-0 top-0 z-50 border-b"
        x-data="{ mobileMenuOpen: false, toolkitOpen: false, solutionsOpen: false }">
    <div class="relative flex justify-center">
        <div class="supports-backdrop-blur:bg-black/10 relative w-full max-w-7xl px-3">
            <nav class="flex min-h-[5rem] items-center justify-between"
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
                    <x-navbar.dropdown-menu 
                                            label="ToolKit">
                        <div class="grid grid-cols-2 gap-4">
                            <x-navbar.card-link :url="route('products.show', ['product' => 'components'])"
                                                title="Blade Components"
                                                description="Visite our beautiful blade components">
                            </x-navbar.card-link>
                            <x-navbar.card-link :url="route('products.show', ['product' => 'layouts-themes'])"
                                                title="Layouts"
                                                description="Create a powerfull layouts">
                            </x-navbar.card-link>
                        </div>
                    </x-navbar.dropdown-menu>

                    <x-navbar.link href="{{ route('products.index') }}"
                                   :active="request()->routeIs('products.index')"
                                   wire:navigate.hover>toolkits</x-navbar.link>

                    {{-- <x-navbar.dropdown-menu label="Solutions">
                        <div class="grid grid-cols-2 gap-4">
                            <x-navbar.card-link title="Documentation"
                                                :active="request()->routeIs('solutions.documentation')"
                                                :url="route('solutions.documentation')"
                                                wire:navigate.hover
                                                description="starts documentating your software right away ">
                            </x-navbar.card-link>
                            <x-navbar.card-link title="Blogging"
                                                :active="request()->routeIs('solutions.bloggin')"
                                                :url="route('solutions.blogging')"
                                                wire:navigate.hover
                                                description="Create a powerfull blog just in minutes">
                            </x-navbar.card-link>
                        </div>
                    </x-navbar.dropdown-menu> --}}

                    <x-navbar.link href="{{ route('roadmap') }}"
                                   :active="request()->routeIs('roadmap')"
                                   wire:navigate.hover>Roadmap</x-navbar.link>
                </div>

                {{-- THEME SWITCHER --}}
                <div class="flex h-full min-h-[5rem] grow items-center justify-end gap-2">
                    <x-theme-switcher class="md:order-5" />

                    {{-- Actions buttons --}}
                    @if (Auth::check())
                        <form method="POST"
                              action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-sm btn-square bg-base-300 rounded-sm border border-gray-400/20 md:px-8">
                                <span class="hidden md:block">{{ __('Logout') }}</span>
                                <x-iconsax-bul-logout class="w-5 md:hidden" />
                            </button>
                        </form>
                        <a href="{{ route('boards.licenses') }}"
                           wire:navigate.hover
                           class="btn btn-sm btn-square bg-base-300 rounded-sm border border-gray-400/20 md:max-w-fit md:px-8">
                            <span class="hidden md:block">Board</span>
                            <x-iconsax-bul-setting-2 class="w-5 md:hidden" />
                        </a>
                    @endif
                    {{-- disable auth system temporary --}}
                    @if (!Auth::check() && !Request()->routeIs('login') && !Request()->routeIs('register'))
                        <a href="{{ route('login') }}"
                           wire:navigate.hover
                           class="btn btn-sm btn-square md:btn-link bg-base-300 btn-ghost rounded-sm border border-gray-400/20 px-0 no-underline md:!px-8">
                            <span class="hidden md:inline">{{ __('Login') }}</span>
                            <x-iconsax-bul-login-1 class="w-5 md:hidden" />
                        </a>
                    @endif

                    {{-- MOBILE MENU TOGGLE BUTTON --}}
                    <div class="flex items-center md:hidden">
                        <button x-on:click="mobileMenuOpen = !mobileMenuOpen"
                                class="btn btn-square btn-sm bg-base-300 rounded-sm"
                                aria-expanded="false"
                                x-bind:aria-expanded="mobileMenuOpen.toString()">
                            <span class="sr-only">Ouvrir le menu principal</span>
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
                 class="bg-base-200 absolute left-0 right-0 top-full mt-0 h-screen shadow-lg md:hidden"
                 style="display: none;">
                <div class="space-y-1 pb-3 pt-2">
                    {{-- Documentation Link --}}
                    <a href="{{ route('converge-docs') }}"
                       class="text-base-content hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Documentation
                    </a>

                    <a href="{{ route('products.index') }}"
                       wire:navigate.hover
                       class="{{ request()->routeIs('products.index') ? '!text-primary' : 'text-base-content' }} hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        toolkits
                    </a>

                    <a href="{{ route('roadmap') }}"
                       wire:navigate.hover
                       class="{{ request()->routeIs('roadmap') ? '!text-primary' : 'text-base-content' }} hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Roadmap
                    </a>

                    {{-- Solutions Dropdown --}}
                    {{-- <div>
                        <button x-on:click="solutionsOpen = !solutionsOpen; toolkitOpen = false"
                                class="text-base-content hover:text-base-content/80 hover:bg-base-200 flex w-full items-center justify-between px-4 py-3 text-base font-medium focus:outline-none">
                            <span>Solutions</span>
                            <svg x-bind:class="solutionsOpen ? 'transform rotate-180' : ''"
                                 class="h-5 w-5 transition-transform duration-200"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="solutionsOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="bg-base-200 mx-2 mb-2 rounded-md px-4 py-2"
                             style="display: none;">
                            <a href="{{ route('solutions.documentation') }}"
                               wire:navigate.hover
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Documentation</div>
                                <div class="text-base-content/50 mt-1 text-sm">Visite our beautiful blade components
                                </div>
                            </a>
                            <a href="{{ route('solutions.blogging') }}"
                               wire:navigate.hover
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Blogging</div>
                                <div class="text-base-content/50 mt-1 text-sm">Create a powerfull blog just in minutes
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>
