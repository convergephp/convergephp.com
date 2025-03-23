<div x-data="{
    isShown: false,
    init() {
        $nextTick(() => {
            this.inputElement = this.$el.querySelector('input[type=password]');
        })
    },
    toggle() {
        this.isShown = !this.isShown;
        if (this.inputElement) {
            this.inputElement.type = this.isShown ? 'text' : 'password';
        }
    }
}"
     class="input-wrapper bg-base-300/10 focus-within:ring-primary/50 rounded-field border-base-300 ring-base-300/50 flex border shadow-sm ring-1 transition duration-75 focus-within:ring-1">
    {{ $slot }}
    <div class="text-base-content/50 border-base-300 flex items-center gap-x-3 border-s pe-3 ps-3">
        <button type="button"
                x-show="!isShown"
                style="display: none"
                x-on:click.stop="toggle()"
                class="ml-2">
            <x-icon.eye />
        </button>
        <button type="button"
                x-show="isShown"
                style="display: none"
                x-on:click.stop="toggle()"
                class="ml-2">
            <x-icon.eye-slash />
        </button>
    </div>
</div>
