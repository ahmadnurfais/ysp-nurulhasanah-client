<?php


namespace  Risehandaddons\Core\Widgets\Slider;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Slider_builder extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-slider-builder';
    }

    public function get_title()
    {
        return __('Slider Builder', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-letter-n';
    }

    public function get_categories()
    {
        return ['101'];
    }

    protected function register_controls(){
   
     
        // style one start
        $this->start_controls_section('slider_v1_settings',
        [ 
            'label' => __('Slider Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            
        ]
        );
        $repeater = new \Elementor\Repeater();
       
        $repeater->add_control(
            'slider_get',
            [
                'label'   => esc_html__( 'Choose Slider', 'risehand-addons' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'options' =>  risehand_common_query('Sliders'),
            ]
        );
       $this->add_control(
        'slider_repeater',
        [
            'label' => __('Slider Repeater', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                'slider_get' => '', 
                ], 
            ],
            'title_field' => '{{{ slider_get }}}',

        ]
      );

     
      $this->end_controls_section();
      
      // carouse settings
      $this->start_controls_section('ccarousel_settings',
      [ 
      'label' => __('Carousel Settings', 'risehand-addons'),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );
    $this->add_control(
    'desk_top',
        [
        'label' => __('Items Desktop', 'risehand-addons'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            '10' => __('10 Items', 'risehand-addons'),
            '9' => __('9 Items', 'risehand-addons'),
            '8' => __('8 Items', 'risehand-addons'),
            '7' => __('7 Items', 'risehand-addons'),
            '6' => __('6 Items', 'risehand-addons'),
            '5' => __('5 Items', 'risehand-addons'),
            '4' => __('4 Items', 'risehand-addons'),
            '3' => __('3 Items', 'risehand-addons'),
            '2' => __('2 Items', 'risehand-addons'),
            '1' => __('1 Items', 'risehand-addons'),
        ],
        'default' => '3' , 
        ]
    );

    $this->add_control(
        'tablet',
        [
            'label' => __('Items Tablet', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
            '10' => __('10 Items', 'risehand-addons'),
            '9' => __('9 Items', 'risehand-addons'),
            '8' => __('8 Items', 'risehand-addons'),
            '7' => __('7 Items', 'risehand-addons'),
            '6' => __('6 Items', 'risehand-addons'),
            '5' => __('5 Items', 'risehand-addons'),
            '4' => __('4 Items', 'risehand-addons'),
            '3' => __('3 Items', 'risehand-addons'),
            '2' => __('2 Items', 'risehand-addons'),
            '1' => __('1 Items', 'risehand-addons'),
        ],
            'default' => '2' , 
        ]
    );
    $this->add_control(
    'mobile',
        [
        'label' => __('Items Mobile', 'risehand-addons'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            '3' => __('3 Items', 'risehand-addons'),
            '2' => __('2 Items', 'risehand-addons'),
            '1' => __('1 Items', 'risehand-addons'),
        ],
        'default' => '2' , 
        ]
    );
    $this->add_control(
        'mini_mobile',
        [
        'label' => __('Items Mini', 'risehand-addons'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'options' => [
            '3' => __('3 Items', 'risehand-addons'),
            '2' => __('2 Items', 'risehand-addons'),
            '1' => __('1 Items', 'risehand-addons'),
        ],
        'default' => '1' , 
        ]
    );
    
    $this->add_control(
        'op_hr_m',
        [
                'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'loop_enable',
        [
            'label' => __('Loop Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => true,
            'default' => true,
        ]
    ); 
    $this->add_control(
        'op_hr_2',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
    $this->add_control(
        'margin',
        [
            'label' => __('Margin', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 100,
            'step'    => 1,  
            'default'    => 20,  
        ]
    ); 
    $this->add_control(
        'op_hr_365',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
        ]
    );
        
    $this->add_control(
        'arrow_enable',
        [
            'label' => __('Arrow Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => true,
            'default' => true,
        ]
    );
    $this->add_control(
        'arrow_post',
            [
            'label' => __('Arrow Position', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'post_default' => __('Position One', 'risehand-addons'),
                'post_default_left' => __('Position One Left', 'risehand-addons'),
                'post_default_right' => __('Position One Right', 'risehand-addons'),
                'post_two' => __('Position Two', 'risehand-addons'),
                'post_three' => __('Position Three', 'risehand-addons'),
                'post_four' => __('Position Four', 'risehand-addons'),
            ],
            'default' => 'post_default' , 
        ]
    );
    $this->add_responsive_control(
        'move_arrow_top',
        [
            'label' => __('Arrow Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,    
            'condition' => [
                'arrow_post' => ['post_two' , 'post_three' , 'post_four'] 
            ],
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev , {{WRAPPER}} .common_arrow .next ' => 'top: {{VALUE}}px;',
            ], 
        ]
    ); 
    $this->add_responsive_control(
        'move_arrow_left',
        [
            'label' => __('Arrow Prev Move Left', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,   
            'condition' => [
                'arrow_post' => ['post_two' , 'post_three' , 'post_four'] 
            ],
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev  ' => 'left: {{VALUE}}px;',
            ], 
        ]
    ); 
    $this->add_responsive_control(
        'move_arrow_right',
        [
            'label' => __('Arrow Next Move Left', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -1000,
            'max'     => 1000,
            'step'    => 1,   
            'condition' => [
                'arrow_post' => ['post_two' , 'post_three' , 'post_four'] 
            ],
            'selectors' => [
                '{{WRAPPER}} .common_arrow .next  ' => 'right: {{VALUE}}px;',
            ], 
        ]
    ); 
    $this->add_control(
        'dot_enable',
        [
            'label' => __('Dot Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => true,
            'default' => true,
        ]
    ); 
    $this->add_control(
        'dot_type',
            [
            'label' => __('Dot Type', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'bullets' => __('Bullets', 'risehand-addons'),
                'progressbar' => __('Progressbar', 'risehand-addons'),
                'fraction' => __('Fraction', 'risehand-addons'), 
            ],
            'default' => 'bullets' , 
        ]
    );
    $this->add_responsive_control(
        'dot_alignment',
        [
            'label' => __('Dot alignments', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left' => [
                'title' => __( 'Dot Left', 'risehand-addons' ),
                'icon' => 'eicon-text-align-left',
                ],
                'center' => [
                'title' => __( 'Dot Center', 'risehand-addons' ),
                'icon' => 'eicon-text-align-center',
                ],
                'right' => [
                'title' => __( 'Dot Right', 'risehand-addons' ),
                'icon' => 'eicon-text-align-right',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '{{WRAPPER}} .common-dots ' => 'text-align: {{VALUE}};',
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
        'duration',
        [
            'label' => __('Autoplay Speed', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 100000,
            'step'    => 100,  
            'default'    => 5000,   
        ]
    );
    $this->add_control(
        'speed',
        [
            'label' => __('Smart Speed', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 0,
            'max'     => 100000,
            'step'    => 100,  
            'default'    => 600,   
        ]
    ); 
    $this->end_controls_section();

    $this->start_controls_section('swiper_navigation_dot_css',
    [ 
        'label' => __('Navigation / Dots Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    ); 
    $this->add_control(
        'nav1color',
        [
            'label' => esc_html__( 'Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev .risehand-chevron-left , {{WRAPPER}} .common_arrow .next .risehand-chevron-right' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2color',
        [
            'label' => esc_html__( 'Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev, {{WRAPPER}} .common_arrow .next' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2colors',
        [
            'label' => esc_html__( 'Prev /  Next Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev, {{WRAPPER}} .common_arrow .next' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover .risehand-chevron-left , {{WRAPPER}} .common_arrow .next:hover .risehand-chevron-right ' => 'color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav1hobgcolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Arow Bg Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover , {{WRAPPER}} .common_arrow .next:hover' => 'background: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'nav2hocolor',
        [
            'label' => esc_html__( 'Hover Prev /  Next Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .common_arrow .prev:hover , {{WRAPPER}} .common_arrow .next:hover' => 'border-color: {{VALUE}};',
            ], 
        ]
    ); 
    $this->add_control(
        'cssdiv6',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'nav3color',
        [
            'label' => esc_html__( 'Dot  Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .client-pagination .swiper-pagination-bullet:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav4color',
        [
            'label' => esc_html__( 'Dot Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .client-pagination .swiper-pagination-bullet ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav5color',
        [
            'label' => esc_html__( 'Dot Active Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .client-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active:before ,
                {{WRAPPER}} .client-pagination .swiper-pagination-bullet:hover:before ' => 'background: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->add_control(
        'nav6color',
        [
            'label' => esc_html__( 'Dot Active Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .client-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active ,
                 {{WRAPPER}} .client-pagination .swiper-pagination-bullet:hover ' => 'border-color: {{VALUE}}!important;',
            ], 
        ]
    ); 
    $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
        $loop_enable = '';
        if($settings['loop_enable'] ==  true):
            $loop_enable = 'true';
        else:
            $loop_enable = 'false';
        endif; 
        echo '
        <style>
            .sldier_custom .swiper-wrapper { 
                width: 100%;
            } 
            .sldier_custom  .swiper-wrapper .wp-post{
                width: 100%;
            }
        </style>';
   ?> 
    <section class="sldier_custom">
            <div class="swiper swiper-container<?php if($settings['dot_enable'] == true): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{
            "loop": <?php echo esc_attr($loop_enable); ?>,
            "autoplay": {
                "delay": <?php echo esc_attr($settings['duration']); ?>
            },
            "speed":  <?php echo esc_attr($settings['speed']); ?>,
            "centeredSlides": false, 
            "spaceBetween": <?php echo esc_attr($settings['margin']); ?>,
            "navigation": {
                "nextEl": ".port-next-one",
                "prevEl": ".port-prev-one"
            },
            "pagination": {
                "el": ".port-pagination", 
                "clickable": true  ,
                "type": "<?php echo esc_attr($settings['dot_type']); ?>"
            },
            "grabCursor": true,  
            "breakpoints": {
                "1200": {
                "slidesPerView": <?php echo esc_attr($settings['desk_top']); ?>
                },
                "1024": {
                "slidesPerView": <?php echo esc_attr($settings['tablet']); ?>
                },
                "768": {
                "slidesPerView": <?php echo esc_attr($settings['mobile']); ?> 
                },
                "576": {
                "slidesPerView": <?php echo esc_attr($settings['mini_mobile']); ?> 
                }
            }
            }'>
                <div class="swiper-wrapper"> 
                    <?php if(!empty($settings['slider_repeater'])): foreach($settings['slider_repeater'] as $key =>  $slider_repeater): ?> 
                        <div class="swiper-slide">
                        <?php  echo do_shortcode('[risehand-slider id="' . $slider_repeater['slider_get'] . '"]'); ?>
                    </div>
                        <?php endforeach; ?>
                    <?php endif;?> 
                </div>
            </div>
            <?php if($settings['dot_enable'] == "yes" && $settings['dot_type'] == "progressbar"): ?>
            <div class="<?php echo esc_attr($settings['dot_alignment']) ?>">
                <div class="port-pagination common-progress"></div>
            </div>
        <?php endif; ?>  
        <?php if($settings['arrow_enable'] == "yes"): ?>
            <div class="arrow_portfolio common_arrow <?php echo esc_attr($settings['arrow_post']); ?>"> 
                <div class="port-prev-one prev trans"><i class="risehand-chevron-left"></i></div>
                <div class="port-next-one next trans"><i class="risehand-chevron-right"></i></div>
            </div>
        <?php endif; ?>  
        <?php if($settings['dot_enable'] == "yes" && $settings['dot_type'] == "bullets"): ?>
            <div class="<?php echo esc_attr($settings['dot_alignment']) ?>">
                <div class="port-pagination common-dots"></div>
            </div>
        <?php endif; ?>  
        <?php if($settings['dot_enable'] == "yes" && $settings['dot_type'] == "fraction"): ?>
            <div class="<?php echo esc_attr($settings['dot_alignment']) ?>">
                <div class="port-pagination common-fraction"></div>
            </div>
        <?php endif; ?> 
        </section> 
        <?php
    }
}
 