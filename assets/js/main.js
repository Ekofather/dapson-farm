/**
 * Feyikemi Portfolio - Main JavaScript
 *
 * @package Feyikemi_Portfolio
 */

(function ($) {
    'use strict';

    // ─── Preloader ───
    $(window).on('load', function () {
        $('#preloader').addClass('loaded');
        setTimeout(function () {
            $('#preloader').remove();
        }, 600);
    });

    $(document).ready(function () {

        // ─── AOS Init ───
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 80,
            });
        }

        // ─── Header Scroll ───
        var header = $('#site-header');
        function handleScroll() {
            if ($(window).scrollTop() > 50) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }
        }
        handleScroll();
        $(window).on('scroll', handleScroll);

        // ─── Mobile Menu ───
        var menuToggle = $('.mobile-menu-toggle');
        var navMenu = $('.nav-menu');

        menuToggle.on('click', function () {
            $(this).toggleClass('active');
            navMenu.toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        navMenu.find('a').on('click', function () {
            menuToggle.removeClass('active');
            navMenu.removeClass('active');
            $('body').removeClass('menu-open');
        });

        // Close menu on outside click
        $(document).on('click', function (e) {
            if (navMenu.hasClass('active') && !$(e.target).closest('.main-nav').length) {
                menuToggle.removeClass('active');
                navMenu.removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // ─── Smooth Scroll ───
        $('a[href^="#"]').on('click', function (e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 600);
            }
        });

        // ─── Back to Top ───
        var backToTop = $('#back-to-top');
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 400) {
                backToTop.addClass('visible');
            } else {
                backToTop.removeClass('visible');
            }
        });

        backToTop.on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 600);
        });

        // ─── Typing Effect ───
        var typingElement = $('.hero-typing-text');
        if (typingElement.length) {
            var strings = [];
            try {
                strings = JSON.parse(typingElement.attr('data-strings') || '[]');
            } catch (e) {
                strings = [];
            }

            if (strings.length > 0) {
                var stringIndex = 0;
                var charIndex = 0;
                var isDeleting = false;
                var typingDelay = 100;
                var erasingDelay = 50;
                var newTextDelay = 2000;

                function typeEffect() {
                    var currentString = strings[stringIndex];
                    if (isDeleting) {
                        typingElement.text(currentString.substring(0, charIndex - 1));
                        charIndex--;
                    } else {
                        typingElement.text(currentString.substring(0, charIndex + 1));
                        charIndex++;
                    }

                    var delay = isDeleting ? erasingDelay : typingDelay;

                    if (!isDeleting && charIndex === currentString.length) {
                        delay = newTextDelay;
                        isDeleting = true;
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        stringIndex = (stringIndex + 1) % strings.length;
                        delay = 500;
                    }

                    setTimeout(typeEffect, delay);
                }

                setTimeout(typeEffect, 1000);
            }
        }

        // ─── Counter Animation ───
        var counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el = $(entry.target);
                    var target = parseInt(el.attr('data-count'), 10);
                    if (isNaN(target)) return;

                    var duration = target > 1000 ? 2000 : 1500;
                    var startTime = null;

                    function animate(currentTime) {
                        if (!startTime) startTime = currentTime;
                        var progress = Math.min((currentTime - startTime) / duration, 1);
                        var eased = 1 - Math.pow(1 - progress, 3);
                        var current = Math.floor(eased * target);

                        if (target >= 1000) {
                            el.text(current.toLocaleString());
                        } else {
                            el.text(current);
                        }

                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        }
                    }

                    requestAnimationFrame(animate);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        $('.stat-number[data-count]').each(function () {
            counterObserver.observe(this);
        });

        // ─── Skill Bar Animation ───
        var skillObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var fill = $(entry.target);
                    var width = fill.attr('data-width');
                    fill.css('width', width + '%');
                    skillObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        $('.skill-bar-fill').each(function () {
            skillObserver.observe(this);
        });

        // ─── Contact Form ───
        $('#contact-form').on('submit', function (e) {
            e.preventDefault();

            var form = $(this);
            var btn = form.find('button[type="submit"]');
            var messageEl = form.find('.form-message');

            btn.addClass('loading').prop('disabled', true);
            messageEl.removeClass('success error').hide();

            $.ajax({
                url: feyikemiAjax.ajaxurl,
                type: 'POST',
                data: {
                    action: 'feyikemi_contact',
                    nonce: feyikemiAjax.nonce,
                    name: form.find('[name="name"]').val(),
                    email: form.find('[name="email"]').val(),
                    subject: form.find('[name="subject"]').val(),
                    message: form.find('[name="message"]').val(),
                },
                success: function (response) {
                    if (response.success) {
                        messageEl.addClass('success').text(response.data.message).show();
                        form[0].reset();
                    } else {
                        messageEl.addClass('error').text(response.data.message).show();
                    }
                },
                error: function () {
                    messageEl.addClass('error').text('An error occurred. Please try again.').show();
                },
                complete: function () {
                    btn.removeClass('loading').prop('disabled', false);
                },
            });
        });

        // ─── Active nav highlight ───
        var sections = $('section[id]');
        if (sections.length) {
            $(window).on('scroll', function () {
                var scrollPos = $(window).scrollTop() + 120;
                sections.each(function () {
                    var section = $(this);
                    var top = section.offset().top;
                    var bottom = top + section.outerHeight();
                    var id = section.attr('id');
                    if (scrollPos >= top && scrollPos < bottom) {
                        $('.nav-menu li a').removeClass('active');
                        $('.nav-menu li a[href*="#' + id + '"]').addClass('active');
                    }
                });
            });
        }
    });

})(jQuery);
