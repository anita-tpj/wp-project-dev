<?php
/*
* Template Name: Full Width Page
*/

get_header(); ?>

<main role="main" class="container">
<div class="row">
<div class="col-md-12 blog-main">

    <?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                <p class="blog-post-content"><?php the_content(); ?></p>
            </div><!-- /.blog-post -->
            <?php comments_template(); ?>
    <?php
        endwhile;
    endif;
    ?>

</div><!-- /.blog-main -->
</div><!-- /.row -->
</main><!-- /.container -->
<?php 
get_footer(); ?>