<?php

/**
 * Template part to display best sellers.
 *
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */

?>

<section class="best-sellers py-5">
  <div class="container">
    <h2 class="lucky-font text-main-green display-5 mb-0">Meilleures Ventes</h2>

    <!-- //TODO ACF this -->
    <p class="col-md-6 mb-5">Nos meillleures ventes, nos produits sont fait maison sous Illustrator et imprimés avec amour.</p>

    <?php
        echo do_shortcode('[best_selling_products limit=4 columns=4]');
    ?>

  </div>
</section>