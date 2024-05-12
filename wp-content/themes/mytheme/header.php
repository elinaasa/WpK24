<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <div
            class="header-top-left logo ">
            <?php the_custom_logo('custom-logo'); ?>
        </div>
        <div class="container">
            <div
                class="header-top-right">

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'nav-bar'
                    )
                );
                ?>
            </div>
        </div>
    </header>