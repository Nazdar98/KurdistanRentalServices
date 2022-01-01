<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Rental;
use App\Models\Customer;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            return redirect('dashboard');
        }

        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $bookingCount = Booking::getBookingsCount();
        $rentalsCount = Rental::getRentalsCount();
        $customerCount = Customer::getCustomersCount();
        $total_price = Booking::getTotalBookingAmount();

        return view('dashboard')
            ->with('bookingCount', $bookingCount)
            ->with('rentalsCount', $rentalsCount)
            ->with('customerCount', $customerCount)
            ->with('total_price', $total_price);
    }
}
