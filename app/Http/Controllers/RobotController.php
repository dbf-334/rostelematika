<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Domain;
use App\Models\Page;
use App\Models\Equipment;
use App\Models\Reviews;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;



class RobotController extends Controller
{
    /**
     * генерация robots.txt на лету для разных поддоменов
     *
     */
    function robots($d)
    {
        $file=$_SERVER['SCRIPT_FILENAME'];
        $last_modified_time = filemtime($file);
        //$etag = md5_file($file);
        $etag = $last_modified_time;

        header("Last-Modified: ".gmdate("D, d M Y H:i:s", $last_modified_time)." GMT");
        header("Etag: $etag");
        header('Content-Type: text/plain');

        if(request()->secure()) {
            //если запрос по 443 порту (SSL)
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
            Host: https://$d.ros-telematika.ru
            Sitemap: https://$d.ros-telematika.ru/sitemap.xml
            
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
        } else {
            //если запрос по 80 порту
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
            Host: https://$d.ros-telematika.ru
            
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
    public function sitemap() {
        $pages = Page::get();
        $equipment = Equipment::get();
        $reviews = Reviews::get();
        return view('sitemap')->with(compact(['pages', 'equipment', 'reviews']) );
    }

}