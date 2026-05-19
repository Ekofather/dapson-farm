<?php
/**
 * Search results template
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php esc_html_e( 'Search Results', 'feyikemi-portfolio' ); ?></span>
            <h1 class="page-hero-title"><?php printf( esc_html__( 'Results for: %s', 'feyikemi-portfolio' ), get_search_query() ); ?></h1>
        </div>
    </div>
</section>

<section class="section blog-section">
    <div class="container">
        <div class="blog-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'blog-card' ); ?> data-aos="fade-up">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="blog-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="blog-card-content">
                            <h2 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm"><?php esc_html_e( 'Read More', 'feyikemi-portfolio' ); ?> <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php endwhile; ?>
                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <div class="no-posts">
                    <i class="fas fa-search"></i>
                    <h3><?php esc_html_e( 'No results found', 'feyikemi-portfolio' ); ?></h3>
                    <p><?php esc_html_e( 'Try searching with different keywords.', 'feyikemi-portfolio' ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
