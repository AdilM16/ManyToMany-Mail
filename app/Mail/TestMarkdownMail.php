<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contenuMail;
    public $url = 'http://127.0.0.1:8000/';
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
        return $this->markdown('emails.markdown-test');
    }
}
