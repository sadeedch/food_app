<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['quantity'];

    function manufacturer(){
        return $this->belongsTo('App\Manufacturer');
    }
}
