@extends('layouts.layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/booking.css')}}">
@endpush

@section('title', 'Booking')

@section('content')

<main>
    <h2>Booking</h2>
    <p>Reserve your table.</p>
    <button onclick="window.location.href='restaurant';">Book now</button>
  </main>
  <br />
<div class="row">
<div class="column">
<img src="{{URL('img/happy-birthday-1786430.jpg')}}" height="400" width="400" />
 <h1>Pizza Party</h1>
<p>Pizza making parties for kids & grown-ups - perfect for special occasions!</p>
</div>
<div class="column">
  <img src="{{URL('img/kids.jpg')}}" height="400" width="400" />

<h1>School Visit</h1>
<p>Join us for a fun!</p>
 </div>
 <div class="column">
<img
  src="{{URL('img/happy-birthday-380178_1920.jpg')}}"
  height="400"
  width="400"
 />
<h1>Happy Birtday cupcakes</h1>
<p>Join us for a fun!</p>
</div>
  </div>
  @endsection