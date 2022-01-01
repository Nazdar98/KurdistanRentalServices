<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Auth::routes();


// frontend
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']); //->name('home');
Route::get('/about', [App\Http\Controllers\SupportsController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\SupportsController::class, 'create']);
Route::post('/store-form', [App\Http\Controllers\SupportsController::class, 'store']);
Route::get('/rentals', [App\Http\Controllers\RentalsController::class, 'index']);
Route::get('/rentals/{id}', [App\Http\Controllers\RentalsController::class, 'show']);
Route::post('/new-booking', [App\Http\Controllers\BookingsController::class, 'store'])->middleware('auth');
Route::get('/rentals/booking_new/{id}', [App\Http\Controllers\BookingsController::class, 'show'])->middleware('auth');
//Route::get('/rentals', [App\Http\Controllers\RentalsController::class, 'index'])->middleware('auth');



// dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/bookings', [App\Http\Controllers\BookingsController::class, 'index'])->middleware('admin');
Route::get('/rentals-admin', [App\Http\Controllers\RentalsController::class, 'index_admin'])->middleware('admin');
Route::get('/add-rental', [App\Http\Controllers\RentalsController::class, 'create'])->middleware('admin');
Route::get('/customers', [App\Http\Controllers\CustomersController::class, 'index'])->middleware('admin');
Route::get('/customers/delete/{id}', [App\Http\Controllers\CustomersController::class, 'destroy'])->middleware('admin');
Route::get('/customers-bookings', [App\Http\Controllers\CustomersController::class, 'customers_bookings'])->middleware('admin');
Route::get('/bookings/delete/{id}', [App\Http\Controllers\BookingsController::class, 'destroy'])->middleware('admin');
Route::post('/rental-form', [App\Http\Controllers\RentalsController::class, 'store'])->middleware('admin');
Route::get('/delete-rentals/{id}', [App\Http\Controllers\RentalsController::class, 'destroy'])->middleware('admin');
// Route::get('/delete-booking-log/{id}', [App\Http\Controllers\CustomersController::class, 'destroy'])->middleware('admin');


//Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');
