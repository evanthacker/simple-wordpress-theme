<?php get_header(); ?>
    <div class="main">
    <div class="container">

    <?php if(have_posts()) : ?>
        <?php while(have_posts()): the_post(); ?>
            <article class="post">
            <?php if(has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                    <div class="meta">
                        Created By: <?php the_author(); ?> on <?php the_date("l jS \of F Y h:i:s A"); ?>
                    </div>
                    
                <?php endif; ?>
                <?php the_content(); ?>
                <br>
                <a class="button" href="<?php the_permalink(); ?>">
                        Read More
                    </a>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <?php echo wpautop('Sorry, No posts were found.'); ?>

    <?php endif; ?>
    </div>
    </div>

<?php get_footer(); ?>