<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Domain;
use App\Models\Reviews;
use App\Models\Variables;
use App\Models\Equipment;
use App\Models\Equipment_desc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function setGlobal() {
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //  ОБЪЯВЛЯЕМ ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ДЛЯ ВСЕХ СТРАНИЦ  //////////////////////////////////////////////////////////
        //  вызов из БД:         %%GLB_PHONE%%
        //  вызов на странице:  {{ app('global')['GLB_PHONE'] }}
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        //загружаем значения переменных из базы
        $variables=Variables::find(1);

        //помещаем эти значения в глобальный массив
        app()->instance('global',
            ['main_phone' => $variables->main_phone,                    //Основной телефон (8-800-xxxxxxxx)
                'client_count' => $variables->client_count,             //Общее число клиентов
                'whatsapp_phone' => $variables->whatsapp_phone,         //Номер телефона WHATSAPP
                'skype_id' => $variables->skype_id,                     //Учетка SKYPE
                'vk_url' => $variables->vk_url,                         //Ссылка компании на страницу в Контакте
                'instagram_url' => $variables->instagram_url,           //Ссылка компании на страницу в Инстаграмм
                'connected_wialon' => $variables->connected_wialon      //Подключено объектов Виалон
            ] );

    }

    /*public function search(Request $request)
    {
        $page=Page::where('url','=','search')->first();

        $searchResult = Units::where('fio', 'LIKE', "%$request->search_fio%")->get();

        return view('pages.one-link-page.'.$page->url, ['page'=>$page, 'searchResult'=>$searchResult]);
    }*/


    public function index($d)
    {
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();
        //dd($d);

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        //$page=Page::find(1);
        $page = Page::where('url', '=', '/')->firstOrFail();

        return view('pages.index.index', ['page'=>$page]);
    }


    /*public function category_pages($category, $url)
    {
        $category=Category::where('url','=',$category)->first();
        $page=Page::where([
            ['id_category','=',$category->id],
            ['url','=',$url]
            ])->first();


        if ($page->lendos == '0') {
            //выводим простую страницу из БД
            return view('pages.category-link-page.base-link-page', ['page'=>$page], ['category'=>$category]);
        }
        else {
            //загружаем лендос
            return view('pages.category-link-page.'.$page->url, ['page'=>$page], ['category'=>$category]);
        }

    }*/




    public function first_pages($d, $url, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();
        //dd($page);

        if ($page->lendos == '0') {
            //выводим простую страницу из БД
            return view('pages.one-link-page.base', ['page'=>$page]);
        }
        else {
            //загружаем лендос
            return view('pages.one-link-page.' . $url, ['page' => $page]);
        }
    }


    // Раздел - УСЛУГИ /////////////////////////////////////////////////////////////////////////////////////
    public function services($d, $url, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.services.' . $url, ['page' => $page]);
    }


    // Раздел - Готовые решения /////////////////////////////////////////////////////////////////////////////////////
    public function catalog($d, $url, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.catalog.' . $url, ['page' => $page]);
    }

    // Раздел - Отзывы /////////////////////////////////////////////////////////////////////////////////////
    public function reviews($d, $url, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы отзыва
        $reviews = Reviews::where('id', '=', $url)->firstOrFail();

        //Пересобираем структуру с недостающими данными PAGE
        $page= new \stdClass();
        $page->title = 'Отзыв от '.$reviews->title.' | Ростелематика';
        $page->description = 'Отзыв от '.$reviews->title.' | Ростелематика во всех городах';

        return view('pages.reviews.base', ['page' => $page, 'reviews' => $reviews]);
    }


    // Раздел - Оборудование /////////////////////////////////////////////////////////////////////////////////////
    public function oborudovanie($d, $url, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы оборудования
        $equipments = Equipment::where('url', '=', $url)->firstOrFail();
        //загружаем описание DESCRIPTION для типа выбранного оборудования
        $equipment_descs = Equipment_desc::where('type', '=', $equipments->type)->firstOrFail();

        //Пересобираем структуру с недостающими данными PAGE
        $page= new \stdClass();
        $page->title = $equipments->type.' '.$equipments->model.'. Купить оборудование в компании Ростелематика';
        $page->description = 'Отзыв от '.$equipments->title.' | Ростелематика во всех городах';

        //формируем описание для выбранной категории товара
        $page->description = $equipments->type.' '.$equipments->model.' - '.$equipment_descs->opis;

        return view('pages.oborudovanie.base', ['page' => $page, 'equipments' => $equipments]);
    }

    // Всё оборудование - Курсоуказатели ///////////////////////////////////////////////////////////////////////////////
    public function oborud_kursoukazatel($d, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.oborudovanie.all-kursoukazateli', ['page' => $page]);
    }

    // Всё оборудование - Датчики уровня топлива ///////////////////////////////////////////////////////////////////////
    public function oborud_dut($d, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.oborudovanie.all-datchiki-urovnya-topliva', ['page' => $page]);
    }

    // Всё оборудование - GPS Маяки ///////////////////////////////////////////////////////////////////////
    public function oborud_gps_mayak($d, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.oborudovanie.all-gps-mayaki', ['page' => $page]);
    }

    // Всё оборудование - GPS/ГЛОНАСС Трекеры ///////////////////////////////////////////////////////////////////////
    public function oborud_gpsglonass_treker($d, Request $request){
        //передаём глобальные переменные (счетчики клиентов, установок и т.д.)
        $this->setGlobal();

        //помещаем $domain в шаблон
        Domain::init($d);

        //загружаем данные страницы
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.oborudovanie.all-gpsglonass-treker', ['page' => $page]);
    }

}
