<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemnasController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PartnerController;

Route::get('/', function () {
    return view('home', ['pagename' => 'Home']);
});


// partner
Route::get('/partner-with-us', function () {
    return view('partner', ['pagename' => 'Partner']);
});

// Payment form TODO : NEEDED TO BE CHANGE
Route::get('/payment', function () {
    return view('events.payment', ['pagename' => 'Payment-Form']);
});

Route::post('/partner-with-us', [PartnerController::class, 'store']);

// profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth');
Route::get('/profile-edit', [ProfileController::class, 'editProfile'])->middleware('auth')->name('profile-edit');
Route::post('/profile-edit', [ProfileController::class, 'updateProfile'])->middleware('auth');

// register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// verify
Route::get('/email/verify', [RegisterController::class, 'verifyEmail'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'emailVerificationHandler'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verify', [RegisterController::class, 'resendEmailVerification'])->middleware(['auth'])->name('verification.send');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// google
Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google-auth')->middleware('guest');
Route::get('auth/google/call-back', [GoogleController::class, 'callbackGoogle']);

// forgot password
Route::get('/forgot-password', [ResetPasswordController::class, 'index'])->middleware('guest');
Route::post('/forgot-password', [ResetPasswordController::class, 'sendResetLink'])->middleware('guest');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->middleware('guest');

// Event Route
Route::get('/technopreneur', function () {
    return view('events.techno', ['pagename' => 'Technopreneur']);
});
Route::get('/grand-opening', function () {
    return view('events.grand-opening', ['pagename' => 'Grand Opening']);
});

Route::get('/last-act', function () {
    return view('events.last-act', ['pagename' => 'Last Act']);
});

// Competition Route
Route::get('/competitive-programming', function () {
    return view('competitions.compro', ['pagename' => 'Comprog']);
});
Route::get('/data-analysis-competition', function () {
    return view('competitions.data', ['pagename' => 'DAC']);
});
Route::get('/capture-the-flag', function () {
    return view('competitions.cft', ['pagename' => 'CTF']);
});
Route::get('/informatics-competition', function () {
    return view('competitions.informatics', ['pagename' => 'InCo']);
});
Route::get('/web-development-competition', function () {
    return view('competitions.web', ['pagename' => 'WebDev']);
});
