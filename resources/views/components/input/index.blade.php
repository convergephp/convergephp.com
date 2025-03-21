@props([
    'type' => 'text',
    'placeholder' => ' ',
    'inlineSuffix' => false,
    'inlinePrefix' => false,
    'id'=>null
])

<input 
    type={{ $type }}
    {{ $attributes->filter(fn (string $value, string $key) => $key === 'wire:model') }}
    {{ $attributes->class([
        'input block w-full border-none outline-none py-1.5 text-base transition bg-transparent duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] text-white',
        'ps-0' => $inlinePrefix,
        'ps-3' => !$inlinePrefix,
        'pe-0' => $inlineSuffix,
        'pe-3' => !$inlineSuffix,
    ]) }}
    placeholder="{{ $placeholder }}">
