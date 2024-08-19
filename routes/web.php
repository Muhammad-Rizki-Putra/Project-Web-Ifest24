<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemnasController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ProfileController;



Route::get('/', function () {
    return view('home', ['pagename' => 'home']);
});

Route::get('/partner-with-us', function () {
    return view('partner', ['pagename' => 'partner']);
});


// profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth');
Route::get('/profile-edit', [ProfileController::class, 'editProfile'])->middleware('auth')->name('profile-edit');
Route::post('/profile-edit', [ProfileController::class, 'updateProfile'])->middleware('auth');

// register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

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
Route::get('/seminar-nasional', [SemnasController::class, 'index'])->name('semnas');
Route::get('/technopreneur', function () {
    return view('events.techno', ['pagename' => 'techno']);
});
Route::get('/grand-opening', function () {
    return view('events.grand-opening', ['pagename' => 'grand-opening']);
});

Route::get('/last-act', function () {
    return view('events.last-act', ['pagename' => 'last-act']);
});

// Competition Route
Route::get('/competitive-programming', function () {
    return view('competitions.compro', ['pagename' => 'compro']);
});
Route::get('/data-analysis-competition', function () {
    return view('competitions.data', ['pagename' => 'data']);
});
Route::get('/capture-the-flag', function () {
    return view('competitions.cft', ['pagename' => 'ctf']);
});
Route::get('/informatics-competition', function () {
    return view('competitions.informatics', ['pagename' => 'informatics']);
});
Route::get('/web-development-competition', function () {
    return view('competitions.web', ['pagename' => 'webdev']);
});
