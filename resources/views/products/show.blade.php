 @extends('layouts.app')
@section('title')
  Products
@endsection

@section('content')
<div  class="btn btn-success"  >
<p> <a  style="color: white;" href='{{url("product/create")}}'>Add New Dish</a></p>
</div>
    
    @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message') }}
       </div>
    @endif

      @foreach($products as $product)
      <form method = "POST" action='{{action("OrderController@store")}}'>
        {{csrf_field()}}
        {{method_field ('POST')}}
        <div class="  border-success border-bottom" style="width: 400px;">
        <h1>{{$product->name}}</h1>
        <p>${{$product->price}}</p>
        <img src="{{url($product->image)}}" alt="product image" style="width:300px;height:300px;">
        <input type="hidden" name="manufacturer_id" value="{{$product->manufacturer_id}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        @guest
          @else
          @if (Auth::user()->role == "customer")
          <br><br>
          <input type="submit" value="Add to Order">
          @endif
        @endguest
     </form>



    @guest
    @else
      @if (Auth::user()->role =="manufacturer" && $manufacturers->name == Auth::user()->name) 
    
    <p> <a href='{{url("product/$product->id/edit")}}'> Edit</a></p>
      
    <p>
     <form method = "POST" action='{{url("product/$product->id")}}'>
        {{csrf_field()}}
        {{method_field ('DELETE')}}
        <input type="submit" value="Delete">
     </form>
     @endif
    @endguest
    </p></div><br>
    @endforeach  
    
 



@endsection

