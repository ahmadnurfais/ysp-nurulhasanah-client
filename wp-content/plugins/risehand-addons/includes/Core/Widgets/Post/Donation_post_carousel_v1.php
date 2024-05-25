<?php

namespace  Risehandaddons\Core\Widgets\Post;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Donation_post_carousel_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-donation-post-carousel-v1';
    }

    public function get_title()
    {
        return __('Donation Post Carousel V1', 'risehand-addons');
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
        $this->start_controls_section('donation_c_settings',
        [ 
            'label' => __('Donation Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        ); 
        $this->add_control(
            'donation_styles',
            [
                'label' => __('Donation style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'risehand-addons' ),
                    'style_two'   => esc_html__( 'Style Two', 'risehand-addons' ), 
                    'style_three'   => esc_html__( 'Style Three', 'risehand-addons' ), 
                ],
                'default' => 'style_one',
            ]
        ); 
        $this->add_control(
            'donation_type',
            [
                'label' => __('Donation Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'infinite_scroll'   => esc_html__( 'Infinite Scroll', 'risehand-addons' ),
                    'carousel_type'   => esc_html__( 'Carousel', 'risehand-addons' ), 
                ],
                'default' => 'infinite_scroll',
            ]
        ); 
       
        $this->add_control(
            'n_post_count',
            [
                'label' => __('Post Count', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'default' => 10,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
            ]
        ); 
        $this->add_control(
			'n_query_orderby',
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
			'n_query_order',
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
			'options' => risehand_get_donation_categories(),
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
            'cat_enable',
           [
              'label' => __('Category  Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->end_controls_section();

         // carouse settings
        $this->start_controls_section('carousel_settings',
            [ 
            'label' => __('Carousel Settings', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'condition' => [
                'donation_type' => 'carousel_type'
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
            'laptop',
                [
                'label' => __('Items Laptop', 'risehand-addons'),
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
                'donation_type' => 'infinite_scroll'
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
                'max'     => 30,
                'step'    => 1,  
                'default'    => 8,   
            ]
        ); 
        $this->add_control(
            'item_width',
            [
                'label' => __('Item Width', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 100000,
                'step'    => 100,  
                'default'    => 400,   
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .sc-slide' => 'width: {{VALUE}}px;',
                ], 
            ]
        ); 
        $this->end_controls_section();
    
        $this->start_controls_section('custom_css',
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
                    '{{WRAPPER}} .give_forms_section  .do_common_style' => 'background: {{VALUE}};',
                ], 
             ]
        ); 
        $this->add_control(
            'br_color',
             [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails > div::before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails' => 'border-color: {{VALUE}};',
                ], 
             ]
        ); 
        $this->add_control(
            'style1s',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'cat_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .do_common_style .catdo a',
			]
		); 
        $this->add_control(
            'catcolor_color',
             [
                'label' => __('Category Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .catdo a' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'catcolobg_color',
             [
                'label' => __('Category Bg Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style  .catdo a' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => ['style_one' , 'style_two'],
                ]
             ]
        );
        $this->add_control(
            'style1',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .title_24 a',
			]
		); 
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .title_24 a' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'style2',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
				'name' => 'desc_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .desc_p ',
			]
		); 
        $this->add_control(
            'desc_color',
             [
                'label' => __('Description Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .desc_p ' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'style3',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'progress_bar_box_bg_color',
             [
                'label' => __('Progress Bar Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises' => 'background: {{VALUE}};',
                ],  
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'progress_bar_bg_color',
             [
                'label' => __('Progress Bar Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .donation_progress .progress' => 'background: {{VALUE}};',
                ], 
             ]
        );
        
        $this->add_control(
            'active_progress_bar_bg_color',
             [
                'label' => __('Progress Bar Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .donation_progress .progress .progress-bar' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .donation_progress .perin .percent::before' => 'border-color: {{VALUE}};',
                    
                ], 
                
             ]
        );

        $this->add_control(
            'percentage_color',
             [
                'label' => __('Progress Percentage Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .donation_progress .perin .percent' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'percentage_content_color',
             [
                'label' => __('Progress Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises .goals_details div' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'percentage_content_price_color',
             [
                'label' => __('Progress  Price Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises .goals_details span' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'style4',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
                    'condition' => [
                        'donation_styles' => 'style_one',
                    ]
            ]
        );

        $this->add_control(
            'hprogress_bar_box_bg_color',
             [
                'label' => __('Hover Progress Bar Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hprogress_bar_bg_color',
             [
                'label' => __('Hover Progress Bar Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises  .progress' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        
        $this->add_control(
            'hactive_progress_bar_bg_color',
             [
                'label' => __('Hover Progress Bar Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises .progress .progress-bar' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises .perin .percent::before' => 'border-color: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );

        $this->add_control(
            'hpercentage_color',
             [
                'label' => __('Hover Progress Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises  .perin .percent' => 'color: {{VALUE}};', 
                    
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hpercentage_content_color',
             [
                'label' => __('Hover Progress Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises .goals_details div' => 'color: {{VALUE}}!important;', 
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hpercentage_content_price_color',
             [
                'label' => __('Hover Progress  Price Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .donation_raises .goals_details span' => 'color: {{VALUE}};', 
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'style6',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'price_label_color',
             [
                'label' => __('Price Label Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style   .goals_details .text ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
        $this->add_control(
            'price_color',
             [
                'label' => __('Price  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style   .goals_details .result ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
        $this->add_control(
            'price_goal_color',
             [
                'label' => __('Price Goal Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails small.result ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
    $this->end_controls_section();

    $this->start_controls_section('dpswiper_navigation_dot_css',
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
                '{{WRAPPER}} .common-dots .swiper-pagination-bullet:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav4color',
        [
            'label' => esc_html__( 'Dot Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common-dots .swiper-pagination-bullet ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav5color',
        [
            'label' => esc_html__( 'Dot Active Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common-dots .swiper-pagination-bullet.swiper-pagination-bullet-active:before ,
                {{WRAPPER}} .common-dots .swiper-pagination-bullet:hover:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav6color',
        [
            'label' => esc_html__( 'Dot Active Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common-dots .swiper-pagination-bullet.swiper-pagination-bullet-active ,
                 {{WRAPPER}} .common-dots .swiper-pagination-bullet:hover ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->end_controls_section();

}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?> 
<section class="give_forms_section <?php echo esc_attr($settings['donation_styles']); ?> <?php if($settings['excerpt_enable'] == true): ?> excerpt_enable<?php endif; ?> <?php if($settings['cat_enable'] == true): ?> cat_enable<?php endif; ?> "><?php if($settings['donation_type'] == 'carousel_type'): $loop_enable = ''; if($settings['loop_enable'] == true): $loop_enable = 'true'; else: $loop_enable = 'false'; endif; $centered_enable = ''; if($settings['centered_enable'] == true): $centered_enable = 'true'; else: $centered_enable = 'false'; endif; ?> <div class="donation_carousel position-relative arrows_<?php echo esc_attr($settings['arrow_post']); ?>"> <div class="swiper swiper-container<?php if($settings['dot_enable'] == true): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{ "loop": <?php echo esc_attr($loop_enable); ?>, "autoplay": { "delay": <?php echo esc_attr($settings['duration']); ?> }, "speed": <?php echo esc_attr($settings['speed']); ?>, "centeredSlides": <?php echo esc_attr($centered_enable); ?>, "spaceBetween": <?php echo esc_attr($settings['margin']); ?>, "navigation": { "nextEl": ".port-next-one", "prevEl": ".port-prev-one" }, "pagination": { "el": ".donation-pagination", "clickable": true , "type": "<?php echo esc_attr($settings['dot_type']); ?>" }, "grabCursor": true, "breakpoints": { "1300": { "slidesPerView": <?php echo esc_attr($settings['desk_top']); ?> }, "1100": { "slidesPerView": <?php echo esc_attr($settings['laptop']); ?> }, "1084": { "slidesPerView": <?php echo esc_attr($settings['tablet']); ?> }, "768": { "slidesPerView": <?php echo esc_attr($settings['mobile']); ?> }, "576": { "slidesPerView": <?php echo esc_attr($settings['mini_mobile']); ?> } }}'><div class="swiper-wrapper"> <?php $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : ''; $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : ''; $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : ''; $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'give_forms', 'ignore_sticky_posts' => true, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'give_category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $donation_grid_query = new \WP_Query( $args ); ?> <?php while ($donation_grid_query->have_posts()) : ?> <?php $donation_grid_query->the_post(); ?> <?php global $post; // donation card ?> <?php if($settings['donation_styles'] == 'style_two'): ?> <div class="swiper-slide"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php // Donation card // donation card ?> <?php elseif($settings['donation_styles'] == 'style_three'): ?> <div class="swiper-slide"> <?php do_action('get_risehand_donation_card_2'); ?> </div> <?php // Donation card ?> <?php else: ?> <div class="swiper-slide"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php endif; ?> <?php // donation card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> </div> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "progressbar"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination donation-pagination common-progress"></div> </div> <?php endif; ?> <?php if($settings['arrow_enable'] == true): ?> <div class="arrow_portfolio common_arrow <?php echo esc_attr($settings['arrow_post']); ?>"> <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div> <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div> </div> <?php endif; ?> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "bullets"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination donation-pagination common-dots"></div> </div> <?php endif; ?> <?php if($settings['dot_enable'] == true && $settings['dot_type'] == "fraction"): ?> <div class="<?php echo esc_attr($settings['dot_alignment']) ?>"> <div class="port-pagination donation-pagination common-fraction"></div> </div> <?php endif; ?> </div> <?php // end of protfolio type ?><?php else: ?> <?php // end of protfolio type ?><div class="scroll_carousel_box side_<?php echo esc_attr($settings['scroll_side']); ?>" data-speed="<?php echo esc_attr($settings['in_speed']); ?>" data-margin="<?php echo esc_attr($settings['in_margin']); ?>" data-dir="<?php echo esc_attr($settings['scroll_side']); ?>"> <?php $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : ''; $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : ''; $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : ''; $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'give_forms', 'ignore_sticky_posts' => true, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'give_category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $donation_grid_query = new \WP_Query( $args ); ?> <?php while ($donation_grid_query->have_posts()) : ?> <?php $donation_grid_query->the_post(); ?> <?php global $post; // donation card ?> <?php if($settings['donation_styles'] == 'style_two'): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php // Donation card ?> <?php elseif($settings['donation_styles'] == 'style_three'): ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_donation_card_2'); ?> </div> <?php // Donation card ?> <?php // Donation style end?> <?php else: ?> <div class="scroll_cbox scroll_con_type_<?php echo esc_attr($settings['scroll_con_type']); ?>"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php endif; ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php endif; ?> </section>
<?php 
}
}