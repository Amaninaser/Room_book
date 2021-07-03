<?php

use App\Http\Controllers\Admin\RoomsController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
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

// Route::get('/admin/rooms/create', [RoomsController::class,'create']);
// Route::post('/admin/rooms/create', [RoomsController::class,'store']);


Route::resource('admin/reservations','ReservationController');

Route::resource('admin/guests','Admin\GuestsController');

Route::resource('admin/rooms','Admin\RoomsController');



 Route::get('/admin/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('index');


 Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
 Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');


Route::view('/', 'reservationForm'); 
Route::get('/hotels', 'HotelController@index'); 
// Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name('auth0-callback');
// Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
// Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');

Route::group(['prefix' => 'dashboard'], function() {
    Route::view('/', 'dashboard/dashboard');
    Route::get('reservations/create/{id}', [ReservationController::class,'create']);
    Route::resource('reservations', 'ReservationController')->except('create');
});
