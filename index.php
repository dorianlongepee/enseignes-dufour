<?php

/**
 * The homepage.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */

get_header();
$imageHero = "url('" . get_field('image_hero', 21) . "')";
$desc = get_field('description-homepage', 21);

do_action('woocommerce_before_main_content');

?>

<section class="hero w-100 d-flex flex-column justify-content-center align-items-center text-center" style="background: no-repeat center <?= $imageHero ?>;background-size: cover;">
  <div class="container">
    <h1 class="display-0 lucky-font text-main-orange lh-1 mt-5"><span class="text-white-1 display-4">Boutique</span><br>Enseignes Dufour</h1>
    <p class="text-white-1 col-12 col-lg-5 m-auto text-hero">
      <?= $desc ?> 
    </p>
    <button class="btn btn-lg bg-main-orange text-white-1 mt-4 col-auto">Découvrir nos produits</button>
  </div>

</section>


<?php 

get_template_part("template-parts/best-sellers");
get_template_part("template-parts/categories");
get_template_part('template-parts/reassurance-footer');


do_action('woocommerce_after_main_content');
get_footer();