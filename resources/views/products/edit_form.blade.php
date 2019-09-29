@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')

  <form method="post" action= '{{url("product/$product->id")}}'>
      {{csrf_field()}}
      {{method_field('PUT')}}

      @if (count($errors) == 1 )
      <p><label>Name: </label> <input type="text" name="name" value="{{old('name')}}"></p>
      {{$errors->first('name')}}
      @else
      <p><label>Name: </label> <input type="text" name="name" value="{{$product->name}}"></p>
      @endif

      @if (count($errors) == 1 )
      <p><label>Price:</label> <input type="text" name="price" value="{{old('price')}}"><br></p>
      {{$errors->first('price')}}
      @else
      <p><label>Price:</label> <input type="text" name="price" value="{{$product->price}}"><br></p>
      @endif
      
      @foreach ($manufacturers as $manufacturer)
      <input type="hidden" name="manufacturer" value="{{$manufacturer->id}}">
      @endforeach
      
      
      <!-- 
      <p> <select name="manufacturer">
      @foreach ($manufacturers as $manufacturer)
        @if ($manufacturer->id == $product->manufacturer_id)
            <option value="{{$manufacturer->id}}" selected = "selected"> {{$manufacturer->name}}</option> 
        @else
            <option value="{{$manufacturer->id}}"> {{$manufacturer->name}}</option> 
        @endif
      @endforeach
      </select></p> 
    -->
    <input type="submit" value="Update item">
  </form>


@endsection