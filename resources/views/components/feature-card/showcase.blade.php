@props(['image'])

<div
     class="after:inset-ring after:inset-ring-base-300 relative h-full flex-1 overflow-hidden rounded-lg bg-gray-950/[2.5%] bg-[image:radial-gradient(var(--pattern-fg)_1px,_transparent_0)] bg-[size:10px_10px] bg-fixed p-4 [--pattern-fg:var(--color-base-300)] after:pointer-events-none after:absolute after:inset-0 after:rounded-lg">
    <div class="container relative flex size-full items-center justify-center">
        <div
             class="no-scrollbar gap-(--gap) z-10 -my-1 flex h-full w-full snap-x snap-mandatory overflow-hidden rounded-lg py-1">
            <img class="h-full w-full transform transition duration-200 hover:scale-105"
                 src="{{ asset($image) }}"
                 loading="lazy"
                 decoding="async"
                 alt="{{ $image }}">
        </div>
    </div>
</div>
