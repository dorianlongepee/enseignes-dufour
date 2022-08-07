<?php

/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage dufourtheme
 * @since dufourtheme 1.0
 */


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header w-100 position-fixed z-index-100">

    <div class="bg-main-orange py-2 text-white-1 d-none d-lg-block">
      <div class="container d-flex justify-content-between align-items-center">
        <p class="m-0"><?php the_field('message_personnalise', 21); ?></p>
        <p class="m-0">Tél : <?php the_field('telephone', 21); ?> - Email : <a href="mailto:<?php the_field('email',21)?>" class="link-white-1"><?php the_field('email', 21); ?></a></p>
      </div>
    </div>


    <div class="bg-main-green">

      <div class="container py-2">
        <nav class="navbar navbar-dark navbar-expand-lg">
          <a href="<?php bloginfo('url') ?>" class="navbar-brand">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo-enseignes-dufour-boutique-1.png" alt="" class="position-absolute col-4 col-md-2 img-fluid top-0">
          </a>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-start bg-main-green offset-lg-2" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <p class="offcanvas-title text-white-1" id="offcanvasNavbarLabel">Menu</p>
              <button type="button" class="btn-close text-reset bg-white-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

              <?php
              if (has_nav_menu('menu-1')) {
                wp_nav_menu(array(
                  'menu'              => "menu-1",
                  'theme_location'    => "menu-1",
                  'container'      => "false",
                  'menu_class'    => "navbar-nav justify-content-end flex-grow-1 px-3 fw-bold",
                  'depth'        => 2,
                  'walker'      => new bootstrap_5_wp_nav_menu_walker()
                ));
              } else {
                echo 'Veuillez assigner un menu header dans votre backoffice.';
              }
              ?>


              <a href="<?php echo get_permalink(get_option('woocommerce_cart_page_id')); ?>" class="border-0 rounded-circle p-2 me-3 d-none d-lg-block position-relative bg-white-1" title="<?php _e('Cart', 'woocommerce'); ?>">
                <img src="<?= get_template_directory_uri() ?>/assets/img/cart.svg" alt="Cart button"/>

                <?php if (WC()->cart->get_cart_contents_count() != 0) : ?>
                  <div class="cart-count position-absolute top-20 start-80 translate-middle bg-main-orange text-white-1 px-2 py-1 rounded-circle lh-1 fw-bold">
                    <?php
                    echo WC()->cart->get_cart_contents_count();
                    ?>
                  </div>
                <?php endif; ?>
              </a>

              <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="border-0 rounded-circle p-2 d-none d-lg-block bg-white-1" title="<?php _e('My Account',''); ?>">
                <img src="<?= get_template_directory_uri() ?>/assets/img/account.svg" alt="Account button">
              </a>





            </div>
          </div>
        </nav>
      </div>

    </div>
  </header>