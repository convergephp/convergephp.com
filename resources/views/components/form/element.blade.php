@props([
    'label' => 'field name',
    'required' => false,
    'for' => null,
])
<div {{ $attributes->merge(['class' => 'my-1']) }}>
    <label class="inline-flex items-center gap-x-3"
           for="{{ $for }}">
        <span class="text-base-content py-1 text-sm font-medium lowercase leading-6">
            {{ str($label)->title() }}
            @if ($required)
                <sup class="text-error font-medium">*</sup>
            @endif
        </span>
    </label>
    <div class="relative">
        {{ $slot }}
    </div>
</div>
