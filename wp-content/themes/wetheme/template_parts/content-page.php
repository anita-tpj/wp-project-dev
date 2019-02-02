<article class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-content"><?php the_content(); ?></p>
</article><!-- /.blog-post -->
<?php wp_link_pages(array(
      'before' => '<p class="text-center">' . __( 'Pages:' ),
      'after'  => '</p>'));
?>