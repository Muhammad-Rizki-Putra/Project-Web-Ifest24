<?php

namespace App\Http\Controllers;

class SemnasController extends Controller
{
    public function index()
    {
        $title = 'Semnas';
        return view('events.semnas', compact('title'));
    }

    // pendaftaran
}
