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
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </header>

    <div class="main">

    <?php if(have_posts()) : ?>
        post found.
    <?php else : ?>
        <?php echo wpautop('Sorry, No posts were found.'); ?>

    <?php endif; ?>

    </div>
</body>

</html>