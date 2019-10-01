@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')
@if (Auth::user()->role == "customer")
<h1 style="color:white; background-color:#CD5C5C;border-radius: 10px;width: 800px;">Cart Details</h1><br><br>
<div  align = "center"class="w-25 p-9" >
  @foreach($orders as $order)
    <div class="border border-success rounded" style="width: 400px;">
    
      <h3> Name of Dish : {{$order->name}}</h3> <br>
      <h3>Price of Dish : {{$order->price}}</h3> <br>
      <h4> Address : {{$user_address}}</h4> <br>
    </div><br>
  @endforeach
  <div  align = "center">
  <h4 style="color:white; background-color:#CD5C5C;border-radius: 10px;width: 200px;"> Total Price: ${{$total_cart}}</h4> <br>
  </div>
  
  </div>

  @endif



  
  @foreach($orders as $order)
    <div class="border border-success rounded" style="width: 400px;">
    
      <h3> Name of Dish : {{$order->name}}</h3> <br>
      <h3>Price of Dish : {{$order->created_at}}</h3> <br>
      <h4> Address : {{$user_address}}</h4> <br>
    </div><br>
  @endforeach
  
 
@endsection
