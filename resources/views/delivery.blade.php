@extends('layouts.layout')

@section('title', 'Delivery')

@section('content')

<main>
    <h2>Delivery</h2>
    <p1>
      Our pizza. Your sofa.You can order via Deliveroo, Just Eat or UberEats.
    </p1>
  </main>
 <div class="row">
<div class="column">
 <h1>Delivero</h1>
 <p>
 <img
    src="{{URL('img/Deliveroo_logo_800x518_TEAL.jpg')}}"
          alt="image"
          height="300"
          width="300"/>
<button onclick="window.location.href='https://www.glovoapp.com/romania';">Order Now</button>
 </p>
</div>
 <div class="column">
 <h1>Just Eat</h1>
<p>
 <img
   src="{{URL('img/Just Eat Bigger.jpg')}}"
   alt="image"
   height="300"
  width="300"
        />

 <button onclick="window.location.href='https://www.takeaway.com';">Order Now</button>
 </p>
</div>
<div class="column">
<h1>Uber Eats</h1>
<p>
 <img
   src="{{URL('img/Uber Eats Bigger.jpg')}}"
    alt="image"
    height="300"
    width="300"
        />
 <button onclick="window.location.href=' https://www.takeaway.com';">Order Now</button>
  </p>
</div>
  </div>
  @endsection