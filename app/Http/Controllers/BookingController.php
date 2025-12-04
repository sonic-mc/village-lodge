<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'guests' => 'required|integer|min:1',
            'room_type' => 'required|string',
            'special_requests' => 'nullable|string'
        ]);

        // Mail::to('staywithus@thevillagezim.com')->send(new BookingRequest($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your booking request. We will contact you shortly to confirm your reservation.'
        ]);
    }
}
