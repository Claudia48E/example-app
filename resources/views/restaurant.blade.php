@extends('layouts.layout')

@push('styles')
<link rel="stylesheet" href="{{asset('css/restaurant.css')}}"
@endpush


@section('title', 'Restaurant')

@section('content')


<h1 class="multiple">Restaurant location</h1>
<div class="grid-container">
  <div class="grid-child-purple">
    <div class="contact-us-opening-hours">
      <h3 class="contact-us-opening-hours__subheading">Opening Hours</h3>
      <table class="contact-us-opening-hours__weekly-schedule">
        <tbody>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Monday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Tuesday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Wednesday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Thursday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Friday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Saturday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
          <tr class="contact-us-opeaning-hours__daily-schedule">
            <th class="contact-us-opeaning-hours__day">Sunday</th>
            <td class="contact-us-opeaning-hours__times">11:30 - 00:45</td>
          </tr>
        </tbody>
      </table>
      <p class="contact-us-opeaning-hours__disclaimer">
        Delivery times may vary
      </p>
    </div>
    
    <div
      class="contact-us-delivery-areas"
      style="--best-font-size: 4rem"
    >
    <div class="contact-us-delivery-areas__wrapper">
      <div class="contact-us-delivery-areas__text"></div>
      </div>
    </div>
  </div>
  <div class="grid-child-green">
    <h3 class="contact-us__title">Find us</h3>
<div class="contact-us__branches">
<div class="contact-us__branch">
  <div class="contact-us-location">
    
 
    <div class="contact-us-location__map-container">
      <iframe
        class="contact-us-location__map"
        tabindex="-1"
        allow="fullscreen"
        data-map-address="Mioritei Bacau"
        data-map-locale="en-Ro"
        data-map-place-id
        title="Map"
        src="https://maps.google.com/maps?q=bacau%20romania&t=&z=13&ie=UTF8&iwloc=&output=embed"
      >
        #document
      </iframe>
    </div>
  </div>
  </div>
</div>
@endsection