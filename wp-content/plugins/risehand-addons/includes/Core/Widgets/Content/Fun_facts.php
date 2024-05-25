<?php

namespace  Risehandaddons\Core\Widgets\Content;
   
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
   
class Fun_facts extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-fun-facts-box';
    }

    public function get_title()
    {
        return __('Fun Facts V1', 'risehand-addons');
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
        $this->start_controls_section('counter_setting',
        [ 
            'label' => __('Fun Facts Settings', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        ); 
        $this->add_control(
            'counter_style',
            [
                'label' => __('Fun Facts style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one' => __('Type One', 'risehand-addons'),
                    'style_two' => __('Type Two', 'risehand-addons'),
                ],
                'default' => 'style_one',
               
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
              'none'  => esc_html__( 'Disable Icon', 'risehand-addons' ), 
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
            'counter_start',
        [
            'label' => esc_html__('Counter Start', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('4536' , 'risehand-addons'),
        ]);
        $this->add_control(
            'fact_symbols',
            [
                'label' => __('Symbols', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('+', 'risehand-addons'),
                'placeholder' => __('Enter Your Symbols', 'risehand-addons'),
            ]
        ); 
        $this->add_control(
            'fact_heading',
            [
                'label' => __('Heading', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Project Completed', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        ); 
        $this->add_control(
            'fact_description',
            [
                'label' => __('Description', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );   

        $this->end_controls_section();

        $this->start_controls_section('funfact_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Count Typography', 'risehand-addons' ),
                'name' => 'cstyle_one',
                'selector' =>   '{{WRAPPER}} .facts_style_one .coun_ter , {{WRAPPER}} .facts_style_two .coun_ter ', 
            ]
        ); 
        $this->add_control(
            'cstyle_two',
            [
                'label' => __('Count Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one .coun_ter , {{WRAPPER}} .facts_style_two .coun_ter ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
                'name' => 'cstyle_three',
                'selector' =>   '{{WRAPPER}} .facts_style_one .title_no_a_22 , {{WRAPPER}} .facts_style_two .title_no_a_22', 
            ]
        ); 
        $this->add_control(
            'cstyle_four',
            [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one .title_no_a_22 , {{WRAPPER}} .facts_style_two .title_no_a_22 ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Content Typography', 'risehand-addons' ),
                'name' => 'cstyle_five',
                'selector' =>   '{{WRAPPER}} .facts_style_one .desc_p , {{WRAPPER}} .facts_style_two .desc_p', 
            ]
        ); 
        $this->add_control(
            'cstyle_six',
            [
                'label' => __('Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one .desc_p , {{WRAPPER}} .facts_style_two .desc_p ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 

        $this->add_control(
            'cstyle_seven',
            [
                'label' => __('Icon Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one .icon span , {{WRAPPER}} .facts_style_one .icon i ,
                    {{WRAPPER}} .facts_style_two .icon span , {{WRAPPER}} .facts_style_two .icon i ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}} .facts_style_one .icon svg path , {{WRAPPER}} .facts_style_two .icon svg path ' => 'fill: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_eight',
            [
                'label' => __('Bckground Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one  , {{WRAPPER}} .facts_style_two .icon' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_ninie',
            [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one , {{WRAPPER}} .facts_style_two .icon  ' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_ten',
            [
                'label' => __('Hover Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .facts_style_one .fun_inner::before , {{WRAPPER}} .facts_style_one .fun_inner::after ,
                    {{WRAPPER}} .facts_style_one::before , {{WRAPPER}}  .facts_style_one::after' => 'background: {{VALUE}}!important;',
                ],
                'condition' => [ 
                    'counter_style' => 'style_one'
                ]
            ]
        ); 
        $this->end_controls_section();
    }
   
    protected function render()
    {
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');      
    ?> 
     <?php if($settings['counter_style'] == 'style_two'): ?><div class="facts_style_two count-box mb_40 d_flex align-item-center"><div class="icon_box <?php if($settings['icontype'] == 'icon_fonts'): ?> icon_yes <?php endif; ?>"><?php if($settings['icontype'] == 'icon_image_enable'):$icon_images = '';$alt_icon_images = '';if (!empty($sliderrepeater['icon_images']['url'])) {$icon_images = $sliderrepeater['icon_images']['url'];$alt_icon_images =  $sliderrepeater['icon_images']['alt'];$alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon';}if(!empty($icon_images)): ?><div class="icon d_flex"><img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /></div><?php endif; ?><?php endif; ?><?php if($settings['icontype'] == 'custom'): ?><div class="icon d_flex"><span class="<?php echo esc_html($settings['icon_fonts']); ?>"></span></div><?php endif; ?><?php if($settings['icontype'] == 'fontawesome'): ?><?php if(!empty($settings['icon_fontawesome'])): ?><div class="icon d_flex"><?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], ['aria-hidden' => 'false']); ?></div><?php endif; ?><?php endif; ?></div><div class="content_box"><?php if(!empty($settings['counter_start']) || !empty($settings['fact_symbols'])): ?><div class="coun_ter"><span class="count-text"><?php echo esc_attr($settings['counter_start']); ?></span><small><?php echo esc_attr($settings['fact_symbols']); ?></small></div><?php endif; ?><?php if(!empty($settings['fact_heading'])): ?><div class="title_no_a_22"><?php echo esc_attr($settings['fact_heading']); ?></div><?php endif; ?><?php if(!empty($settings['fact_description'])): ?><p class="desc_p mt_15 pb_10"><?php echo esc_attr($settings['fact_description']); ?></p><?php endif; ?></div></div><?php else: ?><div class="facts_style_one mb_40 count-box"><div class="fun_inner"><?php if(!empty($settings['counter_start']) || !empty($settings['fact_symbols'])): ?><div class="coun_ter"><span class="count-text"><?php echo esc_attr($settings['counter_start']); ?></span><small><?php echo esc_attr($settings['fact_symbols']); ?></small></div><?php endif; ?><?php if(!empty($settings['fact_heading'])): ?><div class="title_no_a_22"><?php echo esc_attr($settings['fact_heading']); ?></div><?php endif; ?><?php if(!empty($settings['fact_description'])): ?><p class="desc_p mt_15 pb_10"><?php echo esc_attr($settings['fact_description']); ?></p><?php endif; ?><div class="icon_box  mt_15 pt_10 <?php if($settings['icontype'] == 'icon_fonts'): ?> icon_yes <?php endif; ?>"><?php if($settings['icontype'] == 'icon_image_enable'):$icon_images = '';$alt_icon_images = '';if (!empty($sliderrepeater['icon_images']['url'])) {$icon_images = $sliderrepeater['icon_images']['url'];$alt_icon_images =  $sliderrepeater['icon_images']['alt'];$alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon';}if(!empty($icon_images)): ?><div class="icon d_flex"><img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /></div><?php endif; ?><?php endif; ?><?php if($settings['icontype'] == 'custom'): ?><div class="icon"><span class="<?php echo esc_html($settings['icon_fonts']); ?>"></span></div><?php endif; ?><?php if($settings['icontype'] == 'fontawesome'): ?><?php if(!empty($settings['icon_fontawesome'])): ?><div class="icon"><?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], ['aria-hidden' => 'false']); ?></div><?php endif; ?><?php endif; ?></div></div></div><?php endif; ?>

<?php
}
}