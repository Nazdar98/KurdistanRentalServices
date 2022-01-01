<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Rental extends Model
{
    public $table = 'rental';

    public static function getRentalData()
    {
        //$value = DB::table('rental')->orderBy('id', 'asc')->get();
        $rentals = DB::table('rental')->get(); //DB::select('select * from rental');

        return $rentals;
    }

    public static function getAdminRentalData()
    {
        //$value = DB::table('rental')->orderBy('id', 'asc')->get();
        $rentals = DB::table('rental')->paginate(4); //DB::select('select * from rental');

        return $rentals;
    }

    public static function findById($id)
    {
        // $rental = DB::table('rental')->find($id);
        return DB::select('select * from rental where id = ?', [$id]);
    }

    public static function get_price_per_day($rental)
    {
        // $rental = DB::table('rental')->find($id);
        return DB::table('rental')->where('house_name', $rental)->value('price_per_day');
    }

    public static function getRentalsCount()
    {
        return DB::table('rental')->count();
    }

    protected $fillable = [
        'house_name',
        'owner',
        'address',
        'city',
        'house_image',
        'price_per_day',
        'start_date',
        'end_date',
        'rental_availability',
        'description',
        'features'
    ];

    use HasFactory;
}
