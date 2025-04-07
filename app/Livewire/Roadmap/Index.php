<?php

namespace App\Livewire\Roadmap;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layout.index')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.roadmap.index');
    }
}
