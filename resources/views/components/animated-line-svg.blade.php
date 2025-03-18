@props([
    'width' => '236',
    'height' => '68',
    'direction' => 'ltr',
    'duration' => '3',
    'strokeWidth' => '2',
    'colorStart' => '#2EB9DF',
    'colorEnd' => '#9E00FF',
    'class' => '',
])

<svg width="{{ $width }}"
     height="{{ $height }}"
     viewBox="0 0 236 68"
     fill="none"
     xmlns="http://www.w3.org/2000/svg"
     {{ $attributes->merge(['class' => $class]) }}>
    <path d="M0.5 0.5H89C90.6569 0.5 92 1.84315 92 3.5V29C92 30.6569 93.3431 32 95 32H148.5C150.157 32 151.5 33.3431 151.5 35V64C151.5 65.6569 152.843 67 154.5 67H235.5"
          stroke="url(#paint0_linear_{{ $direction }})"
          stroke-width="{{ $strokeWidth }}">
        <animate attributeName="stroke-dasharray"
                 from="{{ $direction === 'ltr' ? '0,1000' : '1000,0' }}"
                 to="{{ $direction === 'ltr' ? '1000,0' : '0,1000' }}"
                 dur="{{ $duration }}s"
                 repeatCount="indefinite" />
    </path>
    <defs>
        <linearGradient id="paint0_linear_{{ $direction }}"
                        gradientUnits="userSpaceOnUse"
                        x1="{{ $direction === 'ltr' ? '-100' : '400' }}"
                        y1="78"
                        x2="{{ $direction === 'ltr' ? '400' : '-100' }}"
                        y2="78">
            <stop stop-color="{{ $colorStart }}"
                  stop-opacity="0" />
            <stop offset="0.3"
                  stop-color="{{ $colorStart }}" />
            <stop offset="0.7"
                  stop-color="{{ $colorEnd }}" />
            <stop offset="1"
                  stop-color="{{ $colorEnd }}"
                  stop-opacity="0" />
            <animate attributeName="x1"
                     values="{{ $direction === 'ltr' ? '-100;400' : '400;-100' }}"
                     dur="{{ $duration }}s"
                     repeatCount="indefinite" />
            <animate attributeName="x2"
                     values="{{ $direction === 'ltr' ? '0;500' : '500;0' }}"
                     dur="{{ $duration }}s"
                     repeatCount="indefinite" />
        </linearGradient>
    </defs>
</svg>
