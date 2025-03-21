<x-layouts.app.header :title="$title ?? null">
    <div class="grid grid-cols-2 max-w-xl mt-20 mx-auto  ">
        <div class="bg-white/5 px-4 py-2 rounded-2xl">
            <x-paddle-button :checkout="$checkout" class="px-8 py-4">
                Buy Product (29$)
            </x-paddle-button>
        </div>
        <div class="bg-white/5 px-4 py-2 rounded-2xl">
            <x-paddle-button :checkout="$checkout" class="px-8 py-4">
                Buy Product (99$)
            </x-paddle-button>
        </div>
    </div>

</x-layouts.app.header>
