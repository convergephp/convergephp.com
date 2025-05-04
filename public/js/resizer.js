        document.addEventListener('DOMContentLoaded', function () {
            const resizer = document.getElementById('resizer');
            const codePanel = document.getElementById('code-panel');
            const resizerHandle = document.getElementById('resizer-handle');
            const mockupContainer = resizer.closest('.mockup-browser');

            let isResizing = false;
            let startX;
            let startPanelWidth = 0;
            let containerWidth;

            // Initial Position
            resizer.style.right = '0px';

            function applyStyles(panelWidth) {
                window.requestAnimationFrame(() => {
                    const percentage = (panelWidth / containerWidth) * 100;
                    codePanel.style.width = `${percentage}%`;
                    resizer.style.right = `${percentage}%`;
                });
            }

            function startResize(clientX) {
                isResizing = true;
                startX = clientX;
                containerWidth = mockupContainer.clientWidth;

                startPanelWidth = parseFloat(window.getComputedStyle(codePanel).width) || 0;

                resizer.classList.replace('bg-blue-500', 'bg-blue-700');
                resizerHandle.classList.remove('animate-pulse');

                document.body.style.userSelect = 'none';
                document.body.style.cursor = 'col-resize';

                mockupContainer.classList.add('resizing');
            }

            function stopResize() {
                if (!isResizing) return;

                isResizing = false;
                resizer.classList.replace('bg-blue-700', 'bg-blue-500');

                document.body.style.userSelect = '';
                document.body.style.cursor = '';
                mockupContainer.classList.remove('resizing');

                const panelWidth = parseFloat(codePanel.style.width) || 0;
                if (panelWidth < 5) {
                    codePanel.style.width = '0%';
                    resizer.style.right = '0px';
                    resizerHandle.classList.add('animate-pulse');
                }

                localStorage.setItem('codePanelWidth', codePanel.style.width);
            }

            function doResize(clientX) {
                if (!isResizing) return;

                const movementX = startX - clientX;
                const newWidth = Math.min(
                    Math.max(startPanelWidth + movementX, 0),
                    containerWidth * 0.8
                );

                applyStyles(newWidth);
            }

            resizer.addEventListener('mousedown', function (e) {
                e.preventDefault();
                startResize(e.clientX);
            });

            document.addEventListener('mouseup', stopResize);

            document.addEventListener('mousemove', function (e) {
                doResize(e.clientX);
            });

            resizer.addEventListener('touchstart', function (e) {
                e.preventDefault();
                startResize(e.touches[0].clientX);
            });

            document.addEventListener('touchend', stopResize);

            document.addEventListener('touchmove', function (e) {
                if (isResizing) {
                    e.preventDefault();
                    doResize(e.touches[0].clientX);
                }
            });

            resizer.addEventListener('dblclick', function () {
                const currentWidth = parseFloat(codePanel.style.width) || 0;

                codePanel.classList.add('transition-all', 'duration-300', 'ease-in-out');

                if (currentWidth < 10) {
                    codePanel.style.width = '50%';
                    resizer.style.right = '50%';
                    resizerHandle.classList.remove('animate-pulse');
                } else {
                    codePanel.style.width = '0%';
                    resizer.style.right = '0px';
                    resizerHandle.classList.add('animate-pulse');
                }

                setTimeout(() => {
                    codePanel.classList.remove('transition-all', 'duration-300', 'ease-in-out');
                }, 300);

                localStorage.setItem('codePanelWidth', codePanel.style.width);
            });

            const savedWidth = localStorage.getItem('codePanelWidth');
            if (savedWidth && parseFloat(savedWidth) > 0) {
                codePanel.style.width = savedWidth;
                resizer.style.right = savedWidth;
                resizerHandle.classList.remove('animate-pulse');
            }
        });
