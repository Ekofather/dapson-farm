<?php
/**
 * Search Results Template
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-search">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Search</span>
            <h1>Search Results</h1>
            <p>Results for: &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<section class="section section-blog">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                <?php if ( have_posts() ) : ?>
                    <div class="blog-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article <?php post_class( 'blog-card' ); ?> data-aos="fade-up">
                                <div class="blog-card-image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'demola-card' ); ?></a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" class="blog-image-placeholder"><i class="fas fa-newspaper"></i></a>
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta"><?php demola_posted_on(); ?></div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php demola_pagination(); ?>
                <?php else : ?>
                    <div class="no-posts">
                        <i class="fas fa-search"></i>
                        <h2>No Results Found</h2>
                        <p>Sorry, no results matched your search. Please try different keywords.</p>
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" name="s" placeholder="Search..." value="<?php echo esc_attr( get_search_query() ); ?>">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
            <aside class="blog-sidebar">
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
