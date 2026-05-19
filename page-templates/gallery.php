<?php
/**
 * Template Name: Gallery Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-gallery">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Gallery</span>
            <h1>Photo <span class="gold">Gallery</span></h1>
            <p>Documenting a legacy of service — from NAOSNP award ceremonies and SAEMA presentations at NDLEA headquarters, to Students Anti-Corruption Vanguard inaugurations, UBEC partnership meetings, secondary school educational visits, and World Press Conferences at ICPC headquarters.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Gallery Filter -->
<section class="section section-gallery">
    <div class="container">
        <!-- Gallery Grid -->
        <div class="gallery-grid" id="gallery-grid">
            <?php
            $gallery_items = get_posts( array(
                'post_type'      => 'gallery_item',
                'posts_per_page' => 24,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $gallery_items ) :
                foreach ( $gallery_items as $item ) :
                    $cats = get_the_terms( $item->ID, 'gallery_category' );
                    $cat_classes = '';
                    if ( $cats && ! is_wp_error( $cats ) ) {
                        $cat_classes = implode( ' ', wp_list_pluck( $cats, 'slug' ) );
                    }
            ?>
                <div class="gallery-item <?php echo esc_attr( $cat_classes ); ?>" data-aos="fade-up">
                    <?php if ( has_post_thumbnail( $item->ID ) ) : ?>
                        <img src="<?php echo esc_url( get_the_post_thumbnail_url( $item->ID, 'demola-gallery' ) ); ?>" alt="<?php echo esc_attr( $item->post_title ); ?>" loading="lazy">
                    <?php else : ?>
                        <div class="gallery-placeholder">
                            <i class="fas fa-image"></i>
                        </div>
                    <?php endif; ?>
                </div>
            <?php
                endforeach;
                wp_reset_postdata();
            else :
                $theme_img_url = get_template_directory_uri() . '/assets/images/gallery/';
                $gallery_defaults = array(
                    array( 'key' => 'demola_gallery_1', 'img' => 'demola-bakare-speaking.jpg', 'alt' => 'Keynote Address at NAOSNP Media Workshop' ),
                    array( 'key' => 'demola_gallery_2', 'img' => 'demola-bakare-office.jpg', 'alt' => 'At the ICPC Public Enlightenment Office' ),
                    array( 'key' => 'demola_gallery_3', 'img' => 'saema-award-ceremony.jpg', 'alt' => 'SAEMA Diligent Investigation Award Ceremony' ),
                    array( 'key' => 'demola_gallery_4', 'img' => 'anti-corruption-champion-award.jpg', 'alt' => 'Anti-Corruption Champion Award 2024' ),
                    array( 'key' => 'demola_gallery_5', 'img' => 'cepti-eics-press-conference.png', 'alt' => 'CEPTI Phase 6 & EICS World Press Conference' ),
                    array( 'key' => 'demola_gallery_6', 'img' => 'sav-inauguration.jpg', 'alt' => 'Students Anti-Corruption Vanguard Inauguration' ),
                );
                foreach ( $gallery_defaults as $index => $gal ) :
                    $custom_img_id = get_theme_mod( $gal['key'] );
                    if ( $custom_img_id ) {
                        $img_url = wp_get_attachment_url( $custom_img_id );
                    } else {
                        $img_url = $theme_img_url . $gal['img'];
                    }
            ?>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                    <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $gal['alt'] ); ?>" loading="lazy">
                </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" style="display:none;">
    <button class="lightbox-close" aria-label="Close">&times;</button>
    <button class="lightbox-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
    <button class="lightbox-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
    <div class="lightbox-content">
        <img src="" alt="" id="lightbox-img">
        <div class="lightbox-caption" id="lightbox-caption"></div>
    </div>
</div>

<?php get_footer(); ?>
