<?php

namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        // $user = Socialite::driver('google')->user();
        // dd($user);
        try {
            $user = Socialite::driver('google')->user();
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                $existingUser->update(['google_id' => $user->getId()]);
                Auth::login($existingUser, true);
            } else {
                $newUser = User::create([
                    'fullname' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                ]);

                Auth::login($newUser, true);

                // $newUser = User::create([
                //     'fullname' => $user->getName(),
                //     'email' => $user->getEmail(),
                //     'google_id' => $user->getId(),
                // ]);
            }

            return redirect('/');
        } catch (\Exception $e) {
            Log::error('Failed to authenticate with Google.', ['exception' => $e]);
            return redirect()->back()->withErrors(['google' => 'Failed to authenticate with Google.']);
        }
    }
}
