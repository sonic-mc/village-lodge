@extends('layouts.app')

@section('title', 'Events & Functions - The Village Lodge')
@section('meta_description', 'Host your wedding, conference, or corporate event at The Village Lodge. Professional event planning and stunning venues in Gweru, Zimbabwe.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('events/event01.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Events &amp; Functions
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Events</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Intro -->
    <section class="events-intro-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Memorable Occasions
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Your Perfect Event Venue
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:640px;margin:0 auto;font-size:0.96rem;color:#555;">
                    From intimate gatherings to grand celebrations, The Village Lodge provides the perfect 
                    setting for your special occasion. Our experienced events team ensures every detail is 
                    executed flawlessly.
                </p>
            </div>
        </div>
    </section>

    <!-- Event Types Section -->
    <section class="event-types-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <!-- Weddings -->
            <div class="event-type-showcase" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;align-items:center;margin-bottom:40px;">
                <div class="event-type-content">
                    <div class="event-type-icon" style="font-size:1.8rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-rings-wedding"></i>
                    </div>
                    <h3 class="event-type-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#3b1a12;">
                        Weddings
                    </h3>
                    <p class="event-type-description" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Say "I do" in the enchanting surroundings of The Village Lodge. Our picturesque gardens 
                        and elegant banquet hall provide the perfect backdrop for your dream wedding. From 
                        intimate ceremonies to lavish receptions, we create magical moments that last a lifetime.
                    </p>
                    <ul class="event-type-features" style="list-style:none;padding:0;margin:0 0 14px;font-size:0.9rem;color:#555;display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:6px 16px;">
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Indoor &amp; Outdoor Ceremony Options</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Capacity: Up to 300 Guests</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Professional Wedding Coordinator</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Customizable Décor &amp; Setup</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Full Catering Services</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Bridal Suite &amp; Changing Rooms</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Photography-Friendly Venues</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Accommodation for Guests</li>
                    </ul>
                    <a href="{{ route('contact') }}?event=wedding" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-heart"></i>
                        <span style="margin-left:6px;">Plan Your Wedding</span>
                    </a>
                </div>
                <div class="event-type-images" style="position:relative;display:grid;grid-template-columns:1.2fr 0.9fr;gap:10px;">
                    <img src="{{ asset('events/event02.jpg') }}" alt="Wedding Ceremony" class="event-img-main" style="width:100%;height:260px;object-fit:cover;border-radius:18px;box-shadow:0 18px 45px rgba(0,0,0,0.14);">
                    <img src="{{ asset('events/event03.jpg') }}" alt="Wedding Reception" class="event-img-secondary" style="width:100%;height:200px;object-fit:cover;border-radius:18px;align-self:flex-end;box-shadow:0 14px 40px rgba(0,0,0,0.12);">
                </div>
            </div>

            <!-- Corporate Events -->
            <div class="event-type-showcase reverse" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;align-items:center;margin-bottom:40px;">
                <div class="event-type-content" style="order:2;">
                    <div class="event-type-icon" style="font-size:1.8rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="event-type-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#3b1a12;">
                        Corporate Events &amp; Conferences
                    </h3>
                    <p class="event-type-description" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Host successful business events in our state-of-the-art conference facilities. Whether 
                        you're planning a board meeting, training seminar, product launch, or annual conference, 
                        we provide the professional environment and technical support you need.
                    </p>
                    <ul class="event-type-features" style="list-style:none;padding:0;margin:0 0 14px;font-size:0.9rem;color:#555;display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:6px 16px;">
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Multiple Conference Rooms</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Capacity: 10 - 200 Delegates</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Advanced AV Equipment</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> High-Speed WiFi Throughout</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Business Lunch &amp; Coffee Breaks</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Breakout Rooms Available</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Team Building Activities</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Technical Support Staff</li>
                    </ul>
                    <a href="{{ route('contact') }}?event=corporate" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-alt"></i>
                        <span style="margin-left:6px;">Request Corporate Package</span>
                    </a>
                </div>
                <div class="event-type-images" style="position:relative;display:grid;grid-template-columns:1.2fr 0.9fr;gap:10px;order:1;">
                    <img src="{{ asset('events/event04.jpg') }}" alt="Conference" class="event-img-main" style="width:100%;height:260px;object-fit:cover;border-radius:18px;box-shadow:0 18px 45px rgba(0,0,0,0.14);">
                    <img src="{{ asset('events/event05.jpg') }}" alt="Meeting" class="event-img-secondary" style="width:100%;height:200px;object-fit:cover;border-radius:18px;align-self:flex-end;box-shadow:0 14px 40px rgba(0,0,0,0.12);">
                </div>
            </div>

            <!-- Private Celebrations -->
            <div class="event-type-showcase" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;align-items:center;">
                <div class="event-type-content">
                    <div class="event-type-icon" style="font-size:1.8rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <h3 class="event-type-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#3b1a12;">
                        Private Celebrations
                    </h3>
                    <p class="event-type-description" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Celebrate life&apos;s milestones in style. From birthday parties and anniversaries to 
                        graduation ceremonies and family reunions, we create personalized experiences that 
                        reflect your unique vision and exceed your expectations.
                    </p>
                    <ul class="event-type-features" style="list-style:none;padding:0;margin:0 0 14px;font-size:0.9rem;color:#555;display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:6px 16px;">
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Birthday Parties &amp; Anniversaries</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Baby Showers &amp; Christenings</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Graduation Celebrations</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Retirement Parties</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Family Reunions</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Customized Menus</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Entertainment Arrangements</li>
                        <li><i class="fas fa-check-circle" style="color:#f3b01a;margin-right:6px;"></i> Flexible Venue Options</li>
                    </ul>
                    <a href="{{ route('contact') }}?event=celebration" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-glass-cheers"></i>
                        <span style="margin-left:6px;">Plan Your Celebration</span>
                    </a>
                </div>
                <div class="event-type-images" style="position:relative;display:grid;grid-template-columns:1.2fr 0.9fr;gap:10px;">
                    <img src="{{ asset('events/event06.jpg') }}" alt="Birthday Party" class="event-img-main" style="width:100%;height:260px;object-fit:cover;border-radius:18px;box-shadow:0 18px 45px rgba(0,0,0,0.14);">
                    <img src="{{ asset('events/event07.jpg') }}" alt="Anniversary" class="event-img-secondary" style="width:100%;height:200px;object-fit:cover;border-radius:18px;align-self:flex-end;box-shadow:0 14px 40px rgba(0,0,0,0.12);">
                </div>
            </div>
        </div>
    </section>

    <!-- Event Spaces Section -->
    <section class="event-spaces-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Versatile Venues
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Our Event Spaces
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div class="event-spaces-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;margin-top:24px;">
                @php
                    $spaces = [
                        [
                            'image' => 'event08.jpg', // use events image as grand hall
                            'name' => 'Grand Banquet Hall',
                            'capacity' => 'Up to 300 guests',
                            'description' => 'Our largest venue, perfect for weddings, gala dinners, and major conferences',
                            'features' => ['Stage & Dance Floor','Professional Sound & Lighting','Climate Controlled','Bar Service Available'],
                            'delay' => 100,
                        ],
                        [
                            'image' => 'event02.jpg',
                            'name' => 'Garden Venue',
                            'capacity' => 'Up to 150 guests',
                            'description' => 'Beautiful outdoor setting surrounded by landscaped gardens',
                            'features' => ['Natural Beauty','Covered Pavilion','Perfect for Ceremonies','Weather Contingency Plans'],
                            'delay' => 200,
                        ],
                        [
                            'image' => 'event04.jpg',
                            'name' => 'Executive Boardroom',
                            'capacity' => 'Up to 30 guests',
                            'description' => 'Intimate setting for board meetings and executive sessions',
                            'features' => ['Boardroom Table Setup','Video Conferencing','Private & Confidential','Premium Refreshments'],
                            'delay' => 300,
                        ],
                        [
                            'image' => 'event05.jpg',
                            'name' => 'Conference Room',
                            'capacity' => 'Up to 100 guests',
                            'description' => 'Flexible space for seminars, workshops, and training sessions',
                            'features' => ['Multiple Setup Options','AV Equipment Included','Natural Lighting','Breakout Space Adjacent'],
                            'delay' => 400,
                        ],
                    ];
                @endphp

                @foreach($spaces as $space)
                    <div class="event-space-card" data-aos="flip-left" data-aos-delay="{{ $space['delay'] }}" style="background:#f7f8f9;border-radius:18px;overflow:hidden;box-shadow:0 16px 45px rgba(0,0,0,0.06);">
                        <div class="event-space-image">
                            <img src="{{ asset('events/'.$space['image']) }}" alt="{{ $space['name'] }}" style="width:100%;height:200px;object-fit:cover;display:block;">
                        </div>
                        <div class="event-space-content" style="padding:16px 18px 18px;">
                            <h4 class="event-space-name" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                                {{ $space['name'] }}
                            </h4>
                            <div class="event-space-capacity" style="display:flex;align-items:center;gap:6px;font-size:0.9rem;color:#777;margin-bottom:6px;">
                                <i class="fas fa-users"></i>
                                <span>{{ $space['capacity'] }}</span>
                            </div>
                            <p class="event-space-description" style="font-size:0.94rem;color:#555;line-height:1.6;margin:0 0 8px;">
                                {{ $space['description'] }}
                            </p>
                            <ul class="event-space-features" style="list-style:none;padding:0;margin:0;font-size:0.9rem;color:#555;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:4px 12px;">
                                @foreach($space['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Event Services Section -->
    <section class="event-services-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Complete Event Solutions
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    What We Offer
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div class="event-services-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:22px;margin-top:24px;">
                @php
                    $services = [
                        ['icon' => 'fa-clipboard-list','title' => 'Event Planning','text' => 'Dedicated event coordinator from concept to execution','delay' => 100],
                        ['icon' => 'fa-utensils','title' => 'Catering','text' => 'Customized menus with diverse cuisine options','delay' => 200],
                        ['icon' => 'fa-palette','title' => 'Décor & Setup','text' => 'Professional styling to match your theme and vision','delay' => 300],
                        ['icon' => 'fa-photo-video','title' => 'AV Equipment','text' => 'State-of-the-art sound, lighting, and projection systems','delay' => 400],
                        ['icon' => 'fa-bed','title' => 'Accommodation','text' => 'Special rates for event guests and attendees','delay' => 500],
                        ['icon' => 'fa-headset','title' => 'Technical Support','text' => 'On-site technical team throughout your event','delay' => 600],
                    ];
                @endphp

                @foreach($services as $service)
                    <div class="event-service-item" data-aos="fade-up" data-aos-delay="{{ $service['delay'] }}" style="background:#ffffff;border-radius:18px;padding:20px 18px;text-align:left;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                        <div class="service-icon" style="font-size:1.7rem;color:#f3b01a;margin-bottom:8px;">
                            <i class="fas {{ $service['icon'] }}"></i>
                        </div>
                        <h4 class="service-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 4px;color:#3b1a12;">
                            {{ $service['title'] }}
                        </h4>
                        <p class="service-text" style="font-size:0.94rem;color:#555;line-height:1.7;margin:0;">
                            {{ $service['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Events CTA -->
    <section class="events-cta-section" style="position:relative;padding:70px 0;background:url('{{ asset('events/event08.jpg') }}') center/cover no-repeat;">
        <div class="events-cta-overlay" style="position:absolute;inset:0;background:rgba(15,4,2,0.9);"></div>
        <div class="section" style="position:relative;">
            <div class="events-cta-content" data-aos="zoom-in" style="text-align:center;color:#fff;max-width:720px;margin:0 auto;">
                <h2 class="events-cta-title" style="font-family:'Playfair Display',serif;font-size:2.1rem;margin:0 0 10px;">
                    Let&apos;s Plan Your Perfect Event
                </h2>
                <p class="events-cta-text" style="font-size:0.98rem;opacity:0.9;margin:0 0 18px;">
                    Contact our events team today for a personalized quote and venue tour.
                </p>
                <div class="events-cta-buttons" style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;margin-bottom:10px;">
                    <a href="{{ route('contact') }}?inquiry=event" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-envelope"></i>
                        <span style="margin-left:6px;">Request Quote</span>
                    </a>
                    <a href="tel:+263782575571" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);padding:9px 20px;font-size:0.9rem;">
                        <i class="fas fa-phone"></i>
                        <span style="margin-left:6px;">Call Events Team</span>
                    </a>
                </div>
                <div class="events-contact-info" style="font-size:0.92rem;opacity:0.9;">
                    <p style="margin:2px 0;"><strong>Events Coordinator:</strong> events@thevillagezim.com</p>
                    <p style="margin:2px 0;"><strong>Direct Line:</strong> +263 78 257 5571</p>
                </div>
            </div>
        </div>
    </section>
@endsection