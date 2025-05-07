{{-- components/premium-product-card.blade.php --}}
@props(['product', 'featured' => true, 'highlight' => false, 'showFeatures' => true, 'maxFeatures' => 5])

<div
     class="{{ $highlight ? 'border-1 border-base-300' : 'border border-base-300 shadow-md' }} group relative my-8 h-[500px] overflow-hidden rounded-2xl transition-all duration-300">

    {{-- Background pattern --}}
    <div
         class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] opacity-10 [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]">
    </div>

    {{-- Featured badge --}}
    @if ($featured)
        <div
             class="bg-primary text-primary-content absolute -right-12 top-6 z-10 rotate-45 px-12 py-1 text-xs font-semibold uppercase tracking-wider shadow-md">
            Featured
        </div>
    @endif

    <div class="flex flex-col lg:min-h-[500px] lg:flex-row">
        {{-- IMAGE SECTION --}}
        <div class="bg-base-200 {{ $featured ? 'h-80 lg:h-auto' : 'h-64 lg:h-auto' }} relative overflow-hidden lg:w-2/5">
            @if ($product->getMedia('product-image')->isNotEmpty())
                <img src="{{ $product->getFirstMediaUrl('product-image') }}"
                     alt="{{ $product->name }}"
                     class="h-full w-full object-cover transition-all duration-700 group-hover:scale-110 group-hover:brightness-110" />

                {{-- Overlay gradient for better text visibility --}}
                {{-- <div
                     class="from-base-300/80 light:from-base-300/80 absolute inset-0 bg-gradient-to-t via-transparent to-transparent lg:bg-gradient-to-r">
                </div> --}}
            @else
                <div class="flex h-full w-full items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-base-content/20 h-24 w-24"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1"
                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            @endif
        </div>

        {{-- CONTENT SECTION --}}
        <div class="flex flex-1 flex-col p-5 lg:p-8">
            {{-- Title --}}
            <h3
                class="font-heading group-hover:text-primary mb-2 text-2xl font-bold leading-tight tracking-tight md:text-3xl">
                {{ $product->name }}
            </h3>

            {{-- Description --}}
            <p class="text-base-content/70 mb-6 line-clamp-3 leading-relaxed">
                {{ $product->description }}
            </p>

            {{-- Features --}}
            @if ($showFeatures && !empty($product->features))
                <div class="mb-4 flex-1">
                    <ul class="grid gap-2 text-sm sm:grid-cols-2">
                        @foreach ($product->features as $index => $feature)
                            <li class="flex items-start gap-2">
                                <svg class="text-primary h-5 w-5 flex-shrink-0"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke-width="2"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Action buttons --}}
            <div class="z-30 mt-auto flex flex-col gap-3 pt-2 sm:flex-row">
                <a href="{{ route('products.show', $product->slug) }}"
                   class="btn btn-md btn-primary hover:bg-primary/90 group/action">
                    <span>View details</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transform duration-200 group-hover/action:translate-x-2"
                         viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
