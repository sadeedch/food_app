@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')




<h2 style="color:white; background-color:#CD5C5C;border-radius: 10px;width: 800px;"> Please Click on a Restaurant to view the dishes</h2><br>
<div  align = "center"class="w-25 p-9" >
  @foreach($manufacturers as $manufacturer)
    <div class="border border-success rounded" style="width: 400px;">
      <h3><a href= "manufacturer/{{$manufacturer->id}}" > {{$manufacturer->name}}  </h3>

    </div><br>
  @endforeach
  </div>
  

   
@endsection
