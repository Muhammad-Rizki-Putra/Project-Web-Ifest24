<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register', ['pagename' => 'register']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required_with:password|same:password|min:8|nullable',
            'fullname' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'education_level' => 'required|string',
            'ifest_info' => 'required|array',
            // 'ifest_info.*' => 'required|string',
        ]);

        $validator->after(function ($validator) {
            if ($validator->errors()->has('password_confirmation')) {
                $validator->errors()->forget('password');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'fullname' => $request->fullname,
            'birth_date' => $request->birth_date,
            'education_level' => $request->education_level,
            'ifest_info' => json_encode($request->ifest_info),
        ]);
        
        return redirect()->route('login')->with('success', 'Registration successful, please login!');
    }
}