<?php

namespace App\Http\Controllers;

class SemnasController extends Controller
{
    public function index()
    {
        $pagename = 'Semnas';
        return view('events.semnas', compact('pagename'));
    }

    // pendaftaran
}
