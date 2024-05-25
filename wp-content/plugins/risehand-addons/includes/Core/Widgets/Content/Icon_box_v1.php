<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Icon_box_v1 extends \Elementor\Widget_Base{ 
    public function get_name()
    {
        return 'risehand-icon-box';
    } 
    public function get_title()
    {
        return __('Icon Box V1', 'risehand-addons');
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
            'iconboxstyle',
            [
                'label' => __('Icon Box Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
					'style_one'  => __( 'Style One', 'risehand-addons' ),
                    'style_two' => __( 'Style Two', 'risehand-addons' ),
                    'style_three' => __( 'Style Three', 'risehand-addons' ),
                    'style_four' => __( 'Style Four', 'risehand-addons' ),
                    'style_five' => __( 'Style Five', 'risehand-addons' ),
                    'style_six' => __( 'Style Six', 'risehand-addons' ),
                    'style_seven' => __( 'Style Seven', 'risehand-addons' ),
				],
                'default' => __('style_one' , 'risehand-addons'),
                
            ]
        ); 
        $this->add_control(
            'flex_column',
            [
                'label' => __('Flex Direction', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
					'crow'  => __( 'Row', 'risehand-addons' ),
                    'ccolumn' => __( 'Column', 'risehand-addons' ), 
				],
                'default' => __('crow' , 'risehand-addons'),
                'condition' => [
                    'iconboxstyle' => 'style_seven'
                ],
            ]
        ); 
        $this->add_control(
            'enable_background',
            [
                'label' => esc_html__( 'Enable /  Disable - Background for style two', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'iconboxstyle' => 'style_two'
                ],
            ]
        );
        $this->add_control(
            'enable_border',
            [
                'label' => esc_html__( 'Enable /  Disable - Border for style One', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'iconboxstyle' => 'style_one'
                ],
            ]
        );
        $this->add_control(
            'tag_type',
            [
                'type'       => \Elementor\Controls_Manager::SELECT,
                'label'      => esc_html__( 'Tag Type', 'risehand-addons' ),
                'options'    => [
                    'div' => esc_html__( 'Div', 'risehand-addons' ),
                    'h1'  => esc_html__( 'H1', 'risehand-addons' ),
                    'h2'  => esc_html__( 'H2', 'risehand-addons' ),
                    'h3'  => esc_html__( 'H3', 'risehand-addons' ),
                    'h4'  => esc_html__( 'H4', 'risehand-addons' ),
                    'h5'  => esc_html__( 'H5', 'risehand-addons' ),
                    'h6'  => esc_html__( 'H6', 'risehand-addons' ),
                ],
                'label_block' => true,
                'default'     => 'div',
                'group'       => esc_html__( 'General', 'risehand-addons' ),
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
            'icon_box_heading',
            [
                'label' => __('Heading', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Conserve Water', 'risehand-addons'),
                'placeholder' => __('Enter your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'icon_box_description',
            [
                'label' => __('Description', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'risehand-addons') ,
                'placeholder' => __('Enter your text here', 'risehand-addons'),
            ]
        );
       
        $this->add_control(
            'button_text_enable',
           [
              'label' => __('Read More Enable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __('Read More', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Read More', 'risehand-addons'),
                'default' => __('Read More' , 'risehand-addons'),
                'condition' => [
                    'button_text_enable' => 'yes',
                ]
            ]
        );   
        $this->add_control(
            'link_box',
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
          
        ]);    
        $this->end_controls_section();

        $this->start_controls_section('icon_box_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'cstyle_zone',
            [
                'label' => __('Box Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all , {{WRAPPER}} .icon_box_all.style_one .d_flex.enable_bors , {{WRAPPER}}  .icon_box_all .inner_icon_box.enable_bgs ' => 'border-color: {{VALUE}}!important;',
                    '{{WRAPPER}} .icon_box_all.style_one  ' => 'border-color: unset!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'] , 
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_ztwo',
            [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all , {{WRAPPER}}  .icon_box_all .inner_icon_box.enable_bgs , {{WRAPPER}}  .icon_box_all:not(.style_four) .txt_content ' => 'background: {{VALUE}}!important;',
                    '{{WRAPPER}} .icon_box_all.style_two  , {{WRAPPER}} .icon_box_all.style_six  ' => 'background: unset!important;', 
                ],
                'condition' => [
                    'iconboxstyle' => ['style_one' , 'style_two' , 'style_three' , 'style_four' , 'style_five'  , 'style_six'] , 
                ],
            ]
        );  
        $this->add_control(
            'cstyle_seven',
            [
                'label' => __('Icon Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all .icon span , {{WRAPPER}} .icon_box_all .icon i   ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}} .icon_box_all .icon svg path  ' => 'fill: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_eleven',
            [
                'label' => __('Pattern Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all  .spattern_bg  ' => 'background: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_control(
            'cstyle_zsix',
            [
                'label' => __('Pattern Circle Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_four::before ' => 'border-color: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => 'style_four'
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
                'name' => 'cstyle_three',
                'selector' =>   '{{WRAPPER}} .icon_box_all .title_no_a_24 , {{WRAPPER}} .icon_box_all .title_24 a ', 
            ]
        ); 
        $this->add_control(
            'cstyle_four',
            [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all .title_no_a_24 a  , {{WRAPPER}} .icon_box_all .title_24 a , {{WRAPPER}} .icon_box_all .font_special' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Content Typography', 'risehand-addons' ),
                'name' => 'cstyle_five',
                'selector' =>   '{{WRAPPER}} .icon_box_all .desc_p , {{WRAPPER}} .icon_box_all .desc_p', 
            ]
        ); 
        $this->add_control(
            'cstyle_six',
            [
                'label' => __('Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all .desc_p , {{WRAPPER}} .icon_box_all .desc_p ' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Button Typography', 'risehand-addons' ),
                'name' => 'cstyle_one',
                'selector' =>   '{{WRAPPER}} .icon_box_all .text_btn small , {{WRAPPER}} .icon_box_all.style_four .theme_btn ', 
            ]
        ); 
        $this->add_control(
            'cstyle_two',
            [
                'label' => __('Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all .text_btn small , {{WRAPPER}} .icon_box_all .theme_btn ' => 'color: {{VALUE}}!important; text-decoration-color: {{VALUE}}!important;',
                ],
            ]
        );
        $this->add_control(
            'cstyle_zfour',
            [
                'label' => __('Button  Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all  .theme_btn' => 'border-color: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_four' , 'style_six']
                ],
            ]
        );
        $this->add_control(
            'cstyle_zseven',
            [
                'label' => __('Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all .theme_btn' => 'background: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_four' , 'style_six']
                ],
            ]
        ); 
        $this->add_control(
            'cssdiv5',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'hoverone',
            [
                'label' => __('Hover Icon Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover .icon_box .icon i , {{WRAPPER}} .icon_box_all.style_five:hover .icon_box .icon span ' => 'color: {{VALUE}}!important;',
                    '{{WRAPPER}} .icon_box_all.style_five:hover .icon_box .icon svg path ' => 'fill: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->add_control(
            'hovertwo',
            [
                'label' => __('Hover Pattern Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover .icon_box .spattern_bg ' => 'background: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->add_control(
            'hoverthree',
            [
                'label' => __('Hover Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover .title_no_a_24 , {{WRAPPER}} .icon_box_all.style_five:hover .title_no_a_24 a' => 'color: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->add_control(
            'hoverfour',
            [
                'label' => __('Hover Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover p ' => 'color: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->add_control(
            'hoverfive',
            [
                'label' => __('Hover Link Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover .text_btn small' => 'color: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->add_control(
            'hoversize',
            [
                'label' => __('Hover Background  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .icon_box_all.style_five:hover ' => 'background: {{VALUE}}!important;',
                ],
                'condition' => [
                    'iconboxstyle' => ['style_five']
                ],
            ]
        ); 
        $this->end_controls_section();
}
protected function render()
{
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
$link_target = '';
$link_unfollow =  '';
if(!empty($settings['link_box']['url'])){
$link_target = $settings['link_box']['is_external'] ? ' target="_blank"' : '';
$link_unfollow = $settings['link_box']['nofollow'] ? ' rel="nofollow"' : ''; 
}
?>
<div class="icon_box_all trans <?php echo esc_attr($settings['iconboxstyle']); ?> <?php echo esc_attr($settings['flex_column']); ?>"><?php // icon style two start ?><?php if($settings['iconboxstyle'] == 'style_two'): ?> <div class="inner_icon_box trans<?php if(!empty($settings['enable_background'] == true)): ?> enable_bgs<?php endif; ?>"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_0" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 mb_0"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_25"> <a class="text_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <small><?php echo esc_attr($settings['button_text']); ?></small> </a> </div> <?php endif; ?> </div> </div><?php // icon style two end ?><?php // icon style three start ?><?php elseif($settings['iconboxstyle'] == 'style_three'): ?> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_0 color_white" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 color_white mb_0"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_20"> <a class="text_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <small><?php echo esc_attr($settings['button_text']); ?></small> </a> </div> <?php endif; ?> </div><?php // icon style three end ?><?php // icon style four start ?><?php elseif($settings['iconboxstyle'] == 'style_four'): ?> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <div class="txt_content zin_2 position-relative"> <div class="d_flex align-items-center<?php if($settings['icontype'] != 'disable_icon'): ?> icon_yes<?php endif; ?>"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_0 color_white font_special" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="font_special color_white mb_0"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> </div> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p color_white mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_30"> <a class="theme_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo esc_attr($settings['button_text']); ?> <i class="risehand-chevrons-right"></i> </a> </div> <?php endif; ?> </div><?php // icon style four end ?><?php // icon style five start ?><?php elseif($settings['iconboxstyle'] == 'style_five'): ?> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <div class="spattern_bg mask_image trans" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_0 pb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 pb_5 mb_0"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_20"> <a class="text_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <small><?php echo esc_attr($settings['button_text']); ?></small> </a> </div> <?php endif; ?> </div> <?php // icon style five end ?><?php elseif($settings['iconboxstyle'] == 'style_six'): ?><?php // icon style six start ?> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <div class="spattern_bg mask_image trans" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/pattern-circle.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/pattern-circle.png' ?>);"> </div> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])): $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; ?> <div class="icon d_flex"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon d_flex"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon d_flex"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content trans"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_0" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 mb_0"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_25"> <a class="theme_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo esc_attr($settings['button_text']); ?> <i class="risehand-chevrons-right"></i> </a> </div> <?php endif; ?> </div><?php // icon style six end ?><?php elseif($settings['iconboxstyle'] == 'style_seven'): ?><?php // icon style one start ?> <div class="d_flex"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="pb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 pb_5"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_20"> <a class="text_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <small><?php echo esc_attr($settings['button_text']); ?></small> </a> </div> <?php endif; ?> </div> </div><?php // icon style seven end ?><?php // icon style one start ?><?php else: ?><?php // icon style one start ?> <div class="d_flex align-items-center <?php if(!empty($settings['enable_border'] == true)): ?> enable_bors<?php endif; ?>"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <div class="spattern_bg mask_image" style="mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>); -webkit-mask-image: url(<?php echo RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-1.png' ?>);"> </div> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])) { $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; } if(!empty($icon_images)): ?> <div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="txt_content"> <?php if(!empty($settings['icon_box_heading'])):?> <?php if(!empty($settings['link_box']['url'])): ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_24 mb_0"> <a href="<?php echo esc_url($settings['link_box']['url']); ?>" class="mb_5" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </a> </<?php echo esc_attr($settings['tag_type']); ?>> <?php else: ?> <<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_24 mb_5"> <?php echo wp_kses($settings['icon_box_heading'] , $allowed_tags) ?> </<?php echo esc_attr($settings['tag_type']); ?>> <?php endif; ?> <?php endif; ?> <?php if(!empty($settings['icon_box_description'])):?> <p class="desc_p mt_10"> <?php echo wp_kses($settings['icon_box_description'] , $allowed_tags) ?> </p> <?php endif; ?> <?php if(!empty($settings['button_text_enable'] == true)): ?> <div class="mt_20"> <a class="text_btn" href="<?php echo esc_url($settings['link_box']['url']); ?>" <?php echo esc_attr($link_target); ?> <?php echo esc_attr($link_unfollow); ?>> <small><?php echo esc_attr($settings['button_text']); ?></small> </a> </div> <?php endif; ?> </div> </div><?php endif; ?><?php // icon style one end ?> </div> 
<?php
}
}