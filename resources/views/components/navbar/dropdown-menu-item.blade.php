@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'block py-2 text-sm transition duration-150 hover:text-primary/80',
       'text-base-content font-base' => !$active,
       'text-primary/80' => $active,
   ])>
    {{ $slot }}
</a>
