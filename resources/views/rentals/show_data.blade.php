@extends('layouts.main')
@section('title', 'Rentals')

<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>{{ $rentalData->house_name }}</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="service-media"><img src="/uploads/{{ $rentalData->house_image }}" alt=" "></div>
      </div>
      <div class="col-md-6">
        <div class="service-desc">
          <h3>Owner: {{ $rentalData->owner }}</h3>
          <address>{{ $rentalData->address }}</address>
          <p>{{ $rentalData->city }}</p>
          <p>Price per month: <sub>IQD</sub>{{ $rentalData->price_per_day }}</p>
          <p style="color:red;">Available</p>
          <p>Description: {{$rentalData->description}}</p>
          <p>Features:</p>
          <p style="font-style:italic; font-weight:bold;">{{$rentalData->features}}</p>
        </div>
        <a href="booking_new/{{ $rentalData->id }}" class="btn btn-custom btn-lg">Apply for Booking</a>
      </div>
    </div>
  </div>
</div>