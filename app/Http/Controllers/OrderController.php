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
        $orders = Order::all();
        

        //$products = Product::orderBy('name', 'desc')->paginate(2 );
        return view ('orders.index')->with('orders', $orders );
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
       /*
        $order = new Order();
        $order->user_id = $request->user;
        $order->product_id = $request->product;
        $order->manufacturer_id = $request->manufacturer;
        //$order->quantity = 1;
        $order->save();
        return redirect ("product/$product->id"); 
        */

        /*
        $order = new Order();
        $order->user_id = $request->user;
        $order->product_id = $request->product;
        $order->manufacturer_id = $request->manufacturer;
        
        //$order->quantity = 1; $order['quantity']++;
        $order->save();
        return redirect()->back()->with('message', 'Dish has been added to your Order');
        */
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
        //
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
        //
    }
}
