<article class="blog-post">
    <div class="blog-post-title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <p class="blog-post-meta">
        <?php the_time('F j, Y g:i a'); ?> | by <a href="<?php the_author_link(); ?>"><?php the_author_posts_link(); ?></a> | Posted in: <?php the_category(', '); ?>
    </p>
    <p class="blog-post-excerpt">
        <?php the_excerpt(); ?>
    </p>
    <div class="blog-post-read-more">
        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-outline-dark">
            <?php echo __('Read More', 'wetheme'); ?>
        </a>
    </div>
</article>