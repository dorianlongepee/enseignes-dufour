<?php

/**
 * Template for basic page display
 * 
 * @package WordPress
 * @subpackage themedufour
 * @since themedufour 1.0
 */

get_header();

if(!is_account_page() || is_user_logged_in()){
    get_template_part('template-parts/banner');
} else{
    echo "<div class='custom-margin'></div>";
}
?>


<div class="container">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>



<?php
get_footer();
