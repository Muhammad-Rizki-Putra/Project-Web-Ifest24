<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemnasController;


Route::get('/', function () {
    return view('home', ['pagename' => 'home']);
});

Route::get('/partner-with-us', function () {
    return view('partner', ['pagename' => 'partner']);
});

Route::get('/register', function () {
    return view('register', ['pagename' => 'register']);
});

Route::get('/login', function () {
    return view('login', ['pagename' => 'login']);
});

// Event Route
Route::get('/seminar-nasional', [SemnasController::class, 'index'])->name('semnas');
Route::get('/technopreneur', function () {
    return view('events.techno' , ['pagename' => 'techno']);
});
Route::get('/grand-opening', function () {
    return view('events.grand-opening', ['pagename' => 'grand-opening']);
});

Route::get('/last-act', function () {
    return view('events.last-act', ['pagename' => 'last-act']);
});

Route::get('/last-act', function () {
    return view('events.last-act', ['pagename' => 'last-act']);
});


// Competition Route
Route::get('/competitive-programming', function () {
    return view('competitions.compro' , ['pagename' => 'compro']);
});
Route::get('/data-analysis-competition', function () {
    return view('competitions.data', ['pagename' => 'data']);
});
Route::get('/capture-the-flag', function () {
    return view('competitions.cft' , ['pagename' => 'ctf']);
});
Route::get('/informatics-competition', function () {
    return view('competitions.informatics' , ['pagename' => 'informatics']);
});
Route::get('/web-development-competition', function () {
    return view('competitions.web', ['pagename' => 'webdev']);
});
