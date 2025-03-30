<?php

namespace App\Livewire;

use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        return view('livewire.portfolio.hero')
            ->layout('components.layouts.frontend.main');
        ;
    }
}
