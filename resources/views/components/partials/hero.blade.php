<?php
$filesArray = [
    "Getting started.md" => '',
    "test-2.md" => "",
    'navlist' => [
        'features.md' => '',
        'footer.md' => '',
    ],
    'partials' => [
        'features.md' => '',
        'footer.md' => '',
        'hero.md' => '',
        'navbar.md' => '',
        'sponsors.md' => '',
        'team.md' => ''
    ]
];
?>

<section class="mx-auto max-w-7xl px-2">
    {{-- BAKGROUND GRID --}}
    <x-grid-svg data-aos="fade-down"
                data-aos-duration="2000"
                class="absolute inset-0 -z-0 h-full w-full !text-red-500 [mask-image:linear-gradient(to_top,transparent,white)]"
                gridSize="40"
                lineColor="gray"
                lineOpacity="0.2"
                backgroundColor="transparent"
                :highlightedRow="7"
                animationDirection="rtl"
                animationDuration="6"
                highlightColorStart="red"
                highlightColorEnd="blue"
                strokeWidth="1" />

    {{-- SECTION CONTENT --}}

    <div data-aos-anchor-placement="top-bottom"
         class="relative mx-auto max-w-4xl pt-[1rem] text-center pt-[2rem] ">

        <h1 data-aos="zoom-in"
            data-aos-duration="200"
            class="from-base-content bg-gradient-to-br to-gray-500 bg-clip-text py-3 text-4xl/[1.07] font-bold tracking-widest text-transparent md:text-5xl/[1.07]">
            Streamline Your Documentation Workflow with <span
                  class="from-base-primary/50 to-primary bg-gradient-to-br bg-clip-text">Converge</span>
        </h1>

        <p data-aos="fade-up"
           data-aos-duration="1000"
           class="text-base-content/80 text-md relative mx-auto mt-6 max-w-3xl font-medium leading-10 md:text-xl">
            Converge is the open-source framework that empowers anyone to build high-quality, dynamic
            <span class="vc-text-6"><strong href="#">documentation from
                    Markdown</strong>.</span> Developer-friendly. Intuitive. And designed for teams who care about
            clarity
        </p>

        <div data-aos="fade-up"
             data-aos-duration="1000"
             class="w-xs mx-auto mt-10 flex flex-col items-center justify-center gap-y-8">
            <a href="/docs"
               class="btn btn-block text-primary-content from-primary to-primary/50 bg-gradient-to-b">
                Get started
            </a>
        </div>
    </div>

    <div data-aos="zoom-in"
         data-aos-duration="500"
         class="mockup-browser bg-base-200 relative !mx-0 mx-auto mt-10 w-full max-w-7xl overflow-hidden border border-gray-400/20">
        <div class="mockup-browser-toolbar h-full">
            <div class="input">https://convergephp.com/docs/5.x</div>
        </div>

        <div
             class="relative border-t border-gray-400/20 bg-[image:radial-gradient(var(--pattern-fg)_1px,_transparent_0)] bg-[size:10px_10px] bg-fixed [--pattern-fg:var(--color-base-300)]">

            <div id="image-container"
                 class="w-full">
                <div class="rounded-box w-full overflow-hidden"
                     style="max-height: 700px;">
                    <img alt="Converge docs screenshot"
                         loading="lazy"
                         decoding="async"
                         class="h-auto w-full object-contain"
                         style="color: transparent;"
                         src="{{ asset('exemple-2.png') }}">
                </div>
            </div>

            <div id="resizer"
                 class="hover:bg-base-300 bg-base-200 absolute right-0 top-0 z-30 flex h-full w-6 cursor-col-resize items-center justify-center shadow-lg transition-colors duration-200">
                <button id="resizer-handle"
                        class="btn btn-square btn-sm btn-primary cursor-col-resize">
                    <svg class="relative z-10"
                         width="15"
                         height="8"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m1 4 3-3M1 4l3 3M1 4h13m0 0-3-3m3 3-3 3"
                              class="stroke-white"
                              stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>

            <div id="code-panel"
                 class="bg-base-200 absolute p-4 right-0 top-0 z-20 h-full overflow-auto text-white transition-all duration-200 ease-out"
                 style="width: 0%;">
                <div class="h-full w-full">
                    <x-filesystem :items="$filesArray" />
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-pulse {
            animation: pulse 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resizer = document.getElementById('resizer');
            const codePanel = document.getElementById('code-panel');
            const resizerHandle = document.getElementById('resizer-handle');
            const mockupContainer = resizer.closest('.mockup-browser');

            let isResizing = false;
            let startX;
            let startPanelWidth = 0;
            let containerWidth;

            // Position initiale du resizer (complètement à droite)
            resizer.style.right = '0px';

            // Optimisation pour une meilleure fluidité
            function applyStyles(panelWidth) {
                // Utiliser requestAnimationFrame pour des animations plus fluides
                window.requestAnimationFrame(() => {
                    const percentage = (panelWidth / containerWidth) * 100;
                    codePanel.style.width = `${percentage}%`;
                    resizer.style.right = `${percentage}%`;
                });
            }

            // Fonction pour démarrer le redimensionnement
            function startResize(clientX) {
                isResizing = true;
                startX = clientX;
                containerWidth = mockupContainer.clientWidth;

                // Largeur actuelle du panneau de code
                startPanelWidth = parseFloat(window.getComputedStyle(codePanel).width) || 0;

                // Ajouter la classe active et arrêter l'animation
                resizer.classList.replace('bg-blue-500', 'bg-blue-700');
                resizerHandle.classList.remove('animate-pulse');

                // Améliorer la performance pendant le drag
                document.body.style.userSelect = 'none';
                document.body.style.cursor = 'col-resize';

                // Ajout d'une classe overlay pour indiquer le mode resize
                mockupContainer.classList.add('resizing');
            }

            // Fonction pour arrêter le redimensionnement
            function stopResize() {
                if (!isResizing) return;

                isResizing = false;
                resizer.classList.replace('bg-blue-700', 'bg-blue-500');

                document.body.style.userSelect = '';
                document.body.style.cursor = '';
                mockupContainer.classList.remove('resizing');

                // Si le panneau est très petit, le fermer complètement
                const panelWidth = parseFloat(codePanel.style.width) || 0;
                if (panelWidth < 5) {
                    codePanel.style.width = '0%';
                    resizer.style.right = '0px';
                    resizerHandle.classList.add('animate-pulse');
                }

                // Sauvegarder la position dans localStorage si besoin
                localStorage.setItem('codePanelWidth', codePanel.style.width);
            }

            // Fonction pour gérer le redimensionnement avec throttling pour fluidité
            function doResize(clientX) {
                if (!isResizing) return;

                // Calculer le mouvement et la nouvelle largeur
                const movementX = startX - clientX;
                const newWidth = Math.min(
                    Math.max(startPanelWidth + movementX, 0),
                    containerWidth * 0.8
                );

                // Appliquer les styles via requestAnimationFrame
                applyStyles(newWidth);
            }

            // Événements de souris
            resizer.addEventListener('mousedown', function(e) {
                e.preventDefault();
                startResize(e.clientX);
            });

            document.addEventListener('mouseup', stopResize);

            document.addEventListener('mousemove', function(e) {
                doResize(e.clientX);
            });

            // Support tactile (optimisé)
            resizer.addEventListener('touchstart', function(e) {
                e.preventDefault();
                startResize(e.touches[0].clientX);
            });

            document.addEventListener('touchend', stopResize);

            document.addEventListener('touchmove', function(e) {
                if (isResizing) {
                    e.preventDefault();
                    doResize(e.touches[0].clientX);
                }
            });

            // Double-clic pour ouvrir/fermer (avec animation améliorée)
            resizer.addEventListener('dblclick', function() {
                const currentWidth = parseFloat(codePanel.style.width) || 0;

                // Animation plus fluide en ajoutant une classe temporaire
                codePanel.classList.add('transition-all', 'duration-300', 'ease-in-out');

                if (currentWidth < 10) {
                    // Ouvrir à 50%
                    codePanel.style.width = '50%';
                    resizer.style.right = '50%';
                    resizerHandle.classList.remove('animate-pulse');
                } else {
                    // Fermer
                    codePanel.style.width = '0%';
                    resizer.style.right = '0px';
                    resizerHandle.classList.add('animate-pulse');
                }

                // Nettoyer la classe après l'animation
                setTimeout(() => {
                    codePanel.classList.remove('transition-all', 'duration-300', 'ease-in-out');
                }, 300);

                localStorage.setItem('codePanelWidth', codePanel.style.width);
            });

            // Restaurer la dernière position si disponible
            const savedWidth = localStorage.getItem('codePanelWidth');
            if (savedWidth && parseFloat(savedWidth) > 0) {
                codePanel.style.width = savedWidth;
                resizer.style.right = savedWidth;
                resizerHandle.classList.remove('animate-pulse');
            }
        });
    </script>

</section>
