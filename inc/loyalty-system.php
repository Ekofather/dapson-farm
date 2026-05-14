<?php
/**
 * Loyalty & Rewards System
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Award points on order completion
 */
function annie_cakes_award_loyalty_points( $order_id ) {
    $order   = wc_get_order( $order_id );
    $user_id = $order->get_user_id();

    if ( ! $user_id ) {
        return;
    }

    $total  = (float) $order->get_total();
    $points = floor( $total / 100 );

    if ( $points < 1 ) {
        return;
    }

    $current = (int) get_user_meta( $user_id, '_annie_loyalty_points', true );
    $new     = $current + $points;

    update_user_meta( $user_id, '_annie_loyalty_points', $new );

    $history   = get_user_meta( $user_id, '_annie_points_history', true );
    $history   = is_array( $history ) ? $history : array();
    $history[] = array(
        'date'     => current_time( 'mysql' ),
        'points'   => $points,
        'type'     => 'earned',
        'order_id' => $order_id,
        'note'     => sprintf( __( 'Earned %d points from order #%s', 'annie-cakes' ), $points, $order_id ),
    );
    update_user_meta( $user_id, '_annie_points_history', $history );
}
add_action( 'woocommerce_order_status_completed', 'annie_cakes_award_loyalty_points' );

/**
 * Display loyalty points in My Account
 */
function annie_cakes_loyalty_endpoint() {
    add_rewrite_endpoint( 'loyalty-points', EP_ROOT | EP_PAGES );
}
add_action( 'init', 'annie_cakes_loyalty_endpoint' );

function annie_cakes_loyalty_menu_items( $items ) {
    $new_items = array();
    foreach ( $items as $key => $value ) {
        $new_items[ $key ] = $value;
        if ( 'orders' === $key ) {
            $new_items['loyalty-points'] = __( 'Loyalty Points', 'annie-cakes' );
        }
    }
    return $new_items;
}
add_filter( 'woocommerce_account_menu_items', 'annie_cakes_loyalty_menu_items' );

function annie_cakes_loyalty_content() {
    $user_id = get_current_user_id();
    $points  = (int) get_user_meta( $user_id, '_annie_loyalty_points', true );
    $history = get_user_meta( $user_id, '_annie_points_history', true );
    $history = is_array( $history ) ? $history : array();
    ?>
    <div class="ac-loyalty-dashboard">
        <div class="ac-loyalty-balance">
            <div class="ac-loyalty-icon"><i class="fas fa-star"></i></div>
            <h2><?php echo esc_html( number_format_i18n( $points ) ); ?></h2>
            <p><?php esc_html_e( 'Loyalty Points', 'annie-cakes' ); ?></p>
        </div>

        <div class="ac-loyalty-info">
            <h3><?php esc_html_e( 'How It Works', 'annie-cakes' ); ?></h3>
            <ul>
                <li><?php esc_html_e( 'Earn 1 point for every ₦100 spent', 'annie-cakes' ); ?></li>
                <li><?php esc_html_e( '100 points = ₦500 discount', 'annie-cakes' ); ?></li>
                <li><?php esc_html_e( 'Points never expire', 'annie-cakes' ); ?></li>
                <li><?php esc_html_e( 'Bonus points on birthdays!', 'annie-cakes' ); ?></li>
            </ul>
        </div>

        <?php if ( ! empty( $history ) ) : ?>
            <div class="ac-loyalty-history">
                <h3><?php esc_html_e( 'Points History', 'annie-cakes' ); ?></h3>
                <table class="ac-table">
                    <thead>
                        <tr>
                            <th><?php esc_html_e( 'Date', 'annie-cakes' ); ?></th>
                            <th><?php esc_html_e( 'Points', 'annie-cakes' ); ?></th>
                            <th><?php esc_html_e( 'Details', 'annie-cakes' ); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( array_reverse( $history ) as $entry ) : ?>
                            <tr>
                                <td><?php echo esc_html( wp_date( 'M d, Y', strtotime( $entry['date'] ) ) ); ?></td>
                                <td class="ac-points-<?php echo esc_attr( $entry['type'] ); ?>">
                                    <?php echo 'earned' === $entry['type'] ? '+' : '-'; ?><?php echo esc_html( $entry['points'] ); ?>
                                </td>
                                <td><?php echo esc_html( $entry['note'] ); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
    <?php
}
add_action( 'woocommerce_account_loyalty-points_endpoint', 'annie_cakes_loyalty_content' );

/**
 * Referral System
 */
function annie_cakes_generate_referral_code( $user_id ) {
    $code = get_user_meta( $user_id, '_annie_referral_code', true );
    if ( ! $code ) {
        $code = strtoupper( 'AC' . substr( md5( $user_id . time() ), 0, 6 ) );
        update_user_meta( $user_id, '_annie_referral_code', $code );
    }
    return $code;
}

function annie_cakes_referral_on_register( $user_id ) {
    annie_cakes_generate_referral_code( $user_id );

    if ( isset( $_COOKIE['annie_referral'] ) ) {
        $referrer_code = sanitize_text_field( wp_unslash( $_COOKIE['annie_referral'] ) );
        $referrer      = get_users( array(
            'meta_key'   => '_annie_referral_code',
            'meta_value' => $referrer_code,
            'number'     => 1,
        ) );

        if ( ! empty( $referrer ) ) {
            $referrer_id = $referrer[0]->ID;
            $current     = (int) get_user_meta( $referrer_id, '_annie_loyalty_points', true );
            update_user_meta( $referrer_id, '_annie_loyalty_points', $current + 50 );

            $history   = get_user_meta( $referrer_id, '_annie_points_history', true );
            $history   = is_array( $history ) ? $history : array();
            $history[] = array(
                'date'   => current_time( 'mysql' ),
                'points' => 50,
                'type'   => 'earned',
                'note'   => __( 'Referral bonus - new customer signed up!', 'annie-cakes' ),
            );
            update_user_meta( $referrer_id, '_annie_points_history', $history );

            update_user_meta( $user_id, '_annie_referred_by', $referrer_id );
        }
    }
}
add_action( 'user_register', 'annie_cakes_referral_on_register' );
