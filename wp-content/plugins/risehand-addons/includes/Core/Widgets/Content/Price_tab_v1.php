<?php

namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Price_tab_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-price-tab-v1';
    }

    public function get_title()
    {
        return __('Price Tab' , 'risehand-addons');
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
				'label' => esc_html__( 'Price Settings', 'risehand-addons' ),
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
            'price_tabstyle',
            [
                'label' => __('Price Tab Style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'type_one'  => __('Price Tab Style One', 'risehand-addons'),
                    'type_two'  => __('Price Tab Style Two', 'risehand-addons'), 
                ],
                'default' => 'type_one', 
            ]
        );
        $this->add_control(
            'price_column',
            [
                'label' => __('Price Column', 'risehand-addons'),
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
        $this->add_control(
            'hr',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $this->add_responsive_control(
            'tabbtn_alignment',
            [
                'label' => esc_html__( 'Tab Alignment', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'start' => [
                        'inline' => esc_html__( 'Start', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'end' => [
                        'title' => esc_html__( 'End', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ], 
                ],
                'default' => 'inline',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .tab_over_all_box .tabs_header ' => 'text-align: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'percentage',
            [
                'label'       => esc_html__( 'Offer Percentage', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'save 65%' , 'risehand-addons'),
            ]
        );
        $this->add_responsive_control(
            'offer_for',
            [
                'label' => esc_html__( 'Button Alignment', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'offer_for_tab_one' => [
                        'inline' => esc_html__( 'Offer for tab one', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ], 
                    'offer_for_tab_two' => [
                        'title' => esc_html__( 'Offer for tab two', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ], 
                ],
                'default' => 'offer_for_tab_one',
                'toggle' => true, 
            ]
        );
        $this->start_controls_tabs(
            'group_one'
        );
        $this->start_controls_tab(
            'group_tab_one',
            [
                'label' => esc_html__( 'Tab One', 'risehand-addons' ),
            ]
        );
        $this->add_control(
            'tab_id',
            [
                'label'       => esc_html__( 'Tab Id', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'tabone' , 'risehand-addons'),
                'description' =>  esc_html__( 'Enter the tabid without Gap both tab id should not same' , 'risehand-addons'),
            ]
        );
        $this->add_control(
            'tab_title',
            [
                'label'       => esc_html__( 'Tab Title', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Monthly' , 'risehand-addons'),
            ]
        );
        $this->add_control(
            'h2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater_one = new \Elementor\Repeater();
        $repeater_f_one = new \Elementor\Repeater();
        $repeater_one->add_control(
            'active',
            [
                'label' => __('Price Box Active', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater_one->add_control(
            'hract',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater_one->add_control(
            'tag',
            [
               'label' => __('Tag', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Popular', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_one->add_control(
            'hracticon',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        
        $repeater_one->add_control(
            'hracticont',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater_one->add_control(
          'title',
          [
             'label' => __('Title', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::TEXT,
             'default' => __('Standard Plan', 'risehand-addons'),
             'placeholder' => __('Type your text here', 'risehand-addons'),    
          ]
        );
        $repeater_one->add_control(
            'description',
            [
               'label' => __('Description', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Basic features for up to 40 users.', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_one->add_control(
            'price_symbol',
            [
               'label' => __('Price Symbol', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('$', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_one->add_control(
            'price',
            [
               'label' => __('Price', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('39.83', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_one->add_control(
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
        $repeater_one->add_control(
            'features_repeater_one',
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
        $repeater_one->add_control(
            'btnone',
            [
                'label'       => esc_html__( 'Button One', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Get started' , 'risehand-addons'),
            ]
        );
        $repeater_one->add_control(
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
        $repeater_one->add_control(
            'hr6',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater_one->add_control(
            'btn2_enable',
            [
                'label' => esc_html__( 'Button 2 Enable / Disable', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes', 
            ]
        );
        $repeater_one->add_control(
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
        
        $repeater_one->add_control(
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
        $this->add_control(
            'price_repeater',
            [
                'label' => __( 'Price Content Repeater', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_one->get_controls(),
                'default' => [
                    [
                        'active' => 'no' ,
                        'tag' => __( '', 'risehand-addons' ),
                        'title' => __( 'Regular Plan', 'risehand-addons' ),
                        'description' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol' => __( '$', 'risehand-addons' ),
                        'price' => __( '29', 'risehand-addons' ),
                        'price_duration' => __( 'Per year', 'risehand-addons' ),
                        'features_text' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_no' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                    [
                        'active' => 'yes' ,
                        'tag' => __( 'Popular', 'risehand-addons' ),
                        'title' => __( 'Standard Plan', 'risehand-addons' ),
                        'description' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol' => __( '$', 'risehand-addons' ),
                        'price' => __( '199', 'risehand-addons' ),
                        'price_duration' => __( 'Per year', 'risehand-addons' ),
                        'features_text' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_no' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                    [
                        'active' => 'no' ,
                        'tag' => __( '', 'risehand-addons' ),
                        'title' => __( 'Golden Plan', 'risehand-addons' ),
                        'description' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol' => __( '$', 'risehand-addons' ),
                        'price' => __( '1099', 'risehand-addons' ),
                        'price_duration' => __( 'Per year', 'risehand-addons' ),
                        'features_text' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_no' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                ],
                'title_field' => '{{{title}}}',
            ]
        );
        $this->end_controls_tab();


        $this->start_controls_tab(
            'group_tab_two',
            [
                'label' => esc_html__( 'Tab two', 'risehand-addons' ),
            ]
        );
        $this->add_control(
            'tab_id_two',
            [
                'label'       => esc_html__( 'Tab Id', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'tabtwo' , 'risehand-addons'),
                'description' =>  esc_html__( 'Enter the tabid without Gap both tab id should not same' , 'risehand-addons'),
            ]
        );
        $this->add_control(
            'tab_title_two',
            [
                'label'       => esc_html__( 'Tab Title', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Yearly' , 'risehand-addons'),
            ]
        );
        $this->add_control(
            'two_h2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater_two = new \Elementor\Repeater();
        $repeater_f_two = new \Elementor\Repeater();
        $repeater_two->add_control(
            'active_two',
            [
                'label' => __('Price Box Active', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater_two->add_control(
            'hractwo',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater_two->add_control(
            'tag_two',
            [
               'label' => __('Tag', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Popular', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
         
        $repeater_two->add_control(
            'twhracticont',
                [
                'type' => \Elementor\Controls_Manager::DIVIDER,  
            ]
        );
        $repeater_two->add_control(
          'title_two',
          [
             'label' => __('Title', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::TEXT,
             'default' => __('Standard Plan', 'risehand-addons'),
             'placeholder' => __('Type your text here', 'risehand-addons'),    
          ]
        );
        $repeater_two->add_control(
            'description_two',
            [
               'label' => __('Description', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Basic features for up to 40 users.', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_two->add_control(
            'price_symbol_two',
            [
               'label' => __('Price Symbol', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('$', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_two->add_control(
            'price_two',
            [
               'label' => __('Price', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('39.83', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_two->add_control(
            'price_duration_two',
            [
               'label' => __('Price Duration', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Monthly', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_f_two->add_control(
            'ftwo_yesno',
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
        $repeater_f_two->add_control(
            'features_text_two',
            [
                'label' => __('Enter The Text Here', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Cake & Milk', 'risehand-addons'),
               'placeholder' => __('Type your text here', 'risehand-addons'),    
            ]
        );
        $repeater_two->add_control(
            'features_repeater_two',
            [
                'label' => __( 'Second Repeater Sub List', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_f_two->get_controls(),
                'default' => [
                    [
                        'ftwo_yesno' => 'yes',
                        'features_text_two' => __( 'Complete documentation', 'risehand-addons' ),
                    ],
                    [
                        'ftwo_yesno' => 'no',
                        'features_text_two' => __( 'Working materials in Figma', 'risehand-addons' ),
                    ],
                    [
                        'ftwo_yesno' => 'no',
                        'features_text_two' => __( '100GB cloud storage', 'risehand-addons' ),
                    ],
                    [
                        'ftwo_yesno' => 'yes',
                        'features_text_two' => __( '500 team members', 'risehand-addons' ),
                    ],
                ],
                'title_field' => '{{{ features_text_two }}}',
                'condition' => [],
            ]
        );
        $repeater_two->add_control(
            'btnone_two',
            [
                'label'       => esc_html__( 'Button One', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__( 'Get started' , 'risehand-addons'),
            ]
        );
        $repeater_two->add_control(
            'btnonelink_two',
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
        $repeater_two->add_control(
            'hr6_two',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $repeater_two->add_control(
            'btn2_enable_two',
            [
                'label' => esc_html__( 'List 2 Enable / Disable', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes', 
            ]
        );
        $repeater_two->add_control(
            'btntwo_two',
            [
                'label'       => esc_html__( 'Button Two', 'risehand-addons' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default' =>  esc_html__('Learn More' , 'risehand-addons'), 
                'condition' => [
                    'btn2_enable_two' => 'yes'
                ],
            ]
        );
        
        $repeater_two->add_control(
            'btntwolink_two',
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
                    'btn2_enable_two' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'price_repeater_two',
            [
                'label' => __( 'Price Content Repeater', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_two->get_controls(),
                'default' => [
                    [
                        'active_two' => 'no' ,
                        'tag_two' => __( '', 'risehand-addons' ),
                        'title_two' => __( 'Golden Plan', 'risehand-addons' ),
                        'description_two' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol_two' => __( '$', 'risehand-addons' ),
                        'price_two' => __( '1099', 'risehand-addons' ),
                        'price_duration_two' => __( 'Per year', 'risehand-addons' ),
                        'features_text_two' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_notwo' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone_two' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo_two'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                    [
                        'active_two' => 'yes' ,
                        'tag_two' => __( 'Popular', 'risehand-addons' ),
                        'title_two' => __( 'Standard Plan', 'risehand-addons' ),
                        'description_two' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol_two' => __( '$', 'risehand-addons' ),
                        'price_two' => __( '199', 'risehand-addons' ),
                        'price_duration_two' => __( 'Per year', 'risehand-addons' ),
                        'features_text_two' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_notwo' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone_two' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo_two'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                    [
                        'active_two' => 'no' ,
                        'tag_two' => __( '', 'risehand-addons' ),
                        'title_two' => __( 'Regular Plan', 'risehand-addons' ),
                        'description_two' => __( 'Basic features for up to 40 users.', 'risehand-addons' ),
                        'price_symbol_two' => __( '$', 'risehand-addons' ),
                        'price_two' => __( '29', 'risehand-addons' ),
                        'price_duration_two' => __( 'Per year', 'risehand-addons' ),
                        'features_text_two' => __( 'Complete documentation', 'risehand-addons' ),
                        'features_text_notwo' => __( 'Working materials in Figma', 'risehand-addons' ),
                        'btnone_two' => __( 'Get Started', 'risehand-addons' ),
                        'btntwo_two'  => __( 'Learn More', 'risehand-addons' ),
                    ],
                ],
                'title_field' => '{{{title_two}}}',
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
         

     $this->end_controls_section(); 
    // ======================== tab buton css start =========================
     $this->start_controls_section('tabbuttoncss',
     [ 
         'label' => __('Tab Button Css', 'risehand-addons'),
         'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
     ]
     ); 
     $this->add_control(
        'offer_color',
         [
            'label' => __('Offer Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .showcase_tabs_btns .percentage small ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); $this->add_control(
        'offersvg_color',
         [
            'label' => __('Offer Arrow Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .showcase_tabs_btns .percentage svg path ' => 'fill: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'offerbg_color',
         [
            'label' => __('Offer Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .showcase_tabs_btns .percentage small ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
     $this->start_controls_tabs(
        'style_tabs'
    );
    $this->start_controls_tab(
        'style_normal_tab',
        [
            'label' => esc_html__( 'Normal', 'risehand-addons' ),
        ]
    );
       
    $this->add_control(
        'tabtcss',
         [
            'label' => __('Tab Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .tab_over_all_box .showcase_tabs_btns .title_no_a_20 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'hhr4',
            [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );  
    $this->add_responsive_control(
        'tab_margin',
        [
            'label' => esc_html__( 'Tab Margin', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .tab_over_all_box .showcase_tabs_btns ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'hhrdsd4',
            [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'tabbtn_bg',
         [
            'label' => __('Tab Bg Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ptab_type_one .tab_over_all_box .showcase_tabs_btns , {{WRAPPER}} .ptab_type_two .price_tab .nav-item:first-child .nav-link:before ' => 'background: {{VALUE}}!important;',
            ], 
         ]
    );
    $this->add_control(
        'tabbtn_bpor',
         [
            'label' => __('Tab Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ptab_type_one .tab_over_all_box .showcase_tabs_btns , {{WRAPPER}} .ptab_type_two .price_tab .nav-item:first-child .nav-link:before ' => 'border-color: {{VALUE}}!important;',
            ], 
         ]
    );     
    $this->end_controls_tab();
    $this->start_controls_tab(
        'style_hover_tab',
        [
            'label' => esc_html__( 'Hover / Active', 'risehand-addons' ),
        ]
    );
    $this->add_control(
        'actabcolo',
         [
            'label' => __('Tab Item Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_tab .nav-item .nav-link.active .title_no_a_20 , {{WRAPPER}} .price_tab .nav-item .nav-link:hover .title_no_a_20 ' => 'color: {{VALUE}}!important;',
            ], 
         ]
    );
    $this->add_control(
        'actabgcolo',
         [
            'label' => __('Tab Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ptab_type_one .price_tab .nav-item .nav-link.active , {{WRAPPER}} .ptab_type_one .price_tab .nav-item .nav-link:hover , {{WRAPPER}}
                .ptab_type_two .price_tab .nav-item:first-child .nav-link.active::after , {{WRAPPER}} .ptab_type_two .price_tab .nav-item:first-child .nav-link:hover::after , {{WRAPPER}} 
                .ptab_type_two .price_tab .nav-item.last .nav-link.active::after , {{WRAPPER}} .ptab_type_two .price_tab .nav-item.last .nav-link:hover::after ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->end_controls_tab();
    $this->end_controls_tabs();
    $this->end_controls_section(); 
    // ======================== tab button css end =========================
    // ======================== tab content css start =========================
    $this->start_controls_section('tabimagecss',
     [ 
         'label' => __('Tab Content Css', 'risehand-addons'),
         'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
     ]
    );  
    $this->start_controls_tabs(
        'stylecs_tabs'
    );
    $this->start_controls_tab(
        'stylecb_normal_tab',
        [
            'label' => esc_html__( 'Normal', 'risehand-addons' ),
        ]
    );  
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Tag Typography', 'risehand-addons' ),
            'name' => 'tagtypo',
            'selector' => '{{WRAPPER}} .price_box .badged , {{WRAPPER}} .price_box .badged ',
        ]
    );
    $this->add_control(
        'tagcolor',
         [
            'label' => __('Tag Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .badged , {{WRAPPER}} .price_box .badged  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'tagvfcolor',
         [
            'label' => __('Tag Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .badged  , {{WRAPPER}} .price_box .badged ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'tbhrzero',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Price Typography', 'risehand-addons' ),
            'name' => 'pricetypo',
            'selector' => '{{WRAPPER}} .price_box .amount ',
        ]
    );
    $this->add_control(
        'pricecolor',
         [
            'label' => __('Price Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .amount ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Price Period Typography', 'risehand-addons' ),
            'name' => 'priceptypo',
            'selector' => '{{WRAPPER}} .price_box .amount-text',
        ]
    );
    $this->add_control(
        'priceprcolor',
         [
            'label' => __('Price Period Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .amount-text ' => 'color: {{VALUE}}!important;',
            ],
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
            'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
            'name' => 'titletypo',
            'selector' => '{{WRAPPER}} .nk-pricing-head .title_no_a_20 ',
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .nk-pricing-head .title_no_a_20 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
            'name' => 'destypo',
            'selector' => '{{WRAPPER}} .nk-pricing-head p ',
        ]
    );
    $this->add_control(
        'des_color',
         [
            'label' => __('Small Description Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .nk-pricing-head p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
   
    $this->add_control(
        'tbhr1',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Feature Typography', 'risehand-addons' ),
            'name' => 'listtypo',
            'selector' => '{{WRAPPER}} .price_box .nk-list-link li ',
        ]
    );
    $this->add_control(
        'listiconcolor',
         [
            'label' => __('Feature Icon Color 1', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li em ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'listiconcolortwo',
         [
            'label' => __('Feature Icon Color 2', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li em.risehand-cross-circle-fill  ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'listcolor',
         [
            'label' => __('Feature Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box .nk-list-link li' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->end_controls_tab();
    $this->start_controls_tab(
        'stylecb_hover_tab',
        [
            'label' => esc_html__( 'Hover / Active', 'risehand-addons' ),
        ]
    );  
    $this->add_control(
        'atagcolor',
         [
            'label' => __('Tag Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .badged  , {{WRAPPER}} .price_box.active .badged  , {{WRAPPER}} .price_box:hover .badged 
                , {{WRAPPER}} .price_box.active .badged ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'atagvfcolor',
         [
            'label' => __('Tag Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .price_box:hover .badged , {{WRAPPER}} .price_box.active .badged , {{WRAPPER}} .price_box:hover .badged 
                , {{WRAPPER}} .price_box.active .badged  ' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->end_controls_tab();
    $this->end_controls_tabs(); 
    $this->end_controls_section();
    // ======================== tab content css end =========================
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
            'name' => 'border',
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
        'htbtnvcolor',
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
    // ======================== tab button css end =========================
    // ======================== tab box css end =========================
    $this->start_controls_section('priceboxbgcss',
    [ 
        'label' => __('Box Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    ); 
    $this->start_controls_tabs(
        'stylewholdtab'
    );
    $this->start_controls_tab(
        'stylepbone',
        [
            'label' => esc_html__( 'Box Background Normal', 'risehand-addons' ),
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'priceboxbgt',
            'types' => [ 'classic', 'gradient'],
            'selector' => '{{WRAPPER}} .price_box',
           
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'boxborder',
            'selector' => '{{WRAPPER}} .price_box ',  
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
    $this->end_controls_tab();
    $this->start_controls_tab(
        'stylepbtwo',
        [
            'label' => esc_html__( 'Box Background Hover /  Active', 'risehand-addons' ),
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Background::get_type(),
        [
            'name' => 'priceboxbga',
            'types' => [ 'classic', 'gradient'],
            'selector' => '{{WRAPPER}} .price_box.active , {{WRAPPER}} .price_box:hover ',
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'aboxborder',
            'selector' => '{{WRAPPER}} .price_box.active , {{WRAPPER}} .price_box:hover', 
            'condition' => [
                'price_styles' => 'type_one'
        ],
        ]
    );
    $this->end_controls_tab();
    $this->end_controls_tabs();
    $this->end_controls_section(); 
}
protected function render() {
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?>
<section class="price_tab_box risehand_tab p_<?php echo esc_attr($settings['price_styles']); ?> ptab_<?php echo esc_attr($settings['price_tabstyle']); ?> <?php if(!empty($settings['percentage'])): ?> ptab_<?php echo esc_attr($settings['offer_for']); ?> <?php endif; ?>"> <div class="tab_over_all_box"> <div class="tabs_header clearfix"> <ul class="showcase_tabs_btns price_tab nav-pills nav clearfix"> <?php if(!empty($settings['tab_title'])): ?> <li class="nav-item"> <a class="s_tab_btn nav-link active" data-tab="#risehand_price_<?php echo esc_attr($settings['tab_id']); ?>"> <?php if($settings['price_tabstyle'] == 'type_two'): ?> <em class="dot left"></em> <?php endif; ?> <small class="title_no_a_20"><?php echo esc_attr($settings['tab_title']); ?></small> </a> </li> <?php endif; ?> <?php if(!empty($settings['tab_title_two'])): ?> <li class="nav-item last"> <a class="s_tab_btn nav-link" data-tab="#risehand_price_<?php echo esc_attr($settings['tab_id_two']); ?>"> <?php if($settings['price_tabstyle'] == 'type_two'): ?> <em class="dot right"></em> <?php endif; ?> <small class="title_no_a_20"><?php echo esc_attr($settings['tab_title_two']); ?></small> </a> </li> <?php if(!empty($settings['percentage'])): ?> <div class="percentage"> <small><?php echo esc_attr($settings['percentage']); ?></small> <svg width="62" height="26" viewBox="0 0 62 26" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4381 5.24806C43.5252 5.53058 43.6028 5.77372 43.645 5.9021C43.9053 6.68293 44.1244 8.66552 45.1286 10.0139C45.8941 11.0427 47.1175 11.7065 48.9781 11.4674C50.6692 11.2501 51.7219 10.3221 52.2285 9.03901C53.3188 6.27764 52.004 1.86621 50.9816 0.589959C50.8698 0.450665 50.5751 0.387526 50.3221 0.449043C50.0702 0.510246 49.9555 0.672451 50.0672 0.811744C51.0478 2.03661 52.2984 6.27131 51.2517 8.92229C50.8424 9.95843 50.1164 10.7561 48.7502 10.9315C47.402 11.1049 46.6087 10.5513 46.0538 9.80541C45.0761 8.49329 44.8813 6.56306 44.6286 5.8027C44.4697 5.32608 43.9569 3.49891 43.8445 3.34813C43.7039 3.15927 43.4129 3.16443 43.3176 3.17007C43.2438 3.17439 42.8782 3.20902 42.8616 3.45903C42.6213 7.02381 37.7702 12.4025 30.6347 16.003C23.562 19.572 14.211 21.3923 4.84281 17.8519C4.61497 17.7661 4.30348 17.7981 4.14712 17.9229C3.99133 18.0483 4.04933 18.2198 4.27717 18.3055C14.0931 22.0149 23.9005 20.1479 31.31 16.4091C37.5549 13.2581 42.0715 8.77617 43.4381 5.24806Z" fill="#0A1425"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.09394 18.2266C6.26876 18.1734 7.4416 18.1409 8.60959 18.0374C11.7214 17.7619 14.8488 17.1127 17.3726 16.0632C17.5931 15.9711 17.6361 15.7986 17.4704 15.6775C17.3031 15.5561 16.9897 15.5325 16.7697 15.6237C14.3755 16.6206 11.4034 17.2324 8.45101 17.4937C7.11399 17.6119 5.769 17.6357 4.42348 17.7063C4.35641 17.7103 3.77003 17.7312 3.64849 17.7543C3.36487 17.8073 3.30885 17.9289 3.29605 17.987C3.28425 18.0355 3.29122 18.0951 3.34847 18.1616C3.39597 18.2161 3.53025 18.3078 3.75716 18.4094C4.48216 18.736 6.37182 19.3644 6.66215 19.4856C9.99077 20.8747 12.6638 22.4747 15.5546 24.1204C15.7472 24.2292 16.0642 24.2324 16.2626 24.127C16.4609 24.0216 16.4655 23.8474 16.274 23.7382C13.3469 22.0715 10.6358 20.4534 7.2664 19.0476C7.06736 18.9639 5.91853 18.534 5.09394 18.2266Z" fill="#0A1425"/> </svg> </div> <?php endif; ?> <?php endif; ?> </ul> </div> <div class="s_tab_wrapper"> <div class="s_tabs_content"> <?php // tab ?> <div class="s_tab fade active-tab show" id="risehand_price_<?php echo esc_attr($settings['tab_id']); ?>"> <div class="row"> <?php if(!empty($settings['price_repeater'])): ?> <?php foreach($settings['price_repeater'] as $key => $price_repeater): ?> <div class="<?php echo esc_attr($settings['price_column']); ?>"> <?php // price box style ?> <?php if($settings['price_styles'] == 'type_two'): ?> <?php // price box style ?> <div class="price_box style_two mb_30 trans<?php if($price_repeater['active'] == 'yes'):?> active<?php endif; ?>"> <div class="price_box_inner"> <div class="nk-pricing-head pb-2"> <?php if(!empty($price_repeater['tag'])): ?> <div class="nk-pricing-title-group mb-2 text-end"> <span class="font_special trans badged"><?php echo wp_kses($price_repeater['tag'] , $allowed_tags); ?></span> </div> <?php endif; ?> <div class="nk-year-amount amount-wrap"> <?php if(!empty($price_repeater['price'])): ?> <span class="amount h1 mb-0"> <?php if(!empty($price_repeater['price_symbol'])): ?> <sub><?php echo wp_kses($price_repeater['price_symbol'] , $allowed_tags); ?></sub> <?php endif; ?> <?php echo wp_kses($price_repeater['price'] , $allowed_tags); ?> </span> <?php if(!empty($price_repeater['price_duration'])): ?> <span class="amount-text"> / <?php echo wp_kses($price_repeater['price_duration'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <div class="icon_title d-flex align-items-center"> <?php if(!empty($price_repeater['title'])): ?> <div class="title_no_a_20"> <?php echo wp_kses($price_repeater['title'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <?php if(!empty($price_repeater['description'])): ?> <p class="text mt-2 mb-2"> <?php echo wp_kses($price_repeater['description'] , $allowed_tags); ?></p> <?php endif; ?> </div> <div class="nk-pricing-body"> <ul class="nk-list-link"> <?php if(!empty($price_repeater['features_repeater_one'])): ?> <?php foreach($price_repeater['features_repeater_one'] as $features_text_one):?> <li> <?php if($features_text_one['fone_yesno'] == 'no'): ?> <em class="icon risehand-check-circle-fill"></em> <?php else: ?> <em class="icon risehand-check-circle-fill"></em> <?php endif; ?> <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> <ul class="gap g-3"> <?php if(!empty($price_repeater['btnone'])): $target_one = $price_repeater['btnonelink']['is_external'] ? ' target="_blank"' : ''; $nofollow_one = $price_repeater['btnonelink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater['btnonelink']['url']); ?>" class="theme_btn one" <?php echo esc_attr($target_one); ?> <?php echo esc_attr($nofollow_one); ?>> <?php echo wp_kses($price_repeater['btnone'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php if($price_repeater['btn2_enable'] == 'yes'): ?> <?php if(!empty($price_repeater['btntwo'])): $target_two = $price_repeater['btntwolink']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $price_repeater['btntwolink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater['btntwolink']['url']); ?>" class="theme_btn two" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php echo wp_kses($price_repeater['btntwo'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php endif; ?> </ul> </div> </div> </div> <?php // price box style ?> <?php else: ?> <?php // price box style ?> <div class="price_box style_one trans<?php if($price_repeater['active'] == 'yes'):?> active<?php endif; ?>"> <div class="nk-pricing-head pb-4"> <div class="nk-pricing-title-group mb-2"> <div class="icon_title d-flex align-items-center"> <?php if(!empty($price_repeater['title'])): ?> <div class="title_no_a_20"> <?php echo wp_kses($price_repeater['title'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <?php if(!empty($price_repeater['tag'])): ?> <span class="font_special trans badged"><?php echo wp_kses($price_repeater['tag'] , $allowed_tags); ?></span> <?php endif; ?> </div> <div class="nk-year-amount amount-wrap"> <?php if(!empty($price_repeater['price'])): ?> <span class="amount h1 mb-0"> <?php if(!empty($price_repeater['price_symbol'])): ?> <sub><?php echo wp_kses($price_repeater['price_symbol'] , $allowed_tags); ?></sub> <?php endif; ?> <?php echo wp_kses($price_repeater['price'] , $allowed_tags); ?> </span> <?php if(!empty($price_repeater['price_duration'])): ?> <span class="amount-text"> / <?php echo wp_kses($price_repeater['price_duration'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <?php if(!empty($price_repeater['description'])): ?> <p class="text mt-2 mb-2"> <?php echo wp_kses($price_repeater['description'] , $allowed_tags); ?></p> <?php endif; ?> </div> <div class="nk-pricing-body"> <ul class="gap g-3"> <?php if(!empty($price_repeater['btnone'])): $target_one = $price_repeater['btnonelink']['is_external'] ? ' target="_blank"' : ''; $nofollow_one = $price_repeater['btnonelink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater['btnonelink']['url']); ?>" class="theme_btn one" <?php echo esc_attr($target_one); ?> <?php echo esc_attr($nofollow_one); ?>> <?php echo wp_kses($price_repeater['btnone'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php if($price_repeater['btn2_enable'] == 'yes'): ?> <?php if(!empty($price_repeater['btntwo'])): $target_two = $price_repeater['btntwolink']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $price_repeater['btntwolink']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater['btntwolink']['url']); ?>" class="theme_btn two" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php echo wp_kses($price_repeater['btntwo'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php endif; ?> </ul> <ul class="nk-list-link"> <?php if(!empty($price_repeater['features_repeater_one'])): ?> <?php foreach($price_repeater['features_repeater_one'] as $features_text_one):?> <li> <?php if($features_text_one['fone_yesno'] == 'no'): ?> <em class="icon risehand-cross-circle-fill"></em> <?php else: ?> <em class="icon risehand-check-circle-fill"></em> <?php endif; ?> <span><?php echo wp_kses($features_text_one['features_text_one'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> </div> </div> <?php // price box style ?> <?php endif; ?> <?php // price box style ?> </div> <?php endforeach; ?> <?php endif; ?> </div> </div> <?php // tab end ?> <?php // tab ?> <div class="s_tab fade" id="risehand_price_<?php echo esc_attr($settings['tab_id_two']); ?>"> <div class="row"> <?php if(!empty($settings['price_repeater_two'])): ?> <?php foreach($settings['price_repeater_two'] as $key => $price_repeater_two): ?> <div class="<?php echo esc_attr($settings['price_column']); ?>"> <?php // price box style ?> <?php if($settings['price_styles'] == 'type_two'): ?> <?php // price box style ?> <div class="price_box style_two mb_30 trans<?php if($price_repeater['active'] == 'yes'):?> active<?php endif; ?>"> <div class="price_box_inner"> <div class="nk-pricing-head pb-2"> <?php if(!empty($price_repeater_two['tag_two'])): ?> <div class="nk-pricing-title-group mb-2 text-end"> <span class="font_special trans badged"><?php echo wp_kses($price_repeater_two['tag_two'] , $allowed_tags); ?></span> </div> <?php endif; ?> <div class="nk-year-amount amount-wrap"> <?php if(!empty($price_repeater_two['price_two'])): ?> <span class="amount h1 mb-0"> <?php if(!empty($price_repeater_two['price_symbol_two'])): ?> <sub><?php echo wp_kses($price_repeater_two['price_symbol_two'] , $allowed_tags); ?></sub> <?php endif; ?> <?php echo wp_kses($price_repeater_two['price_two'] , $allowed_tags); ?> </span> <?php if(!empty($price_repeater_two['price_duration_two'])): ?> <span class="amount-text"> / <?php echo wp_kses($price_repeater_two['price_duration_two'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <div class="icon_title d-flex align-items-center"> <?php if(!empty($price_repeater_two['title_two'])): ?> <div class="title_no_a_20"> <?php echo wp_kses($price_repeater_two['title_two'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <?php if(!empty($price_repeater_two['description_two'])): ?> <p class="text mt-2 mb-1"> <?php echo wp_kses($price_repeater_two['description_two'] , $allowed_tags); ?></p> <?php endif; ?> </div> <div class="nk-pricing-body"> <ul class="nk-list-link"> <?php if(!empty($price_repeater_two['features_repeater_two'])): ?> <?php foreach($price_repeater_two['features_repeater_two'] as $features_text_one):?> <li> <?php if($features_text_one['ftwo_yesno'] == 'no'): ?> <em class="icon risehand-cross-circle-fill"></em> <?php else: ?> <em class="icon risehand-check-circle-fill"></em> <?php endif; ?> <span><?php echo wp_kses($features_text_one['features_text_two'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> <ul class="gap g-3"> <?php if(!empty($price_repeater_two['btnone_two'])): $target_one = $price_repeater_two['btnonelink_two']['is_external'] ? ' target="_blank"' : ''; $nofollow_one = $price_repeater_two['btnonelink_two']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater_two['btnonelink_two']['url']); ?>" class="theme_btn one" <?php echo esc_attr($target_one); ?> <?php echo esc_attr($nofollow_one); ?>> <?php echo wp_kses($price_repeater_two['btnone_two'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php if($price_repeater_two['btn2_enable_two'] == 'yes'): ?> <?php if(!empty($price_repeater_two['btntwo_two'])): $target_two = $price_repeater_two['btntwolink_two']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $price_repeater_two['btntwolink_two']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater_two['btntwolink_two']['url']); ?>" class="theme_btn two" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php echo wp_kses($price_repeater_two['btntwo_two'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php endif; ?> </ul> </div> </div> </div> <?php // price box style ?> <?php else: ?> <?php // price box style ?> <div class="price_box style_one trans<?php if($price_repeater_two['active_two'] == 'yes'):?> active<?php endif; ?>"> <div class="nk-pricing-head pb-4"> <div class="nk-pricing-title-group mb-2"> <div class="icon_title d-flex align-items-center"> <?php if(!empty($price_repeater_two['title_two'])): ?> <div class="title_no_a_20"> <?php echo wp_kses($price_repeater_two['title_two'] , $allowed_tags); ?> </div> <?php endif; ?> </div> <?php if(!empty($price_repeater_two['tag_two'])): ?> <span class="font_special trans badged"><?php echo wp_kses($price_repeater_two['tag_two'] , $allowed_tags); ?></span> <?php endif; ?> </div> <div class="nk-year-amount amount-wrap"> <?php if(!empty($price_repeater_two['price_two'])): ?> <span class="amount h1 mb-0"> <?php if(!empty($price_repeater_two['price_symbol_two'])): ?> <sub><?php echo wp_kses($price_repeater_two['price_symbol_two'] , $allowed_tags); ?></sub> <?php endif; ?> <?php echo wp_kses($price_repeater_two['price_two'] , $allowed_tags); ?> </span> <?php if(!empty($price_repeater_two['price_duration_two'])): ?> <span class="amount-text"> / <?php echo wp_kses($price_repeater_two['price_duration_two'] , $allowed_tags); ?></span> <?php endif; ?> <?php endif; ?> </div> <?php if(!empty($price_repeater_two['description_two'])): ?> <p class="text mt-2 mb-1"> <?php echo wp_kses($price_repeater_two['description_two'] , $allowed_tags); ?> </p> <?php endif; ?> </div> <div class="nk-pricing-body"> <ul class="gap g-3"> <?php if(!empty($price_repeater_two['btnone_two'])): $pttarget_one = $price_repeater_two['btnonelink_two']['is_external'] ? ' target="_blank"' : ''; $ptnofollow_one = $price_repeater_two['btnonelink_two']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater_two['btnonelink_two']['url']); ?>" class="theme_btn one" <?php echo esc_attr($pttarget_one); ?> <?php echo esc_attr($ptnofollow_one); ?>> <?php echo wp_kses($price_repeater_two['btnone_two'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php if($price_repeater_two['btn2_enable_two'] == 'yes'): ?> <?php if(!empty($price_repeater_two['btntwo_two'])): $pttarget_two = $price_repeater_two['btntwolink_two']['is_external'] ? ' target="_blank"' : ''; $ptnofollow_two = $price_repeater_two['btntwolink_two']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li> <a href="<?php echo esc_attr($price_repeater_two['btntwolink_two']['url']); ?>" class="theme_btn two" <?php echo esc_attr($pttarget_two); ?> <?php echo esc_attr($ptnofollow_two); ?>> <?php echo wp_kses($price_repeater_two['btntwo_two'] , $allowed_tags); ?> </a> </li> <?php endif; ?> <?php endif; ?> </ul> <ul class="nk-list-link"> <?php if(!empty($price_repeater_two['features_repeater_two'])): ?> <?php foreach($price_repeater_two['features_repeater_two'] as $features_text):?> <li> <?php if($features_text['ftwo_yesno'] == 'no'): ?> <em class="icon risehand-cross-circle-fill"></em> <?php else: ?> <em class="icon risehand-check-circle-fill"></em> <?php endif; ?> <span><?php echo wp_kses($features_text['features_text_two'] , $allowed_tags); ?></span> </li> <?php endforeach; ?> <?php endif; ?> </ul> </div> </div> <?php // price box style ?> <?php endif; ?> <?php // price box style ?> </div> <?php endforeach; ?> <?php endif; ?> </div> </div> <?php // tab end ?> </div> </div> </div></section>
<?php 
	}
}

 