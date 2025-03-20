<section class="mx-auto max-w-7xl px-6 lg:px-8">
    {{-- ANIMATED LINE --}}
    <x-animated-line-svg height="68"
                         direction="ltr"
                         duration="3"
                         strokeWidth="2"
                         colorStart="#2EB9DF"
                         background="transparent"
                         colorEnd="#9E00FF"
                         class="transfor absolute left-0 top-[120px] hidden md:left-20 md:block lg:left-52" />

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

    <div data-aos="fade-up"
         data-aos-duration="1500"
         data-aos-anchor-placement="top-bottom"
         class="relative mx-auto max-w-3xl pt-[7rem] text-center">

        <h1
            class="from-base-content/80 to-base-content bg-gradient-to-br bg-clip-text py-3 text-4xl/[1.07] font-bold tracking-tight text-transparent md:text-5xl/[1.07]">
            Streamline Your Documentation Workflow with <span class="text-primary">Converge</span>
        </h1>

        <p class="text-base-content/80 text-md mt-6 font-medium md:text-xl">Converge is the open-source framework that
            empowers anyone to build
            high-quality, dynamic docs from Markdown. Developer-friendly. Intuitive. And designed for teams who care
            about clarity
        </p>

        <div class="mt-10 flex flex-col items-center justify-center gap-y-8">
            <div style="opacity: 1; transform: none;">
                <button class="hover:shadow-glow hover:text-base-content/80 text-base-content group relative rounded-full p-px text-sm/6 duration-300"
                        type="button"
                        aria-haspopup="dialog"
                        aria-expanded="false"
                        aria-controls="radix-:Rjlj9ukq:"
                        data-state="closed">
                    <span class="absolute inset-0 overflow-hidden rounded-full">
                        <span
                              class="absolute inset-0 rounded-full bg-[image:radial-gradient(75%_100%_at_50%_0%,rgba(56,189,248,0.6)_0%,rgba(56,189,248,0)_75%)] opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        </span>
                    </span>
                    <div
                         class="bg-secondary ring-base-100/10 text-primary-content relative z-10 rounded-full px-4 py-1.5 ring-1">
                        Get started
                    </div>
                    <span
                          class="absolute -bottom-0 left-[1.125rem] h-px w-[calc(100%-2.25rem)] bg-gradient-to-r from-cyan-400/0 via-cyan-400/90 to-cyan-400/0 transition-opacity duration-500 group-hover:opacity-40">
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div
         class="border-base-300 bg-base-100 min relative mt-20 overflow-hidden rounded-[24px] border p-2 lg:rounded-[32px] lg:p-4">
        <div class="bg-base-300/50 border-base-300 rounded-[24px] border"><img alt="Ecme homepage"
                 loading="lazy"
                 width="1920"
                 height="1040"
                 decoding="async"
                 data-nimg="1"
                 class="rounded-2xl lg:rounded-[24px]"
                 style="color: transparent;"
                 src="{{ asset('exemple-2.png') }}"></div>
    </div>

    </div>
</section>
