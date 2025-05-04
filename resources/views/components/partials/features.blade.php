<div class="relative px-2"
     data-aos="fade-up"
     data-aos-duration="1000">
    <div class="bg-base-200 mx-auto w-full max-w-7xl space-y-2 overflow-hidden">
        {{-- HEADER --}}
        <div class="bg-base-200 border-base-300 w-full overflow-hidden rounded-lg border">
            <div data-aos="fade-up"
                 data-aos-duration="1000"
                 class="grid max-w-xl items-start justify-between gap-5 px-2 py-8">
                <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
                    <span
                          class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text tracking-widest text-transparent">
                        Discover the Power of converge
                    </span>
                </div>
                <div class="text-base-content/50 text-lg tracking-wide">
                    Crafted for performance, scalability, and ease of use—experience a template
                    built to meet all your project needs
                </div>
            </div>
        </div>

        {{-- FEATURE CARDS GRID --}}
        <div class="grid-cols-30 grid w-full grid-flow-dense gap-2">
            {{-- THEMES --}}
            <x-feature-card title="Customizable Themes"
                            description="Effortlessly switch between light and dark modes or create your custom theme."
                            image="images/exemple-4.png" />

            {{-- DOCS CARD --}}
            <x-feature-card title="Comprehensive Documentation"
                            description="Detailed step-by-step guides to help you get started and master converge."
                            image="images/exemple-4.png" />

            {{-- LAYOUTS CARD --}}
            <x-feature-card title="Multiple Layouts"
                            description="Choose from various layout options to match your needs."
                            image="images/exemple-4.png"
                            columnSpan="col-span-full md:col-span-12" />

            {{-- BLADE COMPONENTS CARD --}}
            <x-feature-card title="Handcrafted Blade Components"
                            description="A collection of custom-made, highly flexible blade components that fit any use case."
                            image="images/exemple-4.png"
                            columnSpan="col-span-full md:col-span-18" />
        </div>
    </div>
</div>
