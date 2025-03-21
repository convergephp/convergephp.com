@props([
    'label' => 'field name',
    'required' => false,
    'for' => null,
])
<div {{ $attributes->merge(['class'=>'my-1']) }}>
    <label class="inline-flex items-center gap-x-3" for="{{ $for }}">
        <span class="py-1 px-2 text-sm lowercase font-medium leading-6 dark:text-white text-gray-800 ">
            {{ str($label)->title() }}
            @if ($required)
                <sup class="font-medium dark:text-red-400 text-red-500">*</sup>
            @endif
        </span>
    </label>
    <div class="relative">
        {{ $slot }}
    </div>
</div>
