@props(['title', 'description', 'imageSrc', 'url' => '#'])

<a href="{{ $url }}"
   class="bg-base-300/40 hover:bg-base-300/80 hover:border-primary/20 group block rounded-lg border border-transparent p-4 transition-colors duration-200"
   tabindex="0">
    <div class="w-full">
        <img class="max-h-[200px] w-full transition duration-300 group-hover:scale-105 group-hover:transform"
             src="{{ $imageSrc ?? 'https://mintlify-assets.b-cdn.net/website/home/nav-assets/Blog-dark.png' }}"
             alt="{{ $alt ?? 'image' }}">
    </div>
    <div class="text-base-content">
        <div class="">
            <div class="mb-2 font-semibold">{{ $title ?? 'Title' }}</div>
        </div>
        <div class="text-light text-base-content/50">{{ $description ?? 'Small description' }}</div>
    </div>
</a>
