@props([
    'suffix' => null,
])

<div
     class="input-wrapper bg-base-300/50 focus-within:ring-primary/60 rounded-field focus-within:border-primary/30 flex border border-gray-400/30 transition duration-75">
    <div class="min-w-0 flex-1">
        {{ $slot }}
    </div>
    @if (filled($suffix))
        <div class="suffix text-base-content/50 flex items-center gap-x-3 border-s pe-3 ps-3">
            {{ $suffix }}
        </div>
    @endif
</div>
