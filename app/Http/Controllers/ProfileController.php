<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', ['pagename' => 'Profile', 'user' => $user]);
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile-edit', [
            'pagename' => 'Edit Profile',
            'user' => $user,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->birth_date = $request->input('birth_date');
        $user->education_level = $request->input('education_level');
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }
}