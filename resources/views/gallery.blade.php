@extends('layouts.app')

@section('title', 'Photo Gallery - The Village Lodge')
@section('meta_description', 'Explore our stunning photo gallery showcasing rooms, facilities, events, and the beautiful grounds of The Village Lodge in Gweru, Zimbabwe.')

@section('content')
    <!-- Page Header -->
    <section class="page-header" style="background-image: url('{{ asset('events/event01.jpg') }}')">
        <div class="page-header-overlay"></div>
        <div class="section">
            <div class="page-header-content" data-aos="fade-up">
                <h1 class="page-title" style="font-family:'Playfair Display',serif;font-size:2.6rem;color:#fff;margin-bottom:8px;">
                    Photo Gallery
                </h1>
                <div class="breadcrumb" style="font-size:0.9rem;color:rgba(255,255,255,0.8);display:flex;align-items:center;gap:6px;">
                    <a href="{{ route('home') }}" style="color:#fff;">Home</a>
                    <span>/</span>
                    <span>Gallery</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Intro -->
    <section class="gallery-intro-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Visual Journey
                </span>
            <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    Discover The Village Lodge
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:640px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Take a visual tour through our beautiful property. From luxurious rooms to stunning 
                    event spaces and landscaped gardens, see what makes The Village Lodge special.
                </p>
            </div>

            <!-- Gallery Filter -->
            <div class="gallery-filter" data-aos="fade-up" style="margin-top:20px;display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
                <button class="gallery-filter-btn active" data-filter="all" style="padding:8px 14px;border-radius:999px;border:1px solid #3b1a12;background:#3b1a12;color:#fff;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;cursor:pointer;">
                    <i class="fas fa-th"></i> All Photos
                </button>
                <button class="gallery-filter-btn" data-filter="rooms" style="padding:8px 14px;border-radius:999px;border:1px solid #ccd0d7;background:#fff;color:#333;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;cursor:pointer;">
                    <i class="fas fa-bed"></i> Rooms
                </button>
                <button class="gallery-filter-btn" data-filter="grounds" style="padding:8px 14px;border-radius:999px;border:1px solid #ccd0d7;background:#fff;color:#333;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;cursor:pointer;">
                    <i class="fas fa-tree"></i> Grounds
                </button>
                <button class="gallery-filter-btn" data-filter="events" style="padding:8px 14px;border-radius:999px;border:1px solid #ccd0d7;background:#fff;color:#333;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;cursor:pointer;">
                    <i class="fas fa-glass-cheers"></i> Events
                </button>
                <button class="gallery-filter-btn" data-filter="dining" style="padding:8px 14px;border-radius:999px;border:1px solid #ccd0d7;background:#fff;color:#333;font-size:0.9rem;display:inline-flex;align-items:center;gap:6px;cursor:pointer;">
                    <i class="fas fa-utensils"></i> Dining
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid Section -->
    <section class="gallery-grid-section section-padding bg-light" style="background:#f5f6f7;">
        <div class="section" style="max-width:100%;padding-left:4%;padding-right:4%;">
            <div class="gallery-masonry" style="column-count:4;column-gap:14px;max-width:1400px;margin:0 auto;">
                @foreach($galleries as $category => $images)
                    @php
                        $filterClass = strtolower(str_replace(['&', ' '], ['', '-'], $category));
                    @endphp

                    @foreach($images as $index => $image)
                        @php
                            // Use local gallery images; you can map event01–08 into these if desired
                            $src = asset('images/events/' . $image);
                        @endphp

                        <div class="gallery-item" data-category="{{ $filterClass }}" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}" style="break-inside:avoid;margin-bottom:14px;transition:opacity 0.3s ease,transform 0.3s ease;">
                            <div class="gallery-item-inner" style="position:relative;border-radius:16px;overflow:hidden;box-shadow:0 14px 40px rgba(0,0,0,0.12);">
                                <img src="{{ $src }}" alt="{{ $category }} - Image {{ $index + 1 }}" style="width:100%;display:block;object-fit:cover;">

                                <div class="gallery-item-overlay" style="position:absolute;inset:0;background:linear-gradient(to top,rgba(15,4,2,0.9),transparent);opacity:0;display:flex;align-items:flex-end;transition:opacity 0.25s ease;">
                                    <div class="gallery-item-content" style="padding:10px 12px;color:#fff;width:100%;display:flex;justify-content:space-between;align-items:center;gap:6px;">
                                        <div>
                                            <h4 class="gallery-item-title" style="font-family:'Playfair Display',serif;font-size:1rem;margin:0 0 2px;">
                                                {{ $category }}
                                            </h4>
                                            <p class="gallery-item-category" style="font-size:0.82rem;opacity:0.85;margin:0;">
                                                {{ ucfirst($filterClass) }}
                                            </p>
                                        </div>
                                        <button class="gallery-view-btn" type="button" style="border:none;outline:none;background:#f3b01a;color:#2b0c03;font-size:0.82rem;padding:6px 10px;border-radius:999px;display:inline-flex;align-items:center;gap:4px;cursor:pointer;">
                                            <i class="fas fa-search-plus"></i> View
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="gallery-load-more text-center" data-aos="fade-up" style="margin-top:24px;text-align:center;">
                <button class="btn-lux" id="loadMoreGallery" style="padding:10px 22px;font-size:0.9rem;">
                    <i class="fas fa-images"></i>
                    <span style="margin-left:6px;">Load More Photos</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Instagram Feed Section -->
    <section class="instagram-feed-section section-padding" style="background:#ffffff;">
        <div class="section">
            <div class="section-header text-center" data-aos="fade-up">
                <span class="section-subtitle" style="font-size:0.85rem;letter-spacing:0.25em;text-transform:uppercase;color:#3b1a12;opacity:0.8;">
                    Follow Us
                </span>
                <h2 class="section-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:10px 0;color:#3b1a12;">
                    @thevillagelodgesgweru
                </h2>
                <div class="title-divider center" style="width:60px;height:3px;background:#f3b01a;border-radius:999px;margin:10px auto 16px;"></div>
                <p class="section-description" style="max-width:480px;margin:0 auto;font-size:0.96rem;color:#555;">
                    Stay connected and see our latest updates on Instagram.
                </p>
            </div>

            <div class="instagram-feed-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:12px;margin:24px 0;">
                @for($i = 1; $i <= 8; $i++)
                    @php
                        // Use events/event01-08 as Instagram mock images (repeat if needed)
                        $eventIndex = (($i - 1) % 8) + 1;
                        $instaSrc = asset('events/event0' . $eventIndex . '.jpg');
                    @endphp
                    <div class="instagram-feed-item" data-aos="zoom-in" data-aos-delay="{{ $i * 50 }}" style="position:relative;border-radius:16px;overflow:hidden;box-shadow:0 12px 36px rgba(0,0,0,0.09);">
                        <img src="{{ $instaSrc }}" alt="Instagram Post {{ $i }}" style="width:100%;height:180px;object-fit:cover;display:block;">
                        <div class="instagram-feed-overlay" style="position:absolute;inset:0;background:linear-gradient(to top,rgba(15,4,2,0.9),transparent);opacity:0;transition:opacity 0.25s ease;display:flex;align-items:flex-end;justify-content:space-between;padding:9px 10px;color:#fff;font-size:0.8rem;">
                            <div class="instagram-feed-stats" style="display:flex;gap:8px;">
                                <span><i class="fas fa-heart"></i> {{ rand(50, 500) }}</span>
                                <span><i class="fas fa-comment"></i> {{ rand(5, 50) }}</span>
                            </div>
                            <a href="https://www.instagram.com/thevillagelodgesgweru" target="_blank" class="instagram-feed-link" style="color:#fff;font-size:1rem;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center" data-aos="fade-up" style="text-align:center;">
                <a href="https://www.instagram.com/thevillagelodgesgweru" target="_blank" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                    <i class="fab fa-instagram"></i>
                    <span style="margin-left:6px;">Follow Us on Instagram</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Virtual Tour CTA -->
    <section class="virtual-tour-section" style="position:relative;padding:70px 0;background:url('{{ asset('events/event01.jpg') }}') center/cover no-repeat;">
        <div class="virtual-tour-overlay" style="position:absolute;inset:0;background:rgba(15,4,2,0.9);"></div>
        <div class="section" style="position:relative;">
            <div class="virtual-tour-content" data-aos="zoom-in" style="text-align:center;color:#fff;max-width:640px;margin:0 auto;">
                <div class="virtual-tour-icon" style="width:56px;height:56px;border-radius:50%;background:#f3b01a;color:#2b0c03;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin:0 auto 10px;">
                    <i class="fas fa-video"></i>
                </div>
                <h2 class="virtual-tour-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:0 0 8px;">
                    Take a Virtual Tour
                </h2>
                <p class="virtual-tour-text" style="font-size:0.98rem;opacity:0.9;margin:0 0 18px;">
                    Experience The Village Lodge from the comfort of your home with our 360° virtual tour.
                </p>
                <button class="btn-lux" id="virtualTourBtn" type="button" style="padding:10px 22px;font-size:0.9rem;">
                    <i class="fas fa-play-circle"></i>
                    <span style="margin-left:6px;">Start Virtual Tour</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery CTA -->
    <section class="gallery-cta-section section-padding bg-light" style="background:#ffffff;">
        <div class="section">
            <div class="gallery-cta-content text-center" data-aos="fade-up" style="max-width:620px;margin:0 auto;text-align:center;">
                <h2 class="gallery-cta-title" style="font-family:'Playfair Display',serif;font-size:2rem;margin:0 0 8px;color:#3b1a12;">
                    Ready to Experience It in Person?
                </h2>
                <p class="gallery-cta-text" style="font-size:0.96rem;color:#555;margin:0 0 18px;">
                    Book your stay today and discover the beauty and comfort of The Village Lodge firsthand.
                </p>
                <div class="gallery-cta-buttons" style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;">
                    <a href="{{ route('contact') }}" class="btn-lux" style="padding:10px 22px;font-size:0.9rem;">
                        <i class="fas fa-calendar-check"></i>
                        <span style="margin-left:6px;">Book Your Stay</span>
                    </a>
                    <a href="{{ route('rooms') }}" class="btn-ghost" style="border-color:#3b1a12;color:#3b1a12;padding:9px 20px;font-size:0.9rem;">
                        <i class="fas fa-bed"></i>
                        <span style="margin-left:6px;">View Rooms</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gallery Filter Functionality
        const filterButtons = document.querySelectorAll('.gallery-filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filter = this.dataset.filter;

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Hover for overlays (supports touch with JS)
        document.querySelectorAll('.gallery-item-inner').forEach(inner => {
            const overlay = inner.querySelector('.gallery-item-overlay');
            if (!overlay) return;
            inner.addEventListener('mouseenter', () => overlay.style.opacity = '1');
            inner.addEventListener('mouseleave', () => overlay.style.opacity = '0');
        });

        document.querySelectorAll('.instagram-feed-item').forEach(inner => {
            const overlay = inner.querySelector('.instagram-feed-overlay');
            if (!overlay) return;
            inner.addEventListener('mouseenter', () => overlay.style.opacity = '1');
            inner.addEventListener('mouseleave', () => overlay.style.opacity = '0');
        });

        // Virtual Tour Button
        const virtualTourBtn = document.getElementById('virtualTourBtn');
        if (virtualTourBtn) {
            virtualTourBtn.addEventListener('click', function() {
                if (typeof showNotification === 'function') {
                    showNotification('Virtual tour coming soon!', 'info');
                } else {
                    alert('Virtual tour coming soon!');
                }
            });
        }

        // Load More Gallery
        const loadMoreBtn = document.getElementById('loadMoreGallery');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                if (typeof showNotification === 'function') {
                    showNotification('All photos loaded!', 'success');
                } else {
                    alert('All photos loaded!');
                }
                this.style.display = 'none';
            });
        }
    });
</script>
@endsection