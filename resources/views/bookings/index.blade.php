@extends('layouts.admin')
@section('title', 'Bookings')

<!-- Services Section -->
<div id="services" style="margin:0 auto;margin-top: 6%;width:80%;">>
  <div class="container">
    <div class="section-title">
      <h2>Bookings</h2>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>Customer Name</td>
          <td>Email</td>
          <td>Rental</td>
          <td>Arrival Date</td>
          <td>Departure Date</td>
          <td>Total Amount</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
        @foreach($bookingData as $booking)
        <tr>
          <td>{{ $booking->name }}</td>
          <td>{{ $booking->email }}</td>
          <td>{{ $booking->rental }}</td>
          <td>{{ $booking->arrival_date }}</td>
          <td>{{ $booking->departure_date }}</td>
          <td><sub>IQD</sub>{{ $booking->total_price }}</td>
          <td>
            <a href="/bookings/delete/{{$booking->id}}"><i class="fas fa-trash-alt"></i></a>
            <!-- <a href="bookings/edit/{{$booking->id}}"><i class="fas fa-pencil-alt"></i></a> -->
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <td colspan="3">{{ $bookingData->links() }}</td>
      </tfoot>
    </table>
  </div>
</div>
</div>