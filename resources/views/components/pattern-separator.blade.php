@props(['title' => ''])

<div data-aos="fade-right"
     data-aos-duration="600"
     {{ $attributes->merge(['class' => 'border-x-(--pattern-fg) dark:[--pattern-fg:var(--color-white)]/10 relative row-span-full row-start-1 my-2 h-12 border-x bg-[image:repeating-linear-gradient(315deg,_var(--pattern-fg)_0,_var(--pattern-fg)_1px,_transparent_0,_transparent_50%)] bg-[size:10px_10px] bg-fixed [--pattern-fg:var(--color-base-300)] md:col-start-3 md:block']) }}>
    <p data-aos="fade-right"
       data-aos-duration="200"
       class="text-primary absolute left-0 top-2 origin-bottom-right px-2 text-left font-mono text-sm font-semibold uppercase tracking-widest max-2xl:mb-4 max-2xl:px-2 sm:text-xs">
        {{ $title }}</p>
</div>
