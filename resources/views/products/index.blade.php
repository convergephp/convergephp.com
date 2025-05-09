<x-layout>
    <div class="mx-auto max-w-5xl px-2 py-2 md:py-6">

        <div class="relative mx-auto max-w-5xl py-4 md:py-10">
            <!-- Creative title layout with gradient text -->
            <div class="mb-10 flex flex-col items-center text-center">
                <div data-aos="zoom-in"
                     data-aos-easing="ease"
                     class="mb-3 inline-block -rotate-1 transform">
                    <span
                          class="border-primary/50 from-primary to-success rounded-full border bg-transparent bg-gradient-to-r bg-clip-text px-3 py-1 text-sm font-bold uppercase tracking-wider text-transparent">Documentation
                        Reimagined</span>
                </div>

                <h1 data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-easing="ease"
                    class="relative z-10 mb-2 text-4xl font-extrabold tracking-tight md:text-6xl">
                    <span
                          class="from-primary leading-20 to-success inline-block transform bg-gradient-to-r bg-clip-text text-transparent transition-transform duration-300 hover:scale-105">
                        Converge Toolkits
                    </span>
                </h1>

                <div data-aos="fade-up"
                     data-aos-delay="400"
                     data-aos-easing="ease"
                     class="mt-2 flex items-center justify-center">
                    <div class="bg-base-content/60 h-px w-12 opacity-50"></div>
                    <p class="text-base-content/60 mx-4 text-lg font-medium md:text-xl">Elevate Your Documentation
                        Design
                    </p>
                    <div class="bg-base-content/60 h-px w-12 opacity-50"></div>
                </div>
            </div>

            <!-- Subtitle with animated highlight -->
            <p data-aos="fade-up"
               data-aos-delay="400"
               data-aos-easing="ease"
               class="text-base-content/60 relative mx-auto max-w-2xl text-center text-lg">
                Enhance your Laravel documentation with
                <span class="relative inline-block px-1">
                    <span class="relative z-10">premium components</span>
                    <span
                          class="bg-primary/50 absolute bottom-0 left-0 h-3 w-full skew-x-12 transform opacity-30"></span>
                </span>,
                layouts, and themes—crafted for developers who want a
                <span class="relative inline-block px-1">
                    <span class="relative z-10">beautifully designed</span>
                    <span
                          class="bg-primary/50 absolute bottom-0 left-0 h-3 w-full -skew-x-12 transform opacity-30"></span>
                </span>
                experience.
            </p>
        </div>

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
