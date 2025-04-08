<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-theme="black">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Converge' }}</title>
        <link rel="icon"
              type="image/x-icon"
              href="{{ asset('storage/images/favicon.png') }}">

        {{-- THEME --}}
        <script>
            const savedThemeIndex = localStorage.getItem('theme-index');
            const themes = ['light', 'black'];

            if (savedThemeIndex !== null) {
                document.documentElement.setAttribute('data-theme', themes[parseInt(savedThemeIndex)]);
            }
        </script>
        <style>
            pre,
            code {
                color: #e1e4e8;
                background-color: #24292e;
                /* Fond sombre */
                font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
                font-size: 0.95rem;
                line-height: 1.6;
            }

            code {
                border-radius: 3px;
                padding: 5px;
                display: block;
                overflow-x: auto;
            }

            /* Adaptation aux classes générées par highlight.php */
            .hljs-keyword {
                color: #f97583;
                /* Couleur des mots-clés */
                font-weight: bold;
            }

            .hljs-property {
                color: #34A853;
                /* Couleur des propriétés */
            }

            .hljs-attribute,
            .hljs-attr {
                font-style: italic;
                color: #ffcb6b;
                /* Couleur des attributs */
            }

            .hljs-type {
                color: #EA4334;
                /* Couleur des types */
            }

            .hljs-title,
            .hljs-name,
            .hljs-selector-tag {
                color: #9d3af6;
                /* Couleur des titres */
            }

            .hljs-string,
            .hljs-value,
            .hljs-literal,
            .hljs-number {
                color: #9ecbff;
                /* Couleur des chaînes, valeurs et nombres */
            }

            .hljs-variable {
                color: #ffab70;
                /* Couleur des variables */
            }

            .hljs-comment {
                color: #6a737d;
                /* Couleur des commentaires */
                font-style: italic;
            }

            .hljs-strong {
                font-weight: bold;
            }

            .hljs-emphasis {
                font-style: italic;
            }

            .hljs-addition {
                background-color: #00FF0022;
                /* Fond pour les ajouts */
                display: inline-block;
                min-width: 100%;
            }

            .hljs-deletion {
                background-color: #FF000011;
                /* Fond pour les suppressions */
                display: inline-block;
                min-width: 100%;
            }

            /* Optionnel : pour les lignes de code avec numéros */
            .hljs-gutter {
                display: inline-block;
                font-size: 0.9em;
                color: #555;
                padding: 0 1ch;
                margin-right: 1ch;
                user-select: none;
            }

            .hljs-gutter-addition {
                background-color: #34A853;
                /* Fond pour les ajouts dans la gouttière */
                color: #fff;
            }

            .hljs-gutter-deletion {
                background-color: #EA4334;
                /* Fond pour les suppressions dans la gouttière */
                color: #fff;
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @paddleJS
    </head>

    <body class="bg-base-200 scrollbar-hidden text-base-content min-h-screen !font-sans antialiased">

        {{ $slot }}

        {{-- FOOTER --}}
        <x-partials.footer />

        @livewireScriptConfig
    </body>

</html>
