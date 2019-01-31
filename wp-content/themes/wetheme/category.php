<?php 
get_header(); 
?>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
    From the Firehose
    </h3>
    <?php
        if(have_posts()) :
            while(have_posts()) : the_post();
                get_template_part('template_parts/content'); ?>
    <?php
            endwhile;
        endif;
    ?>

    <nav class="blog-pagination">
    <?php 
    if( get_next_posts_link() ) : ?>
        <span class="btn btn-outline-primary">
            <?php
            next_posts_link( '« Newer'); ?>
        </span>
    <?php else : ?>
        <span class="btn btn-outline-secondary disabled">« Newer
        </span>
    <?php
    endif;

    if( get_previous_posts_link() ) : ?>
        <span class="btn btn-outline-primary">
            <?php 
            previous_posts_link( 'Older »'); ?>
        </span>
    <?php else : ?>
        <span class="btn btn-outline-secondary disabled">Older »
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