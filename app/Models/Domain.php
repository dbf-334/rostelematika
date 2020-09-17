<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{

    /**
     * не используем даты в этой модели
     * @var bool
     */
    public $timestamps = false;


    /**
     * Формируем объект с данными поддомена и передаем его сразу во все шаблоны
     * это общие данные для всего поддомена (адрес, телефон, карта, город, индекс и всякие уникальные данные именно
     * для данного поддомена)
     * @param $subDomain
     */
    public static function init($subDomain)
    {
        $domain = self::where('domain', $subDomain)->firstOrFail();

        //Привязываем существующий экземпляр объекта к контейнеру
        //https://laravel.ru/docs/v5/container
        //app()->instance('domain', $domain);

        //помещаем $domain во все шаблоны
        view()->share('domain', $domain);

        //помещаем $domains во все шаблоны
        //view()->share('domains', self::orderBy('name')->get());

        //return $domain;
    }

}
