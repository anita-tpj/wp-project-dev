<?php

// Excerpt Length Control
function we_set_excerpt_length(){
  return 45;
}

// Excerpt Link Control
function we_excerpt_more( $more ) {
  if(is_front_page()) :
    return '<div class="blog-post-read-more"><a class="post-excerpt-btn btn btn-sm btn-outline-dark" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'wetheme') . '</a></div>';
  else :
    return '<a class="post-excerpt-link" href="'. get_permalink( get_the_ID() ) . '">' . __('...read more', 'wetheme') . '</a>';
  endif;
}

