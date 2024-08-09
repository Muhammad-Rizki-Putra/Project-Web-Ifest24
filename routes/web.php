<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemnasController;


Route::get('/', function () {
    return view('home');
});

Route::get('/partner-with-us', function () {
    return view('partner');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

// Event Route
Route::get('/seminar-nasional', [SemnasController::class, 'index'])->name('semnas');
Route::get('/technopreneur', function () {
    return view('events.techno');
});
Route::get('/grand-opening', function () {
    return view('events.grand-opening');
});

Route::get('/last-act', function () {
    return view('events.last-act');
});


// Competition Route
Route::get('/competitive-programming', function () {
    return view('competitions.compro');
});
Route::get('/data-analysis-competition', function () {
    return view('competitions.data');
});
Route::get('/capture-the-flag', function () {
    return view('competitions.cft');
});
Route::get('/informatics-competition', function () {
    return view('competitions.informatics');
});
Route::get('/web-development-competition', function () {
    return view('competitions.web');
});
