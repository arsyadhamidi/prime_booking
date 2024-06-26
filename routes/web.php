<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pelanggan\PelangganReviewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/backend', function () {
    return view('backend.main');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);

Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact.contact');
})->name('contact');

Route::get('/bookinghome', function () {
    return view('frontend.booking.booking');
})->name('booking');

Route::get('/dashboard', function () {
    return view('frontend.booking.booking');
})->name('dashboard');

Route::get('/confirm/booking', function () {
    return view('frontend.booking.confirm');
})->name('confirm');

Route::get('/detail', function () {
    return view('frontend.detail.detail');
})->name('detail');

Route::get('/review', function () {
    return view('frontend.review.review');
})->name('review');

Route::post('/review', 'ReviewController@store')->name('review.submit');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/bookingadmin', function () {
    return view('backend.booking.index');
});

Route::get('/dashboard', function () {
    return view('backend.layouts.main');
});

Route::get('/datapelanggan', function () {
    return view('backend.datapelanggan.index');
});

Route::get('/dataservice', function () {
    return view('backend.dataservice.index');
});

Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');


