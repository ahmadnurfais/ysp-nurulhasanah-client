<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Progress_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-progress-v1';
    }

    public function get_title()
    {
        return __('Progress V1', 'risehand-addons');
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
        $this->start_controls_section('progress_v1_settings',
        [ 
            'label' => __('Progress Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );
        $this->add_control(
            'progress_style',
            [
            'label' => __('Progress Style', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'style_one' => __( 'Style One', 'risehand-addons' ),
                'style_two' => __( 'Style Two', 'risehand-addons' ),
            ],
            'default' => 'style_one' , 
            ]
        );
        $this->add_control(
            'color_type',
            [
            'label' => __('List  Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'color_one' => __( 'Color One', 'risehand-addons' ),
                'color_two' => __( 'Color Two', 'risehand-addons' ), 
            ],
            'default' => 'color_one' , 
            ]
        );  
        $this->add_control(
           'percent',
           [
               'label' => __('Percent', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('89', 'risehand-addons'),
               'placeholder' => __('Enter the percentage', 'risehand-addons'),
           ]
        );  
        $this->add_control(
           'title',
           [
               'label' => __('Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('Event & Program  ', 'risehand-addons'),
               'placeholder' => __('Enter the text here', 'risehand-addons'),
           ]
        );  
        $this->add_control(
            'pcontent',
            [
                'label' => __('Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem.', 'risehand-addons'),
                'placeholder' => __('Enter the text here', 'risehand-addons'),
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
                'label' => esc_html__( 'Percentage Typography', 'risehand-addons' ),
				'name' => 'pertypo',
				'selector' => '{{WRAPPER}} .progress_bar_section .progress small , {{WRAPPER}} .progress_bar_section_two .progress_new .progress-value',
			]
		);
        $this->add_control(
            'percolor',
             [
                'label' => __('Progress Bar Percentage Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .progress_bar_section .progress small , {{WRAPPER}} .progress_bar_section_two .progress_new .progress-value' => 'color: {{VALUE}};',
                ],
             ]
        );  
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Text Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .progress_bar_section .title_no_a_20 , {{WRAPPER}} .progress_bar_section_two .title_no_a_24',
			]
		);
        $this->add_control(
            'title_color',
             [
                'label' => __('Text Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .progress_bar_section .title_no_a_20 , {{WRAPPER}} .progress_bar_section_two .title_no_a_24' => 'color: {{VALUE}};',
                ],
             ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Text 2 Typography', 'risehand-addons' ),
				'name' => 'title_two_typo',
				'selector' => '{{WRAPPER}} .progress_bar_section .title_no_a_20.right , {{WRAPPER}} .progress_bar_section_two .desc_p',
			]
		);
        $this->add_control(
            'title_two_color',
             [
                'label' => __('Text 2 Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .progress_bar_section .title_no_a_20.right , {{WRAPPER}} .progress_bar_section_two .desc_p' => 'color: {{VALUE}};',
                ],
             ]
        ); 
        $this->add_control(
            'progres_active',
             [
                'label' => __('Progress Bar Active Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .progress-bar' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}}   .progress_bar_section_two .progress_new .ProgressBar-circle, .progress_bar_section_two .progress_new .ProgressBar-background' => 'stroke: {{VALUE}};',
                   
                ],
             ]
        ); 
        $this->add_control(
            'progresscolor',
             [
                'label' => __('Progress Bar  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .progress , {{WRAPPER}} .progress-stacked' => 'background: {{VALUE}};',
                    '{{WRAPPER}}  .progress_bar_section_two .progress_new .ProgressBar-background ' => 'stroke: {{VALUE}};',
                    
                ],
             ]
        );  
        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?> 
<?php if($settings['progress_style'] == "style_two"): ?> <section class="progress_bar_section_two d_flex <?php echo esc_attr($settings['color_type']) ?>"> <div class="progress_new"> <div class="ProgressBar ProgressBar--animateText" data-progress="<?php echo esc_attr($settings['percent']); ?>"> <svg class="ProgressBar-contentCircle" height="170" width="170"> <circle class="ProgressBar-background" cx="85" cy="85" r="75" /> <circle transform="rotate(-90, 85, 85)" class="ProgressBar-circle" cx="85" cy="85" r="75" /> </svg> </div> <div class="progress-value d_flex title_no_a_26"> <?php echo esc_attr($settings['percent']); ?><?php echo esc_html('%' , 'risehand-addons'); ?></h2> </div> </div> <?php if(!empty($settings['title']) || !empty($settings['pcontent'])): ?> <div class="content_box"> <?php if(!empty($settings['title'])): ?> <div class="title_no_a_24 mb_0"><?php echo esc_attr($settings['title']); ?></div> <?php endif; ?> <?php if(!empty($settings['pcontent'])): ?> <p class="desc_p mt_10 mb_0"><?php echo esc_attr($settings['pcontent']); ?></p> <?php endif; ?> </div> <?php endif; ?> </section><?php else: ?> <section class="progress_bar_section <?php echo esc_attr($settings['color_type']) ?>"> <div class="progress"> <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo esc_attr($settings['percent']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr($settings['percent']); ?>%"></div> <small style="left:<?php echo esc_attr($settings['percent']); ?>%;"><?php echo esc_attr($settings['percent']); ?>%</small> </div> <?php if(!empty($settings['title']) || !empty($settings['pcontent'])): ?> <div class="d_flex align-items-center"> <?php if(!empty($settings['title'])): ?> <div class="title_no_a_20"><?php echo esc_attr($settings['title']); ?></div> <?php endif; ?> <?php if(!empty($settings['pcontent'])): ?> <div class="title_no_a_20 right"><?php echo esc_attr($settings['pcontent']); ?></div> <?php endif; ?> </div> <?php endif; ?> </section><?php endif; ?>
    <?php
    }
}

 

