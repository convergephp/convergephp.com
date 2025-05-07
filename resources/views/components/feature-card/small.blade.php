{{-- resources/views/components/additional-feature-card.blade.php --}}
@props(['icon', 'title', 'description', 'colorScheme' => 'primary'])

@php
    $colors = [
        'primary' => 'primary',
        'secondary' => 'secondary',
        'accent' => 'accent',
        'info' => 'info',
        'error' => 'error',
    ];

    $colorClass = $colors[$colorScheme] ?? 'primary';
@endphp

<div class="card bg-base-100 border-base-200 h-full overflow-hidden border shadow-xl duration-300 hover:shadow-2xl">
    <div class="flex flex-col gap-y-4 p-6 md:flex-row md:gap-y-0">
        <div class="mr-6">
            <div class="bg-{{ $colorClass }}/10 flex h-16 w-16 items-center justify-center rounded-full">
                {{ $icon }}
            </div>
        </div>
        <div>
            <h3 class="mb-2 text-xl font-bold">{{ $title }}</h3>
            <p class="text-base-content/80">{{ $description }}</p>
        </div>
    </div>
</div>
