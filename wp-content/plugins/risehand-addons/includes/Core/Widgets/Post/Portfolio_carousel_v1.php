<?php
namespace  Risehandaddons\Core\Widgets\Post;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Portfolio_carousel_v1 extends \Elementor\Widget_Base{
    public function get_name()
    {
        return 'risehand-portfolio-carousel-v1';
    }
    public function get_title()
    {
        return __('Portfolio Carousel V1' , 'risehand-addons');
    }
    public function get_icon()
    {
        return 'icon-risehand-svg';
    }
    public function get_categories()
    {
        return ['103'];
    }
    protected function register_controls(){
        $this->start_controls_section(
            'portfolio_car_content',
            [
                'label' => __('Portfolio Settings', 'risehand-addons')
            ]
        );
        $this->add_control(
            'portfolio_type',
            [
                'label' => __('Portfolio Type', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'infinite_scroll'  => __('Infinite Scroll', 'risehand-addons'),
                    'carousel_type' => __('Carousel', 'risehand-addons'), 
                ],
                'default' => 'infinite_scroll',
            ]
        );
        $this->add_control(
            'portfolio_styles',
            [
                'label' => __('Portfolio style', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'style_one'  => __('Style One ', 'risehand-addons'),
                    'style_two' => __('Style Two ', 'risehand-addons'),
                    'style_three' => __('Style Three ', 'risehand-addons'),
                    'style_four' => __('Style Four ', 'risehand-addons'), 
                    'style_five' => __('Style Five ', 'risehand-addons'), 
                ],
                'default' => 'style_one', 
            ]
        );
          
        $this->add_control(
        'n_post_count',
        [ 
            'label'   => esc_html__( 'Number of post', 'risehand-addons' ),
            'type'    =>  \Elementor\Controls_Manager::NUMBER,
            'default' => 9,
            'min'     => 1,
            'max'     => 100,
            'step'    => 1,
        ]); 
        $this->add_control(
            'n_query_orderby',
            [
                'label'   => esc_html__( 'Order By', 'risehand-addons' ),
                'type'    =>  \Elementor\Controls_Manager::SELECT,
                'default' => 'date',
                'options' => array(
                    'date'       => esc_html__( 'Date', 'risehand-addons' ),
                    'title'      => esc_html__( 'Title', 'risehand-addons' ),
                    'menu_order' => esc_html__( 'Menu Order', 'risehand-addons' ),
                    'rand'       => esc_html__( 'Random', 'risehand-addons' ),
                ),
            ]
        );
        $this->add_control(
            'n_query_order',
            [
                'label'   => esc_html__( 'Order', 'risehand-addons' ),
                'type'    =>  \Elementor\Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => array(
                    'DESC' => esc_html__( 'DESC', 'risehand-addons' ),
                    'ASC'  => esc_html__( 'ASC', 'risehand-addons' ),
                ),
            ]
        );
        $this->add_control(
            'n_query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Category', 'risehand-addons'),
			'options' => risehand_get_portfolio_categories(),
			]
        );
        $this->add_control(
            'post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'post_id_not',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
       
        $this->end_controls_section();
           // carouse settings
        $this->start_controls_section('carousel_settings',
           [ 
           'label' => __('Carousel Settings', 'risehand-addons'),
           'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
           'condition' => [
               'portfolio_type' => 'carousel_type'
           ],
           ]
        );
       $this->add_control(
       'desk_top',
           [
           'label' => __('Items Desktop', 'risehand-addons'),
           'type' => \Elementor\Controls_Manager::SELECT,
           'options' => [
               '10' => __('10 Items', 'risehand-addons'),
               '9' => __('9 Items', 'risehand-addons'),
               '8' => __('8 Items', 'risehand-addons'),
               '7' => __('7 Items', 'risehand-addons'),
               '6' => __('6 Items', 'risehand-addons'),
               '5' => __('5 Items', 'risehand-addons'),
               '4' => __('4 Items', 'risehand-addons'),
               '3' => __('3 Items', 'risehand-addons'),
               '2' => __('2 Items', 'risehand-addons'),
               '1' => __('1 Items', 'risehand-addons'),
           ],
           'default' => '3' , 
           ]
       );

       $this->add_control(
           'tablet',
           [
               'label' => __('Items Tablet', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
               '10' => __('10 Items', 'risehand-addons'),
               '9' => __('9 Items', 'risehand-addons'),
               '8' => __('8 Items', 'risehand-addons'),
               '7' => __('7 Items', 'risehand-addons'),
               '6' => __('6 Items', 'risehand-addons'),
               '5' => __('5 Items', 'risehand-addons'),
               '4' => __('4 Items', 'risehand-addons'),
               '3' => __('3 Items', 'risehand-addons'),
               '2' => __('2 Items', 'risehand-addons'),
               '1' => __('1 Items', 'risehand-addons'),
           ],
               'default' => '2' , 
           ]
       );
       $this->add_control(
       'mobile',
           [
           'label' => __('Items Mobile', 'risehand-addons'),
           'type' => \Elementor\Controls_Manager::SELECT,
           'options' => [
               '3' => __('3 Items', 'risehand-addons'),
               '2' => __('2 Items', 'risehand-addons'),
               '1' => __('1 Items', 'risehand-addons'),
           ],
           'default' => '2' , 
           ]
       );
       $this->add_control(
           'mini_mobile',
           [
           'label' => __('Items Mini', 'risehand-addons'),
           'type' => \Elementor\Controls_Manager::SELECT,
           'options' => [
               '3' => __('3 Items', 'risehand-addons'),
               '2' => __('2 Items', 'risehand-addons'),
               '1' => __('1 Items', 'risehand-addons'),
           ],
           'default' => '1' , 
           ]
       );
       
       $this->add_control(
           'op_hr_m',
           [
                   'type' => \Elementor\Controls_Manager::DIVIDER, 
           ]
       );
       $this->add_control(
           'loop_enable',
           [
               'label' => __('Loop Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => true,
               'default' => true,
           ]
       ); 
       $this->add_control(
           'op_hr_2',
           [
               'type' => \Elementor\Controls_Manager::DIVIDER, 
           ]
       );
       $this->add_control(
           'margin',
           [
               'label' => __('Margin', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100,
               'step'    => 1,  
               'default'    => 20,  
           ]
       ); 
       $this->add_control(
           'op_hr_365',
           [
               'type' => \Elementor\Controls_Manager::DIVIDER, 
           ]
       );
           
       $this->add_control(
           'arrow_enable',
           [
               'label' => __('Arrow Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => true,
               'default' => true,
           ]
       );
       $this->add_control(
           'arrow_post',
               [
               'label' => __('Arrow Position', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'post_default' => __('Position One', 'risehand-addons'),
                   'post_default_left' => __('Position One Left', 'risehand-addons'),
                   'post_default_right' => __('Position One Right', 'risehand-addons'),
                   'post_two' => __('Position Two', 'risehand-addons'),
                   'post_three' => __('Position Three', 'risehand-addons'),
                   'post_four' => __('Position Four', 'risehand-addons'),
               ],
               'default' => 'post_default' , 
           ]
       );
       $this->add_control(
           'dot_enable',
           [
               'label' => __('Dot Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => true,
               'default' => true,
           ]
       ); 
       $this->add_control(
           'dot_type',
               [
               'label' => __('Dot Type', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'bullets' => __('Bullets', 'risehand-addons'),
                   'progressbar' => __('Progressbar', 'risehand-addons'),
                   'fraction' => __('Fraction', 'risehand-addons'), 
               ],
               'default' => 'bullets' , 
           ]
       );
       $this->add_responsive_control(
           'dot_alignment',
           [
               'label' => __('Dot alignments', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::CHOOSE,
               'options' => [
                 'left' => [
                   'title' => __( 'Dot Left', 'risehand-addons' ),
                   'icon' => 'eicon-text-align-left',
                 ],
                 'center' => [
                   'title' => __( 'Dot Center', 'risehand-addons' ),
                   'icon' => 'eicon-text-align-center',
                 ],
                 'right' => [
                   'title' => __( 'Dot Right', 'risehand-addons' ),
                   'icon' => 'eicon-text-align-right',
                 ],
               ],
               'default' => 'center',
               'toggle' => true,
               'selectors' => [
                   '{{WRAPPER}} .port-pagination.common-dots ' => 'text-align: {{VALUE}};',
               ], 
           ]
       ); 
       $this->add_control(
           'op_hr_365c',
           [
               'type' => \Elementor\Controls_Manager::DIVIDER, 
           ]
       );
           
       $this->add_control(
           'centered_enable',
           [
               'label' => __('Center Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => true,
               'default' => true,
           ]
       ); 
       
       $this->add_control(
           'op_hr_3',
           [
               'type' => \Elementor\Controls_Manager::DIVIDER, 
           ]
       ); 
       $this->add_control(
           'duration',
           [
               'label' => __('Autoplay Speed', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100000,
               'step'    => 100,  
               'default'    => 5000,   
           ]
       );
       $this->add_control(
           'speed',
           [
               'label' => __('Smart Speed', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100000,
               'step'    => 100,  
               'default'    => 600,   
           ]
       ); 
       $this->end_controls_section();
       $this->start_controls_section('scroll_settings',
           [ 
           'label' => __('Scroll Settings', 'risehand-addons'),
           'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
           'condition' => [
               'portfolio_type' => 'infinite_scroll'
           ],
           ]
       );
       $this->add_control(
           'scroll_con_type',
               [
               'label' => __('Dot Type', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'linline' => __('Inline View', 'risehand-addons'),
                   'list' => __('List View', 'risehand-addons'), 
               ],
               'default' => 'linline' , 
           ]
       );
       $this->add_control(
           'scroll_side',
               [
               'label' => __('Dot Type', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'ltr' => __('Left To Right', 'risehand-addons'),
                   'rtl' => __('Right To Left', 'risehand-addons'), 
               ],
               'default' => 'ltr' , 
           ]
       );
       $this->add_control(
           'in_margin',
           [
               'label' => __('Margin', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100,
               'step'    => 1,  
               'default'    => 20,  
           ]
       ); 
       $this->add_control(
           'in_speed',
           [
               'label' => __('Speed', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100000,
               'step'    => 1,  
               'default'    => 5,   
           ]
       ); 
       $this->add_responsive_control(
           'item_width',
           [
               'label' => __('Item Width', 'risehand-addons'),
               'type'    => \Elementor\Controls_Manager::NUMBER,
               'min'     => 0,
               'max'     => 100000,
               'step'    => 100,  
               'default'    => 400,   
               'selectors' => [
                   '{{WRAPPER}} .portfolio_caro_post_section .sc-slide' => 'width: {{VALUE}}px;',
               ], 
           ]
       ); 
       $this->end_controls_section();
       $this->start_controls_section('portfolio_boxc_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
        );  
        $this->add_control(
            'iamge_height',
            [
                'label' => esc_html__( 'Image Height', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 2000,
                'step' => 1,
                'selectors' => [
                    '{{WRAPPER}}  .image-box img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_control(
            'overlay_color',
            [
                'label' => __('Overlay Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .image-box .img_link::before ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
			'style0',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'box_bg_colors',
            [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}   .content_box_outer .content_box_in ' => 'background: {{VALUE}};',
                ],
                'condition' => [ 
                    'portfolio_styles' => ['style_one' , 'style_two' , 'style_three', 'style_four']
                ]
            ]
        ); 
        $this->add_control(
            'overlay_colors',
            [
                'label' => __('Overlay Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-style_5:after' => 'background: linear-gradient(0deg, {{VALUE}} 6%, rgba(0, 0, 0, 0) 100%);',
                ],
                'condition' => [ 
                    'portfolio_styles' => ['style_five']
                ]
            ]
        ); 
        $this->add_control(
            'pabg_colors',
            [
                'label' => __('Pattern Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-style_5 .content_box_outer .spattern_bg' => 'background: {{VALUE}};',
                ],
                'condition' => [ 
                    'portfolio_styles' => ['style_five']
                ]
            ]
        ); 
        $this->add_control(
			'style1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'titles_color',
            [
                'label' => __('Title Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .content_box_in .title_24 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}}  .content_box_in .title_24 a ',
			]
		); 
        $this->add_control(
			'style2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'cat_color',
            [
                'label' => __('Category Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in p a , 
                    {{WRAPPER}}   .content_box_in p ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'cat_typo',
				'selector' => '{{WRAPPER}}  .content_box_in p a   ',
			]
		); 
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'link_color',
            [
                'label' => __('Link Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more  , {{WRAPPER}} .content_box_outer .p_rd_more' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'linkbr_color',
            [
                'label' => __('Link Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more   , {{WRAPPER}} .content_box_outer .p_rd_more ' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'linkbg_color',
            [
                'label' => __('Link Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more   , {{WRAPPER}} .content_box_outer .p_rd_more ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlink_color',
            [
                'label' => __('Hover Link Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover  , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlinkbr_color',
            [
                'label' => __('Hover Link Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlinkbg_color',
            [
                'label' => __('Hover Link Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
    $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
?>
<section class="portfolio_caro_post_section"><?php if($settings['portfolio_type'] == 'carousel_type'): $loop_enable = ''; if($settings['loop_enable'] == true): $loop_enable = 'true'; else: $loop_enable = 'false'; endif; $centered_enable = ''; if($settings['centered_enable'] == true): $centered_enable = 'true'; else: $centered_enable = 'false'; endif; ?> <div class="portfolio_carousel position-relative arrows_<?php echo esc_attr($settings['arrow_post']); ?>"> <div class="swiper swiper-container<?php if($settings['dot_enable'] == true): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{ "loop": <?php echo esc_attr($loop_enable); ?>, "autoplay": { "delay": <?php echo esc_attr($settings['duration']); ?> }, "speed": <?php echo esc_attr($settings['speed']); ?>, "centeredSlides": <?php echo esc_attr($centered_enable); ?>, "spaceBetween": <?php echo esc_attr($settings['margin']); ?>, "navigation": { "nextEl": ".port-next-one", "prevEl": ".port-prev-one" }, "pagination": { "el": ".port-pagination", "clickable": true , "type": "<?php echo esc_attr($settings['dot_type']); ?>" }, "grabCursor": true, "breakpoints": { "1200": { "slidesPerView": <?php echo esc_attr($settings['desk_top']); ?> }, "1024": { "slidesPerView": <?php echo esc_attr($settings['tablet']); ?> }, "768": { "slidesPerView": <?php echo esc_attr($settings['mobile']); ?> }, "576": { "slidesPerView": <?php echo esc_attr($settings['mini_mobile']); ?> } }}'> <div class="swiper-wrapper"> <?php $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : ''; $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : ''; $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : ''; if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'portfolio', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['n_query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'portfolio_category', 'field' => 'slug', 'terms' => $settings['n_query_category'], ), ); } $portfolio_grid_query = new \WP_Query( $args ); ?> <?php while ($portfolio_grid_query->have_posts()) : ?> <?php $portfolio_grid_query->the_post(); ?> <?php global $post; ?> <?php if($settings['portfolio_styles'] == 'style_two'): ?> <?php if(has_post_thumbnail()): ?> <div class="swiper-slide"> <?php do_action('get_risehand_portfolio_card_2'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_three'): ?> <?php if(has_post_thumbnail()): ?> <div class="swiper-slide"> <?php do_action('get_risehand_portfolio_card_3'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_four'): ?> <?php if(has_post_thumbnail()): ?> <div class="swiper-slide"> <?php do_action('get_risehand_portfolio_card_4'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_five'): ?> <?php if(has_post_thumbnail()): ?> <div class="swiper-slide"> <?php do_action('get_risehand_portfolio_card_5'); ?> </div> <?php endif; ?> <?php else: ?> <?php if(has_post_thumbnail()): ?> <div class="swiper-slide"> <?php do_action('get_risehand_portfolio_card_1'); ?> </div> <?php endif; ?> <?php endif; ?> <?php // portfolio card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> </div> <?php if($settings['arrow_enable'] == true): ?><div class="arrow_portfolio common_arrow <?php echo esc_attr($settings['arrow_post']); ?>"> <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div> <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div></div><?php endif; ?> <?php if($settings['dot_enable'] == true): ?><div class="port-pagination common-dots"></div><?php endif; ?> </div> <?php // end of protfolio type ?><?php else: ?> <?php // end of protfolio type ?><div class="scroll_carousel_box side_<?php echo esc_attr($settings['scroll_side']); ?>" data-speed="<?php echo esc_attr($settings['in_speed']); ?>" data-margin="<?php echo esc_attr($settings['in_margin']); ?>" data-dir="<?php echo esc_attr($settings['scroll_side']); ?>"> <?php $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : ''; $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : ''; $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : ''; if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); }elseif( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'portfolio', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['n_query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'portfolio_category', 'field' => 'slug', 'terms' => $settings['n_query_category'], ), ); } $portfolio_grid_query = new \WP_Query( $args ); ?> <?php while ($portfolio_grid_query->have_posts()) : ?> <?php $portfolio_grid_query->the_post(); ?> <?php global $post; ?> <?php if($settings['portfolio_styles'] == 'style_two'): ?> <?php if(has_post_thumbnail()): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_portfolio_card_2'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_three'): ?> <?php if(has_post_thumbnail()): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_portfolio_card_3'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_four'): ?> <?php if(has_post_thumbnail()): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_portfolio_card_4'); ?> </div> <?php endif; ?> <?php else: ?> <?php if(has_post_thumbnail()): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_portfolio_card_1'); ?> </div> <?php endif; ?> <?php endif; ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php endif; ?> </section>
<?php
    }
}