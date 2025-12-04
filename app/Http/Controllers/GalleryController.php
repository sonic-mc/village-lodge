<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = [
            'Rooms' => ['event01.jpg','event02.jpg','event03.jpg'],
            'Grounds' => ['event04.jpg','event05.jpg'],
            'Events' => ['event06.jpg','event07.jpg'],
            'Dining' => ['event08.jpg'],
        ];

        return view('gallery', compact('galleries'));
    }
}
