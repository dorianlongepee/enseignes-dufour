<?php

/**
 * Template part to display categories.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */


$catImg1 = "url('" . get_field('img_categorie_1', 21) . "')";
$catImg2 = "url('" . get_field('img_categorie_2', 21) . "')";
$catImg3 = "url('" . get_field('img_categorie_3', 21) . "')";
$catImg4 = "url('" . get_field('img_categorie_4', 21) . "')";

?>

<section class="categories py-5">
    <div class="container">
        <h2 class="lucky-font text-main-green display-5 mb-0 text-center">Nos produits</h2>

        <!-- //TODO ACF DESC categories -->
        <p class="col-12 col-md-6 text-center m-auto mb-5">Voici nos différents produits, n'hésitez pas à regarder ce que nous faisons, vous aurez peut être un coup de coeur...</p>


        <div class="row g-3">

            <div class="col-12 col-lg-8">
                <a href="<?php get_stylesheet_uri()?>categorie-produit/<?php the_field('nom_categorie_1', 21) ?>/">
                    <div class="category category-1 h-300 position-relative cursor-pointer" style="background-image:<?= $catImg1 ?>">
                        <div class="bg-main-green position-absolute translate-middle translate-middle-lg-none top-50 start-50 w-100 p-2 w-lg-50 top-lg-20 start-lg-0 " style="max-width: 300px;">
                            <h3 class="text-white fw-bold fs-4 text-center text-lg-end m-0"><?php the_field('nom_categorie_1', 21) ?></h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="<?php get_stylesheet_uri()?>categorie-produit/<?php the_field('nom_categorie_2', 21) ?>/">
                    <div class="category category-2 h-300 position-relative cursor-pointer" style="background-image:<?= $catImg2 ?>">
                        <div class="bg-main-orange position-absolute translate-middle translate-middle-lg-none top-50 start-50 w-100 p-2 w-lg-50 top-lg-20 start-lg-0 " style="max-width: 300px;">
                            <h3 class="text-white fw-bold fs-4 text-center text-lg-end m-0"><?php the_field('nom_categorie_2', 21) ?></h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-lg-4">
                <a href="<?php get_stylesheet_uri()?>categorie-produit/<?php the_field('nom_categorie_3', 21) ?>/">
                    <div class="category category-3 h-300 position-relative cursor-pointer" style="background-image:<?= $catImg3 ?>">
                        <div class="bg-main-green position-absolute translate-middle translate-middle-lg-none top-50 start-50 w-100 p-2 w-lg-50 top-lg-20 start-lg-0 " style="max-width: 300px;">
                            <h3 class="text-white fw-bold fs-4 text-center text-lg-end m-0"><?php the_field('nom_categorie_3', 21) ?></h3>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-12 col-lg-8">
                <a href="<?php get_stylesheet_uri()?>categorie-produit/<?php the_field('nom_categorie_4', 21) ?>/">
                    <div class="category category-4 h-300 position-relative cursor-pointer" style="background-image:<?= $catImg4 ?>">
                        <div class="bg-main-orange position-absolute translate-middle translate-middle-lg-none top-50 start-50 w-100 p-2 w-lg-50 top-lg-20 start-lg-0 " style="max-width: 300px;">
                            <h3 class="text-white fw-bold fs-4 text-center text-lg-end m-0"><?php the_field('nom_categorie_4', 21) ?></h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>