<x-layout>
    <div class="mx-auto max-w-5xl px-2 py-2 md:py-6">
        {{-- HEADER SECTION --}}
        <section class="mb-12">
            <div class="w-full overflow-hidden">
                <div data-aos="fade-up"
                     data-aos-duration="1000"
                     class="flex max-w-5xl flex-col items-center justify-between gap-5 px-2 py-12 md:items-start">
                    <div class="text-3xl/[1.07] font-bold tracking-tight md:text-4xl/[1.07]">
                        <span
                              class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text text-center leading-snug text-transparent">
                            Converge Toolkits <br> Elevate Your Documentation Design
                        </span>
                    </div>
                    <div class="text-base-content/50 text-lg tracking-wide">
                        Enhance your Laravel documentation with premium components, layouts, and themes—crafted for
                        developers who want a beautifully designed experience.
                    </div>
                </div>
            </div>
        </section>

        {{-- Product Cards --}}
        @foreach ($products as $index => $product)
            <section class="mb-16">
                <x-product-card :product="$product"
                                :featured="true"
                                :highlight="true" />
            </section>
        @endforeach

        {{-- PRODUCTS GRID with grid option --}}
        {{-- <section>
            <div class="grid gap-8 sm:grid-cols-1 lg:grid-cols-2">
                @foreach ($products as $index => $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section> --}}

        <section class="mt-20">
            <div class="from-primary/10 to-secondary/10 rounded-2xl bg-gradient-to-br p-8 text-center">
                <h2 class="mb-4 text-3xl font-bold">Boost Your Documentation to the Next Level</h2>
                <p class="text-base-content/70 mx-auto mb-6 max-w-2xl">
                    Explore our documentation to discover how to customize and make the most of all available features.
                </p>
                <a target="_blank"
                   href="/docs"
                   class="btn btn-primary">View Documentation</a>
            </div>
        </section>

    </div>
</x-layout>
