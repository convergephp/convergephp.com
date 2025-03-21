@props(['checkout'])

@if ($checkout instanceof Laravel\Paddle\Checkout)
    <div class="btn btn-accent mt-auto">
        <x-paddle-button class="px-8 py-4" :checkout="$checkout">
            Buy
        </x-paddle-button>
    </div>
@endif
@if(is_null($checkout)) 
    <x-modal :scrollable="false">
        <x-slot:trigger class="w-full">
            <button
                class="from-primary text-md ring-primary/35 transition-color hover:bg-primary/85 shadow-primary after:bg-primary mt-4 w-full rounded-lg bg-gradient-to-l via-purple-500 to-violet-500 px-4 py-2 text-center font-semibold leading-4 text-white shadow ring-1 transition-transform duration-300 after:absolute after:top-2 after:blur-3xl after:content-[''] hover:scale-x-[102%]"
                type="button" x-on:click="sessionStorage.setItem('selectedPlan', @js($plan->name));">
                Select Plan
            </button>
        </x-slot>
        <div class="text-md font-tinybold pb-2 text-gray-400">
            You need to log in or register to proceed with selecting this package. Once authenticated, you will be
            redirected to complete your purshase.
        </div>

        <x-tabs class="mx-auto max-w-full gap-x-1 overflow-x-auto rounded-xl p-2 dark:bg-transparent">
            <x-slot:items class="mx-auto w-fit justify-center rounded-lg bg-white px-3 dark:bg-white/5">
                @foreach (['Login', 'Register'] as $tabItem)
                    <x-tabs.item
                        class="group mb-2 mt-2 flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-semibold outline-none transition duration-75"
                        activeClasses="dark:bg-white/5 text-violet-500 bg-gray-100">
                        {{ str()->title($tabItem) }}
                    </x-tabs.item>
                @endforeach
            </x-slot:items>

            <x-slot:panels class="rounded-lg bg-white p-3 text-gray-800 dark:bg-transparent dark:text-gray-400">
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
