<?php
/**
 * Template Name: Testimonials
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Customer Reviews', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'What Our Customers Say', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Real stories from real customers who trust us with their sweetest celebrations.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Testimonials', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<!-- Stats Banner -->
<section class="ac-counters ac-counters-section">
    <div class="ac-container">
        <div class="ac-counters-grid">
            <div class="ac-counter-item" data-aos="fade-up">
                <div class="ac-counter-icon"><i class="fas fa-star"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="4500">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '5-Star Reviews', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-counter-icon"><i class="fas fa-smile"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="3000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Happy Customers', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-counter-icon"><i class="fas fa-redo"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="85">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '% Repeat Customers', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-counter-icon"><i class="fas fa-thumbs-up"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="98">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '% Satisfaction Rate', 'annie-cakes' ); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="ac-section">
    <div class="ac-container">
        <div class="ac-why-grid" style="grid-template-columns: repeat(2, 1fr);">
            <?php
            $testimonials = get_posts( array( 'post_type' => 'ac_testimonial', 'posts_per_page' => 12, 'orderby' => 'date', 'order' => 'DESC' ) );
            if ( $testimonials ) {
                foreach ( $testimonials as $i => $t ) {
                    $rating = get_post_meta( $t->ID, '_testimonial_rating', true ) ?: 5;
                    $role = get_post_meta( $t->ID, '_testimonial_role', true ) ?: 'Valued Customer';
                    ?>
                    <div class="ac-testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i % 2 ) * 100 ); ?>">
                        <span class="ac-testimonial-quote">&ldquo;</span>
                        <div class="ac-testimonial-stars">
                            <?php for ( $s = 0; $s < intval( $rating ); $s++ ) : ?><i class="fas fa-star"></i><?php endfor; ?>
                        </div>
                        <p class="ac-testimonial-text"><?php echo esc_html( $t->post_content ); ?></p>
                        <div class="ac-testimonial-author">
                            <div class="ac-testimonial-avatar"><?php echo esc_html( mb_strtoupper( mb_substr( $t->post_title, 0, 1 ) ) ); ?></div>
                            <div class="ac-testimonial-info">
                                <h4><?php echo esc_html( $t->post_title ); ?></h4>
                                <span><?php echo esc_html( $role ); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                $defaults = array(
                    array( 'name' => 'Chioma Adeyemi', 'text' => 'Annie Cakes made the most beautiful 5-tier wedding cake for my daughter\'s wedding. The design was breathtaking, the cake was moist and delicious, and delivery was perfectly on time. Every single guest asked where we got the cake! I cannot recommend them highly enough.', 'role' => 'Mother of the Bride', 'initial' => 'C' ),
                    array( 'name' => 'Tunde Okoye', 'text' => 'I ordered a surprise birthday cake for my wife and it exceeded all expectations. The chocolate ganache layers were divine, the personalised message was exactly right, and the delivery driver was professional. My wife cried tears of joy when she saw it!', 'role' => 'Loyal Customer since 2020', 'initial' => 'T' ),
                    array( 'name' => 'Amara Nwosu', 'text' => 'I\'ve been a loyal customer for over two years. Their cupcakes are consistently fresh and perfectly decorated. The Valentine gift hamper I ordered was elegantly packaged and my boyfriend absolutely loved it. Annie Cakes is my go-to for every celebration.', 'role' => 'Regular Customer', 'initial' => 'A' ),
                    array( 'name' => 'Blessing Eze', 'text' => 'We ordered 200 branded cupcakes for our annual corporate gala and they were flawless. Each cupcake had our logo perfectly printed in edible ink, the flavours were amazing, and they delivered right on schedule. Our clients and partners were deeply impressed.', 'role' => 'Corporate Events Manager', 'initial' => 'B' ),
                    array( 'name' => 'Kemi Bakare', 'text' => 'The custom teddy bear gift package for my sister\'s baby shower was beyond adorable! The packaging was luxurious with gold ribbons, the chocolates were handmade, and the personalised card brought tears to her eyes. Annie Cakes truly understands the art of gifting.', 'role' => 'Gift Buyer', 'initial' => 'K' ),
                    array( 'name' => 'David Olumide', 'text' => 'From placing my order to tracking delivery in real-time, the experience was seamless. The graduation cake for my daughter was picture-perfect — exactly matching the design I shared on WhatsApp. Their customer service team responds within minutes!', 'role' => 'Proud Father', 'initial' => 'D' ),
                    array( 'name' => 'Ngozi Obi', 'text' => 'I ordered an anniversary cake with just 24 hours notice and Annie Cakes delivered a masterpiece! The red velvet cake with cream cheese frosting was heavenly. I was amazed they could produce something so beautiful in such a short time. Absolutely incredible.', 'role' => 'Anniversary Celebrant', 'initial' => 'N' ),
                    array( 'name' => 'Folake Adekunle', 'text' => 'The Christmas hamper I sent to my parents in Abuja arrived in perfect condition despite the long-distance shipping. Everything was beautifully arranged — chocolates, cookies, wine, and a personalised message. My mum called me in tears. Worth every naira!', 'role' => 'Nationwide Delivery Customer', 'initial' => 'F' ),
                );
                foreach ( $defaults as $di => $dt ) {
                    ?>
                    <div class="ac-testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $di % 2 ) * 100 ); ?>">
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
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <h2><?php esc_html_e( 'Join Our Family of Happy Customers', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Experience the Annie Cakes difference yourself. Place your order today and see why thousands choose us for their celebrations.', 'annie-cakes' ); ?></p>
        <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
            <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Start Shopping', 'annie-cakes' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
