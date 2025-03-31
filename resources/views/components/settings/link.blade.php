@props([
    'label' => null,
    'href' => null,
    'active' => false,
    'icon' => 'iconsax-bul-card',
])

<a {{ $attributes->whereStartsWith('wire:navigate') }}
   @class([
       'bg-transparent py-3 border-l border-transparent px-2  bg-transparent text-start flex items-center gap-2  ',
       'text-primary' => $active,
   ])
   href="{{ $href }}">
    @svg("$icon", 'h-5 w-5')
    {{ $label }}
</a>
