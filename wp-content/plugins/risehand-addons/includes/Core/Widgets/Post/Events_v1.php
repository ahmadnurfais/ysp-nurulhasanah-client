<?php

namespace  Risehandaddons\Core\Widgets\Post;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Events_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-events-post-v1';
    }

    public function get_title()
    {
        return __('Events Grid V1', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['103'];
    }
    public function risehand_get_events_cat() {
            $options = array();
            $taxonomy = 'tribe_events_cat';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                        if (isset($term)) {
                            $options[''] = 'Select';
                            if (isset($term->slug) && isset($term->name)) {
                                $options[$term->slug] = $term->name; 
                            }
                        }
                    }
                }
            }
        return $options;
    }
    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('event_settings',
        [ 
            'label' => __('Events Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );  
        $this->add_control(
            'events_styles',
            [
                'label' => __('Card style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'style_three'   => esc_html__( 'Style One', 'risehand-addons' ),  
                    'style_eight'   => esc_html__( 'Style Two', 'risehand-addons' ),
                    'style_five'   => esc_html__( 'Style Three', 'risehand-addons' ),
                ],
                'default' => 'style_three',
            ]
        ); 
        $this->add_control(
            'events_column',
            [
                'label' => __('Column', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'risehand-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'risehand-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'risehand-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'risehand-addons' ),
                ],
                'default' => 'col-xl-4 col-lg-4 col-md-6 col-sm-6',
            ]
        ); 
        $this->add_control(
            'post_count',
            [
                'label' => __('Events Count', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'default' => 10,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
            ]
        ); 
        $this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'risehand-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
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
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESC' => esc_html__( 'DESC', 'risehand-addons' ),
					'ASC'  => esc_html__( 'ASC', 'risehand-addons' ),
				),
			]
        );
        $this->add_control(
            'query_category_enable',
           [
              'label' => __('Category  Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'no',
           ]
        );  
        $this->add_control(
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Event Location', 'risehand-addons'), 
            'options' => $this->risehand_get_events_cat(),
            'condition' => [
                'query_category_enable' => 'yes'
            ], 
			]
        );
        $this->add_responsive_control(
            'post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $this->add_responsive_control(
            'post_id_not',
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
              'label' => __('Excerpt  Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'events_excerpt_count',
            [
                'label' => __('Excerpt Text Limit', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'default' => 10,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
                'condition' => [
                    'excerpt_enable' => 'yes'
               ],
            ]
        );  
        $this->add_control(
            'events_loca_enable',
           [
              'label' => __('Event Location  Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'events_timing_enable',
           [
              'label' => __('Date  Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'masonry_enable',
           [
              'label' => __('Masonry  Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'no',
           ]
        );
        $this->add_control(
            'div1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
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
        $this->add_control(
            'image_height',
            [
                'label' => __('Image Height', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'min'     => 1,
				'max'     => 1000,
				'step'    => 1,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_2 .image-box img ,
                    {{WRAPPER}} .blog-style_8 .image-box img  ' => 'height: {{VALUE}}px;',
                ],
                'condition' => [
                    'events_styles' => ['style_two' , 'style_eight'],
                ]
            ]
        );
        $this->add_control(
            'margin_bottom',
            [
                'label' => __('Blog Card Margin Bottom', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'min'     => 0,
				'max'     => 100,
				'step'    => 1,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 , {{WRAPPER}} .blog-style_2 ,{{WRAPPER}} .blog-style_3  ,{{WRAPPER}} .blog-style_4 
                    ,{{WRAPPER}} .blog-style_4  ,{{WRAPPER}} .blog-style_6  ,{{WRAPPER}} .blog-style_7  ,{{WRAPPER}} .blog-style_8  ' => 'margin-bottom: {{VALUE}}px;',
                ], 
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section('blog_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'bg_color',
             [
                'label' => __('Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box  , {{WRAPPER}} .blog-style_2 ,
                    {{WRAPPER}} .blog-style_1 .content_box_outer .content_boxs , 
                    {{WRAPPER}} .blog-style_4  , 
                    {{WRAPPER}} .blog-style_5 .content_box ,
                    {{WRAPPER}} .blog-style_6  ,
                    {{WRAPPER}} .blog-style_7 ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'events_styles' => ['style_one' ,  'style_two' , 'style_four', 'style_five', 'style_six' , 'style_seven'] ,
               ],
             ]
        );
        $this->add_control(
            'border_color',
             [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog-style_5 .content_box , {{WRAPPER}} .blog-style_7 .content_box .d-flex ' => 'border-color: {{VALUE}};', 
                ],
                'condition' => [
                    'events_styles' => ['style_five' , 'style_seven']
               ],
             ]
        );
        $this->add_control(
            'hborder_color',
             [
                'label' => __('Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog-style_4:hover .content_box ' => 'border-color: {{VALUE}};', 
                ],
                'condition' => [
                    'events_styles' => ['style_four']
               ],
             ]
        );
        $this->add_control(
            'overlay_color',
             [
                'label' => __('Overlay Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .image-box .img_link::before , {{WRAPPER}}  .blog-style_2 .image-box .img_link::before ,
                     {{WRAPPER}} .blog-style_3 .image-box a.img_link::before ,
                     {{WRAPPER}} .blog-style_4 .image-box .img_link::before ,
                     {{WRAPPER}} .blog-style_5 .image-box .img_link::before  ,
                     {{WRAPPER}} .blog-style_6 .image-box .img_link::before ,
                     {{WRAPPER}} .blog-style_7 .image-box .img_link::before  ' => 'background: {{VALUE}}; opacity: 1;',
                ],
                'condition' => [
                    'events_styles' => ['style_one' , 'style_two' , 'style_three', 'style_four', 'style_five', 'style_six' , 'style_seven'] ,
                ],
             ]
        );
        $this->add_control(
			'style1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'meta_color',
             [
                'label' => __('Meta Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box  .comments a , {{WRAPPER}} .blog-style_1 .content_box_outer .content_box .comments , {{WRAPPER}} .blog-style_1 .content_box_outer .content_box .comments i ,
                     {{WRAPPER}} .blog-style_1 .content_box_outer .content_box .date_tm time , {{WRAPPER}} .blog-style_1 .content_box_outer .content_box .date_tm time i  ,
                     {{WRAPPER}} .blog-style_2  .content_box  .comments a , {{WRAPPER}} .blog-style_2  .content_box .comments , {{WRAPPER}} .blog-style_2 .content_box .comments i , 
                     {{WRAPPER}} .blog-style_2  .content_box .date_tm time , {{WRAPPER}} .blog-style_2 .content_box .date_tm time i , 
                     {{WRAPPER}} .blog-style_3 .content_box .date_tm time , {{WRAPPER}} .blog-style_3 .content_box .date_tm i ,
                     {{WRAPPER}} .blog-style_3  .content_box .comments a , {{WRAPPER}} .blog-style_3 .content_box .comments  i , {{WRAPPER}} .blog-style_3 .content_box .comments ,
                     {{WRAPPER}} .blog-style_4 .content_box .date_tm time ,  {{WRAPPER}} .blog-style_4 .content_box .date_tm time i ,
                     {{WRAPPER}} .blog-style_4  .content_box .comments a , {{WRAPPER}} .blog-style_4 .content_box .comments  i , {{WRAPPER}} .blog-style_4 .content_box .comments ,
                     {{WRAPPER}} .blog-style_5 .content_box .date_tm time , {{WRAPPER}} .blog-style_5 .content_box .date_tm i ,
                     {{WRAPPER}} .blog-style_5  .content_box .comments a , {{WRAPPER}} .blog-style_5 .content_box .comments  i , {{WRAPPER}} .blog-style_5 .content_box .comments ,
                     {{WRAPPER}} .blog-style_6 .content_box .date_tm time , {{WRAPPER}} .blog-style_6 .content_box .date_tm i ,
                     {{WRAPPER}} .blog-style_6  .content_box .comments a , {{WRAPPER}} .blog-style_6 .content_box .comments  i , {{WRAPPER}} .blog-style_6 .content_box .comments ,
                     {{WRAPPER}} .blog-style_7 .content_box .date_tm time , {{WRAPPER}} .blog-style_7 .content_box .date_tm i ,
                     {{WRAPPER}} .blog-style_7  .content_box .comments a , {{WRAPPER}} .blog-style_7 .content_box .comments  i , {{WRAPPER}} .blog-style_7 .content_box .comments ' => 'color: {{VALUE}};',
                ],
             ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Meta Typography', 'risehand-addons' ),
				'name' => 'meta_typo',
				'selector' => '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .d-flex small a ,
                               {{WRAPPER}} .blog-style_1 .content_box_outer .content_box .date_tm  time  ,  
                               {{WRAPPER}} .blog-style_2   .content_box .date_tm  time  , 
                               {{WRAPPER}} .blog-style_3 .content_box .date_tm time ,
                               {{WRAPPER}} .blog-style_4 .content_box .date_tm time  ,
                               {{WRAPPER}} .blog-style_5 .content_box .date_tm time ,
                               {{WRAPPER}} .blog-style_6 .content_box .date_tm time ,
                               {{WRAPPER}} .blog-style_7 .content_box .date_tm time
                ',
			]
		); 
        $this->add_control(
			'style2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'category_bg_color',
             [
                'label' => __('Category Bg Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .d-flex .cat_gry ,
                    {{WRAPPER}} .blog-style_2 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_3 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_4  .content_box .cat_gry ,
                     {{WRAPPER}} .blog-style_5 .content_box .cat_gry ,
                     {{WRAPPER}} .blog-style_6 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_7 .image-box .cat_gry   ' => 'background: {{VALUE}}; border-color: {{VALUE}};', 
                ],
             ]
        );
        $this->add_control(
            'category_color',
             [
                'label' => __('Category Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .d-flex .cat_gry , 
                    {{WRAPPER}} .blog-style_2 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_3 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_4  .content_box .cat_gry ,
                     {{WRAPPER}} .blog-style_5 .content_box .cat_gry ,
                     {{WRAPPER}} .blog-style_6 .image-box .cat_gry ,
                     {{WRAPPER}} .blog-style_7 .image-box .cat_gry ' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'ct_typo',
				'selector' => '{{WRAPPER}}  .blog-style_1 .content_box_outer .content_box .d-flex .cat_gry , 
                                {{WRAPPER}} .blog-style_2 .image-box .cat_gry ,
                               {{WRAPPER}} .blog-style_3 .image-box .cat_gry ,
                               {{WRAPPER}} .blog-style_4 .content_box .cat_gry , 
                               {{WRAPPER}} .blog-style_5 .content_box .cat_gry , 
                               {{WRAPPER}} .blog-style_6 .image-box .cat_gry ,
                               {{WRAPPER}} .blog-style_7 .image-box .cat_gry ',
			]
		); 
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .title_24 a , 
                    {{WRAPPER}} .blog-style_2  .content_box .title_24 a  ,
                     {{WRAPPER}} .blog-style_3 .title_26 a ,
                     {{WRAPPER}} .blog-style_4  .content_box .title_24 a ,
                     {{WRAPPER}} .blog-style_5 .title_24 a ,
                     {{WRAPPER}} .blog-style_6 .title_24 a ,
                     {{WRAPPER}} .blog-style_7 .title_24 a ' => 'color: {{VALUE}};', 
                ],
             ]
        );  
        $this->add_control(
            'titleho_color',
             [
                'label' => __('Title Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .title_24 a:hover  ,
                    {{WRAPPER}} .blog-style_2  .content_box .title_24 a:hover  ,
                     {{WRAPPER}} .blog-style_3 .title_26 a:hover  ,
                     {{WRAPPER}} .blog-style_4  .content_box .title_24 a:hover ,
                     {{WRAPPER}} .blog-style_5 .title_24 a:hover  ,
                     {{WRAPPER}} .blog-style_6 .title_24 a:hover ,
                     {{WRAPPER}} .blog-style_7 .title_24 a:hover  ' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'ctit_typo',
				'selector' => '{{WRAPPER}} .blog-style_1 .content_box_outer .content_box .title_24 a , 
                                {{WRAPPER}} .blog-style_2 .content_box .title_24 a , 
                               {{WRAPPER}} .blog-style_3 .title_26 a , 
                               {{WRAPPER}} .blog-style_4 .content_box .title_24 a  ,
                               {{WRAPPER}} .blog-style_5 .title_24 a ,
                               {{WRAPPER}} .blog-style_6 .title_24 a ,
                               {{WRAPPER}} .blog-style_7 .title_24 a',
			]
		); 
        $this->add_control(
			'style4',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
            $this->add_control(
                'desc_color',
                [
                    'label' => __('Description Color', 'risehand-addons'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .blog-wrapper .descs , {{WRAPPER}} .blog-wrapper .des_cription' => 'color: {{VALUE}}',
                    ], 
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
                    'name' => 'desc_typo',
                    'selector' => '{{WRAPPER}} .blog-wrapper .descs , {{WRAPPER}} .blog-wrapper .des_cription',
                
                ]
            ); 
            $this->add_control(
                'style5',
                [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
                    
                ]
            );  
        $this->add_control(
            'link_color',
             [
                'label' => __('Link Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-wrapper .text_btn small  ' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog-wrapper .text_btn small:before ' => 'background: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Link Typography', 'risehand-addons' ),
				'name' => 'link_typo',
				'selector' => '{{WRAPPER}} .blog-wrapper .text_btn small',
			]
		); 
        $this->add_control(
			'style6',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'hometa_color',
             [
                'label' => __('Hover Meta Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog_box.type_four:hover .date_tm, {{WRAPPER}} .blog_box.type_four:hover .date_tm i,
                {{WRAPPER}} .blog_box.type_four:hover .comments, {{WRAPPER}} .blog_box.type_four:hover .comments a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'events_styles' => 'style_four',
                ]
             ]
        );       
 
        $this->add_control(
            'hotitle_color',
             [
                'label' => __('Title Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .blog_box.type_four:hover .title a, {{WRAPPER}}  .blog_box.type_four:hover  .title a span:after' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'events_styles' => 'style_four',
                ]
             ]
        );
         
        $this->add_control(
            'hodesc_color',
             [
                'label' => __('Desc Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .blog_box.type_four:hover .descs ' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'events_styles' => 'style_four',
                ]
             ]
        );

        $this->add_control(
            'holink_color',
             [
                'label' => __('Link Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_box.type_two:hover .content a.rd_more, {{WRAPPER}} .blog_box.type_three:hover .content a.rd_more,
                    {{WRAPPER}} .blog_box.type_four:hover .content a.rd_more, {{WRAPPER}} .blog_box.type_five:hover .content a.rd_more' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'events_styles' => [ 'style_two' , 'style_three', 'style_four', 'style_five'] ,
                ]
             ]
        );      
    $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');

$masonry_enable  = isset($settings['masonry_enable']) ? $settings['masonry_enable'] : '';
$masonry_class = "";
if($masonry_enable == true){
    $masonry_class = "blog-wrapper";
}  
$post_in = '';
if(!empty($settings['post_id'])){
     $post_in = explode(',', $settings['post_id']);
}
$post_id_not = '';
if(!empty($settings['post_id_not'])){
     $post_id_not = explode(',', $settings['post_id_not']);
}

$tax_query = array(
    'relation' => 'AND',
);
 
if ($settings['query_category_enable'] == "yes") { 
    $events = tribe_get_events(array(
        'posts_per_page' => $settings['post_count'],
        'orderby'        => $settings['query_orderby'],
        'order'          =>  $settings['query_order'],
        'post__in'         => $post_in,  
        'post__not_in'         => $post_id_not,  
        'tax_query'=> array(
            array(
                'taxonomy' => 'tribe_events_cat',
                'field' => 'slug',
                'terms' => $settings['query_category']
            )
        )
    )); 
} else {
    $events = tribe_get_events(array(
        'posts_per_page' => $settings['post_count'],
        'orderby'        => $settings['query_orderby'],
        'order'          =>  $settings['query_order'],
        'post__in'         => $post_in,  
        'post__not_in'         => $post_id_not,  
    )); 
} 
$events_excerpt_enable = $settings['excerpt_enable'];
$events_excerpt_count = $settings['events_excerpt_count'];
$events_loca_enable = $settings['events_loca_enable'];
$events_timing_enable = $settings['events_timing_enable']; 
?>
<section class="blog_post_section"> <div class="row <?php if ($masonry_enable == true): ?>blog_container clearfix<?php endif; ?>"> <?php if (empty($events)): echo 'Sorry, nothing found.'; else: foreach ($events as $event) : $start_date = tribe_get_start_date($event->ID, true, 'F j, Y'); $start_time = tribe_get_start_time($event->ID, 'h:i A'); $the_excerpt = wp_trim_words(get_the_excerpt($event->ID), $events_excerpt_count); ?> <?php if ($settings['events_styles'] == 'style_eight'): ?> <div class="<?php echo esc_attr($settings['events_column']); ?> <?php echo esc_attr($masonry_class); ?> style_three_eight"> <div class="blog-style_2 mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images d_flex align-items-center<?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail($event->ID)): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="img_link"> <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-370-270 trans')); ?> </a> <?php if ($events_loca_enable == true): ?> <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div> <?php endif; ?> </div> <?php endif; ?> <div class="content_box trans"> <?php if ($events_timing_enable == true): ?> <div class="d-flex"> <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small> <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small> </div> <?php endif; ?> <div class="title_22 mb_15"> <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3"> <?php echo wp_kses(get_the_title($event->ID), true); ?> </a> </div> <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?> <p class="mb_20 des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink($event->ID)); ?>"> <small><?php echo esc_html__('Event Details', 'risehand-addons'); ?></small> </a> </div> </div> </div> </div> <?php elseif ($settings['events_styles'] == 'style_five'): ?> <div class="<?php echo esc_attr($settings['events_column']); ?> <?php echo esc_attr($masonry_class); ?> style_three_eight"> <div class="blog-style_5 trans mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images <?php else: ?>no_images<?php endif; ?>"> <?php if (has_post_thumbnail($event->ID)): ?> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink()); ?>" class="img_link"> <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-370-270 trans')); ?> </a> </div> <?php endif; ?> <div class="content_box trans"> <?php if ($events_loca_enable == true): ?> <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div> <?php endif; ?> <?php if ($events_timing_enable == true): ?> <div class="d-flex"> <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small> <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small> </div> <?php endif; ?> <div class="title_22 mb_10"> <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3"> <?php echo wp_kses(get_the_title($event->ID), true); ?> </a> </div> <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?> <p class="des_cription mb_15"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> <div> <a class="text_btn" href="<?php echo esc_url(get_permalink($event->ID)); ?>"> <small><?php echo esc_html__('Event Details', 'risehand-addons'); ?></small> </a> </div> </div> </div> </div> <?php else: ?> <div class="<?php echo esc_attr($settings['events_column']); ?> <?php echo esc_attr($masonry_class); ?>"> <div class="blog-style_3 mb_40 <?php if (has_post_thumbnail($event->ID)): ?>has_images <?php else: ?>no_images<?php endif; ?>"> <div class="image-box img_obj_fit_center"> <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="img_link"> <?php echo (get_the_post_thumbnail($event->ID, 'risehand-image-570-570 trans')); ?> <?php if ($events_loca_enable == true): ?> <div class="cat_gry"><?php echo tribe_get_venue($event->ID); ?></div> <?php endif; ?> </a> <div class="content_box_outer"> <div class="content_box"> <?php if ($events_timing_enable == true): ?> <div class="d-flex"> <small class="date_tm"><time class="font_special"><i class="risehand-calendar-check"></i><?php echo esc_attr($start_date); ?></time></small> <small class="date_tm"><time class="font_special"><i class="risehand-clock"></i><?php echo esc_attr($start_time); ?></time></small> </div> <?php endif; ?> <div class="title_26 mb_15"> <a href="<?php echo esc_url(get_permalink($event->ID)); ?>" class="trim-3"> <?php echo wp_kses(get_the_title($event->ID), true); ?> </a> </div> <?php if (!empty($the_excerpt) && $events_excerpt_enable == true): ?> <p class="des_cription"><?php echo esc_attr($the_excerpt); ?></p> <?php endif; ?> </div> </div> </div> </div> </div> <?php endif; ?> <?php endforeach; endif; ?> </div></section>
<?php 
}
}