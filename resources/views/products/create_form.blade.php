@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')
    
  
  <form method="post" action="{{url("product")}}">
     {{csrf_field()}}
     
    <p><label> Name: </label> <input type = "text"  name ="name"  value="{{old('name')}}"> 
    <span style="color:red">
    {{$errors->first('name')}} </p>
    </span>

    <p><label> Price: </label><input type = "text"  name ="price"  value="{{old('price')}}"> 
    <span style="color:red">
    {{$errors->first('price')}} </p>
    </span>
    
    <p> <select name="manufacturer">
    @foreach ($manufacturers as $manufacturer)
      @if($manufacturer->id == old('manufacturer'))
        <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
      @else
        <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
      @endif
    @endforeach
    
    </select></p>
    
    
    <input type ="submit" value="Create">



  </form>
@endsection