<div class="relative w-full overflow-hidden py-10 md:py-14 lg:py-24">
    <!-- Subtle background animation -->
    <div class="pointer-events-none absolute left-0 top-0 h-full w-full overflow-hidden opacity-10">
        <div class="bg-primary animate-float-subtle absolute right-1/4 top-1/3 h-96 w-96 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6">
        <!-- Section Titles -->
        {{-- ****************** Section Titles ********************** --}}
        <div class="mb-20 text-center"
             data-aos="fade-up"
             data-aos-duration="1000">
            <div class="mb-4">
                <span
                      class="badge badge-primary badge-outline px-4 py-3 text-xs font-medium uppercase tracking-wider">Features</span>
            </div>
            <h2 class="mb-6 text-4xl font-bold leading-tight sm:text-5xl">
                <span class="">
                    Discover the Power of Converge
                </span>
            </h2>
            <p class="text-base-content/60 mx-auto max-w-2xl text-lg">
                Crafted for performance, scalability, and ease of use—experience a template
                built to meet all your project needs.
            </p>
        </div>

        <x-feature-card.image url="https://convergephp.com/docs/components/getting-started/installation"
                              title="Blade components"
                              description="A collection of handcrafted blade components designed for maximum flexibility. Each component is optimized for performance and maintainability while providing a beautiful user experience."
                              buttonText="Explore Components"
                              imagePath="images/exemple-4.png"
                              imageAlt="Blade Components" />

        {{-- ****************** Core features grid ********************** --}}
        <div class="mb-20 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
            {{-- Feature 1 - Customizable Themes --}}
            <x-feature-card title="Customizable Themes"
                            description="Transform your application's appearance with powerful theming options that adapt to your brand identity with minimal effort."
                            color-scheme="primary"
                            :tags="['Light & Dark Modes', 'Custom Colors', 'Brand Integration']"
                            data-aos="zoom-in"
                            data-aos-duration="700">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-primary-content h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            {{-- Feature 2 - Comprehensive Documentation --}}
            <x-feature-card title="Comprehensive Documentation"
                            description="Access detailed guides and resources designed to help developers of all skill levels implement and extend the framework effectively."
                            color-scheme="secondary"
                            :tags="['Interactive Examples', 'Code Snippets', 'API References']"
                            data-aos="zoom-in"
                            data-aos-duration="700"
                            data-aos-delay="100">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-secondary-content h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>

            {{-- Feature 3 - Multiple Layouts --}}
            <x-feature-card title="Multiple Layouts"
                            description="Select from a variety of pre-built layout patterns to quickly structure your content for optimal user experience and engagement."
                            color-scheme="accent"
                            :tags="['Responsive Grids', 'Component Patterns', 'Flexible Templates']"
                            data-aos="zoom-in"
                            data-aos-duration="700"
                            data-aos-delay="200">
                <x-slot:icon>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="text-accent-content h-8 w-8"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </x-slot:icon>
            </x-feature-card>
        </div>

        {{-- ********************* Additional Features Section ************************** --}}
        <section class="relative py-16">
            <div class="pointer-events-none absolute left-0 top-0 h-full w-full overflow-hidden opacity-10">
                <div class="bg-primary animate-float-subtle absolute right-1/4 top-1/3 h-96 w-96 rounded-full blur-3xl">
                </div>
            </div>

            <div class="container mx-auto px-4">
                <div class="mb-12 text-center">
                    <h2 class="mb-3 text-3xl font-bold">Outstanding Features</h2>
                    <p class="text-base-content/70 mx-auto max-w-2xl">Discover the key advantages that make our
                        solution the perfect choice for your projects.</p>
                </div>

                <div class="mb-20 space-y-8">
                    {{-- Feature row 1 --}}
                    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2"
                         data-aos="fade-up"
                         data-aos-duration="800">

                        {{-- Responsive Design feature --}}
                        <x-feature-card.small title="Responsive Design"
                                              description="Optimal user experience across all devices, from desktop to smartphone. Every element perfectly adapts to the screen size, ensuring your content looks great everywhere."
                                              color-scheme="primary">
                            <x-slot:icon>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="text-primary h-8 w-8"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </x-slot:icon>
                        </x-feature-card.small>

                        {{-- Performance Optimized feature --}}
                        <x-feature-card.small title="Performance Optimized"
                                              description="Built with cutting-edge technologies to ensure exceptional loading speeds and smooth experience for all users, improving engagement and conversion rates."
                                              color-scheme="secondary">
                            <x-slot:icon>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="text-secondary h-8 w-8"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </x-slot:icon>
                        </x-feature-card.small>
                    </div>

                    {{-- Feature row 2 --}}
                    <div class="grid grid-cols-1 gap-8 lg:grid-cols-2"
                         data-aos="fade-up"
                         data-aos-duration="800"
                         data-aos-delay="100">
                        {{-- SEO Friendly feature --}}
                        <x-feature-card.small title="SEO Friendly"
                                              description="Semantic structure and advanced markup allowing your content to stand out in search results and attract qualified traffic to grow your audience consistently."
                                              color-scheme="accent">
                            <x-slot:icon>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="text-accent h-8 w-8"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </x-slot:icon>
                        </x-feature-card.small>

                        {{-- Integrated Search Engine feature --}}
                        <x-feature-card.small title="Integrated Search Engine"
                                              description="Powerful search functionality built directly into Converge, allowing users to quickly find relevant content across your entire platform with intelligent filtering options."
                                              color-scheme="info">
                            <x-slot:icon>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="text-info h-8 w-8"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                                </svg>
                            </x-slot:icon>
                        </x-feature-card.small>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <div class="bg-base-100 rounded-2xl py-12 text-center"
             data-aos="fade-up"
             data-aos-duration="1000">
            <h3 class="mb-6 text-3xl font-bold">Ready to Transform Your Documentation?</h3>
            <p class="text-base-content/60 mx-auto mb-8 max-w-2xl text-lg">
                Join developers who have already discovered the power of Converge
                and take your documentations to the next level.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/docs"
                   target="_blank"
                   class="border-primary/30 bg-primary/10 hover:bg-primary/20 text-primary group inline-flex items-center justify-center rounded-md border px-6 py-3 font-medium transition-all">
                    <svg class="mr-2 h-5 w-5"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2">
                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                              stroke-linecap="round"
                              stroke-linejoin="round" />
                    </svg>
                    <span>View Documentation</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes float-subtle {

        0%,
        100% {
            transform: translateY(0) translateX(0);
            opacity: 0.1;
        }

        50% {
            transform: translateY(-10px) translateX(10px);
            opacity: 0.7;
        }
    }

    .animate-float-subtle {
        animation: float-subtle 4s ease-in-out infinite;
    }
</style>
