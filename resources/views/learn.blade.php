<x-layout.base>

    {{-- Dropdown component --}}
    {{-- <div x-data="{
        open: false,
        toggle() {
            if (this.open) {
                return this.close()
            }

            this.open = true
        },
        close(focusAfter) {
            this.open = false
            focusAfter && focusAfter.focus()
        }
    }"
         x-on:keydown.escape.prevent.stop="close($refs.button)"
         x-on:focusin.window="!$refs.panel.contains($event.target) && close($refs.button)"
         class="w-xs relative mx-auto flex h-full justify-center">

        <button x-ref="button"
                x-on:click="toggle()"
                class="btn btn-block btn-primary w-xs mx-auto">Click me</button>

        <div x-show="open"
             x-ref="panel"
             x-transition
             x-on:click.outside="close($refs.button)"
             class="list w-xs bg-base-300 absolute top-12 rounded-lg border border-gray-400/20 p-4">
            <a href="#"
               class="list-row">Link 1</a>

            <a href="#"
               class="list-row">Link 2</a>

            <a href="#"
               class="list-row">Link 3</a>

            <a href="#"
               class="list-row">Link 4</a>
        </div>
    </div> --}}

    {{-- Modal component --}}
    <div x-data="{
        open: false,
        close() {
            this.open = false
        }
    }"
         x-on:keydown.escape.prevent.stop="open = false"
         class="relative w-full">

        {{-- trigger --}}
        <button x-on:click="open = true"
                class="btn btn-btn-wide btn-primary">Modal</button>

        {{-- modal --}}
        <div x-show="open"
             style="display: none"
             role="dialog"
             aria-modal="true"
             aria-labelledby="modal-title"
             class="insert-0 fixed">
            <div class="insert-0 fixed top-0 h-full w-full bg-black opacity-50"></div>

            {{-- panel --}}
            <div x-on:click="close()"
                 class="relative flex min-h-screen w-full items-center justify-center p-4">
                <div x-on:click.stop
                     style="max-height: 80vh"
                     class="bg-base-200 min-h-[40vh] w-full max-w-2xl rounded-lg border border-gray-400 p-4">
                    <h1 id="modal-title">Confirm modal</h1>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dicta totam alias officia sit, quidem
                    cumque illo amet voluptatibus fugit praesentium? Praesentium a enim quia delectus doloremque veniam
                    incidunt ut.
                </div>
            </div>
        </div>

    </div>
</x-layout.base>
