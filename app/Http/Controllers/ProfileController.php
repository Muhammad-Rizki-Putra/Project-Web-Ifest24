<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $isRegistered = Event::where('user_id', $user->id)->exists();
        return view('profile', ['pagename' => 'Profile', 'user' => $user, 'isRegistered' => $isRegistered]);
    }

    public function editProfile()
    {
        $user = Auth::user();
        $emailVerified = !is_null($user->email_verified_at);
        $ifestInfo = $user->ifest_info ? explode(',', $user->ifest_info) : [];

        return view('profile-edit', [
            'pagename' => 'Edit Profile',
            'user' => $user,
            'emailVerified' => $emailVerified,
            'oldIfestInfo' => old('ifest_info', $ifestInfo),
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'birth_date' => 'nullable|date',
            'education_level' => 'nullable|string|max:255',
            'institution' => 'nullable|string',
        ]);

        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->birth_date = $request->input('birth_date');
        $user->education_level = $request->input('education_level');
        $user->institution = $request->input('institution');

        /** @var \App\Models\User $user **/
        $user->save();

        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }
}
