<header class="border-base-300 bg-base-200 fixed inset-x-0 top-0 z-30 border-b"
        x-data="{ mobileMenuOpen: false, toolkitOpen: false, solutionsOpen: false }">
    <div class="relative flex justify-center">
        <div class="supports-backdrop-blur:bg-black/10 relative w-full max-w-7xl rounded-full px-3">
            <nav class="flex min-h-[5rem] items-center justify-between"
                 aria-label="Global">
                {{-- LOGO --}}
                <div class="flex">
                    <a href="/"
                       wire:navigate.hover>
                        <x-app-logo-2 class="h-[1.1rem] !stroke-cyan-900 md:h-[1.4rem] lg:h-[1.6rem]"></x-app-logo-2>
                    </a>
                </div>

                {{-- NAVBAR ITEMS - DESKTOP --}}
                <div
                     class="text-base-content hover:text-base-content/80 hidden min-h-[5rem] flex-1 grow items-center justify-start px-4 text-sm font-medium transition md:flex">
                    <x-navbar.link href="/in-person">Documentation</x-navbar.link>
                    <x-navbar.dropdown-menu label="ToolKit">
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
                    <x-navbar.dropdown-menu label="Solutions">
                        <div class="grid grid-cols-2 gap-4">
                            <x-navbar.card-link title="Documentation"
                                                description="Visite our beautiful blade components">
                            </x-navbar.card-link>
                            <x-navbar.card-link title="Blogging"
                                                description="Create a powerfull blog just in minutes">
                            </x-navbar.card-link>
                        </div>
                    </x-navbar.dropdown-menu>
                </div>

                <div class="flex items-center gap-2">
                    {{-- THEME SWITCHER --}}
                    <x-theme-switcher class="md:order-5" />

                    {{-- Actions buttons --}}
                    @if (Auth::check())
                        <form method="POST"
                              action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="btn md:btn-sm btn-square md:btn-block bg-base-300 rounded-sm border border-gray-400/20 md:px-2">
                                <span class="hidden md:block">{{ __('Logout') }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="block size-5 md:hidden">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                            </button>
                        </form>
                        <a  href="{{ route('boards.licenses') }}"
                            wire:navigate.hover
                                    class="btn md:btn-sm btn-square md:btn-block max-w-fit bg-base-300 rounded-sm border border-gray-400/20 md:px-2">
                                <span class="hidden md:block">Board</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                  </svg>                                
                            </a>

                    @endif
                    @if (!Auth::check() && !Request()->routeIs('login') && !Request()->routeIs('register'))
                        <a href="{{ route('login') }}"
                           wire:navigate.hover
                           class="btn md:btn-sm btn-link bg-base-300 btn-ghost rounded-sm border border-gray-400/20 px-2 no-underline md:px-4">
                            <span class="hidden md:inline">{{ __('Login') }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5"
                                 stroke="currentColor"
                                 class="block size-5 md:hidden">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                            </svg>
                        </a>
                    @endif

                    {{-- MOBILE MENU TOGGLE BUTTON --}}
                    <div class="flex items-center md:hidden">
                        <button x-on:click="mobileMenuOpen = !mobileMenuOpen"
                                class="btn btn-square bg-base-300 rounded-sm"
                                aria-expanded="false"
                                x-bind:aria-expanded="mobileMenuOpen.toString()">
                            <span class="sr-only">Ouvrir le menu principal</span>
                            {{-- Icon when menu is closed --}}
                            <svg x-show="!mobileMenuOpen"
                                 class="h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16" />
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
                    <a href="/in-person"
                       class="text-base-content hover:text-base-content/80 hover:bg-base-200 border-base-200 block rounded-md border-b px-4 py-3 text-base font-medium">
                        Documentation
                    </a>

                    {{-- ToolKit Dropdown --}}
                    <div class="border-base-200 border-b">
                        <button x-on:click="toolkitOpen = !toolkitOpen; solutionsOpen = false"
                                class="text-base-content hover:text-base-content/80 hover:bg-base-200 flex w-full items-center justify-between rounded-md px-4 py-3 text-base font-medium focus:outline-none">
                            <span>ToolKit</span>
                            <svg :class="toolkitOpen ? 'transform rotate-180' : ''"
                                 class="h-5 w-5 transition-transform duration-200"
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="toolkitOpen"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0"
                             x-transition:enter-end="opacity-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100"
                             x-transition:leave-end="opacity-0"
                             class="bg-base-200 mx-2 mb-2 rounded-md px-4 py-2"
                             style="display: none;">
                            <a href="{{ route('products.show', ['product' => 'components']) }}"
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Blade Components</div>
                                <div class="text-base-content/70 mt-1 text-sm">Visite our beautiful blade components
                                </div>
                            </a>
                            <a href="{{ route('products.show', ['product' => 'layouts-themes']) }}"
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Layouts</div>
                                <div class="text-base-content/70 mt-1 text-sm">Create a powerfull layouts</div>
                            </a>
                        </div>
                    </div>

                    {{-- Solutions Dropdown --}}
                    <div>
                        <button x-on:click="solutionsOpen = !solutionsOpen; toolkitOpen = false"
                                class="text-base-content hover:text-base-content/80 hover:bg-base-200 flex w-full items-center justify-between px-4 py-3 text-base font-medium focus:outline-none">
                            <span>Solutions</span>
                            <svg :class="solutionsOpen ? 'transform rotate-180' : ''"
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
                            <a href="#"
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Documentation</div>
                                <div class="text-base-content/50 mt-1 text-sm">Visite our beautiful blade components
                                </div>
                            </a>
                            <a href="#"
                               class="text-base-content hover:text-base-content/80 hover:bg-base-300 block rounded-md px-3 py-3 text-base font-medium">
                                <div class="font-semibold">Blogging</div>
                                <div class="text-base-content/50 mt-1 text-sm">Create a powerfull blog just in minutes
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
