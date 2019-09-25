<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;
use App\User ;
use App\Order;

Route::resource('product','ProductController');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/test', function () {
    //$user = User::find(1);
    //$prods = $user->products;
    //dd($prods);
    //$name = 'Restuarant';
    //$prods = $user->products()->whereRaw('name like ?', array ("%$name%"))->get();
    //dd($prods);
    //$products = Manufacturer::find(1)->products;
    //$manufacturer = Order::all();
    $prods = Product::where('manufacturer_id = 1 or manufacturer_id = 2')->get();
    $count = $prods->count();
    dd($count);


});
  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
