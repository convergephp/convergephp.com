<header class="border-base-300 bg-base-200 fixed inset-x-0 top-0 z-50 border-b">
    <div class="relative flex justify-center">
        <div class="supports-backdrop-blur:bg-black/10 relative mx-4 w-full max-w-7xl rounded-full">
            <nav class="flex min-h-[5rem] items-center justify-between px-4"
                 aria-label="Global">

                {{-- LOGO --}}
                <div class="flex lg:flex-1">
                    <a href="/"
                       class="text-primary text-2xl font-black">
                        Converge
                    </a>
                </div>

                {{-- NAVBAR ITEMS --}}
                <div
                     class="text-base-content hover:text-base-content/80 flex min-h-[5rem] flex-1 items-center justify-end text-sm font-medium transition">

                    <x-navbar.link href="/in-person">Documentation</x-navbar.link>

                    <x-navbar.dropdown-menu label="ToolKit">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-base-content mb-3 text-sm font-medium">GET STARTED</h3>
                                <x-navbar.dropdown-menu-item href="/prebuilt">Prebuilt
                                    checkout</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/libraries">Libraries and
                                    SDKs</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/integrations">App
                                    integrations</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/samples">Code samples</x-navbar.dropdown-menu-item>
                            </div>
                        </div>
                    </x-navbar.dropdown-menu>

                    <x-navbar.dropdown-menu label="Solutions">
                        <div class="grid grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-base-content mb-3 text-sm font-medium">GET STARTED</h3>
                                <x-navbar.dropdown-menu-item href="/prebuilt">Prebuilt
                                    checkout</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/libraries">Libraries and
                                    SDKs</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/integrations">App
                                    integrations</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/samples">Code samples</x-navbar.dropdown-menu-item>
                            </div>
                            <div>
                                <h3 class="text-base-content mb-3 text-sm font-medium">GUIDES</h3>
                                <x-navbar.dropdown-menu-item href="/payments">Accept online
                                    payments</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/subscriptions">Manage
                                    subscriptions</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/send-payments">Send
                                    payments</x-navbar.dropdown-menu-item>
                                <x-navbar.dropdown-menu-item href="/in-person">Set up in-person
                                    payments</x-navbar.dropdown-menu-item>
                            </div>
                        </div>
                    </x-navbar.dropdown-menu>

                    <button class="btn btn-sm btn-success ml-2">
                        Sponsor converge
                    </button>
                </div>

            </nav>
        </div>
    </div>
</header>
