<?php

namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Testimonial_carousel_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-testimonial-carousel-v1';
    }

    public function get_title()
    {
        return __('Testimonial Carousel V1', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }

    protected function register_controls(){
        // style one start
        $this->start_controls_section('testc_settings',
        [ 
            'label' => __('Testimonial Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
        'testimonial_styles',
            [
            'label' => __('Testimonial Styles', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'risehand-addons' ),
                'style_two' => __( 'Style Two', 'risehand-addons' ),
                'style_three' => __( 'Style Three', 'risehand-addons' ),
                'style_four' => __( 'Style Four', 'risehand-addons' ),
            ],
            'default' => __('style_one' , 'risehand-addons'),
            ]
        ); 
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'image_enable',
        [
            'label' => __('Image Enable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => true,
            'default' => true,
        ]
        );
        $repeater->add_control(
            'image',
            [
                'label' => __('Image', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'image_enable' => true,
                ],
            ]
        );
        $repeater->add_control(
            'name',
            [
            'label'       => esc_html__( 'Name', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( 'Jacob Leonardo' , 'risehand-addons'),
        ]);
        $repeater->add_control(
            'designation',
            [
            'label'       => esc_html__( 'Designation', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( 'Senior Manager of Excel Solution' , 'risehand-addons'),
        ]); 
        $repeater->add_control(
            'highlight_comment',
            [
            'label'       => esc_html__( 'Highlight Comment', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXTAREA,
            'default' =>  esc_html__( 'While running an early stage startup everything feels hard, that’s why it’s been so nice to have our accounting feel easy. We recommed Qetus.' , 'risehand-addons'),
        ]); 
        $repeater->add_control(
            'comments',
            [
            'label'       => esc_html__( 'Comment', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXTAREA,
            'default' =>  esc_html__( 'While running an early stage startup everything feels hard, that’s why it’s been so nice to have our accounting feel easy. We recommed Qetus.' , 'risehand-addons'),
        ]);
        $repeater->add_control(
            'rating_one',
            [
                'label' => esc_html__( 'Rating', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'Select', 'risehand-addons' ),
                    'one' => esc_html__( '1 star', 'risehand-addons' ),
                    'two' => esc_html__( '2 stars', 'risehand-addons' ),
                    'three' => esc_html__( '3 stars', 'risehand-addons' ),
                    'four' => esc_html__( '4 stars', 'risehand-addons' ),
                    'five' => esc_html__( '5 stars', 'risehand-addons' ),
                ],
            ]
        );
        $this->add_control(
            'testimonial_repeater_c',
            [
                'label' => __('Testimonial Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'image_enable' => true ,
                        'name' =>  __('Somalia D. Silva', 'risehand-addons'),
                        'designation' =>  __('Business Manager', 'risehand-addons'),
                        'comments'  =>  __('On the other hand denounce righteous indignation and dislike men who beguile and demoralize charms pleasure the moment blinded desire cannot foresee pain and trouble that are bound to ensue', 'risehand-addons'),
                        'rating_one' => 'five' ,
                    ],
                    [
                        'image_enable' => true ,
                        'rating_one' => 'four' ,
                        'name' =>  __('Boris Elbert ', 'risehand-addons'),
                        'designation' =>  __('Green Tech', 'risehand-addons'),
                        'comments'  =>  __('On the other hand denounce righteous indignation and dislike men who beguile and demoralize charms pleasure the moment blinded desire cannot foresee pain and trouble that are bound to ensue', 'risehand-addons'),
                    ], 
                    [
                        'image_enable' => true ,
                        'rating_one' => 'five' ,
                        'name' =>  __('Ivor Herbert', 'risehand-addons'),
                        'designation' =>  __('Manager, Airlines', 'risehand-addons'),
                        'comments'  =>  __('On the other hand denounce righteous indignation and dislike men who beguile and demoralize charms pleasure the moment blinded desire cannot foresee pain and trouble that are bound to ensue', 'risehand-addons'),
                    ]
                ],
                'title_field' => '{{{ name }}}',

            ]
        );
        $this->add_control(
            'quotes_enable',
            [
                'label' => __('Quotes Enable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => true,
                'default' => true,
            ]
        );
    $this->end_controls_section(); 
     // carouse settings
        $this->start_controls_section('carousel_settings',
           [ 
           'label' => __('Carousel Settings', 'risehand-addons'),
           'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
        'arow_top',
        [
            'label' => __('Arrow Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,   
            'selectors' => [
                '{{WRAPPER}} .common_arrow ' => 'top: {{VALUE}}px;',
            ], 
        ]
    ); 
    $this->add_control(
        'arow_left',
        [
            'label' => __('Prev Arrow Move Left', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,    
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev' => 'left: {{VALUE}}px;',
            ], 
        ]
    ); 
    $this->add_control(
        'arow_right',
        [
            'label' => __('Prev Arrow Move Right', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,    
            'selectors' => [
                '{{WRAPPER}} .common_arrow .next' => 'right: {{VALUE}}px;',
            ], 
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
                   '{{WRAPPER}} .port-pagination ' => 'text-align: {{VALUE}};',
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
        $this->start_controls_section('testcarouecs',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        ); 
        $this->add_control(
            'bg_color',
            [
                'label' => __('Box Bg Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .testimonial_box.style_two .content_box ,
                    {{WRAPPER}} .testimonial_box.style_three ,  {{WRAPPER}} .testimonial_box.style_four .content_box ' => 'background: {{VALUE}};', 
                    '{{WRAPPER}} .testimonial_box.style_two .content_box::before ' => 'border-left-color: {{VALUE}}; border-top-color: {{VALUE}};', 
                    
                ],  
                'condition' => [
                    'testimonial_styles' => ['style_two' , 'style_four' , 'style_three'] ,
                ],
            ]
        ); 
        $this->add_control(
            'btnbor_color',
            [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .testimonial_box.style_three::before ,
                    {{WRAPPER}} .testimonial_box.style_three .authour_details ' => 'border-color: {{VALUE}};', 
                ],
                'condition' => [
                    'testimonial_styles' => ['style_three'] ,
                ],
            ]
        );   
        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .title_no_a_24 ' => 'color: {{VALUE}};', 
                ],
            ]
        );   
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .testimonial_box .title_no_a_24',
			]
		);  
        $this->add_control(
            'des_color',
            [
                'label' => __('Description Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .comment' => 'color: {{VALUE}};', 
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
				'name' => 'descp_typo',
				'selector' => '{{WRAPPER}} .testimonial_box .comment',
			]
		); 
        $this->add_control(
            'auth_color',
            [
                'label' => __('Author Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .authour_details .title_no_a_22' => 'color: {{VALUE}};', 
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Author Typography', 'risehand-addons' ),
				'name' => 'su_typo',
				'selector' => '{{WRAPPER}} .testimonial_box .authour_details .title_no_a_22',
			]
		); 
        
        $this->add_control(
            'desg_color',
            [
                'label' => __('Job Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .authour_details span ' => 'color: {{VALUE}};', 
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Job Typography', 'risehand-addons' ),
				'name' => 'desg_typo',
				'selector' => '{{WRAPPER}} .testimonial_box .authour_details span',
			]
		);  
        $this->add_control(
            'quote_color',
            [
                'label' => __('Quote  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .quote_icons i ' => 'color: {{VALUE}};', 
                ], 
            ]
        );    
        $this->add_control(
            'quote_bg_color',
            [
                'label' => __('Quote Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .quote_icons i ' => 'background: {{VALUE}};', 
                ], 
                'condition' => [
                    'testimonial_styles' => ['style_four'] ,
                ],
            ]
        );   
        $this->add_control(
            'rating_color',
            [
                'label' => __('Rating  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial_box .rating li span ' => 'color: {{VALUE}};', 
                ], 
            ]
        );     
    $this->end_controls_section(); 

    $this->start_controls_section('swiper_navigation_dot_css',
    [ 
        'label' => __('Navigation / Dots Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    ); 
    $this->add_control(
        'nav1color',
        [
            'label' => esc_html__( 'Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev .risehand-chevron-left , {{WRAPPER}} .common_arrow .next .risehand-chevron-right' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2color',
        [
            'label' => esc_html__( 'Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev, {{WRAPPER}} .common_arrow .next' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2colors',
        [
            'label' => esc_html__( 'Prev /  Next Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev, {{WRAPPER}} .common_arrow .next' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover .risehand-chevron-left , {{WRAPPER}} .common_arrow .next:hover .risehand-chevron-right ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hobgcolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Bg Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover , {{WRAPPER}} .common_arrow .next:hover' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover , {{WRAPPER}} .common_arrow .next:hover' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    
    $this->add_control(
        'cssdiv6',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'nav3color',
        [
            'label' => esc_html__( 'Dot  Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_sec .swiper-pagination-bullet:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav4color',
        [
            'label' => esc_html__( 'Dot Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_sec .swiper-pagination-bullet ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav5color',
        [
            'label' => esc_html__( 'Dot Active Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_sec .swiper-pagination-bullet.swiper-pagination-bullet-active:before ,
                {{WRAPPER}} .testimonial_sec .swiper-pagination-bullet:hover:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav6color',
        [
            'label' => esc_html__( 'Dot Active Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .testimonial_sec .swiper-pagination-bullet.swiper-pagination-bullet-active ,
                 {{WRAPPER}} .testimonial_sec .swiper-pagination-bullet:hover ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->end_controls_section();

 
}
protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
    $loop_enable = '';
    if($settings['loop_enable'] ==  true):
        $loop_enable = 'true';
    else:
        $loop_enable = 'false';
    endif;
    $centered_enable = '';
    if($settings['centered_enable'] ==  true):
        $centered_enable = 'true';
    else:
        $centered_enable = 'false';
    endif;
    ?>
   <section class="testimonial_sec <?php echo esc_attr($settings['testimonial_styles']); ?>"> <div class="swiper swiper-container<?php if($settings['dot_enable'] == true): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{ "loop": <?php echo esc_attr($loop_enable); ?>, "autoplay": { "delay": <?php echo esc_attr($settings['duration']); ?> }, "speed": <?php echo esc_attr($settings['speed']); ?>, "centeredSlides": <?php echo esc_attr($centered_enable); ?>, "spaceBetween": <?php echo esc_attr($settings['margin']); ?>, "navigation": { "nextEl": ".port-next-one", "prevEl": ".port-prev-one" }, "pagination": { "el": ".test-pagination", "clickable": true , "type": "<?php echo esc_attr($settings['dot_type']); ?>" }, "grabCursor": true, "breakpoints": { "1200": { "slidesPerView": <?php echo esc_attr($settings['desk_top']); ?> }, "1024": { "slidesPerView": <?php echo esc_attr($settings['tablet']); ?> }, "768": { "slidesPerView": <?php echo esc_attr($settings['mobile']); ?> }, "576": { "slidesPerView": <?php echo esc_attr($settings['mini_mobile']); ?> } } }'> <div class="swiper-wrapper"> <?php if(!empty($settings['testimonial_repeater_c'])): foreach($settings['testimonial_repeater_c'] as $key => $testimonial_repeater_c): $rating_one = ! empty( $testimonial_repeater_c['rating_one'] ) ? $testimonial_repeater_c['rating_one'] : ''; $image = ''; $alt_image = ''; if (!empty($testimonial_repeater_c['image']['url'])) { $image = $testimonial_repeater_c['image']['url']; $alt_image = $testimonial_repeater_c['image']['alt']; $alt_image = !empty($alt_image) ? $alt_image : 'iamge'; } ?> <div class="swiper-slide"> <?php // style two start ?> <?php if($settings['testimonial_styles'] == 'style_two'): ?> <div class="testimonial_box style_two"> <div class="content_box"> <div class="quote_icons"><i class="risehand-013-quotation"></i></div> <ul class="rating"> <?php if($rating_one == 'one'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'two'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'three'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'four'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'five'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php else: ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php endif; ?> </ul> <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?> <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($testimonial_repeater_c['comments'])): ?> <div class="comment"> <?php echo wp_kses($testimonial_repeater_c['comments'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <div class="authour_details d_flex align-tems-center<?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> image_yes <?php endif; ?>"> <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> <?php if(!empty($image)): ?> <div class="image"> <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt_image); ?>" /> </div> <?php endif; ?> <?php endif; ?> <div class="details"> <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div> <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span> </div> </div> </div> <?php // style two end ?> <?php // style three start ?> <?php elseif($settings['testimonial_styles'] == 'style_three'): ?> <div class="testimonial_box style_three"> <div class="content_box"> <ul class="rating"> <?php if($rating_one == 'one'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'two'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'three'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'four'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'five'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php else: ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php endif; ?> </ul> <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?> <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($testimonial_repeater_c['comments'])): ?> <div class="comment"> <?php echo wp_kses($testimonial_repeater_c['comments'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <div class="authour_details d_flex align-tems-center<?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> image_yes <?php endif; ?>"> <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> <?php if(!empty($image)): ?> <div class="image"> <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt_image); ?>" /> </div> <?php endif; ?> <?php endif; ?> <div class="details"> <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div> <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span> </div> <div class="quote_icons"><i class="risehand-013-quotation"></i></div> </div> </div> <?php // style three end ?> <?php // style four start ?> <?php elseif($settings['testimonial_styles'] == 'style_four'): ?> <div class="testimonial_box style_four"> <div class="content_box"> <ul class="rating"> <?php if($rating_one == 'one'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'two'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'three'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'four'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'five'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php else: ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php endif; ?> </ul> <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?> <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($testimonial_repeater_c['comments'])): ?> <div class="comment"> <?php echo wp_kses($testimonial_repeater_c['comments'] , $allowed_tags); ?> </div> <?php endif; ?> <div class="authour_details d_flex align-tems-center <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> image_yes <?php endif; ?>"> <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> <?php if(!empty($image)): ?> <div class="image"> <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt_image); ?>" /> </div> <?php endif; ?> <?php endif; ?> <div class="details"> <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div> <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span> </div> </div> </div> <div class="quote_icons"><i class="risehand-013-quotation"></i></div> </div> <?php // style four end ?> <?php // style one start ?> <?php else: ?> <div class="testimonial_box style_one"> <div class="d_flex box_d_flex"> <div class="quote_icons"><i class="risehand-013-quotation"></i></div> <div class="content_box"> <ul class="rating"> <?php if($rating_one == 'one'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'two'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'three'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'four'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star empty"></span></li> <?php elseif($rating_one == 'five'): ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php else: ?> <li><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span><span class="fa fa-star fill"></span></li> <?php endif; ?> </ul> <?php if(!empty($testimonial_repeater_c['highlight_comment'])): ?> <div class="title_no_a_24 mb_15"><?php echo wp_kses($testimonial_repeater_c['highlight_comment'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($testimonial_repeater_c['comments'])): ?> <div class="comment pb_10"> <?php echo wp_kses($testimonial_repeater_c['comments'] , $allowed_tags); ?> </div> <?php endif; ?> <div class="authour_details d_flex align-tems-center <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> image_yes <?php endif; ?>"> <?php if(!empty($testimonial_repeater_c['image_enable']) == true): ?> <?php if(!empty($image)): ?> <div class="image"> <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt_image); ?>" /> </div> <?php endif; ?> <?php endif; ?> <div class="details"> <div class="title_no_a_22"><?php echo esc_attr($testimonial_repeater_c['name']); ?></div> <span class="d-block"><?php echo esc_attr($testimonial_repeater_c['designation']); ?></span> </div> </div> </div> </div> </div> <?php endif; ?> <?php // style one end ?> </div> <?php endforeach; endif;?> </div> </div> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "progressbar"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination test-pagination common-progress"></div> </div> <?php endif; ?> <?php if($settings['arrow_enable'] == true): ?> <div class="arrow_portfolio common_arrow <?php echo esc_attr($settings['arrow_post']); ?>"> <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div> <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div> </div> <?php endif; ?> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "bullets"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination test-pagination common-dots"></div> </div> <?php endif; ?> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "fraction"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination test-pagination common-fraction"></div> </div> <?php endif; ?> </section>
<?php
    }
}