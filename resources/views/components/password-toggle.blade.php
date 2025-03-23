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
     class="input-wrapper rounded-field flex transition duration-75">
    {{ $slot }}
    <div class="text-base-content/50 flex items-center gap-x-3 border-s border-none pe-3 ps-3">
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
