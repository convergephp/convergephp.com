@props([
    'suffix'=>null
])

<div
    class="input-wrapper flex rounded-md bg-white/5 shadow-sm ring-1 ring-gray-950/10 transition duration-75 focus-within:ring-2 focus-within:ring-primary dark:ring-white/20 dark:focus-within:ring-primary">
    <div class="min-w-0 flex-1">
        {{ $slot }}
    </div>
    @if (filled($suffix))
        <div class="suffix flex items-center gap-x-3 border-s pe-3 ps-3 text-gray-400 dark:border-white/10">
            {{ $suffix }}
        </div>
    @endif
</div>
