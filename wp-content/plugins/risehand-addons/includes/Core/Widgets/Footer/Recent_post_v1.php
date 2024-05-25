<?php
namespace Risehandaddons\Core\Widgets\Footer;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Recent_post_v1 extends \Elementor\Widget_Base{
    public function get_name(){
           return 'risehand-recent-post-v1';
    }
       public function get_title()
       {
           return __('Recent Post V1' , 'risehand-addons');
       }
       public function get_icon()
       {
           return 'icon-risehand-svg';
       }
       public function get_categories()
       {
           return ['104'];
       }
       protected function register_controls() {
        // Content controls start 
        $this->start_controls_section(
            'recentpost_content',
            [
                'label' => esc_html__( 'Post Content', 'risehand-addons' ),
            ]
        ); 
            // Meta Type
        $this->add_control(
            'date_or_cat',
            [
                'label' => esc_html__('Meta Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'date' => esc_html__('Date', 'risehand-addons'),
                    'category' => esc_html__('Category', 'risehand-addons'),
                ],
                'default' => 'date',
                
            ]
        ); 
        // Post Count
        $this->add_control(
            'post_count',
            [
                'label' => esc_html__('Post Count', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '4',
                
            ]
        ); 
        // Category
        $this->add_control(
            'query_category',
            [
                'label' => esc_html__('Category', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => risehand_get_blog_categories(),
                'multiple' => true, 
            ]
        ); 
        // Title Color
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'group' => esc_html__('Styling', 'risehand-addons'),
                'selectors' => [
                    '{{WRAPPER}} .news_recent .title_20 a ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .news_recent .title_20 a',
			]
		); 
        // Meta Color
        $this->add_control(
            'meta_color',
            [
                'label' => esc_html__('Meta Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'group' => esc_html__('Styling', 'risehand-addons'),
                'selectors' => [
                    '{{WRAPPER}} .news_recent .date , {{WRAPPER}} .news_recent .content a.cat_gry' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Meta Typography', 'risehand-addons' ),
				'name' => 'meta_typo',
				'selector' => '{{WRAPPER}} .news_recent .date , {{WRAPPER}} .news_recent .content a.cat_gry',
			]
		); 

   $this->end_controls_section();    
           
}
protected function render() {
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
?> 
<div class="recent_posts"> <?php $recent_args = array( 'post_type' => 'post', 'ignore_sticky_posts' => true, 'posts_per_page' => $settings['post_count'], 'orderby' => 'date', ); if ($settings['query_category']) { $recent_args['tax_query'] = array( array( 'taxonomy' => 'category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $blog_grid_query = new \WP_Query($recent_args); while ($blog_grid_query->have_posts()) : $blog_grid_query->the_post();?> <div class="news_recent d_flex <?php if(has_post_thumbnail()): ?> image_s <?php endif;?>"> <?php if(has_post_thumbnail()): ?> <a class="image img_obj_fit_center" href="<?php echo esc_url(get_permalink()); ?>"> <?php the_post_thumbnail(); ?> </a> <?php endif;?> <div class="content"> <?php if($settings['date_or_cat'] == "category"): ?> <?php do_action('risehand_theme_blog_category'); ?> <?php else: ?> <div class="date"><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></div> <?php endif; ?> <?php the_title( '<div class="title_20 trim-2"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" class="mb_0">', '</a></div>' ); ?> </div> </div> <?php endwhile; ?> <?php wp_reset_postdata(); ?></div> 
<?php 
}
}