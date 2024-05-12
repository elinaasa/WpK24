<?php

/**
 * Template Name: About Us Page
 */

?>

<?php get_header(); ?>

<div class="about-container m-3">
    <h1><?php the_title(); ?></h1>
    <div class="about-content m-3">
        <?php get_template_part("inc/section", "content"); ?>
    </div>


</div>


<?php get_footer(); ?>