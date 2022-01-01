@extends('layouts.admin')
@section('title', 'Rentals')

<!-- rentals Section -->
<div id="services" style="margin-top:5%;">
  <div class="container">
    <div class="section-title">
      <h2>Our Rentals</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Rental Image</td>
              <td>Rental Name</td>
              <td>Owner</td>
              <td>Address</td>
              <td>City</td>
              <td>Price/Day</td>
              <td>Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($rentalData as $rental)
            <tr>
              <td class="w-25"><img src="/uploads/{{$rental->house_image}}" alt="{{$rental->house_name}}" class="img-fluid img-thumbnail"></td>
              <td>{{ $rental->house_name }}</td>
              <td>{{ $rental->owner }}</td>
              <td>{{ $rental->address }}</td>
              <td>{{ $rental->city }}</td>
              <td>IQD {{ $rental->price_per_day }}</td>
              <td>
                <a href="delete-rentals/{{$rental->id}}" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash-alt"></i></a>
                <!-- <a href="rentals-admin/edit/{{$rental->id}}"><i class="fas fa-pencil-alt"></i></a> -->
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <td colspan="7">{{ $rentalData->links() }}</td>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>