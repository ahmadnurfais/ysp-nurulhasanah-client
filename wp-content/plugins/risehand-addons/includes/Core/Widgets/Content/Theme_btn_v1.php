<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Theme_btn_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-themebtns-v1';
    }

    public function get_title()
    {
        return __('Theme Buttons V1' , 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['102'];
    } 
    protected function register_controls()  { 
        $this->start_controls_section(
			'theme_content',
			[
				'label' => esc_html__( 'Theme Button Content', 'risehand-addons' ),
			]
        ); 
        $this->add_control(
            'theme_btn_styles',
            [
                'label' => esc_html__('Theme Button Style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one' => esc_html__('Style One', 'risehand-addons'),
                    'style_two' => esc_html__('Style Two', 'risehand-addons'),
                ],
                'default' => 'style_one',
            ]
        );        
        $this->add_control(
            'icontype',
            [
                'label' => esc_html__('Icon Library', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'custom' => esc_html__('Risehand Custom Icons', 'risehand-addons'),
                    'fontawesome' => esc_html__('Font Awesome 5', 'risehand-addons'),
                    'icon_image_enable' => esc_html__('Icon Image Type', 'risehand-addons'),
                    'disable_icon' => esc_html__('Disable Icon', 'risehand-addons'),
                ],
                'default' => 'custom',
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
            'icon_fonts',
            [
                'label' => esc_html__('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICON,
                'options' => get_risehand_icons(),
                'default' => 'risehand-sliders',
                'condition' => [
                    'icontype' => 'custom',
                ],
            ]
        ); 
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Conserve Water', 'risehand-addons'),
                'placeholder' => __('Enter your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
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
        $this->end_controls_section(); 
        // Styling Section
        $this->start_controls_section(
            'styling_section',
            [
                'label' => esc_html__('Styling', 'risehand-addons'),
                'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
            ]
        ); 
        $this->add_responsive_control(
            'btn_alignments',
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
                'default' => 'center',
                'toggle' => true, 
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all ' => 'text-align: {{VALUE}};', 
                ],
            ]
        );
        
        $this->add_control(
            'btn_color',
            [
                'label' => esc_html__('Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a ' => 'color: {{VALUE}};', 
                    '{{WRAPPER}} .theme_btn_all a svg path' => 'fill: {{VALUE}};', 
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'btnbor_color',
				'selector' => '{{WRAPPER}} .theme_btn_all a',
			]
		);  
        $this->add_control(
            'btnbg_color',
            [
                'label' => esc_html__('Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a' => 'background: {{VALUE}};', 
                ],
            ]
        ); 
        $this->add_control(
            'btn_fsize',
            [
                'label' => __('Button Font Size', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
 
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
                'selectors' => [
                    '{{WRAPPER}} .theme_btn_all a' => 'font-size: {{VALUE}}px;', 
                ],
            ]
        ); 
        $this->add_control(
            'btnbot_rad',
            [
                'label' => esc_html__( 'Button  Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .theme_btn_all a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'btn_padding',
            [
                'label' => esc_html__('Button Padding', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .theme_btn_all a ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'hr_opt',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'hbtn_color',
            [
                'label' => esc_html__('Hover Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .theme_btn_all a:hover ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}}  .theme_btn_all a:hover svg path' => 'fill: {{VALUE}}!important;',
                ],
            ]
        );

        $this->add_control(
            'hbtnbor_color',
            [
                'label' => esc_html__('Hover Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .theme_btn_all a:hover ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'hbtnbg_color',
            [
                'label' => esc_html__('Hover Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .theme_btn_all a:hover ' => 'background: {{VALUE}}!important;',
                ], 
            ]
        );
 $this->end_controls_section();
} 
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
$link  = $settings['button_link']['url'];
$link_target  = '';
$link_unfollow  = '';
if (!empty( $settings['button_link'])) {
    $link_target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
    $link_unfollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';
} 
?> 
<div class="theme_btn_all"> <?php if($settings['theme_btn_styles'] == 'style_two'):?> <a class="text_btn" href="<?php echo esc_url($link); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo esc_html($settings['button_text']);?> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; if (!empty($list_repeater['icon_images']['url'])): $icon_images = $list_repeater['icon_images']['url']; $alt_icon_images = 'icon'; if(!empty($list_repeater['icon_images']['alt'])){ $alt_icon_images = $list_repeater['icon_images']['alt']; } ?> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> </a> <?php else:?> <a href="<?php echo esc_url($link); ?>" class="theme_btn" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo esc_html($settings['button_text']);?> <?php if($settings['icontype'] != 'disable_icon'): ?> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; if (!empty($list_repeater['icon_images']['url'])): $icon_images = $list_repeater['icon_images']['url']; $alt_icon_images = 'icon'; if(!empty($list_repeater['icon_images']['alt'])){ $alt_icon_images = $list_repeater['icon_images']['alt']; } ?> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> <?php endif; ?> <?php endif; ?> <?php endif; ?> </a> <?php endif; ?> </div>
<?php
    }
}

 