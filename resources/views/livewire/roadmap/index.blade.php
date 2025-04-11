@php
    $convergeV1x = [
        ['label' => 'Organize documentation into fully separate modules', 'status' => 'done'],
        ['label' => 'Documentation mirrors filesystem structure', 'status' => 'done'],
        ['label' => 'Effortless versioning system for your software', 'status' => 'done'],
        ['label' => 'Separate each version into clusters for better content organization', 'status' => 'done'],
        ['label' => 'Support for multiple themes', 'status' => 'done'],
        ['label' => 'Support for multiple layouts', 'status' => 'done'],
        ['label' => 'Built-in search engine written in raw PHP ', 'status' => 'done'],
        ['label' => 'Fully customizable sidebar', 'status' => 'done'],
        ['label' => 'Dynamic Table of Contents (ToC) generation', 'status' => 'done'],
        ['label' => 'Use Blade components directly within Markdown', 'status' => 'wip'],
        ['label' => 'View interceptors for customizing rendering', 'status' => 'wip'],
        ['label' => 'adding sidebar items dynamically with sorting mechanism', 'status' => 'wip'],
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
        <x-roadmap.card :items="$convergeV1x"
                        color="primary"
                        title="Converge v1.x.x"></x-roadmap.card>

        <x-roadmap.card :items="$webEditor"
                        title="Web editor"></x-roadmap.card>
    </ul>
</div>
