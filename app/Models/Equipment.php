<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    /**
     * не используем даты в этой модели
     * @var bool
     */
    public $timestamps = false;

    protected $table ='equipment';
}
