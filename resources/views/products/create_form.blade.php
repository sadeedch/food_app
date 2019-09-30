@guest
@else

@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')


  <form method="post" action="{{url("product")}}"  enctype="multipart/form-data">
     {{csrf_field()}}
     
    <p><label> Name: </label> <input type = "text"  name ="name"  value="{{old('name')}}"> 
    <span style="color:red">
    {{$errors->first('name')}} </p>
    </span>

    <p><label> Price: </label><input type = "text"  name ="price"  value="{{old('price')}}"> 
    <span style="color:red">
    {{$errors->first('price')}} </p>
    </span>

    <p><input type="file" name="image"></p> 
  
    


    @foreach ($manufacturers as $manufacturer)
     
    
    
    
        <input type="text" name="manufacturer" value="{{$manufacturer->id}}">
    
     
    @endforeach

    
    
    
    
    
    <input type ="submit" value="Create">



  </form>

@endguest
@endsection