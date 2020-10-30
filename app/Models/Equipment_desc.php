<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment_desc extends Model
{
    /**
     * не используем даты в этой модели
     * @var bool
     */
    public $timestamps = false;

    // ОПРЕДЕЛЯЕМ ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ДЛЯ ВСЕХ СТРАНИЦ
    protected $table ='equipment_desc';
}
