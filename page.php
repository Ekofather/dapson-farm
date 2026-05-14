<?php
/**
 * Default Page Template
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <h1><?php the_title(); ?></h1>
        <nav class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span>/</span>
            <span><?php the_title(); ?></span>
        </nav>
    </div>
</section>

<section class="ac-page-content">
    <div class="ac-container">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php
get_footer();
