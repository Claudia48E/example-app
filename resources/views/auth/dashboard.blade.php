@extends('layouts.layouts')


@section('title', 'Dashboard')


@section('content')
<div class="container">
<div class="row justify-content-center mt-5">
<div class="col-md-8">
<div class="card">
<h1>Dashboard</h1>
<div class="card-body">
    @if ($message = Session::get('success'))
<div class="alert alert-success">
{{ $message }}
</div>
 @else
    <div class="alert alert-success">
   <h1> You are logged in!</h1>
</div>       
@endif                
</div>
</div>
</div>    
</div>
</div>   
@endsection
