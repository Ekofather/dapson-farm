<?php
/**
 * Single Post Template
 *
 * @package DemolaBakare
 */

get_header();
?>

<?php demola_breadcrumbs(); ?>

<section class="section section-single-post">
    <div class="container">
        <div class="blog-layout">
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-article' ); ?>>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <header class="article-header" data-aos="fade-up">
                        <div class="article-category">
                            <?php
                            $categories = get_the_category();
                            if ( $categories ) {
                                foreach ( $categories as $cat ) {
                                    printf( '<a href="%s">%s</a>', esc_url( get_category_link( $cat->term_id ) ), esc_html( $cat->name ) );
                                }
                            }
                            ?>
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <div class="article-meta">
                            <?php demola_posted_on(); ?>
                            <?php demola_posted_by(); ?>
                            <span><i class="far fa-clock"></i> <?php echo esc_html( demola_reading_time() ); ?> min read</span>
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="article-featured-image" data-aos="fade-up">
                            <?php the_post_thumbnail( 'demola-hero' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="article-content" data-aos="fade-up">
                        <?php the_content(); ?>
                    </div>

                    <?php if ( has_tag() ) : ?>
                        <div class="article-tags">
                            <span class="tags-label"><i class="fas fa-tags"></i> Tags:</span>
                            <?php the_tags( '', '', '' ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Share -->
                    <div class="article-share">
                        <span class="share-label">Share this article:</span>
                        <?php $share_urls = demola_get_share_urls(); ?>
                        <div class="share-buttons">
                            <a href="<?php echo esc_url( $share_urls['twitter'] ); ?>" target="_blank" rel="noopener noreferrer" class="share-btn twitter" aria-label="Share on Twitter"><i class="fab fa-x-twitter"></i></a>
                            <a href="<?php echo esc_url( $share_urls['linkedin'] ); ?>" target="_blank" rel="noopener noreferrer" class="share-btn linkedin" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo esc_url( $share_urls['facebook'] ); ?>" target="_blank" rel="noopener noreferrer" class="share-btn facebook" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo esc_url( $share_urls['whatsapp'] ); ?>" target="_blank" rel="noopener noreferrer" class="share-btn whatsapp" aria-label="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-avatar">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                        </div>
                        <div class="author-details">
                            <h4><?php the_author(); ?></h4>
                            <p><?php echo esc_html( get_the_author_meta( 'description' ) ?: 'Anti-Corruption Advocate, Governance Strategist & Ethics Trainer.' ); ?></p>
                        </div>
                    </div>

                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        <div class="nav-previous">
                            <?php
                            $prev_post = get_previous_post();
                            if ( $prev_post ) :
                            ?>
                                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
                                    <span class="nav-label"><i class="fas fa-arrow-left"></i> Previous Article</span>
                                    <span class="nav-title"><?php echo esc_html( $prev_post->post_title ); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="nav-next">
                            <?php
                            $next_post = get_next_post();
                            if ( $next_post ) :
                            ?>
                                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                                    <span class="nav-label">Next Article <i class="fas fa-arrow-right"></i></span>
                                    <span class="nav-title"><?php echo esc_html( $next_post->post_title ); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </nav>

                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; endif; ?>
            </article>

            <aside class="blog-sidebar">
                <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
