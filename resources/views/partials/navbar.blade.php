<header class="fixed inset-x-0 top-0 z-50 border-b border-gray-400/10 bg-white dark:bg-black">
    <div class="relative flex justify-center">
        <div class="supports-backdrop-blur:bg-black/10 relative mx-4 w-full max-w-7xl rounded-full">
            <nav class="flex min-h-[5rem] items-center justify-between px-4"
                 aria-label="Global">

                {{-- LOGO --}}
                <div class="flex lg:flex-1">
                    <a href="/"
                       class="text-2xl font-black text-sky-600">
                        Converge
                    </a>
                </div>

                {{-- NAVBAR ITEMS --}}
                <div
                     class="flex min-h-[5rem] flex-1 items-center justify-end text-sm font-medium text-zinc-300 transition hover:text-zinc-100">

                    <x-navbar.dropdown-menu label="Solutions">
                        @slot('leftSectionTitle')
                            GET STARTED
                        @endslot
                        @slot('leftSection')
                            <x-navbar.dropdown-menu-link href="/prebuilt">Prebuilt checkout</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/libraries">Libraries and SDKs</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/integrations">App integrations</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/samples">Code samples</x-navbar.dropdown-menu-link>
                        @endslot

                        @slot('rightSectionTitle')
                            GUIDES
                        @endslot
                        @slot('rightSection')
                            <x-navbar.dropdown-menu-link href="/payments">Accept online
                                payments</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/subscriptions">Manage
                                subscriptions</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/send-payments">Send payments</x-navbar.dropdown-menu-link>
                            <x-navbar.dropdown-menu-link href="/in-person">Set up in-person
                                payments</x-navbar.dropdown-menu-link>
                        @endslot
                    </x-navbar.dropdown-menu>

                    <x-navbar.link href="/in-person">Test</x-navbar.link>

                    <button class="hover:shadow-glow group relative ml-2 rounded-full p-px text-sm/6 text-zinc-400 duration-300 hover:text-zinc-100"
                            type="button"
                            aria-haspopup="dialog"
                            aria-expanded="false"
                            aria-controls="radix-:R19kq:"
                            data-state="closed">

                        <span class="absolute inset-0 overflow-hidden rounded-full">
                            <span
                                  class="absolute inset-0 rounded-full bg-[image:radial-gradient(75%_100%_at_50%_0%,rgba(56,189,248,0.6)_0%,rgba(56,189,248,0)_75%)] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                            </span>
                        </span>
                        <div class="relative z-10 rounded-full bg-zinc-950 px-4 py-1.5 ring-1 ring-white/10">
                            Sponsor converge
                        </div>
                        <span
                              class="absolute -bottom-0 left-[1.125rem] h-px w-[calc(100%-2.25rem)] bg-gradient-to-r from-cyan-400/0 via-cyan-400/90 to-cyan-400/0 transition-opacity duration-500 group-hover:opacity-40"></span>
                    </button>
                </div>

            </nav>
        </div>
    </div>
</header>
