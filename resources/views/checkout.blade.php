@extends('layouts.layout')

 @push('styles')
 <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
 @endpush

 @section('title', 'checkout')
 @section('content')

 
<!-- Checkout Start -->
<div class="container-fluid pt-3">
<div class="container">
<!-- Checkout -->
<section class="my-2 py-3 checkout">
    <div class="container text-center mt-1 pt-5">
 <h2>Check Out</h2>
<hr class="mx-auto">
    </div>
     <div class="mx-auto container">
    <form id="checkout-form" method="GET" action="{{route('place_order')}}">
     @csrf    
 <div class="form-group checkout-small-element">
<label for="">Name</label>
<input type="text" class="form-control" id="checkout-name" name="name" placeholder="name" required>
</div>

 <div class="form-group checkout-small-element">
<label for="">Email</label>
<input type="email" class="form-control" id="checkout-email" name="email" placeholder="email address" required>
 </div>

<div class="form-group checkout-small-element">
<label for="">Phone</label>
<input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
</div>

<div class="form-group checkout-small-element">
<label for="">City</label>
<input type="text" class="form-control" id="checkout-city" name="city" placeholder="city" required>
</div>

<div class="form-group checkout-large-element">
<label for="">Address</label>
<input type="text" class="form-control" id="checkout-address" name="address" placeholder="address" required>
 </div>

 
 @if(Session::has('total'))
 @if(Session::get('total') !=null)
<div class="form-group checkout-btn-container">
 <p>Total amount: ${{Session::get('total')}}</p>
<input type="submit" class="btn" id="checkout-btn" name="checkout_btn" value="Checkout">
</div>
@endif
@endif
 </form>
</div>
</section>
</div>
</div>
<!-- Cart End -->
@endsection
 