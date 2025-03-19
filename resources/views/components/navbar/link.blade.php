@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'transition-colors hover:text-primary/80 text-base-content px-4 sm:flex space-x-1',
       'text-blue-500' => $active,
   ])>
    {{ $slot }}
</a>
