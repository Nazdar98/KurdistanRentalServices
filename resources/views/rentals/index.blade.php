@extends('layouts.main')
@section('title', 'Rentals')

<!-- rentals Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Rentals</h2>
    </div>
    <div class="row">
      @foreach($rentalData as $rental)
      <div class="col-md-4">
        <div class="service-media">
          <a href="/rentals/{{$rental->id}}" alt="{{$rental->house_name}}"><img src="/uploads/{{$rental->house_image}}" class="img-thumbnail" alt="{{$rental->house_name}}"> </a>
        </div>
        <div class="service-desc">
          <h3>{{ $rental->house_name }}</h3>
          <p>Price per month: <sub>IQD</sub>{{ $rental->price_per_day }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>