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
        <!-- Gallery Filter Tabs -->
        <div class="gallery-filters" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All</button>
            <?php
            $gallery_cats = get_terms( array(
                'taxonomy'   => 'gallery_category',
                'hide_empty' => true,
            ) );
            if ( $gallery_cats && ! is_wp_error( $gallery_cats ) ) :
                foreach ( $gallery_cats as $cat ) :
            ?>
                <button class="filter-btn" data-filter="<?php echo esc_attr( $cat->slug ); ?>"><?php echo esc_html( $cat->name ); ?></button>
            <?php
                endforeach;
            else :
                $default_cats = array( 'Events', 'Training', 'Awards', 'Meetings', 'Media' );
                foreach ( $default_cats as $cat ) :
            ?>
                <button class="filter-btn" data-filter="<?php echo esc_attr( strtolower( $cat ) ); ?>"><?php echo esc_html( $cat ); ?></button>
            <?php
                endforeach;
            endif;
            ?>
        </div>

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
                    <div class="gallery-overlay">
                        <h4><?php echo esc_html( $item->post_title ); ?></h4>
                        <?php if ( $item->post_excerpt ) : ?>
                            <p><?php echo esc_html( $item->post_excerpt ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endforeach;
                wp_reset_postdata();
            else :
                $placeholder_gallery = array(
                    array( 'title' => 'NAOSNP Award Ceremony', 'cat' => 'awards' ),
                    array( 'title' => 'SAEMA Award Reception', 'cat' => 'awards' ),
                    array( 'title' => 'Ethics Training Workshop', 'cat' => 'training' ),
                    array( 'title' => 'ICPC Student Educational Visit', 'cat' => 'events' ),
                    array( 'title' => 'Media Engagement Session', 'cat' => 'media' ),
                    array( 'title' => 'Governance Strategy Meeting', 'cat' => 'meetings' ),
                    array( 'title' => 'Public Enlightenment Campaign', 'cat' => 'events' ),
                    array( 'title' => 'Leadership Conference', 'cat' => 'events' ),
                    array( 'title' => 'Anti-Corruption Training', 'cat' => 'training' ),
                );
                foreach ( $placeholder_gallery as $index => $gal ) :
            ?>
                <div class="gallery-item <?php echo esc_attr( $gal['cat'] ); ?>" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                    <div class="gallery-placeholder">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="gallery-overlay">
                        <h4><?php echo esc_html( $gal['title'] ); ?></h4>
                    </div>
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
