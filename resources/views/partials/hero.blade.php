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

        {{-- Intro Title --}}
        <h1
            class="from-base-content/40 to-base-content/60 bg-gradient-to-br bg-clip-text py-3 text-4xl/[1.07] font-bold tracking-tight text-transparent md:text-5xl/[1.07]">
            Streamline Your Documentation Workflow with <span class="text-primary">Converge</span></h1>

        {{-- Intro Description --}}
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
                    <div class="relative z-10 rounded-full bg-zinc-950 px-4 py-1.5 ring-1 ring-white/10">
                        Get started
                    </div>
                    <span
                          class="absolute -bottom-0 left-[1.125rem] h-px w-[calc(100%-2.25rem)] bg-gradient-to-r from-cyan-400/0 via-cyan-400/90 to-cyan-400/0 transition-opacity duration-500 group-hover:opacity-40">
                    </span>
                </button>
            </div>

            <div class="group"
                 style="opacity: 1;"><a class="flex flex-col items-center gap-1"
                   href="/#intro">
                    <p class="text-sm/6 text-zinc-400 duration-300 group-hover:text-zinc-100">Learn more</p>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="18"
                         height="18"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.5"
                         stroke-linecap="round"
                         stroke-linejoin="round"
                         class="lucide lucide-arrow-down text-zinc-400 duration-300 group-hover:translate-y-1.5 group-hover:text-zinc-100">
                        <path d="M12 5v14"></path>
                        <path d="m19 12-7 7-7-7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="perspective-[1500px] relative pt-16"
         style="opacity: 1;">
        <div id="tsparticles"
             class="pointer-events-none absolute -top-36 left-1/2 h-[32rem] w-full -translate-x-1/2 -translate-y-1/2 overflow-hidden lg:w-[60rem]">
            <canvas data-generated="true"
                    style="width: 100% !important; height: 100% !important; margin: 0px !important; padding: 0px !important; position: fixed !important; z-index: 0 !important; top: 0px !important; left: 0px !important;"
                    aria-hidden="true"
                    height="512"
                    width="960">
            </canvas>
        </div>

        <div class="relative"
             style="transform: none;">
            <div
                 class="absolute -top-px right-20 h-2 w-20 [mask-image:linear-gradient(to_right,rgba(217,217,217,0)_0%,#d9d9d9_25%,#d9d9d9_75%,rgba(217,217,217,0)_100%)] md:w-32 lg:w-64">
                <div
                     class="animate-starlight-right h-px w-full bg-gradient-to-r from-cyan-400/0 via-cyan-400 to-cyan-400/0">
                </div>
            </div>

            <div class="rounded-md bg-zinc-950 ring-1 ring-white/10 lg:rounded-2xl">
                <div class=""
                     style="opacity: 1;">
                    <img data-aos="fade-up"
                         data-aos-duration="1500"
                         alt="App screenshot"
                         fetchpriority="high"
                         width="4200"
                         height="2490"
                         decoding="async"
                         data-nimg="1"
                         class="rounded-md lg:rounded-2xl"
                         style="color:transparent"
                         src="{{ asset('dashboard.svg') }}">
                </div>
            </div>

            <div
                 class="absolute -bottom-2 left-20 h-2 w-20 [mask-image:linear-gradient(to_right,rgba(217,217,217,0)_0%,#d9d9d9_25%,#d9d9d9_75%,rgba(217,217,217,0)_100%)] md:w-32 lg:w-64">
                <div
                     class="animate-starlight-left h-px w-full bg-gradient-to-r from-cyan-400/0 via-cyan-400 to-cyan-400/0">
                </div>
            </div>
        </div>
    </div>
</section>
