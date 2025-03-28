@props([
    'header' => null,
    'footer' => null,
    'teleportTo' => 'body',
    'height' => 75,
    'scrollable' => true,
    'closeEvent' => null,
    'closeEventCallback' => null,
    'openEvent' => null,
])

@php
    $maxHeight = $height - 5;
@endphp

<div x-data="{
    isOpen: false,
    startY: 0,
    closeEventCallback: {{ Js::from($closeEventCallback) }},
    currentY: 0,
    moving: false,
    init() {
        this.$nextTick(() => {
            Alpine.effect(() => {
                this.$refs.panel.style.transform = `translateY(${this.distance}px)`;
            });
        })
    },
    close() {
        this.isOpen = false;
        this.resetPosition();
    },
    open() {
        this.isOpen = true;
    },
    get distance() {
        return this.moving ? Math.max(0, this.currentY - this.startY) : 0;
    },
    resetPosition() {
        this.startY = 0;
        this.currentY = 0;
        if (this.$refs.panel) {
            this.$refs.panel.style.transform = `translateY(0)`;
        }
    },
    handleMovingStart(event) {
        this.moving = true;
        this.startY = this.currentY = event.touches[0].clientY;
    },
    handleWhileMoving(event) {
        this.currentY = event.touches[0].clientY;
    },
    handleMovingEnd() {
        if (this.distance > 100) {
            this.close();
        }
        this.moving = false;
    },
}"
     @if (filled($closeEvent))
    x-on:{{ $closeEvent }}.window="close()"
    @endif
    @if (filled($openEvent))
        x-on:{{ $openEvent }}.window="open()"
    @endif
    class="flex justify-center">
    @php
        $tag = $trigger->attributes->has('isButton') ? 'button' : 'div';
        $atts = $trigger->attributes->has('isButton') ? 'type="button"' : '';
    @endphp

    <div x-on:click="open()"
         {{ $atts }}
         {{ $trigger->attributes->except('isButton') }}>
        {{ $trigger }}
    </div>

    <!-- The Modal -->

    <template x-teleport="body">
        <div x-show="isOpen"
             x-trap="isOpen"
             style="display: none"
             x-on:keydown.escape.window.prevent.stop="close()"
             role="dialog"
             aria-modal="true"
             x-id="['modal-header']"
             :aria-labelledby="$id('modal-header')"
             class="fixed inset-x-0 inset-y-0 z-50 overflow-y-auto">
            <!-- Overlay -->
            <div x-show="isOpen"
                 x-transition.opacity
                 class="fixed inset-0 bg-opacity-60 backdrop-blur-lg"></div>
            <!-- Panel -->
            <div x-show="isOpen"
                 x-transition
                 x-ref="panel"
                 x-on:click="close()"
                 @class([
                     'relative flex min-h-screen items-center justify-center p-2 z-30',
                     'overflow-hidden' => $scrollable,
                     'overflow-auto' => !$scrollable,
                 ])
                 {{-- class="relative flex min-h-screen   items-center justify-center p-2 z-30" --}}>
                <div style="height: {{ $height }}vh"
                     class="w-full">
                    <div x-on:click.stop
                         x-trap.noscroll.inert="isOpen"
                         @class([
                             'relative max-w-2xl mx-auto border  overflow-y-auto rounded-xl bg-base-100 border-gray-400/20 text-base-content sm:px-2 md:px-4 lg:px-10',
                             'pb-4' => blank($footer),
                             'pb-2' => filled($footer),
                             'pt-4' => blank($header),
                             'pt-2' => filled($header),
                         ])>
                        {{-- close button --}}
                        <button type="button"
                                class="btn btn-square bg-base-300 fbold absolute right-2 top-2 font-bold"
                                x-on:click.stop="close()">
                            <svg class="text-base-content h-5 w-5"
                                 viewBox="0 0 20 20">
                                <path d="M10 10l5.09-5.09L10 10l5.09 5.09L10 10zm0 0L4.91 4.91 10 10l-5.09 5.09L10 10z"
                                      stroke="currentColor"
                                      fill="none"
                                      fill-rule="evenodd"
                                      stroke-linecap="round"
                                      stroke-linejoin="round">
                                </path>
                            </svg>
                        </button>

                        {{-- swapabble --}}
                        <div x-on:touchstart="handleMovingStart($event)"
                             x-on:touchmove="handleWhileMoving($event)"
                             x-on:touchend="handleMovingEnd()"
                             class="absolute left-0 right-0 top-[-10px] h-[50px] sm:hidden">
                            <div class="flex justify-center pt-[12px]">
                                <div class="h-[5px] w-[10%] rounded-full bg-gray-400"></div>
                            </div>
                        </div>
                        {{-- contents container --}}
                        @if (filled($header))
                            <div {{ $header->attributes->merge(['class' => 'modal-header']) }}
                                 {{-- behave as sticky --}}
                                 x-bind:id="$id('modal-header')">
                                {{ $header }}
                            </div>
                        @endif
                        <div class="h-full w-full overflow-y-auto"
                             style="max-height: {{ $scrollable ? $maxHeight . 'vh' : 'none' }}">
                            {{ $slot }}
                        </div>
                        @if (filled($footer))
                            <footer @class([
                                'z-30 hidden sm:flex  w-full select-none items-center px-2 pt-2 text-center dark:border-gray-700',
                                'relative',
                            ])>
                                {{ $footer }}
                            </footer>
                        @endif
                    </div>
                </div>
            </div>
    </template>
</div>
