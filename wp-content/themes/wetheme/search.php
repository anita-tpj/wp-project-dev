<?php get_header(); ?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">
    <h2><?php _e('Search', 'wetheme'); ?></h2>
    <?php get_search_form(); ?>
    <hr>
    <h3><?php _e('Search result for', 'wetheme'); ?>:
        <span class="text-info"><?php the_search_query(); ?></span>
    </h3>
    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

                <div class="blog-post">

                <?php 
                if(has_post_thumbnail()) { ?>
                    <div class="blog-post-image">
                        <?php 
                        the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 
                    </div>
                <?php
                } ?>
                    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog-post-meta">
                        <span class="date"><?php the_time('g:i a'); ?></span>
                        <span class="time"><?php the_time('d M Y'); ?></span>
                        <span class="post-author">by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
                        <span class="tag"><?php the_category(','); ?></span>
                    </div>
                    <p class="blog-post-excerpt"><?php the_excerpt(); ?></p>
                    <div class="blog-post-read-more"><a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-outline-dark"><?php echo __('Read More', 'wetheme'); ?></a></div>
                </div><!-- /.blog-post -->

    <?php
            }
        }
    ?>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <?php get_sidebar(); ?>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>