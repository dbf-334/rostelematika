<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Units;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Variables;


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
            ['main_phone' => $variables->main_phone,                    //Основной телефон (8-800-)
                'client_count' => $variables->client_count,             //Общее число клиентов
                'whatsapp_phone' => $variables->whatsapp_phone,         //Номер телефона WHATSAPP для header/footer
                'skype_id' => $variables->skype_id,                     //Учетка SKYPE для header/footer
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


    /*public function category_units($id)
    {
        $units=Units::where('id','=',$id)->first();

        $page->title='ok';

        //выводим простую страницу из БД
        return view('pages.category-link-page.base-units-page', ['units'=>$units]);
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
}
