@php
    seo()->title('terms of use')->description('our terms of use');
@endphp

<x-static-page.index title="Terms Of Use" :path="resource_path('markdown/terms.md')" />
