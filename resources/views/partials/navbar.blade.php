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

                    <x-navbar.link href="{{ route('pricing') }}">Pricing</x-navbar.link>

                    <x-navbar.dropdown-menu label="ToolKit">
                        <div class="grid grid-cols-2 gap-4">
                            <x-navbar.card-link title="Components"
                                                description="Visite our beautiful blade components">
                            </x-navbar.card-link>

                            <x-navbar.card-link title="Layouts"
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

                    <button class="btn btn-sm btn-primary ml-2">
                        Sponsor converge
                    </button>
                </div>

            </nav>
        </div>
    </div>
</header>
