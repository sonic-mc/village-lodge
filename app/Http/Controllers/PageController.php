<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function rooms()
    {
        $rooms = [
            [
                'name' => 'Standard Room',
                'price' => 'From USD $80',
                'description' => 'Comfortable room with modern amenities, air conditioning, TV, and minibar.',
                'amenities' => ['Air Conditioning', 'Flat-screen TV', 'Minibar/Fridge', 'En-suite Bathroom', 'Free WiFi', 'Complimentary Parking'],
                'image' => 'standard-room.jpg'
            ],
            [
                'name' => 'Deluxe Room',
                'price' => 'From USD $120',
                'description' => 'Spacious deluxe room with premium furnishings and enhanced comfort.',
                'amenities' => ['Air Conditioning', 'Smart TV', 'Minibar', 'Premium Bathroom', 'Work Desk', 'Free WiFi', 'Complimentary Parking'],
                'image' => 'deluxe-room.jpg'
            ],
            [
                'name' => 'Thatched Chalet',
                'price' => 'From USD $150',
                'description' => 'Authentic African thatched chalet with rustic charm and modern luxury.',
                'amenities' => ['Air Conditioning', 'Private Veranda', 'Minibar', 'Luxury Bathroom', 'Garden View', 'Free WiFi', 'Complimentary Parking'],
                'image' => 'thatched-chalet.jpg'
            ],
            [
                'name' => 'Executive Suite',
                'price' => 'From USD $200',
                'description' => 'Luxurious suite with separate living area and premium amenities.',
                'amenities' => ['Air Conditioning', 'Separate Living Room', 'Premium Bar', 'Jacuzzi Bath', 'King Size Bed', 'Smart TV', 'Free WiFi', 'Complimentary Parking'],
                'image' => 'executive-suite. jpg'
            ]
        ];

        return view('rooms', compact('rooms'));
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function gallery()
    {
        // Each category key must match what you want to show in the UI
        // and each value is an array of filenames stored in public/images/events
        $galleries = [
            'Rooms' => [
                'event01.jpg',
                'event02.jpg',
                'event03.jpg',
            ],
            'Grounds' => [
                'event04.jpg',
                'event05.jpg',
            ],
            'Events' => [
                'event06.jpg',
                'event07.jpg',
            ],
            'Dining' => [
                'event08.jpg',
            ],
        ];
    
        return view('gallery', compact('galleries'));
    }

   

    
    public function contact()
    {
        return view('contact');
    }

    public function submitBooking(Request $request)
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

        // Send email notification
        // Mail::to('staywithus@thevillagezim.com')->send(new BookingRequest($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your booking request.  We will contact you shortly to confirm your reservation.'
        ]);
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Send email notification
        // Mail::to('staywithus@thevillagezim.com')->send(new ContactMessage($validated));

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message.  We will respond to your inquiry within 24 hours.'
        ]);
    }
}
