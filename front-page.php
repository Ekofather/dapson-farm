<?php
/**
 * Homepage Template
 *
 * @package AnnieCakes
 */

get_header();
?>

<!-- Hero Section -->
<section class="ac-hero">
    <div class="ac-hero-slider swiper" id="ac-hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_1', ANNIE_CAKES_URI . '/assets/images/hero-1.jpg' ) ); ?>');">
                <div class="ac-hero-overlay"></div>
                <div class="ac-container">
                    <div class="ac-hero-content" data-aos="fade-up" data-aos-delay="200">
                        <span class="ac-hero-badge"><?php esc_html_e( 'Premium Bakery & Gifts', 'annie-cakes' ); ?></span>
                        <h1><?php echo esc_html( get_theme_mod( 'annie_hero_title_1', 'Crafting Sweet Memories' ) ); ?></h1>
                        <p><?php echo esc_html( get_theme_mod( 'annie_hero_subtitle_1', 'Luxury cakes and thoughtful gifts for every special moment. Handcrafted with love and the finest ingredients.' ) ); ?></p>
                        <div class="ac-hero-buttons">
                            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
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

            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_2', ANNIE_CAKES_URI . '/assets/images/hero-2.jpg' ) ); ?>');">
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

            <div class="swiper-slide ac-hero-slide" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_hero_bg_3', ANNIE_CAKES_URI . '/assets/images/hero-3.jpg' ) ); ?>');">
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
                            <a href="<?php echo esc_url( home_url( '/hot-sales/' ) ); ?>" class="ac-btn ac-btn-outline-white ac-btn-lg">
                                <i class="fas fa-fire"></i> <?php esc_html_e( 'Hot Sales', 'annie-cakes' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination ac-hero-pagination"></div>
        <div class="swiper-button-prev ac-hero-prev"></div>
        <div class="swiper-button-next ac-hero-next"></div>
    </div>
</section>

<!-- Features Bar -->
<section class="ac-features-bar">
    <div class="ac-container">
        <div class="ac-features-grid">
            <div class="ac-feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-feature-icon"><i class="fas fa-truck"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Fast Delivery', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Same-day delivery available', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-feature-icon"><i class="fas fa-award"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Premium Quality', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Finest ingredients only', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-feature-icon"><i class="fas fa-headset"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( '24/7 Support', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( 'Chat with us anytime', 'annie-cakes' ); ?></p>
                </div>
            </div>
            <div class="ac-feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="ac-feature-text">
                    <h4><?php esc_html_e( 'Secure Payment', 'annie-cakes' ); ?></h4>
                    <p><?php esc_html_e( '100% secure checkout', 'annie-cakes' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="ac-section ac-categories-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Our Collections', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Shop By Category', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Explore our delicious range of cakes and thoughtful gifts', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-categories-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $categories = get_terms( array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => false,
                    'parent'     => 0,
                    'number'     => 6,
                ) );

                if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) {
                    $delay = 100;
                    foreach ( $categories as $category ) {
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image_url    = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : ANNIE_CAKES_URI . '/assets/images/category-placeholder.jpg';
                        ?>
                        <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="ac-category-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                            <div class="ac-category-img" style="background-image: url('<?php echo esc_url( $image_url ); ?>');">
                                <div class="ac-category-overlay"></div>
                            </div>
                            <div class="ac-category-info">
                                <h3><?php echo esc_html( $category->name ); ?></h3>
                                <span><?php echo esc_html( $category->count ); ?> <?php esc_html_e( 'Products', 'annie-cakes' ); ?></span>
                            </div>
                        </a>
                        <?php
                        $delay += 100;
                    }
                } else {
                    $default_cats = array(
                        array( 'name' => 'Birthday Cakes', 'icon' => 'fa-birthday-cake' ),
                        array( 'name' => 'Wedding Cakes', 'icon' => 'fa-ring' ),
                        array( 'name' => 'Cupcakes', 'icon' => 'fa-cookie' ),
                        array( 'name' => 'Gift Boxes', 'icon' => 'fa-gift' ),
                        array( 'name' => 'Hampers', 'icon' => 'fa-box-open' ),
                        array( 'name' => 'Custom Cakes', 'icon' => 'fa-magic' ),
                    );
                    $delay = 100;
                    foreach ( $default_cats as $cat ) {
                        ?>
                        <div class="ac-category-card ac-category-placeholder" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                            <div class="ac-category-img">
                                <div class="ac-category-overlay"></div>
                                <div class="ac-category-icon"><i class="fas <?php echo esc_attr( $cat['icon'] ); ?>"></i></div>
                            </div>
                            <div class="ac-category-info">
                                <h3><?php echo esc_html( $cat['name'] ); ?></h3>
                                <span><?php esc_html_e( 'Coming Soon', 'annie-cakes' ); ?></span>
                            </div>
                        </div>
                        <?php
                        $delay += 100;
                    }
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Best Sellers Section -->
<section class="ac-section ac-products-section ac-bg-cream">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Most Popular', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Best Selling Cakes', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Our customers\' favourites — freshly baked and beautifully crafted', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $best_sellers = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'meta_key'       => 'total_sales',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'DESC',
                ) );

                if ( $best_sellers->have_posts() ) {
                    while ( $best_sellers->have_posts() ) {
                        $best_sellers->the_post();
                        get_template_part( 'template-parts/product', 'card' );
                    }
                    wp_reset_postdata();
                } else {
                    $all_products = new WP_Query( array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                    ) );
                    if ( $all_products->have_posts() ) {
                        while ( $all_products->have_posts() ) {
                            $all_products->the_post();
                            get_template_part( 'template-parts/product', 'card' );
                        }
                        wp_reset_postdata();
                    }
                }
            }
            ?>
        </div>
        <div class="ac-section-cta" data-aos="fade-up">
            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                <?php esc_html_e( 'View All Products', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Hot Sales Banner -->
<section class="ac-section ac-hot-sales-banner">
    <div class="ac-container">
        <div class="ac-hot-sales-inner" data-aos="zoom-in">
            <div class="ac-hot-sales-content">
                <span class="ac-badge-hot"><i class="fas fa-fire"></i> <?php esc_html_e( 'Hot Sales', 'annie-cakes' ); ?></span>
                <h2><?php echo esc_html( get_theme_mod( 'annie_sale_title', 'Sweet Deals Up To 40% Off!' ) ); ?></h2>
                <p><?php echo esc_html( get_theme_mod( 'annie_sale_subtitle', 'Limited time offers on selected cakes and gift packages. Don\'t miss out!' ) ); ?></p>
                <div class="ac-countdown" id="ac-countdown" data-date="<?php echo esc_attr( get_theme_mod( 'annie_sale_date', gmdate( 'Y-m-d', strtotime( '+30 days' ) ) ) ); ?>">
                    <div class="ac-countdown-item">
                        <span class="ac-countdown-num" id="ac-days">00</span>
                        <span class="ac-countdown-label"><?php esc_html_e( 'Days', 'annie-cakes' ); ?></span>
                    </div>
                    <div class="ac-countdown-item">
                        <span class="ac-countdown-num" id="ac-hours">00</span>
                        <span class="ac-countdown-label"><?php esc_html_e( 'Hours', 'annie-cakes' ); ?></span>
                    </div>
                    <div class="ac-countdown-item">
                        <span class="ac-countdown-num" id="ac-minutes">00</span>
                        <span class="ac-countdown-label"><?php esc_html_e( 'Minutes', 'annie-cakes' ); ?></span>
                    </div>
                    <div class="ac-countdown-item">
                        <span class="ac-countdown-num" id="ac-seconds">00</span>
                        <span class="ac-countdown-label"><?php esc_html_e( 'Seconds', 'annie-cakes' ); ?></span>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/hot-sales/' ) ); ?>" class="ac-btn ac-btn-gold ac-btn-lg">
                    <?php esc_html_e( 'Shop Sale Items', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- New Arrivals Section -->
<section class="ac-section ac-products-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Just In', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'New Arrivals', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Fresh additions to our collection — order now!', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-products-slider swiper" id="ac-new-arrivals-slider">
            <div class="swiper-wrapper">
                <?php
                if ( class_exists( 'WooCommerce' ) ) {
                    $new_arrivals = new WP_Query( array(
                        'post_type'      => 'product',
                        'posts_per_page' => 10,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ) );
                    if ( $new_arrivals->have_posts() ) {
                        while ( $new_arrivals->have_posts() ) {
                            $new_arrivals->the_post();
                            echo '<div class="swiper-slide">';
                            get_template_part( 'template-parts/product', 'card' );
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Custom Order CTA -->
<section class="ac-section ac-custom-cta" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_custom_bg', ANNIE_CAKES_URI . '/assets/images/custom-cta-bg.jpg' ) ); ?>');">
    <div class="ac-custom-cta-overlay"></div>
    <div class="ac-container">
        <div class="ac-custom-cta-content" data-aos="fade-up">
            <span class="ac-section-badge ac-badge-white"><?php esc_html_e( 'Made Just For You', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Design Your Dream Cake', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Tell us your vision and we\'ll create a masterpiece. Upload your inspiration, choose flavours, and let our expert bakers bring your dream cake to life.', 'annie-cakes' ); ?></p>
            <div class="ac-custom-cta-features">
                <div class="ac-cta-feature">
                    <i class="fas fa-palette"></i>
                    <span><?php esc_html_e( 'Custom Design', 'annie-cakes' ); ?></span>
                </div>
                <div class="ac-cta-feature">
                    <i class="fas fa-cookie-bite"></i>
                    <span><?php esc_html_e( 'Any Flavour', 'annie-cakes' ); ?></span>
                </div>
                <div class="ac-cta-feature">
                    <i class="fas fa-truck"></i>
                    <span><?php esc_html_e( 'Free Delivery', 'annie-cakes' ); ?></span>
                </div>
            </div>
            <div class="ac-hero-buttons">
                <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                    <i class="fas fa-birthday-cake"></i> <?php esc_html_e( 'Order Custom Cake', 'annie-cakes' ); ?>
                </a>
                <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" class="ac-btn ac-btn-outline-white ac-btn-lg" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'Chat on WhatsApp', 'annie-cakes' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Gift Collections -->
<section class="ac-section ac-products-section ac-bg-cream">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Perfect Presents', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Gift Collections', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Thoughtfully curated gift packages for every occasion', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $gift_cat = get_term_by( 'slug', 'gifts', 'product_cat' );
                $gift_args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                );
                if ( $gift_cat ) {
                    $gift_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'term_id',
                            'terms'    => $gift_cat->term_id,
                        ),
                    );
                }
                $gifts = new WP_Query( $gift_args );
                if ( $gifts->have_posts() ) {
                    while ( $gifts->have_posts() ) {
                        $gifts->the_post();
                        get_template_part( 'template-parts/product', 'card' );
                    }
                    wp_reset_postdata();
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="ac-section ac-testimonials-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Love Notes', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'What Our Customers Say', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Real stories from our happy customers', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-testimonials-slider swiper" id="ac-testimonials-slider">
            <div class="swiper-wrapper">
                <?php
                $testimonials = new WP_Query( array(
                    'post_type'      => 'ac_testimonial',
                    'posts_per_page' => 10,
                ) );

                if ( $testimonials->have_posts() ) {
                    while ( $testimonials->have_posts() ) {
                        $testimonials->the_post();
                        ?>
                        <div class="swiper-slide">
                            <div class="ac-testimonial-card">
                                <div class="ac-testimonial-stars">
                                    <?php
                                    $rating = get_post_meta( get_the_ID(), '_testimonial_rating', true ) ?: 5;
                                    for ( $i = 1; $i <= 5; $i++ ) {
                                        echo $i <= $rating ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
                                    }
                                    ?>
                                </div>
                                <div class="ac-testimonial-content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="ac-testimonial-author">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="ac-testimonial-avatar"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
                                    <?php endif; ?>
                                    <div>
                                        <h4><?php the_title(); ?></h4>
                                        <span><?php echo esc_html( get_post_meta( get_the_ID(), '_testimonial_role', true ) ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    $defaults = array(
                        array( 'name' => 'Sarah Johnson', 'role' => 'Bride', 'text' => 'Annie Cakes made the most stunning wedding cake I\'ve ever seen. It was not only beautiful but absolutely delicious! Every guest was amazed.', 'rating' => 5 ),
                        array( 'name' => 'Michael Ade', 'role' => 'Birthday Client', 'text' => 'Ordered a custom birthday cake for my daughter and it exceeded all expectations. The attention to detail was incredible. Highly recommend!', 'rating' => 5 ),
                        array( 'name' => 'Chioma Okafor', 'role' => 'Corporate Client', 'text' => 'We\'ve been ordering gift hampers from Annie Cakes for our corporate events and they never disappoint. Premium quality every single time.', 'rating' => 5 ),
                    );
                    foreach ( $defaults as $testimonial ) {
                        ?>
                        <div class="swiper-slide">
                            <div class="ac-testimonial-card">
                                <div class="ac-testimonial-stars">
                                    <?php for ( $i = 1; $i <= $testimonial['rating']; $i++ ) : ?>
                                        <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <div class="ac-testimonial-content">
                                    <p><?php echo esc_html( $testimonial['text'] ); ?></p>
                                </div>
                                <div class="ac-testimonial-author">
                                    <div class="ac-testimonial-avatar ac-avatar-placeholder">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <h4><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                        <span><?php echo esc_html( $testimonial['role'] ); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Animated Counters -->
<section class="ac-section ac-counters-section">
    <div class="ac-container">
        <div class="ac-counters-grid">
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-counter-icon"><i class="fas fa-birthday-cake"></i></div>
                <div class="ac-counter-num" data-target="5000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Cakes Baked', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-counter-icon"><i class="fas fa-smile"></i></div>
                <div class="ac-counter-num" data-target="3000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Happy Customers', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-counter-icon"><i class="fas fa-gift"></i></div>
                <div class="ac-counter-num" data-target="2000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Gifts Delivered', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-counter-icon"><i class="fas fa-star"></i></div>
                <div class="ac-counter-num" data-target="500">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '5-Star Reviews', 'annie-cakes' ); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Gallery -->
<section class="ac-section ac-instagram-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Follow Us', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( '@anniecakesandgift', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Tag us in your sweet moments for a chance to be featured!', 'annie-cakes' ); ?></p>
        </div>
    </div>
    <div class="ac-instagram-grid">
        <?php
        $gallery_posts = new WP_Query( array(
            'post_type'      => 'ac_gallery',
            'posts_per_page' => 8,
        ) );

        if ( $gallery_posts->have_posts() ) {
            while ( $gallery_posts->have_posts() ) {
                $gallery_posts->the_post();
                if ( has_post_thumbnail() ) {
                    ?>
                    <div class="ac-instagram-item" data-aos="zoom-in">
                        <?php the_post_thumbnail( 'annie-gallery' ); ?>
                        <div class="ac-instagram-overlay">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
        } else {
            for ( $i = 1; $i <= 8; $i++ ) {
                ?>
                <div class="ac-instagram-item ac-insta-placeholder" data-aos="zoom-in">
                    <div class="ac-insta-placeholder-inner">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</section>

<!-- Video Banner -->
<section class="ac-section ac-video-section" data-aos="fade-up">
    <div class="ac-container">
        <div class="ac-video-banner">
            <div class="ac-video-poster" style="background-image: url('<?php echo esc_url( get_theme_mod( 'annie_video_poster', ANNIE_CAKES_URI . '/assets/images/video-poster.jpg' ) ); ?>');">
                <div class="ac-video-overlay"></div>
                <button class="ac-video-play" data-video="<?php echo esc_attr( get_theme_mod( 'annie_video_url', '' ) ); ?>" aria-label="<?php esc_attr_e( 'Play video', 'annie-cakes' ); ?>">
                    <i class="fas fa-play"></i>
                </button>
                <div class="ac-video-text">
                    <h3><?php esc_html_e( 'Watch How We Create Magic', 'annie-cakes' ); ?></h3>
                    <p><?php esc_html_e( 'A behind-the-scenes look at our bakery', 'annie-cakes' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="ac-section ac-why-section ac-bg-cream">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Why Annie Cakes', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Why Choose Us', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-why-grid">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-medal"></i></div>
                <h3><?php esc_html_e( 'Premium Ingredients', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We use only the finest, freshest ingredients sourced from trusted suppliers to create cakes that taste as amazing as they look.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-paint-brush"></i></div>
                <h3><?php esc_html_e( 'Artisan Craftsmanship', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Each cake is handcrafted by our skilled bakers and decorators with meticulous attention to detail and creative flair.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon"><i class="fas fa-heart"></i></div>
                <h3><?php esc_html_e( 'Made With Love', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Every creation is infused with passion and love. We treat every order as if it were for our own family celebration.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-why-icon"><i class="fas fa-shipping-fast"></i></div>
                <h3><?php esc_html_e( 'Reliable Delivery', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We ensure safe, timely delivery of your orders with specialized packaging that keeps everything fresh and intact.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Preview -->
<section class="ac-section ac-blog-preview-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Sweet Stories', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'From Our Blog', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Tips, trends, and behind-the-scenes stories from our bakery', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-blog-preview-grid">
            <?php
            $blog_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            ) );
            if ( $blog_posts->have_posts() ) {
                $delay = 100;
                while ( $blog_posts->have_posts() ) {
                    $blog_posts->the_post();
                    ?>
                    <article class="ac-blog-preview-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="ac-blog-preview-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'annie-blog-thumb' ); ?></a>
                                <span class="ac-blog-preview-date"><?php echo esc_html( get_the_date( 'M d' ) ); ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="ac-blog-preview-body">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="ac-read-more">
                                <?php esc_html_e( 'Read More', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    <?php
                    $delay += 100;
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
