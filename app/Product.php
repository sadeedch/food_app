<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price'];

    function manufacturer(){
        return $this->belongsTo('App\Manufacturer');
    }

    function orders(){
        return $this->belongsTo('App\Order');
    }
}
