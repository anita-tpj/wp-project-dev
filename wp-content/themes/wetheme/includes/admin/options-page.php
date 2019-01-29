<?php
function we_theme_opts_page() { ?>
    <div class="wrap">
        <div class="card bg-light">
        <h5><?php _e('Wall-E Theme Options', 'wetheme'); ?></h5>
            <div class="card-body">
                <form method="post" action="admin-post.php">
                <input type="hidden" name="action" value="we_save_options">
                <?php wp_nonce_field('we_option_verify'); ?>
                    <h5><?php _e('Social icons', 'wetheme'); ?></h5>
                    <div class="form-group">
                        <label for="inputTwitter"><?php _e('Twitter', 'wetheme'); ?></label>
                        <input type="text" class="form-control" id="inputTwitter"  name="we_inputTweeter" placeholder="enter twitter link">
                    </div>
                    <div class="form-group">
                        <label for="inputFacebook"><?php _e('Facebook', 'wetheme'); ?></label>
                        <input type="text" class="form-control" id="inputFacebook"  name="we_inputFacebook" placeholder="enter facebook link">
                    </div>

                    <div class="form-group">
                        <label for="inputYoutube"><?php _e('Youtube', 'wetheme'); ?></label>
                        <input type="text" class="form-control" id="inputYoutube"  name="we_inputYoutube" placeholder="enter youtube link">
                    </div>

                    <h5><?php _e('Logo', 'wetheme'); ?></h5>
                    <div class="form-group">
                        <label for="logoType"><?php _e('Logo Type', 'wetheme'); ?></label>
                        <select class="form-control" id="logoType">
                            <option value="1"><?php _e('Site Name', 'wetheme'); ?></option>
                            <option value="2"><?php _e('Image', 'wetheme'); ?></option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Logo Image" name="we_inputLogoImg">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputLogoImg"><?php _e('Upload', 'wetheme'); ?></button>
                        </div>
                    </div>
                    <h5><?php _e('Footer', 'wetheme'); ?></h5>
                    <div class="form-group">
                        <label for="inputFooterText"><?php _e('Footer Text(HTML Alowed)','wetheme'); ?></label>
                        <textarea class="form-control" id="inputFooterText" name="we_inputFooterText" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-dark"><?php _e('Save and Update'); ?></button>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
}