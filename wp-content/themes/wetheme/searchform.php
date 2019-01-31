<form role="search" method="get" id="searchform" class="searchform form-inline mt-2 mt-md-0" action="<?php echo home_url('/'); ?>">
    <div class="input-group mb-3">
    <input type="text" id="search" class="form-control" name="s" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" value="<?php the_search_query(); ?>">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><?php _e('Submit', 'wetheme'); ?></button>
    </div>
    </div>
</form>