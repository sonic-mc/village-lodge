import './bootstrap';
// ========================================
// INITIALIZATION
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    initializeHeader();
    initializeHeroSlider();
    initializeMobileMenu();
    initializeScrollToTop();
    initializeBookingForm();
    initializeNewsletterForm();
    initializeAOS();
    initializeSmoothScroll();
    initializeFormValidation();
});

// ========================================
// HEADER SCROLL EFFECT
// ========================================

function initializeHeader() {
    const header = document.getElementById('header');
    
    if (! header) return;
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList. add('scrolled');
        } else {
            header.classList. remove('scrolled');
        }
    });
}

// ========================================
// HERO SLIDER
// ========================================

function initializeHeroSlider() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('. indicator');
    const prevBtn = document.querySelector('.hero-prev');
    const nextBtn = document.querySelector('.hero-next');
    
    if (slides.length === 0) return;
    
    // Show specific slide
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));
        
        currentSlide = index;
        
        if (currentSlide >= slides.length) {
            currentSlide = 0;
        }
        if (currentSlide < 0) {
            currentSlide = slides.length - 1;
        }
        
        slides[currentSlide].classList.add('active');
        indicators[currentSlide].classList.add('active');
    }
    
    // Next slide
    function nextSlide() {
        showSlide(currentSlide + 1);
    }
    
    // Previous slide
    function prevSlide() {
        showSlide(currentSlide - 1);
    }
    
    // Event listeners for navigation buttons
    if (nextBtn) {
        nextBtn. addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    // Event listeners for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto-advance slides every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
}

// ========================================
// MOBILE MENU
// ========================================

function initializeMobileMenu() {
    const menuToggle = document.getElementById('mobileMenuToggle');
    const menuOverlay = document.getElementById('mobileMenuOverlay');
    const menuClose = document.getElementById('mobileMenuClose');
    const mobileLinks = document.querySelectorAll('. mobile-nav a');
    
    if (! menuToggle || !menuOverlay) return;
    
    // Open mobile menu
    menuToggle.addEventListener('click', function() {
        menuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    // Close mobile menu
    function closeMobileMenu() {
        menuOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    if (menuClose) {
        menuClose.addEventListener('click', closeMobileMenu);
    }
    
    // Close menu when clicking on a link
    mobileLinks. forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
    
    // Close menu when clicking outside
    menuOverlay.addEventListener('click', function(e) {
        if (e.target === menuOverlay) {
            closeMobileMenu();
        }
    });
    
    // Close menu on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && menuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });
}

// ========================================
// SCROLL TO TOP BUTTON
// ========================================

function initializeScrollToTop() {
    const scrollBtn = document.getElementById('scrollToTop');
    
    if (!scrollBtn) return;
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY > 500) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    });
    
    // Scroll to top when clicked
    scrollBtn.addEventListener('click', function() {
        window. scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ========================================
// BOOKING FORM
// ========================================

function initializeBookingForm() {
    const bookingForm = document.getElementById('quickBookingForm');
    
    if (!bookingForm) return;
    
    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    const checkinInput = bookingForm.querySelector('input[name="checkin"]');
    const checkoutInput = bookingForm. querySelector('input[name="checkout"]');
    
    if (checkinInput) {
        checkinInput.setAttribute('min', today);
        
        // Update checkout minimum when checkin changes
        checkinInput.addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            checkinDate.setDate(checkinDate.getDate() + 1);
            const minCheckout = checkinDate.toISOString().split('T')[0];
            
            if (checkoutInput) {
                checkoutInput.setAttribute('min', minCheckout);
                
                // Reset checkout if it's before new minimum
                if (checkoutInput.value && checkoutInput.value <= this.value) {
                    checkoutInput.value = '';
                }
            }
        });
    }
    
    // Handle form submission
    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);
        
        // Validate dates
        if (new Date(data.checkout) <= new Date(data.checkin)) {
            showNotification('Check-out date must be after check-in date', 'error');
            return;
        }
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking... ';
        submitBtn.disabled = true;
        
        // Simulate API call (replace with actual AJAX request)
        setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Redirect to contact page with booking data
            const params = new URLSearchParams(data);
            window.location. href = '/contact?' + params.toString();
        }, 1000);
    });
}

// ========================================
// NEWSLETTER FORM
// ========================================

function initializeNewsletterForm() {
    const newsletterForm = document.getElementById('newsletterForm');
    
    if (!newsletterForm) return;
    
    newsletterForm.addEventListener('submit', function(e) {
        e. preventDefault();
        
        const emailInput = this.querySelector('input[type="email"]');
        const email = emailInput.value;
        
        // Validate email
        if (!isValidEmail(email)) {
            showNotification('Please enter a valid email address', 'error');
            return;
        }
        
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalHTML = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        submitBtn.disabled = true;
        
        // Simulate API call (replace with actual AJAX request)
        setTimeout(() => {
            submitBtn.innerHTML = originalHTML;
            submitBtn.disabled = false;
            emailInput.value = '';
            
            showNotification('Thank you for subscribing to our newsletter!', 'success');
        }, 1500);
    });
}

// ========================================
// AOS (ANIMATE ON SCROLL) INITIALIZATION
// ========================================

function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            offset: 100,
            delay: 100
        });
    }
}

// ========================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ========================================

function initializeSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Ignore empty hash and javascript: links
            if (href === '#' || href.startsWith('javascript:')) {
                return;
            }
            
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                const headerHeight = document.getElementById('header')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - headerHeight;
                
                window. scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ========================================
// FORM VALIDATION
// ========================================

function initializeFormValidation() {
    const forms = document.querySelectorAll('form[data-validate="true"]');
    
    forms.forEach(form => {
        const inputs = form.querySelectorAll('input, textarea, select');
        
        inputs. forEach(input => {
            // Real-time validation on blur
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            // Remove error on input
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    this.classList.remove('error');
                    removeErrorMessage(this);
                }
            });
        });
        
        // Form submission validation
        form.addEventListener('submit', function(e) {
            let isValid = true;
            
            inputs.forEach(input => {
                if (! validateField(input)) {
                    isValid = false;
                }
            });
            
            if (! isValid) {
                e. preventDefault();
                showNotification('Please fill in all required fields correctly', 'error');
            }
        });
    });
}

function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    const required = field.hasAttribute('required');
    
    // Remove previous error
    field.classList.remove('error');
    removeErrorMessage(field);
    
    // Check if required field is empty
    if (required && ! value) {
        showFieldError(field, 'This field is required');
        return false;
    }
    
    // Email validation
    if (type === 'email' && value && !isValidEmail(value)) {
        showFieldError(field, 'Please enter a valid email address');
        return false;
    }
    
    // Phone validation
    if (type === 'tel' && value && !isValidPhone(value)) {
        showFieldError(field, 'Please enter a valid phone number');
        return false;
    }
    
    // URL validation
    if (type === 'url' && value && !isValidURL(value)) {
        showFieldError(field, 'Please enter a valid URL');
        return false;
    }
    
    // Date validation
    if (type === 'date' && value) {
        const selectedDate = new Date(value);
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        
        if (selectedDate < today) {
            showFieldError(field, 'Please select a future date');
            return false;
        }
    }
    
    return true;
}

function showFieldError(field, message) {
    field.classList.add('error');
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error-message';
    errorDiv.textContent = message;
    
    field.parentNode.appendChild(errorDiv);
}

function removeErrorMessage(field) {
    const errorMessage = field.parentNode.querySelector('.field-error-message');
    if (errorMessage) {
        errorMessage.remove();
    }
}

// ========================================
// NOTIFICATION SYSTEM
// ========================================

function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification. remove();
    }
    
    // Create notification element
    const notification = document. createElement('div');
    notification. className = `notification notification-${type}`;
    
    // Icon based on type
    let icon = 'fa-info-circle';
    if (type === 'success') icon = 'fa-check-circle';
    if (type === 'error') icon = 'fa-exclamation-circle';
    if (type === 'warning') icon = 'fa-exclamation-triangle';
    
    notification.innerHTML = `
        <i class="fas ${icon}"></i>
        <span>${message}</span>
        <button class="notification-close"><i class="fas fa-times"></i></button>
    `;
    
    document.body.appendChild(notification);
    
    // Show notification with animation
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    // Close button
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        closeNotification(notification);
    });
    
    // Auto-close after 5 seconds
    setTimeout(() => {
        closeNotification(notification);
    }, 5000);
}

function closeNotification(notification) {
    notification.classList.remove('show');
    setTimeout(() => {
        notification.remove();
    }, 300);
}

// ========================================
// UTILITY FUNCTIONS
// ========================================

function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function isValidPhone(phone) {
    const re = /^[\d\s\-\+\(\)]+$/;
    return re.test(phone) && phone.replace(/\D/g, ''). length >= 10;
}

function isValidURL(url) {
    try {
        new URL(url);
        return true;
    } catch {
        return false;
    }
}

// ========================================
// LAZY LOADING IMAGES
// ========================================

if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries. forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry. target;
                
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                
                if (img.dataset.srcset) {
                    img.srcset = img.dataset.srcset;
                    img.removeAttribute('data-srcset');
                }
                
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });
    
    // Observe all images with data-src attribute
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// ========================================
// ROOM FILTER (FOR ROOMS PAGE)
// ========================================

function initializeRoomFilter() {
    const filterButtons = document.querySelectorAll('. room-filter-btn');
    const roomCards = document.querySelectorAll('. room-card');
    
    if (filterButtons. length === 0) return;
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList. add('active');
            
            // Filter rooms
            roomCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card. style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
}

// ========================================
// GALLERY LIGHTBOX (FOR GALLERY PAGE)
// ========================================

function initializeGalleryLightbox() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    if (galleryItems.length === 0) return;
    
    let currentImageIndex = 0;
    let images = [];
    
    // Collect all images
    galleryItems. forEach((item, index) => {
        const img = item.querySelector('img');
        if (img) {
            images.push({
                src: img.src,
                alt: img.alt || 'Gallery Image'
            });
            
            item.addEventListener('click', () => {
                openLightbox(index);
            });
        }
    });
    
    function openLightbox(index) {
        currentImageIndex = index;
        
        // Create lightbox
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <button class="lightbox-close"><i class="fas fa-times"></i></button>
            <button class="lightbox-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="lightbox-next"><i class="fas fa-chevron-right"></i></button>
            <div class="lightbox-content">
                <img src="${images[index].src}" alt="${images[index].alt}">
                <div class="lightbox-counter">${index + 1} / ${images. length}</div>
            </div>
        `;
        
        document.body.appendChild(lightbox);
        document.body.style.overflow = 'hidden';
        
        setTimeout(() => {
            lightbox. classList.add('active');
        }, 10);
        
        // Event listeners
        lightbox.querySelector('. lightbox-close').addEventListener('click', closeLightbox);
        lightbox.querySelector('.lightbox-prev'). addEventListener('click', showPrevImage);
        lightbox.querySelector('.lightbox-next'). addEventListener('click', showNextImage);
        
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
        
        // Keyboard navigation
        document.addEventListener('keydown', handleLightboxKeyboard);
    }
    
    function closeLightbox() {
        const lightbox = document.querySelector('.lightbox');
        if (lightbox) {
            lightbox.classList.remove('active');
            setTimeout(() => {
                lightbox.remove();
                document. body.style.overflow = '';
            }, 300);
        }
        document.removeEventListener('keydown', handleLightboxKeyboard);
    }
    
    function showPrevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateLightboxImage();
    }
    
    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateLightboxImage();
    }
    
    function updateLightboxImage() {
        const lightbox = document.querySelector('.lightbox');
        const img = lightbox.querySelector('img');
        const counter = lightbox.querySelector('.lightbox-counter');
        
        img.style.opacity = '0';
        setTimeout(() => {
            img.src = images[currentImageIndex].src;
            img.alt = images[currentImageIndex].alt;
            counter.textContent = `${currentImageIndex + 1} / ${images.length}`;
            img. style.opacity = '1';
        }, 200);
    }
    
    function handleLightboxKeyboard(e) {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            showPrevImage();
        } else if (e.key === 'ArrowRight') {
            showNextImage();
        }
    }
}

// ========================================
// CONTACT FORM AJAX SUBMISSION
// ========================================

function initializeContactForm() {
    const contactForm = document.querySelector('form[action*="contact"]');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Show loading state
        submitBtn. innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
        
        // AJAX request
        fetch(this. action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
            }
        })
        .then(response => response. json())
        .then(data => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            if (data. success) {
                showNotification(data.message, 'success');
                this.reset();
            } else {
                showNotification(data. message || 'An error occurred. Please try again.', 'error');
            }
        })
        . catch(error => {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            showNotification('An error occurred. Please try again.', 'error');
            console.error('Error:', error);
        });
    });
}

// ========================================
// INITIALIZE PAGE-SPECIFIC FUNCTIONS
// ========================================

// Check which page we're on and initialize appropriate functions
if (document.querySelector('. room-filter-btn')) {
    initializeRoomFilter();
}

if (document.querySelector('.gallery-item')) {
    initializeGalleryLightbox();
}

if (document.querySelector('form[action*="contact"]')) {
    initializeContactForm();
}

// ========================================
// PRELOADER (OPTIONAL)
// ========================================

window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    
    if (preloader) {
        preloader.classList.add('fade-out');
        setTimeout(() => {
            preloader.remove();
        }, 500);
    }
});

// ========================================
// CONSOLE BRANDING
// ========================================

console.log('%c The Village Lodge ', 'background: #6B4E4E; color: #D4A574; font-size: 20px; padding: 10px;');
console.log('%c Website by The Village Lodge Development Team ', 'background: #D4A574; color: #fff; font-size: 12px; padding: 5px;');