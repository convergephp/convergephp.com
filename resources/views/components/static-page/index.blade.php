@props([
    'path'=>null,
    'title'=>null
])
<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <div class="prose max-w-3xl my-8 mx-3 lg:mx-auto prose-md dark:prose-invert prose-pre:bg-white/5 dark:prose-code:rounded dark:prose-code:bg-white/20">
        {!! (str()->markdown(file_get_contents($path))) !!}
    </div>
</x-layout>
