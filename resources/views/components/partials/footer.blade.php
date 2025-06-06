<div class="mx-auto max-w-7xl">

    <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
        <nav>
            <x-app-logo-2 class="h-6" />
        </nav>
        <nav>
            <a href="{{ route('converge-docs') }}"
               class="link link-hover">Docs</a>
        </nav>
        <nav class="">
            <h6 class="footer-title">ToolKit</h6>
            <a href="{{ route('products.show', ['product' => 'components']) }}"
               class="link link-hover">components</a>
            <a href="{{ route('products.show', ['product' => 'layouts-themes']) }}"
               class="link link-hover">Layouts</a>
        </nav>
        <nav>
            <h6 class="footer-title">Solutions</h6>
            <a href="{{ route('solutions.documentation') }}"
               wire:navigate.hover
               class="link link-hover">Documentation</a>
            <a href="{{ route('solutions.blogging') }}"
               wire:navigate.hover
               class="link link-hover">Blogging</a>
        </nav>
        <nav>
            <h6 class="footer-title">Policies</h6>
            <a href="{{ route('privacy') }}"
               wire:navigate.hover
               class="link link-hover">Privacy Policy</a>
            <a href="{{ route('terms') }}"
               wire:navigate.hover
               class="link link-hover">Terms of Use</a>
            <a href="{{ route('refund') }}"
               wire:navigate.hover
               class="link link-hover">Refund Policy</a>
        </nav>
    </footer>

    <footer class="footer bg-base-200 text-base-content border-base-300 border-t px-10 py-4">
        <aside class="grid-flow-col items-center">
            <div class="text-hurricane/50 text-sm font-medium">
                © {{ date('Y') }} Converge. All rights reserved.
            </div>
        </aside>

        <nav class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a target="_blank"
                   href="https://github.com/convergephp/converge"
                   class="bg-merino hover:text-primary grid h-[2.6rem] w-[2.6rem] place-items-center rounded-xl transition duration-300 motion-reduce:transition-none">
                    <svg class="w-[1.6rem]"
                         fill="currentColor"
                         viewBox="0 0 24 24"
                         aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>
</div>
