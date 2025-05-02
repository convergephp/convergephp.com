@php
    seo()->title('privacy policy')->description('what is our privacy policy.');
@endphp
<x-static-page.index  title="Privacy" :path="resource_path('markdown/privacy.md')"/>