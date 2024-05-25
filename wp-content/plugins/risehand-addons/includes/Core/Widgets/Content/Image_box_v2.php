<?php
   namespace Risehandaddons\Core\Widgets\Content;
   if (!defined('ABSPATH')) {
       exit;
   } // If this file is called directly, abort.
   class Image_box_v2 extends \Elementor\Widget_Base{
       public function get_name()
       {
           return 'risehand-image-box-v2';
       }
       public function get_title()
       {
           return __('Image Box V2' , 'risehand-addons');
       }
       public function get_icon()
       {
           return 'icon-risehand-svg';
       }
       public function get_categories()
       {
           return ['102'];
       }
       protected function register_controls() {
        // Content controls start 
        $this->start_controls_section(
         'image_box_content_two',
         [
            'label' => esc_html__( 'Image Content', 'risehand-addons' ),
         ]
      ); 
      $this->add_control(
         'image_box_styles',
         [
            'label'   => esc_html__( 'Image Box Style', 'risehand-addons' ),
            'type'    => \Elementor\Controls_Manager::SELECT, 
            'options' => array(
               'style_one' => esc_html__( 'Style One', 'risehand-addons' ),
               'style_two' => esc_html__( 'Style Two', 'risehand-addons' ),
               'style_three' => esc_html__( 'Style Three', 'risehand-addons' ),
               'style_four' => esc_html__( 'Style Four', 'risehand-addons' ), 
            ),
            'default' => 'style_one',
         ]
      ); 
      $this->add_control(
        'image_scroll',
        [
           'label' => __('Image Scroll Effect Enable', 'risehand-addons'),
           'type' => \Elementor\Controls_Manager::SWITCHER,
           'label_on' => __('Yes', 'risehand-addons'),
           'label_off' => __('No', 'risehand-addons'),
           'return_value' => 'yes',
           'default' => 'yes', 
        ]);
      $this->add_control(
         'image_zero',
         [
            'label' => __( 'Image One', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => ['style_one' , 'style_two' , 'style_three' , 'style_four'],
            ],
         ]
      ); 
      //  text for style two ,  style four , style five
   
      $this->add_control(
         'image_one',
         [
            'label' => __( 'Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => ['style_two' , 'style_three' , 'style_four'],
            ],
         ]
      ); 
      $this->add_control(
      'image_two',
         [
            'label' => __( 'Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => 'style_four',
            ],
         ]
      );  
      $this->add_control(
        'patter_move',
        [
            'label' => __('Pattern Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => -2000,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_one .spattern_bg' => 'top: {{VALUE}}px;',
            ], 
            'condition' => [
                'image_box_styles' => 'style_one',
             ],
        ]
    );
    $this->add_control(
        'patter_move_left',
        [
            'label' => __('Pattern Move Left', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => -2000,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_one .spattern_bg' => 'left: {{VALUE}}px;',
            ], 
            'condition' => [
                'image_box_styles' => 'style_one',
             ],
        ]
    );
    $this->add_control(
        'patter_height',
        [
            'label' => __('Pattern Height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => 0,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_one .spattern_bg' => 'height: {{VALUE}}px;',
            ], 
            'condition' => [
                'image_box_styles' => 'style_one',
             ],
        ]
    );
    $this->add_control(
        'img_fit',
       [
          'label' => __('Image Fit Enable / Disable', 'risehand-addons'),
           'type' => \Elementor\Controls_Manager::SWITCHER,
           'label_on' => __('Yes', 'risehand-addons'),
           'label_off' => __('No', 'risehand-addons'),
           'return_value' => 'yes',
           'default' => 'yes',
       ]
    );
    $this->add_control(
        'pattern_color',
        [
            'label' => __('Pattern Color', 'risehand-addons'),
            'type' =>  \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_one .spattern_bg , {{WRAPPER}} .image_box_v2_two .spattern_bg , {{WRAPPER}} .image_box_v2_four .spattern_bg' => 'background: {{VALUE}};',
            ], 
            'condition' => [
                'image_box_styles' => ['style_one' , 'style_two'  , 'style_four'],
             ],
        ]
    ); 
    $this->add_responsive_control(
        'img_height',
        [
            'label' => __('Image Height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => 0,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_one .image_container.img_obj_fit_center img ,
                {{WRAPPER}} .image_box_v2_three .image.one img, 
                {{WRAPPER}} .image_box_v2_two .image.one img , 
                {{WRAPPER}} .image_box_v2_four .image.one img' => 'height: {{VALUE}}px;',
            ], 
        ]
    );
    $this->add_responsive_control(
        'img_height_two',
        [
            'label' => __('Image 2 Height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => 0,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_three .image.two img , {{WRAPPER}} .image_box_v2_two .image.two img ,
                {{WRAPPER}} .image_box_v2_four .image.three img ' => 'height: {{VALUE}}px;',
            ], 
            'condition' => [
                'image_box_styles' => ['style_three' , 'style_two' , 'style_four'],
             ],
        ]
    );
    $this->add_responsive_control(
        'img_height_three',
        [
            'label' => __('Image 3 Height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER, 
            'min'     => 0,
            'max'     => 2000,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_v2_four .image.two img' => 'height: {{VALUE}}px;',
            ], 
            'condition' => [
                'image_box_styles' => ['style_four'],
             ],
        ]
    );
   $this->end_controls_section(); 
}
protected function render() {
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
 
$image_zeros =   !empty($settings['image_zero']['url']) ? $settings['image_zero']['url'] : '';
$alt_image_zero =  isset($settings['image_zero']['alt']) ? $settings['image_zero']['alt'] : '';
$alt_image_zero = !empty($alt_image_zero) ? $alt_image_zero : 'image';

$image_ones = !empty($settings['image_one']['url']) ? $settings['image_one']['url'] : '';
$alt_image_one = isset($settings['image_one']['alt']) ? $settings['image_one']['alt'] : '';
$alt_image_one = !empty($alt_image_one) ? $alt_image_one : 'image';
 
$image_twos = !empty($settings['image_two']['url']) ? $settings['image_two']['url'] : '';
$alt_image_two =  isset($settings['image_two']['alt']) ? $settings['image_two']['alt'] : '';
$alt_image_two = !empty($alt_image_two) ? $alt_image_two : 'image'; 
?> 
<?php if($settings['image_box_styles'] == 'style_two'): ?> <?php // style ?> <div class="image_box_v2_two"> <div class="spattern_bg trans mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);"> </div> <?php if(!empty($image_zeros)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one"> <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" /> </div> <?php endif; ?> <?php if(!empty($image_ones)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two"> <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="image" /> </div> <?php endif; ?> </div> <?php // style ?> <?php elseif($settings['image_box_styles'] == 'style_three'):?> <?php // style ?> <div class="image_box_v2_three"> <?php if(!empty($image_zeros)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one"> <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" /> </div> <?php endif; ?> <?php if(!empty($image_ones)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two"> <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="image" /> </div> <?php endif; ?> </div> <?php // style ?> <?php elseif($settings['image_box_styles'] == 'style_four'):?> <?php // style ?> <div class="image_box_v2_four"> <div class="spattern_bg trans mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);"> </div> <?php if(!empty($image_zeros)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one"> <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" /> </div> <?php endif; ?> <?php if(!empty($image_ones)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> two"> <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($alt_image_one); ?>" /> </div> <?php endif; ?> <?php if(!empty($image_twos)): ?> <div class="image<?php if($settings['img_fit'] == true): ?> <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> three"> <img src="<?php echo esc_url($image_twos); ?>" class="img" alt="<?php echo esc_attr($alt_image_two); ?>" /> </div> <?php endif; ?> </div> <?php // style ?> <?php elseif($settings['image_box_styles'] == 'style_five'):?> <?php // style ?> <?php // style ?> <?php else:?> <?php // style ?> <div class="image_box_v2_one"> <div class="spattern_bg trans mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);"> </div> <?php if(!empty($image_zeros)): ?> <div class="image<?php if($settings['img_fit'] == true): ?>  <?php if($settings['image_scroll'] == "yes"): ?> imagereveal<?php endif; ?> img_obj_fit_center<?php endif; ?> one"> <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" /> </div> <?php endif; ?> </div> <?php // style ?> <?php endif;?> 
<?php 
}
}