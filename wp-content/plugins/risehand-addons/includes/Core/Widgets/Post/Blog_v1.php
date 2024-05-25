<?php

namespace  Risehandaddons\Core\Widgets\Post;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Blog_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-blog-post-v1';
    }

    public function get_title()
    {
        return __('Blog  Grid V1', 'risehand-addons');
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
 
        // style one start
        $this->start_controls_section('blog_settings',
        [ 
            'label' => __('Blog Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );  
        $this->add_control(
            'news_styles',
            [
                'label' => __('Card style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'risehand-addons' ),
                    'style_two'   => esc_html__( 'Style Two', 'risehand-addons' ), 
                    'style_four'   => esc_html__( 'Style Three', 'risehand-addons' ), 
                    'style_six'   => esc_html__( 'Style Five', 'risehand-addons' ),
                    'style_seven'   => esc_html__( 'Style Six', 'risehand-addons' ), 
                ],
                'default' => 'style_one',
            ]
        ); 
        $this->add_control(
            'news_column',
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
                'label' => __('Blog Count', 'risehand-addons'),
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
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Category', 'risehand-addons'), 
            'options' => risehand_get_blog_categories(),
            'multiple' => true,  
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
            'comment_enable',
           [
              'label' => __('Comment  Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'dte_enable',
           [
              'label' => __('Date   Disable', 'risehand-addons'),
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
                    'news_styles' => ['style_two' , 'style_eight'],
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
                    {{WRAPPER}} .blog-style_6  ,
                    {{WRAPPER}} .blog-style_7 ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'news_styles' => ['style_one' ,  'style_two' , 'style_four', 'style_six' , 'style_seven'] ,
               ],
             ]
        );
        $this->add_control(
            'border_color',
             [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR, 
                'selectors' => [
                    '{{WRAPPER}} .blog-style_7 .content_box .d-flex ' => 'border-color: {{VALUE}};', 
                ],
                'condition' => [
                    'news_styles' => ['style_seven']
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
                    'news_styles' => ['style_four']
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
                     {{WRAPPER}} .blog-style_6 .image-box .img_link::before ,
                     {{WRAPPER}} .blog-style_7 .image-box .img_link::before  ' => 'background: {{VALUE}}; opacity: 1;',
                ],
                'condition' => [
                    'news_styles' => ['style_one' , 'style_two' , 'style_three', 'style_four', 'style_six' , 'style_seven'] ,
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
                    'news_styles' => 'style_four',
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
                    'news_styles' => 'style_four',
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
                    'news_styles' => 'style_four',
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
                    'news_styles' => [ 'style_two' , 'style_three', 'style_four'] ,
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
?>
<section class="blog_post_section<?php if($settings['excerpt_enable'] == true): ?> excerpt_enable<?php endif; ?><?php if($settings['comment_enable'] == true): ?> comment_enable<?php endif; ?><?php if($settings['dte_enable'] == true): ?> dte_enable<?php endif; ?>"> <div class="row <?php if($masonry_enable == true): ?> blog_container clearfix<?php endif; ?>"> <?php if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'post', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $settings['post_count'], 'orderby' => $settings['query_orderby'], 'order' => $settings['query_order'], 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $blog_grid_query = new \WP_Query( $args ); ?> <?php while ($blog_grid_query->have_posts()) : ?> <?php $blog_grid_query->the_post(); ?> <?php global $post; // blog card ?> <?php if($settings['news_styles'] == 'style_two'): ?> <div class="<?php echo esc_attr($settings['news_column']); ?> <?php echo esc_attr($masonry_class); ?> "> <?php do_action('get_risehand_blog_card_2'); ?> </div> <?php elseif($settings['news_styles'] == 'style_four'): ?> <div class="<?php echo esc_attr($settings['news_column']); ?> <?php echo esc_attr($masonry_class); ?> "> <?php do_action('get_risehand_blog_card_4'); ?> </div> <?php elseif($settings['news_styles'] == 'style_six'): ?> <div class="<?php echo esc_attr($settings['news_column']); ?> <?php echo esc_attr($masonry_class); ?> "> <?php do_action('get_risehand_blog_card_6'); ?> </div> <?php elseif($settings['news_styles'] == 'style_seven'): ?> <div class="<?php echo esc_attr($settings['news_column']); ?> <?php echo esc_attr($masonry_class); ?> "> <?php do_action('get_risehand_blog_card_7'); ?> </div> <?php else: ?> <div class="<?php echo esc_attr($settings['news_column']); ?> <?php echo esc_attr($masonry_class); ?> "> <?php do_action('get_risehand_blog_card_1'); ?> </div> <?php endif; ?> <?php // blog card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php if($settings['pagination_enable'] == true):?> <div class="row"> <div class="col-lg-12"> <div class="pagination <?php echo esc_attr($settings['pagination_alignment']); ?>"> <?php $pagination = 999999999; echo paginate_links( array( 'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ), 'format' => '?paged=%#%', 'current' => max(0, $paged), 'total' => $blog_grid_query->max_num_pages, 'prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>', 'type'=>'list', 'add_args' => false ) ); ?> </div> </div> </div> <?php endif; ?> </section>
<?php 
}
}