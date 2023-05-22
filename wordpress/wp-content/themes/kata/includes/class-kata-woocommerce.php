<?php
/**
 * Kata WooCommerce.
 *
 * @package Kata
 */

defined( 'ABSPATH' ) || exit;

class Kata_WooCommerce {
	/**
	 * Instance of this class.
	 *
	 * @since   1.3.0
	 */
	public static $instance;

	/**
	 * Provides access to a single instance of a module using the singleton pattern.
	 *
	 * @since   1.3.0
	 *
	 * @return  object
	 */
	public static function get_instance() {
		if ( self::$instance === null ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 *
	 * @since 1.3.0
	 */
	private function __construct() {

		if ( ! class_exists( 'WooCommerce') ) {
			return;
		}

		$this->hooks();
	}

	/**
	 * Hooks.
	 *
	 * @since 1.3.0
	 */
	private function hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 99 );
		add_action( 'after_setup_theme', array( $this, 'setup_theme' ), 99 );
	}

	/**
	 * Enqueue scripts.
	 *
	 * @since 1.3.0
	 */
	public function enqueue() {

		if ( is_product() ) {
			wp_enqueue_style( 'kata-woo-single', kata::$assets . 'css/dist/single-product.css', array(), kata::$version );
		}

		if ( is_cart() ) {
			wp_enqueue_style( 'kata-woo-cart', kata::$assets . 'css/dist/cart.css', array(), kata::$version );
		}

		if ( is_checkout() ) {
			wp_enqueue_style( 'kata-woo-checkout', kata::$assets . 'css/dist/checkout.css', array(), kata::$version );
		}

		if ( is_account_page() ) {
			wp_enqueue_style( 'kata-woo-my-account', kata::$assets . 'css/dist/my-account.css', array(), kata::$version );
		}

		if (
			is_shop() ||
			is_product_category() ||
			is_page() ||
			is_product_tag() ||
			is_tax('shoppress_brand')
		) {
			wp_enqueue_style( 'kata-woo-shop', kata::$assets . 'css/dist/shop.css', array(), kata::$version );
		}
	}

	/**
	 * After setup theme.
	 *
	 * @since 1.3.0
	 */
	public function setup_theme() {
		// Add gallery zoom support
		add_theme_support( 'wc-product-gallery-zoom' );

		// Add gallery lightbox support
		add_theme_support( 'wc-product-gallery-lightbox' );

		// Add gallery slider support
		add_theme_support( 'wc-product-gallery-slider' );

		// Single
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_breadcrumb', 3 );
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 7 );
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15 );
		remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 6 );

		// Cart
		remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
		add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display', 10 );

		add_filter( 'woocommerce_cross_sells_columns', 'change_cross_sells_columns' );
		function change_cross_sells_columns( $columns ) {
			return 4;
		}

		// Checkout
		remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
		add_action( 'woocommerce_order_review', 'woocommerce_order_review', 10 );
		add_action( 'woocommerce_checkout_payment', 'woocommerce_checkout_payment', 20 );
	}

	/**
	 * After setup theme.
	 *
	 * @since 1.3.0
	 */
	public static function woocommerce_content() {

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) :
				the_post();
				wc_get_template_part( 'content', 'single-product' );
			endwhile;

		} else {
			?>

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<div id="kata-page-title" class="kata-page-title">
					<div class="container">
						<div class="col-sm-12">
							<h1 class="kata-archive-page-title">
								<span class="kt-tax-name">
									<?php woocommerce_page_title(); ?>
								</span>
							</h1>
						</div>
					</div>
				</div>

			<?php endif; ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( woocommerce_product_loop() ) : ?>

				<?php do_action( 'woocommerce_before_shop_loop' ); ?>

				<?php woocommerce_product_loop_start(); ?>

				<?php if ( wc_get_loop_prop( 'total' ) ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>

				<?php
			else :
				do_action( 'woocommerce_no_products_found' );
			endif;
		}
	}
}

Kata_WooCommerce::get_instance();
