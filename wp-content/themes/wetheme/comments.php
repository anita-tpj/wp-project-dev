<div class="blog-post-comment-wrap">
    <?php 
    foreach($comments as $comment): ?>
        <h4><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> - <small><?php comment_date(); ?></small></h4>
        <div class="blog-post-comment-body">
            <p><?php comment_text(); ?></p>
        </div>
    <?php 
    endforeach; ?> <!-- blog-post-comment-body -->
</div> <!-- comment-wrap -->

<?php
if(comments_open()) : ?>
    <h4><?php _e('Leave a Comment', 'wetheme'); ?></h4>
    <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentsform">
        <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' />

    <div class="form-group">
        <label for="aouthor"><?php _e('Name / Alias (required)', 'wetheme'); ?></label>
        <input type="text" class="form-control" name ="author" id="author" placeholder="John Doe" required>
    </div>

    <div class="form-group">
    <label for="email"><?php _e('Email address (required, not showen)', 'wetheme'); ?></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
    </div>

    <div class="form-group">
    <label for="url"><?php _e('Website (optional)', 'wetheme'); ?></label>
    <input type="url" class="form-control" name="url" id="url" placeholder="http://example.com">
    </div>

    <div class="form-group">
    <label for="comments"><?php _e('Comment', 'wetheme'); ?></label>
    <textarea class="form-control" name = "comment" id="comments" rows="7" cols='60' required></textarea>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary"><?php _e('Add Comment', 'wetheme'); ?></button>
    </div>
    </form>
<?php
else :
    _e('Comments are closed', 'wetheme');
endif;