<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage fimtheme
 * @since fimtheme 1.0
 */

?>

<!-- FOOTER -->

<footer class="mt-5">

  <hr class="border-dark-1-bottom">

  <div class="container">
    <div class="footer-container d-flex flex-column flex-lg-row align-items-start justify-content-start justify-content-lg-between my-5">

      <div class="menu-footer pt-4 d-flex flex-column">
        <h2 class="lucky-font fs-2">Menu</h2>

        <?php
        if (has_nav_menu('footer')) {
          wp_nav_menu(array(
            'menu'              => "footer",
            'theme_location'    => "footer",
            'container'      => "false",
            'menu_class'    => "list-unstyled d-flex flex-column gap-2",
            'depth'        => 1,
          ));
        } else {
          echo 'Veuillez assigner un menu footer 1 dans votre backoffice.';
        }
        ?>


      </div>

      <div class="menu-footer pt-4 d-flex flex-column">
        <h2 class="lucky-font fs-2">Aide</h2>
        <?php
        if (has_nav_menu('footer-2')) {
          wp_nav_menu(array(
            'menu'              => "footer-2",
            'theme_location'    => "footer-2",
            'container'      => "false",
            'menu_class'    => "list-unstyled d-flex flex-column gap-2",
            'depth'        => 1,
          ));
        } else {
          echo 'Veuillez assigner un menu footer 2 dans votre backoffice.';
        }
        ?>
      </div>

      <!-- //TODO ACF footer contact -->
      <div class="menu-footer pt-4 d-flex flex-column">
        <h2 class="lucky-font fs-2">Contact</h2>
        <ul class="list-unstyled d-flex flex-column gap-2">
          <li class="w-100 w-md-75"><?php the_field('adresse',21)?></li>
          <li>Tél : <?php the_field('telephone',21)?></li>
          <li>Email : <?php the_field('email',21)?></li>
          <li><a href="<?php the_field('lien_instagram',21)?>" target="_blank">Instagram</a></li>
          <li><a href="<?php the_field('lien_facebook',21)?>" target="_blank">Facebook</a></li>
        </ul>
      </div>

      <img src="<?= get_template_directory_uri() ?>/assets/img/panda.svg" alt="Un dessin de panda Enseigniste" class="d-none d-lg-block">

    </div>

    <div class="row row-cols-1 text-center text-dark-1">
      <p class="py-4">Une réalisation <a class="link-dark-1" href="https://www.dorianlongepee.fr" target="_blank">Dorian Longépée</a> &copy; 2021-<?= date('Y') ?></p>
    </div>

  </div>



</footer>
<?php wp_footer(); ?>

</body>

</html>