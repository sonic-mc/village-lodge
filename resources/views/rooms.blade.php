@extends('layouts.app')

@section('title', 'Rooms & Suites - The Village Lodge')
@section('meta_description', 'Explore our luxurious rooms and suites at The Village Lodge. From standard rooms to executive suites and authentic thatched chalets - find your perfect accommodation.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('images/image01.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Rooms &amp; Suites
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Rooms</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Intro Section -->
    <section class="rooms-intro-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Luxury Accommodation
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Choose Your Perfect Room
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:620px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Each room at The Village Lodge is thoughtfully designed to provide the perfect blend 
                    of comfort, style, and authentic Zimbabwean character. Experience luxury with a local touch.
                </p>
            </div>
        </div>
    </section>

    <!-- Rooms Listing Section -->
    <section class="rooms-listing-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            @foreach($rooms as $index => $room)
                @php
                    $reverse = $index % 2 !== 0 ? 'room-detail-card-reverse' : '';

                    // Cycle through image01, image02, image03 if you want to ignore $room['image']
                    $imageIndex = ($index % 3) + 1;
                    $imagePath = 'image0' . $imageIndex . '.jpg';
                @endphp

                <div class="room-detail-card {{ $reverse }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;align-items:center;margin-bottom:36px;">
                    <div class="room-detail-image" style="position:relative;">
                        <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.18);">
                            <img src="{{ asset('images/' . $imagePath) }}" alt="{{ $room['name'] }}" style="width:100%;height:260px;object-fit:cover;display:block;">
                        </div>
                        <div class="room-detail-badge" style="position:absolute;top:16px;left:16px;background:rgba(15,4,2,0.92);color:#fff;padding:7px 14px;border-radius:999px;font-size:0.85rem;">
                            {{ $room['price'] }}
                        </div>
                        @if($room['name'] === 'Thatched Chalet')
                            <div class="room-popular-badge" style="position:absolute;bottom:16px;right:16px;background:#f3b01a;color:#2b0c03;padding:7px 14px;border-radius:999px;font-size:0.8rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;">
                                Most Popular
                            </div>
                        @endif
                    </div>
                    
                    <div class="room-detail-content">
                        <h3 class="room-detail-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 6px;color:#3b1a12;">
                            {{ $room['name'] }}
                        </h3>
                        <div class="room-detail-rating" style="display:flex;align-items:center;gap:4px;margin-bottom:10px;color:#f3b01a;font-size:0.95rem;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span style="color:#777;margin-left:4px;">(4.9/5)</span>
                        </div>
                        
                        <p class="room-detail-description" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:14px;">
                            {{ $room['description'] }}
                        </p>
                        
                        <div class="room-detail-amenities" style="margin-bottom:14px;">
                            <h4 class="amenities-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 8px;color:#3b1a12;">
                                Room Amenities
                            </h4>
                            <ul class="amenities-list" style="list-style:none;padding:0;margin:0;display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:6px 16px;font-size:0.9rem;color:#555;">
                                @foreach($room['amenities'] as $amenity)
                                    <li>
                                        <i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i>
                                        {{ $amenity }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="room-detail-features" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px;">
                            @php
                                $features = [
                                    ['icon' => 'fa-wifi', 'label' => 'Free WiFi'],
                                    ['icon' => 'fa-coffee', 'label' => 'Breakfast'],
                                    ['icon' => 'fa-parking', 'label' => 'Free Parking'],
                                    ['icon' => 'fa-concierge-bell', 'label' => '24/7 Service'],
                                ];
                            @endphp

                            @foreach($features as $feature)
                                <div class="feature-badge" style="display:inline-flex;align-items:center;gap:6px;padding:6px 10px;border-radius:999px;background:#ffffff;border:1px solid rgba(0,0,0,0.06);font-size:0.85rem;color:#555;">
                                    <i class="fas {{ $feature['icon'] }}" style="color:#f3b01a;"></i>
                                    <span>{{ $feature['label'] }}</span>
                                </div>
                            @endforeach
                        </div>
                        
                        <div class="room-detail-actions" style="display:flex;flex-wrap:wrap;gap:10px;">
                            <a href="{{ route('contact') }}?room={{ strtolower(str_replace(' ', '-', $room['name'])) }}" class="btn-lux" style="padding:10px 20px;font-size:0.9rem;">
                                <i class="fas fa-calendar-check"></i>
                                <span style="margin-left:6px;">Book Now</span>
                            </a>
                            <a href="tel:+263782575571" class="btn-ghost" style="border-color:#3b1a12;color:#3b1a12;padding:9px 18px;font-size:0.9rem;">
                                <i class="fas fa-phone"></i>
                                <span style="margin-left:6px;">Call Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Room Features Section -->
    <section class="room-features-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Premium Amenities
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    What's Included
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div class="room-features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:22px;margin-top:24px;">
                @php
                    $featureCards = [
                        ['icon' => 'fa-bed',        'title' => 'Premium Bedding',   'text' => "Luxury linens and comfortable mattresses for the perfect night's sleep"],
                        ['icon' => 'fa-tv',         'title' => 'Entertainment',     'text' => 'Flat-screen TVs with satellite channels and streaming services'],
                        ['icon' => 'fa-snowflake',  'title' => 'Climate Control',   'text' => 'Individual air conditioning units for your comfort'],
                        ['icon' => 'fa-bath',       'title' => 'Modern Bathrooms',  'text' => 'En-suite facilities with premium toiletries and hot water'],
                        ['icon' => 'fa-shield-alt', 'title' => 'Safe & Secure',     'text' => '24-hour security and in-room safes for valuables'],
                        ['icon' => 'fa-broom',      'title' => 'Daily Housekeeping','text' => 'Professional cleaning service to maintain your comfort'],
                    ];
                @endphp

                @foreach($featureCards as $i => $f)
                    <div class="feature-box" data-aos="zoom-in" data-aos-delay="{{ ($i+1) * 100 }}" style="background:#f7f8f9;border-radius:18px;padding:22px 20px;text-align:left;box-shadow:0 12px 36px rgba(0,0,0,0.05);">
                        <div class="feature-box-icon" style="font-size:1.8rem;color:#f3b01a;margin-bottom:8px;">
                            <i class="fas {{ $f['icon'] }}"></i>
                        </div>
                        <h4 class="feature-box-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 6px;color:#3b1a12;">
                            {{ $f['title'] }}
                        </h4>
                        <p class="feature-box-text" style="font-size:0.94rem;color:#555;line-height:1.7;margin:0;">
                            {{ $f['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Booking CTA Section -->
    <section class="booking-cta-section" style="position:relative;padding:70px 0;background:url('{{ asset('images/image02.jpg') }}') center/cover no-repeat;">
        <div class="booking-cta-overlay" style="position:absolute;inset:0;background:rgba(15,4,2,0.9);"></div>
        <div class="section" style="position:relative;">
            <div class="booking-cta-content" data-aos="zoom-in" style="text-align:center;color:#fff;max-width:720px;margin:0 auto;">
                <h2 class="booking-cta-title" style="font-family:'Playfair Display',serif;font-size:2.1rem;margin:0 0 10px;">
                    Ready to Book Your Stay?
                </h2>
                <p class="booking-cta-text" style="font-size:0.98rem;opacity:0.9;margin:0 0 18px;">
                    Contact us now to check availability and secure your preferred room.
                </p>
                <div class="booking-cta-buttons" style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;margin-bottom:16px;">
                    <a href="{{ route('contact') }}" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-check"></i>
                        <span style="margin-left:6px;">Make Reservation</span>
                    </a>
                    <a href="https://wa.me/263782575571" target="_blank" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);padding:9px 20px;font-size:0.9rem;">
                        <i class="fab fa-whatsapp"></i>
                        <span style="margin-left:6px;">WhatsApp Us</span>
                    </a>
                </div>
                <div class="booking-cta-phones" style="display:flex;justify-content:center;gap:16px;flex-wrap:wrap;font-size:0.92rem;">
                    <a href="tel:+263782575571" style="color:#fff;display:inline-flex;align-items:center;gap:6px;">
                        <i class="fas fa-phone"></i> +263 78 257 5571
                    </a>
                    <a href="tel:+263780072810" style="color:#fff;display:inline-flex;align-items:center;gap:6px;">
                        <i class="fas fa-phone"></i> +263 78 007 2810
                    </a>
                    <a href="tel:+263776073652" style="color:#fff;display:inline-flex;align-items:center;gap:6px;">
                        <i class="fas fa-phone"></i> +263 77 607 3652
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection