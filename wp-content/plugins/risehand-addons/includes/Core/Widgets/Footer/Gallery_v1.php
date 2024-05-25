<?php
namespace Risehandaddons\Core\Widgets\Footer;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Gallery_v1 extends \Elementor\Widget_Base{
    public function get_name(){
           return 'risehand-gallery-v1';
    }
       public function get_title()
       {
           return __('Gallery V1' , 'risehand-addons');
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
            'gallery_content',
            [
                'label' => esc_html__( 'Gallery Content', 'risehand-addons' ),
            ]
        ); 
        $this->add_control(
            'n_post_count',
            [
                'label' => esc_html__('Post Count', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '4',
               
            ]
        );
    
        // Order By
        $this->add_control(
            'n_query_orderby',
            [
                'label' => esc_html__('Order By', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'date' => esc_html__('Date', 'risehand-addons'),
                    'title' => esc_html__('Title', 'risehand-addons'),
                    'menu_order' => esc_html__('Menu Order', 'risehand-addons'),
                    'rand' => esc_html__('Random', 'risehand-addons'),
                ],
                'default' => 'date',
               
            ]
        );
    
        // Order
        $this->add_control(
            'n_query_order',
            [
                'label' => esc_html__('Order', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'DESC' => esc_html__('DESC', 'risehand-addons'),
                    'ASC' => esc_html__('ASC', 'risehand-addons'),
                ],
                'default' => 'DESC',
               
            ]
        );
    
        // Category
        $this->add_control(
            'n_query_category',
            [
                'label' => esc_html__('Category', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => risehand_get_portfolio_categories(),
                'multiple' => true,
               
            ]
        );
    
        // Image Height
       
        $this->add_control(
            'img_height',
            [
                'label' => __('Image Height', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 1000,
                'step'    => 1,  
                'default'    => 70,  
                'selectors' => [
                    '{{WRAPPER}} .gallery_sec .d_flex .gallery-box a img ' => 'height: {{VALUE}}px!important;',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __('Arrow Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_sec .d_flex .gallery-box a::before ' => 'color: {{VALUE}}; =',
                ], 
            ]
        ); 
        $this->add_control(
            'overlay_bg',
            [
                'label' => __('Overlay Background  Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .gallery_sec .d_flex .gallery-box a::before ' => 'background: {{VALUE}};',
                ], 
            ]
        ); 
   
   $this->end_controls_section();    
           
}
protected function render() {
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
 
?>  
<section class="gallery_sec"> <div class="d_flex"> <?php $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : ''; $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : ''; $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : ''; $args = array( 'post_type' => 'portfolio', 'ignore_sticky_posts' => true, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, ); $portfolio_grid_query = new \WP_Query( $args ); ?> <?php while ($portfolio_grid_query->have_posts()) : ?> <?php $portfolio_grid_query->the_post(); ?> <?php global $post; ?> <?php // portfolio card ?> <?php if (has_post_thumbnail()): ?> <div class="gallery-box"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link img_obj_fit_center trans"> <?php the_post_thumbnail('risehand-image-100-100 trans'); ?> </a> </div> <?php endif; ?> <?php // portfolio card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> </section>
<?php 
}
}