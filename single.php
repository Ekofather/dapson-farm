<?php
/**
 * Single Post Template
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
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'annie-cakes' ); ?></a>
            <span>/</span>
            <span><?php the_title(); ?></span>
        </nav>
    </div>
</section>

<section class="ac-single-post-section">
    <div class="ac-container">
        <div class="ac-blog-layout">
            <article <?php post_class( 'ac-single-post' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="ac-single-post-img" data-aos="fade-up">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="ac-single-post-meta">
                    <span><i class="fas fa-calendar"></i> <?php echo esc_html( get_the_date() ); ?></span>
                    <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                    <span><i class="fas fa-folder"></i> <?php the_category( ', ' ); ?></span>
                    <span><i class="fas fa-comments"></i> <?php comments_number(); ?></span>
                </div>

                <div class="ac-single-post-content">
                    <?php the_content(); ?>
                </div>

                <?php if ( has_tag() ) : ?>
                    <div class="ac-single-post-tags">
                        <i class="fas fa-tags"></i> <?php the_tags( '', ', ' ); ?>
                    </div>
                <?php endif; ?>

                <div class="ac-single-post-share">
                    <h4><?php esc_html_e( 'Share This Post', 'annie-cakes' ); ?></h4>
                    <div class="ac-share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="ac-share-fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo esc_attr( get_the_title() ); ?>" target="_blank" rel="noopener" class="ac-share-tw"><i class="fab fa-twitter"></i></a>
                        <a href="https://wa.me/?text=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="ac-share-wa"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="ac-share-pin"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>

                <div class="ac-post-navigation">
                    <?php
                    $prev = get_previous_post();
                    $next = get_next_post();
                    ?>
                    <?php if ( $prev ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="ac-post-nav-prev">
                            <i class="fas fa-chevron-left"></i>
                            <span><?php esc_html_e( 'Previous', 'annie-cakes' ); ?></span>
                            <h4><?php echo esc_html( $prev->post_title ); ?></h4>
                        </a>
                    <?php endif; ?>
                    <?php if ( $next ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="ac-post-nav-next">
                            <i class="fas fa-chevron-right"></i>
                            <span><?php esc_html_e( 'Next', 'annie-cakes' ); ?></span>
                            <h4><?php echo esc_html( $next->post_title ); ?></h4>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="ac-comments-section">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>

            <aside class="ac-blog-sidebar">
                <?php get_sidebar( 'blog' ); ?>
            </aside>
        </div>
    </div>
</section>

<?php
get_footer();
