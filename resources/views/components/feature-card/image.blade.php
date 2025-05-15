{{-- resources/views/components/hero-feature-card.blade.php --}}
@props([
    'title' => 'Blade Components',
    'description' =>
        'A collection of handcrafted blade components designed for maximum flexibility. Each component is optimized for performance and maintainability while providing a beautiful user experience.',
    'buttonText' => 'Explore Components',
    'imagePath' => 'images/exemple-2.png',
    'imageAlt' => 'Blade Components',
    'url' => '#',
])

<div class="relative mb-20 overflow-hidden"
     data-aos="fade-up"
     data-aos-duration="800">
    {{-- Background decoration elements --}}
    <div class="bg-primary/5 absolute -left-10 -top-10 h-64 w-64 rounded-full blur-3xl"></div>
    <div class="bg-secondary/5 absolute -bottom-10 -right-10 h-64 w-64 rounded-full blur-3xl"></div>
    <div class="bg-accent/5 absolute left-1/2 top-1/4 h-32 w-32 -translate-x-1/2 rounded-full blur-2xl"></div>

    {{-- Main card container with border glow effect --}}
    <div class="rounded-box relative bg-transparent p-px">
        <div
             class="from-primary/20 to-secondary/20 rounded-box absolute inset-0 bg-gradient-to-br via-transparent opacity-50 blur-sm">
        </div>

        <div class="rounded-box relative grid grid-cols-1 overflow-hidden lg:grid-cols-2">
            {{-- Content side --}}
            <div class="bg-base-100 relative z-10 flex flex-col justify-center p-8 sm:p-12 lg:p-16">
                {{-- Floating design elements --}}
                <div class="bg-primary/5 absolute -bottom-6 -left-6 h-24 w-24 rounded-full blur-xl"></div>
                <div class="bg-secondary/5 absolute -right-6 top-6 h-16 w-16 rounded-full blur-xl"></div>

                <div class="relative">
                    {{-- Icon with animated glow --}}
                    <div class="relative mb-8">
                        <div class="group relative inline-flex">
                            <div
                                 class="from-primary/40 to-secondary/40 rounded-box absolute inset-0 animate-ping bg-gradient-to-r opacity-75 blur-sm transition-all duration-300 group-hover:opacity-100">
                            </div>
                            <div
                                 class="from-primary/30 to-secondary/30 rounded-box relative flex h-20 w-20 items-center justify-center bg-gradient-to-br shadow-lg transition-all duration-300 group-hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="text-primary h-10 w-10 drop-shadow-lg transition-all duration-300 group-hover:text-white"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- Text content with gradient effect --}}
                    <h3 class="mb-6 text-4xl font-bold leading-tight tracking-tight">
                        <span
                              class="from-primary to-success bg-gradient-to-r bg-clip-text text-transparent">{{ $title }}</span>
                    </h3>

                    <p class="text-base-content/80 mb-10 text-lg leading-relaxed">
                        {{ $description }}
                    </p>

                    {{-- Button with hover effect --}}
                    <div class="group relative inline-flex">
                        <a target="_blank"
                           href="{{ $url }}"
                           class="bg-base-100 border-base-300 hover:bg-base-300 rounded-box text-base-content relative flex items-center gap-3 border px-6 py-3 font-medium shadow-sm transition-all duration-300">
                            {{ $buttonText }}
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="text-base-content h-5 w-5 transition-transform duration-300 group-hover:translate-x-1"
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

            {{-- Image side with floating effect --}}
            <div class="h-full overflow-hidden lg:relative">
                <div class="flex h-full items-center justify-center overflow-hidden p-8">
                    <div
                         class="hover:shadow-primary/10 rounded-box group relative z-10 aspect-video w-full max-w-lg overflow-hidden shadow-2xl transition-all duration-500 hover:scale-[1.02]">
                        {{-- Image with shine effect --}}
                        <div class="relative overflow-hidden">
                            <div
                                 class="group-hover:animate-shine absolute inset-0 -left-full z-20 h-full w-full skew-x-12 bg-gradient-to-r from-transparent via-white/10 to-transparent opacity-0 transition-all duration-1000">
                            </div>

                            <img src="{{ asset($imagePath) }}"
                                 alt="{{ $imageAlt }}"
                                 class="h-full w-full object-cover" />

                            {{-- Image overlay gradient --}}
                            <div
                                 class="from-primary/30 to-secondary/20 absolute inset-0 bg-gradient-to-tr via-transparent opacity-60">
                            </div>
                        </div>

                        {{-- Corner accent --}}
                        <div class="bg-primary absolute -right-2 -top-2 h-16 w-16 rounded-full opacity-40 blur-md">
                        </div>
                    </div>
                </div>

                {{-- Floating decoration elements --}}
                <div class="bg-accent/10 absolute -bottom-10 -right-10 h-40 w-40 rounded-full blur-2xl"></div>
                <div class="bg-primary/10 absolute left-10 top-10 h-20 w-20 rounded-full blur-xl"></div>
            </div>
        </div>
    </div>
</div>

{{-- Custom animations for this component --}}
<style>
    @keyframes shine {
        100% {
            left: 125%;
        }
    }

    .animate-shine {
        animation: shine 1.5s ease-in-out;
    }
</style>
