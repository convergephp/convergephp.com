@php
$files = [
    '01-overview.md'     => '',
    '02-intallation.md'  => '',
    '05-deployment.md'   => '',
    '03-modules' => [
        '01-module-provider.md'   => '',
        '02-versions.md'          => '',
        '03-clusters.md'          => '',
        '04-menu-items.md'        => '',
        '05-view-interceptors.md' => '',
    ],
    '04-customization' => [
        '01-themes.md'              => '',
        '02-layouts.md'             => '',
        '03-spotlights.md'          => '',
        '04-code-blocks-themes.md'  => '',
        '05-seo.md'                 => '',
    ],
];
@endphp
<div class="bg-base-200 relative min-h-screen overflow-hidden"
     x-data="{
        showFileStructure: false,
        animating: false,
     }"
>

    <!-- Background animated grid -->
    <div class="pointer-events-none absolute left-0 top-0 h-full w-full overflow-hidden opacity-10">
                <div class="bg-primary animate-float-subtle absolute right-1/4 top-10 h-96 w-96 rounded-full blur-3xl">
                </div>

                <div class="bg-success animate-float-subtle absolute left-1/4 top-10 h-96 w-96 rounded-full blur-3xl">
                </div>
    </div>


    <!-- Hero content -->
    <div class="container relative z-10 mx-auto px-4 pt-12 md:pt-20">
        <!-- Logo + Tagline -->
        <div data-aos="fade-up"
        data-aos-duration="300" class="mx-auto max-w-5xl text-center">
            <div class="mb-8 flex justify-center">
                <div class="bg-primary/10 inline-flex items-center rounded-full px-4 py-2">
                    <svg class="text-primary mr-2 h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M12 6v6m0 0v6m0-6h6m-6 0H6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-primary font-medium">Documentation Framework</span>
                </div>
            </div>

            <h1 class="font-display mb-6 text-4xl font-bold tracking-tight text-base-content/90 md:text-6xl">
                Streamline Your Documentation Workflow with
                <span class="text-primary relative inline-block whitespace-nowrap">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="fill-primary/70 absolute left-0 top-2/3 h-[0.58em] w-full" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative">Converge</span>
                </span>
            </h1>

            <p class="mx-auto mb-10 max-w-2xl text-lg text-base-content/60 md:text-xl">
                Build high-quality, dynamic docs with Markdown <br>
                fast, flexible, and open-source.
            </p>

            <!-- CTA Buttons -->
            <div class="mb-16 flex gap-4 justify-center">
                <a href="/docs"
                    class="bg-primary/50 hover:bg-primary-focus group relative inline-flex items-center justify-center overflow-hidden rounded-md px-8 py-3 font-medium transition-all">
                    <span
                        class="ease absolute right-0 -mt-12 h-32 w-8 translate-x-12 rotate-12 transform opacity-10 transition-all duration-1000 group-hover:-translate-x-40 bg-base-200"></span>
                    <span class="relative font-medium text-base-content">Get Started</span>
                    <svg class="ml-2 h-5 w-5 text-base-content" viewBox="0 0 24 24" fill="none">
                        <path d="M13 7l5 5m0 0l-5 5m5-5H6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Interactive Documentation Preview -->
        <div data-aos="fade-up"
     data-aos-duration="1000"
     class="relative mx-auto max-w-6xl">
    <!-- Browser mockup -->
    <div class="border-base-300 bg-base-100 backdrop-blur-sm bg-opacity-95 overflow-hidden rounded-xl border shadow-2xl">
        <div class="bg-base-200/50 border-base-300 flex justify-between border-b px-4 py-3">
            <div class="flex items-center space-x-2">
                <div class="h-3 w-3 rounded-full bg-red-500"></div>
                <div class="h-3 w-3 rounded-full bg-yellow-500"></div>
                <div class="h-3 w-3 rounded-full bg-green-500"></div>
            </div>
            <div class="mx-4 flex-1 hidden md:block">
                <div class="bg-base-300/50 text-base-content/70 w-full rounded-md px-3 py-1.5 text-sm flex items-center">
                    <svg class="h-4 w-4 mr-2 text-base-content/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    https://convergephp.com/docs/4.x
                </div>
            </div>
            <div class="flex items-center space-x-2">
                <button @click="
                    if (!animating) {
                        animating = true;
                        setTimeout(() => {
                            showFileStructure = !showFileStructure;
                            setTimeout(() => {
                                animating = false;
                            }, 500);
                        }, 250);
                    }
                "
                    class="btn btn-sm bg-base-200 hover:bg-base-300 border-base-300 text-base-content/90">
                    <span x-text="showFileStructure ? 'Show Preview' : 'Toggle File Structure'"></span>
                </button>
            </div>
        </div>

        <div class="bg-base-100 relative h-[300px] md:h-[500px] lg:h-[700px] overflow-hidden p-4">
            <!-- Split view container with preserved space -->
            <div class="flex h-full rounded-lg overflow-hidden border border-base-300/50">
                <!-- Docs preview with smooth transition -->
                <div
                    class="transition-all duration-500 ease-in-out bg-white overflow-hidden"
                    :class="showFileStructure ? 'w-0 opacity-0' : 'flex-1 opacity-100'"
                    :style="animating ? 'pointer-events: none;' : ''"
                    x-ref="docsPreview">
                    <div class="h-full overflow-auto">
                        <!-- Here we would normally have the actual documentation preview -->
                        <div class="h-full w-full flex items-center justify-center">
                            <img src="{{ asset('images/hero.webp') }}" alt="Converge documentation example" class="h-full !w-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- File structure visualization with smooth transition -->
                <div
                    class="transition-all duration-500 ease-in-out overflow-hidden bg-base-200"
                    :class="showFileStructure ? 'flex-1 opacity-100' : 'w-0 opacity-0'"
                    :style="animating ? 'pointer-events: none;' : ''">
                    <div class="h-full overflow-auto p-6">
                        <h3 class="mb-6 text-lg font-semibold text-base-content flex items-center">
                            <svg class="h-5 w-5 mr-2 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                              <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Documentation Structure
                        </h3>

                        <div class="space-y-2">
                            <x-filesystem :items="$files"></x-filesystem>
                        </div>

                        <div class="mt-8 rounded-lg bg-primary/10 border border-primary/20 p-4 text-sm text-base-content/80">
                            <p class="flex items-start">
                                <svg class="h-5 w-5 mr-2 text-primary flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                  <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Converge automatically transforms your Markdown files into beautiful, interactive documentation with smart navigation and syntax highlighting.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Improved transition animation overlay -->
            <div class="pointer-events-none absolute inset-0 flex items-center justify-center transition-all duration-500 ease-in-out"
                 :class="animating ? 'bg-base-100/80 opacity-100' : 'bg-base-100/0 opacity-0'">
                <div class="text-center transform transition-all duration-500 ease-in-out"
                     :class="animating ? 'scale-100 opacity-100' : 'scale-95 opacity-0'">
                    <div class="bg-primary inline-flex h-16 w-16 items-center justify-center rounded-full shadow-lg">
                        <svg class="h-8 w-8 text-white animate-spin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                  stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="mt-4 text-lg font-medium text-base-content" x-text="showFileStructure ? 'Loading preview...' : 'Loading file structure...'"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom decorative element -->
    <div class="bg-base-300/30 blur-lg h-4 w-4/5 mx-auto rounded-full mt-1"></div>
</div>
    </div>

    <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(3deg);
            }
        }
    </style>
</div>
