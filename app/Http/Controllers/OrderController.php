<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Manufacturer;
use App\Order;
use App\User;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user()->id;

        //$orders = \DB::select('select u.name, u.address, p.name, p.price from users u, orders o, products p
        // where u.id = ? and u.id = o.user_id and o.product_id = p.id', [$user]);

        $orders= User::find($user)->products()->get();
        $user_address=Auth::user()->address;
        
        $total_cart = Auth::user()->products->sum('price');
        $user_name=Auth::user()->name;
        
        return view ('orders.index')->with('orders', $orders )->with('user_address', $user_address)->with('total_cart', $total_cart)->with('user_name', $user_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $order = new Order();
        $order->user_id = Auth::id();
        $order->product_id = $request->product_id;
        $order->manufacturer_id = $request->manufacturer_id;
        $order->quantity = 1;
        $order->save();

        return redirect()->back()->with('message',' Dish has been added to your Order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user()->name;
        
        dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
    
    }
}
