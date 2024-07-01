<?php

use App\Http\Controllers\Admin\AdminBookingController;
use Illuminate\Http\Request;
use App\Http\Middleware\CekLevel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Admin\AdminLayananController;
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Landing\LandingAboutController;
use App\Http\Controllers\Landing\LandingBookingController;
use App\Http\Controllers\Landing\LandingContactController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\LandingDetailController;
use App\Http\Controllers\Landing\LandingReviewController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::get('/', [LandingController::class, 'index']);
Route::get('/about', [LandingAboutController::class, 'index']);
Route::get('/review', [LandingReviewController::class, 'index']);
Route::get('/contact', [LandingContactController::class, 'index']);
Route::get('/detail', [LandingDetailController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

// Verified Email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Verifikasi email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

// Mengirim ulang link verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Tautan verifikasi telah dikirim ulang!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/verify-email', function () {
    return view('auth.verify-email');
});

Route::group(['middleware' => ['auth', 'verified']], function () {

    // Review
    Route::get('/review', [LandingReviewController::class, 'index'])->name('review.index');
    Route::post('/review/store', [LandingReviewController::class, 'store'])->name('review.store');

    Route::get('/bookinghome', [LandingBookingController::class, 'index'])->name('bookinghome.index');
    Route::get('/bookinghome/generatepdf/{id}', [LandingBookingController::class, 'generatepdf'])->name('bookinghome.generatepdf');
    Route::get('/bookinghome/riwayat', [LandingBookingController::class, 'riwayat'])->name('bookinghome.riwayat');
    Route::get('/bookinghome/confirm', [LandingBookingController::class, 'confirm'])->name('bookinghome.confirm');
    Route::post('/bookinghome/store', [LandingBookingController::class, 'store'])->name('bookinghome.store');
    Route::post('/bookinghome/updatesetuju/{id}', [LandingBookingController::class, 'updatesetuju'])->name('bookinghome.updatesetuju');
    Route::post('/bookinghome/updatebatal/{id}', [LandingBookingController::class, 'updatebatal'])->name('bookinghome.updatebatal');
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting/updateprofile', [SettingController::class, 'updateprofile'])->name('setting.updateprofile');
    Route::post('/setting/updateemail', [SettingController::class, 'updateemail'])->name('setting.updateemail');
    Route::post('/setting/updatepassword', [SettingController::class, 'updatepassword'])->name('setting.updatepassword');
    Route::post('/setting/updategambar', [SettingController::class, 'updategambar'])->name('setting.updategambar');
    Route::post('/setting/hapusgambar', [SettingController::class, 'hapusgambar'])->name('setting.hapusgambar');

    // Admin
    Route::group(['middleware' => [CekLevel::class . ':Admin']], function () {

        // Data Review
        Route::get('/data-review', [AdminReviewController::class, 'index'])->name('data-review.index');

        // Data Booking
        Route::get('/data-booking', [AdminBookingController::class, 'index'])->name('data-booking.index');

        // Data Layanan
        Route::get('/data-layanan', [AdminLayananController::class, 'index'])->name('data-layanan.index');
        Route::get('/data-layanan/create', [AdminLayananController::class, 'create'])->name('data-layanan.create');
        Route::get('/data-layanan/edit/{id}', [AdminLayananController::class, 'edit'])->name('data-layanan.edit');
        Route::post('/data-layanan/store', [AdminLayananController::class, 'store'])->name('data-layanan.store');
        Route::post('/data-layanan/update/{id}', [AdminLayananController::class, 'update'])->name('data-layanan.update');
        Route::post('/data-layanan/destroy/{id}', [AdminLayananController::class, 'destroy'])->name('data-layanan.destroy');

        // User registrasi
        Route::get('/data-user', [AdminUserController::class, 'index'])->name('data-user.index');
        Route::get('/data-user/create', [AdminUserController::class, 'create'])->name('data-user.create');
        Route::get('/data-user/edit/{id}', [AdminUserController::class, 'edit'])->name('data-user.edit');
        Route::post('/data-user/store', [AdminUserController::class, 'store'])->name('data-user.store');
        Route::post('/data-user/update/{id}', [AdminUserController::class, 'update'])->name('data-user.update');
        Route::post('/data-user/destroy/{id}', [AdminUserController::class, 'destroy'])->name('data-user.destroy');
    });
});

