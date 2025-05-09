@props([
    'src' => '',
    'srcStorage' => '',
    'srcPublic' => '',
    'srcLight' => '',
    'srcStorageLight' => '',
    'srcPublicLight' => '',
    'alt' => '',
    'caption' => '',
    'class' => '',
])

@php
    // Image Source (used for both light and dark mode if no light mode image passed to src light)
    $defaultImageSrc = '';
    if (!empty($src)) {
        $defaultImageSrc = $src;
    } elseif (!empty($srcStorage)) {
        $defaultImageSrc = asset('storage/' . ltrim($srcStorage, '/'));
    } elseif (!empty($srcPublic)) {
        $defaultImageSrc = asset(ltrim($srcPublic, '/'));
    }

    // Image source for light mode (if passed, else the default one will be used)
    $lightImageSrc = '';
    if (!empty($srcLight)) {
        $lightImageSrc = $srcLight;
    } elseif (!empty($srcStorageLight)) {
        $lightImageSrc = asset('storage/' . ltrim($srcStorageLight, '/'));
    } elseif (!empty($srcPublicLight)) {
        $lightImageSrc = asset(ltrim($srcPublicLight, '/'));
    } else {
        $lightImageSrc = $defaultImageSrc;
    }

    // Verify if a light mode image has passed
    $hasLightSpecificImage = !empty($lightImageSrc) && $lightImageSrc !== $defaultImageSrc;
@endphp

<div x-data="{
    zoomed: false,
    isDarkTheme: false,
    defaultSrc: '{{ $defaultImageSrc }}',
    lightSrc: '{{ $lightImageSrc }}',
    hasLightSpecificImage: {{ $hasLightSpecificImage ? 'true' : 'false' }},
    currentSrc: '',
    imgAlt: '{{ $alt }}',
    imgCaption: '{{ $caption }}',
    scrollY: 0,
    scrollbarWidth: 0,
    updateImageSrc() {
        // update the image source based on theme
        if (this.isDarkTheme && this.hasLightSpecificImage) {
            this.currentSrc = this.defaultSrc; // Use default (dark) image in dark mode
        } else {
            this.currentSrc = this.lightSrc || this.defaultSrc; // Use light image in light mode
        }
    },
    init() {
        // Check the current theme
        const currentTheme = document.documentElement.getAttribute('data-theme');
        this.isDarkTheme = currentTheme === 'black';

        // Initialize image source
        this.updateImageSrc();

        // Preload images sources
        if (this.defaultSrc) {
            const imgDefault = new Image();
            imgDefault.src = this.defaultSrc;
        }

        if (this.lightSrc && this.hasLightSpecificImage) {
            const imgLight = new Image();
            imgLight.src = this.lightSrc;
        }

        // Watch for theme changes in the DOM
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                if (mutation.attributeName === 'data-theme') {
                    const newTheme = document.documentElement.getAttribute('data-theme');
                    this.isDarkTheme = newTheme === 'black';
                    this.updateImageSrc();
                }
            });
        });

        observer.observe(document.documentElement, { attributes: true });

        // Listen for theme changes from local storage
        window.addEventListener('storage', (e) => {
            if (e.key === 'theme-index') {
                const themeIndex = parseInt(e.newValue);
                const themes = ['light', 'black'];
                this.isDarkTheme = themes[themeIndex] === 'black';
                this.updateImageSrc();
            }
        });
    },
    toggleZoom() {
        if (!this.zoomed) {
            this.scrollY = window.scrollY;
            this.scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
            document.body.style.paddingRight = `${this.scrollbarWidth}px`;
            document.body.style.position = 'fixed';
            document.body.style.top = `-${this.scrollY}px`;
            document.body.style.width = '100%';
            this.zoomed = true;
        } else {
            this.zoomed = false;
            setTimeout(() => {
                document.body.style.position = '';
                document.body.style.paddingRight = '';
                document.body.style.top = '';
                document.body.style.width = '';
                window.scrollTo(0, this.scrollY);
            }, 200);
        }
    }
}"
     class="{{ $class }}">

    <!-- Overlay  -->
    <div x-show="zoomed"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-40 bg-black/80 backdrop-blur-sm"
         x-on:click="toggleZoom--"
         style="display: none;"
         aria-hidden="true"></div>

    <!-- Image container -->
    <div
         class="bg-base-100/50 border-base-300 overflow-hidden border shadow-sm transition-all duration-200 hover:shadow-md">
        <div class="relative flex min-h-full w-full flex-col justify-start overflow-hidden">
            <img x-on:click="toggleZoom--"
                 :src="currentSrc"
                 :alt="imgAlt"
                 class="h-full flex-grow cursor-zoom-in object-cover transition-transform duration-200" />
        </div>
    </div>

    <!-- Zoomed container -->
    <div x-show="zoomed"
         x-on:keydown.escape.window="toggleZoom()"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="fixed inset-0 z-50 items-center justify-center p-4"
         role="dialog"
         aria-modal="true"
         aria-labelledby="image-modal-title"
         style="display: none;">
        <div class="min-w-sm lg:min-w-5xl rounded-box max-w-6xl overflow-hidden bg-transparent">
            <img x-on:click="toggleZoom"
                 :src="currentSrc"
                 :alt="imgAlt"
                 :id="'image-modal-title'"
                 class="rounded-box h-full w-full cursor-zoom-out object-cover transition-opacity duration-300" />
        </div>
    </div>
</div>
