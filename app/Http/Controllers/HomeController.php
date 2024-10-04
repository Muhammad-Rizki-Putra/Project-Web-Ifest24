<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $isRegistered = $user ? Event::where('user_id', $user->id)->exists() : false;
        return view('home', ['pagename' => 'home', 'isRegistered' => $isRegistered]);
    }
}
