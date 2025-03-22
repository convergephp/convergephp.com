<section class="mx-auto max-w-7xl p-6 py-16 md:py-24 lg:px-8">

    {{-- TITLES --}}
    <div class="grid max-w-xl items-start justify-between gap-5">
        <div class="text-4xl/[1.07] font-bold tracking-tight md:text-5xl/[1.07]">
            <span class="from-base-content to-base-300 bg-gradient-to-br bg-clip-text text-transparent">
                Discover the Power of converge
            </span>
        </div>
        <div class="text-lg text-zinc-400/80">
            Crafted for performance, scalability, and ease of use—experience a template
            built to meet all your project needs
        </div>
    </div>

    {{-- CARDS --}}
    <div class="mt-16 grid grid-cols-6 gap-4 lg:grid-cols-12 lg:gap-6 xl:gap-8">

        {{-- THEMES --}}
        <div
             class="bg-base-100 ring-base-300 group order-1 col-span-full flex h-[480px] flex-col overflow-hidden rounded-2xl ring-1 md:col-span-3 lg:col-span-5 xl:col-span-4">
            <div class="mb-4 h-full w-full overflow-hidden [mask:linear-gradient(transparent,red,transparent)]">
                <img class="h-full w-full transform duration-200 group-hover:scale-105"
                     src="{{ asset('exemple-4.png') }}"
                     alt="">
            </div>
            <div class="mt-auto w-full space-y-4 px-8 pb-8">
                <h3 class="text-lg/none font-medium text-zinc-200">
                    Customizable Themes
                </h3>
                <p class="max-w-sm text-sm text-zinc-400/80">
                    Effortlessly switch between light and dark modes or create
                    your customtheme.
                </p>
            </div>
        </div>

        {{-- DOCS  --}}
        <div
             class="bg-base-100 ring-base-300 group order-1 col-span-full flex h-[480px] flex-col overflow-hidden rounded-2xl ring-1 md:col-span-3 lg:col-span-5 xl:col-span-4">
            <div class="mb-4 h-full w-full overflow-hidden [mask:linear-gradient(transparent,red,transparent)]">
                <img class="h-full w-full transform duration-200 group-hover:scale-105"
                     src="{{ asset('exemple-4.png') }}"
                     alt="">
            </div>
            <div class="mt-auto w-full space-y-4 px-8 pb-8">
                <h3 class="text-lg/none font-medium text-zinc-200">
                    Comprehensive Documentation
                </h3>
                <p class="max-w-sm text-sm text-zinc-400/80">
                    Detailed step-by-step guides to help you get
                    started and master converge.
                </p>
            </div>
        </div>

        {{-- LAYOUTS --}}
        <div
             class="bg-base-100 ring-base-300 group order-3 col-span-full flex h-[480px] flex-col overflow-hidden rounded-2xl ring-1 md:order-4 md:col-span-3 lg:col-span-5 xl:order-3 xl:col-span-4">
            <div
                 class="mb-4 h-full w-full scale-125 transform overflow-hidden [mask:linear-gradient(transparent,black,transparent)]">
                <img class="h-full group-hover:scale-105"
                     src="{{ asset('exemple-4.png') }}"
                     alt="">
            </div>
            <div class="mt-auto w-full space-y-4 px-8 pb-8">
                <h3 class="text-lg/none font-medium text-zinc-200">
                    Multiple Layouts
                </h3>
                <p class="max-w-sm text-sm text-zinc-400/80">
                    Choose from various layout options to match your needs.
                </p>
            </div>
        </div>

        {{-- BLADE COMPONENTS --}}
        <div
             class="bg-base-100 ring-base-300 group order-4 col-span-full flex h-[480px] flex-col overflow-hidden rounded-2xl ring-1 md:order-5 xl:order-4 xl:col-span-7">
            <div class="mb-4 h-full w-full overflow-hidden [mask:linear-gradient(transparent,black,transparent)]">
                <img class="h-full w-full transform duration-200 group-hover:scale-105"
                     src="{{ asset('exemple-4.png') }}"
                     alt="">
            </div>
            <div class="mt-auto w-full space-y-4 px-8 pb-8">
                <h3 class="text-lg/none font-medium text-zinc-200">
                    Handcrafted Blade Components
                </h3>
                <p class="max-w-md text-sm text-zinc-400/80 xl:max-w-sm">
                    A collection of custom-made, highly flexible blade components that fit
                    any use case.
                </p>
            </div>
        </div>

        {{-- OTHER --}}
        <div
             class="bg-base-100 ring-base-300 group order-5 col-span-full flex h-[480px] flex-col overflow-hidden rounded-2xl ring-1 md:order-3 md:col-span-3 lg:col-span-7 xl:order-5 xl:col-span-5">
            <div class="mb-4 h-full w-full overflow-hidden [mask:linear-gradient(transparent,black,transparent)]">
                <img class="h-full w-full transform duration-200 group-hover:scale-105"
                     src="{{ asset('exemple-4.png') }}"
                     alt="">
            </div>
            <div class="mt-auto w-full space-y-4 px-8 pb-8">
                <h3 class="text-lg/none font-medium text-zinc-200">Views interception</h3>
                <p class="max-w-sm text-sm text-zinc-400/80">
                    You can inject, blade view directly in your Documentation</p>
            </div>
        </div>
    </div>
</section>
