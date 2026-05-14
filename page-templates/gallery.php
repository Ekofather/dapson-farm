<?php
/**
 * Template Name: Gallery
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Our Work', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Gallery', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'A showcase of our most beautiful creations', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-gallery-section">
    <div class="ac-container">
        <div class="ac-gallery-filters" data-aos="fade-up">
            <button class="ac-filter-btn active" data-filter="all"><?php esc_html_e( 'All', 'annie-cakes' ); ?></button>
            <?php
            $gallery_cats = get_terms( array(
                'taxonomy'   => 'ac_gallery_cat',
                'hide_empty' => true,
            ) );
            if ( ! is_wp_error( $gallery_cats ) ) {
                foreach ( $gallery_cats as $cat ) {
                    printf(
                        '<button class="ac-filter-btn" data-filter="%s">%s</button>',
                        esc_attr( $cat->slug ),
                        esc_html( $cat->name )
                    );
                }
            }
            ?>
        </div>

        <div class="ac-gallery-grid" id="ac-gallery-grid">
            <?php
            $gallery = new WP_Query( array(
                'post_type'      => 'ac_gallery',
                'posts_per_page' => -1,
            ) );

            if ( $gallery->have_posts() ) :
                while ( $gallery->have_posts() ) :
                    $gallery->the_post();
                    $cats = wp_get_post_terms( get_the_ID(), 'ac_gallery_cat', array( 'fields' => 'slugs' ) );
                    $cat_classes = is_array( $cats ) ? implode( ' ', $cats ) : '';
                    ?>
                    <div class="ac-gallery-item <?php echo esc_attr( $cat_classes ); ?>" data-aos="zoom-in">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php echo esc_url( get_the_post_thumbnail_url( null, 'large' ) ); ?>" class="ac-gallery-link" data-title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'annie-gallery' ); ?>
                                <div class="ac-gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                for ( $i = 1; $i <= 12; $i++ ) :
                    ?>
                    <div class="ac-gallery-item" data-aos="zoom-in">
                        <div class="ac-gallery-placeholder">
                            <i class="fas fa-image"></i>
                            <span><?php printf( esc_html__( 'Gallery Item %d', 'annie-cakes' ), $i ); ?></span>
                        </div>
                    </div>
                    <?php
                endfor;
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
