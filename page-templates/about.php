<?php
/**
 * Template Name: About Us
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Our Story', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'About Annie Cakes & Gift', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Where passion for baking meets the art of gifting.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'About Us', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<!-- Our Story -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-about-grid">
            <div class="ac-about-image" data-aos="fade-right">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'annie-hero' ); ?>
                <?php else : ?>
                    <div style="width:100%;height:450px;background:linear-gradient(135deg,#3C1518,#5C3D2E);display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-birthday-cake" style="font-size:5rem;color:#d4af37;opacity:0.4;"></i>
                    </div>
                <?php endif; ?>
            </div>
            <div class="ac-about-content" data-aos="fade-left">
                <span class="ac-section-badge"><?php esc_html_e( 'Est. 2018', 'annie-cakes' ); ?></span>
                <h2><?php esc_html_e( 'From a Small Kitchen to a Beloved Brand', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Annie Cakes & Gift was born from a simple passion — the joy of seeing someone\'s face light up when they receive a beautifully crafted cake. What started as a home-based bakery in Lagos has grown into one of Nigeria\'s most trusted premium cake and gift brands.', 'annie-cakes' ); ?></p>
                <p><?php esc_html_e( 'Our founder, Annie, began baking for friends and family before her creations went viral on Instagram. Today, we serve thousands of customers across Nigeria, delivering happiness one cake at a time. Every recipe has been perfected over years of experimentation, and every design is a labour of love.', 'annie-cakes' ); ?></p>
                <p><?php esc_html_e( 'At Annie Cakes, we believe that every celebration deserves a show-stopping centrepiece. Whether it\'s a towering five-tier wedding cake, a whimsical kids\' birthday cake, or a thoughtfully curated gift hamper — we pour our heart and soul into every creation.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Our Purpose', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Mission & Vision', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-why-grid" style="grid-template-columns: repeat(2, 1fr);">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-bullseye"></i></div>
                <h3><?php esc_html_e( 'Our Mission', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'To create extraordinary cakes and curate luxurious gifts that transform ordinary moments into unforgettable celebrations. We are committed to using only premium ingredients, maintaining the highest standards of hygiene and quality, and delivering exceptional customer experiences that keep our customers coming back.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-eye"></i></div>
                <h3><?php esc_html_e( 'Our Vision', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'To become West Africa\'s leading luxury bakery and gifting brand, known for artistic cake designs, impeccable quality, and a seamless online shopping experience. We envision a future where every Nigerian celebration features an Annie Cakes creation at its heart.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'What We Stand For', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Our Core Values', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-why-grid">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-gem"></i></div>
                <h3><?php esc_html_e( 'Quality First', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We never compromise on quality. From imported Belgian chocolate to farm-fresh eggs and pure butter, every ingredient is carefully selected to ensure each bite is extraordinary.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-palette"></i></div>
                <h3><?php esc_html_e( 'Creative Excellence', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Our team of artists and bakers push the boundaries of cake design. From hand-painted fondant to intricate sugar flowers, every creation is a work of edible art.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon"><i class="fas fa-hands-helping"></i></div>
                <h3><?php esc_html_e( 'Customer Delight', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Your satisfaction is our greatest reward. We go above and beyond — from free consultations to complimentary tasting sessions — to ensure your celebration is perfect.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'The Dream Team', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Meet Our Team', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'The passionate people behind every Annie Cakes creation.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-why-grid">
            <?php
            $team = array(
                array( 'name' => 'Annie Okafor', 'role' => 'Founder & Head Baker', 'desc' => 'With over 10 years of baking experience and a Le Cordon Bleu certification, Annie brings world-class techniques to Nigerian flavours.', 'initial' => 'A' ),
                array( 'name' => 'Chef Michael', 'role' => 'Executive Pastry Chef', 'desc' => 'A graduate of the Nigerian Institute of Culinary Arts, Chef Michael specialises in fondant sculpting and multi-tier wedding cakes.', 'initial' => 'M' ),
                array( 'name' => 'Sarah Adeyemi', 'role' => 'Creative Director', 'desc' => 'Sarah transforms cake concepts into stunning designs. Her Instagram portfolio has inspired cake lovers across West Africa.', 'initial' => 'S' ),
            );
            foreach ( $team as $i => $member ) :
            ?>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $i + 1 ) * 100 ); ?>">
                <div class="ac-testimonial-avatar" style="margin:0 auto 15px;width:80px;height:80px;font-size:1.5rem;"><?php echo esc_html( $member['initial'] ); ?></div>
                <h3><?php echo esc_html( $member['name'] ); ?></h3>
                <p style="color:var(--ac-gold-dark);font-weight:600;font-size:0.85rem;margin-bottom:10px;"><?php echo esc_html( $member['role'] ); ?></p>
                <p><?php echo esc_html( $member['desc'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Counters -->
<section class="ac-counters ac-counters-section">
    <div class="ac-container">
        <div class="ac-counters-grid">
            <div class="ac-counter-item" data-aos="fade-up">
                <div class="ac-counter-icon"><i class="fas fa-calendar"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="7">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Years of Excellence', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-counter-icon"><i class="fas fa-birthday-cake"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="5000">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Cakes Delivered', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-counter-icon"><i class="fas fa-users"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="15">0</div>
                <div class="ac-counter-label"><?php esc_html_e( 'Team Members', 'annie-cakes' ); ?></div>
            </div>
            <div class="ac-counter-item" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-counter-icon"><i class="fas fa-star"></i></div>
                <div class="ac-counter-number ac-counter-num" data-target="4500">0</div>
                <div class="ac-counter-label"><?php esc_html_e( '5-Star Reviews', 'annie-cakes' ); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ac-section">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <span class="ac-section-badge"><?php esc_html_e( 'Ready to Order?', 'annie-cakes' ); ?></span>
        <h2><?php esc_html_e( 'Let\'s Create Something Sweet Together', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Whether you need a birthday cake, wedding cake, or a special gift, we\'re here to make your celebrations extraordinary.', 'annie-cakes' ); ?></p>
        <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
            <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Shop Now', 'annie-cakes' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-secondary ac-btn-lg">
                <i class="fas fa-birthday-cake"></i> <?php esc_html_e( 'Custom Order', 'annie-cakes' ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ac-btn ac-btn-outline ac-btn-lg">
                <i class="fas fa-envelope"></i> <?php esc_html_e( 'Contact Us', 'annie-cakes' ); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
