@extends('layouts.app')

@section('title')
  Products
@endsection

@section('content')

<html>
<body background="products_images/background.jpeg" style = "background-size: cover;" >
<h1 style = "color: white;position: absolute; 
 font-size: 60px; background: rgba(5,5,5, 0.6);left: 150px;top: 150px;"> Welcome to Food App</h1>

<a href="{{'manufacturer'}}"style = "color: gold;position: absolute; 
 font-size: 30px; background: rgba(5,5,5, 0.6);left: 320px;top: 250px;"> Restaurants List</a> 
</body>
</html>



  
@endsection
