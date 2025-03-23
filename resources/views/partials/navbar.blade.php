<header class="border-base-300 bg-base-200 fixed inset-x-0 top-0 z-30 border-b"
        x-data="{ mobileMenuOpen: false, toolkitOpen: false, solutionsOpen: false }">
    <div class="relative flex justify-center">
        <div class="supports-backdrop-blur:bg-black/10 relative w-full max-w-7xl rounded-full px-3">
            <nav class="flex min-h-[5rem] items-center justify-between"
                 aria-label="Global">
                {{-- LOGO --}}
                <div class="flex lg:flex-1">
                    <a href="/">
                        <x-app-logo-2 class="h-[1.1rem] !stroke-cyan-900 md:h-[1.4rem] lg:h-[1.6rem]"></x-app-logo-2>
                    </a>
                </div>

                {{-- NAVBAR ITEMS - DESKTOP --}}
                <div
                     class="text-base-content hover:text-base-content/80 hidden min-h-[5rem] flex-1 items-center justify-end text-sm font-medium transition md:flex">
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

                <div class="flex items-center gap-1">

                    {{-- THEME SWITCHER --}}
                    <x-theme-switcher />

                    {{-- MOBILE MENU TOGGLE BUTTON --}}
                    <div class="flex items-center md:hidden">
                        <button x-on:click="mobileMenuOpen = !mobileMenuOpen"
                                class="text-base-content hover:text-base-content/80 focus:ring-primary mr-2 inline-flex items-center justify-center rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-inset"
                                aria-expanded="false"
                                :aria-expanded="mobileMenuOpen.toString()">
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
                 class="bg-base-100 absolute left-0 right-0 top-full mt-0 h-screen shadow-lg md:hidden"
                 style="display: none;">
                <div class="space-y-1 px-3 pb-3 pt-2">
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
                    <div class="border-base-200 border-b">
                        <button @click="solutionsOpen = !solutionsOpen; toolkitOpen = false"
                                class="text-base-content hover:text-base-content/80 hover:bg-base-200 flex w-full items-center justify-between rounded-md px-4 py-3 text-base font-medium focus:outline-none">
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
