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
        <?php get_template_part('template_parts/content', 'page'); ?>
    <?php
        endwhile;
    else: ?>
        <p><?php __('No Posts Found', 'wetheme') ?></p>
    <?php
    endif; ?>

</div><!-- /.blog-main -->
</div><!-- /.row -->
</main><!-- /.container -->
<?php 
get_footer(); ?>