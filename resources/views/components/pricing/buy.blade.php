@props(['price'])
@if (($checkout = $price->checkout) instanceof Laravel\Paddle\Checkout)
    <div class="btn btn-accent mt-auto">
        <x-paddle-button class="px-8 py-4" :checkout="$checkout">
            Buy
        </x-paddle-button>
    </div>
@endif
@if(is_null($checkout)) 
    <x-modal :scrollable="false" class="dark">
        <x-slot:trigger>
            <button
                class="btn btn-accent"
                type="button"
                x-on:click="sessionStorage.setItem('selectedPlan', @js($price->name. '-'. $price->product->name));">
                Select Plan
            </button>
        </x-slot>
        <div class="text-md font-tinybold pb-2 px-3 text-gray-400">
            You need to log in or register to proceed with selecting this package. Once authenticated, you will be
            redirected to complete your purshase.
        </div>

        <x-tabs class="mx-auto max-w-full gap-x-1 overflow-x-auto rounded-xl p-2 dark:bg-transparent">
            <x-slot:items class="mx-auto w-fit justify-center text-gray-400 rounded-lg px-3 bg-white/5">
                @foreach (['Login', 'Register'] as $tabItem)
                    <x-tabs.item
                        class="group mb-2 mt-2 flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-semibold outline-none  transition duration-75"
                        activeClasses="bg-white/5 text-primary ">
                        {{ str()->title($tabItem) }}
                    </x-tabs.item>
                @endforeach
            </x-slot:items>

            <x-slot:panels class="rounded-lg p-3 text-gray-800 dark:bg-transparent dark:text-gray-400">
                <x-tabs.panel>
                    <livewire:auth.login />
                </x-tabs.panel>
                <x-tabs.panel>
                    <livewire:auth.register />
                </x-tabs.panel>
            </x-slot:panels>
        </x-tabs>
    </x-modal>
@endif
