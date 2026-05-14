<?php
/**
 * Template Name: Custom Orders
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header ac-page-header-lg">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Made For You', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Custom Orders', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Design your dream cake or curate a personalised gift package', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-custom-order-section">
    <div class="ac-container">
        <div class="ac-custom-order-grid">
            <div class="ac-custom-order-info" data-aos="fade-right">
                <h2><?php esc_html_e( 'How It Works', 'annie-cakes' ); ?></h2>
                <div class="ac-steps">
                    <div class="ac-step">
                        <div class="ac-step-num">1</div>
                        <div class="ac-step-content">
                            <h4><?php esc_html_e( 'Tell Us Your Vision', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Fill out the form with your requirements, upload inspiration images, and share your ideas.', 'annie-cakes' ); ?></p>
                        </div>
                    </div>
                    <div class="ac-step">
                        <div class="ac-step-num">2</div>
                        <div class="ac-step-content">
                            <h4><?php esc_html_e( 'Get Your Quote', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Our team will review your request and send you a detailed quote within 2 hours.', 'annie-cakes' ); ?></p>
                        </div>
                    </div>
                    <div class="ac-step">
                        <div class="ac-step-num">3</div>
                        <div class="ac-step-content">
                            <h4><?php esc_html_e( 'Confirm & Pay', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Once you approve the quote, make payment and we\'ll start creating your masterpiece.', 'annie-cakes' ); ?></p>
                        </div>
                    </div>
                    <div class="ac-step">
                        <div class="ac-step-num">4</div>
                        <div class="ac-step-content">
                            <h4><?php esc_html_e( 'Receive & Enjoy', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Pick up or get your order delivered fresh. Share the joy with your loved ones!', 'annie-cakes' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="ac-custom-contact">
                    <h3><?php esc_html_e( 'Prefer to chat?', 'annie-cakes' ); ?></h3>
                    <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>?text=<?php echo esc_attr( rawurlencode( 'Hi! I would like to place a custom order.' ) ); ?>" class="ac-btn ac-btn-outline ac-btn-lg" target="_blank" rel="noopener">
                        <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'Chat on WhatsApp', 'annie-cakes' ); ?>
                    </a>
                </div>
            </div>

            <div class="ac-custom-order-form-wrap" data-aos="fade-left">
                <div class="ac-glass-card">
                    <h3><i class="fas fa-birthday-cake"></i> <?php esc_html_e( 'Request a Quote', 'annie-cakes' ); ?></h3>
                    <form class="ac-custom-order-form" id="ac-custom-order-form" enctype="multipart/form-data">
                        <?php wp_nonce_field( 'annie_custom_order', 'custom_order_nonce' ); ?>

                        <div class="ac-form-group">
                            <label for="co-name"><?php esc_html_e( 'Your Name', 'annie-cakes' ); ?> *</label>
                            <input type="text" id="co-name" name="customer_name" required>
                        </div>

                        <div class="ac-form-row">
                            <div class="ac-form-group">
                                <label for="co-email"><?php esc_html_e( 'Email', 'annie-cakes' ); ?> *</label>
                                <input type="email" id="co-email" name="customer_email" required>
                            </div>
                            <div class="ac-form-group">
                                <label for="co-phone"><?php esc_html_e( 'Phone', 'annie-cakes' ); ?> *</label>
                                <input type="tel" id="co-phone" name="customer_phone" required>
                            </div>
                        </div>

                        <div class="ac-form-group">
                            <label for="co-type"><?php esc_html_e( 'Order Type', 'annie-cakes' ); ?> *</label>
                            <select id="co-type" name="order_type" required>
                                <option value=""><?php esc_html_e( 'Select order type', 'annie-cakes' ); ?></option>
                                <option value="birthday_cake"><?php esc_html_e( 'Birthday Cake', 'annie-cakes' ); ?></option>
                                <option value="wedding_cake"><?php esc_html_e( 'Wedding Cake', 'annie-cakes' ); ?></option>
                                <option value="anniversary_cake"><?php esc_html_e( 'Anniversary Cake', 'annie-cakes' ); ?></option>
                                <option value="graduation_cake"><?php esc_html_e( 'Graduation Cake', 'annie-cakes' ); ?></option>
                                <option value="custom_cake"><?php esc_html_e( 'Custom Design Cake', 'annie-cakes' ); ?></option>
                                <option value="cupcakes"><?php esc_html_e( 'Cupcakes', 'annie-cakes' ); ?></option>
                                <option value="gift_package"><?php esc_html_e( 'Gift Package', 'annie-cakes' ); ?></option>
                                <option value="hamper"><?php esc_html_e( 'Hamper', 'annie-cakes' ); ?></option>
                                <option value="other"><?php esc_html_e( 'Other', 'annie-cakes' ); ?></option>
                            </select>
                        </div>

                        <div class="ac-form-row">
                            <div class="ac-form-group">
                                <label for="co-size"><?php esc_html_e( 'Cake Size', 'annie-cakes' ); ?></label>
                                <select id="co-size" name="cake_size">
                                    <option value=""><?php esc_html_e( 'Select size', 'annie-cakes' ); ?></option>
                                    <option value="6inch"><?php esc_html_e( '6 inch (6-8 servings)', 'annie-cakes' ); ?></option>
                                    <option value="8inch"><?php esc_html_e( '8 inch (10-12 servings)', 'annie-cakes' ); ?></option>
                                    <option value="10inch"><?php esc_html_e( '10 inch (16-20 servings)', 'annie-cakes' ); ?></option>
                                    <option value="12inch"><?php esc_html_e( '12 inch (24-30 servings)', 'annie-cakes' ); ?></option>
                                    <option value="tiered"><?php esc_html_e( 'Multi-tiered', 'annie-cakes' ); ?></option>
                                    <option value="custom"><?php esc_html_e( 'Custom size', 'annie-cakes' ); ?></option>
                                </select>
                            </div>
                            <div class="ac-form-group">
                                <label for="co-flavour"><?php esc_html_e( 'Flavour', 'annie-cakes' ); ?></label>
                                <select id="co-flavour" name="flavour">
                                    <option value=""><?php esc_html_e( 'Select flavour', 'annie-cakes' ); ?></option>
                                    <option value="vanilla"><?php esc_html_e( 'Vanilla', 'annie-cakes' ); ?></option>
                                    <option value="chocolate"><?php esc_html_e( 'Chocolate', 'annie-cakes' ); ?></option>
                                    <option value="red_velvet"><?php esc_html_e( 'Red Velvet', 'annie-cakes' ); ?></option>
                                    <option value="lemon"><?php esc_html_e( 'Lemon', 'annie-cakes' ); ?></option>
                                    <option value="strawberry"><?php esc_html_e( 'Strawberry', 'annie-cakes' ); ?></option>
                                    <option value="carrot"><?php esc_html_e( 'Carrot', 'annie-cakes' ); ?></option>
                                    <option value="fruit"><?php esc_html_e( 'Fruit Cake', 'annie-cakes' ); ?></option>
                                    <option value="marble"><?php esc_html_e( 'Marble', 'annie-cakes' ); ?></option>
                                    <option value="other"><?php esc_html_e( 'Other (specify in notes)', 'annie-cakes' ); ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="ac-form-group">
                            <label for="co-colour"><?php esc_html_e( 'Colour / Theme', 'annie-cakes' ); ?></label>
                            <input type="text" id="co-colour" name="colour_theme" placeholder="<?php esc_attr_e( 'e.g., Pink and Gold, Princess theme', 'annie-cakes' ); ?>">
                        </div>

                        <div class="ac-form-row">
                            <div class="ac-form-group">
                                <label for="co-delivery"><?php esc_html_e( 'Delivery Option', 'annie-cakes' ); ?> *</label>
                                <select id="co-delivery" name="delivery_option" required>
                                    <option value="pickup"><?php esc_html_e( 'Pickup', 'annie-cakes' ); ?></option>
                                    <option value="delivery"><?php esc_html_e( 'Delivery', 'annie-cakes' ); ?></option>
                                </select>
                            </div>
                            <div class="ac-form-group">
                                <label for="co-date"><?php esc_html_e( 'Delivery / Pickup Date', 'annie-cakes' ); ?> *</label>
                                <input type="date" id="co-date" name="delivery_date" required min="<?php echo esc_attr( gmdate( 'Y-m-d', strtotime( '+2 days' ) ) ); ?>">
                            </div>
                        </div>

                        <div class="ac-form-group ac-delivery-address" style="display: none;">
                            <label for="co-address"><?php esc_html_e( 'Delivery Address', 'annie-cakes' ); ?></label>
                            <textarea id="co-address" name="delivery_address" rows="2"></textarea>
                        </div>

                        <div class="ac-form-group">
                            <label for="co-image"><?php esc_html_e( 'Upload Inspiration Image', 'annie-cakes' ); ?></label>
                            <div class="ac-file-upload">
                                <input type="file" id="co-image" name="inspiration_image" accept="image/*">
                                <div class="ac-file-upload-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span><?php esc_html_e( 'Click to upload or drag and drop', 'annie-cakes' ); ?></span>
                                    <small><?php esc_html_e( 'PNG, JPG up to 5MB', 'annie-cakes' ); ?></small>
                                </div>
                                <div class="ac-file-preview"></div>
                            </div>
                        </div>

                        <div class="ac-form-group">
                            <label for="co-message"><?php esc_html_e( 'Special Instructions / Message on Cake', 'annie-cakes' ); ?></label>
                            <textarea id="co-message" name="special_notes" rows="4" placeholder="<?php esc_attr_e( 'Any special instructions, message to write on cake, etc.', 'annie-cakes' ); ?>"></textarea>
                        </div>

                        <div class="ac-form-group">
                            <label for="co-budget"><?php esc_html_e( 'Budget Range', 'annie-cakes' ); ?></label>
                            <select id="co-budget" name="budget">
                                <option value=""><?php esc_html_e( 'Select budget range', 'annie-cakes' ); ?></option>
                                <option value="10000-25000"><?php esc_html_e( '₦10,000 - ₦25,000', 'annie-cakes' ); ?></option>
                                <option value="25000-50000"><?php esc_html_e( '₦25,000 - ₦50,000', 'annie-cakes' ); ?></option>
                                <option value="50000-100000"><?php esc_html_e( '₦50,000 - ₦100,000', 'annie-cakes' ); ?></option>
                                <option value="100000+"><?php esc_html_e( '₦100,000+', 'annie-cakes' ); ?></option>
                            </select>
                        </div>

                        <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg ac-btn-full">
                            <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Get Quote', 'annie-cakes' ); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
