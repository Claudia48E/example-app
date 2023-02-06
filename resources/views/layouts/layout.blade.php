<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>
 <meta charset="utf-8" />
        <!--pt afisare diacritice si caractere mai putin uzuale-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--pentru folosirea microsoft edge-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--Acesta ofera browserului instructiuni despre cum sa controleze dimensiunile si scalarea paginii-->
<link rel="stylesheet" href="{{asset('css/main.css')}}" />
 @stack('styles')
</head>
<body>
<header>
<h1 style="color:rgb(20, 13, 26)">QUEEN PIZZA</h1>
<img
   src="{{URL('img/pizza-g58a08ac1e_1920.jpg')}}"
  alt="pizza"
  width="350"
  height="180" />
 <img
    src="{{URL('img/dough-943245__340.jpg')}}"
    alt="pizza"
    width="350"
    height="180" />
<img
   src="{{URL('img/pizza-g82a9b0ae4_1920.jpg')}}"
   alt="pizza"
  width="350"
  height="180"/>
</header>
 <div class="nav">
<a href="{{route('welcome')}}">QUEEN PIZZA</a>
<a href="{{route('products')}}">Products</a>
<a href="{{route('booking')}}">Booking</a>
<a href="{{route('delivery')}}">Delivery</a>
<a href="{{route('cook at home')}}">Cook at Home</a>
<a href="{{route('restaurant')}}">Restaurant</a>
<a href="{{route('login')}}">Login</a>
<a href="{{route('cart')}}">Cart</a>
</div>
@yield('content')
        
<footer> 
<small>&copy; Copyright 2023,  Pizza Restaurant  &  Nasturas Elena</small> 
</footer> 
</body>
</html>