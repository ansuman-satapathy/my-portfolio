<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Main extends Component
{
    public $section;

    public function mount()
    {
        $this->section = match (Route::currentRouteName()) {
            'project' => 'project',
            'blog' => 'blog',
            'certificate' => 'certificate',
            'contact' => 'contact',
            default => 'home',
        };
    }

    public function render()
    {
        return view('livewire.portfolio.main')
            ->layout('components.layouts.frontend.main');
    }
}
