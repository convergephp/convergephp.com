@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'block py-2 text-sm transition duration-150 hover:text-blue-500',
       'text-gray-700' => !$active,
       'text-blue-600 font-medium' => $active,
   ])>
    {{ $slot }}
</a>
