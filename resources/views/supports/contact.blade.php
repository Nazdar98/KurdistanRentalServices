@extends('layouts.main')
@section('title', 'Contact Us')

<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
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

        <form action="{{url('store-form')}}" method="POST">
          @csrf

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name="name" class=" form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" name="email" class=" form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" name="message" class=" form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>100 Street Peshawa Qazi, <br>Erbil 44001
          </p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +964 750 123 4567</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> Kurdistan.rental.service.co</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>