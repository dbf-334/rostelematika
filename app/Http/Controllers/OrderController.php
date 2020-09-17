<?php
/**
 * Обрабатываем все заявки оставленые посетителями сайта
 */

namespace App\Http\Controllers;

use App\Http\Requests\SendOrderRequest;
use App\Mail\CallbackOrders;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;




class OrderController extends Controller
{
    use Queueable, SerializesModels;

    /**
     * Сюда стекаются данные со всех форм на сайте.
     * @return \Illuminate\Http\JsonResponse|void
     */

    //public function send($domain, SendOrderRequest $request)
    public function send(SendOrderRequest $request)
    {
        if ($request->type_order == 'CALLBACK') { //формы для обратного звонка
            //посылаем письмо
            Mail::send(new CallbackOrders());
            return;
        }

    }
}
