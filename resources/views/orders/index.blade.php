@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


<div  align = "center"class="w-25 p-9" >
  @foreach($orders as $order)
    <div class="border border-success rounded" style="width: 400px;">
      <h3>{{$order->quantity}} </h3>
      <small> {{$order->manufacturer_id}}</small> 
    </div><br>
  @endforeach
  </div>
  

   
@endsection
