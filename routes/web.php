<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::view('/restaurant', 'restaurant')->name('restaurant');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/events', [EventController::class, 'index'])->name('events');

// API Routes for booking form
Route::post('/api/booking', [PageController::class, 'submitBooking'])->name('api. booking');
Route::post('/api/contact', [PageController::class, 'submitContact'])->name('api.contact');
