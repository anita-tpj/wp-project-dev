<?php

// Excerpt Length Control
function we_set_excerpt_length(){
  return 45;
}

// Excerpt Link Control
function we_excerpt_more( $more ) {
  $more = "...read more";
  if(is_front_page()) :
    $more = "Read More";
    return '<div class="blog-post-read-more"><a class="post-excerpt-btn btn btn-sm btn-outline-dark" href="'. get_permalink( get_the_ID() ) . '">' . __($more, 'wetheme') . '</a></div>';
  else :
    return '<a class="post-excerpt-link" href="'. get_permalink( get_the_ID() ) . '">' . __($more, 'wetheme') . '</a>';
  endif;
}

//Remove meta tag about WP Version in HEADER
function we_remove_version(){
  return '';
}


//Remove title prefix on Ctaegory, Archive pages
function we_remove_title_prefix($title){
  if(is_tax()){
    return single_term_title( '', false );
  }else{
    return preg_replace('/^\w+:/', '', $title);
  }
}

//Display Post Meta Data
function we_post_meta() {

  $date = get_the_time('d M Y');
  $author = get_the_author();
  $author = '<a href="'.esc_url(get_author_posts_url(get_the_author_meta('ID'))).'">'.esc_html(get_the_author()).'</a>';
  $categories = get_the_category();
  $separator = ", ";
  $cats = "";


  if($categories){
    $i=0;
    foreach($categories as $category){
      if($i > 0){
        $cats .= $separator;
      }
      $cats .= '<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in$s', $category->name).'">'.esc_html($category->name).'</a>';
      $i++;
      }
    }

  $output = 'Posted on: ' . $date . ' | by '.$author.' | Posted in: ' . $cats;
  return $output;
}

//Single Post Navigation
function we_post_nav(){
  $nav = '<nav class="blog-pagination text-center">';
  $prev = get_previous_post_link('%link', '%title »');
  $next = get_next_post_link('%link' ,'« %title');
  $nav.= '<span>'.$next.'</span><span>'.$prev.'</span>';
  
  return $nav;
}

//Blog Post Page Pagination
function we_blog_pagination(){
  $pagination = '<nav class="blog-pagination">';
  $next = get_next_posts_link( "« Newer");
  $prev = get_previous_posts_link( 'Older »');

  if($next) :
    $pagination .= '<span class="btn btn-outline-primary">'.$next.'</span>';
  else :
    $pagination .= '<span class="btn btn-outline-secondary disabled">« Newer</span>';
  endif;

  if($prev) :
    $pagination .= '<span class="btn btn-outline-primary">'.$prev.'</span>';
  else :
    $pagination .= '<span class="btn btn-outline-secondary disabled">Older »</span>';
  endif;

  $pagination .='</nav>';
  
  return $pagination;
}
