<?php
get_header();
?>

<section class="hero">
    <div class="hero-text">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_title('<h1>', '</h1>');
                the_content();
            endwhile;
        else:
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
        endif;
        ?>
    </div>
    <?php the_custom_header_markup(); ?>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/uploads/2024/hero2.jpg"
        alt="">
</section>

<?php
get_sidebar();
get_footer();
?>