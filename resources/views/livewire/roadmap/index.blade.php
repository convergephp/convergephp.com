@php
    $convergeV1x = [
        ['label' => 'Organize documentation into fully separate modules', 'status' => 'done'],
        ['label' => 'Documentation mirrors filesystem structure', 'status' => 'done'],
        ['label' => 'Effortless versioning system for your software', 'status' => 'done'],
        ['label' => 'Separate each version into clusters for better content organization', 'status' => 'done'],
        ['label' => 'Support for multiple themes', 'status' => 'done'],
        ['label' => 'Support for multiple layouts', 'status' => 'done'],
        ['label' => 'Built-in search engine written in raw PHP', 'status' => 'done'],
        ['label' => 'Fully customizable sidebar', 'status' => 'done'],
        ['label' => 'Dynamic Table of Contents (ToC) generation', 'status' => 'done'],
        ['label' => 'Use Blade components directly within Markdown', 'status' => 'done'],
        ['label' => 'View interceptors for customizing rendering', 'status' => 'done'],
        ['label' => 'Built-in SEO features for better ranking', 'status' => 'done'],
    ];

    $bloggingV1x = [
        ['label' => 'Organize blogging content into fully separate modules', 'status' => 'coming'],
        ['label' => 'Support for Markdown (flat files) and database for content storage', 'status' => 'coming'],
        ['label' => 'Support for multiple themes', 'status' => 'coming'],
        ['label' => 'Support for multiple layouts', 'status' => 'coming'],
        ['label' => 'Built-in search engine written in raw PHP (for flat-file storage)', 'status' => 'coming'],
        ['label' => 'Dynamic Table of Contents (ToC) generation', 'status' => 'coming'],
        ['label' => 'Use Blade components directly within Markdown', 'status' => 'coming'],
        ['label' => 'Built-in SEO features for better ranking', 'status' => 'coming'],
        ['label' => 'Additional community-requested features', 'status' => 'coming'],
    ];


    $convergeV2x = [
        ['label' => 'Single Page Application (SPA) mode', 'status' => 'coming'],
        ['label' => 'RBAC support for protecting private sections with roles (for paid learning platforms)', 'status' => 'coming'],
        ['label' => 'Lazy-load sub-items for better performance', 'status' => 'coming'],
        ['label' => 'Add sidebar items dynamically with a sorting mechanism', 'status' => 'coming'],
        ['label' => 'API Reference integration', 'status' => 'coming'],
        ['label' => 'Feedback and Ratings system', 'status' => 'coming'],
        ['label' => 'i18n and RTL (Right-to-Left) language support', 'status' => 'coming'],
        ['label' => 'Additional community-requested features', 'status' => 'coming'],
    ];

    $webEditor = [
        ['label' => 'Interactive web editor', 'status' => 'coming'],
        ['label' => 'Uses our Blade components under the hood', 'status' => 'coming'],
    ];

    $searchEnginesIntegrations = [
        ['label' => 'Algolia integration', 'status' => 'coming'],
        ['label' => 'Meilisearch integration', 'status' => 'coming'],
        ['label' => 'Typesense integration', 'status' => 'coming'],
    ];

    $themesAndLayouts = [
        ['label' => '30+ reusable Blade components', 'status' => 'coming'],
        ['label' => 'Pre-built layout templates', 'status' => 'coming'],
    ];
@endphp

<div class="mx-auto md:max-w-3xl px-3 py-6 md:px-4 md:py-10">
    <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
        <h2 class="text-base-content mb-4 text-4xl font-extrabold tracking-widest">
            Converge Project Roadmap
        </h2>
        <p class="text-base-content mb-5 font-light sm:text-xl">
            Discover what we're planning for Converge
        </p>
    </div>

    <h3 class="font-bold text-primary"># The Documentation Framework</h3>

    <x-roadmap.card 
                title="Converge v1.x" 
                :items="$convergeV1x" 
                color="primary">
    </x-roadmap.card>
    
    <x-roadmap.card 
                title="Converge v2.x" 
                :items="$convergeV2x">
    </x-roadmap.card>
    
    <h3 class="font-bold text-primary"># Products & Plugins</h3>

    <x-roadmap.card 
                title="Web editor" 
                :items="$webEditor">
    </x-roadmap.card>

    <x-roadmap.card 
                title="search engine integrations" 
                :items="$searchEnginesIntegrations">
    </x-roadmap.card>
  
    <x-roadmap.card 
                title="themes and layouts" 
                :items="$themesAndLayouts">
    </x-roadmap.card>

    <h3 class="font-bold text-primary"># The Blogging Framework</h3>

    <x-roadmap.card 
                title="Converge blogging v1.x" 
                :items="$bloggingV1x">
    </x-roadmap.card>

</div>
