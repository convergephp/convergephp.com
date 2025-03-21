<!-- resources/views/components/pricing-card.blade.php -->
@props([
    'title' => 'Starter',
    'description' => 'Best option for personal use & for your next project.',
    'price' => '29',
    'period' => '/month',
    'features' => [],
    'buttonText' => 'Get started',
    'buttonUrl' => '#',
    'default' => false,
])

<div
     class="{{ $default ? 'border-base-300 bg-blue-700' : '' }} border-base-300 bg-base-100 text-base-content m-0 flex !min-h-full w-[450px] max-w-lg flex-col rounded-lg border p-6 text-center shadow xl:p-8">
    <h3 class="text-base-content mb-4 text-2xl font-semibold">{{ $title }}</h3>
    <p class="text-base-content font-light sm:text-lg">{{ $description }}</p>

    <div class="my-8 flex items-baseline justify-center">
        <span class="mr-2 text-5xl font-extrabold">${{ $price }}</span>
        <span class="text-base-content">{{ $period }}</span>
    </div>

    <!-- Features -->
    <ul role="list"
        class="mb-8 space-y-4 text-left">
        @foreach ($features as $feature)
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="{{ $default ? 'text-white' : 'text-primary' }} mr-2 h-5 w-5 flex-shrink-0"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd" />
                </svg>

                <span class="text-sm">{!! $feature !!}</span>
            </li>
        @endforeach
    </ul>

    <a href="{{ $buttonUrl }}"
       class="btn btn-accent mt-auto">
        {{ $buttonText }}
    </a>
</div>
