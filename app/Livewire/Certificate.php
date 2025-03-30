<?php

namespace App\Livewire;

use Livewire\Component;

class Certificate extends Component
{
    public function render()
    {
        return view('livewire.portfolio.certificate')
            ->layout('components.layouts.frontend.main');
        ;
    }
}
