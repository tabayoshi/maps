<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // テーブル指定
    protected $table = 'companys';

    protected $fillable =  [
        'company',
    ];
}
