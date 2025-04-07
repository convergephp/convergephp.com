<div {{ $attributes }}
     x-data="{
         themes: ['light', 'black'],
         currentThemeIndex: localStorage.getItem('theme-index') ? parseInt(localStorage.getItem('theme-index')) : 0,
     
         init() {
             this.setTheme(this.currentThemeIndex);
     
             this.$watch('currentThemeIndex', val => {
                 this.setTheme(val);
                 localStorage.setItem('theme-index', val);
             })
         },
     
         setTheme(index) {
             document.documentElement.setAttribute('data-theme', this.themes[index]);
         },
     
         toggleTheme() {
             this.currentThemeIndex = (this.currentThemeIndex + 1) % this.themes.length;
         },
     
         get currentTheme() {
             return this.themes[this.currentThemeIndex];
         },
     
         get isDark() {
             return this.currentTheme === 'black';
         }
     }"
     class="relative ml-2 inline-flex items-center">
    <button type="button"
            x-on:click="toggleTheme()"
            :aria-label="isDark ? 'Light mode' : 'Dark mode'"
            class="btn btn-square btn-sm bg-base-300 btn-ghost border border-gray-400/20 px-2"
            :class="isDark ? 'text-gray-200' : 'text-yellow-500'"
            role="switch"
            :aria-checked="isDark">
        <svg x-show="!isDark"
             class="h-5 w-5"
             fill="currentColor"
             viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                  d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                  clip-rule="evenodd" />
        </svg>
        <x-iconsax-bul-moon x-show="isDark"
                            class="h-5 w-5" />
    </button>
</div>
