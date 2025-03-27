@props([
    'type' => 'text',
    'placeholder' => ' ',
    'inlineSuffix' => false,
    'inlinePrefix' => false,
    'id' => null,
])

<input type={{ $type }}
        {{ $attributes }}
       {{-- {{ $attributes->filter(fn(string $value, string $key) => $key === 'wire:model') }} --}}
       {{ $attributes->class([
           'input block w-full rounded-field outline-none py-1.5 text-base transition bg-transparent duration-75 placeholder:text-base-content/50 focus:ring-0 focus-within:ring-0 disabled:text-base-content/40 border-none ring-none focus:border-transparent focus-within:ring-transparent disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] text-base-content',
           'ps-0' => $inlinePrefix,
           'ps-3' => !$inlinePrefix,
           'pe-0' => $inlineSuffix,
           'pe-3' => !$inlineSuffix,
       ]) }}
       placeholder="{{ $placeholder }}">
