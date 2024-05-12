<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <?php the_content(); ?>

        <?php
        $categories = get_the_category();
        foreach ($categories as $category): ?>
            <a
                href="<?php echo get_category_link($category->term_id); ?>">
                <?php echo $category->name; ?>
            </a>
        <?php endforeach; ?>
    <?php endwhile; else: endif; ?>