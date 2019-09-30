<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['quantity'];

    function manufacturer(){
        return $this->belongsTo('App\Manufacturer');
    }

    function products(){
        return $this->hasMany('App\Product', 'product_id')->withPivot('name', 'price');
    }


    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
}
