@props([
    'title',
    'description'=>null,
])

<div class="flex w-full flex-col text-center">
    <div class="font-bold text-2xl">{{ $title }}</div>
    @if(filled($description))
        <flux:subheading>{{ $description }}</flux:subheading>
    @endif
</div>
