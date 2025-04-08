<div class="bg-base-300 overflow-hidden">
    <div class="code-snippet max-h-[520] w-full overflow-hidden bg-red-500">
        <div class="code-snippet-header sticky top-0 z-10">
            <div class="code-snippet-language">{{ $language }}</div>
            <button x-data="{ copied: false }"
                    x-on:click="
                    navigator.clipboard.writeText(@js($code));
                    copied = true;
                    setTimeout(() => copied = false, 2000)
                "
                    class="btn btn-xs btn-ghost">
                <span x-show="!copied">Copier</span>
                <span x-show="copied">Copié!</span>
            </button>
        </div>
        <div class="code-snippet-content max-h-[530px] overflow-auto">
            <div class="line-numbers">
                @for ($i = 1; $i <= $lines; $i++)
                    <div class="line-number">{{ $i }}</div>
                @endfor
            </div>
            <pre><code>{!! $formattedCode !!}</code></pre>
        </div>
    </div>

    <style>
        .code-snippet {
            background-color: var(--color-base-300);
            border-radius: 6px;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
        }

        pre code {
            background-color: transparent;
            width: 100%;
        }

        pre {
            background-color: transparent;
            width: 100%;
        }

        .code-snippet-header {
            background-color: var(--color-base-100);
            padding: 8px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--color-primary);
        }

        .code-snippet-language {
            color: var(--color-primary);
            font-size: 12px;
            text-transform: uppercase;
        }

        .code-snippet-content {
            display: flex;
            padding: 12px 0;
            overflow: auto;
            height: 100%;
        }

        .line-numbers {
            display: flex;
            flex-direction: column;
            padding: 0 12px;
            text-align: right;
            border-right: 1px solid var(--color-base-300);
            user-select: none;
        }

        .line-number {
            color: #6e6e6e;
            font-size: 14px;
            line-height: 1.6;
            min-width: 20px;
        }

        .code-snippet pre {
            margin: 0;
            padding: 0 15px;
        }

        .code-snippet code {
            color: var(--color-base-content);
            font-size: 14px;
            line-height: 1.6;
            font-family: inherit;
        }

        /* Coloration syntaxique */
        .keyword {
            color: var(--color-primary);
        }

        .comment {
            color: var(--color-success);
        }

        .string {
            color: #ce9178;
        }

        .method {
            color: var(--color-warning);
        }

        .namespace {
            color: var(--color-secondary);
        }

        .variable {
            color: #9cdcfe;
        }

        /* Style pour les méthodes chaînées */
        .method-chain {
            color: #42a5f5;
            font-weight: 500;
        }

        /* Style pour les flèches de chaînage */
        .chain-arrow {
            color: #7e57c2;
            font-weight: bold;
        }

        /* Style pour les arguments de fonctions */
        .function-arg {
            color: #66bb6a;
            font-style: italic;
        }

        /* Style pour les parenthèses et le contenu des fonctions */
        .function-parens {
            color: #ff7043;
        }

        /* Style pour les valeurs littérales */
        .string-literal {
            color: #ec407a;
        }

        /* Style pour les variables et paramètres */
        .variable-param {
            color: #ffa726;
        }
    </style>
</div>
