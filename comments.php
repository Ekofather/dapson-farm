<?php
/**
 * Comments Template
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="ac-comments">
    <?php if ( have_comments() ) : ?>
        <h3 class="ac-comments-title">
            <?php
            $count = get_comments_number();
            printf(
                esc_html( _n( '%s Comment', '%s Comments', $count, 'annie-cakes' ) ),
                esc_html( number_format_i18n( $count ) )
            );
            ?>
        </h3>

        <ol class="ac-comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    comment_form( array(
        'class_form'    => 'ac-comment-form',
        'title_reply'   => esc_html__( 'Leave a Reply', 'annie-cakes' ),
        'submit_button' => '<button type="submit" class="ac-btn ac-btn-primary">%4$s</button>',
    ) );
    ?>
</div>
