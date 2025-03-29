<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function showForm()
    {
        return view('volunteer-form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'volunteer_area' => 'required|array',
        ]);

        // Save to database (optional)
        // Volunteer::create($validated);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
