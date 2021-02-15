<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First wp Them</title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header-area">
        <div class="header-content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="content">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description') ?></p>
            </div>

        </div>
    </header>
    <div>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <div class="post_content_div">
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>

        <?php
            endwhile;

        else : echo 'post nai';

        endif;
        ?>
    </div>
    <footer>
        This theme create by mahbub hasan
    </footer>

    <?php wp_footer(); ?>
</body>

</html>