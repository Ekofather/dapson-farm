<?php
/**
 * Generic page template
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <h1 class="page-hero-title"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="section page-content-section">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
