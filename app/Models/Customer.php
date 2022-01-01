<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Customer extends Model
{
    public $table = 'customers';

    public static function getCustomers()
    {
        return DB::table('users')->where('is_admin', '0')->orderBy('id', 'asc')->get();
    }

    public static function getCustomerData()
    {
        $customers = DB::select('select * from users u left join customers c on c.customer_id = u.id join booking b on b.customer_id = c.customer_id join rental r on r.id = b.rental_id');

        return $customers;
    }

    public static function getCustomersCount()
    {
        return DB::table('users')->where('is_admin', '0')->count();
    }

    protected $fillable = [
        'customer_id',
        'booking_id'
    ];

    use HasFactory;
}
