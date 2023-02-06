@extends('layouts.layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/products.css')}}"
@endpush

@section('title', 'Menu')

@section('content')
<h2
 style="box-shadow: 0px 0px 5px 2px blue, 0px 0px 15px 10px rgb(85, 6, 65)">
      The Menu
</h2>
 
    @foreach($products as $product)
<div class="row">
  <div class="column">
<img src="{{asset('img/'.$product->image)}}"
          alt="Pizza Margherita"
          height="200"
          width="250" />
<p>{{$product->name}}<br />
Price ${{$product->price}}</p><form method="Get" action="{{ route('add_to_cart') }}">
            @csrf
<input type="hidden" name="id" value="{{$product->id}}">
<input type="hidden" name="name" value="{{$product->name}}">
<input type="hidden" name="price" value="{{$product->price}}">
<input type="hidden" name="quantity" value="1">
<input type="hidden" name="image" value="{{$product->image}}">
<input type="submit" value="Add-to-cart" class="btn btn-warning">
</form> 
</div>
@endforeach
   @endsection