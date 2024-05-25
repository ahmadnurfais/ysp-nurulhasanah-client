<?php

namespace  Risehandaddons\Core\Widgets\Slider;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Slider_v1 extends \Elementor\Widget_Base{
        public function get_name()
        {
            return 'risehand-slider-1';
        }

        public function get_title()
        {
            return __('Slider V1', 'risehand-addons');
        }

        public function get_icon()
        {
            return 'icon-risehand-svg';
        }

        public function get_categories()
        {
            return ['101'];
        } 
        protected function register_controls(){ 
        $this->start_controls_section('slider_v1_settings',
        [ 
            'label' => __('Slider Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'slider_style',
            [
            'label' => __('Slider Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'type_one' => __( 'Slider Type 1', 'risehand-addons' ),
                'type_two' => __( 'Slider Type 2', 'risehand-addons' ),
            ],
            'default' => __('type_one' , 'risehand-addons'),
            ]
        ); 
        $this->add_control(
            'slider_layout',
            [
            'label' => __('Slider Styles', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'auto-container' => esc_html__( 'Auto Container', 'risehand-addons' ),
                'container' => esc_html__( 'Container', 'risehand-addons' ),
                'small-container' => esc_html__( 'Small Container', 'risehand-addons' ),
                'medium-container' => esc_html__( 'Medium Container', 'risehand-addons' ),
                'large-container' => esc_html__( 'Large Container', 'risehand-addons' ),
                'full-container' => esc_html__( 'Full Container', 'risehand-addons' ),
                'container-fluid' => esc_html__( 'Container Fluid', 'risehand-addons' ),
            ],
            'default' => __('auto-container' , 'risehand-addons'),
            ]
        ); 
        $repeater = new \Elementor\Repeater();
        $repeater->add_responsive_control(
            'slideralignment',
            [
                'label' => esc_html__( 'Content Alignment', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__( 'Left', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ], 
                    'center' => [
                        'title' => esc_html__( 'Center', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-center',
                    ], 
                    'right' => [
                        'title' => esc_html__( 'Right', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true, 
            ]
        );
        $repeater->add_control(
            'slider_image',
            [
                'label' => __( 'Slider Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ], 
            ] 
        );  
        $repeater->add_control(
            'icon_type',
            [
              'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
              'type' => \Elementor\Controls_Manager::SELECT,
              'default' => 'solid',
              'options' => [
                'none'  => esc_html__( 'None', 'risehand-addons' ),  
                'risehandicon'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                'eicon'  => esc_html__( 'Icon', 'risehand-addons' ), 
              ], 
            'default' =>  'eicon' ,  
            ]
          );
          $repeater->add_control(
              'image',
              [
                  'label' => __( 'Image', 'risehand-addons' ),
                  'type' => \Elementor\Controls_Manager::MEDIA,
                  'default' => [
                      'url' => \Elementor\Utils::get_placeholder_image_src(),
                  ],
                  'condition' => [
                      'icon_type' => 'image'
                  ],
              ] 
          ); 
          $repeater->add_control(
              'icon',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'risehand-002-healthcare' , 
                  'condition' => [ 
                      'icon_type' => 'risehandicon'
                  ]
              ]
          );
          $repeater->add_control(
              'icon_lib',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'icon_type' => 'eicon'
                  ]
              ]
          ); 
        $repeater->add_control(
            'sm_title',
            [
               'label' => __('Sub Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Non profit Charity Fundation', 'risehand-addons'),
               'placeholder' => __('Type your sub-title here', 'risehand-addons'),    
            ]
        ); 
        $repeater->add_control(
            'title',
            [
               'label' => __('Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Raise Your  Helping Hand', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),    
            ]
        ); 
        $repeater->add_control(
            'content',
            [
            'label'       => esc_html__( 'Content', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXTAREA,
            'default' =>  esc_html__( 'Sorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.' , 'risehand-addons'),
        ]); 
        $repeater->start_controls_tabs(
            'buttontabstart'
        );
        $repeater->start_controls_tab(
            'buttontabone',
            [
                'label' => esc_html__( 'Button One', 'risehand-addons' ),
            ]
        ); 
     
        $repeater->add_control(
            'one_icon_type',
            [
                'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'onone' => esc_html__( 'None', 'risehand-addons' ),
                    'one_risehandicon'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                    'one_eicon'  => esc_html__( 'Icon', 'risehand-addons' ), 
                ], 
                'default' =>  'one_risehandicon' ,  
            ]
          ); 
          $repeater->add_control(
              'one_icon',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'fi-rs-user' , 
                  'condition' => [ 
                      'one_icon_type' => 'one_risehandicon'
                  ]
              ]
          );
          $repeater->add_control(
              'one_icon_lib',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'one_icon_type' => 'one_eicon'
                  ]
              ]
          ); 
        $repeater->add_control(
			'button_text',
			[
				'label'       => esc_html__( 'Button Text', 'risehand-addons' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Read More' , 'risehand-addons'),
		]);

        $repeater->add_control(
            'button_link',
        [
            'label' => __('Theme Link', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => __('https://your-link.com', 'risehand-addons'),
            'show_external' => true,
            'default' => [
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
            ],
        ]
        );  
        $repeater->end_controls_tab();
        $repeater->start_controls_tab(
            'buttontabtwo',
            [
                'label' => esc_html__( 'Button Two', 'risehand-addons' ),
            ]
        );
   
        $repeater->add_control(
            'two_icon_type',
            [
              'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
              'type' => \Elementor\Controls_Manager::SELECT,
              'default' => 'solid',
              'options' => [
                'two_none' => esc_html__( 'None', 'risehand-addons' ),
                'two_risehandicon'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                'two_eicon'  => esc_html__( 'Icon', 'risehand-addons' ), 
              ], 
               'default' =>  'two_risehandicon' ,  
            ]
          ); 
          $repeater->add_control(
              'two_icon',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'fi-rs-user' , 
                  'condition' => [ 
                      'two_icon_type' => 'two_risehandicon'
                  ]
              ]
          );
          $repeater->add_control(
              'two_icon_lib',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'two_icon_type' => 'two_eicon'
                  ]
              ]
          ); 
        $repeater->add_control(
			'two_button_text',
			[
				'label'       => esc_html__( 'Button Text', 'risehand-addons' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Read More' , 'risehand-addons'),
		]);

        $repeater->add_control(
            'two_button_link',
        [
            'label' => __('Theme Link', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::URL,
            'placeholder' => __('https://your-link.com', 'risehand-addons'),
            'show_external' => true,
            'default' => [
                'url' => '#',
                'is_external' => true,
                'nofollow' => true,
            ],
        ]
        );  
        $repeater->end_controls_tab();
        $repeater->end_controls_tabs();
        
        $repeater->add_control(
            'video_enables',
            [
                'label' => esc_html__( 'Video Enable / Disable', 'risehand-addons' ),
                'type' =>  \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $repeater->add_control(
            'video_link',
            [
                'label' => esc_html__( 'Video Link', 'risehand-addons' ),
                'type' =>  \Elementor\Controls_Manager::TEXT,
                'default' => 'https://youtu.be/RN81h85V6D4', // Set the default video link
                'label_block' => true,
                'condition' => [
                    'video_enables' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'content_padding',
            [
               'label' => __('Content Padding', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('0px 10rem 0px 10rem', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'sliderrepeater',
            [
                'label' => __('Slider Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ 
                        'sm_title' =>  __('Non profit Charity Fundation', 'risehand-addons'),
                        'title' =>  __('Raise Your 
                        Helping Hand', 'risehand-addons'),
                        'content'  =>  __('Quis autem veleum iure reprehenderit quinea voluptate velit esse quanihil.', 'risehand-addons'),
                        'button_text'  =>  __('Popular Causes', 'risehand-addons'),
                        'two_button_text'  =>  __('Become a Volunteer', 'risehand-addons'),
                    ],
                    [
                        'sm_title' =>  __('Non profit Charity Fundation', 'risehand-addons'),
                        'title' =>  __('Raise Your 
                        Helping Hand', 'risehand-addons'),
                        'content'  =>  __('Quis autem veleum iure reprehenderit quinea voluptate velit esse quanihil.', 'risehand-addons'),
                        'button_text'  =>  __('Popular Causes', 'risehand-addons'),
                        'two_button_text'  =>  __('Become a Volunteer', 'risehand-addons'),
                    ], 
                    [
                        'sm_title' =>  __('Non profit Charity Fundation', 'risehand-addons'),
                        'title' =>  __('Raise Your 
                        Helping Hand', 'risehand-addons'),
                        'content'  =>  __('Quis autem veleum iure reprehenderit quinea voluptate velit esse quanihil.', 'risehand-addons'),
                        'button_text'  =>  __('Popular Causes', 'risehand-addons'),
                        'two_button_text'  =>  __('Become a Volunteer', 'risehand-addons'),
                    ]
                ],
                'title_field' => '{{{ title }}}',
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
        'duration',
        [
            'label' => __('Slider Duration', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 8000,
            'step'    => 100,
            'default'    => 5000, 
        ]
    ); 
    $this->add_control(
        'speed',
        [
            'label' => __('Slider Speed', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 8000,
            'step'    => 100,
            'default'    => 100, 
        ]
    ); 
    $this->end_controls_section();
    $this->start_controls_section('Slider_css',
    [ 
        'label' => __('Slider Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );
    $this->add_control(
        'slider_parallax',
        [
            'label' => esc_html__('Slider Image Parallax Position', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '50',
            'options' => [
                '0' => esc_html__('0%', 'risehand-addons'),
                '10' => esc_html__('10%', 'risehand-addons'),
                '20' => esc_html__('20%', 'risehand-addons'),
                '30' => esc_html__('30%', 'risehand-addons'),
                '40' => esc_html__('40%', 'risehand-addons'),
                '50' => esc_html__('50%', 'risehand-addons'),
                '60' => esc_html__('60%', 'risehand-addons'),
                '70' => esc_html__('70%', 'risehand-addons'),
                '80' => esc_html__('80%', 'risehand-addons'),
                '90' => esc_html__('90%', 'risehand-addons'),
                '100' => esc_html__('100%', 'risehand-addons'),
            ],
            'description' => esc_html__('Select parallax position', 'risehand-addons'),
        ]
    );
    $this->add_control(
        'slideroverlaycolor',
        [
            'label' => esc_html__( 'Slider Overlay Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1::before' => 'background: {{VALUE}};',
            ], 
            'condition' => [
                'slider_style' => 'type_one',
            ],
        ]
    );  
    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'slideroverlaytwocolor',
            'types' => ['gradient'],
            'selector' => '{{WRAPPER}} .slider_box_V1::before',
            'condition' => [
                'slider_style' => 'type_two',
            ],
        ]
    ); 
    $this->add_control(
        'cssdiv1dps',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'slider_padding',
        [
            'label' => esc_html__( 'Slider  Padding', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .slider_box_V1 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_responsive_control(
        'slider_height',
        [
            'label' => __('Slider Height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 8000,
            'step'    => 1,
            'default'    => 800, 
            'selectors' => [
                '{{WRAPPER}}  .slider_box_V1 ' => 'height: {{VALUE}}px!important;',
            ],
        ]
    ); 
    $this->add_control(
        'slider_c_padding',
        [
            'label' => esc_html__( 'Slider Content Padding', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .slider_box_V1 .slider_content ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'cssdiv1dpss',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'smtitlecolor',
        [
            'label' => esc_html__( 'Small Title Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .smtitle .intitle' => 'color: {{VALUE}};',
            ], 
        ]
    );  
    $this->add_control(
        'small_title_icon_color',
        [
            'label' => esc_html__( 'Small Title Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .smtitle i ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Small Title Typography', 'risehand-addons' ),
            'name' => 'smtypo',
            'selector' => '{{WRAPPER}} .slider_box_V1 .smtitle .intitle ',
        ]
    );
    $this->add_control(
        'small_title_color',
        [
            'label' => esc_html__( 'Small Title Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .smtitle .intitle' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv1dp',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
            'name' => 'titypo',
            'selector' => '{{WRAPPER}} .slider_box_V1 .title ',
        ]
    );
    $this->add_control(
        'title_color',
        [
            'label' => esc_html__( 'Title Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .title ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv1ds',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
            'name' => 'descypo',
            'selector' => '{{WRAPPER}} .slider_box_V1 .content ',
        ]
    );
    $this->add_control(
        'desc_color',
        [
            'label' => esc_html__( 'Content Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .content ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv1',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Button 1 Typography', 'risehand-addons' ),
            'name' => 'btntypo',
            'selector' => '{{WRAPPER}} .slider_box_V1 .theme_btn ',
        ]
    );
    $this->add_control(
        'button_icon_color',
        [
            'label' => esc_html__( 'Button 1 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn .icon i  , {{WRAPPER}} .slider_box_V1 .theme_btn .icon span  ' => 'color: {{VALUE}};',
                '{{WRAPPER}} .slider_box_V1 .theme_btn .icon svg path ' => 'fill: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_color',
        [
            'label' => esc_html__( 'Button 1 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_br_color',
        [
            'label' => esc_html__( 'Button 1 Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn ' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_bg_color',
        [
            'label' => esc_html__( 'Button 1 Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn ' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv2',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'hbutton_icon_color',
        [
            'label' => esc_html__( 'Hover Button 1 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn:hover .icon i , {{WRAPPER}} .slider_box_V1 .theme_btn:hover .icon span ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_color',
        [
            'label' => esc_html__( 'Hover Button 1 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn:hover ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_br_color',
        [
            'label' => esc_html__( 'Hover Button 1 Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn:hover ' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_bg_color',
        [
            'label' => esc_html__( 'Hover Button 1 Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .theme_btn:hover ' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Button 2 Typography', 'risehand-addons' ),
            'name' => 'btn2typo',
            'selector' => '{{WRAPPER}} .slider_box_V1 .text_btn ',
        ]
    );
    $this->add_control(
        'button_icon_color_t',
        [
            'label' => esc_html__( 'Button 2 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .text_btn i  ' => 'color: {{VALUE}};',
                '{{WRAPPER}} .slider_box_V1 .text_btn svg path  ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_color_t',
        [
            'label' => esc_html__( 'Button 2 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .text_btn ' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};',
            ], 
        ]
    );  
    $this->add_control(
        'cssdiv4',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'hbutton_icon_color_t',
        [
            'label' => esc_html__( 'Hover Button 2 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [ 
                '{{WRAPPER}} .slider_box_V1 .text_btn:hover i  ' => 'color: {{VALUE}};',
                '{{WRAPPER}} .slider_box_V1 .text_btn:hover svg path  ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_color_t',
        [
            'label' => esc_html__( 'Hover Button 2 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .text_btn:hover ' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv5',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'video_icon_color',
        [
            'label' => esc_html__( 'Video Icon Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .video_box svg path ' => 'fill: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'video_iconbg_color',
        [
            'label' => esc_html__( 'Video Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .video_box i ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    
    $this->end_controls_section();

    // styling 
    $this->start_controls_section('pattern_content',
    [ 
        'label' => __('Pattern Content', 'risehand-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_STYLE, 
        'condition' => [
            'slider_style' => 'type_one',
        ],
    ]
    );
    $this->add_control(
        'pattern_enables',
        [
            'label' => esc_html__( 'Pattern Enable / Disable', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
            'label_off' => esc_html__( 'No', 'risehand-addons' ),
            'return_value' => 'yes',
            'default' => 'yes',
        ]
    ); 
    $this->add_control(
        'patternone',
        [
            'label' => esc_html__( 'Round Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .slider_box_V1 .round' => 'border-color: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patterntwo',
        [
            'label' => esc_html__( 'Line Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .line_image' => 'background-color: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patternthree',
        [
            'label' => esc_html__( 'Content Bg Pattern Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V1 .slider_content .shape_bg' => 'background-color: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
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
    $this->add_responsive_control(
        'owl_nav_move_top',
        [
            'label' => __('Owl Navigation Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -8000,
            'max'     => 8000,
            'step'    => 1, 
            'selectors' => [
                '{{WRAPPER}}  .swiper_arrows ' => 'top: {{VALUE}}px!important;',
            ],
        ]
    ); 
    $this->add_responsive_control(
        'owl_dot_move_top',
        [
            'label' => __('Owl  Dot Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -8000,
            'max'     => 8000,
            'step'    => 1, 
            'selectors' => [
                '{{WRAPPER}}  .slider_v1 .slider-pagination' => 'bottom: {{VALUE}}px!important;',
            ],
        ]
    ); 
    $this->add_control(
        'nav1color',
        [
            'label' => esc_html__( 'Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .swiper_arrows .arrow-prev:before , {{WRAPPER}} .swiper_arrows .arrow-next:before' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2color',
        [
            'label' => esc_html__( 'Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .swiper_arrows .arrow-prev, {{WRAPPER}} .swiper_arrows .arrow-next' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .swiper_arrows .arrow-prev:hover:before , {{WRAPPER}} .swiper_arrows .arrow-next:hover:before' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hobgcolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Bg Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .swiper_arrows .arrow-prev:hover , {{WRAPPER}} .swiper_arrows .arrow-next:hover' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .swiper_arrows .arrow-prev:hover , {{WRAPPER}} .swiper_arrows .arrow-next:hover' => 'border-color: {{VALUE}};',
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
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet:before ' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav4color',
        [
            'label' => esc_html__( 'Dot Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet ' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav5color',
        [
            'label' => esc_html__( 'Dot Active Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active:before ,
                {{WRAPPER}} .slider-pagination .swiper-pagination-bullet:hover:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav6color',
        [
            'label' => esc_html__( 'Dot Active Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active ,
                 {{WRAPPER}} .slider-pagination .swiper-pagination-bullet:hover ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    );  
    $this->end_controls_section();

    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post'); 
    ?> 
        <section class="slider_v1 sliders_<?php echo esc_attr($settings['slider_style']); ?>"> <div class="swiper swiper-container swiper_container" data-swiper='{ "loop": false, "autoplay": { "delay": "<?php echo esc_attr($settings['duration']); ?>" }, "speed": "<?php echo esc_attr($settings['speed']); ?>", "centeredSlides": false, "parallax":true , "spaceBetween": 0, "navigation": { "nextEl": ".slider-button-next", "prevEl": ".slider-button-prev" }, "pagination": { "el": ".slider-pagination", "clickable": true , "type": "bullets" }, "grabCursor": true, "breakpoints": { "1200": { "slidesPerView": 1 }, "1024": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 }, "576": { "slidesPerView": 1 } } }'> <div class="swiper-wrapper"> <?php foreach($settings['sliderrepeater'] as $sliderrepeater): $content_padding = $sliderrepeater['content_padding']; ?> <div class="swiper-slide"> <div class="slider_box_V1 slideralignment_<?php echo esc_attr($sliderrepeater['slideralignment']); ?>"> <?php if(!empty($sliderrepeater['slider_image']['url'])): ?> <div class="slide-bgimg" style="background-image:url(<?php echo esc_url($sliderrepeater['slider_image']['url']); ?>);" data-swiper-parallax-x="<?php echo esc_attr($settings['slider_parallax']); ?>%"> </div> <?php endif; ?> <?php if($settings['slider_style'] == "type_one"): if($settings['pattern_enables'] == true): ?> <div class="line_image mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-1/line.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-1/line.png' ?>);"> </div> <div class="round"></div> <?php endif; ?> <?php endif;?> <div class="<?php echo esc_attr($settings['slider_layout']); ?>"> <div class="row"> <?php if($sliderrepeater['slideralignment'] == 'right'): ?> <div class="col-lg-5 col-md-12 col-sm-12 text-center"> <?php if(!empty($sliderrepeater['video_enables']) == true): $video_link = $sliderrepeater['video_link']; if(!empty($video_link)): ?> <div class="video_box"> <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image"> <svg class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97"> <path class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/> </svg> <i class="risehand-play1"></i> </a> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="col-md-12 col-sm-12<?php if($sliderrepeater['slideralignment'] == 'center'): ?> col-lg-8 m-auto text-center<?php else: ?> col-lg-7<?php endif; ?>"> <div class="slider_content"<?php if(!empty($content_padding)): ?> style="padding:<?php echo esc_attr($content_padding); ?>;"<?php endif; ?>> <?php if($settings['slider_style'] == "type_one"): if($settings['pattern_enables'] == true): ?> <div class="shape_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-1/shape-bg.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-1/shape-bg.png' ?>);" data-swiper-parallax-y="600"> </div> <?php endif; ?> <?php endif; ?> <?php if(!empty($sliderrepeater['sm_title'])): ?> <div class="smtitle d-flex align-items-center<?php if($sliderrepeater['slideralignment'] == 'center'): ?> justify-content-center<?php endif; ?>" data-swiper-parallax-x="30%" data-swiper-parallax-opacity="0"> <?php if($sliderrepeater['icon_type'] == 'eicon'): ?> <?php if(!empty($sliderrepeater['icon_lib'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['icon_lib'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['icon_type'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['icon'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['icon']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <div class="intitle color_white"> <?php echo wp_kses($sliderrepeater['sm_title'] , $allowed_tags); ?> </div> </div> <?php endif; ?> <?php if(!empty($sliderrepeater['title'])): ?> <div class="title color_white" data-swiper-parallax-x="-50%" data-swiper-parallax-opacity="0"> <?php echo wp_kses($sliderrepeater['title'] , $allowed_tags); ?> </div> <?php endif; ?> <?php if(!empty($sliderrepeater['content'])): ?> <p class="content color_white" data-swiper-parallax-x="-70%" data-swiper-parallax-opacity="0"> <?php echo wp_kses($sliderrepeater['content'] , $allowed_tags); ?> </p> <?php endif; ?> <div class="d-flex align-items-center button_group<?php if($sliderrepeater['slideralignment'] == 'center'): ?> justify-content-center<?php endif; ?>"> <?php if(!empty($sliderrepeater['button_text'])): $target = $sliderrepeater['button_link']['is_external'] ? ' target="_blank"' : ''; $nofollow = $sliderrepeater['button_link']['nofollow'] ? ' rel="nofollow"' : ''; ?> <a class="theme_btn two" href="<?php echo esc_url($sliderrepeater['button_link']['url']);?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> data-swiper-parallax-y="100"> <span> <?php echo esc_html($sliderrepeater['button_text']);?> </span> <?php if($sliderrepeater['one_icon_type'] == 'one_eicon'): ?> <?php if(!empty($sliderrepeater['one_icon_lib'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['one_icon_lib'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['one_icon_type'] == 'onone'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['one_icon'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['one_icon']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </a> <?php endif; ?> <?php if(!empty($sliderrepeater['two_button_text'])): $target_two = $sliderrepeater['two_button_link']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $sliderrepeater['two_button_link']['nofollow'] ? ' rel="nofollow"' : '';?> <a class="text_btn" href="<?php echo esc_url($sliderrepeater['two_button_link']['url']);?>" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?> data-swiper-parallax-y="90"> <?php if($sliderrepeater['two_icon_type'] == 'two_eicon'): ?> <?php if(!empty($sliderrepeater['two_icon_lib'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['two_icon_lib'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['two_icon_type'] == 'two_none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['two_icon'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['two_icon']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <?php echo esc_html($sliderrepeater['two_button_text']);?> </a> <?php endif; ?> </div> <?php if($sliderrepeater['slideralignment'] == 'center'): ?> <?php if(!empty($sliderrepeater['video_enables']) == true): $video_link = $sliderrepeater['video_link']; if(!empty($video_link)): ?> <div class="video_box mt_25 pt_20"> <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image"> <svg class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97"> <path class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/> </svg> <i class="risehand-play1"></i> </a> </div> <?php endif; ?> <?php endif; ?> <?php endif; ?> </div> </div> <?php if($sliderrepeater['slideralignment'] == 'left'): ?> <div class="col-lg-5 col-md-12 col-sm-12 text-center"> <?php if(!empty($sliderrepeater['video_enables']) == true): $video_link = $sliderrepeater['video_link']; if(!empty($video_link)): ?> <div class="video_box"> <a href="<?php echo esc_url($video_link); ?>" class="lightbox-image"> <svg class="zoomInOut" version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 97" width="100" height="97"> <path class="s0" d="m52.2 0.5c28.7-0.7 47 24.4 47.8 51.5-0.3 28.2-22.2 49.6-47.3 44.3-26.2-3-53.7-14.5-52.7-44.3-0.2-27.6 22.5-50.1 52.2-51.5"/> </svg> <i class="risehand-play1"></i> </a> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> </div> </div> </div> </div> <?php endforeach; ?> </div> <div class="swiper_arrows"> <div class="slider-button-next arrow-next"></div> <div class="slider-button-prev arrow-prev"></div> </div> <div class="slider-pagination"></div> </div> </section> 
<?php
    }
}

         