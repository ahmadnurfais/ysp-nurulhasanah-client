<?php

namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Client_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-client-carousel-v1';
    }

    public function get_title()
    {
        return __('Client Carousel V1', 'risehand-addons');
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
    $this->start_controls_section('client_ca_settings',
    [ 
        'label' => __('Client Carousel Content', 'risehand-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
    );
   
        $repeater = new \Elementor\Repeater();
         
        $repeater->add_control(
            'brand_image',
            [
                'label' => __('Image', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ], 
            ]
        );
        $repeater->add_control(
            'image_width',
            [
            'label'       => esc_html__( 'Image Width', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( '120px' , 'risehand-addons'),
        ]); 
        $repeater->add_control(
        'brand_link',
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
            'client_repeater',
            [
                'label' => __('Client Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ 
                        'brand_image' =>  \Elementor\Utils::get_placeholder_image_src(),
                        'brand_link' =>  '#',
                    ],
                    [
                        'brand_image' =>  \Elementor\Utils::get_placeholder_image_src(),
                        'brand_link' =>  '#',
                    ], 
                    [
                        'brand_image' =>  \Elementor\Utils::get_placeholder_image_src(),
                        'brand_link' =>  '#',
                    ]
                ],
                'title_field' => '{{{ name }}}',

            ]
        );
     
        $this->add_control(
            'image_opacity',
            [
                'label' => __('Image Opacity', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 10,
                'step'    => .1,  
                'default'    => 1,  
                'selectors' => [
                    '{{WRAPPER}} .client_logo .brand_iamge ' => 'opacity: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'image_h_opacity',
            [
                'label' => __('Hover Image Opacity', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
                'min'     => 0,
                'max'     => 10,
                'step'    => .1,  
                'default'    => 1,  
                'selectors' => [
                    '{{WRAPPER}} .client_logo .brand_iamge:hover ' => 'opacity: {{VALUE}}!important;',
                ],
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
protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
    $loop_enable = '';
    if($settings['loop_enable'] ==  true):
        $loop_enable = 'true';
    else:
        $loop_enable = 'false';
    endif;
?>
<section class="client_logo position-relative"><div class="swiper swiper-container<?php if($settings['dot_enable'] == true): ?> dot_enabled<?php endif; ?> swiper_container" data-swiper='{"loop": <?php echo esc_attr($loop_enable); ?>,"autoplay": {"delay": <?php echo esc_attr($settings['duration']); ?>},"speed":  <?php echo esc_attr($settings['speed']); ?>,"centeredSlides": false,"spaceBetween": <?php echo esc_attr($settings['margin']); ?>,"navigation": {"nextEl": ".client-next-one","prevEl": ".client-prev-one"},"pagination": {"el": ".client-pagination","clickable": true,"type": "<?php echo esc_attr($settings['dot_type']); ?>"},"grabCursor": true,"breakpoints": {"1200": {"slidesPerView": <?php echo esc_attr($settings['desk_top']); ?>},"1024": {"slidesPerView": <?php echo esc_attr($settings['tablet']); ?>},"768": {"slidesPerView": <?php echo esc_attr($settings['mobile']); ?>},"576": {"slidesPerView": <?php echo esc_attr($settings['mini_mobile']); ?>}}}'><div class="swiper-wrapper"><?php if(!empty($settings['client_repeater'])): foreach($settings['client_repeater'] as $key =>  $client_logo_repeater): $brand_image = '';$alt_brand_image = '';if (!empty($client_logo_repeater['brand_image']['url'])) {$brand_image = $client_logo_repeater['brand_image']['url'];$alt_brand_image =  $client_logo_repeater['brand_image']['alt'];$alt_brand_image = !empty($alt_brand_image) ? $alt_brand_image : 'slider-image-two';}$image_width = '';$image_width_css  = '';if(!empty($client_logo_repeater['image_width'])):$image_width = $client_logo_repeater['image_width'];$image_width = ! empty( $image_width ) ? "width: $image_width!important;" : '';$image_width_css  = "style='$image_width'";endif; ?><div class="swiper-slide"><?php if(!empty($client_logo_repeater['brand_link']['url'])): $target_two = $client_logo_repeater['brand_link']['is_external'] ? ' target="_blank"' : '';$nofollow_two = $client_logo_repeater['brand_link']['nofollow'] ? ' rel="nofollow"' : ''; ?><?php if(!empty($brand_image)): ?><a href="<?php echo esc_url($client_logo_repeater['brand_link']['url']); ?>" class="mb_0" <?php echo esc_attr($target_two); ?> <?php echo esc_attr($nofollow_two); ?>><img src="<?php echo esc_url($brand_image); ?>" class="brand_iamge trans img-fluid" alt="<?php echo esc_attr($alt_brand_image); ?>" <?php if(!empty($image_width_css)): echo $image_width_css; endif; ?> /></a><?php endif; ?><?php else: ?><?php if(!empty($brand_image)): ?><img src="<?php echo esc_url($brand_image); ?>" class="brand_iamge trans img-fluid" alt="<?php echo esc_attr($alt_brand_image); ?>" <?php if(!empty($image_width_css)): echo $image_width_css; endif; ?> /><?php endif; ?><?php endif; ?></div><?php endforeach;endif; ?></div></div><?php if($settings['arrow_enable'] == true): ?><div class="arrow_client common_arrow <?php echo esc_attr($settings['arrow_post']); ?>"><div class="client-prev-one prev trans"><i class="risehand-chevron-left"></i></div><div class="client-next-one next trans"><i class="risehand-chevron-right"></i></div></div><?php endif; ?><?php if($settings['dot_enable'] == true): ?><div class="client-pagination common-dots"></div><?php endif; ?></section>
<?php
    }
}