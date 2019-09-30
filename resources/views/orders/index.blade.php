@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')

<h1 style="color:white; background-color:#CD5C5C;border-radius: 10px;width: 800px;">Cart Details</h1><br><br>
<div  align = "center"class="w-25 p-9" >
  @foreach($orders as $order)
    <div class="border border-success rounded" style="width: 400px;">
    
      <h3> Name of Dish = {{$order->name}}</h3> <br>
      <h3>Price of Dish = {{$order->price}}</h3> <br>
      <h4> Address = {{$order->address}}</h4> <br>
    </div><br>
  @endforeach
  </div>
 
@endsection
