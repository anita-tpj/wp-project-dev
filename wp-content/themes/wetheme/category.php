<?php get_header(); ?>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
<div class="col-md-6 px-0">
    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
</div>
</div>

<div class="row mb-2">
<div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary">World</strong>
        <h3 class="mb-0">
        <a class="text-dark" href="#">Featured post</a>
        </h3>
        <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#">Continue reading</a>
    </div>
    <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
    </div>
</div>
<div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-success">Design</strong>
        <h3 class="mb-0">
        <a class="text-dark" href="#">Post title</a>
        </h3>
        <div class="mb-1 text-muted">Nov 11</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#">Continue reading</a>
    </div>
    <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
    </div>
</div>
</div>
</div>

<main role="main" class="container">
<div class="row">
<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic border-bottom">
    From the Firehose
    </h3>

    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

                <div class="blog-post">

                <?php 
                if(has_post_thumbnail()) { ?>
                    <div class="blog-post-image">
                        <?php 
                        the_post_thumbnail('full', array('class' => 'img-fluid')); ?> 
                    </div>
                <?php
                } ?>
                    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="blog-post-meta">
                        <span class="date"><?php the_time('g:i a'); ?></span>
                        <span class="time"><?php the_time('d M Y'); ?></span>
                        <span class="post-author">by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></span>
                        <span class="tag"><?php the_category(','); ?></span>
                    </div>
                    <p class="blog-post-excerpt"><?php the_excerpt(); ?></p>
                    <div class="blog-post-read-more"><a href="<?php the_permalink(); ?>" type="button" class="btn btn-sm btn-outline-dark"><?php echo __('Read More', 'wetheme'); ?></a></div>
                </div><!-- /.blog-post -->

    <?php
            }
        }
    ?>

    <nav class="blog-pagination">
            <?php 
                if( get_next_posts_link() ) : ?>
                    <span class="btn btn-outline-primary">
                        <?php
                        next_posts_link( '« Newer'); ?>
                    </span>
                <?php else: ?>
                    <span class="btn btn-outline-secondary disabled">« Newer
                    </span>
                <?php
                endif;

                  if( get_previous_posts_link() ) : ?>
                    <span class="btn btn-outline-primary">
                        <?php 
                        previous_posts_link( 'Older »'); ?>
                    </span>
                <?php else: ?>
                    <span class="btn btn-outline-secondary disabled">Older »
                    </span>
                <?php
                endif; ?>

    </nav>

</div><!-- /.blog-main -->

<aside class="col-md-4 blog-sidebar">
    <?php get_sidebar(); ?>
</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>