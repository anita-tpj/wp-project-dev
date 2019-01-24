<?php get_header(); ?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">

    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

                <div class="blog-post">

                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    
                    <p class="blog-post-content"><?php the_content(); ?></p>
                   
                </div><!-- /.blog-post -->
                <?php comments_template(); ?>
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