@php
    $converge = [
        ['label' => 'Organize content into independent modules', 'status' => 'done'],
        ['label' => 'Dynamic File-to-Section Mapping', 'status' => 'done'],
        ['label' => 'Custom Sorting', 'status' => 'done'],
        ['label' => 'Fully customizable sidebar', 'status' => 'done'],
        ['label' => 'Lazy-load sub-items for better performance', 'status' => 'done'],
        ['label' => 'Seamless search capabilities', 'status' => 'done'],
        ['label' => 'Render Hooks', 'status' => 'done'],
        ['label' => 'Theming Support', 'status' => 'done'],
        ['label' => 'Manual Cache Control', 'status' => 'done'],
        ['label' => 'Multi Layouts Support', 'status' => 'done'],
        ['label' => 'Blade Components Support within markdown', 'status' => 'done'],
    ];

    $webEditor = [
        ['label' => 'Interactif web editor', 'status' => 'comming'],
        ['label' => 'Recursive files systems', 'status' => 'comming'],
    ];
@endphp

<div class="mx-auto max-w-7xl px-3 py-6 md:px-4 md:py-10">
    <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
        <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-widest">
            Converge Roadmap
        </h2>
        <p class="text-base-content mb-5 font-light sm:text-xl">
            Discover what we're planning for Converge
        </p>
    </div>
    <ul
        class="timeline not-prose timeline-compact timeline-snap-icon timeline-vertical bg-base-200 rounded-box mx-auto mb-20 w-full md:max-w-3xl lg:py-8">
        <x-roadmap.card :items="$converge"
                        color="primary"
                        title="Converge v1.0.0"></x-roadmap.card>

        <x-roadmap.card :items="$webEditor"
                        title="Web editor"></x-roadmap.card>
    </ul>
</div>
