<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionMailReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    public function build()
    {
        //
    }

}
