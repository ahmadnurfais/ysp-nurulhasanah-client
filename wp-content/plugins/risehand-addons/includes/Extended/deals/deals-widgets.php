<?php

namespace Elementor;
   

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class deals_widgets extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-deals-v1';
    }

    public function get_title()
    {
        return __('Deals Timing', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-letter-n';
    }

    public function get_categories()
    {
        return ['103'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('deals_settings',
        [ 
            'label' => __('Deals Settings Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
           
        $this->add_control(
          'deal_date',
          [
             'label' => __('Deals Date', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::TEXTAREA,
             'default' => __('2024-10-08 15:00:00', 'risehand-addons'),
             'placeholder' => __('Enter Deals Date End Time Like this 2024-10-08 15:00:00', 'risehand-addons'),    
          ]
        );
        $this->add_control(
            'op_hr_1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'disable_days',
            [
                'label' => __('Disable Days', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'daytext',
            [
               'label' => __('Day Text', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Days', 'risehand-addons'),    
               'selectors' => [
                    '{{WRAPPER}} .deal_box_tep .dealscountdown .countdown-period.days::before ' => 'content: "{{VALUE}}"!important;',
                ],
                'condition' => [
                    'disable_days' => 'no'
                ], 
            ]
        );
        $this->add_control(
            'op_hr_2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'disable_hours',
            [
                'label' => __('Disable Hours', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'hourtext',
            [
               'label' => __('Hour Text', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Hours', 'risehand-addons'),    
               'selectors' => [
                    '{{WRAPPER}} .deal_box_tep .dealscountdown .countdown-period.hours::before ' => 'content: "{{VALUE}}"!important;',
                ],
                'condition' => [
                    'disable_hours' => 'no'
                ], 
            ]
        );
        $this->add_control(
            'op_hr_3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'disable_min',
            [
                'label' => __('Disable Minutes', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'mintext',
            [
               'label' => __('Minutes Text', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Minutes', 'risehand-addons'),    
               'selectors' => [
                    '{{WRAPPER}} .deal_box_tep .dealscountdown .countdown-period.mins::before ' => 'content: "{{VALUE}}"!important;',
                ],
                'condition' => [
                    'disable_min' => 'no'
                ], 
            ]
        );
        $this->add_control(
            'op_hr_4',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'disable_seconds',
            [
                'label' => __('Disable Seconds', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        ); 
        $this->add_control(
            'sectext',
            [
               'label' => __('Seconds Text', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Seconds', 'risehand-addons'),    
               'selectors' => [
                    '{{WRAPPER}} .deal_box_tep .dealscountdown .countdown-period.sec::before ' => 'content: "{{VALUE}}"!important;',
                ],
                'condition' => [
                    'disable_seconds' => 'no'
                ], 
            ]
        );
        $this->add_control(
            'op_hr_5',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );

        $this->add_responsive_control(
			'text_align',
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
                    '{{WRAPPER}} .deal_box_tep .dealscountdown ' => 'text-align: {{VALUE}}!important;',
                ],
			]
		);
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_box_custom h3 a , {{WRAPPER}} .icon_box_custom h4 a' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'description_color',
         [
            'label' => __('Description Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_box_custom   p ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'icon_color',
         [
            'label' => __('Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_box_custom .banner-icon span ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'readmore_color',
         [
            'label' => __('Readmore Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_box_custom  a.read_mores ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'icon_box_style' => 'style_two'
            ],  
         ]
    ); 
    $this->add_control(
        'box_bg_color',
         [
            'label' => __('Box Bg Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .icon_box_custom ' => 'background: {{VALUE}}!important;',
            ],
         ]
    );

    $this->add_control(
        'box_border_color',
         [
            'label' => __('Box Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .featured-card ' => 'border-color: {{VALUE}}!important;',
            ],
            'condition' => [
                'icon_box_style' => 'style_two'
            ],  
         ]
    ); 
    $this->end_controls_section();

}
protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
?>
        <div class="deal_box_tep<?php if($settings['disable_days'] == 'yes'): ?> d_days<?php endif; ?><?php if($settings['disable_hours'] == 'yes'): ?> d_hours<?php endif; ?><?php if($settings['disable_min'] == 'yes'): ?> d_min<?php endif; ?><?php if($settings['disable_seconds'] == 'yes'): ?> d_seconds<?php endif; ?>"> 
            <div class="dealscountdown" data-countdown="<?php echo esc_attr($settings['deal_date']); ?>"></div>
        </div>     
    <?php
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new deals_widgets());