<?php

namespace  Risehandaddons\Core\Widgets\Slider;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Slider_v4 extends \Elementor\Widget_Base{
        public function get_name()
        {
            return 'risehand-slider-4';
        }

        public function get_title()
        {
            return __('Slider V4', 'risehand-addons');
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
        $this->start_controls_section('slider_v4_settings',
        [ 
            'label' => __('Slider Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
                'label' => __( 'Slider Background Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ], 
            ] 
        );  
        $repeater->add_control(
            'icontype',
            [
              'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
              'type' => \Elementor\Controls_Manager::SELECT,
              'default' => 'solid',
              'options' => [
                'none'  => esc_html__( 'None', 'risehand-addons' ),  
                'risehandicon'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                'fontawesome'  => esc_html__( 'Icon', 'risehand-addons' ), 
              ], 
            'default' =>  'risehandicon' ,  
            ]
          ); 
          $repeater->add_control(
              'icon_fonts',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'risehand-002-healthcare' , 
                  'condition' => [ 
                      'icontype' => 'risehandicon'
                  ]
              ]
          );
          $repeater->add_control(
              'icon_fontawesome',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'icontype' => 'fontawesome'
                  ]
              ]
          ); 
        $repeater->add_control(
            'small_title',
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
            'button_icontypeone',
            [
                'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'none' => esc_html__( 'None', 'risehand-addons' ),
                    'custom'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                    'fontawesome'  => esc_html__( 'Icon', 'risehand-addons' ), 
                ], 
                'default' =>  'custom' ,  
            ]
          ); 
          $repeater->add_control(
              'button_icontype',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'nioland-cheveron-right' , 
                  'condition' => [ 
                      'button_icontypeone' => 'custom'
                  ]
              ]
          );
          $repeater->add_control(
              'button_iconfontawe',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'button_icontypeone' => 'fontawesome'
                  ]
              ]
          ); 
        $repeater->add_control(
			'button_one',
			[
				'label'       => esc_html__( 'Button Text', 'risehand-addons' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Read More' , 'risehand-addons'),
		]);

        $repeater->add_control(
            'button_1_link',
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
            'button_icontypetwo',
            [
                'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'none' => esc_html__( 'None', 'risehand-addons' ),
                    'custom'  => esc_html__( 'Risehand Icon', 'risehand-addons' ), 
                    'fontawesome'  => esc_html__( 'Icon', 'risehand-addons' ), 
                ], 
                'default' =>  'custom' ,  
            ]
          ); 
          $repeater->add_control(
              'button_icon_two',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'fi-rs-user' , 
                  'condition' => [ 
                      'button_icontypetwo' => 'custom'
                  ]
              ]
          );
          $repeater->add_control(
              'button_iconfontawetwo',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::ICONS,
                  'default' => [
                      'value' => 'fab fa-facebook-f',
                      'library' => 'fa-brands',
                  ],
                  'label_block' => true,
                  'condition' => [ 
                      'button_icontypetwo' => 'fontawesome'
                  ]
              ]
          ); 
        $repeater->add_control(
			'button_two',
			[
				'label'       => esc_html__( 'Button Text', 'risehand-addons' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Read More' , 'risehand-addons'),
		]);

        $repeater->add_control(
            'button_2_link',
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
            'slidiv1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater->add_control(
            'image_enable',
            [
                'label' => esc_html__( 'Image Enable / Disable', 'risehand-addons' ),
                'type' =>  \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
          // Slider Image Type
        $repeater->add_control(
            'image_type',
            [
                'label' => esc_html__( 'Slider Image Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'mask' => esc_html__( 'Mask Image', 'risehand-addons' ),
                    'normal' => esc_html__( 'Normal Image', 'risehand-addons' ),
                ],
                'default' => 'mask',
                'description' => esc_html__( 'Select Image Type', 'risehand-addons' ),
                'condition' => [
                    'image_enable' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'slider_content_image',
            [
                'label' => __( 'Slider Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ], 
                'condition' => [
                    'image_enable' => 'yes',
                ],
            ] 
        );  
        
        $this->add_control(
            'slider_repeater',
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
            'default'    => 600, 
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
            'label' => esc_html__( 'Slider Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4::before' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv0',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'small_title_icon_color',
        [
            'label' => esc_html__( 'Small Title Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .smtitle i ' => 'color: {{VALUE}};',
                '{{WRAPPER}} .slider_box_V4 .smtitle svg path' => 'fill: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Small Title Typography', 'risehand-addons' ),
            'name' => 'smtypo',
            'selector' => '{{WRAPPER}} .slider_box_V4 .smtitle .intitle ',
        ]
    );
    $this->add_control(
        'small_title_color',
        [
            'label' => esc_html__( 'Small Title Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .smtitle .intitle' => 'color: {{VALUE}};',
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
            'selector' => '{{WRAPPER}} .slider_box_V4 .title ',
        ]
    );
    $this->add_control(
        'title_color',
        [
            'label' => esc_html__( 'Title Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .title ' => 'color: {{VALUE}};',
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
            'selector' => '{{WRAPPER}} .slider_box_V4 .content ',
        ]
    );
    $this->add_control(
        'desc_color',
        [
            'label' => esc_html__( 'Content Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .content ' => 'color: {{VALUE}};',
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
            'selector' => '{{WRAPPER}} .slider_box_V4 .theme_btn ',
        ]
    );
    $this->add_control(
        'button_icon_color',
        [
            'label' => esc_html__( 'Button 1 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two .icon i  , {{WRAPPER}} .slider_box_V4 .theme_btn.two .icon span ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_color',
        [
            'label' => esc_html__( 'Button 1 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_br_color',
        [
            'label' => esc_html__( 'Button 1 Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two ' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_bg_color',
        [
            'label' => esc_html__( 'Button 1 Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two ' => 'background: {{VALUE}};',
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
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two:hover .icon i , {{WRAPPER}} .slider_box_V4 .theme_btn.two:hover .icon span ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_color',
        [
            'label' => esc_html__( 'Hover Button 1 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two:hover ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_br_color',
        [
            'label' => esc_html__( 'Hover Button 1 Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two:hover ' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_bg_color',
        [
            'label' => esc_html__( 'Hover Button 1 Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .theme_btn.two:hover ' => 'background: {{VALUE}};',
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
            'selector' => '{{WRAPPER}} .slider_box_V4 .text_btn ',
        ]
    );
    $this->add_control(
        'button_icon_color_t',
        [
            'label' => esc_html__( 'Button 2 Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .text_btn .icon i , {{WRAPPER}} .slider_box_V4 .text_btn .icon span  ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'button_color_t',
        [
            'label' => esc_html__( 'Button 2 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .text_btn ' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};', 
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
                '{{WRAPPER}} .slider_box_V4 .text_btn:hover .icon i  , {{WRAPPER}} .slider_box_V4 .text_btn:hover .icon span' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'hbutton_color_t',
        [
            'label' => esc_html__( 'Hover Button 2 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_box_V4 .text_btn:hover ' => 'color: {{VALUE}};text-decoration-color: {{VALUE}};',
            ], 
        ]
    ); 
     
     
    $this->end_controls_section();

    // styling 
    $this->start_controls_section('pattern_content',
    [ 
        'label' => __('Pattern Content', 'risehand-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_STYLE, 
      
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
            'label' => esc_html__( 'Pattern Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_type_v4 .hand_image_1' => 'background: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patterntwo',
        [
            'label' => esc_html__( 'Pattern Color 2', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_type_v4 .hand_image_2 ' => 'background: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patternthree',
        [
            'label' => esc_html__( 'Pattern Color 3', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_type_v4 .hand_image_0 ' => 'background: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patternfour',
        [
            'label' => esc_html__( 'Pattern Color 4', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .slider_type_v4 .line_image_2 ' => 'background: {{VALUE}};',
            ],
            'condition' => [
                'pattern_enables' => 'yes',
            ],
        ]
    ); 
    $this->add_control(
        'patternfive',
        [
            'label' => esc_html__( 'Pattern Color 5', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider_type_v4 .line_image_1 ' => 'background: {{VALUE}};',
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
                '{{WRAPPER}}  .swiper_arrows   ' => 'top: {{VALUE}}px!important;',
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
                '{{WRAPPER}}    .slider_v4 .slider-pagination' => 'top: {{VALUE}}px!important;',
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
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav4color',
        [
            'label' => esc_html__( 'Dot Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .slider-pagination .swiper-pagination-bullet ' => 'border-color: {{VALUE}}!important;',
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
    <section class="slider_v4 slider_type_v4"> <div class="swiper swiper-container swiper_container loading" data-swiper='{ "loop": false, "autoplay": { "delay": "<?php echo esc_attr($settings['duration']); ?>" }, "speed": "<?php echo esc_attr($settings['speed']); ?>", "centeredSlides": false, "parallax" : true, "spaceBetween": 0, "navigation": { "nextEl": ".slider-button-next", "prevEl": ".slider-button-prev" }, "pagination": { "el": ".slider-pagination", "clickable": true , "type": "bullets" }, "grabCursor": true, "breakpoints": { "1200": { "slidesPerView": 1 }, "1024": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 }, "576": { "slidesPerView": 1 } } }'> <div class="swiper-wrapper"> <?php if(!empty($settings['slider_repeater'])): foreach($settings['slider_repeater'] as $key => $sliderrepeater): $slider_content_image = ''; $alt_slider_content_image = ''; if (!empty($sliderrepeater['slider_content_image']['url'])) { $slider_content_image = $sliderrepeater['slider_content_image']['url']; $alt_slider_content_image = $sliderrepeater['slider_content_image']['alt']; $alt_slider_content_image = !empty($alt_slider_content_image) ? $alt_slider_content_image : 'slider-image-one'; } ?> <div class="swiper-slide"> <div class="slider_box_V4 <?php if(!empty($sliderrepeater['image_enable'] == true)): ?> image_enable<?php endif; ?> slideralignment_<?php echo esc_attr($sliderrepeater['slideralignment']); ?> imgae_<?php echo esc_attr($sliderrepeater['image_type']); ?>"> <?php if(!empty($sliderrepeater['slider_image']['url'])): $slider_images = $sliderrepeater['slider_image']['url']; $alt_slider = $sliderrepeater['slider_image']['alt']; if(!empty($alt_slider)){ $alt_slider = $alt_slider; }else{ $alt_slider = 'slider-image'; } ?> <div class="slide-bgimg" style="background-image:url(<?php echo esc_url($slider_images); ?>);" data-swiper-parallax-x="<?php echo esc_attr($settings['slider_parallax']); ?>%"> </div> <?php endif; ?> <?php if($settings['pattern_enables']): ?> <div class="hand_image_2 mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-3.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-3.png' ?>);"> </div> <div class="hand_image_1 mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-2.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-2.png' ?>);"> </div> <div class="hand_image_0 mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-4.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-4.png' ?>);"> </div> <div class="line_image_2 mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/line-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/line-1.png' ?>);"> </div> <div class="line_image_1 mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/shape-1.png' ?>);"> </div> <?php endif; ?> <div class="<?php echo esc_attr($settings['slider_layout']); ?>"> <div class="row"> <?php if($sliderrepeater['slideralignment'] == 'right'): ?> <div class="col-lg-6 col-md-12 col-sm-12 p-sm-0"> <?php if(!empty($sliderrepeater['image_enable'])): ?> <div class="position-relative"> <?php if(!empty($slider_content_image)): ?> <?php if($sliderrepeater['image_type'] == 'normal'): ?> <div class="round_big"></div> <div class="slider_image"> <img src="<?php echo esc_url($slider_content_image); ?>" class="img-fluid " alt="<?php echo esc_attr($alt_slider_content_image); ?>" data-swiper-parallax-x="-160%" data-swiper-parallax-opacity="0" /> </div> <?php else: ?> <div class="round_big"></div> <div class="slider_image_bg" style=" background-image:url(<?php echo esc_url($slider_content_image); ?>);mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);" data-swiper-parallax-y="600"> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> </div> <?php endif; ?> <div class="col-lg-6 col-md-12 col-sm-12"> <div class="slider_content"> <?php if(!empty($sliderrepeater['small_title'])): ?> <div class="smtitle d-flex align-items-center" data-swiper-parallax-x="30%" data-swiper-parallax-opacity="0"> <?php if($sliderrepeater['icontype'] == 'fontawesome'): ?> <?php if(!empty($sliderrepeater['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['icontype'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['icon_fonts'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['icon_fonts']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <div class="intitle color_white"> <?php echo wp_kses($sliderrepeater['small_title'] , $allowed_tags); ?> </div> </div> <?php endif; ?> <?php if(!empty($sliderrepeater['title'])): ?> <div class="title color_white" data-swiper-parallax-x="-50%" data-swiper-parallax-opacity="0"> <?php echo wp_kses($sliderrepeater['title'] , $allowed_tags); ?> </div> <?php endif; ?> <?php if(!empty($sliderrepeater['content'])): ?> <p class="content color_white" data-swiper-parallax-x="-70%" data-swiper-parallax-opacity="0"> <?php echo wp_kses($sliderrepeater['content'] , $allowed_tags); ?> </p> <?php endif; ?> <div class="d-flex align-items-center button_group"> <?php if(!empty($sliderrepeater['button_one'])): $target = ''; $btnnofollowone = ''; if (!empty( $sliderrepeater['button_1_link']['url'])) { $target = $sliderrepeater['button_1_link']['is_external'] ? ' target="_blank"' : ''; $nofollow = $sliderrepeater['button_1_link']['nofollow'] ? ' rel="nofollow"' : ''; } ?> <a class="theme_btn two" href="<?php echo esc_url($sliderrepeater['button_1_link']['url']);?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?> data-swiper-parallax-y="100"> <span> <?php echo esc_html($sliderrepeater['button_one']);?> </span> <?php if($sliderrepeater['button_icontypeone'] == 'one_eicon'): ?> <?php if(!empty($sliderrepeater['button_iconfontawe'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['button_iconfontawe'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['button_icontypeone'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['button_icontype'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['button_icontype']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </a> <?php endif; ?> <?php if(!empty($sliderrepeater['button_two'])): $btntargettwo = ''; $btnnofollowtwo = ''; if (!empty($sliderrepeater['button_2_link']['url'])) { $btntargettwo = $sliderrepeater['button_2_link']['is_external'] ? ' target="_blank"' : ''; $btnnofollowtwo = $sliderrepeater['button_2_link']['nofollow'] ? ' rel="nofollow"' : ''; } ?> <a class="text_btn" href="<?php echo esc_url($sliderrepeater['button_2_link']['url']);?>" <?php echo esc_attr($btntargettwo); ?> <?php echo esc_attr($btnnofollowtwo); ?> data-swiper-parallax-y="90"> <?php if($sliderrepeater['button_icontypetwo'] == 'fontawesome'): ?> <?php if(!empty($sliderrepeater['button_iconfontawetwo'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($sliderrepeater['button_iconfontawetwo'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($sliderrepeater['button_icontypetwo'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($sliderrepeater['button_icon_two'])): ?> <div class="icon"> <i class="<?php echo esc_attr($sliderrepeater['button_icon_two']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <?php echo esc_html($sliderrepeater['button_two']);?> </a> <?php endif; ?> </div> </div> </div> <?php if($sliderrepeater['slideralignment'] == 'left'): ?> <div class="col-lg-6 col-md-12 col-sm-12 p-sm-0"> <?php if(!empty($sliderrepeater['image_enable'] == true)): ?> <div class="position-relative"> <?php if(!empty($slider_content_image)): ?> <?php if($sliderrepeater['image_type'] == 'normal'): ?> <div class="round_big"></div> <div class="slider_image"> <img src="<?php echo esc_url($slider_content_image); ?>" class="img-fluid " alt="<?php echo esc_attr($alt_slider_content_image); ?>" data-swiper-parallax-x="-160%" data-swiper-parallax-opacity="0" /> </div> <?php else: ?> <div class="round_big"></div> <div class="slider_image_bg" style=" background-image:url(<?php echo esc_url($slider_content_image); ?>);mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);" data-swiper-parallax-y="600"> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> </div> <?php endif; ?> </div> </div> </div> </div> <?php endforeach; ?> <?php endif; ?> </div> <div class="swiper_arrows"> <div class="slider-button-prev arrow-prev"></div> <div class="slider-button-next arrow-next"></div> </div> <div class="slider-pagination"></div></div> </section> 
 
<?php
    }
}

         