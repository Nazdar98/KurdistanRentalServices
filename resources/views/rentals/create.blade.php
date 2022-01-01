@extends('layouts.admin')
@section('title', 'Add Rental')

<div id="contact" style="margin:0 auto;margin-top: 6%;">
  <div class="container">
    <div class="col-md-10">
      <div class="row">
        <div class="section-title">
          <h2>Add Rental</h2>
          <p>Please fill out the form below to add a rental.</p>
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

        <form action="{{url('rental-form')}}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Rental Name</label>
                <input type="text" id="house_name" name="house_name" class="form-control" placeholder="rental name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Owner Name</label>
                <input type="text" id="owner" name="owner" class="form-control" placeholder="owner name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" id="address" name="address" class=" form-control" placeholder="address" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" id="city" name="city" class=" form-control" placeholder="city" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Price Per Day</label>
                <input type="text" id="price_per_day" name="price_per_day" class=" form-control" placeholder="price per day" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Features</label>
                <input type="text" id="features" name="features" class=" form-control" placeholder="features" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="house_image" class="form-control">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Availability</label>
                <input type="checkbox" name="rental_availability" value="1" class="form-check-input" checked>
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Descritpion</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </form>
      </div>
    </div>

  </div>
</div>