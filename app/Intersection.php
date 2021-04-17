<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intersection extends Model
{
     protected $fillable =  [
        'police_id',
        'ctl_no',
        'intersection',
        'address',
        'co_id',
    ];
}
