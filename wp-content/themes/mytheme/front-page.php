<?php
get_header();
?>

<section class="hero">
    <?php the_custom_header_markup(); ?>
    <div>
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        else:
            _e('Sorry, no posts matched your criteria.', 'esimerkki');
        endif;
        ?>
    </div>
</section>

<main class="products-container">
    <h2 class="h2">Our Products</h2>

    <div
        class="row d-flex flex-row justify-content-center">
        <?php
        $args = array(
            'cat' => get_cat_ID('product'),
            'posts_per_page' => 3
        );
        $products_query = new WP_Query($args);
        if ($products_query->have_posts()):
            while ($products_query->have_posts()):
                $products_query->the_post();
                ?>

                <div
                    class="col-sm card p-2 m-3">
                    <h4 class="m-3">
                        <?php the_title(); ?>
                    </h4>
                    <div class="card-img-top">
                        <div
                            class="card-body card-frontpage">
                            <a class="figure-img img-fluid rounded"
                                href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('custom-thumbnail'); ?>
                            </a>

                            <a
                                class="btn
                                    btn-outline-secondary mt-4">Read
                                More
                            </a>

                        </div>
                    </div>

                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            _e('Sorry, no products found.', 'esimerkki');
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>