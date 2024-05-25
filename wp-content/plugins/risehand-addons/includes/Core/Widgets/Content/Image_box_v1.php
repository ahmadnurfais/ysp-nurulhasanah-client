<?php
   namespace Risehandaddons\Core\Widgets\Content;
   if (!defined('ABSPATH')) {
       exit;
   } // If this file is called directly, abort.
   class Image_box_v1 extends \Elementor\Widget_Base{
       public function get_name()
       {
           return 'risehand-image-box-v1';
       }
       public function get_title()
       {
           return __('Image Box V1' , 'risehand-addons');
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
         'image_box_content',
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
               'style_five' => esc_html__( 'Style Five', 'risehand-addons' ),
               'style_six' => esc_html__( 'Style Six', 'risehand-addons' ),
               'style_seven' => esc_html__( 'Style Seven', 'risehand-addons' ), 
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
               'image_box_styles' => ['style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five' , 'style_six' , 'style_seven'],
            ],
         ]
      ); 
      //  text for style two ,  style four , style five
      $this->add_control(
         'text_content',
         [
            'label'       => esc_html__( 'Content', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( '25 Years Of  Experience' , 'risehand-addons'),
            'condition' => [
               'image_box_styles' => ['style_two', 'style_four' , 'style_five' , 'style_six' , 'style_seven'],
            ],
      ]);
      //  text for style two ,  style four , style five
      //  Icon for style Three
      // ================== icons ================
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
           'condition' => [
            'image_box_styles' => ['style_three'],
            ],
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
                   'icontype' => 'icon_image_enable' ,
                   'image_box_styles' => ['style_three'],
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
                   'icontype' => 'custom' ,
                   'image_box_styles' => ['style_three'],
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
                   'icontype' => 'fontawesome' ,
                   'image_box_styles' => ['style_three'],
               ]
           ]
       ); 
      // ================== icons ================
      //  Icon for style Three
      $this->add_control(
         'image_one',
         [
            'label' => __( 'Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => 'style_one',
            ],
         ]
      ); 
      $this->add_control(
      'image_two',
         [
            'label' => __( 'Logo Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => 'style_one',
            ],
         ]
      ); 
      $this->add_control(
      'image_three',
         [
            'label' => __( 'Experience Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
               'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
            'condition' => [
               'image_box_styles' => 'style_one',
            ],
         ]
      ); 
      $this->add_control(
      'video_link_enable',
      [
         'label' => __('Video Enable', 'risehand-addons'),
         'type' => \Elementor\Controls_Manager::SWITCHER,
         'label_on' => __('Yes', 'risehand-addons'),
         'label_off' => __('No', 'risehand-addons'),
         'return_value' => 'yes',
         'default' => 'yes',
         'condition' => [
            'image_box_styles' => ['style_five' , 'style_seven'],
         ],
      ]);
      $this->add_control(
         'video_link',
         [
            'label'       => esc_html__( 'Video Link', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( 'Best charity foundation' , 'risehand-addons'),
            'condition' => [
               'video_link_enable' => 'yes',
               'image_box_styles' => ['style_five' , 'style_seven'],
            ],
      ]);
      $this->add_control(
         'video_text',
         [
            'label'       => esc_html__( 'Video Text', 'risehand-addons' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default' =>  esc_html__( 'Best charity foundation' , 'risehand-addons'),
            'condition' => [
               'video_link_enable' => 'yes',
               'image_box_styles' => ['style_five' , 'style_seven'],
            ],
      ]);
 
   $this->end_controls_section();
   $this->start_controls_section('image_box_css',
   [ 
       'label' => __('Custom Css', 'risehand-addons'),
       'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
   ]
   ); 
    $this->add_control(
        'styleone',
        [
            'label' => esc_html__( 'Pattern Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_one::before , {{WRAPPER}} .image_box_four .spattern_bg , {{WRAPPER}} .image_box_six .content_box .spattern_bg ,
                {{WRAPPER}}  .image_box_seven .content_box .spattern_bg' => 'background: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_one' , 'style_four' , 'style_six' , 'style_seven'],
            ],
        ]
    ); 
    $this->add_control(
        'styletwo',
        [
            'label' => __('Experience Move Top', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -700,
            'max'     => 700,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_one .image.four' => 'bottom: {{VALUE}}px;',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_one'],
            ],
        ]
    );
    $this->add_control(
        'stylethree',
        [
            'label' => __('Experience Move Left', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => -700,
            'max'     => 700,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_one .image.four' => 'left: {{VALUE}}px;',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_one'],
            ],
        ]
    );
    $this->add_control(
        'stylefour',
        [
            'label' => esc_html__( 'Text Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_two .vertical-text , {{WRAPPER}} .image_box_four .font_special ,
                {{WRAPPER}} .image_box_five .content_box .font_special .title_no_a_30  , {{WRAPPER}} .image_box_six .content_box .font_special ,
                {{WRAPPER}}  .image_box_seven .content_box .font_special' => 'color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_two' , 'style_four' , 'style_five' , 'style_six' , 'style_seven'],
            ],
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Text Typography', 'risehand-addons' ),
            'name' => 'stylefive',
            'selector' => '{{WRAPPER}} .image_box_two .vertical-text , {{WRAPPER}} .image_box_four .font_special ,
            {{WRAPPER}} .image_box_five .content_box .font_special .title_no_a_30 , {{WRAPPER}} .image_box_six .content_box .font_special ,
            {{WRAPPER}}  .image_box_seven .content_box .font_special ',
            'condition' => [ 
                'image_box_styles' => ['style_two' , 'style_four' , 'style_five' , 'style_six' , 'style_seven'],
            ],
        ]
    );
    $this->add_control(
        'stylesix',
        [
            'label' => esc_html__( 'Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_two .vertical-text ' => 'border-color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_two'],
            ],
        ]
    ); 
    $this->add_control(
        'stylesixteen',
        [
            'label' => esc_html__( 'Quote Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_five .content_box .font_special .quote ' => 'color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five'],
            ],
        ]
    ); 
    $this->add_control(
        'stylethirteen',
        [
            'label' => esc_html__( 'Video Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_five .content_box .font_special .video_box_null a i , {{WRAPPER}} .image_box_seven .content_box .video_box_null a i:before ' => 'color: {{VALUE}}; z-inder:2;',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five' , 'style_seven'],
            ],
        ]
    ); 
    $this->add_control(
        'styleseventeen',
        [
            'label' => esc_html__( 'Video Icon Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .image_box_seven .content_box .video_box_null a i:before' => 'background: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five' , 'style_seven'],
            ],
        ]
    ); 
    $this->add_control(
        'styleeighteen',
        [
            'label' => esc_html__( 'Video Icon Background 2 Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .image_box_seven .content_box .video_box_null a i::after' => 'background: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_seven'],
            ],
        ]
    ); 
    $this->add_control(
        'stylefourteen',
        [
            'label' => esc_html__( 'Video Icon Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_five .content_box .font_special .video_box_null a i' => 'border-color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five'],
            ],
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Video Text Typography', 'risehand-addons' ),
            'name' => 'stylefivteen',
            'selector' => '{{WRAPPER}} .image_box_five .content_box .font_special .video_box_null a , {{WRAPPER}} .image_box_seven .content_box .video_box_null a ',
            'condition' => [ 
                'image_box_styles' => ['style_five' , 'style_seven'],
            ],
        ]
    );
    $this->add_control(
        'styletwelve',
        [
            'label' => esc_html__( 'Video Text Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_five .content_box .font_special .video_box_null a , {{WRAPPER}} .image_box_seven .content_box .video_box_null a  ' => 'color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five' , 'style_seven'],
            ],
        ]
    ); 
    $this->add_control(
        'styleseven',
        [
            'label' => esc_html__( 'Background Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_four .font_special ,  {{WRAPPER}} 
                .image_box_five .content_box .font_special ' => 'background: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_four' , 'style_five'],
            ],
        ]
    ); 
    $this->add_control(
        'styleeight',
        [
            'label' => esc_html__( 'Border Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_three::before ' => 'border-color: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_three'],
            ],
        ]
    ); 
    $this->add_control(
        'stylenine',
        [
            'label' => esc_html__( 'Icon Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_three .icon i , {{WRAPPER}} .image_box_three .icon span' => 'color: {{VALUE}};',
                '{{WRAPPER}} .image_box_three .icon svg path ' => 'fill: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_three'],
            ],
        ]
    ); 
    $this->add_control(
        'styleten',
        [
            'label' => esc_html__( 'Icon Backgorund Color', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .image_box_three .icon ' => 'background: {{VALUE}};',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_three'],
            ],
        ]
    ); 
    $this->add_responsive_control(
        'styleeleven',
        [
            'label' => __('Image height', 'risehand-addons'),
            'type'    => \Elementor\Controls_Manager::NUMBER,
            'min'     => 00,
            'max'     => 1700,
            'step'    => 1,
            'selectors' => [
                '{{WRAPPER}} .image_box_five .image' => 'height: {{VALUE}}px;',
            ], 
            'condition' => [ 
                'image_box_styles' => ['style_five'],
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

$image_threes = !empty($settings['image_three']['url']) ? $settings['image_three']['url'] : '';
$alt_image_three =  isset($settings['image_three']['alt']) ? $settings['image_three']['alt'] : '';
$alt_image_three = !empty($alt_image_three) ? $alt_image_three : 'image'; 
?>
<?php if($settings['image_box_styles'] == 'style_two'): ?>
        <?php // style  ?>
            <div class="image_box_two d_flex">
                <?php if(!empty($settings['text_content'])): ?>
                    <div class="vertical-text font_special">
                        <?php echo wp_kses($settings['text_content'] , $allowed_tags);?>
                    </div>
                <?php endif; ?> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?> 
            </div>
            <?php // style  ?>
        <?php elseif($settings['image_box_styles'] == 'style_three'):?>
            <?php // style  ?>
            <div class="image_box_three">
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="main-img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                    <?php if( $settings['icontype'] == 'icon_image_enable'):
                          $icon_images = '';
                          $alt_icon_images = '';
                          if (!empty($sliderrepeater['icon_images']['url'])) {
                              $icon_images = $sliderrepeater['icon_images']['url'];
                              $alt_icon_images = $sliderrepeater['icon_images']['alt'];
                              $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon';
                          }    
                          if(!empty($icon_images)): ?>
                              <div class="icon d_flex">
                                  <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" />
                              </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if($settings['icontype'] == 'custom'): ?>
                        <div class="icon d_flex">
                            <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span>
                        </div>
                    <?php endif; ?>
                    <?php if($settings['icontype'] == 'fontawesome'): ?>
                        <?php if(!empty($settings['icon_fontawesome'])): ?>
                            <div class="icon d_flex">
                            <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?>
                            </div> 
                        <?php endif; ?>	 
                    <?php endif; ?>	   
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($settings['image_box_styles'] == 'style_four'):?>
        <?php // style  ?>
        <div class="image_box_four">
                <div class="spattern_bg mask_image" 
                            style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/mask-2-1.png' ?>); 
                            -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/mask-2-1.png' ?>);">
                            </div>
               
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-4.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-4.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($settings['text_content'])): ?>
                    <div class="font_special">
                        <?php echo wp_kses($settings['text_content'] , $allowed_tags);?>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>
        <?php elseif($settings['image_box_styles'] == 'style_five'):?>
        <?php // style  ?>
        <div class="image_box_five"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?> mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-5.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-5.png' ?>);">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($settings['text_content'])): ?>
                    <div class="content_box"> 
                    <div class="font_special">
                        <i class="risehand-019-right-quote quote"></i>
                        <div class="title_no_a_30"><?php echo wp_kses($settings['text_content'] , $allowed_tags);?></div>
                        <?php if($settings['video_link_enable'] == true): ?>
                            <div class="video_box_null title_16">
                                <a href="<?php echo esc_attr($settings['video_link']); ?>" class="lightbox-image d_flex">
                                    <i class="risehand-play d_flex"></i> 
                                    <?php echo wp_kses($settings['video_text'] , $allowed_tags);?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>  
        <?php elseif($settings['image_box_styles'] == 'style_six'):?>
        <?php // style  ?>
            <div class="image_box_six"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?> 
                <?php if(!empty($settings['text_content'])): ?>
                    <div class="content_box"> 
                    <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);">
                </div> 
                <div class="d_flex">
                        <div class="font_special">
                            <?php echo wp_kses($settings['text_content'] , $allowed_tags);?> 
                        </div>
                    </div>
                    </div>
                <?php endif; ?> 
            </div>
        <?php // style  ?>  
        <?php elseif($settings['image_box_styles'] == 'style_seven'):?>
        <?php // style  ?>
            <div class="image_box_seven"> 
                <?php if(!empty($image_zeros)): ?>
                    <div class="image img_obj_fit_center <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?> 
    
                <div class="content_box"> 
                    <div class="spattern_bg trans mask_image" 
                    style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle-2.png' ?>); 
                    -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/pattern-circle-2.png' ?>);">
                    </div> 
                    <div class="content">
                        <?php if($settings['video_link_enable'] == true): ?>
                            <div class="video_box_null title_16"> 
                                <a href="<?php echo esc_attr($settings['video_link']); ?>" class="lightbox-image  d_flex">
                                    <i class="risehand-play-fill d_flex"></i> 
                                    <?php echo wp_kses($settings['video_text'] , $allowed_tags);?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($settings['text_content'])): ?>
                            <div class="font_special">
                                <?php echo wp_kses($settings['text_content'] , $allowed_tags);?> 
                            </div>
                        <?php endif; ?> 
                    </div>
                </div>
             
            </div>
        <?php // style  ?>
        <?php else:?>
        <?php // style  ?>
            <div class="image_box_one d_flex">
                <?php if(!empty($image_zeros)): ?>
                    <div class="image one <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zero); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_ones)): ?>
                    <div class="image two <?php if($settings['image_scroll'] == "yes"): ?> imagereveal  <?php endif; ?>">
                        <img src="<?php echo esc_url($image_ones); ?>" class="img" alt="<?php echo esc_attr($alt_image_one); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_twos)): ?>
                    <div class="image three">
                        <img src="<?php echo esc_url($image_twos); ?>" class="img" alt="<?php echo esc_attr($alt_image_two); ?>" />
                    </div>
                <?php endif; ?>
                <?php if(!empty($image_threes)): ?>
                    <div class="image four">
                        <img src="<?php echo esc_url($image_threes); ?>" class="img" alt="<?php echo esc_attr($alt_image_three); ?>" />
                    </div>
                <?php endif; ?>
            </div>
            <?php // style  ?>
        <?php endif;?> 
<?php 
}
}