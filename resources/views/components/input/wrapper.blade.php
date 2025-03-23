@props([
    'suffix' => null,
])

<div
     class="input-wrapper bg-base-300/10 ring-base-300/20 focus-within:ring-primary/60 rounded-field flex shadow-sm ring-1 transition duration-75 focus-within:ring-1">
    <div class="min-w-0 flex-1">
        {{ $slot }}
    </div>
    @if (filled($suffix))
        <div class="suffix text-base-content/50 flex items-center gap-x-3 border-s pe-3 ps-3">
            {{ $suffix }}
        </div>
    @endif
</div>
