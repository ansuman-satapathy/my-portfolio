<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;
use App\Mail\ContactFormMail;

class Contact extends Component
{
    public $name;
    public $email;
    public $message;
    public $isSubmitting = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ];

    /**
     * Handle the form submission.
     */
    public function submitForm()
    {
        $this->validate(); // validate the input fields

        $this->isSubmitting = true;

        try {
            ContactMessage::create([
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
            ]);

            Mail::to('satapathyansuman12@gmail.com')->send(new ContactFormMail($this->name, $this->email, $this->message));

            session()->flash('success', 'Thank you for reaching out! I will get back to you soon.');

            $this->reset();
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong. Please try again later.');
        }

        $this->isSubmitting = false;
    }

    /**
     * Render the component view.
     */
    public function render()
    {
        return view('livewire.portfolio.contact')
            ->layout('components.layouts.frontend.main');
    }
}
