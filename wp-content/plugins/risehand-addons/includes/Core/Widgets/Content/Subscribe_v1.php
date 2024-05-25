<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Subscribe_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-subscribe-v1';
    }

    public function get_title()
    {
        return __('Subscribe V1', 'risehand-addons');
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
        $this->start_controls_section('sub_settings',
        [ 
            'label' => __('Subscribe Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'subscribe_style_two',
            [
            'label' => __('Subscribe Styles', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'risehand-addons' ),
                'style_two' => __( 'Style Two', 'risehand-addons' ),
            ],
            'default' => 'style_one' , 
            ]
        ); 
        $this->add_control(
            'subscribe_type',
            [
            'label' => __('Subscribe Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'dark' => __( 'Dark', 'risehand-addons' ),
                'light' => __( 'Light', 'risehand-addons' ),
            ],
            'default' => 'dark' , 
            ]
        ); 
        $this->add_control(
            'title_tag',
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
            'title',
            [
               'label' => __('Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Raise Your Helping Hand', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'description',
            [
              'label' => __('Description', 'risehand-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => __('Sorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vive
              maecenas accumsan lacus vel facilisis.', 'risehand-addons'),
              'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );   
        $this->add_control(
            'content',
            [
              'label' => __('Shortcode', 'risehand-addons'),
              'type' => \Elementor\Controls_Manager::TEXTAREA,
              'default' => '[mc4wp_form]',
              'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );     
        $this->end_controls_section(); 
        $this->start_controls_section('sub_css',
        [ 
            'label' => __('Subscribe Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );

        $this->add_control(
            'box_bg_color',
             [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub ' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
             ]
        ); 
        $this->add_control(
            'box_border_color',
             [
                'label' => __('Box Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub   ' => 'border-color: {{VALUE}};',
                    '{{WRAPPER}} .common_sub .divider ' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
             ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .common_sub .title_no_a_30',
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
			]
		);
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .title_no_a_30' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
             ]
        );  
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( ' Description Typography', 'risehand-addons' ),
				'name' => 'desc_typo',
				'selector' => '{{WRAPPER}} .common_sub p',
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
			]
		);
        $this->add_control(
            'description_color',
             [
                'label' => __('Description Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub p ' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
             ]
        );
        $this->add_control(
            'chr3',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
                'condition' => [
                    'subscribe_style_two' => 'style_one',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Input Typography', 'risehand-addons' ),
                'name' => 'inptypo',
                'selector' =>   '{{WRAPPER}} .contact_form_box_all input , {{WRAPPER}} .common_sub  input::placeholder', 
            ]
        );
        $this->add_control(
            'input_color',
            [
                'label' => __('Input  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub  input  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'inputicon_color',
            [
                'label' => __('Input Icon  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields::before  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'input_place_holder_color',
            [
                'label' => __('Input  Placeholder Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub  input::placeholder  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'input_bg_color',
            [
                'label' => __('Input  Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub  input ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_border_width',
            [
                'label' => esc_html__( 'Input Border Width', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .common_sub  input ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'input_border_color',
            [
                'label' => __('Input  Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .common_sub  input  ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_border_radius',
            [
                'label' => esc_html__( 'Input Border Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .common_sub  input ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
       
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Button  Typography', 'risehand-addons' ),
                'name' => 'btntypo',
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit] ',
                ],
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __('Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit]' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_border_color',
            [
                'label' => __('Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit] ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __('Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit]  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );

        $this->add_control(
            'button_hover_color',
            [
                'label' => __('Button Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit]:hover ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_hover_bor_color',
            [
                'label' => __('Button Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit]:hover ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => __('Button Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .common_sub .mc4wp-form-fields input[type=submit]:hover ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );

        $this->end_controls_section();

    }
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?>
<?php if($settings['subscribe_style_two'] == 'style_two'): ?> <?php if(!empty($settings['content'])): ?> <div class="item_scubscribe_two common_sub"> <?php echo do_shortcode($settings['content']);?> </div> <?php endif;?><?php else: ?> <section class="newsteller d_flex common_sub style_one <?php echo esc_attr($settings['subscribe_type']); ?>"> <div class="content column-1"> <?php if(!empty($settings['title'])):?> <div class="title_no_a_30"><?php echo wp_kses($settings['title'] , $allowed_tags); ?></div> <?php endif;?> <?php if(!empty($settings['description'])):?> <p class="mt_15 mb_0"><?php echo wp_kses($settings['description'] , $allowed_tags); ?> </p> <?php endif;?> </div> <div class="divider"></div> <?php if(!empty($settings['content'])): ?> <div class="item_scubscribe column-1"> <?php echo do_shortcode($settings['content']);?> </div> <?php endif;?></section><?php endif; ?>  
    <?php
    }
}

 

