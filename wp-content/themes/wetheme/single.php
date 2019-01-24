<?php get_header(); ?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">

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
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <div class="blog-post-meta">
                        <span class="date"><?php the_time('g:i a'); ?></span>
                        <span class="time"><?php the_time('d M Y'); ?></span>
                        <span class="post-author">by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
                        <span class="tag"><?php the_category(','); ?></span>
                    </div>
                    <p class="blog-post-content"><?php the_content(); ?></p>
                    <?php 
                    wp_link_pages(array(
                        'before'           => '<p class="blog-post-page-link text-center">' . __( 'Pages:', 'wetheme' ),
                        'after'            => '</p>'
                        )
                    ); ?>
                    <div class="blog-post-tags"><?php the_tags(); ?></div>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <span>
                        <?php
                        next_post_link( '%link' ,'« %title'); ?>
                    </span>

                    <span>
                        <?php 
                        previous_post_link('%link', '%title »'); ?>
                    </span>
                </nav>
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