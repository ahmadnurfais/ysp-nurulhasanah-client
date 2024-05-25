<?php
namespace  Risehandaddons\Core\Widgets\Post;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Service_post_v1 extends \Elementor\Widget_Base{
    public function get_name()
    {
        return 'risehand-service-post-v1';
    }
    public function get_title()
    {
        return __('Service Post V1' , 'risehand-addons');
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
            'service_set_content',
            [
                'label' => __('Service Settings', 'risehand-addons')
            ]
        );
       
        $this->add_control(
            'service_styles',
            [
                'label' => __('Service style', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'style_one'  => __('Style 1 With Image', 'risehand-addons'),
                    'style_two' => __('Style 1 Without Image', 'risehand-addons'),
                    'style_three' => __('Style 2 With Image', 'risehand-addons'),
                    'style_four' => __('Style 2 Without Image', 'risehand-addons'), 
                    'style_five' => __('Style 3 ', 'risehand-addons'), 
                    'style_six' => __('Style 4 ', 'risehand-addons'), 
                ],
                'default' => 'style_one',
            ]
        ); 
        $this->add_control(
            'service_column',
            [
                'label' => __('Column', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'risehand-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'risehand-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'risehand-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'risehand-addons' ),
                ],
                'default' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
            ]
        );
         
        // Other type Start
        $this->add_control(
        'post_count',
        [ 
            'label'   => esc_html__( 'Number of post', 'risehand-addons' ),
            'type'    =>  \Elementor\Controls_Manager::NUMBER,
            'default' => 9,
            'min'     => 1,
            'max'     => 100,
            'step'    => 1,
        ]); 
        $this->add_control(
            'query_orderby',
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
            'query_order',
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
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Category', 'risehand-addons'),
			'options' => risehand_get_service_categories(),
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
            'post_not_in',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'excerpt_enable',
           [
              'label' => __('Excerpt Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        ); 
        $this->add_control(
            'pagination_enable',
           [
              'label' => __('Pagination Enable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );  
        $this->add_responsive_control(
            'pagination_alignment',
            [
                'label' => __('Pagination alignments', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'left' => [
                    'title' => __( 'Pagination Left', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Pagination Center', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-center',
                  ],
                  'right' => [
                    'title' => __( 'Pagination Right', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-right',
                  ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .pagination_blog > .page-numbers' => 'justify-content: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes'
               ],
            ]
        ); 
        $this->add_control(
			'hrp',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'pagination_enable' => 'yes'
                ],
			]
		); 
        $this->add_control(
            'pagcolor',
            [
                'label' => __('Pagination Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagbgcolor',
            [
                'label' => __('Pagination background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagbrcolor',
            [
                'label' => __('Pagination Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagacolor',
            [
                'label' => __('Pagination Active Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current, {{WRAPPER}} .page-numbers li span.current, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'apagbgcolor',
            [
                'label' => __('Pagination background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current, {{WRAPPER}} .page-numbers li span.current, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'apagbrcolor',
            [
                'label' => __('Pagination Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current , {{WRAPPER}} .page-numbers li span, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxticoncolor',
            [
                'label' => __('Pagination Next / Prev  Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                    {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next,
                    {{WRAPPER}} .page-numbers li a.prev' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxtpreviconcolor',
            [
                'label' => __('Pagination Next / Prev Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        );
        $this->add_control(
            'pagnxtrcolor',
            [
                'label' => __('Pagination Next / Prev Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxtbgcolor',
            [
                'label' => __('Pagination Next / Prev Bg Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->end_controls_section();
         
        $this->start_controls_section('service_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
        );      
        $this->add_control(
            'pattern_bg_color',
            [
                'label' => __('Pattern Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_1 .content_box_outer .icon .spattern_bg  , 
                    {{WRAPPER}} .service-style_2 .content_box_outer .spattern_bg , {{WRAPPER}}   .service-style_3 .image-box .icon .spattern_bg' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'],
                ]
            ]
        );  
        $this->add_control(
            'box_bg',
            [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_1 , {{WRAPPER}} .service-style_2 , 
                    {{WRAPPER}}  .service-style_3 .content_box_outer .content_box_in , 
                    {{WRAPPER}} .service-style_4' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'overlaybg',
            [
                'label' => __('Overlay Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_2.with_img.has_images .image-box .img_link::before ,
                    {{WRAPPER}} .service-style_3 .image-box .img_link::before ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_three' , 'style_five'],
                ]
            ]
        );
        $this->add_control(
            'ser_bor_color',
            [
                'label' => __('Box Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_2' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_three' , 'style_four'],
                ]
            ]
        );
        $this->add_control(
            'hser_bor_color',
            [
                'label' => __('Hover Box Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_2:hover' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_three' , 'style_four'],
                ]
            ]
        ); 
        $this->add_control(
			'style0',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_3 .icon i ,
                    {{WRAPPER}} .service-style_2 .icon i ,
                    {{WRAPPER}} .service-style_1 .icon i ,
                    {{WRAPPER}} .service-style_4 .icon i ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
			'style1s',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
                'condition' => [
                    'service_styles' => ['style_six'],
                ]
			]
		); 
        $this->add_control(
            'c_color',
            [
                'label' => __('Category Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_4 .content_box_in p a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_six'],
                ]
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'c_typo',
				'selector' => ' {{WRAPPER}} .service-style_4 .content_box_in p a', 
                'condition' => [
                    'service_styles' => ['style_six'],
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
                    '{{WRAPPER}} .service-style_1 .title_no_a_24 , {{WRAPPER}} .service-style_1 .title_24 a ,
                      {{WRAPPER}} .service-style_3 .title_24 a ,
                      {{WRAPPER}} .service-style_4 .title_24 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => ' {{WRAPPER}} .service-style_1 .title_no_a_24 , {{WRAPPER}} .service-style_1 .title_20 a , {{WRAPPER}} .service-style_1 .title_24 a ,
                 {{WRAPPER}} .service-style_2 .title_24 a , {{WRAPPER}} .service-style_3 .title_24 a , {{WRAPPER}} .service-style_4 .title_24 a', 
			]
		); 
        $this->add_control(
            'htitles_color',
            [
                'label' => __('Hover Title Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .service-style_1 .title_20 a , {{WRAPPER}} .service-style_1 .title_24 a:hover ,
                     {{WRAPPER}} .service-style_2 .title_24 a:hover ,
                     {{WRAPPER}} .service-style_3 .title_24 a:hover ,
                     {{WRAPPER}} .service-style_4 .title_24 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'htitlesbg_color',
            [
                'label' => __('Hover Title Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .service-style_1 .title_20' => 'background: {{VALUE}};',
                ],
                  'condition' => [
                    'service_styles' => ['style_one' , 'style_two'],
                ]
            ]
        ); 
        
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'des_color',
            [
                'label' => __('Description Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_1 .des_cription , {{WRAPPER}} .service-style_2 .des_cription 
                     , {{WRAPPER}} .service-style_3 .des_cription  , {{WRAPPER}} .service-style_4 .des_cription' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
				'name' => 'desctypo',
				'selector' => ' {{WRAPPER}} .service-style_1 .des_cription , {{WRAPPER}} .service-style_2 .des_cription , {{WRAPPER}} .service-style_3 .des_cription
                , {{WRAPPER}} .service-style_4 .des_cription ',
			]
		);  
        $this->add_control(
			'style4',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
                'condition' => [
                    'service_styles' => ['style_one' , 'style_two'  , 'style_three'  , 'style_four'  , 'style_six'],
                ]
			]
		);
        $this->add_control(
            'link_color',
            [
                'label' => __('Link Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_1 .text_btn small , {{WRAPPER}} .service-style_2 .text_btn small , {{WRAPPER}} .service-style_4 .content_box_in .theme_btn' => 'color: {{VALUE}}; text-decoration-color:{{VALUE}};',
                    '{{WRAPPER}} .service-style_1 .text_btn small:before , {{WRAPPER}} .service-style_2 .text_btn small:before ' => 'background: {{VALUE}};'
                ],
                'condition' => [
                    'service_styles' => ['style_one' , 'style_two'  , 'style_three'  , 'style_four'  , 'style_six'],
                ]
            ]
        ); 
        $this->add_control(
            'linkH_color',
            [
                'label' => __('Link Hover Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_1 .text_btn:hover small , {{WRAPPER}} .service-style_2 .text_btn:hover small , {{WRAPPER}} .service-style_4 .content_box_in .theme_btn:hover' => 'color: {{VALUE}}; text-decoration-color:{{VALUE}};',
                    ' {{WRAPPER}} .service-style_1 .text_btn:hover small:before , {{WRAPPER}} .service-style_2 .text_btn:hover small:before' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_one' , 'style_two'  , 'style_three'  , 'style_four'  , 'style_six'],
                ]
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Link Typography', 'risehand-addons' ),
				'name' => 'link_typo',
				'selector' => ' {{WRAPPER}} .service-style_1 .text_btn ,
                {{WRAPPER}} .service-style_2 .text_btn , {{WRAPPER}} .service-style_4 .content_box_in .theme_btn',
                'condition' => [
                    'service_styles' => ['style_one' , 'style_two'  , 'style_three'  , 'style_four'  , 'style_six'],
                ]
			]
		); 
        $this->add_control(
            'bg_color',
            [
                'label' => __('Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_4 .content_box_in .theme_btn ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_six'],
                ]
            ]
        ); 
        $this->add_control(
            'hbg_color',
            [
                'label' => __('Background Hover Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-style_4 .content_box_in .theme_btn:hover ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'service_styles' => ['style_six'],
                ]
            ]
        ); 
       
        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
?>
<section class="service_post_section <?php if($settings['excerpt_enable'] == true): ?> excerpt_enable<?php endif; ?>"> <div class="row"> <?php if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_not_in = ''; if(!empty($value['post_not_in'])){ $post_not_in = explode(',', $value['post_not_in']); } $args = array( 'post_type' => 'service', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $settings['post_count'], 'orderby' => $settings['query_orderby'], 'order' => $settings['query_order'], 'post__in' => $post_in, 'post__not_in' => $post_not_in, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'service_category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $service_grid_query = new \WP_Query( $args ); ?> <?php while ($service_grid_query->have_posts()) : ?> <?php $service_grid_query->the_post(); ?> <?php global $post; // service card ?> <?php if($settings['service_styles'] == 'style_two'): ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_1_no_image'); ?> </div> <?php elseif($settings['service_styles'] == 'style_three'): ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_2'); ?> </div> <?php elseif($settings['service_styles'] == 'style_four'): ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_2_no_image'); ?> </div> <?php elseif($settings['service_styles'] == 'style_five'): ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_3'); ?> </div> <?php elseif($settings['service_styles'] == 'style_six'): ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_4'); ?> </div> <?php else: ?> <div class="<?php echo esc_attr($settings['service_column']); ?>"> <?php do_action('get_risehand_service_card_1'); ?> </div> <?php endif; ?> <?php // service card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php if($settings['pagination_enable'] == true):?> <div class="row"> <div class="col-lg-12"> <div class="pagination <?php echo esc_attr($settings['pagination_alignment']); ?>"> <?php $pagination = 999999999; echo paginate_links( array( 'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ), 'format' => '?paged=%#%', 'current' => max(0, $paged), 'total' => $service_grid_query->max_num_pages, 'prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>', 'type'=>'list', 'add_args' => false ) ); ?> </div> </div> </div> <?php endif; ?> </section>
<?php
    }
}