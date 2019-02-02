<article class="blog-post">
    <?php 
    if(has_post_thumbnail()) : ?>
        <div class="blog-post-thumb">
            <?php 
            the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 
        </div>
    <?php
    endif; ?>
  
    <h2 class="blog-post-title">
    <?php
    if(is_single()) : ?>
        <?php 
        the_title(); ?>
    <?php
    else : ?>
        <a href="<?php the_permalink(); ?>">
            <?php 
            the_title(); ?>
        </a>
    <?php
    endif; ?>
    </h2>

    <div class="blog-post-meta">
        <?php echo we_post_meta(); ?>
    </div>

    <?php 
    if(is_single()) : ?>
        <?php
        the_content(); ?>
    <?php
    else : ?>
        <p class="blog-post-excerpt">
            <?php the_excerpt(); ?>
        </p>
    <?php
    endif; ?>

    <?php
    if(is_single()) :?>
        <?php /*
        wp_link_pages(array(
            'before'           => '<p class="blog-post-page-link text-center">' . __( 'Pages:', 'wetheme' ),
            'after'            => '</p>'
            )
        ); */?>
            <div class="blog-post-tags"><?php the_tags(); ?></div>
    </article><!-- /.blog-post -->
           
        <?php echo we_post_nav(); ?>
        <?php comments_template(); ?>
    <?php 
    else : ?>
        </article><!-- /.blog-post -->
    <?php
    endif; ?>