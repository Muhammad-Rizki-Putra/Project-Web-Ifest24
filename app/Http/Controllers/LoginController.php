<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


class LoginController extends Controller
{
    public function index()
    {
        return view('login', ['pagename' => 'login']);
    }
    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'account' => 'required|email:dns|string|max:255',
            'password' => 'required|string',
        ]);

        // $user = User::where('email', $validatedData['account'])->orWhere('username', $validatedData['account'])->first();

        // if (!$user) {
        //     return redirect()->back()->withErrors(['account' => 'User is not registered']);
        // }

        if (!Auth::attempt(['email' => $validatedData['account'], 'password' => $validatedData['password']])) {
            return redirect()->back()->withErrors(['password' => 'Login Failed.']);
        }

        $request->session()->regenerate();

        $redirectTo = $request->input('redirect') ?? '/';
        return redirect()->intended($redirectTo);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
