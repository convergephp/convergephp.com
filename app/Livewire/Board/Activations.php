<?php

namespace App\Livewire\Board;

use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('components.settings.layout')]
class Activations extends Component
{
    public function render()
    {
        return view('livewire.board.activations');
    }
}
