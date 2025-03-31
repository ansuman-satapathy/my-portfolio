<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $userMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $userMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->userMessage = $userMessage;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Contact Form Submission')
            ->view('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'userMessage' => $this->userMessage,
            ]);
    }
}
