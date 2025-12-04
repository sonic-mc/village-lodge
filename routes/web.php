<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Static Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');

// Rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Booking
Route::post('/booking', [BookingController::class, 'submit'])->name('booking.submit');

// Restaurant and Events pages
Route::get('/restaurant', [PageController::class, 'restaurant'])->name('restaurant');

Route::get('/functions', [PageController::class, 'functions'])->name('functions');


