<?php

namespace App\Livewire\Board;

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.settings.layout')]
class Transactions extends Component
{
    public Collection $transactions;
    
    public function mount(#[CurrentUser] User $user)
    {
        $this->transactions = $user->transactions;
    }

    public function render()
    {
        return view('livewire.board.transactions');
    }
}
