<?php 
$args = array(
            'numberposts' => 3,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true );

        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ) : ?>
            <div class="col-md-4"><!-- /.col-md-4 -->
            <?php 
            if(has_post_thumbnail()) : ?>
                <div class="blog-post-thumb">
                    <?php 
                    the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?> 
                </div>
            <?php
            endif; ?>
            
            <h2 class="blog-post-title">
                <a href="<?php the_permalink($recent["ID"]); ?>">
                    <?php 
                    echo $recent["post_title"] ?>
                </a>
            </h2>
        
            <div class="blog-post-meta">
                <?php echo we_post_meta(); ?>
            </div>
        
            <p class="blog-post-excerpt">
                <?php the_excerpt(); ?>
            </p>
        </div><!-- /.col-md-4 -->
        <?php
        endforeach;

wp_reset_query(); ?>
        