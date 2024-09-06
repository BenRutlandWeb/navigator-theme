<div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div>
                <?php the_title(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>