<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;
use App\Http\Requests\ImageUploadRequest;
use DB;

class RentalsController extends Controller
{
    /**
     * Display a listing of the houses for customers 
     * to choose and order for rent.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentalData = Rental::getRentalData();

        return view('rentals.index')->with("rentalData", $rentalData);
    }

    public function index_admin()
    {
        $rentalData = Rental::getAdminRentalData();

        return view('rentals.index_admin')->with("rentalData", $rentalData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $rentalData = Rental::findById($id);
        // 
        // return view('rentals.show')->with("rentalData", $rentalData); //, compact('rentalData'));
        // // return view('rentals.show', ['rentalData' => $rentalData]);
        $data = Rental::find($id);

        return view('rentals.show_data', ['rentalData' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rentals.create');
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
            'house_name' => 'required',
            'owner' => 'required',
            'address' => 'required',
            'city' => 'required',
            'price_per_day' => 'required',
            'features' => 'required',
            'description' => 'required',
            'house_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('house_image')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['house_image'] = "$profileImage";
        }

        Rental::create($input);

        return back()
            ->with('success', 'Rental added sent successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from rental where id = ?', [$id]);
        $rentalData = Rental::getAdminRentalData();

        return view('rentals.index_admin')->with("rentalData", $rentalData);
    }
}
