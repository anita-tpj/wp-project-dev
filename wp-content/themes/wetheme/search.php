<?php 
get_header(); ?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">
    <h2><?php _e('Search', 'wetheme'); ?></h2>
    <?php 
    get_search_form(); ?>
    <hr>
    <h3><?php _e('Search result for', 'wetheme'); ?>:
        <span class="text-info"><?php the_search_query(); ?></span>
    </h3>
    <?php
    if(have_posts()) :
        while(have_posts()) : the_post();
            get_template_part('template_parts/content', get_post_format()); ?>
    <?php
        endwhile;
    else: ?>
        <p><?php __('No Posts Found', 'wetheme') ?></p>
    <?php
    endif; ?>
    ?>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <?php 
    get_sidebar(); ?>
</aside><!-- /.blog-sidebar -->
</div><!-- /.row -->
</main><!-- /.container -->

<?php 
get_footer(); ?>