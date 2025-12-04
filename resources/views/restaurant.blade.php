@extends('layouts.app')

@section('title', 'Restaurant & Bar - The Village Lodge')
@section('meta_description', 'Indulge in fine dining and curated drinks at The Village Lodge Restaurant & Bar. Discover our signature menus, chef-crafted dishes, and elegant bar in Gweru, Zimbabwe.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('events/event01.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Restaurant &amp; Bar
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Restaurant &amp; Bar</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="section" style="background:#ffffff;">
        <div class="section">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:36px;align-items:center;">
                <div data-aos="fade-right">
                    <span style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;display:block;margin-bottom:8px;">
                        Fine Dining &amp; Craft Cocktails
                    </span>
                    <h2 style="font-family:'Playfair Display',serif;font-size:2.4rem;margin:0 0 10px;color:#3b1a12;">
                        A Culinary Journey in the Heart of Gweru
                    </h2>
                    <div style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px 0 18px;"></div>
                    <p style="font-size:0.98rem;color:#555;line-height:1.8;margin:0 0 10px;">
                        At The Village Lodge Restaurant &amp; Bar, every plate is crafted to delight the senses. 
                        Our chefs combine the finest local ingredients with global techniques to create 
                        dishes that are both comforting and unforgettable.
                    </p>
                    <p style="font-size:0.98rem;color:#555;line-height:1.8;margin:0 0 16px;">
                        From sunrise breakfasts and relaxed lunches to candle-lit dinners and late-night cocktails, 
                        our spaces are designed for indulgence, connection, and celebration.
                    </p>
                    <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:10px;">
                        <a href="#menus" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                            <i class="fas fa-utensils"></i>
                            <span style="margin-left:6px;">View Menus</span>
                        </a>
                        <a href="#book-table" class="btn-ghost" style="border-color:#3b1a12;color:#3b1a12;padding:9px 20px;font-size:0.9rem;">
                            <i class="fas fa-glass-cheers"></i>
                            <span style="margin-left:6px;">Reserve a Table</span>
                        </a>
                    </div>
                </div>

                <div data-aos="fade-left" style="position:relative;">
                    <div style="display:grid;grid-template-columns:1.2fr 0.9fr;gap:10px;">
                        <img src="{{ asset('events/event02.jpg') }}" alt="Fine dining at The Village Lodge" style="width:100%;height:260px;object-fit:cover;border-radius:18px;box-shadow:0 20px 55px rgba(0,0,0,0.18);">
                        <img src="{{ asset('events/event01.jpg') }}" alt="Signature cocktails at the bar" style="width:100%;height:220px;object-fit:cover;border-radius:18px;align-self:flex-end;box-shadow:0 18px 50px rgba(0,0,0,0.16);">
                    </div>
                    <div style="position:absolute;bottom:-10px;left:14px;background:#1b0904;color:#fff;border-radius:14px;padding:8px 12px;box-shadow:0 16px 45px rgba(0,0,0,0.7);font-size:0.85rem;">
                        <i class="fas fa-star" style="color:#f3b01a;margin-right:6px;"></i>
                        <strong>Chef-crafted menus • Curated wine cellar • Signature cocktails</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="section" style="background:#f5f6f7;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Restaurant &amp; Bar Highlights
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Crafted for Memorable Evenings
                </h2>
                <div style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:22px;margin-top:24px;">
                @php
                    $highlights = [
                        [
                            'icon' => 'fa-concierge-bell',
                            'title' => 'All-Day Dining',
                            'text'  => 'From gourmet breakfasts to late-night bites, our all-day menu satisfies every craving.',
                            'delay' => 100,
                        ],
                        [
                            'icon' => 'fa-wine-glass-alt',
                            'title' => 'Signature Bar',
                            'text'  => 'A curated selection of wines, premium spirits, and handcrafted cocktails.',
                            'delay' => 200,
                        ],
                        [
                            'icon' => 'fa-fire',
                            'title' => 'Grill & Live Cooking',
                            'text'  => 'Live grill station and chef’s specials highlight the best of local produce.',
                            'delay' => 300,
                        ],
                        [
                            'icon' => 'fa-music',
                            'title' => 'Evening Ambience',
                            'text'  => 'Soft lighting, warm tones, and occasional live music set the perfect mood.',
                            'delay' => 400,
                        ],
                    ];
                @endphp

                @foreach($highlights as $h)
                    <article data-aos="fade-up" data-aos-delay="{{ $h['delay'] }}" style="background:#ffffff;border-radius:18px;padding:22px 20px;box-shadow:0 12px 36px rgba(0,0,0,0.05);">
                        <div style="font-size:1.8rem;color:#f3b01a;margin-bottom:8px;">
                            <i class="fas {{ $h['icon'] }}"></i>
                        </div>
                        <h3 style="font-family:'Playfair Display',serif;font-size:1.25rem;margin:0 0 6px;color:#3b1a12;">
                            {{ $h['title'] }}
                        </h3>
                        <p style="font-size:0.95rem;color:#555;margin:0;line-height:1.7;">
                            {{ $h['text'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Menus Section -->
    <section id="menus" class="section" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Seasonal Menus
                </span>
                <h2 style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Discover Our Signature Flavours
                </h2>
                <div style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p style="max-width:640px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Our menus evolve with the seasons, showcasing fresh local ingredients, classic favourites, 
                    and chef’s specials inspired by global cuisines.
                </p>
            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px;margin-top:26px;">
                <!-- Breakfast -->
                <article data-aos="fade-up" data-aos-delay="100" style="background:#f7f8f9;border-radius:18px;padding:22px 20px;box-shadow:0 12px 34px rgba(0,0,0,0.06);">
                    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;margin:0 0 6px;color:#3b1a12;">
                        Breakfast &amp; Brunch
                    </h3>
                    <p style="font-size:0.94rem;color:#555;margin:0 0 8px;">
                        Served daily &mdash; 6:30 AM to 11:00 AM
                    </p>
                    <ul style="list-style:none;padding:0;margin:0;font-size:0.92rem;color:#555;">
                        <li style="margin-bottom:4px;">• Farmers’ Breakfast with free-range eggs</li>
                        <li style="margin-bottom:4px;">• Freshly baked pastries &amp; artisan breads</li>
                        <li style="margin-bottom:4px;">• Seasonal fruit platters &amp; smoothies</li>
                        <li>• Specialty coffees &amp; premium teas</li>
                    </ul>
                </article>

                <!-- Lunch/Dinner -->
                <article data-aos="fade-up" data-aos-delay="200" style="background:#f7f8f9;border-radius:18px;padding:22px 20px;box-shadow:0 12px 34px rgba(0,0,0,0.06);">
                    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;margin:0 0 6px;color:#3b1a12;">
                        Lunch &amp; Dinner
                    </h3>
                    <p style="font-size:0.94rem;color:#555;margin:0 0 8px;">
                        Lunch &mdash; 12:00 PM to 3:00 PM &nbsp;|&nbsp; Dinner &mdash; 6:00 PM to 10:00 PM
                    </p>
                    <ul style="list-style:none;padding:0;margin:0;font-size:0.92rem;color:#555;">
                        <li style="margin-bottom:4px;">• Chargrilled steaks &amp; signature ribs</li>
                        <li style="margin-bottom:4px;">• Chef’s pasta &amp; seafood specials</li>
                        <li style="margin-bottom:4px;">• Modern takes on traditional Zimbabwean dishes</li>
                        <li>• Vegetarian &amp; vegan options available</li>
                    </ul>
                </article>

                <!-- Bar -->
                <article data-aos="fade-up" data-aos-delay="300" style="background:#f7f8f9;border-radius:18px;padding:22px 20px;box-shadow:0 12px 34px rgba(0,0,0,0.06);">
                    <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;margin:0 0 6px;color:#3b1a12;">
                        Bar &amp; Lounge
                    </h3>
                    <p style="font-size:0.94rem;color:#555;margin:0 0 8px;">
                        Open daily &mdash; 10:00 AM till late
                    </p>
                    <ul style="list-style:none;padding:0;margin:0;font-size:0.92rem;color:#555;">
                        <li style="margin-bottom:4px;">• Signature cocktails &amp; house infusions</li>
                        <li style="margin-bottom:4px;">• Curated local &amp; international wines</li>
                        <li style="margin-bottom:4px;">• Premium whiskies, gins &amp; craft beers</li>
                        <li>• Gourmet bar snacks &amp; tapas</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- Restaurant & Bar Gallery Strip -->
    <section class="section" style="background:#f5f6f7;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    A Taste of the Atmosphere
                </span>
                <h2 style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Restaurant &amp; Bar Moments
                </h2>
                <div style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;">
                <img src="{{ asset('events/event04.jpg') }}" alt="Elegant table setting" style="width:100%;height:220px;object-fit:cover;border-radius:16px;box-shadow:0 14px 40px rgba(0,0,0,0.14);" data-aos="zoom-in">
                <img src="{{ asset('events/event05.jpg') }}" alt="Gourmet cuisine" style="width:100%;height:220px;object-fit:cover;border-radius:16px;box-shadow:0 14px 40px rgba(0,0,0,0.14);" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('events/event08.jpg') }}" alt="Outdoor dining" style="width:100%;height:220px;object-fit:cover;border-radius:16px;box-shadow:0 14px 40px rgba(0,0,0,0.14);" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('events/event07.jpg') }}" alt="Bar ambience" style="width:100%;height:220px;object-fit:cover;border-radius:16px;box-shadow:0 14px 40px rgba(0,0,0,0.14);" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>
    </section>

    <!-- Chef & Mixologist Section -->
    <section class="section" style="background:#ffffff;">
        <div class="section">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;">
                <div data-aos="fade-right" style="position:relative;">
                    <div style="border-radius:20px;overflow:hidden;box-shadow:0 20px 55px rgba(0,0,0,0.18);">
                        <img src="{{ asset('events/event08.jpg') }}" alt="Head Chef at The Village Lodge" style="width:100%;height:290px;object-fit:cover;display:block;">
                    </div>
                    <div style="position:absolute;bottom:14px;left:14px;background:rgba(15,4,2,0.9);color:#fff;border-radius:14px;padding:8px 12px;border:1px solid rgba(255,255,255,0.18);backdrop-filter:blur(14px);font-size:0.85rem;">
                        <strong>Chef&apos;s Table Experiences</strong><br>
                        <span style="opacity:0.85;">By prior reservation</span>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <span style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                        The Team
                    </span>
                    <h2 style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0 8px;color:#3b1a12;">
                        Passion on Every Plate &amp; in Every Glass
                    </h2>
                    <div style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px 0 16px;"></div>
                    <p style="font-size:0.96rem;color:#555;line-height:1.8;margin:0 0 10px;">
                        Our culinary team, led by our Head Chef, brings together years of experience in 
                        luxury hospitality across Africa and beyond. Each menu is meticulously curated to 
                        balance flavour, texture, and presentation.
                    </p>
                    <p style="font-size:0.96rem;color:#555;line-height:1.8;margin:0 0 14px;">
                        At the bar, our mixologists pair classic techniques with contemporary inspiration, 
                        crafting cocktails that are as beautiful as they are memorable.
                    </p>
                    <ul style="list-style:none;padding:0;margin:0;font-size:0.94rem;color:#555;">
                        <li style="margin-bottom:4px;"><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Custom tasting menus for private groups</li>
                        <li style="margin-bottom:4px;"><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Pairing recommendations with each course</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Dedicated service team for events &amp; celebrations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking CTA / Reserve Table -->
    <section id="book-table" class="section" style="position:relative;padding:70px 0;background:url('{{ asset('events/event02.jpg') }}') center/cover no-repeat;">
        <div style="position:absolute;inset:0;background:rgba(15,4,2,0.9);"></div>
        <div class="section" style="position:relative;">
            <div style="max-width:720px;margin:0 auto;text-align:center;color:#fff;" data-aos="zoom-in">
                <h2 style="font-family:'Playfair Display',serif;font-size:2.1rem;margin:0 0 8px;">
                    Reserve Your Table
                </h2>
                <p style="font-size:0.98rem;opacity:0.9;margin:0 0 18px;">
                    Planning a romantic dinner, a family celebration, or after-work drinks? 
                    Reserve your table and let us take care of the rest.
                </p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-bottom:18px;text-align:left;">
                    <div style="background:rgba(0,0,0,0.35);border-radius:16px;padding:12px 14px;border:1px solid rgba(255,255,255,0.18);font-size:0.9rem;">
                        <strong>Opening Hours</strong><br>
                        <span style="opacity:0.85;">Restaurant: 6:30 AM &ndash; 10:00 PM</span><br>
                        <span style="opacity:0.85;">Bar &amp; Lounge: 10:00 AM &ndash; Late</span>
                    </div>
                    <div style="background:rgba(0,0,0,0.35);border-radius:16px;padding:12px 14px;border:1px solid rgba(255,255,255,0.18);font-size:0.9rem;">
                        <strong>Reservations</strong><br>
                        <span style="opacity:0.85;">Call: <a href="tel:+263782575571" style="color:#f3b01a;">+263 78 257 5571</a></span><br>
                        <span style="opacity:0.85;">Email: <a href="mailto:reservations@thevillagezim.com" style="color:#f3b01a;">reservations@thevillagezim.com</a></span>
                    </div>
                </div>

                <div style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}?event=dining-reservation" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-check"></i>
                        <span style="margin-left:6px;">Book a Table</span>
                    </a>
                    <a href="https://wa.me/263782575571" target="_blank" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);padding:9px 20px;font-size:0.9rem;color:#fff;">
                        <i class="fab fa-whatsapp"></i>
                        <span style="margin-left:6px;">WhatsApp Reservations</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection