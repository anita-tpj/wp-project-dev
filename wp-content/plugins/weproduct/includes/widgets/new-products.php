<?php
Class WE_New_Products_Widget extends WP_Widget {
    /**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'wep_new_product_widget', // Base ID
			'New products', // Name
			array('description' => __( 'Displays your newest products. Outputs the product thumbnail, title and date'))
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        // outputs the content of the widget
		extract($args);
		extract($instance);

        $title = apply_filters( 'widget_title', $title);
        $numberOfProducts = $instance['numberOfProducts'];

		global $post;
        add_image_size('newproducts_widget_size', 85, 45, false);
        $query = new WP_Query();
        $query -> query('post_type=weproduct&posts_per_page=' . $numberOfProducts);

		if ( ! $query->have_posts() ) {
			return;
		}
		?>
		<?php echo $before_widget; ?>
		<?php
		if ( $title ) {
            echo $before_title . $title . $after_title;
		}
		?>
		<ul>
			<?php foreach ( $query->posts as $new_product ) : ?>
				<?php
				$product_title = get_the_title( $new_product->ID );
                $title      = ( ! empty( $product_title ) ) ? $product_title : __( '(no title)' );
				$thumbnail = get_the_post_thumbnail($new_product->ID, 'newproducts_widget_size');
				$desc = get_the_excerpt($new_product->ID);
				?>
				<li>
					<?php if ( has_post_thumbnail($new_product->ID) ) : ?>
						<span class=""><?php echo $thumbnail; ?></span>
                    <?php else: ?>
                        <span class="nothumb"></span>
					<?php endif; ?>
					<a href="<?php the_permalink( $new_product->ID ); ?>"><?php echo $title ; ?></a>
					<?php /*echo $desc;*/ ?> 
				</li>
			<?php endforeach; ?>
		</ul>
		<?php

		echo $after_widget;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
        // outputs the options form on admin
        $default = array(
            'title'=>'Our new products',
            'numberOfProducts' => 3
    );
        $instance = wp_parse_args( (array) $instance, $default); 
	?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'weproducts'); ?> </label>
        <input 
            type="text" 
            class="widefat" 
            id="<?php echo $this->get_field_id('title'); ?>"
            name="<?php echo $this->get_field_name('title'); ?>"
            value="<?php echo esc_attr($instance['title']); ?>">
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('numberOfProducts'); ?>"><?php _e('Number of products to show:', 'weproducts'); ?> </label>
        <input 
            type="number" 
            class="tiny-text" 
            id="<?php echo $this->get_field_id('numberOfProducts'); ?>"
            name="<?php echo $this->get_field_name('numberOfProducts'); ?>"
            value="<?php echo esc_attr($instance['numberOfProducts']); ?>"
			step="1" 
			min="1"
			size="3">
        </p>
    <?php    
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
        $instance = array();
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['numberOfProducts'] = strip_tags($new_instance['numberOfProducts']);

        return $instance;
	}
}