<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    // テーブル名指定
    protected $table = 'polices';

    protected $fillable =  [
        'police_name',
    ];
}
