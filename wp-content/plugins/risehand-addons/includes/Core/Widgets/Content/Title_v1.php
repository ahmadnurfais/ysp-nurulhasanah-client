<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Title_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-title-v1';
    }

    public function get_title()
    {
        return __('Title V1', 'risehand-addons');
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
        $this->start_controls_section('title_v1_settings',
        [ 
            'label' => __('Title Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'title_style',
            [
            'label' => __('Title Styles', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'risehand-addons' ),
                'style_two' => __( 'Style Two', 'risehand-addons' ),
            ],
            'default' => 'style_one' , 
            ]
        ); 
        $this->add_control(
            'tag_type',
            [
            'label' => __('Title Tag', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'div' => __( 'Div Tag', 'risehand-addons' ),
                'h1' => __( 'H1 Tag', 'risehand-addons' ),
                'h2' => __( 'H2 Tag', 'risehand-addons' ),
                'h3' => __( 'H3 Tag', 'risehand-addons' ),
                'h4' => __( 'H4 Tag', 'risehand-addons' ),
                'h5' => __( 'H5 Tag', 'risehand-addons' ),
                'h6' => __( 'H6 Tag', 'risehand-addons' ),
            ],
            'default' => 'h2' , 
            ]
        ); 
        $this->add_control(
            'icontype',
            [
              'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
              'type' => \Elementor\Controls_Manager::SELECT,
              'default' => 'solid',
              'options' => [ 
                'custom'  => esc_html__( 'Risehand Icon', 'risehand-addons' ),  
                'fontawesome'  => esc_html__( 'Icon', 'risehand-addons' ), 
                'icon_image_enable' => esc_html__( 'Image', 'risehand-addons' ),
                'disable_icon'  => esc_html__( 'Disable Icon', 'risehand-addons' ), 
              ], 
              'default' =>  'custom' ,  
            ]
          );
          $this->add_control(
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
          $this->add_control(
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
          $this->add_control(
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
          $this->add_control(
            'dark_white',
            [
            'label' => __('Mode', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'dark_color' => __( 'Dark Color', 'risehand-addons' ),
                'white_color' => __( 'White Color', 'risehand-addons' ), 
            ],
            'default' => 'dark_color' , 
            ]
        ); 
        $this->add_responsive_control(
            'title_small_heading',
            [
               'label' => __('Sub Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Non profit Charity Foundation', 'risehand-addons'),
               'placeholder' => __('Type your sub-title here', 'risehand-addons'),    
               'condition' => [ 
                'title_style' => 'style_one'
                ]
            ]
        );
        $this->add_responsive_control(
            'title_heading',
            [
               'label' => __('Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Raise Your Helping Hand', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),    
            ]
        ); 
        $this->add_responsive_control(
            'title_description',
            [
              'label' => __('Description', 'risehand-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Sorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vive
              maecenas accumsan lacus vel facilisis.', 'risehand-addons'),
              'placeholder' => __('Type your text here', 'risehand-addons'),
              'condition' => [ 
                'title_style' => 'style_one'
                ]
            ]
        );      
     
        $this->end_controls_section(); 
        $this->start_controls_section('title_css',
        [ 
            'label' => __('Title Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'before_title_color',
             [
                'label' => __('Sub Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title_all_box.style_one .before_title .font_special' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title_all_box.style_one .before_title .icon span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .title_all_box.style_one .before_title .icon svg path' => 'fill: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Sub Title Typography', 'risehand-addons' ),
				'name' => 'sm_typo',
				'selector' => '{{WRAPPER}} .title_all_box.style_one .before_title .font_special',
			]
		); 
        $this->add_responsive_control(
			'sm_margin',
			[
				'label' => esc_html__( 'Sub Title Padding', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .title_all_box.style_one .before_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title_all_box .title_no_a_46 , {{WRAPPER}} .title_all_box  .risehandsplit-active *' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .title_all_box .title_no_a_46 , {{WRAPPER}} .title_all_box  .risehandsplit-active *',
			]
		); 
        $this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__( 'Title Margin', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .title_all_box  .title_no_a_46 ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_responsive_control(
			'title_padding',
			[
				'label' => esc_html__( 'Title Padding', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .title_all_box  .title_no_a_46 ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		);
        $this->add_control(
            'description_color',
             [
                'label' => __('Description Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .title_all_box .desc_p' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( ' Description Typography', 'risehand-addons' ),
				'name' => 'desc_typo',
				'selector' => '{{WRAPPER}} .title_all_box .desc_p',
			]
		);
        $this->add_responsive_control(
			'description_margin',
			[
				'label' => esc_html__( 'Description Margin', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .title_all_box .desc_p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
				],
			]
		); 
        $this->add_responsive_control(
			'title_alignments',
			[
				'label' => esc_html__( 'Alignment', 'risehand-addons' ),
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
				'default' => 'center',
				'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .title_all_box ' => 'text-align: {{VALUE}}; justify-content: {{VALUE}};',
                    '{{WRAPPER}} .title_all_box .before_title' => 'text-align: {{VALUE}}; justify-content: {{VALUE}};',
                ],
			]
		); 
    $this->end_controls_section(); 
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
$split_enable = get_addons_risehand_option('split_enable');
$split_option = "";
if($split_enable == true){
    $split_option = get_addons_risehand_option('split_option');
}
?>
<div class="title_all_box style_one <?php echo esc_attr($settings['dark_white']); ?>"> <?php if($settings['title_style'] == "style_two"): ?> <?php if(!empty($settings['title_heading'])):?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_22  mb_0"><?php echo wp_kses($settings['title_heading'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php else: ?> <?php if(!empty($settings['title_small_heading'])):?> <div class="before_title pb_15 d_flex align-items-center"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])): $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <i class="<?php echo esc_attr($settings['icon_fontawesome']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="sub_title font_special"> <?php echo wp_kses($settings['title_small_heading'] , $allowed_tags) ?> </div> </div> <?php endif; ?> <?php if(!empty($settings['title_heading'])):?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_46 <?php echo esc_attr($split_option); ?> mb_0 pb_20"><?php echo wp_kses($settings['title_heading'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php if(!empty($settings['title_description'])):?> <p class="desc_p"><?php echo wp_kses($settings['title_description'] , $allowed_tags) ?></p> <?php endif; ?> <?php endif; ?> </div> 
    <?php
    }
}

 

