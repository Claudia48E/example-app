@extends('layouts.layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/payment.css')}}"
@endpush

@section('title', 'Payment')

@section('content')

<section class="container mt-2 my-3 py-5">
    <div class="container mt-2 text-center">
    <h2>Payment</h2>

@if(Session::has('total') && Session::get('total') !=null)
@if(Session::has('order_id') && Session::get('order_id') !=null)
    <h2 style="color:rgb(35, 10, 59)" class="my-5">Total: ${{Session::get('total')}}</h2>
    
    <button class="button" onclick="window.location.href='http://127.0.0.1:8000/stripe';">Stripe Payment</button>
    
    @endif
    @endif
    </div>


@endsection