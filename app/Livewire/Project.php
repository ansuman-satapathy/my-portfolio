<?php

namespace App\Livewire;

use Livewire\Component;

class Project extends Component
{
    public $projects = [];

    public function loadProjects()
    {
        $this->projects = [
            [
                'title' => 'LaraMon - Laravel Monitoring Package',
                'description' => 'A real-time self-hosted monitoring dashboard using Livewire & Flux UI.',
                'image' => '/images/laramon-bg.png',
                'link' => 'https://github.com/ansuman-satapathy/laramon',
                'tech' => ['Laravel 11', 'Livewire 3', 'Alpine.js', 'Redis', 'Tailwind CSS', 'ApexCharts'],
            ],
            [
                'title' => 'Multi-Stage Docker Deployment on AWS',
                'description' => 'Deploying a Spring Boot ToDo app using a multi-stage Docker build on AWS EC2.',
                'image' => '/images/docker-bg.png',
                'link' => 'https://ansumannn.hashnode.dev/deploying-a-multi-stage-docker-image-to-aws-ec2-using-docker-hub',
                'tech' => ['Docker', 'AWS EC2', 'Spring Boot', 'Maven', 'NGINX'],
            ],
            [
                'title' => 'Laravel CI/CD Pipeline with GitHub Actions',
                'description' => 'Automating deployment with GitHub Actions for Laravel applications.',
                'image' => '/images/cicd-bg.png',
                'link' => 'https://github.com/ansuman-satapathy/laravel-cicd',
                'tech' => ['GitHub Actions', 'CICD', 'Laravel', 'PHPStan', 'PEST'],
            ],
            [
                'title' => 'My Portfolio - SPA with TALL Stack',
                'description' => 'A modern SPA portfolio website built with Laravel, Livewire, and Tailwind.',
                'image' => '/images/portfolio-bg.png',
                'link' => 'https://ansuman.laravel.cloud',
                'tech' => ['Laravel', 'Livewire', 'Alpine JS', 'Flux', 'Tailwind CSS'],
            ],
        ];
    }

    public function mount()
    {
        $this->loadProjects();
    }

    public function render()
    {
        return view('livewire.portfolio.project', [
            'projects' => $this->projects
        ])->layout('components.layouts.frontend.main');
    }
}
