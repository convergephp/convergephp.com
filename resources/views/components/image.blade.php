@props(['image', 'alt' => '', 'caption' => '', 'class' => ''])
<div x-data="{
    zoomed: false,
    imgSrc: '{{ $image }}',
    imgAlt: '{{ $alt }}',
    imgCaption: '{{ $caption }}',
    scrollPosition: 0,

    toggleZoom() {
        if (!this.zoomed) {
            this.scrollPosition = window.scrollY;

            const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollPosition}px`;
            document.body.style.width = '100%';
            document.body.style.paddingRight = `${scrollBarWidth}px`;

            this.zoomed = true;
        } else {
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            document.body.style.paddingRight = '';

            window.scrollTo(0, this.scrollPosition);

            this.zoomed = false;
        }
    }
}"
     class="relative h-full w-full">
    {{-- Overlay --}}
    <div x-show="zoomed"
         x-trap.inert="zoomed"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[9999] bg-black/50 backdrop-blur-sm"
         x-on:click="toggleZoom"></div>

    {{-- Original image --}}
    <img x-on:click="toggleZoom"
         class="h-full w-full"
         src="{{ $image }}"
         alt="{{ $alt }}"
         style="object-position: center;" />

    {{-- Zoomed image --}}
    <div x-show="zoomed"
         x-on:keydown.escape.window="toggleZoom()"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-90"
         class="fixed inset-0 z-[99999] flex items-center justify-center p-4"
         style="display: none;">
        <div x-on:click.stop
             class="rounded-box relative max-h-[90vh] w-full overflow-hidden rounded-xl sm:w-[90%] md:w-[80%] lg:w-[70%] xl:w-[60%]">
            <div class="rounded-box flex h-full w-full items-center justify-center">
                <img x-on:click="toggleZoom"
                     src="{{ $image }}"
                     alt="{{ $alt }}"
                     class="max-h-[85vh] w-full cursor-zoom-out rounded-lg object-contain" />
            </div>
        </div>
    </div>
</div>
