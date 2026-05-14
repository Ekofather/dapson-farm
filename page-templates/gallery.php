<?php
/**
 * Template Name: Gallery
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Our Creations', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Cake & Gift Gallery', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'A visual feast of our finest cakes, desserts, and luxury gift packages.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Gallery', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container">
        <div class="ac-gallery-filters" data-aos="fade-up">
            <button class="ac-filter-btn active" data-filter="all"><?php esc_html_e( 'All', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="birthday"><?php esc_html_e( 'Birthday Cakes', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="wedding"><?php esc_html_e( 'Wedding Cakes', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="cupcakes"><?php esc_html_e( 'Cupcakes', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="gifts"><?php esc_html_e( 'Gift Hampers', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="custom"><?php esc_html_e( 'Custom Designs', 'annie-cakes' ); ?></button>
            <button class="ac-filter-btn" data-filter="pastries"><?php esc_html_e( 'Pastries', 'annie-cakes' ); ?></button>
        </div>

        <div class="ac-gallery-grid">
            <?php
            $gallery_items = array(
                array( 'cat' => 'birthday', 'title' => 'Chocolate Drip Birthday Cake', 'icon' => 'birthday-cake' ),
                array( 'cat' => 'wedding', 'title' => 'Elegant 5-Tier Wedding Cake', 'icon' => 'ring' ),
                array( 'cat' => 'cupcakes', 'title' => 'Dozen Red Velvet Cupcakes', 'icon' => 'cookie' ),
                array( 'cat' => 'gifts', 'title' => 'Luxury Valentine Hamper', 'icon' => 'gift' ),
                array( 'cat' => 'custom', 'title' => 'Custom Cartoon Character Cake', 'icon' => 'magic' ),
                array( 'cat' => 'birthday', 'title' => 'Gold Fondant Birthday Cake', 'icon' => 'birthday-cake' ),
                array( 'cat' => 'wedding', 'title' => 'Floral Cascade Wedding Cake', 'icon' => 'ring' ),
                array( 'cat' => 'pastries', 'title' => 'Assorted Danish Pastries', 'icon' => 'bread-slice' ),
                array( 'cat' => 'gifts', 'title' => 'Christmas Gift Box', 'icon' => 'gift' ),
                array( 'cat' => 'custom', 'title' => 'Corporate Logo Cake', 'icon' => 'magic' ),
                array( 'cat' => 'cupcakes', 'title' => 'Chocolate Ganache Cupcakes', 'icon' => 'cookie' ),
                array( 'cat' => 'birthday', 'title' => 'Rainbow Layer Cake', 'icon' => 'birthday-cake' ),
                array( 'cat' => 'wedding', 'title' => 'Minimalist White Wedding Cake', 'icon' => 'ring' ),
                array( 'cat' => 'pastries', 'title' => 'Artisan Croissants', 'icon' => 'bread-slice' ),
                array( 'cat' => 'gifts', 'title' => 'Baby Shower Gift Set', 'icon' => 'gift' ),
                array( 'cat' => 'custom', 'title' => 'Graduation Cap Cake', 'icon' => 'magic' ),
            );

            $gallery_posts = get_posts( array( 'post_type' => 'attachment', 'post_mime_type' => 'image', 'posts_per_page' => 16, 'post_status' => 'inherit' ) );

            foreach ( $gallery_items as $gi => $item ) :
                $img_url = isset( $gallery_posts[ $gi ] ) ? wp_get_attachment_url( $gallery_posts[ $gi ]->ID ) : '';
            ?>
            <div class="ac-gallery-item" data-category="<?php echo esc_attr( $item['cat'] ); ?>" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr( ( $gi % 4 ) * 80 ); ?>">
                <?php if ( $img_url ) : ?>
                    <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" loading="lazy">
                <?php else : ?>
                    <div style="width:100%;height:100%;background:linear-gradient(<?php echo esc_attr( 120 + $gi * 15 ); ?>deg,#3C1518,#5C3D2E,#8B5E3C);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:8px;">
                        <i class="fas fa-<?php echo esc_attr( $item['icon'] ); ?>" style="font-size:2.5rem;color:#d4af37;opacity:0.4;"></i>
                        <span style="color:#d4af37;opacity:0.6;font-size:0.75rem;font-weight:600;text-transform:uppercase;letter-spacing:1px;"><?php echo esc_html( $item['title'] ); ?></span>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <h2><?php esc_html_e( 'Love What You See?', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Order any of these designs or share your own inspiration. We\'ll bring your vision to life.', 'annie-cakes' ); ?></p>
        <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
            <a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                <i class="fas fa-paint-brush"></i> <?php esc_html_e( 'Order Custom Cake', 'annie-cakes' ); ?>
            </a>
            <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-outline ac-btn-lg">
                <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Shop Ready-Made', 'annie-cakes' ); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
