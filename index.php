<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<header>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</header>
<body>
    <header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </div>
    </header>

    <div class="main">
    <div class="container">

    <?php if(have_posts()) : ?>
        <?php while(have_posts()): the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <div class="meta">
                Created By: <?php the_author(); ?> on <?php the_date("l jS \of F Y h:i:s A"); ?>
            <div>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Sorry, No posts were found.'); ?>

    <?php endif; ?>
    </div>
    </div>

    <footer>
    <div class="container">
        <p>&copy; <?php the_date("Y"); ?> - <?php bloginfo('name'); ?></p>
    </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>