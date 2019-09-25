@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


<div  align = "center"class="w-25 p-9" >
  @foreach($products as $product)
    <div class="border border-success rounded" style="width: 400px;">
      <h3><a href="product/{{$product->id}}">{{$product->name}} </a> </h3>
      <small> Price {{$product->price}}</small> 
    </div><br>
  @endforeach
  </div>
  
<div class="btn btn-success" >
<p> <a  style="color: white;" href='{{url("product/create")}}'>Add New Dish</a></p>
</div>
   
@endsection
