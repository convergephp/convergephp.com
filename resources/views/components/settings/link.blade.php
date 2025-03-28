@props([
    'label' => null,
    'href' => null,
    'active' => false,
])

<a {{ $attributes->whereStartsWith('wire:navigate') }}
   @class([
       'bg-transparent py-3 border-l border-transparent px-4  bg-transparent text-start ',
       'text-primary !border-primary ' => $active,
   ])
   href="{{ $href }}">

    {{ $label }}
</a>
