<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|email',
            'phone'      => 'required|numeric',
            'message'    => 'required|string',
        ]);

        // Send email (optional)
        Mail::to('christiandevelopmenttrustindia@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Message sent successfully!');
    }
}
