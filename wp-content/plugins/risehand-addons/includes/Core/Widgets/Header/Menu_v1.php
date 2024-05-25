<?php
namespace  Risehandaddons\Core\Widgets\Header;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Menu_v1 extends \Elementor\Widget_Base{
    public function get_name()
    {
        return 'risehand-menu-v1';
    }
    public function get_title()
    {
        return __('Menu V1', 'risehand-addons');
    }
    public function get_icon()
    {
        return 'icon-risehand-svg';
    }
    public function get_categories()
    {
        return ['100'];
    }
    protected function register_controls(){
        $this->start_controls_section('menu_content',
        [ 
            'label' => __('Menu Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );  
        $this->add_control(
            'navigations',
            [
                'label' => __('Select Menu', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => risehand_navmenu(),
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Menu Typography', 'risehand-addons' ),
				'name' => 'menu_typo',
				'selector' => '{{WRAPPER}} .navbar_nav > li > a',
			]
		);
        $this->add_control(
            'menu_color',
            [
                'label' => __('Menu Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li > a  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'menu_bor_color',
				'selector' => '{{WRAPPER}} .navbar_nav > li > a ',
			]
		);  
        $this->add_control(
            'menu_fsize',
            [
                'label' => __('Menu Font Size', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER, 
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li > a' => 'font-size: {{VALUE}}px;', 
                ],
            ]
        ); 
        $this->add_control(
            'menubot_rad',
            [
                'label' => esc_html__( 'Menu  Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li > a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'menu_padding',
            [
                'label' => esc_html__('Menu Padding', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .navbar_nav > li  ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
               
                ],
            ]
        ); 
        $this->add_control(
            'menu_margin',
            [
                'label' => esc_html__('Menu Margin', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [ 
                    '{{WRAPPER}}  .navbar_nav > li ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'menubg_color',
            [
                'label' => __('Menu Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li > a  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'menu_ac_color',
            [
                'label' => __('Menu Hover/ Active Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li.active > a , {{WRAPPER}} .navbar_nav > li:hover > a' => 'color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'menu_ac_bor_color',
            [
                'label' => __('Menu Hover/ Active Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li.active > a , {{WRAPPER}} .navbar_nav > li:hover > a' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'menu_ac_bg_color',
            [
                'label' => __('Menu Hover/ Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav > li.active > a , {{WRAPPER}} .navbar_nav > li:hover > a' => 'background: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
			'hr_one',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Dropdown Menu Typography', 'risehand-addons' ),
				'name' => 'drop_menu_typo',
				'selector' => '{{WRAPPER}} .navbar_nav li .sub-menu > li > a ',
			]
		);
        $this->add_control(
            'drop_bg_color',
            [
                'label' => __('Dropdown Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'drop_menu_color',
            [
                'label' => __('Dropdown Menu Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li > a  ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'drop_menu_br_color',
				'selector' => '{{WRAPPER}} .navbar_nav li .sub-menu > li > a ',
			]
		);  
        $this->add_control(
            'drop_menu_fsize',
            [
                'label' => __('Dropdown Menu Font Size', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER, 
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li > a' => 'font-size: {{VALUE}}px;', 
                ],
            ]
        ); 
        $this->add_control(
            'drop_menubot_rad',
            [
                'label' => esc_html__( 'Dropdown Menu Radius', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li > a ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'drop_menu_padding',
            [
                'label' => esc_html__('Dropdown Menu Padding', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .navbar_nav li .sub-menu > li > a ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'drop_menu_margin',
            [
                'label' => esc_html__('Dropdown Menu Margin', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .navbar_nav li .sub-menu > li > a ' => 'margin:  {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_control(
            'drop_menubg_color',
            [
                'label' => __('Dropdown Menu Item Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li > a  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'drop_homenu_color',
            [
                'label' => __('Dropdown Menu Hover  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li.active > a , {{WRAPPER}} .navbar_nav li .sub-menu > li > a:hover ' => 'color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'drop_menu_ac_bor_color',
            [
                'label' => __('Dropdown Menu Hover/ Active Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li.active > a , {{WRAPPER}} .navbar_nav li .sub-menu > li > a:hover' => 'border-color: {{VALUE}}!important;',
                ],
            ]
        );  
        $this->add_control(
            'drop_menu_ac_bg_color',
            [
                'label' => __('Dropdown Menu Hover/ Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .navbar_nav li .sub-menu > li.active > a , {{WRAPPER}} .navbar_nav li .sub-menu > li > a:hover' => 'background: {{VALUE}}!important;',
                ],
            ]
        );    
        $this->add_responsive_control(
            'menu_alignments',
            [
                'label' => __('Menu alignments', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'flex-start' => [
                    'title' => __( 'Menu Left', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Menu Center', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-center',
                  ],
                  'flex-end' => [
                    'title' => __( 'Menu Right', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-right',
                  ],
                ],
                'default' => 'text-left',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .menu_area ul' => 'justify-content: {{VALUE}}!important;',
                ],
            ]
        ); 
$this->end_controls_section();
} 
protected function render()
{
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
?>
<div class="menu_area"> <?php if(!empty($settings['navigations'])): wp_nav_menu(array( 'menu' => $settings['navigations'], 'container' => false, 'menu_class' => 'navbar_nav', 'fallback_cb' => 'risehand_navwalker::fallback', 'walker' => new \risehand_navwalker() )); endif; ?></div>
<?php
    }
}