<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="col-sm card p-2 m-3">
            <div class="card-img-top">
                <div
                    class="card-body card-frontpage">
                    <a class="products-img"
                        href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('custom-thumbnail'); ?>
                    </a>

                    <div class="post-content">
                        <h3><?php the_title(); ?>
                        </h3>

                        <?php the_excerpt(); ?>


                        <a href="<?php the_permalink(); ?>"
                            class="btn btn-outline-secondary card-btn">Read
                            more</a>
                    </div>

                </div>
            </div>

        </div>

    <?php endwhile; else: endif; ?>