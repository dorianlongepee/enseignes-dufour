<?php

get_header();


get_template_part("template-parts/banner");
?>



<div class="container">
	
	
	<?php

if (woocommerce_product_loop()) {
	
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_breadcrumb - 10
	 * @hooked dufour_title_archive - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	?>
<div class="w-100 mt-4 header-archive">
	<?php
	do_action('woocommerce_before_shop_loop');
?>
</div>
	<?php

	woocommerce_product_loop_start();

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action('woocommerce_shop_loop');

			wc_get_template_part('content', 'product');
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
?>
</div>
<?php

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer();
