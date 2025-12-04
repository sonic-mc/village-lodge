<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Village Lodge Gweru'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-rXnZK6t7fCJpB2W+g7YkPAySMW+R/7WTxaqpZkXc4ykaJb/GBPrly6ux/Y9mkjiE1jA6U0D0J6M4bVR7i9HQWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Core Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Page-specific styles -->
    @stack('styles')

    <style>
  :root {
    /* Core palette – tuned to poster look */
    --color-primary: #3b1a12;          /* deep chocolate brown (main background / header) */
    --color-primary-dark: #220d08;     /* even darker brown for overlays/shadows */
    --color-accent: #f3b01a;           /* warm golden yellow (buttons, highlights, headings) */
    --color-accent-dark: #d2920f;      /* darker gold for hover states */
    --color-bg: #2b140e;               /* page background – dark brown similar to menus */
    --color-text: #f7f2e8;             /* soft off‑white for body text */
    --transition-fast: 0.25s ease;
    --transition-med: 0.35s ease;
    --shadow-soft: 0 18px 45px rgba(0,0,0,0.6);
    --radius-card: 18px;
    --max-width: 1200px;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: var(--color-bg);
    color: var(--color-text);
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
}

a {
    text-decoration: none;
    color: inherit;
}

img {
    max-width: 100%;
    display: block;
}

/* Header / Navigation */
header {
    background: linear-gradient(
        135deg,
        rgba(34, 13, 8, 0.98),
        rgba(59, 26, 18, 0.98)
    ); /* dark brown gradient */
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 50;
    backdrop-filter: blur(20px);
}

.lux-nav {
    max-width: var(--max-width);
    margin: auto;
    padding: 14px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 18px;
}

.lux-logo {
    display: flex;
    align-items: center;
    gap: 14px;
}

.lux-logo img {
    height: 58px;
    width: 58px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid rgba(255,255,255,0.7);
    box-shadow: 0 0 0 3px var(--color-accent); /* golden ring */
}

.lux-logo-text {
    display: flex;
    flex-direction: column;
}

.lux-logo-text .brand-primary {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    font-weight: 700;
    color: #ffffff;
}

.lux-logo-text .brand-secondary {
    font-size: 0.8rem;
    letter-spacing: 0.32em;
    text-transform: uppercase;
    opacity: 0.8;
    color: #f0e7d8;
}

.nav-desktop {
    display: flex;
    align-items: center;
    gap: 36px;
}

.nav-desktop ul {
    list-style: none;
    display: flex;
    gap: 24px;
    margin: 0;
    padding: 0;
}

.nav-desktop li a {
    color: #fdf6ea;
    font-weight: 500;
    font-size: 0.96rem;
    position: relative;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    padding-bottom: 4px;
}

.nav-desktop li a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: var(--color-accent);
    transition: width var(--transition-fast);
}

.nav-desktop li a:hover::after,
.nav-desktop li a.active::after {
    width: 100%;
}

.nav-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 18px;
    border-radius: 999px;
    background: var(--color-accent);
    color: #2b0c03 !important;
    font-weight: 600;
    font-size: 0.9rem;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    box-shadow: 0 12px 30px rgba(0,0,0,0.55);
    transition: transform var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
}

.nav-cta i {
    font-size: 0.9rem;
}

.nav-cta:hover {
    background: var(--color-accent-dark);
    transform: translateY(-1px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.7);
}

/* Mobile Nav Toggle */
.nav-toggle {
    display: none;
    background: none;
    border: none;
    color: #fff;
    font-size: 1.4rem;
    cursor: pointer;
}

.nav-mobile {
    display: none;
    background: rgba(34, 13, 8, 0.98);
    border-top: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(24px);
}

.nav-mobile ul {
    list-style: none;
    margin: 0;
    padding: 12px 5% 18px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.nav-mobile li a {
    color: #fdf6ea;
    font-size: 0.95rem;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    opacity: 0.9;
}

.nav-mobile-cta {
    margin-top: 8px;
}

/* Hero */
.hero {
    position: relative;
    height: 88vh;
    min-height: 540px;
    background:
        radial-gradient(circle at top, rgba(243, 176, 26, 0.20), transparent 60%),
        url('{{ asset('images/lodge-hero.jpg') }}') center/cover no-repeat fixed;
    color: #fff;
    overflow: hidden;
}

/* REMOVE the dark overlay entirely */
.hero::after {
    content: none;
}

.hero-inner {
    position: relative;
    max-width: var(--max-width);
    margin: 0 auto;
    height: 100%;
    padding: 0 5%;
    display: grid;
    grid-template-columns: minmax(0, 1.35fr) minmax(0, 1fr);
    align-items: center;
    gap: 40px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    border-radius: 999px;
    background: rgba(0, 0, 0, 0.55);
    border: 1px solid rgba(255, 255, 255, 0.22);
    backdrop-filter: blur(18px);
    margin-bottom: 18px;
}

.hero-badge i {
    color: var(--color-accent);
}

.hero-badge span {
    font-size: 0.78rem;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    opacity: 0.9;
    color: #fdf6ea;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.7rem, 4vw, 3.8rem);
    margin: 0 0 14px;
    line-height: 1.15;
    text-shadow: 0 18px 45px rgba(0,0,0,0.9);
    color: #ffffff;
}

.hero h1 span {
    color: var(--color-accent);
}

.hero-subtitle {
    font-size: 1.05rem;
    max-width: 540px;
    opacity: 0.95;
    margin-bottom: 26px;
    color: #f7f2e8;
}

.hero-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-bottom: 26px;
}

.hero-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    opacity: 0.96;
    color: #f7f2e8;
}

.hero-meta-item i {
    color: var(--color-accent);
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    align-items: center;
}

.btn-lux {
    background: var(--color-accent);
    color: #2b0c03;
    padding: 12px 26px;
    border-radius: 999px;
    font-weight: 600;
    font-size: 0.95rem;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 16px 45px rgba(0, 0, 0, 0.7);
    transition: background var(--transition-med), transform var(--transition-fast), box-shadow var(--transition-fast);
}

.btn-lux i {
    font-size: 0.9rem;
}

.btn-lux:hover {
    background: var(--color-accent-dark);
    transform: translateY(-2px);
    box-shadow: 0 22px 60px rgba(0, 0, 0, 0.8);
}

.btn-ghost {
    background: transparent;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.55);
    padding: 11px 22px;
    color: #fdf6ea;
    font-size: 0.9rem;
    font-weight: 500;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    backdrop-filter: blur(14px);
    transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
}

.btn-ghost:hover {
    background: rgba(0,0,0,0.5);
    border-color: var(--color-accent);
    transform: translateY(-1px);
}

.hero-floating-card {
    position: relative;
    border-radius: 20px;
    padding: 18px 18px 16px;
    background: rgba(25, 8, 4, 0.92);
    border: 1px solid rgba(255,255,255,0.12);
    box-shadow: 0 24px 65px rgba(0,0,0,0.85);
    backdrop-filter: blur(20px);
}

.hero-floating-card-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 8px;
}

.hero-floating-title {
    font-size: 0.9rem;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    opacity: 0.85;
    color: #f8f0e3;
}

.hero-floating-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.86rem;
    color: #f8f0e3;
}

.hero-floating-rating span.stars {
    color: var(--color-accent);
}

.hero-floating-body {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 12px;
    margin-top: 10px;
}

.hero-floating-item {
    background: rgba(255,255,255,0.02);
    border-radius: 14px;
    padding: 10px 12px;
    border: 1px solid rgba(255,255,255,0.08);
}

.hero-floating-item-label {
    font-size: 0.7rem;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    opacity: 0.7;
    color: #e6d5c2;
    margin-bottom: 4px;
}

.hero-floating-item-value {
    font-size: 0.88rem;
    font-weight: 500;
    color: #f7f2e8;
}

.hero-floating-footer {
    margin-top: 12px;
    padding-top: 10px;
    border-top: 1px dashed rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}

.hero-floating-footer small {
    font-size: 0.7rem;
    opacity: 0.78;
    color: #e6d5c2;
}

.hero-floating-footer .price-highlight {
    font-weight: 600;
    color: var(--color-accent);
}

/* Generic sections */
main {
    min-height: 40vh;
    background:
        radial-gradient(circle at top right, rgba(243, 176, 26, 0.12), transparent 55%),
        #2b140e;
}

.section {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 68px 5% 64px;
}

.section-header {
    text-align: center;
    margin-bottom: 40px;
}

.section-kicker {
    font-size: 0.8rem;
    letter-spacing: 0.24em;
    text-transform: uppercase;
    color: var(--color-accent);
    opacity: 0.85;
    margin-bottom: 6px;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin: 0;
    color: #ffffff;
}

.section-subtitle {
    max-width: 560px;
    margin: 12px auto 0;
    color: #f0e4d6;
    font-size: 0.98rem;
}

/* Footer */
footer {
    background:
        radial-gradient(circle at top, rgba(243, 176, 26, 0.2), transparent 52%),
        #1b0904;
    color: #f7f2e8;
    padding: 60px 0 22px;
    margin-top: 60px;
    border-top: 1px solid rgba(255,255,255,0.08);
}

.footer-wrapper {
    max-width: var(--max-width);
    margin: auto;
    padding: 0 5%;
    display: grid;
    grid-template-columns: 2.1fr 1.5fr 1.5fr 1.4fr;
    gap: 34px;
}

.footer-column h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    margin-bottom: 16px;
    color: var(--color-accent);
}

.footer-column p {
    font-size: 0.92rem;
    opacity: 0.85;
    margin-bottom: 8px;
    color: #f0e4d6;
}

.footer-brand {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #ffffff;
}

.footer-tagline {
    font-size: 0.9rem;
    opacity: 0.82;
    margin-bottom: 8px;
    color: #f0e4d6;
}

.footer-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 12px;
    border-radius: 999px;
    border: 1px solid rgba(255,255,255,0.18);
    font-size: 0.75rem;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    opacity: 0.9;
    margin-top: 4px;
    color: #f7f2e8;
}

.footer-column a {
    color: #f7f2e8;
    font-size: 0.92rem;
    opacity: 0.82;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    transition: color var(--transition-fast), opacity var(--transition-fast), transform var(--transition-fast);
}

.footer-column a i {
    font-size: 0.85rem;
    color: var(--color-accent);
}

.footer-column a:hover {
    color: var(--color-accent);
    opacity: 1;
    transform: translateX(3px);
}

.footer-bottom {
    max-width: var(--max-width);
    margin: 40px auto 0;
    padding: 0 5%;
    text-align: center;
    border-top: 1px solid rgba(255,255,255,0.16);
    padding-top: 16px;
    font-size: 0.86rem;
    opacity: 0.78;
    color: #f0e4d6;
}

.footer-bottom span {
    color: var(--color-accent);
}

/* Responsive */
@media (max-width: 960px) {
    .hero-inner {
        grid-template-columns: minmax(0, 1fr);
        align-items: flex-end;
        padding-bottom: 44px;
    }

    .hero-floating-card {
        margin-top: 16px;
        max-width: 360px;
    }

    .footer-wrapper {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }
}

@media (max-width: 800px) {
    .nav-desktop {
        display: none;
    }

    .nav-toggle {
        display: inline-flex;
    }

    .hero {
        min-height: 520px;
        background-attachment: scroll;
    }
}

@media (max-width: 600px) {
    .hero {
        height: auto;
        padding: 80px 0 40px;
    }

    .hero-inner {
        min-height: auto;
    }

    .section {
        padding: 52px 6% 48px;
    }
}
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="lux-nav">
            <a href="{{ route('home') }}" class="lux-logo">
                <img src="{{ asset('images/lodge-logo.png') }}" alt="Village Lodge Gweru Logo" />
                <div class="lux-logo-text">
                    <span class="brand-primary">Village Lodge Gweru</span>
                    <span class="brand-secondary">A Curated Luxury Retreat</span>
                </div>
            </a>

            <button class="nav-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="nav-desktop">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('rooms') }}" class="{{ request()->routeIs('rooms') ? 'active' : '' }}">Rooms</a></li>
                    <li><a href="{{ route('restaurant') }}" class="{{ request()->routeIs('restaurant') ? 'active' : '' }}">Restaurant</a></li>
                    <li><a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Events</a></li>
                    <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
                <a href="{{ route('rooms') }}" class="nav-cta">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book a Stay</span>
                </a>
            </div>
        </div>

        <div class="nav-mobile" id="mobileNav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('rooms') }}">Rooms</a></li>
                <li><a href="{{ route('restaurant') }}">Restaurant</a></li>
                <li><a href="{{ route('events') }}">Events</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-mobile-cta">
                    <a href="{{ route('rooms') }}" class="nav-cta" style="width: 100%; justify-content: center;">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Optional Hero for homepage -->
    @if (request()->routeIs('home'))
    <section
    class="hero"
    style="
        position:relative;
        padding:70px 0;
        color:#f7f2e8;
        background:
            radial-gradient(circle at top, rgba(243,176,26,0.18), transparent 60%),
            url('{{ asset('images/image01.jpg') }}') center/cover no-repeat;
    "
>
    <!-- low overlay so image is visible but content pops -->
    <div style="
        position:absolute;
        inset:0;
        background:linear-gradient(
            to right,
            rgba(15,4,2,0.70),
            rgba(15,4,2,0.35)
        );
        pointer-events:none;
    "></div>

    <div class="hero-inner" style="
        position:relative;
        max-width:1200px;
        margin:0 auto;
        padding:0 5%;
        display:grid;
        grid-template-columns:minmax(0,1.35fr) minmax(0,1fr);
        gap:40px;
        align-items:center;
    ">
        <div>
            <div class="hero-badge" style="background:rgba(0,0,0,0.45);border-color:rgba(255,255,255,0.6);">
                <i class="fas fa-star" style="color:#f3b01a;"></i>
                <span style="color:#fdf8ef;">Signature Village Luxury • Gweru</span>
            </div>
            <h1 style="font-family:'Playfair Display',serif;font-size:clamp(2.7rem,4vw,3.8rem);margin:0 0 14px;line-height:1.15;color:#ffffff;text-shadow:0 18px 45px rgba(0,0,0,0.8);">
                Luxury. Comfort. <span style="color:#f3b01a;">Serenity.</span>
            </h1>
            <p class="hero-subtitle" style="font-size:1.05rem;max-width:540px;opacity:0.96;margin-bottom:26px;color:#f0e4d6;">
                Discover a sanctuary of timeless elegance set in the heart of Gweru. 
                Impeccable suites, curated gastronomy, and warm Zimbabwean hospitality 
                crafted for discerning travelers, executives, and cherished celebrations.
            </p>

            <div class="hero-meta">
                <div class="hero-meta-item" style="color:#fdf8ef;">
                    <i class="fas fa-moon" style="color:#f3b01a;"></i>
                    <span>Premium suites &amp; executive rooms</span>
                </div>
                <div class="hero-meta-item" style="color:#fdf8ef;">
                    <i class="fas fa-utensils" style="color:#f3b01a;"></i>
                    <span>Fine dining &amp; curated wine selection</span>
                </div>
                <div class="hero-meta-item" style="color:#fdf8ef;">
                    <i class="fas fa-champagne-glasses" style="color:#f3b01a;"></i>
                    <span>Bespoke events &amp; conferencing</span>
                </div>
            </div>

            <div class="hero-actions">
                <a href="{{ route('rooms') }}" class="btn-lux">
                    <span>Explore Suites</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('about') }}" class="btn-ghost" style="border-color:rgba(255,255,255,0.7);color:#ffffff;">
                    <i class="fas fa-play"></i>
                    <span>Discover the Lodge</span>
                </a>
            </div>
        </div>

        <div class="hero-floating-card" style="
            position:relative;
            border-radius:20px;
            padding:18px 18px 16px;
            background:rgba(3,16,11,0.88);
            border:1px solid rgba(255,255,255,0.18);
            box-shadow:0 24px 65px rgba(0,0,0,0.8);
            backdrop-filter:blur(20px);
        ">
            <div class="hero-floating-card-header">
                <div>
                    <div class="hero-floating-title" style="font-size:0.9rem;letter-spacing:0.18em;text-transform:uppercase;opacity:0.9;color:#fdf8ef;">
                        Tailored Stay
                    </div>
                    <div style="font-size:0.86rem;opacity:0.9;color:#f0e4d6;">Curate your experience in three steps</div>
                </div>
                <div class="hero-floating-rating" style="display:flex;align-items:center;gap:6px;font-size:0.86rem;color:#fdf8ef;">
                    <span class="stars" style="color:#f3b01a;"><i class="fas fa-star"></i> 4.9</span>
                    <span style="font-size:0.8rem;opacity:0.85;">Guest Rating</span>
                </div>
            </div>

            <div class="hero-floating-body">
                <div class="hero-floating-item" style="background:rgba(255,255,255,0.05);border-radius:14px;padding:10px 12px;border:1px solid rgba(255,255,255,0.1);">
                    <div class="hero-floating-item-label" style="font-size:0.7rem;letter-spacing:0.14em;text-transform:uppercase;opacity:0.7;color:#e6d5c2;">
                        Room Type
                    </div>
                    <div class="hero-floating-item-value" style="font-size:0.88rem;font-weight:500;color:#ffffff;">
                        Executive Suite
                    </div>
                </div>
                <div class="hero-floating-item" style="background:rgba(255,255,255,0.05);border-radius:14px;padding:10px 12px;border:1px solid rgba(255,255,255,0.1);">
                    <div class="hero-floating-item-label" style="font-size:0.7rem;letter-spacing:0.14em;text-transform:uppercase;opacity:0.7;color:#e6d5c2;">
                        Experience
                    </div>
                    <div class="hero-floating-item-value" style="font-size:0.88rem;font-weight:500;color:#ffffff;">
                        Business / Leisure
                    </div>
                </div>
                <div class="hero-floating-item" style="background:rgba(255,255,255,0.05);border-radius:14px;padding:10px 12px;border:1px solid rgba(255,255,255,0.1);">
                    <div class="hero-floating-item-label" style="font-size:0.7rem;letter-spacing:0.14em;text-transform:uppercase;opacity:0.7;color:#e6d5c2;">
                        Check-In
                    </div>
                    <div class="hero-floating-item-value" style="font-size:0.88rem;font-weight:500;color:#ffffff;">
                        Anytime | 14:00
                    </div>
                </div>
                <div class="hero-floating-item" style="background:rgba(255,255,255,0.05);border-radius:14px;padding:10px 12px;border:1px solid rgba(255,255,255,0.1);">
                    <div class="hero-floating-item-label" style="font-size:0.7rem;letter-spacing:0.14em;text-transform:uppercase;opacity:0.7;color:#e6d5c2;">
                        Exclusive Add-On
                    </div>
                    <div class="hero-floating-item-value" style="font-size:0.88rem;font-weight:500;color:#ffffff;">
                        Airport Transfer
                    </div>
                </div>
            </div>

            <div class="hero-floating-footer" style="margin-top:12px;padding-top:10px;border-top:1px dashed rgba(255,255,255,0.18);display:flex;align-items:center;justify-content:space-between;gap:10px;">
                <small style="font-size:0.7rem;opacity:0.9;color:#f0e4d6;">
                    From <span class="price-highlight" style="font-weight:600;color:#f3b01a;">USD $120 / night</span> • Inclusive of breakfast and Wi‑Fi
                </small>
                <a href="{{ route('contact') }}" class="btn-ghost" style="padding:7px 14px;font-size:0.78rem;border-color:rgba(255,255,255,0.7);color:#ffffff;">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Enquire</span>
                </a>
            </div>
        </div>
    </div>
</section>
    @endif

    <!-- Dynamic Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-wrapper">
            <div class="footer-column">
                <div class="footer-brand">Village Lodge Gweru</div>
                <div class="footer-tagline">An intimate sanctuary where African warmth meets contemporary luxury.</div>
                <div class="footer-badge">
                    <i class="fas fa-award"></i>
                    <span>Curated Hospitality • Gweru</span>
                </div>
            </div>
            <div class="footer-column">
                <h3>Contact</h3>
                <p><i class="fas fa-phone"></i> +263 54 222 324</p>
                <p><i class="fas fa-phone"></i> +263 77 123 4567</p>
                <p><i class="fas fa-envelope"></i> villagelodgegweru@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Gweru, Zimbabwe</p>
            </div>
            <div class="footer-column">
                <h3>Discover</h3>
                <p><a href="{{ route('rooms') }}"><i class="fas fa-bed"></i> Suites & Accommodation</a></p>
                <p><a href="{{ route('restaurant') }}"><i class="fas fa-utensils"></i> Restaurant & Bar</a></p>
                <p><a href="{{ route('events') }}"><i class="fas fa-champagne-glasses"></i> Events & Conferencing</a></p>
                <p><a href="{{ route('gallery') }}"><i class="fas fa-images"></i> Gallery</a></p>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <p><a href="#"><i class="fab fa-facebook"></i> Facebook</a></p>
                <p><a href="#"><i class="fab fa-instagram"></i> Instagram</a></p>
                <p><a href="#"><i class="fab fa-x-twitter"></i> X (Twitter)</a></p>
            </div>
        </div>

        <div class="footer-bottom">
            © {{ date('Y') }} <span>Village Lodge Gweru</span>. All rights reserved. | Crafted by <span>DataSpruce</span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Mobile nav toggle
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.querySelector('.nav-toggle');
            const mobileNav = document.getElementById('mobileNav');

            if (toggle && mobileNav) {
                toggle.addEventListener('click', function () {
                    const isOpen = mobileNav.style.display === 'block';
                    mobileNav.style.display = isOpen ? 'none' : 'block';
                    toggle.innerHTML = isOpen ? '<i class="fas fa-bars"></i>' : '<i class="fas fa-times"></i>';
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>