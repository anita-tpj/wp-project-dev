<?php 
get_header(); 
?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">
    <header class="page-header">
        <?php 
        the_archive_title('<h3 class="page-title pb-3 mb-4 font-italic border-bottom">', '</h3>');
        the_archive_description('<div class="taxonomy-description">','</div>');
        ?>
    </header>
    <?php
    if(have_posts()) :
        while(have_posts()) : the_post();
            get_template_part('template_parts/content', get_post_format());
        endwhile;
    else: ?>
    <p><?php __('No Posts Found', 'wetheme') ?></p>
    <?php
    endif; ?>

    <nav class="blog-pagination">
    <?php 
    if( get_next_posts_link() ) : ?>
        <span class="btn btn-outline-primary">
            <?php
            next_posts_link( '« Newer'); ?>
        </span>
    <?php else : ?>
        <span class="btn btn-outline-secondary disabled"><?php _e('« Newer', 'wetheme'); ?>
        </span>
    <?php
    endif;

    if( get_previous_posts_link() ) : ?>
        <span class="btn btn-outline-primary">
            <?php 
            previous_posts_link( 'Older »'); ?>
        </span>
    <?php else : ?>
        <span class="btn btn-outline-secondary disabled"><?php _e('Older »', 'wetheme'); ?>
        </span>
    <?php
    endif; ?>
    </nav>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <?php 
    get_sidebar(); ?>
</aside><!-- /.blog-sidebar -->
</div><!-- /.row -->
</main><!-- /.container -->

<?php 
get_footer(); ?>