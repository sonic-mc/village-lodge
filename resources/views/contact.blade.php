@extends('layouts.app')

@section('title', 'Contact Us - The Village Lodge')
@section('meta_description', 'Get in touch with The Village Lodge. Call +263 78 257 5571, email staywithus@thevillagezim.com, or visit us at Bonniebrae Farm, Gweru, Zimbabwe.')

@section('content')
    <!-- Page Header -->
    {{-- <section class="page-header" style="background-image: url('{{ asset('events/event03.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Contact Us
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Contact Info Section -->
    <section class="contact-info-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Get In Touch
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    We&apos;re Here to Help
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:640px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Have a question or ready to book your stay? Our friendly team is available 24/7 
                    to assist you with reservations, inquiries, and special requests.
                </p>
            </div>

            <div class="contact-info-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:22px;margin-top:26px;">
                <!-- Phone -->
                <div class="contact-info-card" data-aos="fade-up" data-aos-delay="100" style="background:#f7f8f9;border-radius:18px;padding:20px 18px;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                    <div class="contact-info-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="contact-info-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                        Phone
                    </h3>
                    <div class="contact-info-details" style="font-size:0.95rem;">
                        <a href="tel:+263782575571" style="display:block;color:#555;margin-bottom:4px;">+263 78 257 5571</a>
                        <a href="tel:+263780072810" style="display:block;color:#555;margin-bottom:4px;">+263 78 007 2810</a>
                        <a href="tel:+263776073652" style="display:block;color:#555;margin-bottom:4px;">+263 77 607 3652</a>
                        <p class="contact-landline" style="margin:4px 0 0;color:#777;">Landline: +263 54 222 186</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="contact-info-card" data-aos="fade-up" data-aos-delay="200" style="background:#f7f8f9;border-radius:18px;padding:20px 18px;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                    <div class="contact-info-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="contact-info-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                        Email
                    </h3>
                    <div class="contact-info-details" style="font-size:0.95rem;">
                        <a href="mailto:staywithus@thevillagezim.com" style="display:block;color:#555;margin-bottom:4px;">staywithus@thevillagezim.com</a>
                        <a href="mailto:reservations@thevillagezim.com" style="display:block;color:#555;margin-bottom:4px;">reservations@thevillagezim.com</a>
                        <a href="mailto:events@thevillagezim.com" style="display:block;color:#555;margin-bottom:4px;">events@thevillagezim.com</a>
                    </div>
                </div>

                <!-- Address -->
                <div class="contact-info-card" data-aos="fade-up" data-aos-delay="300" style="background:#f7f8f9;border-radius:18px;padding:20px 18px;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                    <div class="contact-info-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="contact-info-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                        Address
                    </h3>
                    <div class="contact-info-details" style="font-size:0.95rem;color:#555;">
                        <p style="margin:0;">Lot 1, Bonniebrae Farm</p>
                        <p style="margin:2px 0;">Christmas Gift, Gweru</p>
                        <p style="margin:0 0 6px;">Midlands, Zimbabwe</p>
                        <a href="#map" class="contact-directions-link" style="display:inline-flex;align-items:center;gap:6px;color:#3b1a12;font-size:0.9rem;">
                            <i class="fas fa-directions"></i> Get Directions
                        </a>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="contact-info-card" data-aos="fade-up" data-aos-delay="400" style="background:#f7f8f9;border-radius:18px;padding:20px 18px;box-shadow:0 12px 34px rgba(0,0,0,0.05);">
                    <div class="contact-info-icon" style="font-size:1.6rem;color:#f3b01a;margin-bottom:8px;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="contact-info-title" style="font-family:'Playfair Display',serif;font-size:1.2rem;margin:0 0 6px;color:#3b1a12;">
                        Working Hours
                    </h3>
                    <div class="contact-info-details" style="font-size:0.95rem;color:#555;">
                        <p style="margin:0 0 2px;"><strong>Reception:</strong> 24/7</p>
                        <p style="margin:0 0 2px;"><strong>Restaurant:</strong> 6:30 AM - 10:00 PM</p>
                        <p style="margin:0 0 2px;"><strong>Bar:</strong> 10:00 AM - Midnight</p>
                        <p style="margin:0;"><strong>Pool:</strong> 7:00 AM - 7:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section">
            <div class="contact-form-wrapper" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;align-items:flex-start;">
                <!-- Left info -->
                <div class="contact-form-info" data-aos="fade-right">
                    <h3 class="contact-form-info-title" style="font-family:'Playfair Display',serif;font-size:1.6rem;margin:0 0 10px;color:#3b1a12;">
                        Send Us a Message
                    </h3>
                    <p class="contact-form-info-text" style="font-size:0.96rem;color:#555;line-height:1.8;margin:0 0 16px;">
                        Fill out the form below and our team will get back to you within 24 hours.  
                        Whether you&apos;re inquiring about accommodation, events, or general information, 
                        we&apos;re here to help.
                    </p>

                    <div class="contact-quick-links" style="margin-bottom:20px;">
                        <h4 class="quick-links-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 6px;color:#3b1a12;">
                            Quick Links
                        </h4>
                        <ul class="quick-links-list" style="list-style:none;padding:0;margin:0;font-size:0.94rem;">
                            <li style="margin-bottom:4px;">
                                <a href="{{ route('rooms') }}" style="color:#3b1a12;display:inline-flex;align-items:center;gap:6px;">
                                    <i class="fas fa-bed"></i> Room Reservations
                                </a>
                            </li>
                            <li style="margin-bottom:4px;">
                                <a href="{{ route('events') }}" style="color:#3b1a12;display:inline-flex;align-items:center;gap:6px;">
                                    <i class="fas fa-calendar-alt"></i> Event Bookings
                                </a>
                            </li>
                            <li style="margin-bottom:4px;">
                                <a href="{{ route('facilities') }}" style="color:#3b1a12;display:inline-flex;align-items:center;gap:6px;">
                                    <i class="fas fa-concierge-bell"></i> Facilities Info
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}" style="color:#3b1a12;display:inline-flex;align-items:center;gap:6px;">
                                    <i class="fas fa-images"></i> Photo Gallery
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-social">
                        <h4 class="contact-social-title" style="font-family:'Playfair Display',serif;font-size:1.1rem;margin:0 0 6px;color:#3b1a12;">
                            Connect With Us
                        </h4>
                        <div class="contact-social-links" style="display:flex;gap:8px;flex-wrap:wrap;">
                            <a href="https://www.facebook.com/VillageLodgeZWOfficialPage" target="_blank" class="contact-social-btn" style="width:34px;height:34px;border-radius:50%;background:#3b1a12;display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.9rem;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/thevillagelodgesgweru" target="_blank" class="contact-social-btn" style="width:34px;height:34px;border-radius:50%;background:#3b1a12;display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.9rem;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.tripadvisor.com" target="_blank" class="contact-social-btn" style="width:34px;height:34px;border-radius:50%;background:#3b1a12;display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.9rem;">
                                <i class="fab fa-tripadvisor"></i>
                            </a>
                            <a href="https://wa.me/263782575571" target="_blank" class="contact-social-btn" style="width:34px;height:34px;border-radius:50%;background:#3b1a12;display:flex;align-items:center;justify-content:center;color:#fff;font-size:0.9rem;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="contact-form-container" data-aos="fade-left">
                    <form action="{{ route('api.contact') }}" method="POST" class="contact-form" id="contactForm" data-validate="true" style="background:#ffffff;border-radius:18px;padding:20px 18px;box-shadow:0 16px 45px rgba(0,0,0,0.06);">
                        @csrf
                        
                        <div class="form-row" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;">
                            <div class="form-group">
                                <label for="name" style="font-size:0.9rem;color:#444;margin-bottom:4px;display:block;">
                                    <i class="fas fa-user"></i> Full Name *
                                </label>
                                <input type="text" id="name" name="name" class="form-control" required placeholder="Your full name" style="width:100%;padding:9px 10px;border-radius:10px;border:1px solid #dcdfe3;font-size:0.92rem;">
                            </div>

                            <div class="form-group">
                                <label for="email" style="font-size:0.9rem;color:#444;margin-bottom:4px;display:block;">
                                    <i class="fas fa-envelope"></i> Email Address *
                                </label>
                                <input type="email" id="email" name="email" class="form-control" required placeholder="your.email@example.com" style="width:100%;padding:9px 10px;border-radius:10px;border:1px solid #dcdfe3;font-size:0.92rem;">
                            </div>
                        </div>

                        <div class="form-row" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:14px;margin-top:10px;">
                            <div class="form-group">
                                <label for="phone" style="font-size:0.9rem;color:#444;margin-bottom:4px;display:block;">
                                    <i class="fas fa-phone"></i> Phone Number *
                                </label>
                                <input type="tel" id="phone" name="phone" class="form-control" required placeholder="+263 XX XXX XXXX" style="width:100%;padding:9px 10px;border-radius:10px;border:1px solid #dcdfe3;font-size:0.92rem;">
                            </div>

                            <div class="form-group">
                                <label for="subject" style="font-size:0.9rem;color:#444;margin-bottom:4px;display:block;">
                                    <i class="fas fa-tag"></i> Subject *
                                </label>
                                <select id="subject" name="subject" class="form-control" required style="width:100%;padding:9px 10px;border-radius:10px;border:1px solid #dcdfe3;font-size:0.92rem;">
                                    <option value="">Select a subject</option>
                                    <option value="reservation">Room Reservation</option>
                                    <option value="event">Event Booking</option>
                                    <option value="inquiry">General Inquiry</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top:10px;">
                            <label for="message" style="font-size:0.9rem;color:#444;margin-bottom:4px;display:block;">
                                <i class="fas fa-comment-alt"></i> Message *
                            </label>
                            <textarea id="message" name="message" class="form-control" rows="6" required placeholder="Tell us how we can help you..." style="width:100%;padding:9px 10px;border-radius:10px;border:1px solid #dcdfe3;font-size:0.92rem;resize:vertical;"></textarea>
                        </div>

                        <div class="form-group form-checkbox" style="margin:8px 0 12px;display:flex;align-items:center;gap:6px;font-size:0.9rem;color:#555;">
                            <input type="checkbox" id="newsletter" name="newsletter" style="width:14px;height:14px;">
                            <label for="newsletter" style="cursor:pointer;">Subscribe to our newsletter for special offers and updates</label>
                        </div>

                        <button type="submit" class="btn-lux" style="width:100%;justify-content:center;padding:10px 0;font-size:0.95rem;">
                            <i class="fas fa-paper-plane"></i>
                            <span style="margin-left:6px;">Send Message</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" id="map" style="position:relative;">
        <div class="map-container" style="position:relative;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.4!2d29.8!3d-19.45!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI3JzAwLjAiUyAyOcKwNDgnMDAuMCJF!5e0!3m2!1sen!2szw!4v1234567890"
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="map-overlay-info" style="position:absolute;top:20px;left:50%;transform:translateX(-50%);max-width:320px;">
            <div class="map-info-card" data-aos="fade-up" style="background:#1b0904;color:#fff;padding:16px 18px;border-radius:16px;box-shadow:0 18px 45px rgba(0,0,0,0.6);">
                <h3 class="map-info-title" style="font-family:'Playfair Display',serif;font-size:1.3rem;margin:0 0 6px;">
                    Find Us
                </h3>
                <p class="map-info-address" style="font-size:0.94rem;margin:0 0 10px;">
                    <i class="fas fa-map-marker-alt"></i>
                    <span style="margin-left:6px;">Lot 1, Bonniebrae Farm, Christmas Gift, Gweru, Zimbabwe</span>
                </p>
                <a href="https://www.google.com/maps/dir//The+Village+Lodge+Gweru" target="_blank" class="btn-lux" style="padding:8px 16px;font-size:0.88rem;">
                    <i class="fas fa-directions"></i>
                    <span style="margin-left:6px;">Get Directions</span>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Have Questions?
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Frequently Asked Questions
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
            </div>

            <div class="faq-accordion" style="max-width:720px;margin:0 auto;">
                @php
                    $faqs = [
                        [
                            'q' => 'What are your check-in and check-out times?',
                            'a' => 'Check-in time is 2:00 PM and check-out time is 10:00 AM. Early check-in and late check-out may be available upon request and subject to availability.',
                            'delay' => 100,
                        ],
                        [
                            'q' => 'Do you offer airport transfer services?',
                            'a' => 'Yes, we offer airport transfer services for our guests. Please contact us in advance to arrange pickup or drop-off. Charges apply based on distance.',
                            'delay' => 200,
                        ],
                        [
                            'q' => 'What is your cancellation policy?',
                            'a' => 'Cancellations made 48 hours before check-in receive a full refund. Cancellations made within 48 hours are subject to a one-night charge. No-shows will be charged the full reservation amount.',
                            'delay' => 300,
                        ],
                        [
                            'q' => 'Do you have WiFi available?',
                            'a' => 'Yes, complimentary high-speed WiFi is available throughout the property including all rooms, public areas, and event spaces.',
                            'delay' => 400,
                        ],
                        [
                            'q' => 'Can I host my wedding at The Village Lodge?',
                            'a' => 'Absolutely! We specialize in weddings and can accommodate up to 300 guests. Our events team will work with you to create your perfect day. Contact us for a personalized wedding package quote.',
                            'delay' => 500,
                        ],
                        [
                            'q' => 'Is parking available?',
                            'a' => 'Yes, we offer complimentary secure parking for all our guests with 24-hour security monitoring.',
                            'delay' => 600,
                        ],
                    ];
                @endphp

                @foreach($faqs as $faq)
                    <div class="faq-item" data-aos="fade-up" data-aos-delay="{{ $faq['delay'] }}" style="border-radius:14px;border:1px solid #e3e5ea;margin-bottom:8px;overflow:hidden;">
                        <button class="faq-question" style="width:100%;background:#f7f8f9;border:none;outline:none;padding:10px 14px;display:flex;justify-content:space-between;align-items:center;font-size:0.95rem;cursor:pointer;">
                            <span>{{ $faq['q'] }}</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer" style="display:none;padding:10px 14px;font-size:0.93rem;color:#555;background:#ffffff;border-top:1px solid #e3e5ea;">
                            <p style="margin:0;">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const questionBtn = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            questionBtn.addEventListener('click', function() {
                const isActive = item.classList.contains('active');

                // Close all
                faqItems.forEach(i => {
                    i.classList.remove('active');
                    const a = i.querySelector('.faq-answer');
                    if (a) a.style.display = 'none';
                });

                // Open clicked
                if (!isActive) {
                    item.classList.add('active');
                    answer.style.display = 'block';
                }
            });
        });

        // Pre-fill form if URL parameters exist
        const urlParams = new URLSearchParams(window.location.search);
        const subjectEl = document.getElementById('subject');
        const messageEl = document.getElementById('message');

        if (urlParams.has('room') && subjectEl && messageEl) {
            subjectEl.value = 'reservation';
            const roomName = urlParams.get('room').replace(/-/g, ' ');
            messageEl.value = `I would like to inquire about booking a ${roomName}.`;
        }

        if (urlParams.has('event') && subjectEl && messageEl) {
            subjectEl.value = 'event';
            const eventType = urlParams.get('event').replace(/-/g, ' ');
            messageEl.value = `I would like to inquire about hosting a ${eventType} event.`;
        }
    });
</script>
@endsection