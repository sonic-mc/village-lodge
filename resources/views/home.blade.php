@extends('layouts.app')

@section('title', 'Village Lodge Gweru • Luxury Hotel & Lodge in Gweru, Zimbabwe')

@section('content')
    <!-- Intro Section -->
    <section class="section" style="background:#2b140e;color:#f7f2e8;">
        <div style="max-width:1200px;margin:0 auto;display:flex;flex-wrap:wrap;align-items:center;gap:40px;">
            <div style="flex:1;min-width:290px;">
                <div style="font-size:0.8rem;letter-spacing:0.24em;text-transform:uppercase;color:#f3b01a;opacity:0.85;margin-bottom:10px;">
                    Welcome to Village Lodge Gweru
                </div>
                <h2 style="font-family:'Playfair Display',serif;font-size:2.5rem;color:#ffffff;font-weight:700;margin:0;">
                    A Sanctuary of Refined Comfort in the Heart of Gweru
                </h2>
                <p style="margin-top:18px;font-size:1rem;line-height:1.8;color:#f0e4d6;max-width:560px;">
                    Experience timeless elegance, modern comfort, and exceptional hospitality. 
                    Village Lodge offers luxury accommodation, executive conference facilities, 
                    world‑class dining, and a serene environment perfectly tailored for business, 
                    leisure, and family getaways.
                </p>
                <div style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;margin-top:24px;">
                    <a href="{{ route('rooms') }}" class="btn-lux">
                        <span>Explore Suites</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('about') }}" class="btn-ghost">
                        <i class="fas fa-info-circle"></i>
                        <span>About the Lodge</span>
                    </a>
                </div>
                <div style="display:flex;flex-wrap:wrap;gap:18px;margin-top:22px;font-size:0.9rem;color:#f0e4d6;">
                    <div style="display:flex;align-items:center;gap:8px;">
                        <i class="fas fa-wifi" style="color:#f3b01a;"></i><span>Complimentary high‑speed Wi‑Fi</span>
                    </div>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <i class="fas fa-mug-hot" style="color:#f3b01a;"></i><span>Gourmet breakfast included</span>
                    </div>
                </div>
            </div>
            <div style="flex:1;min-width:290px;position:relative;">
                <div style="position:relative;border-radius:18px;overflow:hidden;box-shadow:0 20px 45px rgba(0,0,0,0.6);">
                    <img src="{{ asset('images/image01.jpg') }}" alt="Village Lodge Gweru Front View" style="width:100%;height:auto;display:block;object-fit:cover;">
                    <div style="position:absolute;bottom:14px;left:14px;background:rgba(25,8,4,0.9);color:#fff;padding:10px 14px;border-radius:14px;border:1px solid rgba(255,255,255,0.18);backdrop-filter:blur(16px);">
                        <div style="font-size:0.7rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.8;">Curated Luxury</div>
                        <div style="font-size:0.9rem;font-weight:500;">Gweru’s Premier Village Lodge Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section"  style="background:#2b140e;color:#f7f2e8;">
        <div class="section-header">
            <div class="section-kicker" style="color:#f3b01a;">Why Stay With Us?</div>
            <h2 class="section-title" style="color:#ffffff;">Luxury Redefined in Every Detail</h2>
            <p class="section-subtitle" style="color:#f0e4d6;">
                From arrival to farewell, every moment at Village Lodge Gweru is designed to feel effortless, 
                intimate, and deeply memorable.
            </p>
        </div>

        <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:26px;">
            <article style="background:#2b140e;border-radius:18px;padding:30px 26px;box-shadow:0 18px 40px rgba(0,0,0,0.6);text-align:left;color:#f7f2e8;">
                <div style="font-size:2rem;color:#f3b01a;margin-bottom:12px;">
                    <i class="fas fa-bed"></i>
                </div>
                <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;color:#ffffff;margin:0 0 8px;">Luxury Rooms</h3>
                <p style="font-size:0.95rem;color:#f0e4d6;margin:0;">
                    Spacious, elegantly appointed rooms and suites, curated for restorative sleep and quiet comfort.
                </p>
            </article>

            <article style="background:#2b140e;border-radius:18px;padding:30px 26px;box-shadow:0 18px 40px rgba(0,0,0,0.6);text-align:left;color:#f7f2e8;">
                <div style="font-size:2rem;color:#f3b01a;margin-bottom:12px;">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;color:#ffffff;margin:0 0 8px;">Fine Dining</h3>
                <p style="font-size:0.95rem;color:#f0e4d6;margin:0;">
                    A world‑class restaurant showcasing seasonal Zimbabwean flavors and international classics.
                </p>
            </article>

            <article style="background:#2b140e;border-radius:18px;padding:30px 26px;box-shadow:0 18px 40px rgba(0,0,0,0.6);text-align:left;color:#f7f2e8;">
                <div style="font-size:2rem;color:#f3b01a;margin-bottom:12px;">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;color:#ffffff;margin:0 0 8px;">Conference Venue</h3>
                <p style="font-size:0.95rem;color:#f0e4d6;margin:0;">
                    Professional meeting and conference spaces with tailored packages for corporate retreats and seminars.
                </p>
            </article>

            <article style="background:#2b140e;border-radius:18px;padding:30px 26px;box-shadow:0 18px 40px rgba(0,0,0,0.6);text-align:left;color:#f7f2e8;">
                <div style="font-size:2rem;color:#f3b01a;margin-bottom:12px;">
                    <i class="fas fa-tree"></i>
                </div>
                <h3 style="font-family:'Playfair Display',serif;font-size:1.4rem;color:#ffffff;margin:0 0 8px;">Relaxing Environment</h3>
                <p style="font-size:0.95rem;color:#f0e4d6;margin:0;">
                    Lush gardens and tranquil spaces designed for unwinding, reflection, and reconnecting with nature.
                </p>
            </article>
        </div>
    </section>

    <!-- Rooms Showcase -->
    <section class="section" style="background:#2b140e;">
        <div class="section-header">
            <div class="section-kicker" style="color:#f3b01a;">Our Suites</div>
            <h2 class="section-title" style="color:#ffffff;">Elegance & Comfort Tailored for Your Stay</h2>
            <p class="section-subtitle" style="color:#f0e4d6;">
                From executive suites to thoughtfully designed standard rooms, every space is crafted 
                to feel both indulgent and inviting.
            </p>
        </div>

        <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;">
            <article style="background:#1b0904;border-radius:18px;overflow:hidden;box-shadow:0 20px 50px rgba(0,0,0,0.8);display:flex;flex-direction:column;color:#f7f2e8;">
                <div style="position:relative;">
                    <img src="{{ asset('images/image01.jpg') }}" alt="Executive Suite" style="width:100%;height:230px;object-fit:cover;">
                    <span style="position:absolute;top:14px;left:14px;background:rgba(59,26,18,0.95);color:#fff;padding:4px 10px;border-radius:999px;font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;">
                        Signature
                    </span>
                </div>
                <div style="padding:22px 22px 20px;text-align:left;flex:1;display:flex;flex-direction:column;">
                    <h3 style="font-family:'Playfair Display',serif;color:#ffffff;font-size:1.3rem;margin:0 0 6px;">Executive Suite</h3>
                    <p style="margin:0 0 10px;color:#f0e4d6;font-size:0.95rem;">
                        Premium space with a king bed, lounge area, dedicated work desk, and private balcony.
                    </p>
                    <div style="display:flex;justify-content:space-between;align-items:center;font-size:0.9rem;color:#e6d5c2;margin-bottom:10px;">
                        <span><i class="fas fa-user"></i> Up to 2 Guests</span>
                        <span><i class="fas fa-expand"></i> 40m²</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:auto;">
                        <span style="font-size:0.9rem;">From <strong style="color:#f3b01a;">USD $120</strong> / night</span>
                        <a href="{{ route('rooms') }}" style="color:#f3b01a;font-weight:600;font-size:0.9rem;">
                            View Details →
                        </a>
                    </div>
                </div>
            </article>

            <article style="background:#1b0904;border-radius:18px;overflow:hidden;box-shadow:0 20px 50px rgba(0,0,0,0.8);display:flex;flex-direction:column;color:#f7f2e8;">
                <div style="position:relative;">
                    <img src="{{ asset('images/image02.jpg') }}" alt="Deluxe Room" style="width:100%;height:230px;object-fit:cover;">
                </div>
                <div style="padding:22px 22px 20px;text-align:left;flex:1;display:flex;flex-direction:column;">
                    <h3 style="font-family:'Playfair Display',serif;color:#ffffff;font-size:1.3rem;margin:0 0 6px;">Deluxe Room</h3>
                    <p style="margin:0 0 10px;color:#f0e4d6;font-size:0.95rem;">
                        Elegant, spacious rooms with modern amenities, perfect for business and leisure travelers.
                    </p>
                    <div style="display:flex;justify-content:space-between;align-items:center;font-size:0.9rem;color:#e6d5c2;margin-bottom:10px;">
                        <span><i class="fas fa-user"></i> Up to 2 Guests</span>
                        <span><i class="fas fa-expand"></i> 30m²</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:auto;">
                        <span style="font-size:0.9rem;">From <strong style="color:#f3b01a;">USD $95</strong> / night</span>
                        <a href="{{ route('rooms') }}" style="color:#f3b01a;font-weight:600;font-size:0.9rem;">
                            View Details →
                        </a>
                    </div>
                </div>
            </article>

            <article style="background:#1b0904;border-radius:18px;overflow:hidden;box-shadow:0 20px 50px rgba(0,0,0,0.8);display:flex;flex-direction:column;color:#f7f2e8;">
                <div style="position:relative;">
                    <img src="{{ asset('images/image03.jpg') }}" alt="Standard Room" style="width:100%;height:230px;object-fit:cover;">
                </div>
                <div style="padding:22px 22px 20px;text-align:left;flex:1;display:flex;flex-direction:column;">
                    <h3 style="font-family:'Playfair Display',serif;color:#ffffff;font-size:1.3rem;margin:0 0 6px;">Standard Room</h3>
                    <p style="margin:0 0 10px;color:#f0e4d6;font-size:0.95rem;">
                        Thoughtfully designed rooms offering everything you need for a comfortable short stay.
                    </p>
                    <div style="display:flex;justify-content:space-between;align-items:center;font-size:0.9rem;color:#e6d5c2;margin-bottom:10px;">
                        <span><i class="fas fa-user"></i> Up to 2 Guests</span>
                        <span><i class="fas fa-expand"></i> 24m²</span>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:auto;">
                        <span style="font-size:0.9rem;">From <strong style="color:#f3b01a;">USD $75</strong> / night</span>
                        <a href="{{ route('rooms') }}" style="color:#f3b01a;font-weight:600;font-size:0.9rem;">
                            View Details →
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section" style="background:#1b0904;">
        <div class="section-header">
            <div class="section-kicker" style="color:#f3b01a;">Gallery</div>
            <h2 class="section-title" style="color:#ffffff;">A Glimpse of the Village Lodge Experience</h2>
            <p class="section-subtitle" style="color:#f0e4d6;">
                Explore some of our favorite corners — from intimate lounge areas to sunlit courtyards and refined interiors.
            </p>
        </div>

        <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:22px;">
            <img src="{{ asset('views/view01.jpg') }}" alt="Village Lodge View 1" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
            <img src="{{ asset('views/view02.jpg') }}" alt="Village Lodge View 2" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
            <img src="{{ asset('views/view03.jpg') }}" alt="Village Lodge View 3" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
            <img src="{{ asset('views/view04.jpg') }}" alt="Village Lodge View 4" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
            <img src="{{ asset('views/view05.jpg') }}" alt="Village Lodge View 5" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
            <img src="{{ asset('views/view06.jpg') }}" alt="Village Lodge View 6" style="width:100%;height:220px;object-fit:cover;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,0.7);">
        </div>
    </section>

    <!-- CTA -->
    <section class="section" style="background:#3b1a12;text-align:center;color:#f7f2e8;">
        <div style="max-width:720px;margin:0 auto;">
            <div style="font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;opacity:0.85;margin-bottom:8px;color:#f3b01a;">
                Reservations & Enquiries
            </div>
            <h2 style="font-family:'Playfair Display',serif;font-size:2.3rem;font-weight:700;margin:0;color:#ffffff;">
                Book Your Stay at Village Lodge Gweru
            </h2>
            <p style="margin-top:12px;font-size:1rem;opacity:0.92;color:#f0e4d6;">
                Share your dates and preferences, and our team will curate a stay that feels distinctly yours.
            </p>
            <div style="display:flex;justify-content:center;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="{{ route('contact') }}" class="btn-lux">
                    <span>Contact & Reservations</span>
                    <i class="fas fa-calendar-check"></i>
                </a>
                <a href="{{ route('rooms') }}" class="btn-ghost" style="border-color:rgba(255,255,255,0.55);color:#f7f2e8;">
                    <i class="fas fa-bed"></i>
                    <span>View All Rooms</span>
                </a>
            </div>
        </div>
    </section>
@endsection