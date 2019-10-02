@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


  
<div  >
<h1 class="bg-info" align = "center" >Statistics</h1>
  
  <h2 class="bg-success" align = "center" style = "width: 450px;"  >Most Ordered</h2>
    
    @foreach ($orders as $order)
    
     <h5>{{$order->name}}</h5>
    
     
    @endforeach

    @if (Auth::user()->role == "manufacturer")
    <h2 class="bg-success" align = "center" style = "width: 450px;"  >Order Detail</h2>
      @foreach ($rests as $rest)
        <h5>{{$rest->name}}</h5>
      @endforeach

      <h2 class="bg-success" align = "center" style = "width: 450px;"  >Total Sales</h2><br>

      <h2 class="bg-success" align = "center" style = "width: 450px;"  >Total Weekly Sales</h2>

   @endif

@endsection
