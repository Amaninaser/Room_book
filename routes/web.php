
<?php

use App\Http\Controllers\Admin\RoomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RoomController;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

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

Route::namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
    ->middleware('auth', 'user.type:admin')
    ->group(function () {
        Route::resource('users', 'UserController');
        Route::resource('rooms', 'RoomsController');
        Route::resource('roles', 'RolesController');
        Route::get('contact', [ContactController::class, 'index'])->name('index');
    });  
    Route::resource('admin/reservations', 'ReservationController');
    Route::get('admin/show', [UserController::class, 'show'])->name('admin.show');
    Route::get('myprofile/show', [UserController::class, 'user'])->name('myprofile/show.show');


Route::get('/reservationForm', [ReservationController::class, 'create'])->name('reservationForm');
Route::post('/reservationForm', [ReservationController::class, 'store'])->name('reservationForm.store');
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('room', [App\Http\Controllers\indexController::class, 'room'])->name('room');
Route::get('room/{slug}', [RoomController::class, 'show'])->name('room.show');

Route::get('/hotels', 'HotelController@index');
Route::get('/', [indexController::class, 'index']);

Route::get('/about', function(){
   return view('/admin/about'); 
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
