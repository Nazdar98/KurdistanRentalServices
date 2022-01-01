@extends('layouts.main')
@section('title', 'New Booking')

<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>New Booking</h2>
          <p>Please fill out the form below to apply for a new booking.</p>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        <form action="{{url('new-booking')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Customer Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{Auth::user()->name}}" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Selected Rental:</label>
                <input type="text" id="rental" name="rental" value="{{$rental_data->house_name}}" class="form-control" placeholder="Rental">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Arrival Date:</label>
                <input type="date" id="arrival_date" name="arrival_date" class="form-control" placeholder="" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Departure Date:</label>
                <input type="date" id="departure_date" name="departure_date" class="form-control" placeholder="" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Customer Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Customer Message:</label>
            <textarea name="message" id="message" name="message" class=" form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <input type="hidden" id="total_price" name="total_price" value="0" class="form-control" required="required">
          <input type="hidden" id="customer_id" name="customer_id" value="{{ Auth::user()->id }}" class="form-control" required="required">
          <input type="hidden" id="rental_id" name="rental_id" value="{{$rental_data->id}}" class="form-control" required="required">
          <button type="submit" class="btn btn-custom btn-lg">Apply Now</button>
        </form>
      </div>
    </div>
  </div>
</div>