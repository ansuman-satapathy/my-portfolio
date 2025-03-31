<?php

namespace App\Livewire;

use Livewire\Component;

class Certificate extends Component
{
    public $certificates = [
        [
            'title' => 'AWS Cloud Practitioner Essentials',
            'issuer' => 'Amazon Web Services',
            'date' => 'July 2024',
            'image' => '/images/aws-cert.png',
            'link' => '/docs/AWS Cloud Practitioner Essentials.pdf',
        ],
    ];

    public function render()
    {
        return view('livewire.portfolio.certificate', [
            'certificates' => $this->certificates
        ])->layout('components.layouts.frontend.main');
    }
}
