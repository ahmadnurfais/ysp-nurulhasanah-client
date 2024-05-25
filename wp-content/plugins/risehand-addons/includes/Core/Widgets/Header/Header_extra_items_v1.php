<?php

namespace  Risehandaddons\Core\Widgets\Header;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Header_extra_items_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-extra-items-v1';
    }

    public function get_title()
    {
        return __('Header Extra Items V1', 'risehand-addons');
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
    $this->start_controls_section('header_extra_settings',
        [ 
            'label' => __('Header Extra Settings', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
     ); 
     $this->add_control(
         'header_extra_items',
         [
             'label' => esc_html__('Choose', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::SELECT,
             'default' => 'contact',
             'options' => [ 
                 'contact' => esc_html__('Phone Number', 'risehand-addons'),
                 'mailid' => esc_html__('Mail Id', 'risehand-addons'),
                 'address' => esc_html__('Address', 'risehand-addons'), 
             ],
         ]
     );
     
     $this->add_control(
         'differnet_types',
         [
             'label' => esc_html__('Choose Style', 'risehand-addons'),
             'type' => \Elementor\Controls_Manager::SELECT,
             'default' => 'type_one',
             'options' => [
                 'type_one' => esc_html__('Type One', 'risehand-addons'),
                 'type_two' => esc_html__('Type Two', 'risehand-addons'),
             ],
             'condition' => [
                 'header_extra_items' => ['contact', 'mailid', 'address'],
             ],
         ]
     );
      // contact
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
            'header_extra_items' => ['contact' , 'mailid' , 'address']
        ]
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
        'contact_us_title',
        [
            'label' => __('Contact Title', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('Need help? Call Us:', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['contact']
            ]
        ]
    );
    $this->add_control(
        'contact_us_number',
        [
            'label' => __('Phone Number', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('+1800900122', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['contact']
            ]
        ]
    );
    $this->add_control(
        'mailtitle',
        [
            'label' => __('Mail Title', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('Just Mail Us:', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['mailid']
            ]
        ]
    );
    $this->add_control(
        'getmailid',
        [
            'label' => __('Phone Number', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('support@gmail.com', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['mailid']
            ]
        ]
    );
    $this->add_control(
        'addresstitle',
        [
            'label' => __('Address Title', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('Just Mail Us:', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['address']
            ]
        ]
    );
    $this->add_control(
        'getaddress',
        [
            'label' => __('Address', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __('55 Main Street, 2nd Blok, 3rd    Floor, New York City', 'risehand-addons'),
            'placeholder' => __('Enter your text here', 'risehand-addons'),
            'condition' => [ 
                'header_extra_items' => ['address']
            ]
        ]
    );
    // contact  end
    $this->end_controls_section(); 
    $this->start_controls_section('headerextracss',
    [ 
        'label' => __('Custom Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
    $this->add_control(
        'contact_icon_color',
        [
            'label' => __('Contact Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header_contact .icon i , {{WRAPPER}}  .header_contact .icon span ' => 'color: {{VALUE}}!important;',
                '{{WRAPPER}} .header_contact .icon svg path ' => 'fill: {{VALUE}}!important;',
            ],
            'condition' => [
                'header_extra_items' => ['contact', 'mailid', 'address'],
            ],
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Contact Title Typography', 'risehand-addons' ),
            'name' => 'contact_title_typo',
            'selector' => '{{WRAPPER}} .header_contact .titles ',
            'condition' => [
                'header_extra_items' => ['contact', 'mailid', 'address'],
            ],
        ]
    );
    $this->add_control(
        'contact_title_color',
        [
            'label' => __('Contact Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header_contact  .titles  ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'header_extra_items' => ['contact', 'mailid', 'address'],
            ],
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Contact  Typography', 'risehand-addons' ),
            'name' => 'contct_typo',
            'selector' => '{{WRAPPER}} .header_contact a, {{WRAPPER}} .header_contact p ',
            'condition' => [
                'header_extra_items' => ['contact', 'mailid', 'address'],
            ],
        ]
    );
    $this->add_control(
        'contact_color',
        [
            'label' => __('Contact  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header_contact a, {{WRAPPER}} .header_contact p ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'header_extra_items' => ['contact', 'mailid', 'address'],
            ],
        ]
    ); 
    $this->end_controls_section(); 
}
protected function render(){
$settings = $this->get_settings_for_display(); 
?> 
<?php if ($settings['header_extra_items'] == 'mailid'): ?> <div class="header_contact <?php echo esc_attr($settings['differnet_types']); ?> d_flex align-items-center"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])): $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; ?> <div class="icon d_flex"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon d_flex"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon d_flex"> <i class="<?php echo esc_attr($settings['icon_fontawesome']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="content"> <?php if(!empty($settings['mailtitle'])): ?> <span class="titles"><?php echo esc_attr($settings['mailtitle']); ?> </span> <?php endif; ?> <?php if(!empty($settings['getmailid'])): ?> <a href="mailto:<?php echo esc_attr($settings['getmailid']); ?>"> <?php echo esc_attr($settings['getmailid']); ?> </a> <?php endif; ?> </div> </div><?php elseif ($settings['header_extra_items'] == 'address'): ?> <div class="header_contact <?php echo esc_attr($settings['differnet_types']); ?> address d_flex align-items-center"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])): $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; ?> <div class="icon d_flex"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon v"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon d_flex"> <i class="<?php echo esc_attr($settings['icon_fontawesome']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="content"> <?php if(!empty($settings['addresstitle'])): ?> <span class="titles"><?php echo esc_attr($settings['addresstitle']); ?> </span> <?php endif; ?> <?php if(!empty($settings['getaddress'])): ?> <p> <?php echo esc_attr($settings['getaddress']); ?> </p> <?php endif; ?> </div> </div> <?php else: ?> <div class="header_contact <?php echo esc_attr($settings['differnet_types']); ?> d_flex align-items-center"> <?php if($settings['icontype'] != 'disable_icon'): ?> <div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> <?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = ''; $alt_icon_images = ''; if (!empty($settings['icon_images']['url'])): $icon_images = $settings['icon_images']['url']; $alt_icon_images = $settings['icon_images']['alt']; $alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon'; ?> <div class="icon d_flex"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['icontype'] == 'custom'): ?> <div class="icon d_flex"> <span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span> </div> <?php endif; ?> <?php if($settings['icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['icon_fontawesome'])): ?> <div class="icon d_flex"> <i class="<?php echo esc_attr($settings['icon_fontawesome']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> </div> <?php endif; ?> <div class="content"> <?php if(!empty($settings['contact_us_title'])): ?> <span class="titles"><?php echo esc_attr($settings['contact_us_title']); ?> </span> <?php endif; ?> <?php if(!empty($settings['contact_us_number'])): ?> <a href="tel:<?php echo esc_attr($settings['contact_us_number']); ?>"> <?php echo esc_attr($settings['contact_us_number']); ?> </a> <?php endif; ?> </div> </div><?php endif; ?>
<?php
    }
}