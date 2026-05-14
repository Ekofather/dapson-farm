<?php
/**
 * Template Name: Custom Orders
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Made Just For You', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Custom Cake Orders', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Tell us your vision and we\'ll bring it to life. From birthdays to weddings, every cake is a masterpiece.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Custom Orders', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<!-- How It Works -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Simple Process', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'How Custom Orders Work', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'From concept to delivery in 4 easy steps.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-why-grid" style="grid-template-columns: repeat(4, 1fr);">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon" style="font-size:1.5rem;font-weight:800;color:var(--ac-gold);">01</div>
                <h3><?php esc_html_e( 'Share Your Vision', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Fill out the form below with your cake details, upload an inspiration photo, select your flavour and size.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon" style="font-size:1.5rem;font-weight:800;color:var(--ac-gold);">02</div>
                <h3><?php esc_html_e( 'Get Your Quote', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We\'ll review your request and send you a detailed quote within 2 hours. No obligations, no hidden fees.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon" style="font-size:1.5rem;font-weight:800;color:var(--ac-gold);">03</div>
                <h3><?php esc_html_e( 'We Bake Magic', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Once approved and paid, our master bakers get to work crafting your dream cake with premium ingredients.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-why-icon" style="font-size:1.5rem;font-weight:800;color:var(--ac-gold);">04</div>
                <h3><?php esc_html_e( 'Delivery / Pickup', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Your cake is carefully packaged and delivered to your doorstep or ready for pickup at our store.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Custom Order Form -->
<section class="ac-section" style="background: var(--ac-bg-alt);">
    <div class="ac-container" style="max-width:800px;">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Order Form', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'Design Your Custom Cake', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Fill in the details below and we\'ll create a cake that\'s uniquely yours.', 'annie-cakes' ); ?></p>
        </div>
        <form id="ac-custom-order-form" class="ac-custom-order-form" enctype="multipart/form-data" data-aos="fade-up">
            <?php wp_nonce_field( 'annie_custom_order', 'custom_order_nonce' ); ?>

            <div class="ac-form-row">
                <div class="ac-form-group">
                    <label for="custom-name"><?php esc_html_e( 'Your Full Name', 'annie-cakes' ); ?> *</label>
                    <input type="text" id="custom-name" name="customer_name" required placeholder="<?php esc_attr_e( 'Enter your full name', 'annie-cakes' ); ?>">
                </div>
                <div class="ac-form-group">
                    <label for="custom-email"><?php esc_html_e( 'Email Address', 'annie-cakes' ); ?> *</label>
                    <input type="email" id="custom-email" name="customer_email" required placeholder="<?php esc_attr_e( 'your@email.com', 'annie-cakes' ); ?>">
                </div>
            </div>
            <div class="ac-form-row">
                <div class="ac-form-group">
                    <label for="custom-phone"><?php esc_html_e( 'Phone Number', 'annie-cakes' ); ?> *</label>
                    <input type="tel" id="custom-phone" name="customer_phone" required placeholder="<?php esc_attr_e( '+234 800 000 0000', 'annie-cakes' ); ?>">
                </div>
                <div class="ac-form-group">
                    <label for="custom-event"><?php esc_html_e( 'Event / Occasion', 'annie-cakes' ); ?> *</label>
                    <select id="custom-event" name="event_type" required>
                        <option value=""><?php esc_html_e( 'Select occasion', 'annie-cakes' ); ?></option>
                        <option value="Birthday"><?php esc_html_e( 'Birthday', 'annie-cakes' ); ?></option>
                        <option value="Wedding"><?php esc_html_e( 'Wedding', 'annie-cakes' ); ?></option>
                        <option value="Anniversary"><?php esc_html_e( 'Anniversary', 'annie-cakes' ); ?></option>
                        <option value="Baby Shower"><?php esc_html_e( 'Baby Shower', 'annie-cakes' ); ?></option>
                        <option value="Bridal Shower"><?php esc_html_e( 'Bridal Shower', 'annie-cakes' ); ?></option>
                        <option value="Graduation"><?php esc_html_e( 'Graduation', 'annie-cakes' ); ?></option>
                        <option value="Corporate Event"><?php esc_html_e( 'Corporate Event', 'annie-cakes' ); ?></option>
                        <option value="Housewarming"><?php esc_html_e( 'Housewarming', 'annie-cakes' ); ?></option>
                        <option value="Valentine"><?php esc_html_e( 'Valentine\'s Day', 'annie-cakes' ); ?></option>
                        <option value="Christmas"><?php esc_html_e( 'Christmas / Holiday', 'annie-cakes' ); ?></option>
                        <option value="Other"><?php esc_html_e( 'Other', 'annie-cakes' ); ?></option>
                    </select>
                </div>
            </div>
            <div class="ac-form-row">
                <div class="ac-form-group">
                    <label for="custom-size"><?php esc_html_e( 'Cake Size', 'annie-cakes' ); ?> *</label>
                    <select id="custom-size" name="cake_size" required>
                        <option value=""><?php esc_html_e( 'Select size', 'annie-cakes' ); ?></option>
                        <option value="6inch"><?php esc_html_e( '6 inch (serves 8-10)', 'annie-cakes' ); ?></option>
                        <option value="8inch"><?php esc_html_e( '8 inch (serves 12-15)', 'annie-cakes' ); ?></option>
                        <option value="10inch"><?php esc_html_e( '10 inch (serves 20-25)', 'annie-cakes' ); ?></option>
                        <option value="12inch"><?php esc_html_e( '12 inch (serves 30-40)', 'annie-cakes' ); ?></option>
                        <option value="14inch"><?php esc_html_e( '14 inch (serves 50-60)', 'annie-cakes' ); ?></option>
                        <option value="2tier"><?php esc_html_e( '2-Tier Wedding/Event', 'annie-cakes' ); ?></option>
                        <option value="3tier"><?php esc_html_e( '3-Tier Wedding/Event', 'annie-cakes' ); ?></option>
                        <option value="4tier"><?php esc_html_e( '4-Tier Wedding/Event', 'annie-cakes' ); ?></option>
                        <option value="5tier"><?php esc_html_e( '5-Tier Wedding/Event', 'annie-cakes' ); ?></option>
                        <option value="custom"><?php esc_html_e( 'Custom Size (describe below)', 'annie-cakes' ); ?></option>
                    </select>
                </div>
                <div class="ac-form-group">
                    <label for="custom-flavour"><?php esc_html_e( 'Flavour', 'annie-cakes' ); ?> *</label>
                    <select id="custom-flavour" name="flavour" required>
                        <option value=""><?php esc_html_e( 'Select flavour', 'annie-cakes' ); ?></option>
                        <option value="Chocolate"><?php esc_html_e( 'Rich Chocolate', 'annie-cakes' ); ?></option>
                        <option value="Red Velvet"><?php esc_html_e( 'Red Velvet', 'annie-cakes' ); ?></option>
                        <option value="Vanilla"><?php esc_html_e( 'Classic Vanilla', 'annie-cakes' ); ?></option>
                        <option value="Strawberry"><?php esc_html_e( 'Strawberry', 'annie-cakes' ); ?></option>
                        <option value="Lemon"><?php esc_html_e( 'Lemon Zest', 'annie-cakes' ); ?></option>
                        <option value="Carrot"><?php esc_html_e( 'Carrot Cake', 'annie-cakes' ); ?></option>
                        <option value="Coconut"><?php esc_html_e( 'Coconut', 'annie-cakes' ); ?></option>
                        <option value="Coffee"><?php esc_html_e( 'Coffee / Mocha', 'annie-cakes' ); ?></option>
                        <option value="Marble"><?php esc_html_e( 'Marble', 'annie-cakes' ); ?></option>
                        <option value="Fruit"><?php esc_html_e( 'Fruit Cake', 'annie-cakes' ); ?></option>
                        <option value="Banana"><?php esc_html_e( 'Banana', 'annie-cakes' ); ?></option>
                        <option value="Caramel"><?php esc_html_e( 'Caramel', 'annie-cakes' ); ?></option>
                        <option value="Cookies Cream"><?php esc_html_e( 'Cookies & Cream', 'annie-cakes' ); ?></option>
                    </select>
                </div>
            </div>
            <div class="ac-form-row">
                <div class="ac-form-group">
                    <label for="custom-colour"><?php esc_html_e( 'Colour Theme / Decoration', 'annie-cakes' ); ?></label>
                    <input type="text" id="custom-colour" name="colour_theme" placeholder="<?php esc_attr_e( 'e.g. Gold and White, Pink Ombre, Navy Blue', 'annie-cakes' ); ?>">
                </div>
                <div class="ac-form-group">
                    <label for="custom-date"><?php esc_html_e( 'Delivery / Pickup Date', 'annie-cakes' ); ?> *</label>
                    <input type="date" id="custom-date" name="delivery_date" required min="<?php echo esc_attr( gmdate( 'Y-m-d', strtotime( '+2 days' ) ) ); ?>">
                </div>
            </div>
            <div class="ac-form-group">
                <label for="custom-delivery"><?php esc_html_e( 'Delivery Option', 'annie-cakes' ); ?> *</label>
                <select id="custom-delivery" name="delivery_option" required>
                    <option value="pickup"><?php esc_html_e( 'Pickup from Store (Free)', 'annie-cakes' ); ?></option>
                    <option value="delivery"><?php esc_html_e( 'Deliver to My Address', 'annie-cakes' ); ?></option>
                </select>
            </div>
            <div class="ac-form-group ac-delivery-address-group" style="display:none;">
                <label for="custom-address"><?php esc_html_e( 'Delivery Address', 'annie-cakes' ); ?></label>
                <textarea id="custom-address" name="delivery_address" rows="2" placeholder="<?php esc_attr_e( 'Enter full delivery address', 'annie-cakes' ); ?>"></textarea>
            </div>
            <div class="ac-form-group">
                <label for="custom-image"><?php esc_html_e( 'Upload Inspiration Photo', 'annie-cakes' ); ?></label>
                <input type="file" id="custom-image" name="inspiration_image" accept="image/*">
                <div class="ac-file-preview"></div>
                <p style="font-size:0.8rem;color:var(--ac-text-muted);margin-top:5px;"><?php esc_html_e( 'Upload a photo of a cake design you love. We\'ll use it as inspiration for your custom cake.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-form-group">
                <label for="custom-message"><?php esc_html_e( 'Cake Message / Inscription', 'annie-cakes' ); ?></label>
                <input type="text" id="custom-message" name="cake_message" placeholder="<?php esc_attr_e( 'e.g. Happy Birthday Chioma!', 'annie-cakes' ); ?>">
            </div>
            <div class="ac-form-group">
                <label for="custom-notes"><?php esc_html_e( 'Additional Notes', 'annie-cakes' ); ?></label>
                <textarea id="custom-notes" name="notes" rows="4" placeholder="<?php esc_attr_e( 'Any special requests, allergies, dietary requirements, or details we should know about...', 'annie-cakes' ); ?>"></textarea>
            </div>
            <div class="ac-form-group">
                <label for="custom-budget"><?php esc_html_e( 'Budget Range', 'annie-cakes' ); ?></label>
                <select id="custom-budget" name="budget">
                    <option value=""><?php esc_html_e( 'Select budget range', 'annie-cakes' ); ?></option>
                    <option value="25000-40000"><?php esc_html_e( '₦25,000 - ₦40,000', 'annie-cakes' ); ?></option>
                    <option value="40000-70000"><?php esc_html_e( '₦40,000 - ₦70,000', 'annie-cakes' ); ?></option>
                    <option value="70000-100000"><?php esc_html_e( '₦70,000 - ₦100,000', 'annie-cakes' ); ?></option>
                    <option value="100000-200000"><?php esc_html_e( '₦100,000 - ₦200,000', 'annie-cakes' ); ?></option>
                    <option value="200000+"><?php esc_html_e( '₦200,000+', 'annie-cakes' ); ?></option>
                </select>
            </div>
            <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg" style="width:100%;">
                <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Submit Order Request', 'annie-cakes' ); ?>
            </button>
            <p style="text-align:center;font-size:0.85rem;color:var(--ac-text-muted);margin-top:15px;">
                <?php esc_html_e( 'We\'ll send you a quote within 2 hours. No payment required until you approve the design.', 'annie-cakes' ); ?>
            </p>
        </form>
    </div>
</section>

<!-- Quick WhatsApp CTA -->
<section class="ac-section">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <h2><?php esc_html_e( 'Prefer to Chat?', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Send us your cake inspiration photo directly on WhatsApp and discuss your ideas with our cake designers in real-time.', 'annie-cakes' ); ?></p>
        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>?text=<?php echo esc_attr( rawurlencode( 'Hi Annie Cakes! I\'d like to order a custom cake.' ) ); ?>" target="_blank" rel="noopener" class="ac-btn ac-btn-primary ac-btn-lg" style="background:#25D366;border-color:#25D366;">
            <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'Chat on WhatsApp', 'annie-cakes' ); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
