@props([
    'label' => null,
    'labelHidden' => false,
])

<fieldset {{ $attributes->class(['f rounded-xl border border-gray-400/20 bg-base-100 p-10']) }}>
    @if (filled($label))
        <legend @class([
            '-ms-2 px-2 text-sm font-medium leading-6 text-gray-950 dark:text-white',
            'sr-only' => $labelHidden,
        ])>
            {{ $label }}
        </legend>
    @endif

    {{ $slot }}
</fieldset>
