<!-- grid-with-animated-line.blade.php -->
@props([
    'gridSize' => '40',
    'lineColor' => 'currentColor',
    'lineOpacity' => '0.1',
    'backgroundColor' => 'transparent',
    'highlightedRow' => '5',
    'highlightedCol' => '5',
    'animationDirection' => 'ltr',
    'animationDuration' => '3',
    'highlightColorStart' => '#2EB9DF',
    'highlightColorEnd' => '#9E00FF',
    'strokeWidth' => '1',
    'class' => '',
])

<svg xmlns="http://www.w3.org/2000/svg"
     {{ $attributes->merge(['class' => $class]) }}>
    <defs>
        <!-- Motif de grille -->
        <pattern id="grid-pattern"
                 width="{{ $gridSize }}"
                 height="{{ $gridSize }}"
                 patternUnits="userSpaceOnUse"
                 x="50%"
                 y="100%"
                 patternTransform="translate(0 -1)">
            <path d="M0 {{ $gridSize }}V.5H{{ $gridSize }}"
                  fill="none"
                  stroke="{{ $lineColor }}"
                  stroke-opacity="{{ $lineOpacity }}"></path>
        </pattern>

        <!-- Dégradé pour la ligne animée -->
        <linearGradient id="highlight-gradient-{{ $animationDirection }}"
                        x1="{{ $animationDirection === 'ltr' ? '0%' : '100%' }}"
                        y1="0%"
                        x2="{{ $animationDirection === 'ltr' ? '100%' : '0%' }}"
                        y2="0%">
            <stop offset="0%"
                  stop-color="{{ $highlightColorStart }}"
                  stop-opacity="0" />
            <stop offset="0.3"
                  stop-color="{{ $highlightColorStart }}" />
            <stop offset="0.7"
                  stop-color="{{ $highlightColorEnd }}" />
            <stop offset="1"
                  stop-color="{{ $highlightColorEnd }}"
                  stop-opacity="0" />
            <animate attributeName="x1"
                     values="{{ $animationDirection === 'ltr' ? '-100%;100%' : '100%;-100%' }}"
                     dur="{{ $animationDuration }}s"
                     repeatCount="indefinite" />
            <animate attributeName="x2"
                     values="{{ $animationDirection === 'ltr' ? '0%;200%' : '200%;0%' }}"
                     dur="{{ $animationDuration }}s"
                     repeatCount="indefinite" />
        </linearGradient>
    </defs>

    <!-- Arrière-plan avec grille -->
    <rect width="100%"
          height="100%"
          fill="{{ $backgroundColor }}"></rect>

    <rect width="100%"
          height="100%"
          fill="url(#grid-pattern)"></rect>

    <!-- Ligne horizontale animée (si highlightedRow est défini) -->
    @if ($highlightedRow !== null)
        <line x1="0"
              y1="{{ $highlightedRow * $gridSize }}"
              x2="100%"
              y2="{{ $highlightedRow * $gridSize }}"
              stroke="url(#highlight-gradient-{{ $animationDirection }})"
              stroke-width="{{ $strokeWidth }}">
            <animate attributeName="stroke-dasharray"
                     from="{{ $animationDirection === 'ltr' ? '0,1000' : '1000,0' }}"
                     to="{{ $animationDirection === 'ltr' ? '1000,0' : '0,1000' }}"
                     dur="{{ $animationDuration }}s"
                     repeatCount="indefinite" />
        </line>
    @endif

    <!-- Ligne verticale animée (si highlightedCol est défini) -->
    @if ($highlightedCol !== null)
        <line x1="{{ $highlightedCol * $gridSize }}"
              y1="0"
              x2="{{ $highlightedCol * $gridSize }}"
              y2="100%"
              stroke="url(#highlight-gradient-{{ $animationDirection }})"
              stroke-width="{{ $strokeWidth }}">
            <animate attributeName="stroke-dasharray"
                     from="{{ $animationDirection === 'ltr' ? '0,1000' : '1000,0' }}"
                     to="{{ $animationDirection === 'ltr' ? '1000,0' : '0,1000' }}"
                     dur="{{ $animationDuration }}s"
                     repeatCount="indefinite" />
        </line>
    @endif
</svg>
