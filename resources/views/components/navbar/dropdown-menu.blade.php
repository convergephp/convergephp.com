@props([
    'label',
    'active' => false,
    'groupName' => 'Group name ',
    'groupDescription' => 'this is optional description',
])

<div x-data="{ open: false }"
     x-on:mouseover="open = true"
     x-on:mouseleave="open = false"
     class="relative">
    <button {{ $attributes }}
            @class([
                'px-2 py-2 min-h-[5rem] text-white font-medium hover:text-primary/80 transition duration-150 ease-in-out flex items-center',
                'text-primary' => $active,
            ])>
        {{ $label }}
        <svg xmlns="http://www.w3.org/2000/svg"
             width="16"
             height="16"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round"
             class="ml-1 h-4 w-4 transition-transform duration-150 ease-in-out"
             :class="{ 'transform -rotate-180 duration-400': open }">
            <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
    </button>
    <div x-show="open"
         x-transition:enter="transition ease-out duration-600"
         x-transition:enter-start="opacity-100"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-0"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:min-w-2xl border-base-300 bg-base-100 text-base-content absolute left-1/2 z-10 mt-0 -translate-x-1/2 transform rounded-md border shadow-lg"
         style="display: none;">
        <!-- Triangle pointer -->
        <div class="absolute -top-2 left-1/2 -translate-x-1/2 transform">
            <div
                 class="border-b-base-300 h-0 w-0 border-b-8 border-l-8 border-r-8 border-l-transparent border-r-transparent">
            </div>
        </div>

        <div class="p-6">

            {{-- Optional group name --}}
            @isset($groupName)
                <div class="mb-2 flex items-center">
                    <span class="text-base-content font-bold">{{ $groupName }}</span>
                </div>
            @endisset

            {{-- Optional group descrtion --}}
            @isset($groupDescription)
                <p class="text-base-content mb-6 text-sm">{{ $groupDescription }}</p>
            @endisset

            {{-- Content --}}
            {{ $slot }}
        </div>
    </div>
</div>
