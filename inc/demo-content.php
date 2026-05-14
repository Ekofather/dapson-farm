<?php
/**
 * Demo Content Setup
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add admin menu for demo import
 */
function annie_cakes_demo_menu() {
    add_theme_page(
        __( 'Annie Cakes Setup', 'annie-cakes' ),
        __( 'Annie Cakes Setup', 'annie-cakes' ),
        'manage_options',
        'annie-cakes-setup',
        'annie_cakes_setup_page'
    );
}
add_action( 'admin_menu', 'annie_cakes_demo_menu' );

function annie_cakes_setup_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Annie Cakes & Gift - Theme Setup', 'annie-cakes' ); ?></h1>
        <div class="ac-admin-setup">
            <div class="ac-setup-card">
                <h2><?php esc_html_e( 'Import Demo Products', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Import 15 sample products with categories to get started quickly.', 'annie-cakes' ); ?></p>
                <button class="button button-primary" id="ac-import-products"><?php esc_html_e( 'Import Products', 'annie-cakes' ); ?></button>
                <div class="ac-import-status" id="ac-import-status"></div>
            </div>
            <div class="ac-setup-card">
                <h2><?php esc_html_e( 'Create Pages', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Create all required pages with the correct templates assigned.', 'annie-cakes' ); ?></p>
                <button class="button button-primary" id="ac-create-pages"><?php esc_html_e( 'Create Pages', 'annie-cakes' ); ?></button>
                <div class="ac-import-status" id="ac-pages-status"></div>
            </div>
            <div class="ac-setup-card">
                <h2><?php esc_html_e( 'Create Sample Testimonials', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Add sample testimonials to showcase the testimonials section.', 'annie-cakes' ); ?></p>
                <button class="button button-primary" id="ac-import-testimonials"><?php esc_html_e( 'Import Testimonials', 'annie-cakes' ); ?></button>
                <div class="ac-import-status" id="ac-testimonials-status"></div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * AJAX Import Products
 */
function annie_cakes_import_products() {
    check_ajax_referer( 'annie_cakes_admin_nonce', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) || ! class_exists( 'WooCommerce' ) ) {
        wp_send_json_error( array( 'message' => __( 'Unauthorized or WooCommerce not active.', 'annie-cakes' ) ) );
    }

    // Create categories
    $cakes_cat = wp_insert_term( 'Cakes', 'product_cat', array( 'slug' => 'cakes' ) );
    $cakes_id  = is_wp_error( $cakes_cat ) ? get_term_by( 'slug', 'cakes', 'product_cat' )->term_id : $cakes_cat['term_id'];

    $gifts_cat = wp_insert_term( 'Gifts', 'product_cat', array( 'slug' => 'gifts' ) );
    $gifts_id  = is_wp_error( $gifts_cat ) ? get_term_by( 'slug', 'gifts', 'product_cat' )->term_id : $gifts_cat['term_id'];

    $sub_cats = array(
        array( 'name' => 'Birthday Cakes', 'slug' => 'birthday-cakes', 'parent' => $cakes_id ),
        array( 'name' => 'Wedding Cakes', 'slug' => 'wedding-cakes', 'parent' => $cakes_id ),
        array( 'name' => 'Cupcakes', 'slug' => 'cupcakes', 'parent' => $cakes_id ),
        array( 'name' => 'Gift Boxes', 'slug' => 'gift-boxes', 'parent' => $gifts_id ),
        array( 'name' => 'Hampers', 'slug' => 'hampers', 'parent' => $gifts_id ),
    );

    foreach ( $sub_cats as $cat ) {
        wp_insert_term( $cat['name'], 'product_cat', array( 'slug' => $cat['slug'], 'parent' => $cat['parent'] ) );
    }

    // Products data
    $products = array(
        array( 'name' => 'Chocolate Birthday Cake', 'price' => '25000', 'sale' => '22000', 'cat' => 'birthday-cakes', 'desc' => 'A rich, moist chocolate cake layered with premium chocolate ganache and decorated with fresh berries. Perfect for birthday celebrations.' ),
        array( 'name' => 'Red Velvet Cake', 'price' => '28000', 'sale' => '', 'cat' => 'cakes', 'desc' => 'Classic red velvet cake with cream cheese frosting. Moist, flavourful, and beautifully decorated with a signature velvet finish.' ),
        array( 'name' => 'Wedding Cake', 'price' => '150000', 'sale' => '', 'cat' => 'wedding-cakes', 'desc' => 'Elegant multi-tiered wedding cake with fondant finish, sugar flowers, and custom design. A stunning centrepiece for your special day.' ),
        array( 'name' => 'Cupcake Box (12 pcs)', 'price' => '15000', 'sale' => '12000', 'cat' => 'cupcakes', 'desc' => 'A dozen beautifully decorated cupcakes in assorted flavours. Perfect for parties, gifts, or treating yourself.' ),
        array( 'name' => 'Fruit Cake', 'price' => '20000', 'sale' => '', 'cat' => 'cakes', 'desc' => 'Traditional fruit cake loaded with dried fruits and nuts, soaked in premium rum. Rich, dense, and perfect for special occasions.' ),
        array( 'name' => 'Buttercream Cake', 'price' => '22000', 'sale' => '18000', 'cat' => 'birthday-cakes', 'desc' => 'Soft vanilla sponge with luxurious buttercream frosting. Available in various colours and designs for any celebration.' ),
        array( 'name' => 'Anniversary Cake', 'price' => '35000', 'sale' => '', 'cat' => 'cakes', 'desc' => 'Celebrate your love with our elegantly designed anniversary cake. Custom message and design included.' ),
        array( 'name' => 'Luxury Gift Box', 'price' => '45000', 'sale' => '40000', 'cat' => 'gift-boxes', 'desc' => 'Premium gift box with assorted chocolates, scented candles, premium wine, and handcrafted treats. Beautifully packaged.' ),
        array( 'name' => 'Teddy Gift Package', 'price' => '30000', 'sale' => '', 'cat' => 'gift-boxes', 'desc' => 'Adorable teddy bear with chocolates, flowers, and a personalised message card. The perfect surprise gift.' ),
        array( 'name' => 'Chocolate Hamper', 'price' => '55000', 'sale' => '48000', 'cat' => 'hampers', 'desc' => 'Luxury chocolate hamper with imported and artisanal chocolates, premium cocoa, and chocolate treats.' ),
        array( 'name' => 'Surprise Box', 'price' => '25000', 'sale' => '', 'cat' => 'gift-boxes', 'desc' => 'A mystery surprise box filled with curated gifts and treats. Tell us the occasion and we\'ll create the perfect surprise.' ),
        array( 'name' => 'Bridal Shower Cake', 'price' => '40000', 'sale' => '', 'cat' => 'wedding-cakes', 'desc' => 'Elegant bridal shower cake with delicate floral decorations and customised message. Made to match your theme.' ),
        array( 'name' => 'Graduation Cake', 'price' => '30000', 'sale' => '25000', 'cat' => 'birthday-cakes', 'desc' => 'Celebrate academic achievements with our specially designed graduation cake. Includes graduation cap topper and custom colours.' ),
        array( 'name' => 'Valentine Package', 'price' => '35000', 'sale' => '30000', 'cat' => 'gift-boxes', 'desc' => 'Romantic Valentine package with heart-shaped cake, roses, chocolates, and a love note. Express your love beautifully.' ),
        array( 'name' => 'Kids Cartoon Cake', 'price' => '35000', 'sale' => '', 'cat' => 'birthday-cakes', 'desc' => 'Fun cartoon-themed cake for kids. Choose from popular characters. Colourful, creative, and absolutely delicious.' ),
    );

    $imported = 0;
    foreach ( $products as $p ) {
        $existing = get_page_by_title( $p['name'], OBJECT, 'product' );
        if ( $existing ) {
            continue;
        }

        $product = new WC_Product_Simple();
        $product->set_name( $p['name'] );
        $product->set_description( $p['desc'] );
        $product->set_short_description( wp_trim_words( $p['desc'], 20 ) );
        $product->set_regular_price( $p['price'] );
        if ( $p['sale'] ) {
            $product->set_sale_price( $p['sale'] );
        }
        $product->set_status( 'publish' );
        $product->set_catalog_visibility( 'visible' );
        $product->set_stock_status( 'instock' );
        $product->set_manage_stock( false );
        $product->set_featured( $imported < 4 );

        $product_id = $product->save();

        $cat = get_term_by( 'slug', $p['cat'], 'product_cat' );
        if ( $cat ) {
            wp_set_object_terms( $product_id, $cat->term_id, 'product_cat' );
        }

        $imported++;
    }

    wp_send_json_success( array( 'message' => sprintf( __( '%d products imported successfully!', 'annie-cakes' ), $imported ) ) );
}
add_action( 'wp_ajax_annie_import_products', 'annie_cakes_import_products' );

/**
 * AJAX Create Pages
 */
function annie_cakes_create_pages() {
    check_ajax_referer( 'annie_cakes_admin_nonce', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error();
    }

    $pages = array(
        array( 'title' => 'About Us', 'template' => 'page-templates/about.php' ),
        array( 'title' => 'Gallery', 'template' => 'page-templates/gallery.php' ),
        array( 'title' => 'Testimonials', 'template' => 'page-templates/testimonials.php' ),
        array( 'title' => 'FAQ', 'template' => 'page-templates/faq.php' ),
        array( 'title' => 'Contact', 'template' => 'page-templates/contact.php' ),
        array( 'title' => 'Custom Orders', 'template' => 'page-templates/custom-orders.php' ),
        array( 'title' => 'Hot Sales', 'template' => 'page-templates/hot-sales.php' ),
        array( 'title' => 'Order Tracking', 'template' => 'page-templates/order-tracking.php' ),
        array( 'title' => 'Wishlist', 'template' => 'page-templates/wishlist.php' ),
    );

    $created = 0;
    foreach ( $pages as $page ) {
        $existing = get_page_by_title( $page['title'] );
        if ( $existing ) {
            continue;
        }

        $id = wp_insert_post( array(
            'post_title'  => $page['title'],
            'post_status' => 'publish',
            'post_type'   => 'page',
        ) );

        if ( ! is_wp_error( $id ) ) {
            update_post_meta( $id, '_wp_page_template', $page['template'] );
            $created++;

            if ( 'Wishlist' === $page['title'] ) {
                update_option( 'annie_wishlist_page', $id );
            }
        }
    }

    wp_send_json_success( array( 'message' => sprintf( __( '%d pages created successfully!', 'annie-cakes' ), $created ) ) );
}
add_action( 'wp_ajax_annie_create_pages', 'annie_cakes_create_pages' );

/**
 * AJAX Import Testimonials
 */
function annie_cakes_import_testimonials() {
    check_ajax_referer( 'annie_cakes_admin_nonce', 'nonce' );

    if ( ! current_user_can( 'manage_options' ) ) {
        wp_send_json_error();
    }

    $testimonials = array(
        array( 'name' => 'Sarah Johnson', 'role' => 'Bride', 'text' => 'Annie Cakes made the most stunning wedding cake I\'ve ever seen. It was not only beautiful but absolutely delicious! Every guest was amazed. Thank you for making our special day even more magical.', 'rating' => 5 ),
        array( 'name' => 'Michael Adeyemi', 'role' => 'Birthday Client', 'text' => 'Ordered a custom birthday cake for my daughter and it exceeded all expectations. The attention to detail was incredible. The princess theme was perfect and she was over the moon!', 'rating' => 5 ),
        array( 'name' => 'Chioma Okafor', 'role' => 'Corporate Client', 'text' => 'We\'ve been ordering gift hampers from Annie Cakes for our corporate events and they never disappoint. Premium quality every single time. Our clients always love the presentation.', 'rating' => 5 ),
        array( 'name' => 'Tunde Bakare', 'role' => 'Anniversary Celebration', 'text' => 'The anniversary cake was a masterpiece! My wife was in tears of joy when she saw it. The red velvet flavour was divine. Annie Cakes truly understands how to make celebrations special.', 'rating' => 5 ),
        array( 'name' => 'Amara Nwosu', 'role' => 'Regular Customer', 'text' => 'I\'ve been ordering from Annie Cakes for over 2 years now. From birthday cakes to surprise gift boxes, they consistently deliver excellent quality and outstanding customer service.', 'rating' => 5 ),
        array( 'name' => 'David Osei', 'role' => 'Graduation Party', 'text' => 'The graduation cake for my son was exactly what we envisioned. Professional, creative, and absolutely delicious! The team was very responsive and accommodating.', 'rating' => 5 ),
    );

    $created = 0;
    foreach ( $testimonials as $t ) {
        $existing = get_page_by_title( $t['name'], OBJECT, 'ac_testimonial' );
        if ( $existing ) {
            continue;
        }

        $id = wp_insert_post( array(
            'post_title'   => $t['name'],
            'post_content' => $t['text'],
            'post_status'  => 'publish',
            'post_type'    => 'ac_testimonial',
        ) );

        if ( ! is_wp_error( $id ) ) {
            update_post_meta( $id, '_testimonial_rating', $t['rating'] );
            update_post_meta( $id, '_testimonial_role', $t['role'] );
            $created++;
        }
    }

    wp_send_json_success( array( 'message' => sprintf( __( '%d testimonials imported!', 'annie-cakes' ), $created ) ) );
}
add_action( 'wp_ajax_annie_import_testimonials', 'annie_cakes_import_testimonials' );
