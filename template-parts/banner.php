<?php

/**
 * Template part to display a banner.
 *
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */

$term = get_queried_object();
$banner = get_field('banner', $term);

?>

<div class="woocommerce-products-header h-200 h-lg-300 category-banner mb-5"
	<?php
		if($banner) :
	?>
	style="background-image: url('<?= $banner['sizes']['1536x1536'];?>');"
	<?php 
		endif;
		if(!$banner) :
	?>
	style="background-image : linear-gradient(90deg, #25B1A2, #F29200);";
	<?php
	endif;
	?>
></div>