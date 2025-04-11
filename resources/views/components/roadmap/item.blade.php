@props(['label' => 'label', 'status' => ''])
<li class="my-2 flex gap-2">
    @if ($status == 'done')
        <svg class="text-primary mt-0.5 inline-block size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                clip-rule="evenodd"></path>
        </svg>
    @else
        <svg class="text-base-content/20 mt-0.5 inline-block size-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                clip-rule="evenodd"></path>
        </svg>
    @endif

    <span class="text-base-content/50">{{ $label }}</span>
    @if (str($status)->is('wip'))
        <span class="bg-primary/20 text-primary rounded px-2">work in progress</span>
    @endif
</li>
