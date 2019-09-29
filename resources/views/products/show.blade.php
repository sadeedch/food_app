 @extends('layouts.app')
@section('title')
  Products
@endsection

@section('content')
    
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
        <p>{{$product->price}}</p>
        <input type="hidden" name="manufacturer_id" value="{{$product->manufacturer_id}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">

  <!--    <div>
        <button type="button"  style="display: block; width: 30%; height: 30px;"class="btn btn-success" href='{{url("order/store")}}'>Add to Order</button>
      </div>
--> 
        <input type="submit" value="Add to Order">
     </form>



    @guest
    @else
    
    <p> <a href='{{url("product/$product->id/edit")}}'> Edit</a></p>

    <p>
     <form method = "POST" action='{{url("product/$product->id")}}'>
        {{csrf_field()}}
        {{method_field ('DELETE')}}
        <input type="submit" value="Delete">
     </form>
    @endguest
    </p></div><br>
    @endforeach  

 



@endsection

