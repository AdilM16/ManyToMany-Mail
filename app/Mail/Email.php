<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\This;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public $contenuMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenuMail)
    {
        $this->contenuMail = $contenuMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('email');
        return $this->from('adilmohamedmohamed97@gmail.com')
                    ->subject('TestObjet')
                    ->view('email');
    }
}
