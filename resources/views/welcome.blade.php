@extends('layouts.layout')

@section('title', 'Queen Pizza')

@section('content')
<div class="row">
  <div class="column">
    <h1>Dine-in</h1>
    <img
      src="{{URL('img/background-g04609968a_1920.jpg')}}"
      alt="menu"
      height="300"
      width="300"
    />
    <p>
      Whatever your festive mood, <br />
      we've got the food.<br>
      <button onclick="window.location.href='products';" >View menu</button>
    </p>
  </div>
  <div class="column">
    <h1>Delivery & Collection</h1>
    <img
      src="{{URL('img/pizza-gde2560209_1920.jpg')}}"
      alt="Delivery & Collection"
      height="300"
      width="300"
    />
    <p>
      From us to your home. <br />
      Enjoy our pizza.<br />
      
      <button onclick="window.location.href='delivery';" >Delivery & Collection</button>
    </p>
  
    </div>
  </div>
  <div class="column">
    <h1>Cook at Home</h1>
    <img
      src="{{URL('img/pizza-g0b87a021c_1920.jpg')}}"
      alt="Cook at home"
      height="300"
      width="300"
    />
    <p>
      Find your favourite meals. <br />
      Enjoy our recipes.<br />
      <button onclick="window.location.href='cook at home';" >Cook at Home</button>
    </p>
  </div>
  <br>
  <div class="column">
    <h1>Festive Flavours.</h1>
    <img src="{{URL('img/pizza-g82a9b0ae4_1920.jpg')}}" alt="christmas" height="300" width="300">
    <p>Festive mood<br>
    <button onclick="window.location.href='restaurant';">Christmas</button></p>
  </div>
  <div class="column">
    <h1>Booking</h1>
    <img src="{{URL('img/reservation-5421878_1920.jpg')}}" alt="booking" height="300" width="300">
    <p>Booking a table.<br>
      <button onclick="window.location.href='booking';">Booking</button></p>
  </div>
  <div class="column">
    <h1>Restaurant</h1>
    <img src="{{URL('img/restaurant-1560137_1920.png')}}" alt="restaurant" height="300" width="300">
    <p>Restaurant location.<br>
      <button onclick="window.location.href='restaurant';">Restaurant</button></p>
  </div>
</div>
<p class="msg"> {{ session('msg') }} </p>
{{-- <a href="/pizzas/create"><strong class="order">Order a Pizza</strong></a>  --}}
    @endsection