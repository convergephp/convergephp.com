@props(['label', 'active' => false])

<div x-data="{ open: false }"
     x-on:mouseover="open = true"
     x-on:mouseleave="open = false"
     class="relative">
    <button {{ $attributes }}
            @class([
                'px-2 py-2 min-h-[5rem] text-white font-medium hover:text-gray-200 transition duration-150 ease-in-out flex items-center',
                'text-blue-500' => $active,
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
         class="min-w-2xl absolute left-1/2 z-10 mt-0 -translate-x-1/2 transform rounded-md border border-gray-400/20 bg-white shadow-lg dark:bg-black dark:text-white"
         style="display: none;">
        <!-- Triangle pointer -->
        <div class="absolute -top-2 left-1/2 -translate-x-1/2 transform">
            <div
                 class="h-0 w-0 border-b-8 border-l-8 border-r-8 border-b-white border-l-transparent border-r-transparent">
            </div>
        </div>

        <div class="p-6">
            <div class="mb-2 flex items-center">
                <span class="mr-2 font-medium text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="20"
                         height="20"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16"
                              y1="13"
                              x2="8"
                              y2="13"></line>
                        <line x1="16"
                              y1="17"
                              x2="8"
                              y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </span>
                <span class="font-medium text-gray-600">{{ $heading ?? 'Documentation' }}</span>
            </div>
            <p class="mb-6 text-sm text-gray-500">{{ $description ?? 'Start integrating our products and tools' }}</p>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h3 class="mb-3 text-sm font-medium text-gray-700">{{ $leftSectionTitle ?? 'GET STARTED' }}</h3>
                    {{ $leftSection ?? '' }}
                </div>
                <div>
                    <h3 class="mb-3 text-sm font-medium text-gray-700">{{ $rightSectionTitle ?? 'GUIDES' }}</h3>
                    {{ $rightSection ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>
