<?php
/**
 * Search Results Template
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <h1><?php printf( esc_html__( 'Search Results for: %s', 'annie-cakes' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </div>
</section>

<section class="ac-blog-section">
    <div class="ac-container">
        <div class="ac-blog-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'ac-blog-card' ); ?> data-aos="fade-up">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="ac-blog-card-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'annie-blog-thumb' ); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="ac-blog-card-body">
                            <h2 class="ac-blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="ac-blog-card-excerpt"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="ac-read-more"><?php esc_html_e( 'Read More', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="ac-no-posts">
                    <i class="fas fa-search"></i>
                    <h2><?php esc_html_e( 'No Results Found', 'annie-cakes' ); ?></h2>
                    <p><?php esc_html_e( 'Try searching with different keywords.', 'annie-cakes' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="ac-pagination">
            <?php the_posts_pagination( array( 'mid_size' => 2, 'prev_text' => '<i class="fas fa-chevron-left"></i>', 'next_text' => '<i class="fas fa-chevron-right"></i>' ) ); ?>
        </div>
    </div>
</section>

<?php
get_footer();
