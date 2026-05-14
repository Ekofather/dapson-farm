<?php
/**
 * Homepage Template — Annie Cakes & Gift
 * Premium Gold & Chocolate Theme
 *
 * @package AnnieCakes
 */

get_header();
?>

<!-- Hero Section -->
<section class="ac-hero">
    <div class="ac-hero-slider swiper" id="ac-hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_1', ANNIE_CAKES_URI . '/assets/images/hero-1.jpg' ) ); ?>'); background-color: #3C1518;">
                <div class="ac-hero-overlay"></div>
                <div class="ac-container">
                    <div class="ac-hero-content" data-aos="fade-up" data-aos-delay="200">
                        <span class="ac-hero-badge"><?php esc_html_e( 'Premium Bakery & Gifts', 'annie-cakes' ); ?></span>
                        <h1><?php echo esc_html( get_theme_mod( 'annie_hero_title_1', 'Crafting Sweet Memories' ) ); ?></h1>
                        <p><?php echo esc_html( get_theme_mod( 'annie_hero_subtitle_1', 'Luxury cakes and thoughtful gifts for every special moment. Handcrafted with love and the finest ingredients.' ) ); ?></p>
                        <div class="ac-hero-buttons">
                            <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                                <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Shop Now', 'annie-cakes' ); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-outline-white ac-btn-lg">
                                <i class="fas fa-birthday-cake"></i> <?php esc_html_e( 'Custom Cake', 'annie-cakes' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ac-hero-floating">
                    <div class="ac-floating-element ac-float-1"><i class="fas fa-star"></i></div>
                    <div class="ac-floating-element ac-float-2"><i class="fas fa-heart"></i></div>
                    <div class="ac-floating-element ac-float-3"><i class="fas fa-birthday-cake"></i></div>
                </div>
            </div>

            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_2', ANNIE_CAKES_URI . '/assets/images/hero-2.jpg' ) ); ?>'); background-color: #5C3D2E;">
                <div class="ac-hero-overlay"></div>
                <div class="ac-container">
                    <div class="ac-hero-content" data-aos="fade-up" data-aos-delay="200">
                        <span class="ac-hero-badge"><?php esc_html_e( 'Handcrafted With Love', 'annie-cakes' ); ?></span>
                        <h1><?php echo esc_html( get_theme_mod( 'annie_hero_title_2', 'Order Your Dream Cake' ) ); ?></h1>
                        <p><?php echo esc_html( get_theme_mod( 'annie_hero_subtitle_2', 'From birthdays to weddings, we create stunning custom cakes that make your celebrations unforgettable.' ) ); ?></p>
                        <div class="ac-hero-buttons">
                            <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                                <i class="fas fa-magic"></i> <?php esc_html_e( 'Get Quote', 'annie-cakes' ); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>" class="ac-btn ac-btn-outline-white ac-btn-lg">
                                <i class="fas fa-images"></i> <?php esc_html_e( 'View Gallery', 'annie-cakes' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_3', ANNIE_CAKES_URI . '/assets/images/hero-3.jpg' ) ); ?>'); background-color: #3C1518;">
                <div class="ac-hero-overlay"></div>
                <div class="ac-container">
                    <div class="ac-hero-content" data-aos="fade-up" data-aos-delay="200">
                        <span class="ac-hero-badge"><?php esc_html_e( 'Perfect Gifts', 'annie-cakes' ); ?></span>
                        <h1><?php echo esc_html( get_theme_mod( 'annie_hero_title_3', 'Gift Boxes & Hampers' ) ); ?></h1>
                        <p><?php echo esc_html( get_theme_mod( 'annie_hero_subtitle_3', 'Surprise your loved ones with our luxury gift boxes, hampers, and curated gift packages.' ) ); ?></p>
                        <div class="ac-hero-buttons">
                            <a href="<?php echo esc_url( home_url( '/product-category/gifts/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                                <i class="fas fa-gift"></i> <?php esc_html_e( 'Shop Gifts', 'annie-cakes' ); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="ac-btn ac-btn-outline-white ac-btn-lg">
                                <i class="fas fa-info-circle"></i> <?php esc_html_e( 'About Us', 'annie-cakes' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination ac-hero-pagination"></div>
    </div>
</section>

<!-- Features Bar -->
<section class="ac-features-bar ac-section">
    <div class="ac-container">
        <div class="ac-features-grid" data-aos="fade-up">
            <div class="ac-feature-item">
                <div class="ac-feature-icon"><i class="fas fa-truck"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Same Day Delivery', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Fast delivery within Lagos and nationwide shipping', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item">
                <div class="ac-feature-icon"><i class="fas fa-medal"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Premium Quality', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Made with the finest imported ingredients', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item">
                <div class="ac-feature-icon"><i class="fas fa-birthday-cake"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Custom Designs', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Bespoke cakes for every celebration', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item">
                <div class="ac-feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Secure Payment', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Safe checkout with Paystack & Flutterwave', 'annie-cakes' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Browse Collection', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Shop by Category', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'From decadent chocolate cakes to elegant gift hampers — find the perfect treat for every occasion.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-categories-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $cats = get_terms( array( 'taxonomy' => 'product_cat', 'hide_empty' => false, 'number' => 6, 'parent' => 0 ) );
                if ( ! is_wp_error( $cats ) && $cats ) {
                    foreach ( $cats as $cat ) {
                        $thumb_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                        $img = $thumb_id ? wp_get_attachment_url( $thumb_id ) : ANNIE_CAKES_URI . '/assets/images/category-placeholder.jpg';
                        ?>
                        <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="ac-category-card" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( 100 ); ?>">
                            <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( $cat->name ); ?>" loading="lazy">
                            <div class="ac-category-overlay">
                                <h3><?php echo esc_html( $cat->name ); ?></h3>
                                <span><?php echo esc_html( sprintf( _n( '%s product', '%s products', $cat->count, 'annie-cakes' ), number_format_i18n( $cat->count ) ) ); ?></span>
                            </div>
                        </a>
                        <?php
                    }
                }
            }
            if ( ! class_exists( 'WooCommerce' ) || empty( $cats ) || is_wp_error( $cats ) ) {
                $default_cats = array(
                    array( 'name' => 'Birthday Cakes', 'icon' => 'fas fa-birthday-cake' ),
                    array( 'name' => 'Wedding Cakes', 'icon' => 'fas fa-ring' ),
                    array( 'name' => 'Cupcakes', 'icon' => 'fas fa-cookie' ),
                    array( 'name' => 'Gift Hampers', 'icon' => 'fas fa-gift' ),
                    array( 'name' => 'Pastries', 'icon' => 'fas fa-bread-slice' ),
                    array( 'name' => 'Custom Cakes', 'icon' => 'fas fa-magic' ),
                );
                foreach ( $default_cats as $i => $dc ) {
                    ?>
                    <div class="ac-category-card ac-category-placeholder" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( $i * 100 ); ?>">
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#3C1518,#5C3D2E);display:flex;align-items:center;justify-content:center;">
                            <i class="<?php echo esc_attr( $dc['icon'] ); ?>" style="font-size:3rem;color:#d4af37;opacity:0.6;"></i>
                        </div>
                        <div class="ac-category-overlay">
                            <h3><?php echo esc_html( $dc['name'] ); ?></h3>
                            <span><?php esc_html_e( 'View Collection', 'annie-cakes' ); ?></span>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Best Sellers Section -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Customer Favourites', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Best Selling Products', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Our most loved cakes and gifts — chosen by thousands of happy customers across Nigeria.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $best = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'meta_key'       => 'total_sales',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'DESC',
                ) );
                if ( $best->have_posts() ) {
                    while ( $best->have_posts() ) {
                        $best->the_post();
                        get_template_part( 'template-parts/product-card' );
                    }
                    wp_reset_postdata();
                }
            }
            if ( ! class_exists( 'WooCommerce' ) || ! $best->have_posts() ) {
                $placeholders = array(
                    array( 'name' => 'Chocolate Birthday Cake', 'price' => '₦45,000', 'cat' => 'Birthday Cakes' ),
                    array( 'name' => 'Red Velvet Cake', 'price' => '₦38,000', 'cat' => 'Birthday Cakes' ),
                    array( 'name' => 'Wedding Cake', 'price' => '₦120,000', 'cat' => 'Wedding Cakes' ),
                    array( 'name' => 'Luxury Gift Box', 'price' => '₦55,000', 'cat' => 'Gift Hampers' ),
                    array( 'name' => 'Cupcake Box (12pcs)', 'price' => '₦25,000', 'cat' => 'Cupcakes' ),
                    array( 'name' => 'Fruit Cake', 'price' => '₦35,000', 'cat' => 'Birthday Cakes' ),
                    array( 'name' => 'Buttercream Cake', 'price' => '₦40,000', 'cat' => 'Birthday Cakes' ),
                    array( 'name' => 'Anniversary Cake', 'price' => '₦50,000', 'cat' => 'Custom Cakes' ),
                );
                foreach ( $placeholders as $i => $p ) {
                    ?>
                    <div class="ac-product-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $i * 80 ); ?>">
                        <div class="ac-product-image">
                            <div style="width:100%;height:100%;background:linear-gradient(135deg,#F5ECDF,#E8DDD4);display:flex;align-items:center;justify-content:center;">
                                <i class="fas fa-birthday-cake" style="font-size:3rem;color:#d4af37;opacity:0.4;"></i>
                            </div>
                            <?php if ( $i < 3 ) : ?>
                                <div class="ac-product-badges"><span class="ac-badge ac-badge-hot"><?php esc_html_e( 'Best Seller', 'annie-cakes' ); ?></span></div>
                            <?php endif; ?>
                        </div>
                        <div class="ac-product-info">
                            <div class="ac-product-category"><?php echo esc_html( $p['cat'] ); ?></div>
                            <h3><a href="#"><?php echo esc_html( $p['name'] ); ?></a></h3>
                            <div class="ac-product-rating">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="ac-product-price">
                                <span class="current-price"><?php echo esc_html( $p['price'] ); ?></span>
                            </div>
                            <button class="ac-product-add-to-cart"><i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?></button>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div style="text-align:center;margin-top:40px;" data-aos="fade-up">
            <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-outline">
                <?php esc_html_e( 'View All Products', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Hot Sales Countdown -->
<section class="ac-hot-sales">
    <div class="ac-container">
        <div class="ac-hot-sales-inner">
            <div class="ac-hot-sales-content" data-aos="fade-right">
                <span class="ac-section-badge"><?php esc_html_e( 'Limited Time Offer', 'annie-cakes' ); ?></span>
                <h2><?php echo esc_html( get_theme_mod( 'annie_sale_title', 'Hot Sales — Up to 40% Off!' ) ); ?></h2>
                <p><?php echo esc_html( get_theme_mod( 'annie_sale_subtitle', 'Don\'t miss out on our seasonal collection. Premium cakes and gift sets at unbeatable prices. Perfect for birthdays, anniversaries, and special surprises.' ) ); ?></p>
                <div class="ac-countdown" data-date="<?php echo esc_attr( get_theme_mod( 'annie_sale_end', gmdate( 'Y-m-d', strtotime( '+30 days' ) ) ) ); ?>">
                    <div class="ac-countdown-item"><span class="number" data-days>00</span><span class="label"><?php esc_html_e( 'Days', 'annie-cakes' ); ?></span></div>
                    <div class="ac-countdown-item"><span class="number" data-hours>00</span><span class="label"><?php esc_html_e( 'Hours', 'annie-cakes' ); ?></span></div>
                    <div class="ac-countdown-item"><span class="number" data-minutes>00</span><span class="label"><?php esc_html_e( 'Mins', 'annie-cakes' ); ?></span></div>
                    <div class="ac-countdown-item"><span class="number" data-seconds>00</span><span class="label"><?php esc_html_e( 'Secs', 'annie-cakes' ); ?></span></div>
                </div>
                <a href="<?php echo esc_url( home_url( '/hot-sales/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                    <i class="fas fa-fire"></i> <?php esc_html_e( 'Shop Hot Sales', 'annie-cakes' ); ?>
                </a>
            </div>
            <div class="ac-hot-sales-products" data-aos="fade-left">
                <?php
                if ( class_exists( 'WooCommerce' ) ) {
                    $sale = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 2, 'meta_query' => array( array( 'key' => '_sale_price', 'value' => 0, 'compare' => '>', 'type' => 'NUMERIC' ) ) ) );
                    if ( $sale->have_posts() ) {
                        while ( $sale->have_posts() ) { $sale->the_post(); get_template_part( 'template-parts/product-card' ); }
                        wp_reset_postdata();
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Custom Order CTA -->
<section class="ac-custom-cta ac-section">
    <div class="ac-container">
        <div class="ac-custom-cta-inner">
            <div class="ac-custom-cta-content" data-aos="fade-right">
                <span class="ac-section-badge"><?php esc_html_e( 'Made Just For You', 'annie-cakes' ); ?></span>
                <h2><?php esc_html_e( 'Design Your Perfect Cake', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Tell us your vision and we\'ll bring it to life. Our master bakers specialise in creating one-of-a-kind cakes for weddings, birthdays, corporate events, and every special occasion. Upload your inspiration photo, choose your flavour, pick your size — and leave the rest to us.', 'annie-cakes' ); ?></p>
                <ul class="ac-custom-cta-features">
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Upload your cake inspiration photo', 'annie-cakes' ); ?></li>
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Choose from 12+ premium flavours', 'annie-cakes' ); ?></li>
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Pick size from 6" to 14" multi-tier', 'annie-cakes' ); ?></li>
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Free consultation via WhatsApp', 'annie-cakes' ); ?></li>
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Delivery or pickup available', 'annie-cakes' ); ?></li>
                    <li><i class="fas fa-check-circle"></i> <?php esc_html_e( 'Get a quote within 2 hours', 'annie-cakes' ); ?></li>
                </ul>
                <div style="display:flex;gap:12px;flex-wrap:wrap;">
                    <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-primary">
                        <i class="fas fa-paint-brush"></i> <?php esc_html_e( 'Design Your Cake', 'annie-cakes' ); ?>
                    </a>
                    <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" target="_blank" rel="noopener" class="ac-btn ac-btn-outline">
                        <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'Chat on WhatsApp', 'annie-cakes' ); ?>
                    </a>
                </div>
            </div>
            <div class="ac-custom-cta-image" data-aos="fade-left">
                <img src="<?php echo esc_url( get_theme_mod( 'annie_custom_cta_img', ANNIE_CAKES_URI . '/assets/images/custom-cake.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Custom cake design', 'annie-cakes' ); ?>" loading="lazy" style="background:linear-gradient(135deg,#F5ECDF,#E8DDD4);min-height:400px;">
            </div>
        </div>
    </div>
</section>

<!-- New Arrivals Slider -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Fresh From The Oven', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'New Arrivals', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Explore our latest creations — freshly designed cakes and newly curated gift packages.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-arrivals-slider swiper">
            <div class="swiper-wrapper">
                <?php
                if ( class_exists( 'WooCommerce' ) ) {
                    $new = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => 8, 'orderby' => 'date', 'order' => 'DESC' ) );
                    if ( $new->have_posts() ) {
                        while ( $new->have_posts() ) {
                            $new->the_post();
                            echo '<div class="swiper-slide">';
                            get_template_part( 'template-parts/product-card' );
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }
                }
                if ( ! class_exists( 'WooCommerce' ) || ! $new->have_posts() ) {
                    $new_items = array( 'Chocolate Hamper', 'Surprise Box', 'Bridal Shower Cake', 'Graduation Cake', 'Valentine Package', 'Kids Cartoon Cake', 'Teddy Gift Package', 'Anniversary Cake' );
                    foreach ( $new_items as $ni ) {
                        ?>
                        <div class="swiper-slide">
                            <div class="ac-product-card">
                                <div class="ac-product-image">
                                    <div style="width:100%;height:100%;aspect-ratio:1;background:linear-gradient(135deg,#F5ECDF,#E8DDD4);display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-gift" style="font-size:3rem;color:#d4af37;opacity:0.4;"></i>
                                    </div>
                                    <div class="ac-product-badges"><span class="ac-badge ac-badge-new"><?php esc_html_e( 'New', 'annie-cakes' ); ?></span></div>
                                </div>
                                <div class="ac-product-info">
                                    <h3><a href="#"><?php echo esc_html( $ni ); ?></a></h3>
                                    <div class="ac-product-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="ac-product-price"><span class="current-price">₦<?php echo esc_html( number_format( wp_rand( 20000, 80000 ), 0 ) ); ?></span></div>
                                    <button class="ac-product-add-to-cart"><i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?></button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="swiper-pagination ac-arrivals-pagination"></div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Customer Love', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'What Our Customers Say', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Over 2,000 happy customers trust Annie Cakes & Gift for their sweetest moments.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-testimonials-slider swiper">
            <div class="swiper-wrapper">
                <?php
                $testimonials = get_posts( array( 'post_type' => 'ac_testimonial', 'posts_per_page' => 6, 'orderby' => 'rand' ) );
                if ( $testimonials ) {
                    foreach ( $testimonials as $t ) {
                        $rating = get_post_meta( $t->ID, '_testimonial_rating', true ) ?: 5;
                        $role = get_post_meta( $t->ID, '_testimonial_role', true ) ?: '';
                        ?>
                        <div class="swiper-slide">
                            <div class="ac-testimonial-card">
                                <span class="ac-testimonial-quote">&ldquo;</span>
                                <div class="ac-testimonial-stars">
                                    <?php for ( $s = 0; $s < $rating; $s++ ) : ?><i class="fas fa-star"></i><?php endfor; ?>
                                </div>
                                <p class="ac-testimonial-text"><?php echo esc_html( $t->post_content ); ?></p>
                                <div class="ac-testimonial-author">
                                    <div class="ac-testimonial-avatar"><?php echo esc_html( mb_strtoupper( mb_substr( $t->post_title, 0, 1 ) ) ); ?></div>
                                    <div class="ac-testimonial-info">
                                        <h4><?php echo esc_html( $t->post_title ); ?></h4>
                                        <?php if ( $role ) : ?><span><?php echo esc_html( $role ); ?></span><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    $default_testimonials = array(
                        array( 'name' => 'Chioma Adeyemi', 'text' => 'Annie Cakes made the most beautiful wedding cake for my daughter\'s wedding. The 5-tier fondant cake was an absolute showstopper! Every guest was blown away by both the design and the taste. I\'ve already recommended them to three friends.', 'role' => 'Happy Mother of the Bride', 'initial' => 'C' ),
                        array( 'name' => 'Tunde Okoye', 'text' => 'I ordered a surprise birthday cake for my wife and it exceeded all expectations. The chocolate ganache was divine, the decorations were exactly what I described, and it arrived on time. The team even called to confirm the delivery address. Excellent service!', 'role' => 'Loyal Customer', 'initial' => 'T' ),
                        array( 'name' => 'Amara Nwosu', 'text' => 'I\'ve been ordering from Annie Cakes for over two years now. Their cupcakes are always fresh, moist, and perfectly decorated. The gift hampers are my go-to for Christmas and Valentine\'s. Consistent quality every single time!', 'role' => 'Regular Customer', 'initial' => 'A' ),
                        array( 'name' => 'Blessing Eze', 'text' => 'We ordered 200 cupcakes for our corporate event and every single one was beautifully decorated with our company logo. Annie Cakes delivered on time and the quality was outstanding. Our clients loved them. Will definitely be ordering again!', 'role' => 'Corporate Client', 'initial' => 'B' ),
                        array( 'name' => 'Kemi Bakare', 'text' => 'The custom teddy bear gift package I ordered for my sister\'s baby shower was absolutely adorable! The packaging was elegant, the chocolates were delicious, and the personalised card was a lovely touch. Annie Cakes goes above and beyond.', 'role' => 'Gift Buyer', 'initial' => 'K' ),
                        array( 'name' => 'David Olumide', 'text' => 'From ordering to delivery, the experience was seamless. I tracked my order in real-time and received updates at every stage. The graduation cake was exactly as designed — my daughter was thrilled! The WhatsApp support team is incredibly responsive.', 'role' => 'Satisfied Father', 'initial' => 'D' ),
                    );
                    foreach ( $default_testimonials as $dt ) {
                        ?>
                        <div class="swiper-slide">
                            <div class="ac-testimonial-card">
                                <span class="ac-testimonial-quote">&ldquo;</span>
                                <div class="ac-testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                <p class="ac-testimonial-text"><?php echo esc_html( $dt['text'] ); ?></p>
                                <div class="ac-testimonial-author">
                                    <div class="ac-testimonial-avatar"><?php echo esc_html( $dt['initial'] ); ?></div>
                                    <div class="ac-testimonial-info">
                                        <h4><?php echo esc_html( $dt['name'] ); ?></h4>
                                        <span><?php echo esc_html( $dt['role'] ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="swiper-pagination ac-testimonials-pagination"></div>
        </div>
    </div>
</section>

<!-- Video CTA Section -->
<section class="ac-video-section" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_video_bg', ANNIE_CAKES_URI . '/assets/images/bakery-bg.jpg' ) ); ?>'); background-color: #3C1518;">
    <div class="ac-video-overlay"></div>
    <div class="ac-video-content" data-aos="zoom-in">
        <div class="ac-video-play">
            <i class="fas fa-play"></i>
        </div>
        <h2><?php esc_html_e( 'Watch How We Bake With Love', 'annie-cakes' ); ?></h2>
        <p><?php esc_html_e( 'Take a peek behind the scenes of our kitchen — where passion meets pastry.', 'annie-cakes' ); ?></p>
    </div>
</section>

<!-- Why Choose Us -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'The Annie Cakes Difference', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Why Choose Us', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'We don\'t just bake cakes — we craft experiences that make your celebrations truly unforgettable.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-why-grid">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-award"></i></div>
                <h3><?php esc_html_e( 'Premium Ingredients', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We use only the finest imported butter, Belgian chocolate, Madagascar vanilla, and farm-fresh eggs in every recipe. No artificial preservatives, no shortcuts — just pure deliciousness.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-palette"></i></div>
                <h3><?php esc_html_e( 'Artistic Designs', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Our cake artists are trained in fondant sculpting, sugar flowers, hand-painting, and 3D cake design. Every creation is a masterpiece tailored to your vision and celebration.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon"><i class="fas fa-clock"></i></div>
                <h3><?php esc_html_e( 'Always On Time', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We understand timing is everything. With our dedicated delivery team and real-time order tracking, your cake arrives fresh and on schedule — every single time, guaranteed.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-why-icon"><i class="fas fa-headset"></i></div>
                <h3><?php esc_html_e( '24/7 Support', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Our customer service team is available around the clock via WhatsApp, phone, and email. Have a question about your order? We respond within minutes, not hours.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="500">
                <div class="ac-why-icon"><i class="fas fa-gift"></i></div>
                <h3><?php esc_html_e( 'Gift-Ready Packaging', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Every order is beautifully packaged in our signature gold and chocolate boxes with ribbons, tissue paper, and a personalised greeting card. Ready to gift, ready to impress.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="600">
                <div class="ac-why-icon"><i class="fas fa-heart"></i></div>
                <h3><?php esc_html_e( 'Made With Love', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Every cake is baked with passion by our team of artisan bakers who have over 10 years of combined experience. We treat every order like it\'s for our own family celebration.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Counters Section -->
<section class="ac-counters ac-counters-section">
    <div class="ac-container">
        <div class="ac-counters-grid">
            <div class="ac-counter-item" data-aos="fade-up">
                <div class="ac-counter-icon"><i class="fas fa-birthday-cake"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="5000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Cakes Delivered', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-counter-icon"><i class="fas fa-smile"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="3000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Happy Customers', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-counter-icon"><i class="fas fa-star"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="4500">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '5-Star Reviews', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-counter-icon"><i class="fas fa-cookie-bite"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="150">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Cake Flavours', 'annie-cakes' ); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Gallery -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Follow Us', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Our Instagram Gallery', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Follow @anniecakesandgift for daily cake inspiration, behind-the-scenes content, and exclusive offers.', 'annie-cakes' ); ?></p>
        </div>
    </div>
    <div class="ac-instagram-grid">
        <?php for ( $ig = 0; $ig < 6; $ig++ ) : ?>
            <div class="ac-instagram-item" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( $ig * 80 ); ?>">
                <div style="width:100%;height:100%;background:linear-gradient(<?php echo esc_attr( 135 + $ig * 30 ); ?>deg,#3C1518,#5C3D2E);display:flex;align-items:center;justify-content:center;">
                    <i class="fas fa-<?php echo esc_attr( array( 'birthday-cake', 'gift', 'cookie', 'heart', 'star', 'camera' )[ $ig ] ); ?>" style="font-size:2rem;color:#d4af37;opacity:0.3;"></i>
                </div>
                <div class="ac-instagram-overlay"><i class="fab fa-instagram"></i></div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<!-- Blog Preview -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'From Our Blog', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Baking Tips & Sweet Stories', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Recipes, decorating tutorials, and inspiration from our kitchen to yours.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-blog-grid">
            <?php
            $blog = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
            if ( $blog->have_posts() ) {
                while ( $blog->have_posts() ) {
                    $blog->the_post();
                    ?>
                    <article class="ac-blog-card" data-aos="fade-up">
                        <div class="ac-blog-card-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'annie-blog-thumb' ); ?>
                            <?php else : ?>
                                <div style="width:100%;height:100%;background:linear-gradient(135deg,#F5ECDF,#E8DDD4);display:flex;align-items:center;justify-content:center;"><i class="fas fa-pen-fancy" style="font-size:2rem;color:#d4af37;opacity:0.4;"></i></div>
                            <?php endif; ?>
                            <span class="ac-blog-card-date"><?php echo esc_html( get_the_date( 'M d' ) ); ?></span>
                        </div>
                        <div class="ac-blog-card-body">
                            <div class="ac-blog-card-meta">
                                <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                                <span><i class="fas fa-comment"></i> <?php echo esc_html( get_comments_number() ); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="ac-read-more"><?php esc_html_e( 'Read More', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php
                }
                wp_reset_postdata();
            } else {
                $default_posts = array(
                    array( 'title' => '10 Trending Cake Designs for 2024 Nigerian Weddings', 'excerpt' => 'From elegant minimalist fondant to opulent gold-leaf masterpieces, discover the cake trends that are taking Nigerian weddings by storm this year.' ),
                    array( 'title' => 'How to Choose the Perfect Birthday Cake Flavour', 'excerpt' => 'Red velvet, chocolate ganache, or vanilla buttercream? Our comprehensive guide helps you pick the ideal flavour to match the birthday person\'s personality.' ),
                    array( 'title' => 'The Art of Gift Hamper Packaging: A Behind-the-Scenes Look', 'excerpt' => 'Step inside our gift studio and see how we curate, assemble, and package our signature luxury gift hampers that leave lasting impressions.' ),
                );
                foreach ( $default_posts as $dp ) {
                    ?>
                    <article class="ac-blog-card" data-aos="fade-up">
                        <div class="ac-blog-card-image">
                            <div style="width:100%;height:100%;aspect-ratio:16/10;background:linear-gradient(135deg,#F5ECDF,#E8DDD4);display:flex;align-items:center;justify-content:center;">
                                <i class="fas fa-pen-fancy" style="font-size:2rem;color:#d4af37;opacity:0.4;"></i>
                            </div>
                            <span class="ac-blog-card-date"><?php echo esc_html( wp_date( 'M d' ) ); ?></span>
                        </div>
                        <div class="ac-blog-card-body">
                            <div class="ac-blog-card-meta">
                                <span><i class="fas fa-user"></i> Annie Cakes</span>
                                <span><i class="fas fa-comment"></i> 0</span>
                            </div>
                            <h3><a href="#"><?php echo esc_html( $dp['title'] ); ?></a></h3>
                            <p><?php echo esc_html( $dp['excerpt'] ); ?></p>
                            <a href="#" class="ac-read-more"><?php esc_html_e( 'Read More', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                    <?php
                }
            }
            ?>
        </div>
        <div style="text-align:center;margin-top:40px;" data-aos="fade-up">
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="ac-btn ac-btn-outline">
                <?php esc_html_e( 'Read All Articles', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Delivery Info Section -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Delivery Information', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'We Deliver Happiness', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Fast, reliable delivery to your doorstep — anywhere in Lagos and nationwide across Nigeria.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-why-grid">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-motorcycle"></i></div>
                <h3><?php esc_html_e( 'Same Day Delivery', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Order before 12pm and receive your cake the same day anywhere within Lagos. Express delivery available for last-minute celebrations.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-shipping-fast"></i></div>
                <h3><?php esc_html_e( 'Nationwide Shipping', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We ship to all 36 states and FCT with secure, temperature-controlled packaging. Gift hampers and non-perishable items delivered within 2-3 business days.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3><?php esc_html_e( 'Real-Time Tracking', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Track your order from our kitchen to your doorstep. Receive SMS and email updates at every stage — from baking to dispatch to delivery.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
