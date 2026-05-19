/**
 * Demola Bakare FSI - Main JavaScript
 *
 * @package DemolaBakare
 */

(function ($) {
  "use strict";

  // ─── Preloader ───
  $(window).on("load", function () {
    var preloader = $("#preloader");
    preloader.find(".preloader-progress").animate({ width: "100%" }, 800, function () {
      preloader.fadeOut(500);
      $("body").addClass("loaded");
    });
  });

  $(document).ready(function () {
    // ─── AOS Init ───
    if (typeof AOS !== "undefined") {
      AOS.init({
        duration: 800,
        easing: "ease-out-cubic",
        once: true,
        offset: 80,
        disable: "mobile",
      });
    }

    // ─── Header Scroll Effect ───
    var header = $("#site-header");
    var lastScroll = 0;

    $(window).on("scroll", function () {
      var currentScroll = $(this).scrollTop();

      if (currentScroll > 100) {
        header.addClass("scrolled");
      } else {
        header.removeClass("scrolled");
      }

      if (currentScroll > 500) {
        if (currentScroll > lastScroll) {
          header.addClass("header-hidden");
        } else {
          header.removeClass("header-hidden");
        }
      }

      lastScroll = currentScroll;

      // Back to top button
      if (currentScroll > 600) {
        $("#back-to-top").addClass("visible");
      } else {
        $("#back-to-top").removeClass("visible");
      }
    });

    // ─── Mobile Menu Toggle ───
    var mobileToggle = $("#mobile-toggle");
    var navMenu = $("#nav-menu");
    var body = $("body");

    mobileToggle.on("click", function () {
      var expanded = $(this).attr("aria-expanded") === "true";
      $(this).attr("aria-expanded", !expanded);
      $(this).toggleClass("active");
      navMenu.toggleClass("active");
      body.toggleClass("menu-open");
    });

    // Close menu on link click
    navMenu.find("a").on("click", function () {
      mobileToggle.removeClass("active").attr("aria-expanded", "false");
      navMenu.removeClass("active");
      body.removeClass("menu-open");
    });

    // ─── Back to Top ───
    $("#back-to-top").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 800);
    });

    // ─── Stats Counter Animation ───
    var counted = false;
    $(window).on("scroll", function () {
      if (counted) return;
      var statsSection = $(".hero-stats");
      if (statsSection.length === 0) return;

      var top = statsSection.offset().top - $(window).height() + 100;
      if ($(window).scrollTop() > top) {
        counted = true;
        $(".stat-number[data-count]").each(function () {
          var target = parseInt($(this).data("count"), 10);
          var el = $(this);
          $({ count: 0 }).animate(
            { count: target },
            {
              duration: 2000,
              easing: "swing",
              step: function () {
                el.text(Math.floor(this.count));
              },
              complete: function () {
                el.text(target);
              },
            }
          );
        });
      }
    });

    // ─── Smooth Scroll ───
    $('a[href^="#"]').on("click", function (e) {
      var target = $($(this).attr("href"));
      if (target.length) {
        e.preventDefault();
        var offset = header.outerHeight() + 20;
        $("html, body").animate(
          { scrollTop: target.offset().top - offset },
          800,
          "swing"
        );
      }
    });

    // ─── Contact Form ───
    $("#contact-form").on("submit", function (e) {
      e.preventDefault();
      var form = $(this);
      var btn = form.find('button[type="submit"]');
      var response = $("#contact-response");

      btn.prop("disabled", true).find("span").text("Sending...");

      $.ajax({
        url: demolaAjax.ajaxurl,
        type: "POST",
        data: {
          action: "demola_contact",
          nonce: demolaAjax.nonce,
          name: form.find('[name="name"]').val(),
          email: form.find('[name="email"]').val(),
          subject: form.find('[name="subject"]').val(),
          message: form.find('[name="message"]').val(),
        },
        success: function (res) {
          if (res.success) {
            response
              .html('<div class="alert alert-success">' + res.data.message + "</div>")
              .show();
            form[0].reset();
          } else {
            response
              .html('<div class="alert alert-error">' + res.data.message + "</div>")
              .show();
          }
        },
        error: function () {
          response
            .html(
              '<div class="alert alert-error">An error occurred. Please try again.</div>'
            )
            .show();
        },
        complete: function () {
          btn.prop("disabled", false).find("span").text("Send Message");
        },
      });
    });

    // ─── Newsletter Form ───
    $(".newsletter-form").on("submit", function (e) {
      e.preventDefault();
      var form = $(this);
      var email = form.find('[name="email"]').val();
      var responseEl = form.find(".newsletter-response");

      $.ajax({
        url: demolaAjax.ajaxurl,
        type: "POST",
        data: {
          action: "demola_newsletter",
          nonce: demolaAjax.nonce,
          email: email,
        },
        success: function (res) {
          var msg = res.data ? res.data.message : "Thank you!";
          responseEl.html('<span class="' + (res.success ? "success" : "error") + '">' + msg + "</span>");
          if (res.success) {
            form.find('[name="email"]').val("");
          }
        },
      });
    });

    // ─── Gallery Filter ───
    $(".filter-btn").on("click", function () {
      var filter = $(this).data("filter");
      $(".filter-btn").removeClass("active");
      $(this).addClass("active");

      if (filter === "all") {
        $(".gallery-item").fadeIn(300);
      } else {
        $(".gallery-item").hide();
        $(".gallery-item." + filter).fadeIn(300);
      }
    });

    // ─── Gallery Lightbox ───
    var lightbox = $("#lightbox");
    var lightboxImg = $("#lightbox-img");
    var lightboxCaption = $("#lightbox-caption");
    var currentIndex = 0;
    var galleryImages = [];

    $(".gallery-item").each(function (i) {
      var img = $(this).find("img");
      if (img.length) {
        galleryImages.push({
          src: img.attr("src"),
          caption: $(this).find("h4").text(),
        });
      }
    });

    $(".gallery-item").on("click", function () {
      var img = $(this).find("img");
      if (img.length === 0) return;

      currentIndex = $(this).index();
      lightboxImg.attr("src", img.attr("src"));
      lightboxCaption.text($(this).find("h4").text());
      lightbox.fadeIn(300);
      body.css("overflow", "hidden");
    });

    $(".lightbox-close").on("click", function () {
      lightbox.fadeOut(300);
      body.css("overflow", "");
    });

    $(".lightbox-prev").on("click", function () {
      if (galleryImages.length === 0) return;
      currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
      lightboxImg.attr("src", galleryImages[currentIndex].src);
      lightboxCaption.text(galleryImages[currentIndex].caption);
    });

    $(".lightbox-next").on("click", function () {
      if (galleryImages.length === 0) return;
      currentIndex = (currentIndex + 1) % galleryImages.length;
      lightboxImg.attr("src", galleryImages[currentIndex].src);
      lightboxCaption.text(galleryImages[currentIndex].caption);
    });

    lightbox.on("click", function (e) {
      if (e.target === this) {
        $(this).fadeOut(300);
        body.css("overflow", "");
      }
    });

    // ─── Keyboard navigation for lightbox ───
    $(document).on("keydown", function (e) {
      if (!lightbox.is(":visible")) return;
      if (e.key === "Escape") lightbox.fadeOut(300), body.css("overflow", "");
      if (e.key === "ArrowLeft") $(".lightbox-prev").click();
      if (e.key === "ArrowRight") $(".lightbox-next").click();
    });

    // ─── Parallax-like effect on hero ───
    $(window).on("scroll", function () {
      var scroll = $(this).scrollTop();
      $(".hero-section").css("background-position-y", scroll * 0.4 + "px");
    });

    // ─── Active nav item highlighting ───
    var currentUrl = window.location.pathname;
    $(".nav-menu a, .nav-menu li a").each(function () {
      var linkPath = $(this)[0].pathname;
      if (currentUrl === linkPath) {
        $(this).closest("li").addClass("current-menu-item");
      }
    });
  });
})(jQuery);
