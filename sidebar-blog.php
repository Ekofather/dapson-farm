<?php
/**
 * Blog Sidebar
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_active_sidebar( 'blog-sidebar' ) ) {
    dynamic_sidebar( 'blog-sidebar' );
} else {
    ?>
    <div class="ac-widget">
        <h3 class="ac-widget-title"><?php esc_html_e( 'Search', 'annie-cakes' ); ?></h3>
        <?php get_search_form(); ?>
    </div>
    <div class="ac-widget">
        <h3 class="ac-widget-title"><?php esc_html_e( 'Recent Posts', 'annie-cakes' ); ?></h3>
        <ul class="ac-recent-posts">
            <?php
            $recent = new WP_Query( array( 'posts_per_page' => 5 ) );
            while ( $recent->have_posts() ) :
                $recent->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="ac-recent-thumb"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
                        <?php endif; ?>
                        <div class="ac-recent-info">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo esc_html( get_the_date() ); ?></span>
                        </div>
                    </a>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
    <div class="ac-widget">
        <h3 class="ac-widget-title"><?php esc_html_e( 'Categories', 'annie-cakes' ); ?></h3>
        <ul class="ac-categories-list">
            <?php wp_list_categories( array( 'title_li' => '', 'show_count' => true ) ); ?>
        </ul>
    </div>
    <?php
}
