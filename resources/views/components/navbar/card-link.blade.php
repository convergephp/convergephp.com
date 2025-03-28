@props(['title', 'description', 'imageSrc', 'url' => '#'])

<a href="{{ $url }}"
   class="bg-base-300/40 hover:bg-base-300/80 hover:border-primary/20 group block rounded-lg border border-transparent p-4 transition-colors duration-200"
   tabindex="0">
    <div
         class="border-x-(--pattern-fg) [--pattern-fg:var(--color-primary)]/5 rounded-box relative row-span-full row-start-1 my-2 w-full border-x bg-[image:repeating-linear-gradient(-315deg,_var(--pattern-fg)_0,_var(--pattern-fg)_1px,_transparent_0,_transparent_50%)] bg-[size:10px_10px] bg-fixed md:col-start-3 md:block">
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
