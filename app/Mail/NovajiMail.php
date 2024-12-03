<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovajiMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // No data needed for client email
    }

    public function build()
    {
        return $this->view('emails.novaji');
    }
}
