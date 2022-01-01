<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Booking extends Model
{
    public $table = 'booking';

    public static function getBookingData()
    {
        //$value = DB::table('rental')->orderBy('id', 'asc')->get();
        $bookings = DB::table('booking')->paginate(10); //DB::select('select * from booking');

        return $bookings;
    }

    public static function getBookingsCount()
    {
        return DB::table('booking')->count();
    }

    public static function getTotalBookingAmount()
    {
        return DB::table("booking")->get()->sum("total_price");
    }

    protected $fillable = [
        'name',
        'rental',
        'email',
        'message',
        'arrival_date',
        'departure_date'
    ];

    use HasFactory;
}
