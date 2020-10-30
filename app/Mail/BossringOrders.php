<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BossringOrders extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from( env('MAIL_USERNAME') )   //отправляем заявку руководителю
            ->to( env('MAIL_USERNAME') )
            //->to('fdn@ros-telematika.ru')
            ->subject('Заявка с сайта: обращение к руководству')
            ->view('email.bossring');
    }

}
