<div x-data="{ open: true }"
     x-show="open"
     {{ $attributes }}
     id="bottom-top"
     tabindex="-1"
     class="border-base-300 bg-base-100 sticky start-0 top-0 z-50 flex w-full justify-between border-b p-4">
    <div class="mx-auto flex items-center">
        <p class="text-base-content flex items-center gap-4 text-sm font-normal">
            <span class="bg-base-100">
                <svg xmlns="http://www.w3.org/2000/svg"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.5"
                     stroke="currentColor"
                     class="text-warning size-6">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>

            </span>
            <span>Converge is being built — stay tuned!</span>
        </p>
    </div>
    <div class="flex items-center">
        <button x-on:click="open = false"
                type="button"
                class="btn btn-square btn-ghost">
            <svg class="h-3 w-3"
                 aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 14 14">
                <path stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close banner</span>
        </button>
    </div>
</div>
