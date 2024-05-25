<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class List_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-list-v1';
    }

    public function get_title()
    {
        return __('List V1', 'risehand-addons');
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
        $this->start_controls_section('list_v1_settings',
        [ 
            'label' => __('Title Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'list_dsplay',
            [
            'label' => __('List Display Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'list_type' => __( 'List', 'risehand-addons' ),
                'inline_type' => __( 'Inline', 'risehand-addons' ),
            ],
            'default' => 'list_type' , 
            ]
        );
        $this->add_control(
            'list_type',
            [
            'label' => __('List  Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'dots' => __( 'Dots ( Not Work on Inline Type) ', 'risehand-addons' ),
                'icons' => __( 'Icons', 'risehand-addons' ),
                'numbers' => __( 'Numbers', 'risehand-addons' ),
            ],
            'default' => 'dots' , 
            ]
        ); 
        $this->add_control(
            'dark_white',
            [
            'label' => __('List Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'dark_color' => __( 'Dark Color', 'risehand-addons' ),
                'white_color' => __( 'White Color', 'risehand-addons' ),
                'light_color' => __( 'Light Color', 'risehand-addons' ),
            ],
            'default' => 'dark_color' , 
            ]
        ); 
        $repeater = new \Elementor\Repeater(); 
        $repeater->add_control(
            'icontype',
            [
                'label' => __('List Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'custom'  => __( 'Risehand Custom Icons', 'risehand-addons' ),
                    'fontawesome' => __( 'Font Awesome 5', 'risehand-addons' ),
                ],
                'default' => __('custom' , 'risehand-addons'),
            ]
        ); 
        $repeater->add_control(
           'icon_fonts',
           [
               'label' => __('List Icon', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::ICON,
               'options' => get_risehand_icons(),
               'default' => __('risehand-chevron-right' , 'risehand-addons'),
               'condition' => [ 
                    'icontype' => 'custom',
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
                    'icontype' => 'fontawesome',
                ]
            ]
        );

        $repeater->add_control(
           'list_items',
           [
               'label' => __('List Items', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('How do I make a yearly payment? ', 'risehand-addons'),
               'placeholder' => __('How do I make a yearly payment?', 'risehand-addons'),
           ]
        ); 
        $repeater->add_control(
            'button_link',
        [
            'label' => __('Link', 'risehand-addons'),
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
        $repeater->add_control(
           'description',
           [
               'label' => __('Description', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
               'placeholder' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
           ]
        );  
       $this->add_control(
           'list_v1_repeater',
           [
               'label' => __('List Content', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::REPEATER,
               'fields' => $repeater->get_controls(),
               'default' => [
                   [ 
                    'list_items' =>  __('How do I make a yearly payment?', 'risehand-addons'),
                    'description' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.'),
                    ],
                   [
                    'list_items' =>  __('How this technology works?', 'risehand-addons'),
                    'description' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                    ],
                    [
                    'list_items' =>  __('What is the comunity benefit?', 'risehand-addons'),
                    'description' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                    ],
                    [ 
                    'list_items' =>  __('What is the comunity benefit?', 'risehand-addons'),
                    'description' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                    ],
               ],
               'title_field' => '{{{ list_items }}}',
   
           ]
       );
      
        $this->end_controls_section();

        $this->start_controls_section('title_css',
        [ 
            'label' => __('Title Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'List Title Typography', 'risehand-addons' ),
				'name' => 'sm_typo',
				'selector' => '{{WRAPPER}} .list_items .title_20 a',
			]
		);
        $this->add_control(
            'sm_title_color',
             [
                'label' => __('List Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .list_items .title_20 a' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_responsive_control(
			'sm_margin',
			[
				'label' => esc_html__( 'List Title Padding', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .list_items .title_20' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'List Typography', 'risehand-addons' ),
				'name' => 'list_typo',
				'selector' => '{{WRAPPER}} .list_items .desc_p',
			]
		);
        $this->add_control(
            'list_color',
             [
                'label' => __('List Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .list_items .desc_p' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_responsive_control(
			'list_margin',
			[
				'label' => esc_html__( 'List Margin', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .list_items  .desc_p ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_responsive_control(
			'list_padding',
			[
				'label' => esc_html__( 'List Padding', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .list_items  .desc_p ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?> 
<ul class="list_items_box ul_<?php echo esc_attr($settings['list_type']); ?> <?php echo esc_attr($settings['dark_white']); ?> <?php echo esc_attr($settings['list_dsplay']); ?>"> <?php if(!empty($settings['list_v1_repeater'])): foreach($settings['list_v1_repeater'] as $key => $list_block): $link = $list_block['button_link']['url'];$link_target = '';$link_unfollow = ''; if (!empty( $list_block['button_link'])) { $link_target = $list_block['button_link']['is_external'] ? ' target="_blank"' : ''; $link_unfollow = $list_block['button_link']['nofollow'] ? ' rel="nofollow"' : '';}?><li class="list_items trans <?php echo esc_attr($settings['list_type']); ?>"> <div class="l_box d_flex align-items-center "> <?php if($list_block['icontype'] != 'disable_icon' && $settings['list_type'] == 'icons'): ?> <div class="icon_box<?php if( $list_block['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $list_block['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($list_block['icon_images']['url'])) { $icon_images = $list_block['icon_images']['url']; $alt_icon_images = $list_block['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> <?php endif; ?> <?php endif; ?> <?php if($list_block['icontype'] == 'custom'): ?> <span class="<?php echo esc_html( $list_block['icon_fonts']); ?>"></span> <?php endif; ?> <?php if($list_block['icontype'] == 'fontawesome'): ?> <?php if(!empty($list_block['icon_fontawesome'])): ?> <?php \Elementor\Icons_Manager::render_icon($list_block['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <?php if(!empty($link)): ?> <?php if(!empty($list_block['list_items'])): ?> <div class="title_20"> <a class="d-block mb_0" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>><?php echo wp_kses($list_block['list_items'] , $allowed_tags);?></a></div> <?php endif; ?> <?php else: ?> <div class="title_no_a_20"><?php echo wp_kses($list_block['list_items'] , $allowed_tags);?></div> <?php endif; ?> </div> <?php if(!empty($list_block['description'])): ?> <p class="desc_p mt_15"><?php echo wp_kses($list_block['description'] , $allowed_tags);?></p> <?php endif; ?> </li><?php endforeach; endif;?> </ul> 
    <?php
    }
}

 

