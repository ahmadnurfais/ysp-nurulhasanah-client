<?php
/**
 * @package Risehand Addons
 * @subpackage Widgets
 * @since 1.0.0
 */
add_action( 'widgets_init', function(){
	register_widget( 'risehand_Recent_Posts' );
});
class risehand_Recent_Posts extends \WP_Widget {
 
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'risehand_widget_recented_entries',
			'description'                 => __( 'Your most recent Posts.' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'recented-posts', __( 'Risehand - Recent Posts' ), $widget_ops );
		$this->alt_option_name = 'risehand_widget_recented_entries';
	}
 
	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number ) {
			$number = 5;
		}
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
	 
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );
  
		if ($r->have_posts()) :
        
		?>
		<?php echo wp_kses_post($args['before_widget']); ?>
		<?php if ( $title ) {
			echo wp_kses_post($args['before_title'] . $title . $args['after_title']);
		} ?>
          <div class="recent_posts">
		<?php while ( $r->have_posts() ) : $r->the_post();
            $image = get_the_post_thumbnail_url();
            $featured_img_url = get_the_post_thumbnail_url(); ?> 
                <div class="news_recent d_flex<?php if(has_post_thumbnail()): ?> image_s<?php endif; ?>">
                    <?php if(has_post_thumbnail()): ?>
                        <a class="image img_obj_fit_center" href="<?php echo esc_url(get_permalink()); ?>">
                            <img class="img-fluid trans" src="<?php echo esc_url($featured_img_url); ?>" alt="<?php the_title(); ?>" />
                        </a>
                    <?php endif; ?> 
                     <div class="content">
					 <?php if ( $show_date):  
                    	do_action('risehand_theme_blog_time');
                     endif; ?>
                     <h4 class="title_20 trim-2">
                        <?php the_title('<a href="' .  esc_url(get_permalink()) . '">', '</a>'); ?>
                    </h4> 
                    </div>
                </div>   
		<?php endwhile; ?>
		</div>
		<?php echo wp_kses_post($args['after_widget']); ?>
		<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();
		endif;  
	} 
	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		return $instance;
	}
 
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php esc_html_e( 'Number of posts to show:' ); ?></label>
		<input class="tiny-text" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="number" step="1" min="1" value="<?php echo esc_attr($number); ?>" size="3" /></p>

		<p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_date' )); ?>" />
		<label for="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>"><?php esc_html_e( 'Display post date?' ); ?></label></p>
		<?php
	}
}

