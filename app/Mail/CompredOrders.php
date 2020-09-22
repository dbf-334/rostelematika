<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompredOrders extends Mailable
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
            ->from( env('MAIL_USERNAME') )
            ->to( env('MAIL_USERNAME') )
            //->to('fdn@ros-telematika.ru')
            ->subject('Заявка с сайта: заказ коммерческого предложения')
            ->view('email.compred');
    }

}
