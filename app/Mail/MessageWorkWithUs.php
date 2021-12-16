<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageWorkWithUs extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Enviado desde trabaja con nosotros';
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.trabaja-con-nosotros')
        ->attach($this->msg['file']->getRealPath(),
        ['as'=>$this->msg['file']->getClientOriginalName()
        ]);
    }
}
