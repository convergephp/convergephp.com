<section class="mx-auto max-w-7xl px-2">
    {{-- ANIMATED LINE --}}
    {{-- <x-animated-line-svg height="68"
                         direction="ltr"
                         duration="3"
                         strokeWidth="2"
                         colorStart="#2EB9DF"
                         background="transparent"
                         colorEnd="#9E00FF"
                         class="transfor absolute left-0 top-[120px] hidden md:left-20 md:block lg:left-52" /> --}}

    {{-- BAKGROUND GRID --}}
    <x-grid-svg data-aos="fade-down"
                data-aos-duration="2000"
                class="absolute inset-0 -z-0 h-full w-full !text-red-500 [mask-image:linear-gradient(to_top,transparent,white)]"
                gridSize="40"
                lineColor="gray"
                lineOpacity="0.2"
                backgroundColor="transparent"
                :highlightedRow="7"
                animationDirection="rtl"
                animationDuration="6"
                highlightColorStart="red"
                highlightColorEnd="blue"
                strokeWidth="1" />

    {{-- SECTION CONTENT --}}

    <div data-aos-anchor-placement="top-bottom"
         class="relative mx-auto max-w-4xl pt-[1rem] text-center md:pt-[3rem] lg:pt-[6rem]">

        <h1 data-aos="zoom-in"
            data-aos-duration="200"
            class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text py-3 text-4xl/[1.07] font-bold tracking-widest text-transparent md:text-5xl/[1.07]">
            Streamline Your Documentation Workflow with <span
                  class="from-base-primary/50 to-primary bg-gradient-to-br bg-clip-text">Converge</span>
        </h1>

        <p data-aos="fade-up"
           data-aos-duration="1000"
           class="text-base-content/80 text-md relative mx-auto mt-6 max-w-3xl font-medium leading-10 md:text-xl">
            Converge is the open-source framework that empowers anyone to build high-quality, dynamic
            <span class="relative mx-1 inline-block px-1">
                <span class="relative z-10 text-white">documentation from Markdown</span>
                <span class="bg-accent/90 -rotate-0.5 absolute inset-0 -skew-y-3 transform"></span>
            </span>. Developer-friendly. Intuitive. And designed for teams who care about clarity
        </p>

        <div data-aos="fade-up"
             data-aos-duration="1000"
             class="w-xs mx-auto mt-10 flex flex-col items-center justify-center gap-y-8">
            <a href="/docs"
               class="btn btn-block text-primary-content from-primary to-primary/50 bg-gradient-to-b">
                Get started
            </a>
        </div>
    </div>

    <div data-aos="zoom-in"
         data-aos-duration="500"
         class="mockup-browser bg-base-200 !mx-0 mt-10 w-full border border-gray-400/20">
        <div class="mockup-browser-toolbar h-full">
            <div class="input">https://convergephp.com/docs/5.x</div>
        </div>
        <div
             class="flex justify-center border-t border-gray-400/20 bg-[image:radial-gradient(var(--pattern-fg)_1px,_transparent_0)] bg-[size:10px_10px] bg-fixed p-4 [--pattern-fg:var(--color-base-300)]">
            <div class="rounded-box relative w-full overflow-hidden"
                 style="max-height: 700px;">
                <img alt="Converge docs screenshot"
                     loading="lazy"
                     decoding="async"
                     data-nimg="1"
                     class="h-auto w-full object-contain"
                     style="color: transparent;"
                     src="{{ asset('exemple-2.png') }}">
            </div>
        </div>
    </div>
    </div>
</section>
