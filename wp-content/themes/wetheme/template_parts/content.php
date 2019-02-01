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
        <span class="date"><?php the_time('g:i a'); ?></span>
        <span class="time"><?php the_time('d M Y'); ?></span>
        <span class="post-author">by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
        <span class="tag"><?php the_category(','); ?></span>
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
        <div class="blog-post-read-more">
            <a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-outline-dark">
                <?php echo __('Read More', 'wetheme'); ?>
            </a>
        </div>
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

        <nav class="blog-pagination text-center">
            <span>
                <?php
                next_post_link( '%link' ,'« %title'); ?>
            </span>

            <span>
                <?php 
                previous_post_link('%link', '%title »'); ?>
            </span>
        </nav>
        <?php comments_template(); ?>
    <?php 
    else : ?>
        </article><!-- /.blog-post -->
    <?php
    endif; ?>