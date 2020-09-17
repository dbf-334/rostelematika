<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{
    /**
     * не используем даты в этой модели
     * @var bool
     */
    public $timestamps = false;

    // ОПРЕДЕЛЯЕМ ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ ДЛЯ ВСЕХ СТРАНИЦ
    protected $table ='variables';
}
