<x-layout>
    <div class="grid grid-cols-2 gap-4 mx-8">
        @foreach($products as $product)
            <div class="rounded-lg  bg-white/10">
                <a href="{{ route('products.show',$product->slug) }}">
                    <img class=" rounded-xl p-2 "
                        src="{{ asset('exemple-2.png') }}"
                        alt="Input Components"
                        loading="lazy"
                    >
                    <div class="w-full px-2 text-start pb-2 font-bold text-lg">
                        {{ $product->name }}
                        <div class="font-medium">{{ $product->description }}</div>
                    </div>
                </a>    
            </div>    
        @endforeach
    </div>
</x-layout>