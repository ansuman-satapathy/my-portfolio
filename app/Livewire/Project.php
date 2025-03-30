<?php

namespace App\Livewire;

use Livewire\Component;

class Project extends Component
{
    public function render()
    {
        return view('livewire.portfolio.project')
            ->layout('components.layouts.frontend.main');
        ;
    }
}
