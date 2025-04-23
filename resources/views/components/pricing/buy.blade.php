@props(['price'])

@php
    // used in session storage for activate the checkout
    // overlay for the direct redirect
    // after authentication
    $id = Str::slug($price->title . '-' . $price->product->name);
@endphp

@if (($checkout = $price->checkout) instanceof Laravel\Paddle\Checkout)
    <div class="btn btn-primary mt-auto">
        <x-paddle-button id="{{ $id }}"
                         class="px-8 py-4"
                         :checkout="$checkout">
            Buy
        </x-paddle-button>
    </div>
@endif
@if (is_null($checkout))
    <x-modal :scrollable="false"
             class="dark">
        <x-slot:trigger
                class="mt-auto w-full">
            <button class="btn btn-block btn-primary"
                    type="button"
                    x-on:click="sessionStorage.setItem('selectedPlan', @js($id));">
                Buy
            </button>
        </x-slot>
        <div class="text-md text-base-content/50 px-3 pb-2 text-center font-medium">
            You need to log in or register to proceed with selecting this package. Once authenticated, you will be
            redirected to complete your purshase.
        </div>

        <x-tabs class="mx-auto max-w-full gap-x-1 overflow-x-auto rounded-xl p-2">
            <x-slot:items
                    class="bg-base-300/50 text-base-content mx-auto w-fit justify-center gap-2 rounded-lg border-gray-400/20 px-3">
                @foreach (['Login', 'Register'] as $tabItem)
                    <x-tabs.item class="hover:bg-primary/5 group mb-2 mt-2 flex cursor-pointer items-center gap-x-2 rounded-lg border border-transparent px-3 py-2 text-sm font-semibold outline-none transition duration-75 hover:border-gray-400/20"
                                 activeClasses="bg-primary/5 border !border-gray-400/20">
                        {{ str()->title($tabItem) }}
                    </x-tabs.item>
                @endforeach
            </x-slot:items>

            <x-slot:panels
                    class="rounded-lg p-3 text-gray-800 dark:bg-transparent dark:text-gray-400">
                <x-tabs.panel>
                    <livewire:auth.login :canSwitchAuthPages="false" />
                </x-tabs.panel>
                <x-tabs.panel>
                    <livewire:auth.register :canSwitchAuthPages="false" />
                </x-tabs.panel>
            </x-slot:panels>
        </x-tabs>
    </x-modal>
@endif
