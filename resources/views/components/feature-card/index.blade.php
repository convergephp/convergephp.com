{{-- resources/views/components/feature-card.blade.php --}}
@props(['icon', 'title', 'description', 'tags' => [], 'colorScheme' => 'primary'])

@php
    $colorMap = [
        'primary' => [
            'icon' => 'primary',
            'tag' => 'primary',
            'animate' => 'from-primary/40 via-secondary/40 to-accent/40',
            'iconGradient' => 'from-primary to-primary/50',
            'iconBg' => 'from-primary/20 to-secondary/20',
        ],
        'secondary' => [
            'icon' => 'secondary',
            'tag' => 'secondary',
            'animate' => 'from-secondary/40 via-accent/40 to-secondary/40',
            'iconGradient' => 'from-secondary to-secondary/50',
            'iconBg' => 'from-secondary/20 to-accent/20',
        ],
        'accent' => [
            'icon' => 'accent',
            'tag' => 'accent',
            'animate' => 'from-accent/40 via-primary/40 to-accent/40',
            'iconGradient' => 'from-accent to-accent/50',
            'iconBg' => 'from-accent/20 to-primary/20',
        ],
    ];

    $colors = $colorMap[$colorScheme] ?? $colorMap['primary'];
@endphp

<div
     {{ $attributes->merge(['class' => 'from-base-100 to-base-200 group relative overflow-hidden rounded-2xl bg-gradient-to-br p-px shadow-xl']) }}>
    {{-- Animated border effect --}}
    <div
         class="{{ $colors['animate'] }} absolute inset-0 bg-gradient-to-r opacity-0 blur transition-opacity duration-700 group-hover:opacity-100">
    </div>

    {{-- Card content --}}
    <div class="bg-base-100 relative z-10 flex h-full flex-col rounded-2xl p-8">
        {{-- Card Icon --}}
        <div class="relative mb-8">
            <div
                 class="{{ $colors['iconGradient'] }} relative flex h-16 w-16 items-center justify-center rounded-full bg-gradient-to-br">
                {{ $icon }}
            </div>
        </div>

        {{-- Content --}}
        <h3 class="mb-4 text-2xl font-bold tracking-tight">{{ $title }}</h3>
        <p class="text-base-content/70 mb-6 leading-relaxed">{{ $description }}</p>

        {{-- Feature tags --}}
        @if (count($tags) > 0)
            <div class="mt-auto flex flex-wrap gap-2 pt-6">
                @foreach ($tags as $tag)
                    <span
                          class="bg-{{ $colors['icon'] }}/10 text-{{ $colors['icon'] }} rounded-full px-3 py-1 text-xs font-medium">{{ $tag }}</span>
                @endforeach
            </div>
        @endif
    </div>
</div>
