@extends('layouts.admin')
@section('title', 'Customers')

<div id="services" class="container" style="margin:0 auto;margin-top: 6%;">
  <div class="section-title">
    <h2>Customers</h2>
  </div>
  <div class="row">
    <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <td>Customer Name</td>
            <td>Email</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>
              <!-- <a href="rentals-admin/edit/{{$customer->id}}"><i class="fas fa-pencil-alt"></i></a> -->
              <a href="rentals-admin/delete/{{$customer->id}}" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>