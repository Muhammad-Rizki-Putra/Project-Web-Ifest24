<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Partner; 

class PartnerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|max:255',
            'company' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'goal' => 'required|array', 
            'goal.*' => 'string',
            'description' => 'required|string|max:1000',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()->withFragment('submit-form');
        }

        Partner::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'job_title' => $request->input('job_title'),
            'goal' => implode(', ', $request->input('goal')),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'Thank you for filling the form!')->withFragment('submit-form');
    }
}
