@props(['href' => null, 'label' => null])
<a class="text-base-contents relative my-px flex h-10 w-full items-center gap-3 rounded-lg px-3 py-0 text-left"
    href="{{ $href }}" wire:navigate>
    <div class="flex-1 whitespace-nowrap text-sm font-medium leading-none">{{ $label }}</div>
</a>
