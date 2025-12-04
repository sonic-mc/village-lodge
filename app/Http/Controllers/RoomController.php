<?php

namespace App\Http\Controllers;

class RoomController extends Controller
{
    public function index()
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
                'image' => 'executive-suite.jpg'
            ]
        ];

        return view('rooms', compact('rooms'));
    }
}
