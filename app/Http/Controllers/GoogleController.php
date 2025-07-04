<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                $existingUser->update([
                    'google_id' => $user->getId(),
                    'email_verified_at' => Carbon::now(), 
                ]);
                Auth::login($existingUser);
                return redirect('/');
            } else {
                $newUser = User::create([
                    'fullname' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'email_verified_at' => Carbon::now(),
                ]);

                Auth::login($newUser);
                return redirect('/profile-edit');
            }
        } catch (\Exception $e) {
            Log::error('Failed to authenticate with Google.', ['exception' => $e]);
            return redirect()->back()->withErrors(['google' => 'Failed to authenticate with Google.']);
        }
    }
}
