@props(['items' => []])

@php
    // SVG icons defined outside of the rendering function for better readability
    $folderClosedIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
    </svg>';

    $folderOpenIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-3 w-3">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>';

    $folderIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="h-5 w-5">
        <linearGradient id="KA3iPnJF2lqt7U2-W-Vona_oiCA327R8ADq_gr1" x1="16" x2="16" y1="4.905" y2="27.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00b5f0"></stop><stop offset="1" stop-color="#008cc7"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vona_oiCA327R8ADq_gr1)" d="M26,27H6c-1.105,0-2-0.895-2-2V7c0-1.105,0.895-2,2-2h4.027c0.623,0,1.22,0.247,1.66,0.688	l0.624,0.624C12.753,6.753,13.35,7,13.973,7H26c1.105,0,2,0.895,2,2v16C28,26.105,27.105,27,26,27z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vonb_oiCA327R8ADq_gr2" x1="16" x2="16" y1="5" y2="27" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".02"></stop><stop offset="1" stop-opacity=".15"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vonb_oiCA327R8ADq_gr2)" d="M26,7H13.973	c-0.623,0-1.22-0.247-1.66-0.688l-0.625-0.625C11.247,5.247,10.65,5,10.027,5H6C4.895,5,4,5.895,4,7v18c0,1.105,0.895,2,2,2h20	c1.105,0,2-0.895,2-2V9C28,7.895,27.105,7,26,7z M27.75,25c0,0.965-0.785,1.75-1.75,1.75H6c-0.965,0-1.75-0.785-1.75-1.75V7	c0-0.965,0.785-1.75,1.75-1.75h4.027c0.56,0,1.087,0.218,1.484,0.615l0.625,0.625c0.491,0.491,1.143,0.761,1.837,0.761H26	c0.965,0,1.75,0.785,1.75,1.75V25z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vonc_oiCA327R8ADq_gr3" x1="16" x2="16" y1="8.922" y2="27.008" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00dcff"></stop><stop offset=".859" stop-color="#00bfff"></stop><stop offset="1" stop-color="#00a8e0"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vonc_oiCA327R8ADq_gr3)" d="M27,27H5c-1.105,0-2-0.895-2-2V11	c0-1.105,0.895-2,2-2h22c1.105,0,2,0.895,2,2v14C29,26.105,28.105,27,27,27z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vond_oiCA327R8ADq_gr4" x1="16" x2="16" y1="9" y2="27" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".02"></stop><stop offset="1" stop-opacity=".15"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vond_oiCA327R8ADq_gr4)" d="M27,9H5c-1.105,0-2,0.895-2,2v14	c0,1.105,0.895,2,2,2h22c1.105,0,2-0.895,2-2V11C29,9.895,28.105,9,27,9z M28.75,25c0,0.965-0.785,1.75-1.75,1.75H5	c-0.965,0-1.75-0.785-1.75-1.75V11c0-0.965,0.785-1.75,1.75-1.75h22c0.965,0,1.75,0.785,1.75,1.75V25z"></path>
    </svg>';

    $fileIcon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-primary/20 strock-success size-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
</svg>';

    function renderItems($items, $level = 0, $icons = [])
    {
        // Base container class with level-specific styling
        $baseClass = 'pl-0' . ($level > 0 ? ' border-primary/20 !border-l' : '') . ' ml-0 md:ml-8 space-y-1 pl-2';
        $html = "<ul class=\"{$baseClass}\">";

        foreach ($items as $key => $item) {
            if (is_array($item)) {
                // This is a folder with sub-items
                $html .= renderFolder($key, $item, $level, $icons);
            } else {
                // This is a file (markdown)
                $html .= renderFile($key, $level, $icons);
            }
        }

        $html .= '</ul>';
        return $html;
    }
    function renderFolder($folderName, $contents, $level, $icons)
    {
        $html = '<li class="relative">';

        // Initialize with AlpineJS - folders are open by default
        $html .= '<div x-data="{ open: true }" class="folder-item">';

        // Folder header with click toggle
        $html .=
            '<div @click="open = !open" class="hover:bg-primary/20 relative flex cursor-pointer items-center rounded px-2 py-1">';

        // Toggle icon (open/closed)
        $html .= '<div class="text-base-content flex h-4 w-4 items-center justify-center">';
        $html .= '<span x-show="!open">' . $icons['folderClosed'] . '</span>';
        $html .= '<span x-show="open">' . $icons['folderOpen'] . '</span>';
        $html .= '</div>';

        // Folder icon
        $html .= '<div class="ml-1 mr-1 h-5 w-5">' . $icons['folder'] . '</div>';

        // Folder name
        $html .= '<span class="text-base-content ml-1 font-medium">' . htmlspecialchars($folderName) . '</span>';
        $html .= '</div>';

        // Folder contents with conditional display
        $html .= '<div x-show="open" class="folder-content mt-1">';
        $html .= renderItems($contents, $level + 1, $icons);
        $html .= '</div>';

        $html .= '</div>';
        $html .= '</li>';

        return $html;
    }

    function renderFile($fileName, $level, $icons)
    {
        // File item with appropriate styling based on level
        $beforeClass = $level > 0 ? ' before:top-[12px]' : '';
        $html =
            '<li class="relative' .
            $beforeClass .
            ' before:bg-primary/20 hover:bg-primary/20 flex items-center rounded px-2 py-1 before:absolute before:left-[-8px] before:h-px before:w-2">';

        // File icon
        $html .= '<div class="mr-1 h-5 w-5">' . $icons['file'] . '</div>';

        // File name
        $html .= '<span class="text-base-content">' . htmlspecialchars($fileName) . '</span>';
        $html .= '</li>';

        return $html;
    }

    // Prepare the icons array to pass to rendering functions
    $icons = [
        'folderClosed' => $folderClosedIcon,
        'folderOpen' => $folderOpenIcon,
        'folder' => $folderIcon,
        'file' => $fileIcon,
    ];

    // Generate the full filesystem tree HTML
    $filesystemTreeHtml = renderItems($items, 0, $icons);
@endphp

<div class="filesystem-tree bg-base-100 text-base-content rounded-md p-4 font-mono text-sm">
    {!! $filesystemTreeHtml !!}
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('filesystem', {
            init() {
                // Ensure all folders are open by default
                setTimeout(() => {
                    document.querySelectorAll('.folder-item').forEach(folder => {
                        if (folder.__x) {
                            folder.__x.$data.open = true;
                        }
                    });
                }, 0);
            }
        });

        // Initialize the store
        Alpine.store('filesystem').init();
    });
</script>
