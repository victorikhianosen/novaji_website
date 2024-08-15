<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formField;

    public function __construct($formField)
    {
        $this->formField = $formField;
    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->with('formField', $this->formField);
    }
}
