<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Units;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Domain;


class PagesController extends Controller
{
    public function search(Request $request)
    {
        $page=Page::where('url','=','search')->first();

        $searchResult = Units::where('fio', 'LIKE', "%$request->search_fio%")->get();

        return view('pages.one-link-page.'.$page->url, ['page'=>$page, 'searchResult'=>$searchResult]);
    }



    public function index($d)
    {
        //dd($d);
        $page=Page::find(1);
        $domain = Domain::init($d);

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
        $domain = Domain::init($d);
        //dd($d);
        $page = Page::where('url', '=', $request->path())->firstOrFail();
        //dd($page);

        //$page=Page::where('url','=',$url)->first();


        if ($page->lendos == '0') {
            //выводим простую страницу из БД
            return view('pages.one-link-page.base-link-page', ['page'=>$page]);
        }
        else {
            //загружаем лендос
            return view('pages.one-link-page.' . $url, ['page' => $page]);
        }
    }


    // Раздел - УСЛУГИ /////////////////////////////////////////////////////////////////////////////////////
    public function services($d, $url, Request $request){

        $domain = Domain::init($d);
        $page = Page::where('url', '=', $request->path())->firstOrFail();

        return view('pages.services.' . $url, ['page' => $page]);
    }
}
