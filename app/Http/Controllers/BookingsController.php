<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rental;
use Illuminate\Http\Request;
use DB;
use DateTime;

class BookingsController extends Controller
{
    /**
     * Display a listing of the bookings 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingData = Booking::getBookingData();

        return view('bookings.index')->with("bookingData", $bookingData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rental' => 'required',
            'email' => 'required',
            'message' => 'required',
            'arrival_date' => 'required',
            'departure_date' => 'required',
            'total_price' => 'required'
        ]);

        $input = $request->all();

        $date1 = new DateTime($input['departure_date']);
        $date2 = new DateTime($input['arrival_date']);
        $interval = $date1->diff($date2);
        $days = $interval->days;
        $rental = $input['rental'];
        $price_per_day = Rental::get_price_per_day($rental);

        $total_price = $days * $price_per_day;
        $customer_id = $input['customer_id'];
        $rental_id = $input['rental_id'];

        $booking = new Booking();
        $booking->name = $request->name;
        $booking->rental = $request->rental;
        $booking->arrival_date = $request->arrival_date;
        $booking->departure_date = $request->departure_date;
        $booking->email = $request->email;
        $booking->message = $request->message;
        $booking->total_price = $total_price;
        $booking->customer_id = $customer_id;
        $booking->rental_id = $rental_id;
        $booking->save();

        return back()
            ->with('success', 'Your Booking information submitted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Rental::find($id);
        // print_r($data);
        return view('bookings.apply_now', ['rental_data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from booking where id = ?', [$id]);
        $bookingData = Booking::getBookingData();

        return view('bookings.index')->with("bookingData", $bookingData);
    }
}
