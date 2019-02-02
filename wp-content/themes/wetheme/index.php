<?php 
get_header(); ?>
<div class="container">
    <div class="row mb-2">
        <!-- Two columns of featured blog posts loop -->
    <section>
        <div class="row">
                <?php
                $fetaured_posts = new WP_Query('posts_per_page=2' );
                if ($fetaured_posts->have_posts()) :
                    while($fetaured_posts->have_posts()) : $fetaured_posts->the_post(); ?>
                        <?php get_template_part('template_parts/content', 'featured-posts'); ?>
                <?php
                    endwhile;
                endif; 
                wp_reset_postdata();?>
        </div><!-- /.row -->
    </section>
    </div>
</div><!-- /.container -->

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
            </h3>
            <?php
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>
                <?php 
                get_template_part('template_parts/content', get_post_format()); ?>
            <?php
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
                <?php 
                else : ?>
                    <span class="btn btn-outline-secondary disabled">« Newer
                    </span>
                <?php
                endif;

                if( get_previous_posts_link() ) : ?>
                    <span class="btn btn-outline-primary">
                        <?php 
                        previous_posts_link( 'Older »'); ?>
                    </span>
                <?php 
                else : ?>
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