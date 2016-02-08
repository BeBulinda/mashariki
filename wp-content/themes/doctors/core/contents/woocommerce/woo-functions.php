<?php
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_filter('woocommerce_show_page_title', '__return_false');

//add_filter('loop_shop_columns', 'tally_woocommerce_loop_columns');
if (!function_exists('tally_woocommerce_loop_columns')) {
	function tally_woocommerce_loop_columns() {
		return 3; // 3 products per row
	}
}

// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'tally_woocommerce_header_add_to_cart_fragment' );
function tally_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<div class="th_woocart">
		<a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'doctors' ); ?>">
			<img src="<?php echo get_template_directory_uri().'/images/woocart.png'; ?>" alt="Shopping Cart" />
		</a>
        <?php if(WC()->cart->cart_contents_count != '0'): ?>
		<p>
		<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->cart_contents_count, 'doctors' ), WC()->cart->cart_contents_count ); ?> - <?php echo WC()->cart->get_cart_total(); ?>
        </p>
        <?php endif; ?>
	</div>
	<?php
	
	$fragments['.th_woocart'] = ob_get_clean();
	
	return $fragments;
}