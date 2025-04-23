@props(['items' => [], 'title' => null, 'color' => null])
<ul
    class="timeline not-prose timeline-compact timeline-snap-icon timeline-vertical bg-base-200 rounded-box mx-auto w-full lg:py-3">
    <li class="lg:gap-x-6">
        <div class="timeline-middle"><svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20"
                 fill="currentColor"
                 class="{{ $color ? 'text-' . $color : 'text-gray-400/20' }} h-5 w-5">
                <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                      clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="timeline-box timeline-end mb-4 w-full p-4 lg:mb-10 lg:p-10">
            <h2 class="mb-6 text-lg font-black">{{ $title ?? '' }}</h2>
            <ol>
                @foreach ($items as $item)
                    <x-roadmap.item :status="$item['status']"
                                    :label="$item['label']"></x-roadmap.item>
                @endforeach
            </ol>
        </div>
        <hr class="{{ $color ? 'bg-' . $color : 'bg-gray-400/20' }}">
    </li>
</ul>
