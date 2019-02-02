<?php
/*
*Template name: Home Page
*/

get_header(); ?>

<section id="headerCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#headerCarousel" data-slide-to="1"></li>
        <li data-target="#headerCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
            <div class="carousel-caption d-none d-md-block text-left">
                <h5>Example headline</h5>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-dark" href="#" role="button">Learn more</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
            <div class="carousel-caption d-none d-md-block">
                <h5>Another example headline</h5>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <!-- <img src="..." class="d-block w-100" alt="..."> -->
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
            <div class="carousel-caption d-none d-md-block text-right">
                <h5>One more for good measure.</h5>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-dark" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>

<main role="main" class="container">
    <section>
        <div class="row">
            <div class="blog-main">
                <?php
                if(have_posts()) :
                    while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template_parts/content', 'page'); ?>
                <?php
                    endwhile;
                else: ?>
                    <p><?php __('No Posts Found', 'wetheme') ?></p>
                <?php
                endif; ?>
            </div><!-- /.blog-main -->
        </div><!-- /.row -->
    </section>

<!-- Three columns of text below the carousel -->
    <section>
        <div class="row">
            <div class="col-md-4">
                <?php 
                if(is_active_sidebar('we_hp_box1')) :
                    dynamic_sidebar('we_hp_box1');
                endif; ?>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <?php 
                if(is_active_sidebar('we_hp_box2')) :
                    dynamic_sidebar('we_hp_box2');
                endif; ?>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
            <?php 
                if(is_active_sidebar('we_hp_box3')) :
                    dynamic_sidebar('we_hp_box3');
                endif; ?>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    <section>

<!-- Three columns of recent blog post loop -->
    <section>
        <div class="row">
            <?php get_template_part('template_parts/content', 'recent-posts'); ?>
        </div><!-- /.row -->
    </section>
</main><!-- /.container -->
<?php 
get_footer(); ?>