
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RoomController;

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
        Route::resource('contact', 'ContactController');
    });


Route::resource('admin/reservations', 'ReservationController');
Route::get('admin/show', [UserController::class, 'show'])->name('admin.show');
Route::get('myprofile/show', [UserController::class, 'user'])->name('myprofile/show');

Route::get('myprofile/reservations',  [ReservationController::class, 'user'])->name('myprofile/reservations');

Route::get('/reservationForm', [ReservationController::class, 'create'])->name('reservationForm')->middleware('auth', 'user.type:user');
Route::post('/reservationForm', [ReservationController::class, 'store'])->name('reservationForm.store')->middleware('auth', 'user.type:user');
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('room', [App\Http\Controllers\indexController::class, 'room'])->name('room');
Route::get('room/{slug}', [RoomController::class, 'show'])->name('room.show');

Route::get('/', [indexController::class, 'index']);

Route::get('/about', function () {
    return view('/admin/about');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

//require __DIR__ . '/auth.php';
