@extends('layouts.admin')
@section('title', 'Customers')

<div id="services" class="container" style="margin:0 auto;margin-top: 6%;">
  <div class="section-title">
    <h2>Customers' Booking LOG</h2>
  </div>
  <div class="row">
    <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Customer Name</td>
            <td>Email</td>
            <td>Rental</td>
            <td>Arrival Date</td>
            <td>Departure Date</td>
            <td>Price Per Day</td>
            <td>Owner Name</td>
            <td>City</td>
            <!-- <td>Action</td> -->
          </tr>
        </thead>
        <tbody>
          @foreach($customerData as $customer)
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->rental}}</td>
            <td>{{$customer->arrival_date}}</td>
            <td>{{$customer->departure_date}}</td>
            <td>{{$customer->total_price}}</td>
            <td>{{$customer->owner}}</td>
            <td>{{$customer->city}}</td>
            <!-- <td>
              <a href="customers/delete/{{$customer->id}}" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash-alt"></i></a>
            </td> -->
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>