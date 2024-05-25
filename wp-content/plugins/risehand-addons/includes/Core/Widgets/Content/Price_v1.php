<?php

namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Price_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-price-v1';
    }

    public function get_title()
    {
        return __('Price V1', 'risehand-addons');
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
        $this->start_controls_section('price_settins',
        [ 
            'label' => __('Price Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'price_styles',
            [
                'label' => __('Price Style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'type_one'  => __('Price Style One', 'risehand-addons'),
                    'type_two'  => __('Price  Style Two', 'risehand-addons'), 
                ],
                'default' => 'type_one',
               
            ]
        );
        $this->add_control(
            'phr',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater_f_one = new \Elementor\Repeater();
        $this->add_control(
            'active',
            [
                'label' => __('Price Box Active', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'hractic',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $this->add_control(
			'icon_type',
			[
				'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'image' => esc_html__( 'Image', 'risehand-addons' ),
					'icon'  => esc_html__( 'Nioland Icon', 'risehand-addons' ), 
                    'elicon'  => esc_html__( 'Elementor Icon', 'risehand-addons' ), 
				], 
                'default' => 'icon' , 
                'description' => __('Icon is for style 2', 'risehand-addons'),   
			]
		);
        $this->add_control(
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
                'description' => __('Icon is for style 2', 'risehand-addons'),   
            ] 
        );
       
        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => get_risehand_icons(),
                'default' => 'fi-rs-user' , 
                'condition' => [ 
                    'icon_type' => 'icon'
                ],
                'description' => __('Icon is for style 2', 'risehand-addons'),   
            ]
        );
        $this->add_control(
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
                    'icon_type' => 'elicon'
                ], 
                'description' => __('Icon is for style 2', 'risehand-addons'),   
            ]
        );
        $this->add_control(
            'hract',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $this->add_control(
            'tag',
            [
               'label' => __('Tag', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Popular', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
               'description' => __('This Tag for style 1', 'risehand-addons'),   
            ]
        );
        $this->add_control(
          'title',
          [
             'label' => __('Title', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::TEXT,
             'default' => __('Standard Plan', 'risehand-addons'),
             'placeholder' => __('Type your text here', 'risehand-addons'),    
          ]
        );
        $this->add_control(
            'description',
            [
               'label' => __('Description', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Basic features for up to 40 users.', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
         
        $this->add_control(
            'price',
            [
               'label' => __('Price', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('$39.83', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $this->add_control(
            'price_duration',
            [
               'label' => __('Price Duration', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Monthly', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        
        
        $repeater_f_one->add_control(
            'fone_yesno',
            [
                'label' => __('Features Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'yes'  => __('Yes', 'risehand-addons'),
                    'no'  => __('No', 'risehand-addons'), 
                ],
                'default' => 'yes',
            ]
        );
        $repeater_f_one->add_control(
            'features_text_one',
            [
                'label' => __('Enter The Text Here', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Cake & Milk', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'features_this',
            [
                'label' => __( 'Features Repeater', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_f_one->get_controls(),
                'default' => [
                    [
                        'fone_yesno' => 'yes',
                        'features_text_one' => __( 'Complete documentation', 'risehand-addons' ),
                    ],
                    [
                        'fone_yesno' => 'no',
                        'features_text_one' => __( 'Working materials in Figma', 'risehand-addons' ),
                    ],
                    [
                        'fone_yesno' => 'no',
                        'features_text_one' => __( '100GB cloud storage', 'risehand-addons' ),
                    ],
                    [
                        'fone_yesno' => 'yes',
                        'features_text_one' => __( '500 team members', 'risehand-addons' ),
                    ],
                ],
                'title_field' => '{{{ features_text_one }}}',
                'condition' => [],
            ]
        ); 
        $this->add_control(
            'btnone',
            [
                'label'       => esc_html__( 'Button One', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Get started' , 'risehand-addons'),
            ]
        );
        $this->add_control(
            'btnonelink',
            [
                'label' => __('Button One Link', 'risehand-addons'),
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
        $this->add_control(
            'hr6',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'btn2_enable',
            [
                'label' => esc_html__( 'List 2 Enable / Disable', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes', 
            ]
        );
        $this->add_control(
            'btntwo',
            [
                'label'       => esc_html__( 'Button Two', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__('Learn More' , 'risehand-addons'), 
                'condition' => [
                    'btn2_enable' => 'yes'
                ],
            ]
        );
        
        $this->add_control(
            'btntwolink',
            [
                'label' => __('Button Two Link', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'risehand-addons'),
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'btn2_enable' => 'yes'
                ],
            ]
        );
 
    $this->end_controls_section();

    $this->start_controls_section('price_css',
    [ 
        'label' => __('Price Box Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );
    $this->start_controls_tabs(
        'stylewholdtab'
    );
    $this->start_controls_tab(
        'stylepbone',
        [
            'label' => esc_html__( 'Normal', 'risehand-addons' ),
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'background_color',
            'types' => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .price_box ',
        ]
    ); 
    $this->add_control(
        'bgh0100',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'aboxborder',
            'selector' => '{{WRAPPER}} .price_box ',  
            'condition' => [ 
                'price_styles' => 'type_one' ,
            ] ,
        ]
    ); 
    $this->add_control(
        'bgh0990',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_one' , 
            ] ,
        ]
    );
    $this->add_control(
        'price_tagboxsha',
         [
            'label' => __('Price Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box  ' => 'box-shadow: 0px 0px 0px 2px {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two' , 
            ] ,
         ]
    ); 
    $this->add_control(
        'bgh090',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_two' , 
            ] ,
        ]
    ); 
    $this->add_responsive_control(
        'boxpadding',
        [
            'label' => esc_html__( 'Box Padding', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .price_box ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ], 
        ]
    );
    $this->add_control(
        'bgh0',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Tag Typography', 'risehand-addons' ),
            'name' => 'tagtypo',
            'selector' => '{{WRAPPER}} .price_box .badged ',
        ]
    );
    $this->add_control(
        'bghtag0',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'price_tagbg_color',
         [
            'label' => __('Price Box Tag Bg Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .badged  ' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'bgh1',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_one' , 
            ] ,
        ]
    );
    $this->add_control(
        'price_tag_color',
         [
            'label' => __('Price Box Tag Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .badged  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'bgh2',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_one' , 
            ] ,
        ]
    );
    $this->add_control(
        'icon_color',
         [
            'label' => __('Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box.style_four .card-pricing-heading .icon i' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
         ]
    ); 
    $this->add_control(
        'iconbg_color',
         [
            'label' => __('Icon Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box.style_four .card-pricing-heading .icon ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
         ]
    ); 
    $this->add_control(
        'bgh2s',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
            'name' => 'ptitletypo',
            'selector' => '{{WRAPPER}} .price_box .title_no_a_24 ',
        ]
    );
    $this->add_control(
        'price_title_color',
         [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .title_no_a_24 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'bgh3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Content Typography', 'risehand-addons' ),
            'name' => 'pcontentypo',
            'selector' => '{{WRAPPER}} .price_box .info ',
        ]
    );
    $this->add_control(
        'content_color',
         [
            'label' => __('Content Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box  .info ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'bgh4',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Price Typography', 'risehand-addons' ),
            'name' => 'price_amounttypo',
            'selector' => '{{WRAPPER}} .price_box .amount ',
        ]
    );
    $this->add_control(
        'price_color',
         [
            'label' => __('Price Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .amount ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'bgh5',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Month Typography', 'risehand-addons' ),
            'name' => 'mon_amounttypo',
            'selector' => '{{WRAPPER}} .price_box .amount-text ',
        ]
    );
    $this->add_control(
        'month_color',
         [
            'label' => __('Month Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .amount-text ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'bgh6',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'border_color',
         [
            'label' => __('Divider Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
         ]
    ); 
    $this->add_control(
        'bgfeh7',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,  
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Feature Typography', 'risehand-addons' ),
            'name' => 'ftypo',
            'selector' => '{{WRAPPER}} .price_box .nk-list-link li ',
        ]
    );
    $this->add_control(
        'bgh7',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
        ]
    ); 
    $this->add_control(
        'fid_colro',
         [
            'label' => __('Feature Dot Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box.style_four .nk-list-link li .icon ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
         ]
    );
    $this->add_control(
        'bgh8',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
        ]
    );
    $this->add_control(
        'fi_colro',
         [
            'label' => __('Feature Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li em ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_one'
            ]
         ]
    );
    $this->add_control(
        'bgh9',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,  
            'condition' => [ 
                'price_styles' => 'type_one'
            ]
        ]
    );
    $this->add_control(
        'f_colro',
         [
            'label' => __('Feature  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'fidno_colro',
         [
            'label' => __('Feature Dot Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box.style_four .nk-list-link li.f_no .icon ' => 'background: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ]
         ]
    );
    $this->add_control(
        'fno_colro',
         [
            'label' => __('Feature No Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li.f_no ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [ 
                'price_styles' => 'type_two'
            ],
         ]
    );
    
    $this->end_controls_tab();
    $this->start_controls_tab(
        'stylepbtwo',
        [
            'label' => esc_html__( 'Hover /  Active', 'risehand-addons' ),
        ]
    ); 
   
    $this->add_control(
        'hoboxlor',
         [
            'label' => __('Price Hover Boxshadow Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover , {{WRAPPER}} .price_box.active   ' => 'box-shadow:0 0 0 2px {{VALUE}}!important;',
            ],  
         ]
    );
    $this->add_control(
        'hconicon_color',
         [
            'label' => __('Price Icon Hover Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .icon , {{WRAPPER}} .price_box.active .icon ' => 'color: {{VALUE}}!important;',
            ], 
            'condition' => [ 
                'price_styles' => 'type_two'
            ],
         ]
    );
    $this->add_control(
        'hconiconbg_color',
         [
            'label' => __('Price Icon Hover Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .icon , {{WRAPPER}} .price_box.active .icon ' => 'background: {{VALUE}}!important;',
            ], 
            'condition' => [ 
                'price_styles' => 'type_two'
            ],
         ]
    );
    $this->add_control(
        'htah_color',
         [
            'label' => __('Price Tag Hover Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .badged , {{WRAPPER}} .price_box.active .badged ' => 'color: {{VALUE}}!important;',
            ], 
         ]
    );
    $this->add_control(
        'htagbg_color',
         [
            'label' => __('Price Tag Hover Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .badged , {{WRAPPER}} .price_box.active .badged ' => 'background: {{VALUE}}!important;',
            ], 
         ]
    );

    
 
    $this->end_controls_tab();
    $this->end_controls_tabs();  
    $this->end_controls_section();
     // ======================== tab Button css end =========================
     $this->start_controls_section('buttoncss',
     [ 
         'label' => __('Button Css', 'risehand-addons'),
         'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
     ]
     ); 
     $this->start_controls_tabs(
         'style_tabst'
     );
     $this->start_controls_tab(
         'style_normal_tabt',
         [
             'label' => esc_html__( 'Button Css', 'risehand-addons' ),
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Typography::get_type(),
         [
             'label' => esc_html__( 'Button 1 Typography', 'risehand-addons' ),
             'name' => 'btntypo',
             'selector' => '{{WRAPPER}} .price_box .theme_btn.one',
         ]
     );
     $this->add_control(
         'btncolor',
          [
             'label' => __('Button One Color', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::COLOR,
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.one ' => 'color: {{VALUE}}!important;',
             ],
          ]
     );
     $this->add_control(
         'chr66',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'sstborder',
            'selector' => '{{WRAPPER}} .price_box .theme_btn.one ',
        ]
    );
     $this->add_control(
         'chr6',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_control(
         'button_border_radius',
          [
             'label' => __('Button One Radius', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::DIMENSIONS,
             'size_units' => [ 'px', '%', 'em' ],
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.one  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
             ],
          ]
     ); 
     $this->add_control(
         'button_padding_radius',
          [
             'label' => __('Button One Padding', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::DIMENSIONS,
             'size_units' => [ 'px', '%', 'em' ],
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.one  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
             ],
          ]
     ); 
     $this->add_control(
         'chr7',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Background::get_type(),
         [
             'name' => 'background',
             'types' => [ 'classic', 'gradient'],
             'selector' => '{{WRAPPER}} .price_box .theme_btn.one ',
         ]
     );
    
     $this->add_control(
         'tchr66d',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Typography::get_type(),
         [
             'label' => esc_html__( 'Button 2 Typography', 'risehand-addons' ),
             'name' => 'btntwotypo',
             'selector' => '{{WRAPPER}} .price_box .theme_btn.two',
         ]
     );
     $this->add_control(
         'tbtncolor',
          [
             'label' => __('Button Two Color', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::COLOR,
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.two ' => 'color: {{VALUE}}!important;',
             ],
          ]
     );
     $this->add_control(
         'tb1s',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Border::get_type(),
         [
             'name' => 'tborder',
             'selector' => '{{WRAPPER}} .price_box .theme_btn.two ',
         ]
     );
   
     $this->add_control(
         'tb2s',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_control(
         'tbutton_border_radius',
          [
             'label' => __('Button Two Radius', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::DIMENSIONS,
             'size_units' => [ 'px', '%', 'em' ],
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.two  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
             ],
          ]
     ); 
     $this->add_control(
         'tbutton_padding_radius',
          [
             'label' => __('Button Two Padding', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::DIMENSIONS,
             'size_units' => [ 'px', '%', 'em' ],
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.two  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
             ],
          ]
     ); 
     $this->add_control(
         'tb13s',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Background::get_type(),
         [
             'name' => 'tbackground',
             'types' => [ 'classic', 'gradient'],
             'selector' => '{{WRAPPER}} .price_box .theme_btn.two ',
         ]
     );
     $this->end_controls_tab();
     $this->start_controls_tab(
         'style_hover_tabt',
         [
             'label' => esc_html__( 'Button Hover /  Active Css', 'risehand-addons' ),
         ]
     );
     
     $this->add_control(
         'hbtncolor',
          [
             'label' => __('Button One Color', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::COLOR,
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.one:hover , {{WRAPPER}} .price_box.active .theme_btn.one ' => 'color: {{VALUE}}!important;',
             ],
          ]
     );
     $this->add_control(
         'hchr66',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_control(
        'hbtnbrcolor',
         [
            'label' => __('Button One Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .theme_btn.one:hover , {{WRAPPER}} .price_box.active .theme_btn.one ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    
     $this->add_control(
         'hchr7',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Background::get_type(),
         [
             'name' => 'hbackground',
             'types' => [ 'classic', 'gradient'],
             'selector' => '{{WRAPPER}} .price_box .theme_btn.one:hover , {{WRAPPER}} .price_box.active .theme_btn.one ',
         ]
     );
     $this->add_control(
         'htchr66',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_control(
         'htbtncolor',
          [
             'label' => __('Button Two Color', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::COLOR,
             'selectors' => [
                 '{{WRAPPER}} .price_box .theme_btn.two:hover , {{WRAPPER}} .price_box.active .theme_btn.two' => 'color: {{VALUE}}!important;',
             ],
          ]
     );
     $this->add_control(
         'htb1s',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_control(
        'htbtnbrcolor',
         [
            'label' => __('Button Two Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .theme_btn.two:hover , {{WRAPPER}} .price_box.active .theme_btn.two' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
     $this->add_control(
         'htb13s',
         [
             'type' => \Elementor\Controls_Manager::DIVIDER, 
         ]
     );
     $this->add_group_control(
         \Elementor\Group_Control_Background::get_type(),
         [
             'name' => 'htbackground',
             'types' => [ 'classic', 'gradient'],
             'selector' => '{{WRAPPER}} .price_box .theme_btn.two:hover , {{WRAPPER}} .price_box.active .theme_btn.two',
         ]
     );
     $this->end_controls_tab();
     $this->end_controls_tabs();
     $this->end_controls_section(); 

}
protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');   
?>
<?php if($settings['price_styles'] == 'type_two'): ?> <div class="price_box style_four trans<?php if($settings['active'] == 'yes'):?> active<?php endif; ?>"> <div class="nk-pricing-head pb-4"> <?php if(!empty($settings['tag'])): ?> <span class="badged trans font_special"><em class="icon ni-star-fill me-1"></em> <?php echo wp_kses($settings['tag'] , $allowed_tags); ?></span> <?php endif; ?> <div class="card-pricing-heading d_flex"> <?php if($settings['icon_type'] == 'image'): ?> <?php if(!empty($settings['image']['url'])): ?> <div class="icon d_flex"> <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="img" /> </div> <?php endif; ?> <?php elseif($settings['icon_type'] == 'elicon'): ?> <?php if(!empty($settings['icon_lib'])): ?> <div class="icon d_flex"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_lib'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php else: ?> <?php if(!empty($settings['icon'])): ?> <div class="icon d_flex"> <i class="<?php echo esc_attr($settings['icon']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <div class="info"> <?php if(!empty($settings['title'])): ?> <div class="title_no_a_24"><?php echo wp_kses($settings['title'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($settings['description'])): ?> <span><?php echo wp_kses($settings['description'] , $allowed_tags); ?></span> <?php endif; ?> </div> </div> <div class="nk-year-amount amount-wrap"> <?php if(!empty($settings['price'])): ?> <span class="amount h1 mb-0"> <?php echo wp_kses($settings['price'] , $allowed_tags); ?> </span> <?php if(!empty($settings['price_duration'])): ?> <span class="amount-text"> / <?php echo wp_kses($settings['price_duration'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <ul class="nk-list-link"> <?php if(!empty($settings['features_this'])): ?> <?php foreach($settings['features_this'] as $features_text_one):?> <li class="f_<?php echo esc_attr($features_text_one['fone_yesno']); ?>"> <?php if($features_text_one['fone_yesno'] == 'no'): ?> <em class="icon risehand-cross-circle"></em> <?php else: ?> <em class="icon risehand-checkmark1"></em> <?php endif; ?> <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> </div> <div class="nk-pricing-body"> <ul class="gap g-3"> <?php if(!empty($settings['btnone'])): $target_one = $settings['btnonelink']['is_external'] ? ' target="_blank"' : ''; $nofollow_one = $settings['btnonelink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($settings['btnonelink']['url']); ?>" class="theme_btn one" <?php echo esc_attr($target_one); ?> <?php echo esc_attr($nofollow_one); ?>> <?php echo wp_kses($settings['btnone'] , $allowed_tags); ?> <em class="icon risehand-arrow-right"></em> </a> </li> <?php endif; ?> <?php if($settings['btn2_enable'] == 'yes'): ?> <?php if(!empty($settings['btntwo'])): $target_two = $settings['btntwolink']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $settings['btntwolink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($settings['btntwolink']['url']); ?>" class="theme_btn two" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php echo wp_kses($settings['btntwo'] , $allowed_tags); ?> <em class="icon risehand-arrow-right"></em> </a> </li> <?php endif; ?> <?php endif; ?> </ul> </div></div><?php else: ?><div class="price_box style_one style_three trans<?php if($settings['active'] == 'yes'):?> active<?php endif; ?>"> <div class="nk-pricing-head pb-4"> <div class="nk-pricing-title-group d_flex mb-2"> <?php if(!empty($settings['title'])): ?> <div class="title_no_a_24"> <?php echo wp_kses($settings['title'] , $allowed_tags); ?></div> <?php endif; ?> <?php if(!empty($settings['tag'])): ?> <span class="badged trans font_special"><em class="icon ni-star-fill me-1"></em> <?php echo wp_kses($settings['tag'] , $allowed_tags); ?></span> <?php endif; ?> </div> <?php if(!empty($settings['description'])): ?> <p class="text mt-2"> <?php echo wp_kses($settings['description'] , $allowed_tags); ?></p> <?php endif; ?> <ul class="nk-list-link"> <?php if(!empty($settings['features_this'])): ?> <?php foreach($settings['features_this'] as $features_text_one):?> <li> <?php if($features_text_one['fone_yesno'] == 'no'): ?> <em class="icon risehand-cross-circle"></em> <?php else: ?> <em class="icon risehand-checkmark1"></em> <?php endif; ?> <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> </div> <div class="nk-pricing-body"> <div class="nk-year-amount amount-wrap"> <?php if(!empty($settings['price'])): ?> <span class="amount h1 mb-0"> <?php echo wp_kses($settings['price'] , $allowed_tags); ?> </span> <?php if(!empty($settings['price_duration'])): ?> <span class="amount-text"> / <?php echo wp_kses($settings['price_duration'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <ul class="gap g-3"> <?php if(!empty($settings['btnone'])): $target_one = $settings['btnonelink']['is_external'] ? ' target="_blank"' : ''; $nofollow_one = $settings['btnonelink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($settings['btnonelink']['url']); ?>" class="theme_btn one" <?php echo esc_attr($target_one); ?> <?php echo esc_attr($nofollow_one); ?>> <?php echo wp_kses($settings['btnone'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php if($settings['btn2_enable'] == 'yes'): ?> <?php if(!empty($settings['btntwo'])): $target_two = $settings['btntwolink']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $settings['btntwolink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($settings['btntwolink']['url']); ?>" class="theme_btn two" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php echo wp_kses($settings['btntwo'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php endif; ?> </ul> </div></div> <?php endif; ?> 
<?php

    }
}

 