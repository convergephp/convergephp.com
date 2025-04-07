@props(['href', 'active' => false])

<a href="{{ $href }}"
   {{ $attributes }}
   @class([
       'transition-colors hover:text-primary/80 text-base-content px-4 sm:flex space-x-1',
       'text-primary' => $active,
   ])>
    {{ $slot }}
</a>
