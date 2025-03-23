<x-layout>
    <div class="relative z-20 py-10">
        <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
            <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-widest">
                {{ $product->name }}
            </h2>
            <p class="text-base-content mb-5 font-light sm:text-xl">
                {{ $product->description }}
            </p>
        </div>

        {{-- Tabs: Display components --}}
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-col"
                 x-data="{ activeTab: 'inputs' }">

                {{-- Aside --}}
                {{-- <div class="hidden min-w-[250px] md:block">
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
                </div> --}}

                <div class="mb-4 w-full overflow-x-auto">
                    <div class="border-base-300 flex gap-2 border-b">
                        <button class="btn btn-ghost btn-sm mb-1"
                                :class="activeTab === 'inputs' ? 'bg-primary/5 border border-gray-400/20' :
                                    'text-base-content hover:text-primary'"
                                x-on:click="activeTab = 'inputs'">
                            Inputs
                        </button>
                        <button class="btn btn-ghost btn-sm mb-1"
                                :class="activeTab === 'buttons' ? 'bg-primary/5 border border-gray-400/20' :
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
                        <a class="border-base-300 bg-base-100 h-max rounded-2xl border p-4 transition-all duration-300 hover:shadow-md"
                           href="#">
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
                        <a class="border-base-300 bg-base-100 h-max rounded-2xl border p-4 transition-all duration-300 hover:shadow-md"
                           href="#">
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
    <div class="mx-auto max-w-7xl px-4 py-8 lg:px-6 lg:py-20">
        {{-- Title --}}
        <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
            <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-widest">
                Flexible packages for Every Developer
            </h2>
            <p class="text-base-content mb-5 font-light sm:text-xl">
                Choose the perfect package for your project needs, from solo development to enterprise solutions
            </p>
        </div>

        <div x-data="{
            init() {
                const selectedPlan = sessionStorage.getItem('selectedPlan');
        
        
                this.$nextTick(() => {
                    if (selectedPlan) {
                        setTimeout(() => {
                            const button = document.querySelector(`#${selectedPlan}`);
                            if (button) {
                                button.click();
                            }
                            sessionStorage.removeItem('selectedPlan');
                        }, 300);
                    }
                });
            }
        }"
             class="flex flex-wrap justify-center gap-4">
            @foreach ($product->prices as $price)
                <x-pricing-card :price="$price" />
            @endforeach
        </div>
    </div>
</x-layout>
