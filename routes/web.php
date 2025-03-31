<?php

use App\Livewire\Main;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


//Portfolio Frontend
Route::get('/', Main::class)->name('home');
Route::get('/projects', Main::class)->name('project');
Route::get('/blogs', Main::class)->name('blog');
Route::get('/certificates', Main::class)->name('certificate');
Route::get('/contact', Main::class)->name('contact');

// require __DIR__ . '/auth.php';
