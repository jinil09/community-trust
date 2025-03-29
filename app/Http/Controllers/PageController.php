<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function donate(Request $request)
    {
        // Handle donation logic
        return back()->with('success', 'Thank you for your donation!');
    }

    public function volunteer(Request $request)
    {
        // Handle volunteer form submission
        return back()->with('success', 'Thank you for signing up as a volunteer!');
    }
}
