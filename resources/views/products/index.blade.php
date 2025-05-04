<x-layout>
    <div class="mx-auto max-w-7xl px-2">
        <div class="w-full overflow-hidden rounded-lg">
            <div data-aos="fade-up"
                 data-aos-duration="1000"
                 class="grid max-w-5xl items-start justify-between gap-5 px-2 py-8">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span
                          class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text tracking-widest text-transparent">
                        Converge Toolkits – Elevate Your Documentation Design
                    </span>
                </div>
                <div class="text-base-content/50 text-lg tracking-wide">
                    Enhance your Laravel documentation with premium components, layouts, and themes—crafted for
                    developers who want a beautifully designed experience.
                </div>
            </div>
        </div>

        {{-- CARDS --}}
        @foreach ($products as $product)
            <div class="bg-base-100 rounded-box mb-4 border border-gray-400/20 p-4">
                <div
                     class="bg-base-200 border-base-300 rounded-box group relative h-full w-full overflow-hidden p-8 transition-colors duration-300 md:px-10 md:py-[2.4rem] lg:block xl:min-h-[450px]">
                    <div class="h-full md:grid md:grid-flow-col md:grid-cols-12 md:gap-8">
                        <div class="col-span-6 flex h-full w-full flex-col lg:col-span-8">
                            <div class="mb-4 flex-1 text-center md:text-left">
                                <div class="mb-6 flex flex-col items-center md:items-start">
                                    <h2 class="text-2xl font-semibold leading-tight lg:text-3xl">
                                        {{ $product->name }}
                                    </h2>
                                </div>
                                <div
                                     class="content hide-scrollbar clamp text-base-content/50 mb-2 line-clamp-6 overflow-hidden leading-loose md:mb-8 xl:mr-0">
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>

                                <div class="text-start">
                                    <ul
                                        class="text-base-content/80 list-inside list-image-[url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxNCAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBmaWxsPSIjMzhiZGY4Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMy42ODUuMTUzYS43NTIuNzUyIDAgMCAxIC4xNDMgMS4wNTJsLTggMTAuNWEuNzUuNzUgMCAwIDEtMS4xMjcuMDc1bC00LjUtNC41YS43NS43NSAwIDAgMSAxLjA2LTEuMDZsMy44OTQgMy44OTMgNy40OC05LjgxN2EuNzUuNzUgMCAwIDEgMS4wNS0uMTQzWiIgLz48L3N2Zz4=)]">
                                        @foreach ($product->features ?? [] as $feature)
                                            <li>
                                                {{ $feature }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('exemple-4.png') }}"
                                 alt="Learn Statamic with Jack thumbnail"
                                 class="absolute right-0 top-0 hidden h-full translate-x-1/2 transition duration-200 group-hover:scale-105 md:inline-block">
                        </div>
                    </div>

                    <a class="btn btn-primary btn-wide"
                       href="{{ route('products.show', $product->slug) }}">See more</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
