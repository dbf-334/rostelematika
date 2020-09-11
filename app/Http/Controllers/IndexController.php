<?php

namespace App\Http\Controllers;


use App\Models\Diff;
use App\Models\Direction;
use App\Models\Domain;
use App\Models\Equipment;
use App\Models\Kit;
use App\Models\News;
use App\Models\Page;
use App\Models\Review;
use App\Models\TahoWork;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * Главная страница
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($d)
    {
        dd($d);
        $sub_domain = Domain::init($d);
        $diff = Diff::where('d_id', $sub_domain->id)->first();


        //5 последних новостей
        $news = News::orderBy('id', 'desc')->take(5)->get();

        //для seo создаем объект
        $page = new \stdClass();
        $page->seo_title = $diff->title;
        $page->seo_description = $diff->desc;
        $page->seo_keywords = $diff->key;
        $page->content = $diff->body;
        $page->verification = $diff->verification;


        //dd(Direction::all()->toJson());
        return view(is_mobile() . 'pages.index.index', [
            'page' => $page,
            'news' => $news,
            //Главную с большей долей вероятности отнесем к Мониторингу
            'direction' => Direction::find(2),
        ]);
    }


    /**
     * генерация robots.txt на лету для разных поддоменов
     *
     */
    function robotsTxt($d)
    {

        $file=$_SERVER['SCRIPT_FILENAME'];
        $last_modified_time = filemtime($file);
        //$etag = md5_file($file);
        $etag = $last_modified_time;

        header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT");
        header("Etag: $etag");

        //    if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time || trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) {
        //        header('HTTP/1.1 304 Not Modified');
        //        exit;
        //    }
        header('Content-Type: text/plain');
        //если запрос по 443 порту (SSL)
        if(request()->secure()) {
echo "User-Agent: Yandex
Disallow: /in/
Disallow: /*?
Disallow: /*?*
Disallow: /adminka/
Disallow: /admin/
Disallow: /js/
Disallow: /docs/
Disallow: /files/
Disallow: /landing/
Disallow: /*utm_
Host: https://$d.stavtrack.ru
Sitemap: https://$d.stavtrack.ru/sitemap.xml

User-Agent: * 
Disallow: /in/
Disallow: /*?
Disallow: /*?*
Disallow: /adminka/
Disallow: /admin/
Disallow: /js/
Disallow: /docs/
Disallow: /files/
Disallow: /landing/
Disallow: /*utm_
";
        //если запрос по 80 порту
        } else {
echo "User-Agent: Yandex 
Disallow: /in/
Disallow: /*?
Disallow: /*?*
Disallow: /adminka/
Disallow: /admin/
Disallow: /js/
Disallow: /docs/
Disallow: /files/
Disallow: /landing/
Disallow: /*utm_
Host: https://$d.stavtrack.ru

User-Agent: * 
Disallow: /in/
Disallow: /*?
Disallow: /*?*
Disallow: /adminka/
Disallow: /admin/
Disallow: /js/
Disallow: /docs/
Disallow: /files/
Disallow: /landing/
Disallow: /*utm_
";
        }

    }


    // Генерация HTTPS карты сайта для всех поддоменов
    public function siteMapXml($d)
    {
        // create sitemap
        $sitemap = App::make("sitemap");
        // set cache
        $sitemap->setCache('laravel.sitemap-'.$d);
        //главная
        $sitemap->add("https://$d.stavtrack.ru", Carbon::now(), '1.0', 'weekly');
        //pages
        foreach (Page::all() as $item) {
            $sitemap->add("https://$d.stavtrack.ru/$item->url", Carbon::now(), '0.9', 'monthly');
        }
        //оборудование
        foreach (Equipment::all() as $item) {
            $sitemap->add("https://$d.stavtrack.ru/oborudovanie/$item->url.html", Carbon::now(), '0.7', 'monthly');
        }
        //выполненые работы
        foreach (TahoWork::all() as $item) {
            $sitemap->add("https://$d.stavtrack.ru/tachograph/primer-ustanovki/$item->url.html", Carbon::now(), '0.8', 'yearly');
        }
        //комплекты
        foreach (Kit::all() as $item) {
            $sitemap->add("https://$d.stavtrack.ru/komplekty/$item->url.html", Carbon::now(), '0.4', 'yearly');
        }
        //отзывы
        foreach (Review::all() as $item) {
            $sitemap->add("https://$d.stavtrack.ru/otzivy/$item->id.html", Carbon::now(), '0.3', 'yearly');
        }
        //новости
        foreach (News::whereNull('archive')->get() as $item) {
            $sitemap->add("http://$d.stavtrack.ru/news/$item->url.html", Carbon::now(), '0.2', 'never');
        }
        // show sitemap
        return $sitemap->render('xml');
    }


    /**
     * Вытаскиваем все данные о направлениях Ставтрэк - для GA через AJAX
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDirectionsForGa()
    {
        return Direction::select('id', 'label', 'value_goal')->get();
    }



}