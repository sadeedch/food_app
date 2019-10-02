 @extends('layouts.app')
@section('title')
  Products
@endsection

@section('content')

    <!-- Message when the dish is added to the order or deleted from the menu-->
    @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message') }}
       </div>
    @endif

    <!-- This will show the product name and price to every visitor -->
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
         <!-- If the user is customer then it will show the add to order button -->
        @if (Auth::user()->role == "customer")
          <br><br>
          <input type="submit" value="Add to Order">
        @endif  
      </form>
        <!-- If the user is restaurant on his own page, then it will show the option of delete or edit -->
        @if (Auth::user()->role =="manufacturer" && $manufacturers->name == Auth::user()->name)
          <p> <a href='{{url("product/$product->id/edit")}}'> Edit</a></p>
      
          <p><form method = "POST" action='{{url("product/$product->id")}}'>
          {{csrf_field()}}
          {{method_field ('DELETE')}}
          <input type="submit" value="Delete">
          </form></p>
        @endif
      @endguest
          
        </div><br>
    @endforeach 
    
    <!-- Pagination -->
    <div  class="btn" > 
    <p>{{ $products->links()}}</p>
    </div>



    @guest
    @else
      <!-- If the user is restaurant on his own page, then it will show the option of adding a new dish -->
      @if (Auth::user()->role =="manufacturer" && $manufacturers->name == Auth::user()->name)
        <div  class="btn btn-success"  >
          <p> <a  style="color: white;" href='{{url("product/create")}}'>Add New Dish</a></p>
        </div>
      @endif
    @endguest
    
    
@endsection

