<?php
/**
 * Обрабатываем все заявки оставленые посетителями сайта
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\SendOrderRequest;
use App\Mail\CallbackOrders;
use App\Mail\TestdriveOrders;
use App\Mail\CompredOrders;




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
        if ($request->type_order == 'CALLBACK') { //формы обратного звонка
            //посылаем письмо
            Mail::send(new CallbackOrders());
            return;
        }
        elseif ($request->type_order == 'TESTDRIVE') { //формы тест-драйва различного оборудования (7-дней)
            //посылаем письмо
            Mail::send(new TestdriveOrders());
            return;
        }
        elseif ($request->type_order == 'COMPRED') { //формы коммерческого предложения
            //посылаем письмо
            Mail::send(new CompredOrders());
            return;
        }

    }
}
