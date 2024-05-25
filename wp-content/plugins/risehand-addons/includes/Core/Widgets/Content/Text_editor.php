<?php
namespace  Risehandaddons\Core\Widgets\Content;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Text_editor extends \Elementor\Widget_Base{
        public function get_name()
        {
            return 'risehand-text-editor-v1';
        } 
        public function get_title()
        {
            return __('Text Editor V1' , 'risehand-addons');
        } 
        public function get_icon()
        {
            return 'icon-risehand-svg';
        } 
        public function get_categories()
        {
            return ['102'];
        } 
        /**
         * Register text editor widget controls.
         *
         * Adds different input fields to allow the user to change and customize the widget settings.
         *
         * @since 3.1.0
         * @access protected
         */
        protected function register_controls() {
            $this->start_controls_section(
                'section_editor',
                [
                    'label' => esc_html__( 'Text Editor', 'risehand-addons' ),
                ]
            );

            $this->add_control(
                'editor_risehand',
                [
                    'label' => esc_html__( 'Text Editor', 'risehand-addons' ),
                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                    'default' => '<p>' . esc_html__( 'Elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vive
                    maecenas accumsan lacus vel facilisis.', 'risehand-addons' ) . '</p>',
                ]
            );
        

            $text_columns = range( 1, 10 );
            $text_columns = array_combine( $text_columns, $text_columns );
            $text_columns[''] = esc_html__( 'Default', 'risehand-addons' );

            $this->add_responsive_control(
                'text_columns',
                [
                    'label' => esc_html__( 'Columns', 'risehand-addons' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'separator' => 'before',
                    'options' => $text_columns,
                    'selectors' => [
                        '{{WRAPPER}}' => 'columns: {{VALUE}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'column_gap',
                [
                    'label' => esc_html__( 'Columns Gap', 'risehand-addons' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%', 'em', 'vw' ],
                    'range' => [
                        'px' => [
                            'max' => 100,
                        ],
                        '%' => [
                            'max' => 10,
                            'step' => 0.1,
                        ],
                        'vw' => [
                            'max' => 10,
                            'step' => 0.1,
                        ],
                        'em' => [
                            'max' => 10,
                            'step' => 0.1,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}}' => 'column-gap: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_section();

            $this->start_controls_section(
                'section_style',
                [
                    'label' => esc_html__( 'Text Editor', 'risehand-addons' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );

            $this->add_responsive_control(
                'align',
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
                        'justify' => [
                            'title' => esc_html__( 'Justified', 'risehand-addons' ),
                            'icon' => 'eicon-text-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .position_p_relative ' => 'text-align: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                'text_color',
                [
                    'label' => esc_html__( 'Text Color', 'risehand-addons' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .position_p_relative  , {{WRAPPER}} .position_p_relative  p , {{WRAPPER}} .position_p_relative h1 , {{WRAPPER}}
                        .position_p_relative h2 , {{WRAPPER}} .position_p_relative h3 , {{WRAPPER}} .position_p_relative h4 , {{WRAPPER}} .position_p_relative h5 , {{WRAPPER}} .position_p_relative h6 , {{WRAPPER}} .position_p_relative a ,
                        {{WRAPPER}} .position_p_relative ul li , {{WRAPPER}} .position_p_relative ul li a ' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'typography_crs',
                    'selector' =>  '{{WRAPPER}}  .position_p_relative  , {{WRAPPER}} .position_p_relative  p , {{WRAPPER}} .position_p_relative h1 , {{WRAPPER}}
                        .position_p_relative h2 , {{WRAPPER}} .position_p_relative h3 , {{WRAPPER}} .position_p_relative h4 , {{WRAPPER}} .position_p_relative h5 , {{WRAPPER}} .position_p_relative h6 , {{WRAPPER}} .position_p_relative a ,
                        {{WRAPPER}}  .position_p_relative ul li , {{WRAPPER}} .position_p_relative ul li a '
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Text_Shadow::get_type(),
                [
                    'name' => 'text_shadow_crs',
                    'selector' =>  '{{WRAPPER}}  .position_p_relative  , {{WRAPPER}} .position_p_relative  p , {{WRAPPER}} .position_p_relative h1 ,
                    {{WRAPPER}} .position_p_relative h2 , {{WRAPPER}} .position_p_relative h3 , {{WRAPPER}} .position_p_relative h4 , {{WRAPPER}} .position_p_relative h5 , {{WRAPPER}} .position_p_relative h6 , {{WRAPPER}} .position_p_relative a ,
                    {{WRAPPER}} .position_p_relative ul li , {{WRAPPER}} .position_p_relative ul li a ' 
                ]
            );

            $this->add_control(
                'texta_color',
                [
                    'label' => esc_html__( 'A Tag Color', 'risehand-addons' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'default' => '',
                    'selectors' => [
                        '{{WRAPPER}} .position_p_relative a , {{WRAPPER}} .position_p_relative  p a, {{WRAPPER}} .position_p_relative h1 a , {{WRAPPER}}
                        .position_p_relative h2 a, {{WRAPPER}} .position_p_relative h3 a, {{WRAPPER}} .position_p_relative h4 a, {{WRAPPER}} .position_p_relative h5 a, {{WRAPPER}} .position_p_relative h6 a, {{WRAPPER}} .position_p_relative a ,
                        {{WRAPPER}} .position_p_relative ul li a, {{WRAPPER}} .position_p_relative ul li a ' => 'color: {{VALUE}}!important;',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'atypo',
                    'selector' =>  '{{WRAPPER}} .position_p_relative a , {{WRAPPER}} .position_p_relative  p a, {{WRAPPER}} .position_p_relative h1 a , {{WRAPPER}}
                    .position_p_relative h2 a, {{WRAPPER}} .position_p_relative h3 a, {{WRAPPER}} .position_p_relative h4 a, {{WRAPPER}} .position_p_relative h5 a, {{WRAPPER}} .position_p_relative h6 a, {{WRAPPER}} .position_p_relative a ,
                    {{WRAPPER}} .position_p_relative ul li a, {{WRAPPER}} .position_p_relative ul li a '
                ]
            );
 
            $this->end_controls_section();
        }

        protected function render(){
            $settings = $this->get_settings_for_display();
            $allowed_tags = wp_kses_allowed_html('post');
        ?>
        <div class="position-relative position_p_relative">
                <?php echo wp_kses($settings['editor_risehand'] , $allowed_tags); ?>
            </div>
        <?php
        }
}
