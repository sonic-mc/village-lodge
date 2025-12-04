@extends('layouts.app')

@section('title', 'About Us - The Village Lodge')
@section('meta_description', 'Learn about The Village Lodge in Gweru - our history, values, and commitment to providing exceptional hospitality in the heart of Zimbabwe.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('images/image01.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    About The Village Lodge
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="about-story-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="about-story-grid" style="display:grid;grid-template-columns:minmax(0,1.1fr)minmax(0,1.2fr);gap:40px;align-items:center;">
                <div class="about-story-image" data-aos="fade-right" style="position:relative;">
                    <div style="border-radius:20px;overflow:hidden;box-shadow:0 20px 48px rgba(0,0,0,0.18);">
                        <img src="{{ asset('images/image03.jpg') }}" alt="The Village Lodge Story" style="width:100%;display:block;object-fit:cover;">
                    </div>
                    <div class="story-badge" style="position:absolute;bottom:16px;left:16px;background:rgba(25,8,4,0.9);color:#fff;border-radius:16px;padding:10px 14px;display:flex;align-items:center;gap:10px;border:1px solid rgba(255,255,255,0.18);backdrop-filter:blur(16px);">
                        <div class="badge-icon" style="font-size:1.2rem;color:#f3b01a;">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="badge-text" style="font-size:0.85rem;line-height:1.3;">
                            <span style="display:block;opacity:0.8;">Excellence in</span>
                            <strong>Hospitality</strong>
                        </div>
                    </div>
                </div>

                <div class="about-story-content" data-aos="fade-left">
                    <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                        Our Story
                    </span>
                    <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2.1rem;margin:10px 0 8px;color:#3b1a12;">
                        A Legacy of Authentic Zimbabwean Hospitality
                    </h2>
                    <div class="title-divider" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px 0 20px;"></div>
                    
                    <p class="about-text" style="font-size:0.98rem;color:#555;line-height:1.8;margin-bottom:14px;">
                        Nestled on the serene Bonniebrae Farm just outside Gweru, The Village Lodge has been 
                        a cornerstone of Zimbabwean hospitality for over 15 years. Our journey began with a 
                        simple vision: to create a sanctuary where rustic African charm meets modern luxury.
                    </p>
                    
                    <p class="about-text" style="font-size:0.98rem;color:#555;line-height:1.8;margin-bottom:14px;">
                        What started as a small collection of thatched chalets has blossomed into one of the 
                        Midlands' premier destinations for both business and leisure travelers. Each stone, 
                        each beam, and each carefully tended garden reflects our commitment to preserving 
                        authentic Zimbabwean architecture while providing world-class amenities.
                    </p>
                    
                    <p class="about-text" style="font-size:0.98rem;color:#555;line-height:1.8;margin-bottom:18px;">
                        Today, The Village Lodge stands as a testament to our unwavering dedication to excellence.  
                        We've hosted countless weddings, corporate events, and family celebrations, each one 
                        treated with the care and attention that has become our hallmark. 
                    </p>

                    <div class="about-signature" style="display:flex;align-items:center;gap:12px;margin-top:10px;">
                        <img src="{{ asset('images/image10.jpg') }}" alt="Signature" style="height:44px;object-fit:contain;">
                        <div class="signature-info" style="font-size:0.9rem;color:#444;">
                            <strong style="display:block;">Management Team</strong>
                            <span>The Village Lodge</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Our Values
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Mission &amp; Vision
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 18px;"></div>
            </div>

            <div class="mission-vision-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:26px;">
                <div class="mission-card" data-aos="flip-left" data-aos-delay="100" style="background:#ffffff;border-radius:18px;padding:26px 24px;box-shadow:0 18px 45px rgba(0,0,0,0.06);">
                    <div class="mission-icon" style="font-size:2rem;color:#f3b01a;margin-bottom:10px;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="mission-title" style="font-family:'Playfair Display',serif;font-size:1.3rem;margin:0 0 8px;color:#3b1a12;">
                        Our Mission
                    </h3>
                    <p class="mission-text" style="font-size:0.95rem;color:#555;line-height:1.7;margin:0;">
                        To provide exceptional hospitality experiences that celebrate Zimbabwean culture 
                        while delivering world-class comfort and service. We strive to create memorable 
                        moments for every guest through attention to detail, authentic warmth, and unwavering 
                        commitment to excellence.
                    </p>
                </div>

                <div class="mission-card" data-aos="flip-left" data-aos-delay="200" style="background:#ffffff;border-radius:18px;padding:26px 24px;box-shadow:0 18px 45px rgba(0,0,0,0.06);">
                    <div class="mission-icon" style="font-size:2rem;color:#f3b01a;margin-bottom:10px;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 class="mission-title" style="font-family:'Playfair Display',serif;font-size:1.3rem;margin:0 0 8px;color:#3b1a12;">
                        Our Vision
                    </h3>
                    <p class="mission-text" style="font-size:0.95rem;color:#555;line-height:1.7;margin:0;">
                        To be recognized as Zimbabwe's leading boutique lodge, setting the standard for 
                        authentic African hospitality. We aspire to expand our legacy while maintaining 
                        the intimate, personalized service that has defined The Village Lodge for over 
                        a decade.
                    </p>
                </div>

                <div class="mission-card" data-aos="flip-left" data-aos-delay="300" style="background:#ffffff;border-radius:18px;padding:26px 24px;box-shadow:0 18px 45px rgba(0,0,0,0.06);">
                    <div class="mission-icon" style="font-size:2rem;color:#f3b01a;margin-bottom:10px;">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="mission-title" style="font-family:'Playfair Display',serif;font-size:1.3rem;margin:0 0 8px;color:#3b1a12;">
                        Our Values
                    </h3>
                    <p class="mission-text" style="font-size:0.95rem;color:#555;line-height:1.7;margin:0;">
                        Excellence, authenticity, and community drive everything we do. We believe in 
                        sustainable tourism, supporting local communities, and preserving Zimbabwean 
                        heritage while creating employment opportunities and fostering economic growth 
                        in the Midlands region.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Why Choose Us
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    What Sets Us Apart
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 14px;"></div>
                <p class="section-description" style="max-width:620px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Discover the distinctive features that make The Village Lodge your premier choice 
                    for accommodation and events in Gweru.
                </p>
            </div>

            <div class="why-choose-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px;margin-top:30px;">
                @php
                    $whyItems = [
                        [
                            'icon' => 'fa-map-marked-alt',
                            'title' => 'Prime Location',
                            'text' => 'Conveniently located just outside Gweru city center, offering peaceful countryside tranquility with easy access to urban amenities.',
                            'delay' => 100,
                        ],
                        [
                            'icon' => 'fa-building',
                            'title' => 'Authentic Architecture',
                            'text' => 'Traditional thatched chalets and stone structures that celebrate Zimbabwean heritage while providing modern comfort.',
                            'delay' => 200,
                        ],
                        [
                            'icon' => 'fa-users',
                            'title' => 'Personalized Service',
                            'text' => 'Our dedicated team ensures every guest receives individual attention and customized experiences.',
                            'delay' => 300,
                        ],
                        [
                            'icon' => 'fa-utensils',
                            'title' => 'Exceptional Dining',
                            'text' => 'Savor authentic Zimbabwean cuisine and international dishes prepared by our expert culinary team.',
                            'delay' => 400,
                        ],
                        [
                            'icon' => 'fa-leaf',
                            'title' => 'Landscaped Grounds',
                            'text' => 'Beautifully maintained gardens and outdoor spaces perfect for relaxation and memorable events.',
                            'delay' => 500,
                        ],
                        [
                            'icon' => 'fa-handshake',
                            'title' => 'Event Expertise',
                            'text' => 'Experienced team specializing in weddings, conferences, and celebrations of all sizes.',
                            'delay' => 600,
                        ],
                    ];
                @endphp

                @foreach($whyItems as $item)
                    <div class="why-choose-item" data-aos="fade-up" data-aos-delay="{{ $item['delay'] }}" style="background:#f7f8f9;border-radius:16px;padding:22px 20px;border:1px solid rgba(0,0,0,0.03);box-shadow:0 10px 30px rgba(0,0,0,0.04);">
                        <div class="choose-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:10px;">
                            <i class="fas {{ $item['icon'] }}"></i>
                        </div>
                        <h4 class="choose-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                            {{ $item['title'] }}
                        </h4>
                        <p class="choose-text" style="font-size:0.94rem;color:#555;line-height:1.7;margin:0;">
                            {{ $item['text'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics-section" style="position:relative;padding:70px 0;background:url('{{ asset('images/image06.jpg') }}') center/cover no-repeat;">
        {{-- <div class="statistics-overlay" style="position:absolute;inset:0;background:rgba(15,4,2,0.92);"></div> --}}
        <div class="section" style="position:relative;">
            <div class="statistics-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:24px;">
                <div class="stat-item" data-aos="zoom-in" data-aos-delay="100" style="text-align:center;color:#fff;">
                    <div class="stat-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:6px;">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-number" data-target="15" style="font-size:1.9rem;font-weight:700;margin-bottom:4px;">0</div>
                    <div class="stat-label" style="font-size:0.9rem;opacity:0.8;">Years of Excellence</div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="200" style="text-align:center;color:#fff;">
                    <div class="stat-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:6px;">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number" data-target="10000" style="font-size:1.9rem;font-weight:700;margin-bottom:4px;">0</div>
                    <div class="stat-label" style="font-size:0.9rem;opacity:0.8;">Happy Guests</div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300" style="text-align:center;color:#fff;">
                    <div class="stat-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:6px;">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <div class="stat-number" data-target="45" style="font-size:1.9rem;font-weight:700;margin-bottom:4px;">0</div>
                    <div class="stat-label" style="font-size:0.9rem;opacity:0.8;">Luxury Rooms</div>
                </div>

                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400" style="text-align:center;color:#fff;">
                    <div class="stat-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:6px;">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number" data-target="25" style="font-size:1.9rem;font-weight:700;margin-bottom:4px;">0</div>
                    <div class="stat-label" style="font-size:0.9rem;opacity:0.8;">Awards Won</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Meet The Team
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Our Dedicated Staff
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 14px;"></div>
                <p class="section-description" style="max-width:620px;margin:0 auto;font-size:0.96rem;color:#555;">
                    The heart of The Village Lodge is our passionate team committed to making 
                    your stay unforgettable.
                </p>
            </div>

            <div class="team-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px;margin-top:28px;">
                @php
                    $team = [
                        [
                            'image' => 'team-1.jpg',
                            'name' => 'Sarah Moyo',
                            'position' => 'General Manager',
                            'social' => ['facebook-f', 'twitter', 'linkedin-in'],
                            'delay' => 100,
                        ],
                        [
                            'image' => 'image10.jpg',
                            'name' => 'Tendai Ncube',
                            'position' => 'Head Chef',
                            'social' => ['facebook-f', 'twitter', 'instagram'],
                            'delay' => 200,
                        ],
                        [
                            'image' => 'image12.jpg',
                            'name' => 'Rufaro Chikwanha',
                            'position' => 'Events Manager',
                            'social' => ['facebook-f', 'twitter', 'linkedin-in'],
                            'delay' => 300,
                        ],
                        [
                            'image' => 'team-4.jpg',
                            'name' => 'Tarisai Mupfumi',
                            'position' => 'Hospitality Manager',
                            'social' => ['facebook-f', 'instagram', 'linkedin-in'],
                            'delay' => 400,
                        ],
                    ];
                @endphp

                @foreach($team as $member)
                    <div class="team-member" data-aos="fade-up" data-aos-delay="{{ $member['delay'] }}" style="background:#ffffff;border-radius:18px;overflow:hidden;box-shadow:0 16px 45px rgba(0,0,0,0.06);">
                        <div class="member-image" style="position:relative;overflow:hidden;">
                            <img src="{{ asset('images/'.$member['image']) }}" alt="{{ $member['name'] }}" style="width:100%;height:240px;object-fit:cover;display:block;">
                            <div class="member-social" style="position:absolute;inset:0;background:linear-gradient(to top,rgba(15,4,2,0.9),transparent);display:flex;align-items:flex-end;justify-content:flex-start;gap:8px;padding:12px;opacity:0;transition:opacity 0.25s ease;">
                                @foreach($member['social'] as $icon)
                                    <a href="#" style="width:30px;height:30px;border-radius:50%;border:1px solid rgba(255,255,255,0.7);display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.8rem;">
                                        <i class="fab fa-{{ $icon }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="member-info" style="padding:14px 16px 16px;text-align:center;">
                            <h4 class="member-name" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 4px;color:#3b1a12;">
                                {{ $member['name'] }}
                            </h4>
                            <span class="member-position" style="font-size:0.9rem;color:#777;">{{ $member['position'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="position:relative;padding:70px 0;background:url('{{ asset('events/event01.jpg') }}') center/cover no-repeat;">
        {{-- <div class="cta-overlay" style="position:absolute;inset:0;background:rgba(15,4,2,0.9);"></div> --}}
        <div class="section" style="position:relative;text-align:center;color:#fff;">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title" style="font-family:'Playfair Display',serif;font-size:2.2rem;margin:0 0 10px;">
                    Experience The Village Lodge Difference
                </h2>
                <p class="cta-description" style="font-size:0.98rem;max-width:540px;margin:0 auto 20px;opacity:0.9;">
                    Book your stay today and discover why guests return to us year after year.
                </p>
                <div class="cta-buttons" style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn-lux" style="padding:11px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book Now</span>
                    </a>
                    <a href="{{ route('rooms') }}" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);padding:10px 20px;font-size:0.9rem;">
                        <i class="fas fa-bed"></i>
                        <span>View Rooms</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    // Animated Counter for Statistics
    function animateCounter(element) {
        const target = parseInt(element.dataset.target, 10);
        if (isNaN(target)) return;

        const duration = 2000; // ms
        const frame = 16;
        const steps = duration / frame;
        const increment = target / steps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target.toLocaleString() + '+';
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, frame);
    }

    // Intersection Observer for counters
    const statsSection = document.querySelector('.statistics-section');
    if (statsSection) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.stat-number');
                    counters.forEach(counter => animateCounter(counter));
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counterObserver.observe(statsSection);
    }

    // Team social hover
    document.querySelectorAll('.team-member .member-image').forEach(wrapper => {
        const social = wrapper.querySelector('.member-social');
        if (!social) return;
        wrapper.addEventListener('mouseenter', () => {
            social.style.opacity = '1';
        });
        wrapper.addEventListener('mouseleave', () => {
            social.style.opacity = '0';
        });
    });
</script>
@endsection