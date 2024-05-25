<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Contact_form_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-contact-form-v1';
    }

    public function get_title()
    {
        return __('Contact Form V1', 'risehand-addons');
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

        // Content controls start 
        $this->start_controls_section('icon_box_settings',
        [ 
            'label' => __('Icon Settings', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );

        $this->add_control(
            'form_type',
            [
                'label' => __('Contact Form Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
					'contact_form_seven'  => __( 'Contact Form 7', 'risehand-addons' ),
                    'wp_forms' => __( 'Wp Forms', 'risehand-addons' ),
                    'shortcode' => __( 'Shortcode', 'risehand-addons' ), 
				],
                'default' =>  'contact_form_seven' ,
            ]
        );   
        $this->add_control(
            'contact_form_url_seven',
            [
                'label' => __('Contact Form Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => risehand_common_query('wpcf7_contact_form'),
                'condition' => [ 
                    'form_type' => 'contact_form_seven',
                ] 
            ]
        );    
        $this->add_control(
            'contact_form_url',
            [
                'label' => __('Contact Form Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => risehand_common_query('wpforms'), 
                'condition' => [ 
                    'form_type' => 'wp_forms',
                ] 
            ]
        );    
        $this->add_control(
            'contact_short_code',
            [
                'label' => __('Shortcode', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('General Enquires', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
                'condition' => [ 
                    'form_type' => 'shortcode',
                ] 
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section('form_css',
        [ 
            'label' => __('Form Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Label Typography', 'risehand-addons' ),
                'name' => 'labtyp',
                'selector' =>   '{{WRAPPER}} .contact_form_box_all label , {{WRAPPER}} .wpforms-field-number-slider-hint', 
            ]
        );
        $this->add_responsive_control(
            'label_color',
            [
                'label' => __('Label Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all label , {{WRAPPER}} .wpforms-field-number-slider-hint ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'label_padding',
            [
                'label' => esc_html__( 'Label Padding', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all label , {{WRAPPER}} .wpforms-field-number-slider-hint  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );


        $this->add_responsive_control(
            'range_slider_bg',
            [
                'label' => __('Range Slider Background Color (Wp forms)', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .rangeslider ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'range_ac_slider_bg',
            [
                'label' => __('Range Slider Active Background Color (Wp forms)', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .rangeslider__fill ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'range_han_slider_bg',
            [
                'label' => __('Range Slider Handle  Background Color (Wp forms)', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .rangeslider__handle ' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_responsive_control(
            'input_check_color',
            [
                'label' => __('Input Check / Radio Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=checkbox]:after , {{WRAPPER}} .contact_form_box_all  input[type=radio]:after ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'input_checkbr_color',
            [
                'label' => __('Input Check / Radio Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=checkbox] , {{WRAPPER}} .contact_form_box_all  input[type=radio] ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_check_ac_color',
            [
                'label' => __('Input Check / Radio Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=checkbox]:checked:after, {{WRAPPER}} .contact_form_box_all input[type=radio]:checked:after ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_check_acbr_color',
            [
                'label' => __('Input Check / Radio Active Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=checkbox]:checked , {{WRAPPER}} .contact_form_box_all input[type=radio]:checked ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'inputheight',
            [
                'label' => __('Input , Select Height', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 300,
                'step'    => 1,
                'default' =>'',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio")  , {{WRAPPER}} .contact_form_box_all  select ' => 'height: {{VALUE}}px!important;',
                    '{{WRAPPER}} .contact_form_box_all input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'height:unset!important;',
            ], 
            ]
        );
        $this->add_responsive_control(
            'textareaheight',
            [
                'label' => __('Text Area Height', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 300,
                'step'    => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all textarea ' => 'height: {{VALUE}}px!important; min-height: {{VALUE}}px!important;',
            ], 
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Input / Textarea  Typography', 'risehand-addons' ),
                'name' => 'inptypo',
                'selector' =>   '{{WRAPPER}} .contact_form_box_all input , {{WRAPPER}} .contact_form_box_all textarea', 
            ]
        );
        $this->add_responsive_control(
            'input_color',
            [
                'label' => __('Input / Textarea Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all input , {{WRAPPER}} .contact_form_box_all textarea ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Input / Textarea Placeholder Typography', 'risehand-addons' ),
                'name' => 'inptypopl',
                'selector' =>   '{{WRAPPER}} .contact_form_box_all input::placeholder , {{WRAPPER}} .contact_form_box_all textarea::placeholder', 
            ]
        );
        $this->add_responsive_control(
            'input_place_holder_color',
            [
                'label' => __('Input / Textarea Placeholder Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all input::placeholder , {{WRAPPER}} .contact_form_box_all textarea::placeholder  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_bg_color',
            [
                'label' => __('Input / Textarea Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all input , {{WRAPPER}} .contact_form_box_all textarea  ' => 'background: {{VALUE}}!important;',
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
                    '{{WRAPPER}} .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio")  , {{WRAPPER}} .contact_form_box_all textarea  ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_border_color',
            [
                'label' => __('Input / Textarea Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio")  , {{WRAPPER}} .contact_form_box_all textarea  ' => 'border-color: {{VALUE}}!important;',
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
                    '{{WRAPPER}}  .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio")  , {{WRAPPER}} .contact_form_box_all textarea ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_padding',
            [
                'label' => esc_html__( 'Input / Textarea Padding', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio")  , {{WRAPPER}} .contact_form_box_all textarea ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_margin',
            [
                'label' => esc_html__( 'Input / Textarea Margin', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .contact_form_box_all input:not(type="checked") , {{WRAPPER}} .contact_form_box_all input:not(type="radio") , {{WRAPPER}} .contact_form_box_all textarea ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Select  Typography', 'risehand-addons' ),
                'name' => 'inptypoplt',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single .select2-selection__rendered , {{WRAPPER}} .contact_form_box_all  .wpforms-field .select2-selection--single .select2-selection__rendered 
                    , {{WRAPPER}} .wpforms-field-select select  , {{WRAPPER}} div.wpforms-container .wpforms-form .choices__list--single .choices__item ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}}  .wpforms-form .choices::after , {{WRAPPER}} .contact_form_box_all .select2-selection__arrow::before , {{WRAPPER}}  select ',
                ],
            ]
        );
        $this->add_responsive_control(
            'select_color',
            [
                'label' => __('Select  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single .select2-selection__rendered , {{WRAPPER}} .contact_form_box_all  .wpforms-field .select2-selection--single .select2-selection__rendered 
                    , {{WRAPPER}} .wpforms-field-select select  , {{WRAPPER}} div.wpforms-container .wpforms-form .choices__list--single .choices__item ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}}  .wpforms-form .choices::after , {{WRAPPER}} .contact_form_box_all .select2-selection__arrow::before , {{WRAPPER}}  select ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
    
        $this->add_responsive_control(
            'select_bg_color',
            [
                'label' => __('Select Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select 
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'select_border_width',
            [
                'label' => esc_html__( 'Select Border Width', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select ' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'select_border_color',
            [
                'label' => __('Select Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select  ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'select_border_radius',
            [
                'label' => esc_html__( 'Select Border Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'select_padding',
            [
                'label' => esc_html__( 'Select Padding', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'select_margin',
            [
                'label' => esc_html__( 'Select Margin', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  .select2-selection--single , {{WRAPPER}} .contact_form_box_all .wpforms-field .select2-selection--single , {{WRAPPER}} .wpforms-field-select select
                    , {{WRAPPER}}  div.wpforms-container .wpforms-form .choices__inner , {{WRAPPER}}  select ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );

        $this->add_responsive_control(
            'button_position',
            [
            'label' => __('Button Position', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'absolute' => __( 'Absolute', 'risehand-addons' ),
                'relative' => __( 'Relative', 'risehand-addons' ),
            ],
            'default' => 'relative' ,
            'selectors' => [
                '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'position: {{VALUE}}!important;',
            ],
            ]
        );
        $this->add_responsive_control(
            'button_pos',
            [
            'label' => __('Button Position', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'button_bottom_right' => __( 'Bottom Right', 'risehand-addons' ),
                'button_bottom_left' => __( 'Bottom Left', 'risehand-addons' ),
            ],
            'default' => 'button_bottom_right' , 
        
            ]
        );
        $this->add_responsive_control(
            'button_bottom',
            [
                'label' => __('Button Bottom', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => -1000,
                'max'     => 1000,
                'step'    => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'bottom: {{VALUE}}px!important;',
            ],
            'condition' => [
                'button_pos' => ['button_bottom_right' , 'button_bottom_left'],
                ],
            ]
        );
        $this->add_responsive_control(
            'button_right',
            [
                'label' => __('Button Right', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => -1000,
                'max'     => 1000,
                'step'    => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'right: {{VALUE}}px!important;',
            ],
            'condition' => [
                'button_pos' => 'button_bottom_right'
                ],
            ]
        );
        $this->add_responsive_control(
            'button_left',
            [
                'label' => __('Button Left', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => -1000,
                'max'     => 1000,
                'step'    => 1,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'left: {{VALUE}}px!important;',
            ],
            'condition' => [
                'button_pos' => 'button_bottom_left'
                ],
            ]
        );
        $this->add_responsive_control(
            'button_padding',
            [
                'label' => esc_html__( 'Button Padding', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important; min-height:auto!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'button_borderradiuse',
            [
                'label' => esc_html__( 'Button Border Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'buttonmargin',
            [
                'label' => esc_html__( 'Button Margin', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( ' Button  Typography', 'risehand-addons' ),
                'name' => 'btntypo',
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button ',
                ],
            ]
        );
        $this->add_control(
            'button_color',
            [
                'label' => __('Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_border_color',
            [
                'label' => __('Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __('Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all   input[type=submit] , {{WRAPPER}} .contact_form_box_all   button[type=submit], 
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form button[type=submit],
                    {{WRAPPER}} .contact_form_box_all   div.wpforms-container-full .wpforms-form .wpforms-page-button  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );

        $this->add_control(
            'button_hover_color',
            [
                'label' => __('Button Hover Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=submit]:hover , {{WRAPPER}} .contact_form_box_all   button[type=submit]:hover, 
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form button[type=submit]:hover,
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form .wpforms-page-button:hover ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_hover_bor_color',
            [
                'label' => __('Button Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=submit]:hover , {{WRAPPER}} .contact_form_box_all   button[type=submit]:hover, 
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form button[type=submit]:hover,
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form .wpforms-page-button:hover ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'button_hover_bg_color',
            [
                'label' => __('Button Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_form_box_all  input[type=submit]:hover , {{WRAPPER}} .contact_form_box_all   button[type=submit]:hover, 
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form button[type=submit]:hover,
                    {{WRAPPER}} .contact_form_box_all  div.wpforms-container-full .wpforms-form .wpforms-page-button:hover ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );

        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();  
?>
<section class="contact_form_box_all"> <?php if($settings['form_type'] == 'wp_forms'): ?><?php if(!empty($settings['contact_form_url'])): ?><?php echo do_shortcode('[wpforms id="' . $settings['contact_form_url'] . '"]'); ?><?php else: ?><p><?php echo esc_html('There is no contact form please create it' , 'risehand-addons'); ?></p><?php endif; ?><?php elseif($settings['form_type'] == 'shortcode'): ?><?php if(!empty($settings['contact_short_code'])): ?><?php echo do_shortcode($settings['contact_short_code']); ?><?php endif; ?><?php else: ?><?php if(!empty($settings['contact_form_url_seven'])): ?><?php echo do_shortcode('[contact-form-7 id="' . $settings['contact_form_url_seven'] . '"]'); ?><?php else: ?><p><?php echo esc_html('There is no contact form please create it' , 'risehand-addons'); ?></p><?php endif; ?><?php endif; ?> </section>
<?php
}
}