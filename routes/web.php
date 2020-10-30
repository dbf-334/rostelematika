<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');






//Route::group(['domain' => '{domain}.' . env('APP_DOMAIN', 'ros-telematika.test')], function() {
Route::domain('{domain}.ros-telematika.test') ->group( function($domain) {

    //формирование robots.txt на лету
    Route::get('/robots.txt', 'RobotController@robots');
    Route::get('/sitemap.xml', 'RobotController@sitemap');


    Route::get('/', 'PagesController@index');
    Route::get('/{url}.html', 'PagesController@first_pages');
    Route::get('/{url}', 'PagesController@first_pages');    //главные страницы разделов (услуги, решения и т.д.)

    Route::get('/services/{url}.html', 'PagesController@services'); //все страницы раздела - Услуги
        Route::get('/services/{url}', 'PagesController@services'); //страницы исключения раздела - Услуги (например: Курсоуказатели и т.д.)

    Route::get('/catalog/{url}.html', 'PagesController@catalog'); //все страницы раздела - Готовые решения

    Route::get('/oborudovanie/all-gpsglonass-treker.html', 'PagesController@oborud_gpsglonass_treker'); //весь список оборудования - GPS/ГЛОНАСС Трекеры
    Route::get('/oborudovanie/all-gps-mayaki.html', 'PagesController@oborud_gps_mayak'); //весь список оборудования - GPS Маяки
    Route::get('/oborudovanie/all-datchiki-urovnya-topliva.html', 'PagesController@oborud_dut'); //весь список оборудования - Датчики уровня топлива
    Route::get('/oborudovanie/all-kursoukazateli.html', 'PagesController@oborud_kursoukazatel'); //весь список оборудования - Курсоуказатели
        Route::get('/oborudovanie/{url}', 'PagesController@oborudovanie'); //все страницы раздела - Оборудование

    Route::get('/reviews/{url}.html', 'PagesController@reviews'); //все страницы раздела - Отзывы

});






