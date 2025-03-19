@props(['href', 'active' => false])

<a href="{{ $href }}"
   @class([
       'px-2 py-2 text-white font-medium hover:text-gray-200 transition duration-150 ease-in-out',
       'text-blue-500' => $active,
   ])>
    {{ $slot }}
</a>
