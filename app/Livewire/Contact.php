<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.portfolio.contact')
            ->layout('components.layouts.frontend.main');
    }
}
