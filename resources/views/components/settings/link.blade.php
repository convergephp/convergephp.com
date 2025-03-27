@props([
    'label' => null,
    'href' => null,
    'active'=>false
])
<li class="list-none">
    <a
    {{ $attributes->whereStartsWith('wire:navigate') }}
    @class([
        'font-none hover:bg-card-default bg-card-default group flex items-center rounded-[12px] px-3 py-2 text-left text-sm hover:text-primary',
        'text-primary '=>$active
    ])
        href="{{ $href }}">
        <span
            @class([
                'inline-block h-[16px] scale-y-125 rounded-xl group-hover:bg-primary',
                'bg-primary group-hover:scale-y-125 '=>$active
            ])
            aria-hidden="true"
            style="transition-property: transform, background-color; transition-duration: 0.3s, 0.3s; transition-timing-function: ease, ease; transition-delay: 0.1s; transition-behavior: normal, normal; margin-right: 9px; width: 9px;">
        </span>
        {{ $label }}
    </a>
</li>
