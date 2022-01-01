@extends('layouts.admin')
@section('title', 'Dashboard')

<main class="container" style="margin-top:5%;">
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
      <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body" style="height:200px;">
            <h1>Bookings</h1>
            <h2 style="font-size:6em;text-align:right;">
              {{ $bookingCount }}
            </h2>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="card bg-warning text-white mb-4">
          <div class="card-body" style="height:200px;">
            <h1>Rentals</h1>
            <h2 style="font-size:6em;text-align:right;">
              {{ $rentalsCount }}
            </h2>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="card bg-success text-white mb-4">
          <div class="card-body" style="height:200px;">
            <h1>Total Earnings</h1>
            <h2 style="font-size:6em;text-align:right;">
              <sup>IQD</sup> {{ $total_price }}
            </h2>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6">
        <div class="card bg-danger text-white mb-4">
          <div class="card-body" style="height:200px;">
            <h1>Customers</h1>
            <h2 style="font-size:6em;text-align:right;">
              {{ $customerCount }}
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>