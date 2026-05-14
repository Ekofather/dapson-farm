# Annie Cakes & Gift - WordPress WooCommerce Theme

A premium, modern, fully responsive WordPress WooCommerce theme for a luxury bakery and gift brand.

## Features

- **Premium Design**: Pink & gold luxury aesthetic with glassmorphism, smooth animations, and modern typography (Playfair Display + Poppins)
- **WooCommerce Integration**: Full shop functionality with custom product cards, AJAX cart, quick view, and wishlist
- **Custom Order System**: Advanced cake/gift order request form with image upload, quote system, and admin notifications
- **Order Tracking**: 5-step tracking system (Pending → Processing → Baking → Out for Delivery → Delivered)
- **Dark Mode**: Toggle between light and dark themes with persistent storage
- **Loyalty System**: Points-based rewards with referral program
- **Responsive**: Mobile-first design optimized for all devices
- **20+ Page Templates**: Home, Shop, Custom Orders, About, Gallery, Testimonials, FAQ, Contact, and more

## Requirements

- WordPress 6.0+
- WooCommerce 8.0+
- PHP 7.4+

## Installation

1. Download the theme zip file
2. Go to **WordPress Admin → Appearance → Themes → Add New → Upload Theme**
3. Upload the zip file and click **Install Now**
4. Activate the theme
5. Install and activate **WooCommerce** if not already installed
6. Go to **Appearance → Annie Cakes Setup** to import demo content:
   - Click **Import Products** to add 15 sample products
   - Click **Create Pages** to create all required pages with templates
   - Click **Import Testimonials** to add sample testimonials
7. Go to **Settings → Reading** and set the homepage to display a static page, selecting the front page
8. Configure theme settings in **Appearance → Customize → Annie Cakes Settings**

## Theme Structure

```
annie-cakes-theme/
├── assets/
│   ├── css/
│   │   ├── main.css          # Core styles
│   │   ├── woocommerce.css   # WooCommerce overrides
│   │   ├── responsive.css    # Responsive breakpoints
│   │   └── admin.css         # Admin dashboard styles
│   └── js/
│       ├── main.js           # Frontend interactions
│       └── admin.js          # Admin scripts
├── inc/
│   ├── customizer.php        # Theme Customizer options
│   ├── template-tags.php     # Helper template functions
│   ├── custom-post-types.php # Testimonials, Gallery, Custom Orders
│   ├── woocommerce-functions.php # WooCommerce customizations
│   ├── ajax-handlers.php     # AJAX endpoints
│   ├── wishlist.php          # Wishlist system
│   ├── order-tracking.php    # Order tracking system
│   ├── custom-orders.php     # Custom order form handling
│   ├── loyalty-system.php    # Loyalty points & referral
│   └── demo-content.php      # Demo import functionality
├── page-templates/
│   ├── about.php
│   ├── gallery.php
│   ├── testimonials.php
│   ├── faq.php
│   ├── contact.php
│   ├── custom-orders.php
│   ├── hot-sales.php
│   ├── order-tracking.php
│   └── wishlist.php
├── template-parts/
│   ├── product-card.php      # Reusable product card
│   └── content-none.php      # No content fallback
├── woocommerce/
│   ├── archive-product.php   # Shop page
│   ├── single-product.php    # Product detail
│   └── content-single-product.php
├── front-page.php            # Homepage
├── header.php
├── footer.php
├── functions.php
├── style.css
└── README.md
```

## Customizer Options

Navigate to **Appearance → Customize → Annie Cakes Settings** to configure:

- **General**: Phone, email, address, WhatsApp number, working hours
- **Social Media**: Facebook, Instagram, Twitter, TikTok, YouTube URLs
- **Hero Section**: 3 slides with background images, titles, subtitles
- **Sale/Promotion**: Sale banner title, subtitle, countdown end date
- **Footer**: About text, map embed code
- **Video**: YouTube URL and poster image

## Payment Integration

The theme is designed to work with WooCommerce payment gateways. Install the following plugins for Nigerian payment support:

- **Flutterwave**: Install "Rave Payment Forms" plugin
- **Paystack**: Install "Paystack WooCommerce Payment Gateway" plugin
- **Bank Transfer**: Built into WooCommerce (enable in WooCommerce → Settings → Payments)
- **Cash on Delivery**: Built into WooCommerce

## Custom Order Workflow

1. Customer fills out the custom order form with details and inspiration image
2. Admin receives email notification and dashboard notification
3. Admin reviews the order in **Custom Orders** menu in WordPress admin
4. Admin updates the status (Pending → Quoted → Accepted → Declined)
5. Customer can also contact via WhatsApp for real-time communication

## Order Tracking Statuses

| Status | Description |
|--------|-------------|
| Pending | Order received, awaiting confirmation |
| Processing | Order confirmed and being prepared |
| Baking | Your cake is in the oven! |
| Out for Delivery | Order is on its way |
| Delivered | Order has been delivered |

## Browser Support

- Chrome 80+
- Firefox 80+
- Safari 14+
- Edge 80+
- Mobile browsers (iOS Safari, Chrome for Android)

## Credits

- Fonts: [Google Fonts](https://fonts.google.com/) (Playfair Display, Poppins)
- Icons: [Font Awesome 6](https://fontawesome.com/)
- Animations: [AOS - Animate on Scroll](https://michalsnik.github.io/aos/)
- Slider: [Swiper](https://swiperjs.com/)

## License

This theme is licensed under the GPL v2 or later.
