<x-slot:title>
    Licenses
</x-slot:title>

<x-slot:sub-title>
    Need to see your licenses ? how about expired ones
</x-slot:sub-title>

<div class="relative mb-2 overflow-x-auto">
    <x-licenses.table :licenses="$licenses" />

    @if (count($licenses) === 0)
        <div class="bg-base-200/50 mt-8 flex flex-col items-center justify-center rounded-lg py-12">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="text-base-content/30 h-16 w-16"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-4 text-lg font-medium">No licences yet</h3>
            <p class="text-base-content/60 mt-1 text-sm">When you make a purchase, your licences keys will appear here.
            </p>
        </div>
    @endif
</div>
