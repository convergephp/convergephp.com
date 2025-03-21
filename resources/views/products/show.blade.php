<x-layout>
    <div class="relative z-20 py-10">
        <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
            <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-tight">
                {{ $product->name }}
            </h2>
            <p class="text-base-content mb-5 font-light sm:text-xl">
                {{ $product->description }}
            </p>
        </div>

        {{-- Tabs: Display components --}}
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-col gap-12 md:flex-row"
                 x-data="{ activeTab: 'inputs' }">

                {{-- Aside --}}
                <div class="hidden min-w-[250px] md:block">
                    <div class="flex flex-col gap-2">
                        <button class="btn btn-accent btn-sm"
                                :class="activeTab === 'inputs' ? 'btn-primary' : ''"
                                x-on:click="activeTab = 'inputs'">
                            Inputs
                        </button>

                        <button class="btn btn-accent btn-sm"
                                :class="activeTab === 'buttons' ? 'btn-primary' : ''"
                                x-on:click="activeTab = 'buttons'">
                            Buttons
                        </button>
                    </div>
                </div>

                {{-- Mobile Tab Selector --}}
                <div class="mb-4 w-full overflow-x-auto md:hidden">
                    <div class="border-base-300 flex border-b">
                        <button class="px-4 py-2 text-sm font-medium"
                                :class="activeTab === 'inputs' ? 'border-b-2 border-primary text-primary' :
                                    'text-base-content hover:text-primary'"
                                x-on:click="activeTab = 'inputs'">
                            Inputs
                        </button>
                        <button class="px-4 py-2 text-sm font-medium"
                                :class="activeTab === 'buttons' ? 'border-b-2 border-primary text-primary' :
                                    'text-base-content hover:text-primary'"
                                x-on:click="activeTab = 'buttons'">
                            Buttons
                        </button>
                    </div>
                </div>

                {{-- Tabs Content --}}
                <div class="w-full">
                    {{-- Inputs Tab --}}
                    <div class="grid grid-cols-1 gap-4"
                         x-show="activeTab === 'inputs'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0">
                        <a href="#"
                           class="border-base-300 bg-base-100 h-max rounded-2xl border p-4 transition-all duration-300 hover:shadow-md">
                            <div class="overflow-hidden rounded-xl">
                                <img class="w-full rounded-xl"
                                     src="{{ asset('exemple-2.png') }}"
                                     alt="Input Components"
                                     loading="lazy">
                            </div>
                            <div class="mt-4">
                                <h3 class="text-base-content text-lg font-bold">Text Inputs</h3>
                                <p class="text-base-content mt-2 text-sm font-light">Modern form input elements with
                                    validation states</p>
                            </div>
                        </a>
                    </div>

                    {{-- Buttons Tab --}}
                    <div class="grid grid-cols-1 gap-4"
                         x-show="activeTab === 'buttons'"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0">
                        <a href="#"
                           class="border-base-300 bg-base-100 h-max rounded-2xl border p-4 transition-all duration-300 hover:shadow-md">
                            <div class="overflow-hidden rounded-xl">
                                <img class="w-full rounded-xl"
                                     src="{{ asset('exemple-2.png') }}"
                                     alt="Input Components"
                                     loading="lazy">
                            </div>
                            <div class="mt-4">
                                <h3 class="text-base-content text-lg font-bold">Text Inputs</h3>
                                <p class="text-base-content mt-2 text-sm font-light">Modern form input elements with
                                    validation states</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>
