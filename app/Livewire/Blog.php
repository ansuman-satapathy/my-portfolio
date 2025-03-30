<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.portfolio.blog')
            ->layout('components.layouts.frontend.main');
        ;
    }
}
