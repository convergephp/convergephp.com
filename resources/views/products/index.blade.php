<x-layout>
    <div class="grid grid-cols-2">
        @foreach($products as $product)
            @dump($product)
        @endforeach
    </div>
</x-layout>