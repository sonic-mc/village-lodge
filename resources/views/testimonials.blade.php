@extends('layouts.app')

@section('title', 'Guest Reviews & Testimonials - The Village Lodge')

@section('meta_description', 'Read authentic reviews and testimonials from our satisfied guests.  Discover why The Village Lodge is rated highly on TripAdvisor and other platforms.')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background-image: url('{{ asset('images/testimonials-header.jpg') }}')">
    <div class="page-header-overlay"></div>
    <div class="container">
        <div class="page-header-content" data-aos="fade-up">
            <h1 class="page-title">Guest Reviews</h1>
            <div class="breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <span>Reviews</span>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Overview -->
<section class="reviews-overview-section section-padding">
    <div class="container">
        <div class="reviews-overview-grid">
            <div class="reviews-overview-content" data-aos="fade-right">
                <span class="section-subtitle">What Our Guests Say</span>
                <h2 class="section-title">Authentic Reviews</h2>
                <div class="title-divider"></div>
                <p class="reviews-intro-text">
                    Don't just take our word for it.  Read what our valued guests have to say about 
                    their experiences at The Village Lodge.  We're proud of our consistently high 
                    ratings and the positive feedback we receive. 
                </p>
                <p class="reviews-intro-text">
                    Every review helps us improve and motivates us to continue delivering exceptional 
                    hospitality. Thank you to all our guests who have shared their experiences!
                </p>
            </div>

            <div class="reviews-overview-stats" data-aos="fade-left">
                <div class="review-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">4.9</div>
                        <div class="stat-label">Average Rating</div>
                        <div class="stat-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="review-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">1,200+</div>
                        <div class="stat-label">Total Reviews</div>
                        <div class="stat-platforms">
                            <a href="#" target="_blank"><i class="fab fa-tripadvisor"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-google"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="review-stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Recommended</div>
                        <div class="stat-text">Would stay again</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reviews Listing -->
<section class="reviews-listing-section section-padding bg-light">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Guest Experiences</span>
            <h2 class="section-title">Recent Reviews</h2>
            <div class="title-divider center"></div>
        </div>

        <!-- Filter Tabs -->
        <div class="reviews-filter-tabs" data-aos="fade-up">
            <button class="review-tab-btn active" data-filter="all">All Reviews</button>
            <button class="review-tab-btn" data-filter="5">5 Stars</button>
            <button class="review-tab-btn" data-filter="4">4 Stars</button>
            <button class="review-tab-btn" data-filter="recent">Most Recent</button>
        </div>

        <!-- Reviews Grid -->
        <div class="reviews-listing-grid">
            @foreach($reviews as $index => $review)
            <div class="review-card-detailed" data-rating="{{ $review['rating'] }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="review-card-header">
                    <div class="review-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="review-header-info">
                        <h4 class="review-author-name">{{ $review['name'] }}</h4>
                        <div class="review-rating">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $review['rating'])
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <div class="review-date">
                            <i class="fas fa-calendar-alt"></i> {{ date('F j, Y', strtotime($review['date'])) }}
                        </div>
                    </div>
                    <div class="review-source">
                        <i class="fab fa-tripadvisor"></i>
                        <span>TripAdvisor</span>
                    </div>
                </div>
                
                <div class="review-card-body">
                    <p class="review-text">{{ $review['text'] }}</p>
                </div>

                <div class="review-card-footer">
                    <div class="review-helpful">
                        <button class="helpful-btn">
                            <i class="fas fa-thumbs-up"></i> Helpful ({{ rand(5, 50) }})
                        </button>
                    </div>
                    <div class="review-verified">
                        <i class="fas fa-check-circle"></i> Verified Stay
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Load More Reviews -->
        <div class="text-center" data-aos="fade-up">
            <button class="btn-primary btn-large" id="loadMoreReviews">
                <i class="fas fa-sync-alt"></i> Load More Reviews
            </button>
        </div>
    </div>
</section>

<!-- Rating Breakdown -->
<section class="rating-breakdown-section section-padding">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-subtitle">Detailed Analysis</span>
            <h2 class="section-title">Rating Breakdown</h2>
            <div class="title-divider center"></div>
        </div>

        <div class="rating-breakdown-grid">
            <div class="rating-category" data-aos="fade-up" data-aos-delay="100">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h4 class="category-name">Service</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 98%"></div>
                </div>
                <div class="rating-score">4.9/5</div>
            </div>

            <div class="rating-category" data-aos="fade-up" data-aos-delay="200">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-broom"></i>
                    </div>
                    <h4 class="category-name">Cleanliness</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 96%"></div>
                </div>
                <div class="rating-score">4.8/5</div>
            </div>

            <div class="rating-category" data-aos="fade-up" data-aos-delay="300">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h4 class="category-name">Comfort</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 94%"></div>
                </div>
                <div class="rating-score">4.7/5</div>
            </div>

            <div class="rating-category" data-aos="fade-up" data-aos-delay="400">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4 class="category-name">Food & Dining</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 92%"></div>
                </div>
                <div class="rating-score">4.6/5</div>
            </div>

            <div class="rating-category" data-aos="fade-up" data-aos-delay="500">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="category-name">Location</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 90%"></div>
                </div>
                <div class="rating-score">4.5/5</div>
            </div>

            <div class="rating-category" data-aos="fade-up" data-aos-delay="600">
                <div class="rating-category-header">
                    <div class="category-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h4 class="category-name">Value for Money</h4>
                </div>
                <div class="rating-bar-container">
                    <div class="rating-bar" style="width: 94%"></div>
                </div>
                <div class="rating-score">4.7/5</div>
            </div>
        </div>
    </div>
</section>

<!-- Write Review CTA -->
<section class="write-review-section">
    <div class="write-review-overlay"></div>
    <div class="container">
        <div class="write-review-content" data-aos="zoom-in">
            <h2 class="write-review-title">Share Your Experience</h2>
            <p class="write-review-text">
                Have you stayed with us?  We'd love to hear about your experience! 
            </p>
            <div class="write-review-buttons">
                <a href="https://www.tripadvisor. com" target="_blank" class="btn-gold btn-large">
                    <i class="fab fa-tripadvisor"></i> Write a Review
                </a>
                <a href="https://www.google.com/maps" target="_blank" class="btn-outline-white btn-large">
                    <i class="fab fa-google"></i> Review on Google
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Review Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.review-tab-btn');
        const reviewCards = document.querySelectorAll('. review-card-detailed');
        
        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                filterTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.dataset.filter;
                
                reviewCards.forEach(card => {
                    if (filter === 'all') {
                        card.style. display = 'block';
                    } else if (filter === 'recent') {
                        card.style.display = 'block';
                    } else if (filter === card.dataset.rating) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Load More Reviews
        const loadMoreBtn = document.getElementById('loadMoreReviews');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                showNotification('All reviews loaded!', 'success');
                this.style.display = 'none';
            });
        }

        // Helpful Button
        document.querySelectorAll('.helpful-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                showNotification('Thank you for your feedback!', 'success');
                this.disabled = true;
                this.innerHTML = '<i class="fas fa-check"></i> Marked Helpful';
            });
        });
    });
</script>
@endsection
