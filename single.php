<?php
/**
 * Single post template
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<section class="page-hero page-hero-compact">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Blog', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php the_title(); ?></span>
            </div>
            <h1 class="page-hero-title"><?php the_title(); ?></h1>
            <div class="post-meta-hero">
                <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
                <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                <?php if ( has_category() ) : ?>
                    <span><i class="fas fa-folder"></i> <?php the_category( ', ' ); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section single-post-section">
    <div class="container">
        <div class="single-post-layout">
            <article class="single-post-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-tags">
                        <?php the_tags( '<span class="tags-label">Tags:</span> ', ', ', '' ); ?>
                    </div>
                    <div class="post-navigation">
                        <div class="post-nav-prev">
                            <?php previous_post_link( '%link', '<i class="fas fa-chevron-left"></i> %title' ); ?>
                        </div>
                        <div class="post-nav-next">
                            <?php next_post_link( '%link', '%title <i class="fas fa-chevron-right"></i>' ); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </article>
            <aside class="single-post-sidebar">
                <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
