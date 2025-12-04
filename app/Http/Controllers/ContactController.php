<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Mail::to('staywithus@thevillagezim.com')->send(new ContactMessage($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message. We will respond within 24 hours.'
        ]);
    }
}
