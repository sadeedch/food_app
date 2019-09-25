<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    function products(){
        return $this->hasMany('App\Product');
    }

    function orders(){
        return $this->hasMany('App\Order');
    }
}
