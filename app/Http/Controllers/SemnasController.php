<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Semnas;

class SemnasController extends Controller
{
    public function index()
    {
        $pagename = 'Semnas';
        $isLoggedIn = Auth::check();
        $isRegistered = $isLoggedIn && $this->getSemnasIdForUser(Auth::user()) ? true : false;
        $isVerified = $isLoggedIn && $this->checkVerifiedUser(Auth::user());
        return view('events.last-act', [
            'pagename' => $pagename,
            'isRegistered' => $isRegistered,
            'isVerified' => $isVerified,
            'isLoggedIn' => $isLoggedIn
        ]);
    }
    

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     $userId = Auth::id();

    //     if ($request->hasFile('payment_proof')) {
    //         $imagePath = $request->file('payment_proof')->store('images', 'public');
    //     }

    //     Event::create([
    //         'user_id' => $userId,
    //         'payment_proof' => $imagePath,
    //     ]);

    //     return redirect()->back()->with('success', 'Registrasi berhasil!');
    // }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:verifying,verified,rejected',
        ]);

        $event = Event::findOrFail($id);

        $event->status = $request->input('status');
        $event->save();

        return redirect()->back()->with('success', 'Status pembayaran berhasil diupdate!');
    }

    public function claimTicket()
    {
        if (Auth::check()) {
            $userId = Auth::id();

            Event::create([
                'user_id' => $userId,
            ]);

            $user = Auth::user();
            $semnasId = $this->getSemnasIdForUser($user);

            Mail::to($user->email)->send(new Semnas($user, $semnasId));
            return redirect('/post-payment');
        }

        return redirect('/login?redirect=post-payment');
    }

    private function getSemnasIdForUser($user)
    {
        if ($user) {
            $event = Event::where('user_id', $user->id)->first();
            return $event ? $event->id : null;
        }
        return null;
    }

    private function checkVerifiedUser($user)
    {
        if ($user) {
            return $user->email_verified_at !== null;
        }
        return false;
    }
}
