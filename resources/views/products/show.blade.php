<x-layout>
    <div class="z-20 px-2 py-10">
        <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
            <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-widest">
                {{ $product->name }}
            </h2>
            <p class="text-base-content mb-5 font-light sm:text-xl">
                {!! str($product->description)->markdown()->sanitizeHtml() !!}
            </p>
        </div>

        {{-- Tabs: Display thumbnails --}}
        <div class="mx-auto max-w-5xl">
            <div class="flex flex-col"
                 x-data="{ activeTab: '{{ $product->thumbnails->first()->name ?? 'default' }}' }">
                <div class="scrollbar-hidden mb-4 w-full overflow-x-auto">
                    <div class="flex gap-2">
                        @foreach ($product->thumbnails as $thumbnail)
                            <button class="btn btn-ghost btn-sm lg:btn-md mb-1"
                                    :class="activeTab === '{{ $thumbnail->name }}' ? 'bg-primary/5 border border-gray-400/20' :
                                        'text-base-content hover:bg-primary/5  hover:border hover:border-gray-400/20'"
                                    x-on:click="activeTab = '{{ $thumbnail->name }}'">
                                {{ $thumbnail->name }}
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Tabs Content --}}
                <div class="w-full">
                    @foreach ($product->thumbnails as $thumbnail)
                        <div x-show="activeTab === '{{ $thumbnail->name }}'"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform translate-y-4"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             class="bg-base-100 rounded-box mb-4 p-2 md:p-4">
                            <div class="overflow-hidden rounded-xl shadow-sm">
                                <div class="flex h-full flex-col md:flex-row">
                                    <!-- Image Section - Plus grande et prédominante -->
                                    <div class="relative h-64 w-full overflow-hidden md:h-[500px] md:w-2/3">
                                        @if ($thumbnail->getMedia('thumbnails')->isNotEmpty())
                                            <x-image :src="$thumbnail->getMedia('thumbnails')->first()->getUrl()"
                                                     :alt="$thumbnail->title"
                                                     loading="lazy"
                                                     fit="contain" />
                                        @else
                                            <div class="bg-base-200 flex h-full w-full items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="text-base-content/30 h-16 w-16"
                                                     fill="none"
                                                     viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="1"
                                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Title and description --}}
                                    <div class="flex w-full flex-col p-6 md:w-1/3">
                                        <div class="mb-4">
                                            <h2 class="text-2xl font-bold leading-tight">
                                                {{ $thumbnail->title }}
                                            </h2>
                                            <div class="bg-primary my-3 h-1 w-16"></div>
                                        </div>

                                        <div
                                             class="content prose prose-sm max-h-60 flex-grow overflow-auto md:max-h-72">
                                            {!! Str::markdown($thumbnail->description) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @auth
        @if ($licenses->isNotEmpty())
            <div class="mx-auto max-w-6xl px-4 py-8 lg:px-6 lg:py-20">
                <h2 class="text-primary text-center text-2xl font-bold">Licenses associated with this product:</h2>
                <h4 class="text-md text-center">use the key above during installation process, please this secret key don't
                    share it with any one </h4>
                <div class="relative mt-8 overflow-x-auto">
                    <x-licenses.table :licenses="$licenses" />
                </div>
            </div>
        @endif
    @endauth

    @if (!Auth::check() || $licenses->isEmpty())
        <div class="mx-auto max-w-7xl px-4 py-8 lg:px-6 lg:py-20">
            {{-- Title --}}
            <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-tight">
                    Flexible packages for Every Developer
                </h2>
                <p class="text-base-content mb-5 font-light sm:text-xl">
                    Choose the perfect package for your project needs, from solo development to enterprise solutions
                </p>
            </div>

            <div x-data="{
                init() {
                    const selectedPlan = sessionStorage.getItem('selectedPlan');
                    this.$nextTick(() => {
                        if (selectedPlan) {
                            setTimeout(() => {
                                const button = document.querySelector(`#${selectedPlan}`);
                                if (button) {
                                    button.click();
                                }
                                sessionStorage.removeItem('selectedPlan');
                            }, 300);
                        }
                    });
                }
            }"
                 class="flex flex-wrap justify-center gap-4">
                @foreach ($product->prices as $price)
                    <x-pricing-card :price="$price" />
                @endforeach
            </div>
        </div>
    @endif
</x-layout>
