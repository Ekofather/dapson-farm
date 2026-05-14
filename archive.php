<?php
/**
 * Archive Template
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <h1><?php the_archive_title(); ?></h1>
        <nav class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span>/</span>
            <span><?php the_archive_title(); ?></span>
        </nav>
        <?php the_archive_description( '<div class="ac-archive-desc">', '</div>' ); ?>
    </div>
</section>

<section class="ac-blog-section">
    <div class="ac-container">
        <div class="ac-blog-layout">
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
                                <div class="ac-blog-card-meta">
                                    <span><i class="fas fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                                    <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                                </div>
                                <h2 class="ac-blog-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="ac-blog-card-excerpt"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="ac-read-more"><?php esc_html_e( 'Read More', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="ac-no-posts">
                        <h2><?php esc_html_e( 'No Posts Found', 'annie-cakes' ); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <aside class="ac-blog-sidebar"><?php get_sidebar( 'blog' ); ?></aside>
        </div>
        <div class="ac-pagination">
            <?php the_posts_pagination( array( 'mid_size' => 2, 'prev_text' => '<i class="fas fa-chevron-left"></i>', 'next_text' => '<i class="fas fa-chevron-right"></i>' ) ); ?>
        </div>
    </div>
</section>

<?php
get_footer();
