
<div class="col-md-6">
    <div class="card flex-md-row mb-4 shadow-sm">
    <div class="card-body d-flex flex-column align-items-start">
        <strong class="d-inline-block mb-2 text-primary"><?php the_category(', '); ?></strong>
        <h3 class="mb-0">
            <a class="text-dark" href="<?php the_permalink(); ?>">
                <?php 
                the_title(); ?>
            </a>
        </h3>
        <div class="mb-1 text-muted"><?php echo the_date('M j'); ?></div>
        <p class="blog-post-excerpt card-text mb-auto">
            <?php the_excerpt('more') ?>
        </p>
        <a href="#">Continue reading</a>
    </div>
    <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
    </div>
</div>