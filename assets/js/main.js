/**
 * Annie Cakes & Gift - Main JavaScript
 * Premium Bakery Theme
 */
(function () {
    'use strict';

    /* --- Preloader --- */
    window.addEventListener('load', function () {
        var preloader = document.querySelector('.ac-preloader');
        if (preloader) {
            preloader.classList.add('loaded');
            setTimeout(function () { preloader.style.display = 'none'; }, 500);
        }
    });

    document.addEventListener('DOMContentLoaded', function () {

        /* --- Dark Mode Toggle --- */
        var darkToggles = document.querySelectorAll('.ac-dark-toggle');
        var isDark = localStorage.getItem('ac_dark_mode') === 'true';

        if (isDark) {
            document.body.classList.add('ac-dark');
        }

        darkToggles.forEach(function (toggle) {
            toggle.addEventListener('click', function () {
                document.body.classList.toggle('ac-dark');
                localStorage.setItem('ac_dark_mode', document.body.classList.contains('ac-dark'));
            });
        });

        /* --- Sticky Header --- */
        var header = document.querySelector('.ac-header');
        if (header) {
            window.addEventListener('scroll', function () {
                header.classList.toggle('scrolled', window.scrollY > 50);
            });
        }

        /* --- Mobile Menu --- */
        var mobileToggle = document.querySelector('.ac-mobile-toggle');
        var mobileMenu = document.querySelector('.ac-mobile-menu');
        var mobileClose = document.querySelector('.ac-mobile-close');
        var mobileOverlay = document.querySelector('.ac-mobile-overlay');

        function openMobile() {
            if (mobileMenu) mobileMenu.classList.add('active');
            if (mobileOverlay) mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        function closeMobile() {
            if (mobileMenu) mobileMenu.classList.remove('active');
            if (mobileOverlay) mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (mobileToggle) mobileToggle.addEventListener('click', openMobile);
        if (mobileClose) mobileClose.addEventListener('click', closeMobile);
        if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);

        /* --- Search Overlay --- */
        var searchToggle = document.querySelector('.ac-search-toggle');
        var searchOverlay = document.querySelector('.ac-search-overlay');
        var searchClose = document.querySelector('.ac-search-close');

        if (searchToggle && searchOverlay) {
            searchToggle.addEventListener('click', function () {
                searchOverlay.classList.add('active');
                var input = searchOverlay.querySelector('input');
                if (input) input.focus();
            });
        }
        if (searchClose) {
            searchClose.addEventListener('click', function () {
                searchOverlay.classList.remove('active');
            });
        }
        if (searchOverlay) {
            searchOverlay.addEventListener('click', function (e) {
                if (e.target === searchOverlay) searchOverlay.classList.remove('active');
            });
        }

        /* --- Live Search --- */
        var searchInput = document.querySelector('.ac-search-overlay input[type="search"]');
        var searchResults = document.querySelector('.ac-search-results');
        var searchTimer;

        if (searchInput && typeof annie_cakes_data !== 'undefined') {
            searchInput.addEventListener('input', function () {
                clearTimeout(searchTimer);
                var query = this.value;
                if (query.length < 2) {
                    if (searchResults) searchResults.innerHTML = '';
                    return;
                }
                searchTimer = setTimeout(function () {
                    var formData = new FormData();
                    formData.append('action', 'annie_live_search');
                    formData.append('nonce', annie_cakes_data.nonce);
                    formData.append('query', query);

                    fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                        .then(function (r) { return r.json(); })
                        .then(function (data) {
                            if (data.success && searchResults) {
                                searchResults.innerHTML = data.data.html;
                            }
                        });
                }, 300);
            });
        }

        /* --- Cart Sidebar --- */
        var cartToggle = document.querySelector('.ac-cart-toggle');
        var cartSidebar = document.querySelector('.ac-cart-sidebar');
        var cartClose = document.querySelector('.ac-cart-sidebar-close');
        var cartOverlay = document.querySelector('.ac-cart-overlay');

        function openCart() {
            if (cartSidebar) cartSidebar.classList.add('active');
            if (cartOverlay) cartOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        function closeCart() {
            if (cartSidebar) cartSidebar.classList.remove('active');
            if (cartOverlay) cartOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (cartToggle) cartToggle.addEventListener('click', openCart);
        if (cartClose) cartClose.addEventListener('click', closeCart);
        if (cartOverlay) cartOverlay.addEventListener('click', closeCart);

        /* --- AJAX Add to Cart --- */
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('.ac-ajax-add-to-cart');
            if (!btn || typeof annie_cakes_data === 'undefined') return;
            e.preventDefault();

            var productId = btn.dataset.productId;
            var qtyInput = btn.closest('.ac-quick-view-actions, .ac-product-card-footer');
            var quantity = 1;
            if (qtyInput) {
                var qi = qtyInput.querySelector('.ac-qty-input');
                if (qi) quantity = parseInt(qi.value, 10) || 1;
            }

            btn.classList.add('loading');
            btn.disabled = true;

            var formData = new FormData();
            formData.append('action', 'annie_add_to_cart');
            formData.append('nonce', annie_cakes_data.nonce);
            formData.append('product_id', productId);
            formData.append('quantity', quantity);

            fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    btn.classList.remove('loading');
                    btn.disabled = false;
                    if (data.success) {
                        showToast(data.data.message, 'success');
                        updateCartCount(data.data.count);
                        openCart();
                    } else {
                        showToast(data.data.message || 'Error', 'error');
                    }
                })
                .catch(function () {
                    btn.classList.remove('loading');
                    btn.disabled = false;
                    showToast('Something went wrong.', 'error');
                });
        });

        /* --- Wishlist Toggle --- */
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('.ac-wishlist-btn');
            if (!btn || typeof annie_cakes_data === 'undefined') return;
            e.preventDefault();

            var productId = btn.dataset.productId;
            var formData = new FormData();
            formData.append('action', 'annie_toggle_wishlist');
            formData.append('nonce', annie_cakes_data.nonce);
            formData.append('product_id', productId);

            fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    if (data.success) {
                        var icon = btn.querySelector('i');
                        if (data.data.action === 'added') {
                            if (icon) { icon.classList.remove('far'); icon.classList.add('fas'); }
                            btn.classList.add('active');
                        } else {
                            if (icon) { icon.classList.remove('fas'); icon.classList.add('far'); }
                            btn.classList.remove('active');
                        }
                        showToast(data.data.message, 'success');
                        var counts = document.querySelectorAll('.ac-wishlist-count');
                        counts.forEach(function (c) { c.textContent = data.data.count; });
                    }
                });
        });

        /* --- Quick View --- */
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('.ac-quick-view-btn');
            if (!btn || typeof annie_cakes_data === 'undefined') return;
            e.preventDefault();

            var productId = btn.dataset.productId;
            var modal = document.querySelector('#ac-quick-view-modal');
            var content = modal ? modal.querySelector('.ac-modal-body') : null;
            if (!modal || !content) return;

            content.innerHTML = '<div class="ac-skeleton" style="height: 300px;"></div>';
            modal.classList.add('active');

            var formData = new FormData();
            formData.append('action', 'annie_quick_view');
            formData.append('nonce', annie_cakes_data.nonce);
            formData.append('product_id', productId);

            fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                .then(function (r) { return r.json(); })
                .then(function (data) {
                    if (data.success) {
                        content.innerHTML = data.data.html;
                    }
                });
        });

        /* Modal close */
        document.addEventListener('click', function (e) {
            if (e.target.closest('.ac-modal-close') || e.target.classList.contains('ac-modal-overlay')) {
                var modals = document.querySelectorAll('.ac-modal');
                modals.forEach(function (m) { m.classList.remove('active'); });
            }
        });

        /* --- Quantity Buttons --- */
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('ac-qty-minus') || e.target.classList.contains('ac-qty-plus')) {
                var input = e.target.parentElement.querySelector('.ac-qty-input');
                if (!input) return;
                var val = parseInt(input.value, 10) || 1;
                var min = parseInt(input.min, 10) || 1;
                var max = parseInt(input.max, 10) || 99;
                if (e.target.classList.contains('ac-qty-minus')) {
                    input.value = Math.max(min, val - 1);
                } else {
                    input.value = Math.min(max, val + 1);
                }
            }
        });

        /* --- Countdown Timer --- */
        var countdowns = document.querySelectorAll('.ac-countdown');
        countdowns.forEach(function (cd) {
            var targetDate = cd.dataset.date;
            if (!targetDate) return;
            var end = new Date(targetDate).getTime();

            function updateCountdown() {
                var now = Date.now();
                var diff = end - now;
                if (diff <= 0) {
                    cd.innerHTML = '<p>Sale has ended!</p>';
                    return;
                }
                var days = Math.floor(diff / 86400000);
                var hours = Math.floor((diff % 86400000) / 3600000);
                var minutes = Math.floor((diff % 3600000) / 60000);
                var seconds = Math.floor((diff % 60000) / 1000);

                var daysEl = cd.querySelector('[data-days]');
                var hoursEl = cd.querySelector('[data-hours]');
                var minsEl = cd.querySelector('[data-minutes]');
                var secsEl = cd.querySelector('[data-seconds]');

                if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
                if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
                if (minsEl) minsEl.textContent = String(minutes).padStart(2, '0');
                if (secsEl) secsEl.textContent = String(seconds).padStart(2, '0');
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        });

        /* --- Animated Counters --- */
        var counters = document.querySelectorAll('.ac-counter-num');
        var counted = false;

        function animateCounters() {
            counters.forEach(function (counter) {
                var target = parseInt(counter.dataset.target, 10);
                var duration = 2000;
                var start = 0;
                var startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = Math.min((timestamp - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    counter.textContent = Math.floor(eased * target).toLocaleString() + '+';
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            });
        }

        if (counters.length) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting && !counted) {
                        counted = true;
                        animateCounters();
                    }
                });
            }, { threshold: 0.3 });

            observer.observe(counters[0].closest('.ac-counters-section') || counters[0]);
        }

        /* --- FAQ Accordion --- */
        var faqItems = document.querySelectorAll('.ac-faq-question');
        faqItems.forEach(function (item) {
            item.addEventListener('click', function () {
                var parent = this.closest('.ac-faq-item');
                var wasActive = parent.classList.contains('active');

                parent.parentElement.querySelectorAll('.ac-faq-item').forEach(function (fi) {
                    fi.classList.remove('active');
                });

                if (!wasActive) parent.classList.add('active');
            });
        });

        /* --- Back to Top --- */
        var backToTop = document.querySelector('.ac-back-to-top');
        if (backToTop) {
            window.addEventListener('scroll', function () {
                backToTop.classList.toggle('visible', window.scrollY > 400);
            });
            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        /* --- Newsletter Form --- */
        var nlForm = document.querySelector('.ac-newsletter-form');
        if (nlForm) {
            nlForm.addEventListener('submit', function (e) {
                e.preventDefault();
                if (typeof annie_cakes_data === 'undefined') return;

                var email = nlForm.querySelector('input[type="email"]');
                var nonce = nlForm.querySelector('input[name="newsletter_nonce"]');
                if (!email || !nonce) return;

                var formData = new FormData();
                formData.append('action', 'annie_newsletter');
                formData.append('newsletter_nonce', nonce.value);
                formData.append('email', email.value);

                fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                    .then(function (r) { return r.json(); })
                    .then(function (data) {
                        showToast(data.data.message, data.success ? 'success' : 'error');
                        if (data.success) email.value = '';
                    });
            });
        }

        /* --- Contact Form --- */
        var contactForm = document.querySelector('#ac-contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function (e) {
                e.preventDefault();
                if (typeof annie_cakes_data === 'undefined') return;

                var btn = contactForm.querySelector('button[type="submit"]');
                if (btn) { btn.disabled = true; btn.textContent = 'Sending...'; }

                var formData = new FormData(contactForm);
                formData.append('action', 'annie_contact');

                fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                    .then(function (r) { return r.json(); })
                    .then(function (data) {
                        showToast(data.data.message, data.success ? 'success' : 'error');
                        if (data.success) contactForm.reset();
                        if (btn) { btn.disabled = false; btn.textContent = 'Send Message'; }
                    });
            });
        }

        /* --- Custom Order Form --- */
        var customOrderForm = document.querySelector('#ac-custom-order-form');
        if (customOrderForm) {
            /* Show/hide delivery address */
            var deliverySelect = customOrderForm.querySelector('[name="delivery_option"]');
            var addressGroup = document.querySelector('.ac-delivery-address-group');
            if (deliverySelect && addressGroup) {
                deliverySelect.addEventListener('change', function () {
                    addressGroup.style.display = this.value === 'delivery' ? 'block' : 'none';
                });
            }

            /* File upload preview */
            var fileInput = customOrderForm.querySelector('input[type="file"]');
            var filePreview = document.querySelector('.ac-file-preview');
            if (fileInput && filePreview) {
                fileInput.addEventListener('change', function () {
                    filePreview.innerHTML = '';
                    if (this.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            filePreview.innerHTML = '<img src="' + e.target.result + '" alt="Preview">';
                        };
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            }

            customOrderForm.addEventListener('submit', function (e) {
                e.preventDefault();
                if (typeof annie_cakes_data === 'undefined') return;

                var btn = customOrderForm.querySelector('button[type="submit"]');
                if (btn) { btn.disabled = true; btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...'; }

                var formData = new FormData(customOrderForm);
                formData.append('action', 'annie_custom_order');

                fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                    .then(function (r) { return r.json(); })
                    .then(function (data) {
                        showToast(data.data.message, data.success ? 'success' : 'error');
                        if (data.success) customOrderForm.reset();
                        if (btn) { btn.disabled = false; btn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Order Request'; }
                    });
            });
        }

        /* --- Order Tracking Form --- */
        var trackingForm = document.querySelector('#ac-tracking-form');
        if (trackingForm) {
            trackingForm.addEventListener('submit', function (e) {
                e.preventDefault();
                if (typeof annie_cakes_data === 'undefined') return;

                var formData = new FormData(trackingForm);
                formData.append('action', 'annie_track_order');

                fetch(annie_cakes_data.ajax_url, { method: 'POST', body: formData })
                    .then(function (r) { return r.json(); })
                    .then(function (data) {
                        var result = document.querySelector('.ac-tracking-result');
                        if (data.success && result) {
                            result.style.display = 'block';
                            var orderIdEl = result.querySelector('.ac-tracking-order-id');
                            if (orderIdEl) orderIdEl.textContent = data.data.order_id;

                            var etaEl = result.querySelector('.ac-tracking-eta');
                            if (etaEl) etaEl.textContent = data.data.eta;

                            var statusMap = {
                                pending: 0,
                                processing: 1,
                                baking: 2,
                                out_for_delivery: 3,
                                delivered: 4
                            };
                            var statusIndex = statusMap[data.data.status] || 0;
                            var steps = result.querySelectorAll('.ac-tracking-step');
                            steps.forEach(function (step, i) {
                                step.classList.remove('active', 'current');
                                if (i < statusIndex) step.classList.add('active');
                                if (i === statusIndex) step.classList.add('active', 'current');
                            });
                        } else {
                            showToast(data.data.message, 'error');
                        }
                    });
            });
        }

        /* --- Gallery Filter --- */
        var filterBtns = document.querySelectorAll('.ac-filter-btn');
        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                this.classList.add('active');

                var filter = this.dataset.filter;
                var items = document.querySelectorAll('.ac-gallery-item');
                items.forEach(function (item) {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        /* --- AOS Init --- */
        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 800, once: true, offset: 80 });
        }

        /* --- Swiper Initialization --- */
        if (typeof Swiper !== 'undefined') {
            /* Hero Slider */
            if (document.querySelector('.ac-hero-slider')) {
                new Swiper('.ac-hero-slider', {
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    effect: 'fade',
                    fadeEffect: { crossFade: true },
                    pagination: { el: '.ac-hero-pagination', clickable: true },
                    navigation: { nextEl: '.ac-hero-next', prevEl: '.ac-hero-prev' }
                });
            }

            /* New Arrivals Slider */
            if (document.querySelector('.ac-arrivals-slider')) {
                new Swiper('.ac-arrivals-slider', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: { delay: 4000, disableOnInteraction: false },
                    pagination: { el: '.ac-arrivals-pagination', clickable: true },
                    breakpoints: {
                        480: { slidesPerView: 2 },
                        768: { slidesPerView: 3 },
                        1024: { slidesPerView: 4 }
                    }
                });
            }

            /* Testimonials Slider */
            if (document.querySelector('.ac-testimonials-slider')) {
                new Swiper('.ac-testimonials-slider', {
                    slidesPerView: 1,
                    spaceBetween: 25,
                    loop: true,
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    pagination: { el: '.ac-testimonials-pagination', clickable: true },
                    breakpoints: {
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 }
                    }
                });
            }
        }

        /* --- Lazy Load Images --- */
        var lazyImages = document.querySelectorAll('img[loading="lazy"]');
        lazyImages.forEach(function (img) {
            if (img.complete) {
                img.classList.add('loaded');
            } else {
                img.addEventListener('load', function () { this.classList.add('loaded'); });
            }
        });

        /* --- ESC Key Close --- */
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeMobile();
                closeCart();
                if (searchOverlay) searchOverlay.classList.remove('active');
                document.querySelectorAll('.ac-modal').forEach(function (m) { m.classList.remove('active'); });
            }
        });

    }); /* end DOMContentLoaded */

    /* --- Toast Notification --- */
    function showToast(message, type) {
        type = type || 'success';
        var container = document.querySelector('.ac-toast-container');
        if (!container) return;

        var toast = document.createElement('div');
        toast.className = 'ac-toast ac-toast-' + type;
        toast.innerHTML = '<i class="fas fa-' + (type === 'success' ? 'check-circle' : 'exclamation-circle') + '"></i>' +
            '<span>' + message + '</span>' +
            '<button class="ac-toast-close"><i class="fas fa-times"></i></button>';

        container.appendChild(toast);

        toast.querySelector('.ac-toast-close').addEventListener('click', function () {
            toast.remove();
        });

        setTimeout(function () { toast.remove(); }, 5000);
    }

    window.showToast = showToast;

    /* --- Update Cart Count --- */
    function updateCartCount(count) {
        var counters = document.querySelectorAll('.ac-cart-count');
        counters.forEach(function (c) { c.textContent = count; });
    }

})();
