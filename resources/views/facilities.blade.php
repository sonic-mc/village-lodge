@extends('layouts.app')

@section('title', 'Facilities & Amenities - The Village Lodge')
@section('meta_description', 'Discover world-class facilities at The Village Lodge including restaurant, bar, conference rooms, swimming pool, and event venues in Gweru, Zimbabwe.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('images/facilities-header.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Our Facilities
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Facilities</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Intro -->
    <section class="facilities-intro-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#0b3d2e;opacity:0.7;">
                    World-Class Amenities
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#0b3d2e;">
                    Premium Facilities
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#d4af37;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:640px;margin:0 auto;font-size:0.96rem;color:#555;">
                    The Village Lodge offers an extensive range of modern facilities designed to make 
                    your stay comfortable, productive, and memorable. From fine dining to business facilities, 
                    we have everything you need.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Facilities Section -->
    <section class="main-facilities-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <!-- Restaurant & Bar -->
            <div class="facility-showcase" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;margin-bottom:44px;">
                <div class="facility-showcase-image" style="position:relative;">
                    <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.12);">
                        <img src="{{ asset('images/restaurant.jpg') }}" alt="Restaurant &amp; Bar" style="width:100%;height:260px;object-fit:cover;display:block;">
                    </div>
                    <div class="facility-badge" style="position:absolute;top:16px;left:16px;width:40px;height:40px;border-radius:50%;background:#d4af37;display:flex;align-items:center;justify-content:center;color:#1b1b1b;box-shadow:0 10px 26px rgba(0,0,0,0.3);">
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
                <div class="facility-showcase-content">
                    <h3 class="facility-showcase-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#0b3d2e;">
                        Restaurant &amp; Bar
                    </h3>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:10px;">
                        Indulge in a culinary journey at our signature restaurant, where our expert chefs 
                        prepare a delightful fusion of traditional Zimbabwean cuisine and international 
                        dishes. Using fresh, locally-sourced ingredients, every meal is a celebration of flavor.
                    </p>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Our fully-stocked bar offers an extensive selection of premium wines, spirits, and 
                        cocktails. Whether you're enjoying a romantic dinner or casual drinks with colleagues, 
                        our elegant atmosphere provides the perfect setting.
                    </p>
                    <ul class="facility-features-list" style="list-style:none;padding:0;margin:0 0 12px;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:6px 18px;font-size:0.9rem;color:#555;">
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Breakfast, Lunch &amp; Dinner Service</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> À la carte and Buffet Options</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Indoor and Outdoor Seating</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Full Bar Service</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Special Dietary Accommodations</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Private Dining Available</li>
                    </ul>
                    <div class="facility-hours" style="font-size:0.9rem;color:#444;">
                        <strong>Operating Hours:</strong>
                        <span> Restaurant: 6:30 AM - 10:00 PM | Bar: 10:00 AM - Midnight</span>
                    </div>
                </div>
            </div>

            <!-- Conference & Meeting Rooms -->
            <div class="facility-showcase reverse" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;margin-bottom:44px;">
                <div class="facility-showcase-image" style="position:relative;order:2;">
                    <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.12);">
                        <img src="{{ asset('images/conference.jpg') }}" alt="Conference Rooms" style="width:100%;height:260px;object-fit:cover;display:block;">
                    </div>
                    <div class="facility-badge" style="position:absolute;top:16px;left:16px;width:40px;height:40px;border-radius:50%;background:#d4af37;display:flex;align-items:center;justify-content:center;color:#1b1b1b;box-shadow:0 10px 26px rgba(0,0,0,0.3);">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="facility-showcase-content" style="order:1;">
                    <h3 class="facility-showcase-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#0b3d2e;">
                        Conference &amp; Meeting Rooms
                    </h3>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:10px;">
                        Our state-of-the-art conference facilities are designed to host successful business 
                        events of all sizes. From intimate board meetings to large corporate conferences, 
                        we provide the technology and support you need.
                    </p>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Each conference room is equipped with modern audiovisual equipment, high-speed WiFi, 
                        and flexible seating arrangements. Our dedicated events team ensures every detail is 
                        perfect, from setup to catering.
                    </p>
                    <ul class="facility-features-list" style="list-style:none;padding:0;margin:0 0 12px;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:6px 18px;font-size:0.9rem;color:#555;">
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Multiple Room Configurations</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Capacity: 10 - 200 Delegates</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Projectors &amp; Audio Systems</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> High-Speed WiFi</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Whiteboards &amp; Flip Charts</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Professional Event Coordination</li>
                    </ul>
                    <div class="facility-cta" style="margin-top:4px;">
                        <a href="{{ route('events') }}" class="btn-ghost" style="border-color:#0b3d2e;color:#0b3d2e;padding:8px 16px;font-size:0.9rem;">
                            <i class="fas fa-info-circle"></i>
                            <span style="margin-left:6px;">View Event Packages</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Swimming Pool & Gardens -->
            <div class="facility-showcase" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;margin-bottom:44px;">
                <div class="facility-showcase-image" style="position:relative;">
                    <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.12);">
                        <img src="{{ asset('images/pool.jpg') }}" alt="Swimming Pool" style="width:100%;height:260px;object-fit:cover;display:block;">
                    </div>
                    <div class="facility-badge" style="position:absolute;top:16px;left:16px;width:40px;height:40px;border-radius:50%;background:#d4af37;display:flex;align-items:center;justify-content:center;color:#1b1b1b;box-shadow:0 10px 26px rgba(0,0,0,0.3);">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                </div>
                <div class="facility-showcase-content">
                    <h3 class="facility-showcase-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#0b3d2e;">
                        Swimming Pool &amp; Gardens
                    </h3>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:10px;">
                        Relax and unwind in our beautiful outdoor swimming pool, surrounded by meticulously 
                        landscaped gardens. The perfect spot to escape the heat and enjoy the tranquil 
                        atmosphere of the Zimbabwean countryside.
                    </p>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        Our gardens provide a serene backdrop for leisure and photography, with shaded 
                        seating areas perfect for reading, meditation, or simply enjoying nature's beauty.
                    </p>
                    <ul class="facility-features-list" style="list-style:none;padding:0;margin:0 0 12px;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:6px 18px;font-size:0.9rem;color:#555;">
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Heated Outdoor Pool</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Sun Loungers &amp; Umbrellas</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Landscaped Gardens</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Pool Bar Service</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Children&apos;s Pool Area</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Lifeguard on Duty</li>
                    </ul>
                    <div class="facility-hours" style="font-size:0.9rem;color:#444;">
                        <strong>Operating Hours:</strong>
                        <span> 7:00 AM - 7:00 PM Daily</span>
                    </div>
                </div>
            </div>

            <!-- Banquet Hall -->
            <div class="facility-showcase reverse" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;margin-bottom:44px;">
                <div class="facility-showcase-image" style="position:relative;order:2;">
                    <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.12);">
                        <img src="{{ asset('images/banquet.jpg') }}" alt="Banquet Hall" style="width:100%;height:260px;object-fit:cover;display:block;">
                    </div>
                    <div class="facility-badge" style="position:absolute;top:16px;left:16px;width:40px;height:40px;border-radius:50%;background:#d4af37;display:flex;align-items:center;justify-content:center;color:#1b1b1b;box-shadow:0 10px 26px rgba(0,0,0,0.3);">
                        <i class="fas fa-glass-cheers"></i>
                    </div>
                </div>
                <div class="facility-showcase-content" style="order:1;">
                    <h3 class="facility-showcase-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#0b3d2e;">
                        Banquet &amp; Function Hall
                    </h3>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:10px;">
                        Celebrate life&apos;s special moments in our elegant banquet hall. Perfect for weddings, 
                        anniversaries, birthday celebrations, and gala dinners, our versatile space can be 
                        transformed to match your vision.
                    </p>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:12px;">
                        With professional lighting, sound systems, and customizable décor options, we create 
                        the perfect ambiance for your celebration. Our experienced team handles every detail 
                        so you can focus on enjoying your special day.
                    </p>
                    <ul class="facility-features-list" style="list-style:none;padding:0;margin:0 0 12px;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:6px 18px;font-size:0.9rem;color:#555;">
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Capacity: Up to 300 Guests</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Customizable Décor</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Professional Sound &amp; Lighting</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Dance Floor</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Stage for Performances</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Full Catering Services</li>
                    </ul>
                    <div class="facility-cta" style="margin-top:4px;">
                        <a href="{{ route('contact') }}" class="btn-lux" style="padding:9px 18px;font-size:0.9rem;">
                            <i class="fas fa-calendar-alt"></i>
                            <span style="margin-left:6px;">Request Quote</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Center -->
            <div class="facility-showcase" data-aos="fade-up" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;align-items:center;">
                <div class="facility-showcase-image" style="position:relative;">
                    <div style="border-radius:18px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.12);">
                        <img src="{{ asset('images/business-center.jpg') }}" alt="Business Center" style="width:100%;height:260px;object-fit:cover;display:block;">
                    </div>
                    <div class="facility-badge" style="position:absolute;top:16px;left:16px;width:40px;height:40px;border-radius:50%;background:#d4af37;display:flex;align-items:center;justify-content:center;color:#1b1b1b;box-shadow:0 10px 26px rgba(0,0,0,0.3);">
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                <div class="facility-showcase-content">
                    <h3 class="facility-showcase-title" style="font-family:'Playfair Display',serif;font-size:1.7rem;margin:0 0 8px;color:#0b3d2e;">
                        Business Center
                    </h3>
                    <p class="facility-showcase-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin-bottom:10px;">
                        Stay productive during your visit with our fully-equipped business center. Whether 
                        you need to catch up on emails, print documents, or hold a video conference, we 
                        provide all the tools you need.
                    </p>
                    <ul class="facility-features-list" style="list-style:none;padding:0;margin:0 0 12px;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:6px 18px;font-size:0.9rem;color:#555;">
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> High-Speed Internet</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Computers &amp; Printers</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Scanning &amp; Photocopying</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Private Workstations</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Video Conferencing Facilities</li>
                        <li><i class="fas fa-check" style="color:#d4af37;margin-right:6px;"></i> Secretarial Services Available</li>
                    </ul>
                    <div class="facility-hours" style="font-size:0.9rem;color:#444;">
                        <strong>Operating Hours:</strong>
                        <span> 24 Hours (Guest Access)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Amenities Grid -->
    <section class="additional-amenities-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#0b3d2e;opacity:0.7;">
                    More Amenities
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#0b3d2e;">
                    Additional Services
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#d4af37;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div class="amenities-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:22px;margin-top:24px;">
                @php
                    $amenities = [
                        ['icon' => 'fa-parking',     'title' => 'Free Parking',      'text' => 'Secure, complimentary parking available for all guests'],
                        ['icon' => 'fa-wifi',        'title' => 'High-Speed WiFi',   'text' => 'Complimentary wireless internet throughout the property'],
                        ['icon' => 'fa-concierge-bell', 'title' => '24/7 Reception', 'text' => 'Round-the-clock front desk service for your convenience'],
                        ['icon' => 'fa-luggage-cart','title' => 'Luggage Storage',   'text' => 'Secure storage for your belongings before check-in or after check-out'],
                        ['icon' => 'fa-shuttle-van', 'title' => 'Airport Transfer',  'text' => 'Convenient shuttle service to and from the airport (on request)'],
                        ['icon' => 'fa-broom',       'title' => 'Housekeeping',      'text' => 'Daily room cleaning and turndown service'],
                        ['icon' => 'fa-tshirt',      'title' => 'Laundry Service',   'text' => 'Professional laundry and dry cleaning available'],
                        ['icon' => 'fa-shield-alt',  'title' => 'Security',          'text' => '24-hour security personnel and CCTV monitoring'],
                    ];
                @endphp

                @foreach($amenities as $i => $a)
                    <div class="amenity-card" data-aos="fade-up" data-aos-delay="{{ ($i+1) * 100 }}" style="background:#f7f8f9;border-radius:18px;padding:20px 18px;text-align:left;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                        <div class="amenity-icon" style="font-size:1.6rem;color:#d4af37;margin-bottom:8px;">
                            <i class="fas {{ $a['icon'] }}"></i>
                        </div>
                        <h4 class="amenity-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 4px;color:#0b3d2e;">
                            {{ $a['title'] }}
                        </h4>
                        <p class="amenity-text" style="font-size:0.94rem;color:#555;line-height:1.7;margin:0;">
                            {{ $a['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Facilities CTA -->
    <section class="facilities-cta-section" style="position:relative;padding:70px 0;background:url('{{ asset('images/facilities-cta-bg.jpg') }}') center/cover no-repeat;">
        <div class="facilities-cta-overlay" style="position:absolute;inset:0;background:rgba(4,17,13,0.9);"></div>
        <div class="section" style="position:relative;">
            <div class="facilities-cta-content" data-aos="zoom-in" style="text-align:center;color:#fff;max-width:720px;margin:0 auto;">
                <h2 class="facilities-cta-title" style="font-family:'Playfair Display',serif;font-size:2.1rem;margin:0 0 10px;">
                    Experience Our Premium Facilities
                </h2>
                <p class="facilities-cta-text" style="font-size:0.98rem;opacity:0.9;margin:0 0 18px;">
                    Book your stay or event today and enjoy world-class amenities in the heart of Gweru.
                </p>
                <div class="facilities-cta-buttons" style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-check"></i>
                        <span style="margin-left:6px;">Book Now</span>
                    </a>
                    <a href="{{ route('rooms') }}" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);padding:9px 20px;font-size:0.9rem;">
                        <i class="fas fa-bed"></i>
                        <span style="margin-left:6px;">View Rooms</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection