<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Social_media_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-social-media-v1';
    }

    public function get_title()
    {
        return __('Social Media V1', 'risehand-addons');
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
        $this->start_controls_section('media_v1_settings',
        [ 
            'label' => __('Progress Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
          
        
        $repeater = new \Elementor\Repeater(); 
        $repeater->add_control(
            'icontype',
            [
                'label' => __('Faqs Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'custom'  => __( 'Risehand Custom Icons', 'risehand-addons' ),
                    'fontawesome' => __( 'Font Awesome 5', 'risehand-addons' ),
                    'text' => __( 'Custom Text Box', 'risehand-addons' ),
                ],
                'default' => __('custom' , 'risehand-addons'),
            ]
        ); 
        $repeater->add_control(
           'icon_fonts',
           [
               'label' => __('Faqs Icon', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::ICON,
               'options' => get_risehand_icons(),
               'default' => __('risehand-chevron-right' , 'risehand-addons'),
               'condition' => [ 
                'icontype' => ['custom'],
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
                    'icontype' => ['fontawesome'],
                ]
            ]
        );
        $repeater->add_control(
            'icon_text',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('fa fa-facebook', 'risehand-addons'),
                'placeholder' => __('Enter the icon name here', 'risehand-addons'),
                'condition' => [ 
                    'icontype' => ['text'],
                ]
            ]
         ); 
        $repeater->add_control(
           'tool_tip',
           [
               'label' => __('Tooltip', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Facebook', 'risehand-addons'),
               'placeholder' => __('Enter the text here', 'risehand-addons'),
           ]
        ); 
        $repeater->add_control(
            'media_link',
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
       $this->add_control(
           'media_repeater',
           [
               'label' => __('Media Content', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::REPEATER,
               'fields' => $repeater->get_controls(),
               'default' => [
                    [ 
                        'icontype' =>  __('custom', 'risehand-addons'),
                        'icon_fonts' =>  __('risehand-facebook' , 'risehand-addons'),
                    ],
                    [
                        'icontype' =>  __('custom', 'risehand-addons'),
                        'icon_fonts' =>  __('risehand-twitter' , 'risehand-addons'),
                    ],
                    [
                        'icontype' =>  __('custom', 'risehand-addons'),
                        'icon_fonts' =>  __('risehand-instagram1' , 'risehand-addons'),
                    ],
                    [ 
                        'icontype' =>  __('custom', 'risehand-addons'),
                        'icon_fonts' =>  __('risehand-slack2' , 'risehand-addons'),
                    ],
                    [ 
                        'icontype' =>  __('custom', 'risehand-addons'),
                        'icon_fonts' =>  __('risehand-linkedin' , 'risehand-addons'),
                    ],
               ],
               'title_field' => '{{{ icontype }}}',
   
           ]
       ); 
        $this->add_control(
            'cssdiv1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_responsive_control(
			'meida_alignment',
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
                    '{{WRAPPER}} .social-icons ul' => 'text-align: {{VALUE}}; justify-content: {{VALUE}};',
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
            'mdiconcolor',
             [
                'label' => __('Media Icon Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon ' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .social-icons ul li .m_icon svg path ' => 'fill: {{VALUE}};',
                ],
             ]
        );  
        $this->add_control(
            'mdiconbgcolor',
             [
                'label' => __('Media Icon Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon ' => 'background: {{VALUE}};',
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
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'selector' => '{{WRAPPER}} .social-icons ul li .m_icon',
			]
		);
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => __( 'Border Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px' , 'rem'],
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'homdiconcolor',
             [
                'label' => __('Hover Media Icon Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover svg path ' => 'fill: {{VALUE}};',
                ],
             ]
        ); 
        $this->add_control(
            'homdiconbrcolor',
             [
                'label' => __('Hover Media Icon Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'border-color: {{VALUE}};',
                ],
             ]
        ); 
        $this->add_control(
            'homdiconbgcolor',
             [
                'label' => __('Hover Media Icon Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'background: {{VALUE}};',
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
            'tooltipcolor',
             [
                'label' => __('Tooltip Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li small ' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_control(
            'tooltipbgcolor',
             [
                'label' => __('Tooltip Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li small  ' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .social-icons ul li small:before ' => 'border-top-color: {{VALUE}};',
                ],
             ]
        ); 
        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?>
  <div class="social-icons trans"> <ul> <?php if(!empty($settings['media_repeater'])): foreach($settings['media_repeater'] as $key => $media): $target_two = $media['media_link']['is_external'] ? ' target="_blank"' : ''; $nofollow_two = $media['media_link']['nofollow'] ? ' rel="nofollow"' : ''; ?> <li class="trans"> <?php if(!empty($media['tool_tip'])): ?> <small class="trans"><?php echo esc_attr($media['tool_tip']); ?></small> <?php endif; ?> <a href="<?php echo esc_url($media['media_link']['url']); ?>" class="m_icon" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>> <?php if( $media['icontype'] == 'text'): ?> <span class="<?php echo esc_html( $media['icon_text']); ?>"></span> <?php endif; ?> <?php if($media['icontype'] == 'custom'): ?> <span class="<?php echo esc_html( $media['icon_fonts']); ?>"></span> <?php endif; ?> <?php if($media['icontype'] == 'fontawesome'): ?> <?php if(!empty($media['icon_fontawesome'])): ?> <?php \Elementor\Icons_Manager::render_icon($media['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> <?php endif; ?> <?php endif; ?> </a> </li> <?php endforeach; ?> <?php endif; ?> </ul></div>
    <?php
    }
}

 

