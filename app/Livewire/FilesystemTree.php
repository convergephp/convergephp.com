<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FilesystemTree extends Component
{
    public $items = [];

    /**
     * Renders the component view
     */
    public function render()
    {
        return view('livewire.filesystem-tree');
    }

    /**
     * Renders items recursively for the filesystem tree
     */
    public function renderItems($items, $level = 0)
    {
        $html = '<ul class="space-y-1 pl-0' . ($level > 0 ? ' ml-8 pl-2 border-l border-success' : '') . '">';

        foreach ($items as $key => $item) {
            if (is_array($item)) {
                // Folder with sub-elements
                $html .= '<li class="relative">';

                // Using x-data with open: true by default
                $html .= '<div x-data="{open: true}" class="folder-item">';
                $html .= '<div @click="open = !open" class="flex items-center cursor-pointer py-1 hover:bg-gray-800 rounded px-2 relative">';

                // Toggle icon
                $html .= '<div class="w-4 h-4 flex items-center justify-center text-gray-500">';
                $html .= '<svg x-show="!open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>';
                $html .= '<svg x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>';
                $html .= '</div>';

                // Folder icon
                $html .= '<div class="w-5 h-5 ml-1 mr-1">';
                $html .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5">
                        <linearGradient id="KA3iPnJF2lqt7U2-W-Vona_oiCA327R8ADq_gr1" x1="16" x2="16" y1="4.905" y2="27.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00b5f0"></stop><stop offset="1" stop-color="#008cc7"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vona_oiCA327R8ADq_gr1)" d="M26,27H6c-1.105,0-2-0.895-2-2V7c0-1.105,0.895-2,2-2h4.027c0.623,0,1.22,0.247,1.66,0.688	l0.624,0.624C12.753,6.753,13.35,7,13.973,7H26c1.105,0,2,0.895,2,2v16C28,26.105,27.105,27,26,27z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vonb_oiCA327R8ADq_gr2" x1="16" x2="16" y1="5" y2="27" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".02"></stop><stop offset="1" stop-opacity=".15"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vonb_oiCA327R8ADq_gr2)" d="M26,7H13.973	c-0.623,0-1.22-0.247-1.66-0.688l-0.625-0.625C11.247,5.247,10.65,5,10.027,5H6C4.895,5,4,5.895,4,7v18c0,1.105,0.895,2,2,2h20	c1.105,0,2-0.895,2-2V9C28,7.895,27.105,7,26,7z M27.75,25c0,0.965-0.785,1.75-1.75,1.75H6c-0.965,0-1.75-0.785-1.75-1.75V7	c0-0.965,0.785-1.75,1.75-1.75h4.027c0.56,0,1.087,0.218,1.484,0.615l0.625,0.625c0.491,0.491,1.143,0.761,1.837,0.761H26	c0.965,0,1.75,0.785,1.75,1.75V25z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vonc_oiCA327R8ADq_gr3" x1="16" x2="16" y1="8.922" y2="27.008" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#00dcff"></stop><stop offset=".859" stop-color="#00bfff"></stop><stop offset="1" stop-color="#00a8e0"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vonc_oiCA327R8ADq_gr3)" d="M27,27H5c-1.105,0-2-0.895-2-2V11	c0-1.105,0.895-2,2-2h22c1.105,0,2,0.895,2,2v14C29,26.105,28.105,27,27,27z"></path><linearGradient id="KA3iPnJF2lqt7U2-W-Vond_oiCA327R8ADq_gr4" x1="16" x2="16" y1="9" y2="27" gradientUnits="userSpaceOnUse"><stop offset="0" stop-opacity=".02"></stop><stop offset="1" stop-opacity=".15"></stop></linearGradient><path fill="url(#KA3iPnJF2lqt7U2-W-Vond_oiCA327R8ADq_gr4)" d="M27,9H5c-1.105,0-2,0.895-2,2v14	c0,1.105,0.895,2,2,2h22c1.105,0,2-0.895,2-2V11C29,9.895,28.105,9,27,9z M28.75,25c0,0.965-0.785,1.75-1.75,1.75H5	c-0.965,0-1.75-0.785-1.75-1.75V11c0-0.965,0.785-1.75,1.75-1.75h22c0.965,0,1.75,0.785,1.75,1.75V25z"></path>
                    </svg>';
                $html .= '</div>';

                // Folder name
                $html .= '<span class="ml-1 text-gray-300 font-medium">' . htmlspecialchars($key) . '</span>';
                $html .= '</div>';

                // Folder content (recursive) with x-show
                $html .= '<div x-show="open" class="folder-content mt-1">';
                $html .= $this->renderItems($item, $level + 1);
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</li>';
            } else {
                // It's a file (markdown)
                $html .= '<li class="flex items-center py-1 hover:bg-gray-800 rounded px-2 relative' . ($level > 0 ? ' before:absolute before:w-2 before:h-px before:bg-gray-600 before:left-[-8px] before:top-[12px]' : '') . '">';

                // Markdown icon for all files
                $html .= '<div class="w-5 h-5 mr-1">';
                $html .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                        <path fill="#6B7280" d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                        <polyline points="14 2 14 8 20 8" stroke="#6B7280" stroke-width="1" fill="none"/>
                        <path fill="#fff" d="M4 15.5V17h3v-1.5H5.5v-3H7V11H4v1.5h1.5v3H4zm5 1.5h3v-6h-1.5v3h-1v-3H8v6zm5 0h1.5v-3h1v3H18v-6h-4v6z"/>
                    </svg>';
                $html .= '</div>';

                // File name
                $html .= '<span class="text-gray-300">' . htmlspecialchars($key) . '</span>';
                $html .= '</li>';
            }
        }

        $html .= '</ul>';
        return $html;
    }
}
