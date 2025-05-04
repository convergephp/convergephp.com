<?php
$filesArray = array_fill_keys([
    "01-getting-started.md",
    "02-grid.md",
    "03-flexbox.md",
    "04-spacing.md",
    "05-typography.md",
    "06-backgrounds.md",
    "07-borders.md",
    "08-effects.md",
    "09-transitions.md",
    "10-transforms.md",
    "11-interactivity.md",
    "12-accessibility.md"
], '');

?>

<section class="mx-auto max-w-7xl px-2 pt-[3rem] md:pt-[5rem]">
    {{-- BAKGROUND GRID --}}
    <x-grid-svg data-aos="fade-down" data-aos-duration="2000" class="absolute inset-0 -z-0 h-full w-full
           [mask-image:linear-gradient(to_top,transparent_10%,white_90%),linear-gradient(to_bottom,transparent_10%,white_99%)]
           [mask-composite:intersect] [-webkit-mask-composite:destination-in]
           [mask-composite:intersect] [-webkit-mask-composite:destination-in]" gridSize="30" lineColor="gray"
        lineOpacity="0.1" backgroundColor="transparent" :highlightedRow="7" animationDirection="rtl"
        animationDuration="6" highlightColorStart="red" highlightColorEnd="blue" strokeWidth="1" />

    {{-- SECTION CONTENT --}}

    <div data-aos-anchor-placement="top-bottom" class="relative mx-auto text-center pt-[1rem]">

        <h1 data-aos="zoom-in" data-aos-duration="300" class="mx-auto max-w-5xl  font-display text-4xl font-medium tracking-tight text-slate-900 sm:text-6xl">
            <span class="inline-block text-base-content"> Streamline Your Documentation Workflow with
                <span class="relative whitespace-nowrap text-primary">
                <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-primary/70" preserveAspectRatio="none"><path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path></svg>
                <span class="relative">Converge</span></span>
            </span>
        </h1>

        <p data-aos="fade-up" data-aos-duration="1000"  class="max-w-(--breakpoint-md) px-2 text-lg/7 mt-10 mx-auto font-medium text-base-content/60 max-sm:px-4">
            Build high-quality, dynamic docs with Markdown — fast, flexible, and open-source.
        </p>

        <div data-aos="fade-up" data-aos-duration="1000"
            class="w-xs mx-auto mt-10 flex flex-col items-center justify-center gap-y-8">
            <a href="/docs" class="relative px-5 py-2 font-medium text-white group">
                <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-0 -skew-x-12 bg-primary/60 group-hover:bg-primary group-hover:skew-x-12"></span>
                <span class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform skew-x-12 bg-primary group-hover:bg-primary/60 group-hover:-skew-x-12"></span>
            <span class="absolute bottom-0 left-0 hidden w-10 h-20 transition-all duration-100 ease-out transform -translate-x-8 translate-y-10 bg-primary/80 -rotate-12"></span>
            <span class="absolute bottom-0 right-0 hidden w-10 h-20 transition-all duration-100 ease-out transform translate-x-10 translate-y-8 bg-primary/40 -rotate-12"></span>
            <span class="relative">Get started</span>
        </a>
        </div>
    </div>

    <div data-aos="zoom-in" data-aos-duration="500"
        class="mockup-browser bg-base-200 relative mx-auto mt-14 w-full max-w-7xl overflow-hidden border border-base-300 mb-6">
        <div class="mockup-browser-toolbar h-full">
            <div class="input">https://convergephp.com/docs/4.x</div>
        </div>

        <div
            class="relative border-t border-base-300 bg-[image:radial-gradient(var(--pattern-fg)_1px,_transparent_0)] bg-[size:10px_10px] bg-fixed [--pattern-fg:var(--color-base-300)]">

            <div id="image-container" class="w-full">
                <div class="rounded-box w-full overflow-hidden" style="max-height: 500px;">
                    <img alt="Converge docs screenshot" loading="lazy" decoding="async"
                        class="h-auto w-full object-contain" style="color: transparent;"
                        src="{{ asset('images/exemple-2.png') }}">
                </div>
            </div>

            <div id="resizer"
                class="hover:bg-base-300 bg-base-200 absolute right-0 top-0 z-30 flex h-full w-6 cursor-col-resize items-center justify-center shadow-lg transition-colors duration-200">
                <button id="resizer-handle" class="btn btn-square btn-sm btn-primary cursor-col-resize">
                    <svg class="relative z-10" width="15" height="8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 4 3-3M1 4l3 3M1 4h13m0 0-3-3m3 3-3 3" class="stroke-white" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>

            <div id="code-panel" class="bg-base-200 absolute p-4  right-0 top-0 z-20 h-full overflow-auto text-white"
                style="width: 0%;">
                <div class="w-full mb-2 p-4 bg-error rounded-box overflow-auto">
                This example documentation is generated from the following file structure:
                </div>
                <div class="h-full w-full">
                    <!-- <x-filesystem :items="$filesArray" /> -->
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-pulse {
            animation: pulse 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>

</section>
