<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageCita extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Enviado desde Cita';
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
        return $this->view('emails.cita')
        ->attach($this->msg['file']->getRealPath(),
        ['as'=>$this->msg['file']->getClientOriginalName()
        ]);
    }
}
