<?php

/**
 * Template part to display reassurance elements in footer.
 *
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */

?>

<div class="container pb-4 ">
    <div class="reassurance-items row row-cols-2 row-cols-lg-4 align-items-start">
      <div class="reassurance-item d-flex flex-column flex-lg-row align-items-center justify-content-center mb-4 mb-lg-0 ">
        <img src="<?= get_template_directory_uri() ?>/assets/img/truck.svg" alt="">
        <p class="mt-2 my-lg-0 ms-lg-2 text-center text-lg-start">Livraison gratuite à partir de 30€</p>
      </div>
      <div class="reassurance-item d-flex flex-column flex-lg-row align-items-center justify-content-center mb-4 mb-lg-0">
        <img src="<?= get_template_directory_uri() ?>/assets/img/secure.svg" alt="">
        <p class="mt-2 my-lg-0 ms-lg-2 text-center text-lg-start">Paiement sécurisé CB / Paypal</p>
      </div>
      <div class="reassurance-item d-flex flex-column flex-lg-row align-items-center justify-content-center mb-4 mb-lg-0">
        <img src="<?= get_template_directory_uri() ?>/assets/img/loc.svg" alt="">
        <p class="mt-2 my-lg-0 ms-lg-2 text-center text-lg-start">Livraison depuis Cherbourg</p>
      </div>
      <div class="reassurance-item d-flex flex-column flex-lg-row align-items-center justify-content-center mb-4 mb-lg-0">
        <img src="<?= get_template_directory_uri() ?>/assets/img/chat.svg" alt="">
        <p class="mt-2 my-lg-0 ms-lg-2 text-center text-lg-start">Service clientèle actif</p>
      </div>
    </div>
  </div>