<?php

namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Tab_with_content_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-tab-with-content-v1';
    }

    public function get_title()
    {
        return __('Tab With Content V1' , 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['102'];
    }
 
    protected function register_controls() {
		$this->start_controls_section(
			'tab_content',
			[
				'label' => esc_html__( 'Tab Content', 'risehand-addons' ),
			]
        );
         
        $this->add_control(
            'alignment_one',
            [
                'label' => esc_html__( 'Tab Button Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'inline' => esc_html__( 'Inline', 'risehand-addons' ),
                    'seperate' => esc_html__( 'List View', 'risehand-addons' ),
                ],
                'default' => 'inline',
            ]
        );  
        $this->add_responsive_control(
			'contentpadding',
			[
				'label' => esc_html__( 'Content Padding', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}}  .tab_content_box .content_box ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				], 
			]
		); 
        $this->add_responsive_control(
            'image_width',
            [
                'label' => __('Image Witdh', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'default' => 50,
                'min'     => 1,
                'max'     => 100,
                'step'    => 1,  
                'selectors' => [
                    '{{WRAPPER}}  .risehand_tab .s_tabs_content .tab_content .d_flex .image-box ' => 'min-width: {{VALUE}}%!important;',   
                ], 
            ]
        );
        $this->add_control(
            'hr1',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater_f_one = new \Elementor\Repeater();
        $repeater_f_two = new \Elementor\Repeater();
        $repeater->add_control(
            'tab_alignment',
            [
                'label' => esc_html__( 'Tab Content Alignment', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'default' => [
                        'title' => esc_html__( 'Default Alignment', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-center',
                    ], 
                    'left' => [
                        'inline' => esc_html__( 'Alignment Left', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    
                    'right' => [
                        'title' => esc_html__( 'Alignment Right', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ], 
                ],
                'default' => 'default',
                'toggle' => true, 
            ]
        );  
        $repeater->add_control(
            'h2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater->add_control(
            'tab_id',
            [
                'label'       => esc_html__( 'Tab ID', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'tab_default' , 'risehand-addons'),
                'description' =>  esc_html__( 'Please Enter the tab id like this example : (tab_one , tab_two , tab_three)' , 'risehand-addons'),
            ]
        );
        $repeater->add_control(
            'h1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater->add_control(
            'tab_title',
            [
                'label'       => esc_html__( 'Tab', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Planting' , 'risehand-addons'),
                 
            ]
        );
       
        $repeater->add_control(
            'h3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater->add_control(
            'tab_image',
            [
                'label' => __( 'Content Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],  
            ] 
        );
        $repeater->add_control(
            'hrl',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater->add_control(
            'con_title',
            [
                'label'       => esc_html__( 'Title', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'default' =>  esc_html__( 'Capture leads and make buying easy' , 'risehand-addons'),
            ]
        );
        $repeater->add_control(
            'hr2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater->add_control(
            'con_des',
            [
                'label'       => esc_html__( 'Tab Content', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'default' =>  esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae' , 'risehand-addons'),
 
            ]
        );
        $repeater->add_control(
            'hr3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater_f_one->add_control(
            'list_type',
            [
                'label' => esc_html__( 'List Types', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'no_type' => esc_html__( 'Select List Type', 'risehand-addons' ),
                    'dots' => esc_html__( 'Dots', 'risehand-addons' ),
                    'icons' => esc_html__( 'Icons', 'risehand-addons' ),
                    'numbers' => esc_html__( 'Numbers', 'risehand-addons' ),
                ],
                'default' => 'dots',
            ]
        ); 
        $repeater_f_one->add_control(
            'icontype',
            [
                'label' => esc_html__( 'Icon Library Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'custom' => esc_html__( 'Risehand Custom Icons', 'risehand-addons' ),
                    'fontawesome' => esc_html__( 'Font Awesome 5', 'risehand-addons' ),
                    'icon_image_enable' => esc_html__( 'Icon Image Type', 'risehand-addons' ),
                    'disable_icon' => esc_html__( 'Disable Icon', 'risehand-addons' ),
                ],
                'default' => 'custom',
                'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
                'condition' => [
                    'list_type' => 'icons',
                ],
            ]
        ); 
          $repeater_f_one->add_control(
              'icon_images',
              [
                  'label' => __( 'Image', 'risehand-addons' ),
                  'type' => \Elementor\Controls_Manager::MEDIA,
                  'default' => [
                      'url' => \Elementor\Utils::get_placeholder_image_src(),
                  ],
                  'condition' => [
                      'icontype' => 'icon_image_enable'
                  ],
              ] 
          ); 
          $repeater_f_one->add_control(
              'icon_fonts',
              [
                  'label' => __('Icon', 'risehand-addons'),
                  'type' => \Elementor\Controls_Manager::SELECT2,
                  'options' => get_risehand_icons(),
                  'default' => 'risehand-chevron-right' , 
                  'condition' => [ 
                      'icontype' => 'custom'
                  ]
              ]
          );
        $repeater_f_one->add_control(
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

        $repeater_f_one->add_control(
            'list_items',
            [
                'label' => __('Enter The Text Here', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('100GB cloud storage', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        ); 
        $repeater->add_control(
            'list_repeater',
            [
                'label' => __( 'Features Repeater', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_f_one->get_controls(),
                'default' => [
                    [ 
                        'list_items' => __( 'Complete documentation', 'risehand-addons' ),
                    ],
                    [ 
                        'list_items' => __( 'Working materials in Figma', 'risehand-addons' ),
                    ],
                    [ 
                        'list_items' => __( '100GB cloud storage', 'risehand-addons' ),
                    ],
                    [ 
                        'list_items' => __( '500 team members', 'risehand-addons' ),
                    ],
                ],
                'title_field' => '{{{ list_items }}}', 
            ]
        ); 
          
        $repeater->add_control(
            'hr5',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        ); 
        $repeater->add_control(
            'button_text',
            [
                'label'       => esc_html__( 'Button Text', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXTAREA,
                'default' =>  esc_html__( 'Get started' , 'risehand-addons'),
            ]
        );
        
        $repeater->add_control(
            'button_link',
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
            'content_repeater',
            [
                'label' => __( 'Tab Content Repeater', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'tab_title' => __( 'About Us', 'risehand-addons' ),
                        'tab_id' => __( 'tab1', 'risehand-addons' ),
                        'con_title' => __( 'About Us', 'risehand-addons' ),
                        'con_des' => __( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae', 'risehand-addons' ),
                        'list_items' => __( 'Best Insurance Agency
                        Trusted & Experience Insurance
                        Dedicated Support & Security', 'risehand-addons' ),
                        
                    ],
                    [
                        'tab_title' => __( 'Mission', 'risehand-addons' ),
                        'tab_id' => __( 'tab2', 'risehand-addons' ),
                        'con_title' => __( 'Mission', 'risehand-addons' ),
                        'con_des' => __( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae', 'risehand-addons' ),
                        'list_items' => __( 'Best Insurance Agency
                        Trusted & Experience Insurance
                        Dedicated Support & Security', 'risehand-addons' ),
                        
                    ],
                    [
                        'tab_title' => __( 'Vission', 'risehand-addons' ),
                        'tab_id' => __( 'tab3', 'risehand-addons' ),
                        'con_title' => __( 'Vission', 'risehand-addons' ),
                        'con_des' => __( 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae', 'risehand-addons' ),
                        'list_items' => __( 'Best Insurance Agency
                        Trusted & Experience Insurance
                        Dedicated Support & Security', 'risehand-addons' ),
                     
                    ] 
                ],
                'title_field' => '{{{tab_title}}}',
            ]
        );
 
     $this->end_controls_section(); 

     
    $this->start_controls_section('tabcontentcss',
     [ 
         'label' => __('Tab Content Css', 'risehand-addons'),
         'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
     ]
    ); 
    $this->add_control(
        'imgaligns',
        [
            'label' => esc_html__( 'Tab Content Alignment', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'flex-start' => [
                    'title' => esc_html__( 'Alignment Left', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-left',
                ], 
                'center' => [
                    'inline' => esc_html__( 'Alignment Center', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-center',
                ], 
                'flex-end' => [
                    'title' => esc_html__( 'Alignment Right', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-right',
                ], 
            ],
            'default' => 'flex-start',
            'toggle' => true, 
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns ' => 'justify-content: {{VALUE}}!important;',
            ],
        ]
    ); 
    
     $this->add_control(
        'image_css',
         [
            'label' => __('Tab Image Border Radius', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .tab_content .d_flex .image-box img ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
         ]
    );

    $this->add_control(
        'objectfit',
        [
            'label' => esc_html__( 'Object Fit', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'contain' => [
                    'title' => esc_html__( 'Object Fit Contain', 'risehand-addons' ),
                    'icon' => 'fa fa-image',
                ], 
                'cover' => [
                    'inline' => esc_html__( 'Object Fit Cover', 'risehand-addons' ),
                    'icon' => 'eicon-image-bold',
                ], 
            ],
            'default' => 'default',
            'toggle' => true,  
            'selectors' => [
                '{{WRAPPER}}  .risehand_tab .s_tabs_content .tab_content .d_flex .image-box img ' => 'object-fit: {{VALUE}}!important;',
            ],
        ]
    ); 
 
    $this->add_control(
        'chr3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'tcolor',
         [
            'label' => __('Tab Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'tbgcolor',
         [
            'label' => __('Tab Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'tbrcolor',
         [
            'label' => __('Tab Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Tab Typography', 'risehand-addons' ),
            'name' => 'titletypo', 
            'selector' => '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a',  
        ]
    );
    $this->add_control(
        'chr31',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'thcolor',
         [
            'label' => __('Hover Tab Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a:hover , {{WRAPPER}} .risehand_tab .showcase_tabs_btns li a.active ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'thbgcolor',
         [
            'label' => __('Hover Tab Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a:hover , {{WRAPPER}} .risehand_tab .showcase_tabs_btns li a.active ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'thbrcolor',
         [
            'label' => __('Hover Tab Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .showcase_tabs_btns li a:hover , {{WRAPPER}} .risehand_tab .showcase_tabs_btns li a.active ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'chr4',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'contenttcolor',
         [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .s_tab .title_no_a_36 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
            'name' => 'titlettypo', 
            'selector' => '{{WRAPPER}} .risehand_tab .s_tabs_content .s_tab .title_no_a_36 ',  
        ]
    );
    $this->add_control(
        'chr4s',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'contentcolor',
         [
            'label' => __('Content Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .risehand_tab .s_tabs_content .s_tab .content p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Content Typography', 'risehand-addons' ),
            'name' => 'contenttypo',
            'selector' => '{{WRAPPER}} .risehand_tab .s_tabs_content .s_tab .content p',  
        ]
    );
    $this->add_control(
        'chr5',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );  
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'List Typography', 'risehand-addons' ),
            'name' => 'list_typo',
            'selector' => '{{WRAPPER}} .list_items .title_no_a_18',
        ]
    );
    $this->add_control(
        'list_color',
         [
            'label' => __('List Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_items .title_no_a_18' => 'color: {{VALUE}};',
            ],
         ]
    );
     
    $this->add_control(
        'dot_icon_color',
         [
            'label' => __('Dot / Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .list_items::marker , {{WRAPPER}} .list_items_box li.icons i , {{WRAPPER}} .list_items_box li.icons span' => 'color: {{VALUE}};',
                '{{WRAPPER}} .list_items_box li.icons svg path' => 'fill: {{VALUE}};',
            ],
         ]
    );
    $this->add_control(
        'chr5s',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );  
    $this->add_control(
        'btncolor',
         [
            'label' => __('Button Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'border',
            'selector' => '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn  ',
        ]
    );
   
    $this->add_control(
        'button_border_radius',
         [
            'label' => __('Button Radius', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'button_padding_radius',
         [
            'label' => __('Button Padding', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'btnbgcolor',
         [
            'label' => __('Button Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'chr5ss',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );  
    $this->add_control(
        'hoverbtncolor',
         [
            'label' => __('Hover Button  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn:hover ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'hoverbtnbrcolor',
         [
            'label' => __('Hover Button Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn:hover ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'hoverbtnbgcolor',
         [
            'label' => __('Hover Button Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .risehand_tab .s_tabs_content .theme_btn:hover ' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->end_controls_section(); 
}
protected function render() {
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?>
    <section class="risehand_tab"><div class="tab_over_all_box <?php if($settings['alignment_one'] == "seperate"): ?> d_flex liseperate<?php endif; ?>"> <div class="tabs_header clearfix"> <ul class="showcase_tabs_btns mb_20 clearfix"> <?php if(!empty($settings['content_repeater'])): foreach($settings['content_repeater'] as $key => $tabs_block_one):?> <li class="nav-item"> <a class="s_tab_btn theme_btn <?php if($key == 0) echo 'active';?>" data-tab="#tab<?php echo esc_attr($tabs_block_one['tab_id']); ?>"> <?php if(!empty($tabs_block_one['tab_title'])): ?> <?php echo esc_html($tabs_block_one['tab_title']); ?><?php endif;?> <i class="risehand-chevrons-right"></i> </a> </li> <?php endforeach; endif;?> </ul> </div> <div class="s_tab_wrapper"> <div class="s_tabs_content"> <?php if(!empty($settings['content_repeater'])): foreach($settings['content_repeater'] as $key => $tabs_block_one): $tab_image = ''; $alt_tab_image = ''; if (!empty($tabs_block_one['tab_image']['url'])) { $tab_image = $tabs_block_one['tab_image']['url']; $alt_tab_image = 'icon'; if(!empty($list_repeater['tab_image']['alt'])){ $alt_tab_image = $list_repeater['tab_image']['alt']; } } $list_repeaters = $tabs_block_one['list_repeater']; $tab_alignment = isset($tabs_block_one['tab_alignment']) ? $tabs_block_one['tab_alignment'] : ''; ?> <div class="s_tab fade <?php if($key == 0) echo 'active-tab show';?>" id="tab<?php echo esc_attr($tabs_block_one['tab_id']); ?>"> <div class="tab_content one align_<?php echo esc_attr($tab_alignment); ?>"> <div class="d_flex align-items-center"> <?php if(!empty($tab_image)): ?> <div class="image-box"> <img src="<?php echo esc_url($tab_image); ?>" class="img-fluid" alt="<?php echo esc_attr($alt_tab_image); ?>" /> </div> <?php endif; ?> <div class="content"> <?php if(!empty($tabs_block_one['con_title'])): ?> <div class="title_no_a_36 mb_20"><?php echo esc_html($tabs_block_one['con_title']); ?></div> <?php endif;?> <?php if(!empty($tabs_block_one['con_des'])): ?> <p class="mb_20"><?php echo esc_html($tabs_block_one['con_des']); ?></p> <?php endif;?> <?php if(!empty($list_repeaters)): ?> <ul class="list_items_box"> <?php foreach($list_repeaters as $key => $list_repeater): ?> <li class="list_items trans <?php if(!empty($list_repeater['list_type'])): echo esc_attr($list_repeater['list_type']); endif; ?>"> <div class="l_box d_flex align-items-start"> <?php if($list_repeater['list_type'] == 'icons'): ?> <div class="icon_box<?php if( $list_repeater['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $list_repeater['icontype'] == 'icon_image_enable'): $icon_images = ''; if (!empty($list_repeater['icon_images']['url'])) { $icon_images = $list_repeater['icon_images']['url']; $alt_icon_images = 'icon'; if(!empty($list_repeater['icon_images']['alt'])){ $alt_icon_images = $list_repeater['icon_images']['alt']; } } if(!empty($icon_images)): ?> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> <?php endif; ?> <?php elseif(!empty($list_repeater['icontype']) == 'custom'): ?> <span class="<?php echo esc_html( $list_repeater['icon_fonts']); ?>"></span> <?php elseif(!empty($list_repeater['icontype']) == 'fontawesome'): ?> <?php if(!empty($list_repeater['icon_fontawesome'])): ?> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> <?php endif; ?> <?php else: ?> <?php endif; ?> </div> <?php elseif($list_repeater['list_type'] == 'numbers'): ?> <?php else: ?> <?php endif; ?> <div class="title_no_a_18"><?php echo esc_html($list_repeater['list_items']); ?> </div> </div> </li> <?php endforeach; ?> </ul> <?php endif; ?> <?php if(!empty($tabs_block_one['button_text'])): ?> <div class="pt_15"> <?php $button_link_href = $tabs_block_one['button_link']['url']; $link_target = $tabs_block_one['button_link']['is_external'] ? ' target="_blank"' : ''; $link_unfollow = $tabs_block_one['button_link']['nofollow'] ? ' rel="nofollow"' : ''; ?> <a href="<?php echo esc_url($button_link_href); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?> class="theme_btn"> <?php echo esc_html($tabs_block_one['button_text']);?> <i class="risehand-chevrons-right1"></i> </a> </div> <?php endif;?> </div> </div> </div> </div> <?php endforeach; endif; ?> </div> </div> </div> </section> 
<?php 
	}
}

 