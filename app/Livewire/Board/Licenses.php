<?php

namespace App\Livewire\Board;

use App\Models\License;
use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.settings.layout')]
class Licenses extends Component
{
    public Collection $licenses;

    public function mount(#[CurrentUser] User $user)
    {
        dd(License::first()->price);

        dd($user->licenses());

        $user->licenses->load('price');
        $this->licenses = $user->licenses;
    }

    public function render()
    {
        return view('livewire.board.licenses');
    }
}
