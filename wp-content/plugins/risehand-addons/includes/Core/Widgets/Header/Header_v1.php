<?php

namespace  Risehandaddons\Core\Widgets\Header;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Header_v1 extends \Elementor\Widget_Base
{
     
    public function get_name()
    {
        return 'risehand-header-v1';
    } 
    public function get_title()
    {
        return __('Header V1', 'risehand-addons');
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
       
        $this->start_controls_section('headers_settings',
        [ 
            'label' => __('Header Settings', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );   
        $this->add_control(
         'header_layout',
            [
            'label' => __('Header Styles', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'no-container' => __( 'No Container', 'risehand-addons' ), 
                'full-container' => __( 'Full With Container', 'risehand-addons' ),
                'large-container' => __( 'Large Container', 'risehand-addons' ),
                'medium-container' => __( 'Medium Container', 'risehand-addons' ),
                'auto-container' => __( 'Auto Container', 'risehand-addons' ),
            ],
            'default' => __('auto-container' , 'risehand-addons'),
            ]
        );
        $this->add_control(
			'div1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'mode',
            [
              'label' => __('Header Color', 'risehand-addons'),
              'type' => \Elementor\Controls_Manager::SELECT,
              'options' => [
                'dark' => __( 'Dark', 'risehand-addons' ),
                'white' => __( 'Light', 'risehand-addons' ),
            ],
              'default' => __('white' , 'risehand-addons'),
            ]
        );
        $this->add_control(
			'div2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
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
        $this->add_control(
            'navigations_pos',
            [
              'label' => __('Menu Position', 'risehand-addons'),
              'type' => \Elementor\Controls_Manager::SELECT,
              'options' => [
                'left' => __( 'Left', 'risehand-addons' ),
                'right' => __( 'Right', 'risehand-addons' ),
                'center' => __( 'Center', 'risehand-addons' ),
            ],
              'default' => __('left' , 'risehand-addons'),
            ]
        );  
        $this->add_control(
			'div3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'logo_default',
            [
            'label' => __( 'Logo Default', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => RISEHAND_ADDONS_URL . 'assets/image/logo-white.png',
            ],
        ] 
       ); 
       $this->add_control(
        'logo_width',
        [
            'label' => __( 'Logo Width', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( '170px', 'risehand-addons' ),
            'placeholder' => __( 'Enter logo width here in (px , rem and em )', 'risehand-addons' ),
            'selectors' => [
                '{{WRAPPER}} .header  .logo_box img' => 'width: {{VALUE}}!important;',
            ],
        ]
        );
        $this->add_control(
            'margin_logo',
            [
                'label' => __( 'Margin', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .header  .logo_box img ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        ); 
        $this->add_control(
            'custom_link_enable',
            [
                'label' => __('Custom Link Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        ); 
        $this->add_control(
            'logo_link',
            [
                'label' => __( 'Link', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'risehand-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'custom_link_enable' => 'yes'
                ],
            ]
        ); 
        $this->add_control(
			'div4',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'top_bar_enable',
            [
                'label' => __('Top Bar Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        ); 
        $this->add_control(
            'mobile_top_bar_enable',
            [
                'label' => __('Top Bar Enable / Disable In Mobile', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'no',
                'condition' => [
                    'top_bar_enable' => 'yes'
                ],
            ]
        );
       
        $this->end_controls_section();


        $this->start_controls_section('top_content',
        [ 
            'label' => __('Topbar Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            'condition' => [
                'top_bar_enable' => 'yes'
            ]
        ]
        ); 
        $this->add_control(
            'addressenable',
            [
                'label' => __('Address  Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        ); 
        $this->add_control(
			'div5',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'addressenable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'address_title',
            [
                'label' => __( 'Title', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Location', 'risehand-addons' ),
                'placeholder' => __( 'Type your title here', 'risehand-addons' ),
                'condition' => [
                    'addressenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'address',
            [
                'label' => __( 'Address', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '61W Business Str Hobert, LA ', 'risehand-addons' ),
                'placeholder' => __( 'Type your Address Here', 'risehand-addons' ),
                'condition' => [
                    'addressenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
			'div60',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'phoneenable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'mailenable',
            [
                'label' => __('Mail  Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        ); 
        $this->add_control(
			'div6',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'mailenable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'email_title',
            [
                'label' => __( 'Title', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Email', 'risehand-addons' ),
                'placeholder' => __( 'Type your title here', 'risehand-addons' ),
                'condition' => [
                    'mailenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'email_address',
            [
                'label' => __( 'Email Id', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'sendmail@risehand.com', 'risehand-addons' ),
                'placeholder' => __( 'Type your Mail Address here', 'risehand-addons' ),
                'condition' => [
                    'mailenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
			'div70',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'phoneenable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'phoneenable',
            [
                'label' => __('Phone  Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        ); 
        $this->add_control(
			'div7',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'phoneenable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'phone_title',
            [
                'label' => __( 'Title', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Phone', 'risehand-addons' ),
                'placeholder' => __( 'Type your title here', 'risehand-addons' ),
                'condition' => [
                    'phoneenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'phone_number',
            [
                'label' => __( 'Phone Number', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+98 060 712 34', 'risehand-addons' ),
                'placeholder' => __( 'Type your Phone Number here', 'risehand-addons' ),
                'condition' => [
                    'phoneenable' => 'yes'
                ],
            ]
        );
        $this->add_control(
			'div80',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'top_button_enable',
            [
                'label' => __('Button Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        ); 
        $this->add_control(
			'div8',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'top_button_enable' => 'yes'
                ],
			]
		);
      
        $this->add_control(
            'button_one',
            [
                'label' => __( 'Button  Text', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Become a Volunteer', 'risehand-addons' ),
                'placeholder' => __( 'Type your title here', 'risehand-addons' ),
                'condition' => [
                    'top_button_enable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'button_icontypeone',
               [
               'label' => __('Button Type', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'custom' => __( 'Custom Icons', 'risehand-addons' ),
                   'fontawesome' => __( 'Fontawesome', 'risehand-addons' ),
                   'none' => __( 'None', 'risehand-addons' ), 
               ],
               'default' => __('custom' , 'risehand-addons'),
               ]
        );
        $this->add_control(
            'button_iconfontawe',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'fa-brands',
                ],
                'label_block' => true,
                'condition' => [
                    'button_icontypeone' => 'fontawesome'
                ],
            ]
        );
        $this->add_control(
            'button_icontype',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICON,
                'options' => get_risehand_icons(),
                'default' => __('risehand-user2' , 'risehand-addons'),
                'condition' => [
                    'button_icontypeone' => 'custom' ,
                ],
            ]
        ); 
        $this->add_control(
            'button_link',
            [
                'label' => __( 'Button Link', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'risehand-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'top_button_enable' => 'yes'
                ],
            ]
        ); 
        $this->add_control(
			'div9',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
               
			]
		);
      
        $this->add_control(
            'social_media_enable',
            [
                'label' => __('Social Media  Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'div10',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'social_media_enable' => 'yes'
                ],
			]
		);
      
        $repeater_social = new \Elementor\Repeater(); 
        $repeater_social->add_control(
            'social_media_icon',
            [
                'label' => __( 'Social Media Icon', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'fab fa-facebook-f', 'risehand-addons' ),
                'placeholder' => __( 'Type your Socail Media Icon Class Name', 'risehand-addons' ),
            ]
        );
        $repeater_social->add_control(
            'socail_media_link',
            [
                'label' => __( 'Link', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'risehand-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'social_media_repeater',
            [
                'label' => __('Social Media Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_social->get_controls(),
                'default' => [
                    [ 
                       'social_media_icon' =>  __('risehand-facebook-circle', 'risehand-addons'),
                       'socail_media_link' =>  __('#', 'risehand-addons'),
                    ],
                    [ 
                       'social_media_icon' =>  __('risehand-twitter', 'risehand-addons'),
                       'socail_media_link' =>  __('#', 'risehand-addons'),
                     ],
                     [ 
                        'social_media_icon' =>  __('risehand-skype1', 'risehand-addons'),
                        'socail_media_link' =>  __('#', 'risehand-addons'),
                     ],
                     [ 
                        'social_media_icon' =>  __('risehand-telegram1', 'risehand-addons'),
                        'socail_media_link' =>  __('#', 'risehand-addons'),
                     ],
                ],
                'title_field' => '{{{ social_media_icon }}}',
                'condition' => [
                    'social_media_enable' => 'yes'
                ],
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section('header_content',
        [ 
            'label' => __('Header Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        );    
        $this->add_control(
            'language_enable',
            [
                'label' => __('Language List show / hide', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'language_type',
            [
                'label' => __('Language Type', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'custom_language'   => esc_html__( 'Custom Language', 'risehand-addons' ),
                    'using_short_code'   => esc_html__( 'Using Shortcode', 'risehand-addons' ), 
                ],
                'default' => 'custom_language',
                'condition' => [
                    'language_enable' => 'yes'
                ],
            ]
        );

        $this->add_control(
            'lang_title',
            [
                'label' => __( 'Default Language Text', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'English', 'risehand-addons' ),
                'condition' => [
                    'language_type' => 'custom_language'
                ],
            ]
        );
        $repeater_three = new \Elementor\Repeater();
        $repeater_three->add_control(
        'language_icon_image',
        [
            'label' => __( 'Image', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ] 
       );
        $repeater_three->add_control(
            'language_text',
            [
                'label' => __( 'Language Text', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'English', 'risehand-addons' ),
            ]
        );
  
        $repeater_three->add_control(
            'language_link',
            [
                'label' => __( 'Link', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'risehand-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'language_repeater',
            [
                'label' => __('Language Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_three->get_controls(),
                'default' => [
                    [
                       'language_text' =>  __('Français', 'risehand-addons'),
                       'language_link' =>  __('#', 'risehand-addons'),
                    ],
                    [
                        'language_text' =>  __('Deutsch', 'risehand-addons'),
                        'language_link' =>  __('#', 'risehand-addons'),
                    ],
                    [
                        'language_text' =>  __('Pусский ', 'risehand-addons'),
                        'language_link' =>  __('#', 'risehand-addons'),
                    ], 
                ],
                'title_field' => '{{{ language_text }}}',
                'condition' => [
                    'language_type' => 'custom_language'
                ],
            ]
        ); 
        $this->add_control(
            'language_shortcode',
            [
                'label' => __( 'Language Shortcode', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '[trp_language language="en_US"]', 'risehand-addons' ),
                'condition' => [
                    'language_type' => 'using_short_code'
                ],
            ]
        ); 
        $this->add_control(
			'div12',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'button_enable',
            [
                'label' => __('Button  Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'div13',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'button_enable' => 'yes'
                ],
			]
		);
        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Became Vendor', 'risehand-addons' ),
                'placeholder' => __( 'Type your title here', 'risehand-addons' ),
                'condition' => [
                    'button_enable' => 'yes'
                ],
            ]
        );
        $this->add_control(
            'mbutton_icontype',
               [
               'label' => __('Button Type', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SELECT,
               'options' => [
                   'custom' => __( 'Custom Icons', 'risehand-addons' ),
                   'fontawesome' => __( 'Fontawesome', 'risehand-addons' ),
                   'none' => __( 'None', 'risehand-addons' ), 
               ],
               'default' => __('custom' , 'risehand-addons'),
               ]
        );
        $this->add_control(
            'mbutton_iconfontawe',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'fa-brands',
                ],
                'label_block' => true,
                'condition' => [
                    'mbutton_icontype' => 'fontawesome'
                ],
            ]
        );
        $this->add_control(
            'mbutton_icontypeone',
            [
                'label' => __('Icon', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICON,
                'options' => get_risehand_icons(),
                'default' => __('risehand-arrow-down-right1' , 'risehand-addons'),
                'condition' => [
                    'mbutton_icontype' => 'custom' ,
                ],
            ]
        ); 
        $this->add_control(
            'mbutton_link',
            [
                'label' => __( 'Button Link', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'risehand-addons' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'button_enable' => 'yes'
                ],
            ]
        );
        $this->add_control(
			'div14',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
        $this->add_control(
            'option_panel_enable',
            [
                'label' => __('Option Panel Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes', 
            ]
        );
        $this->add_control( 
            'search_enable',
            [
                'label' => __('Search Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => 'yes',
                'default' => 'yes', 
            ]
        );
    $this->end_controls_section();

    $this->start_controls_section('option_panel_content',
    [ 
        'label' => __('Option Panel Settings', 'risehand-addons'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'option_panel_enable' => 'yes'
        ],
    ]
    ); 
    $this->add_control(
        'opt_panel_logo',
            [
            'label' => __( 'Logo Default', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'default' => [
            'url' => RISEHAND_ADDONS_URL . '/assets/image/logo-dark.png',
            ],
        ] 
   ); 
   $this->add_control(
    'opt_panel_logo_width',
        [
            'label' => __( 'Logo Width', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( '170px', 'risehand-addons' ),
            'placeholder' => __( 'Enter logo width here in (px , rem and em )', 'risehand-addons' ),
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .side-menu__block-inner .log_bx img' => 'width: {{VALUE}}!important;',
            ],
        ]
    );
    $this->add_control(
        'about_company_modal',
        [
            'label' => __( 'Button Text', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __( 'Denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms pleasure moment so blinded desire that they cannot foresee the pain and trouble.', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ),
         
        ]
    );
    $this->add_control( 
        'form_enable',
        [
            'label' => __('Form Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => 'yes',
            'default' => 'no', 
        ]
    );
    $this->add_control(
        'form_title',
        [
            'label' => __( 'Form Text', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'Need Any Help? Or Looking For an Agent', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ), 
            'condition' => [
                'form_enable' => 'yes'
            ],
        ]
    );
    $this->add_control(
        'form_short_code',
        [
            'label' => __( 'Form Short Code', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'default' => __( '', 'risehand-addons' ),
            'placeholder' => __( 'Enter the form shortcode here', 'risehand-addons' ),
            'condition' => [
                'form_enable' => 'yes'
            ],
        ]
    );
    $this->add_control( 
        'contact_panel_enable',
        [
            'label' => __('Contact Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => 'yes',
            'default' => 'no', 
        ]
    );
    $this->add_control(
        'mobile_phone_number',
        [
            'label' => __( 'Phone Number', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( '9806071234', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ),
            'condition' => [
                'contact_panel_enable' => 'yes'
            ],
        ]
    );
    $this->add_control(
        'mobile_mail_number',
        [
            'label' => __( 'Mail Id', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'sendmail@example.com', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ),
            'condition' => [
                'contact_panel_enable' => 'yes'
            ],
        ]
    );
    
    $this->add_control(
        'working_hours_panels',
        [
            'label' => __( 'Workign Hours', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'Working Hours : Sun-monday, 09am-5pm', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ),
            'condition' => [
                'contact_panel_enable' => 'yes'
            ],
        ]
    );
    $this->add_control( 
        'copy_right_enable',
        [
            'label' => __('Working Hours Enable / Disable', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'risehand-addons'),
            'label_off' => __('No', 'risehand-addons'),
            'return_value' => 'yes',
            'default' => 'yes', 
        ]
    );
    $this->add_control(
        'copy_right_modal',
        [
            'label' => __( 'Copy Right', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __( 'Copyright © 2024. All Rights Reserved.', 'risehand-addons' ),
            'placeholder' => __( 'Type your title here', 'risehand-addons' ),
         
        ]
    );
    $this->end_controls_section();

    $this->start_controls_section('topbar_m_css',
    [ 
        'label' => __('Topbar Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        'condition' => [
            'top_bar_enable' => 'yes'
        ],
    ]);
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Title Typography', 'risehand-addons' ),
            'name' => 'title_typo',
            'selector' => '{{WRAPPER}} .header.style_one .header_top .common_css .content .text small ',
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Content Typography', 'risehand-addons' ),
            'name' => 'content_type',
            'selector' => '{{WRAPPER}}  .header.style_one .header_top .common_css .content .text span ,
            {{WRAPPER}}  .header.style_one .header_top .common_css .content .text a ',
        ]
    ); 
    $this->add_control(
        'top_icon_color',
        [
            'label' => __('Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one .header_top .left_side .content i ' => 'color: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->add_control(
        'top_title_color',
        [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_top .common_css .content .text small ' => 'color: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->add_control(
        'top_content_color',
        [
            'label' => __('Content Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_top .common_css .content .text span ,
                {{WRAPPER}}  .header.style_one .header_top .common_css .content .text a' => 'color: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Button Typography', 'risehand-addons' ),
            'name' => 'btntypo',
            'selector' => '{{WRAPPER}}  .header.style_one .header_top .text_btn small',
        ]
    ); 
    $this->add_control(
        'topbtncolr',
        [
            'label' => __('Button Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one .header_top .text_btn .icon  i ' => 'color: {{VALUE}}!important;',
                '{{WRAPPER}}  .header.style_one .header_top .text_btn .icon svg path  ' => 'fill: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->add_control(
        'topbtniconcolr',
        [
            'label' => __('Button  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one .header_top .text_btn small' => 'color: {{VALUE}}!important;',
                '{{WRAPPER}}  .header.style_one .header_top .common_css .content:after' => 'background: {{VALUE}}!important; opacity:.2!important;',
                
            ],
        ]
    ); 
    $this->add_control(
        'hotopbtniconcolr',
        [
            'label' => __('Button Hover Line  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one .header_top .text_btn small:before ' => 'background: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->add_control(
        'social_icon_color',
        [
            'label' => __('Media Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_top .common_css .content.media a i ' => 'color: {{VALUE}}!important;',
            ],
        ]
    ); 
    $this->end_controls_section(); 
    $this->start_controls_section('language_css',
    [ 
        'label' => __('Language / Dropdown Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Language Typography', 'risehand-addons' ),
            'name' => 'language_typo',
            'selector' => '{{WRAPPER}} .header.style_one .header_main .language_content .title  , {{WRAPPER}} .header.style_one .header_main .language_content .dropdown_menu li a ,
            .gt_float_switcher .gt-selected .gt-current-lang',
        ]
    ); 
    $this->add_control(
        'lang_switch_color_icon',
         [
            'label' => __('Language Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .language_content .title i , {{WRAPPER}}
                .header.style_one  .language_shortcode .gt_float_switcher-arrow::before ' => 'color: {{VALUE}}!important;',
            ],
            'condition' => [
                'language_type' => 'custom_language'
            ],
         ]
    ); 
    $this->add_control(
        'lang_stext_color',
         [
            'label' => __('Language Text Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .language_content .title ,
                {{WRAPPER}} .header.style_one .header_main .language_content .title i.risehand-chevron-down , {{WRAPPER}}
                .gt_float_switcher .gt-selected .gt-current-lang ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'lang_drop_bg_color',
         [
            'label' => __('Language Dropdown Bg Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .language_content .dropdown_menu , 
                {{WRAPPER}} .language_shortcode .gt_float_switcher .gt_options' => 'background: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'lang_drop_br_color',
         [
            'label' => __('Language Dropdown Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .language_content .dropdown_menu li a ,
                {{WRAPPER}} .language_shortcode .gt_float_switcher .gt_options a ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );
    $this->add_control(
        'lang_drop_text_color',
         [
            'label' => __('Language Dropdown Text Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .language_content .dropdown_menu li a ,
                {{WRAPPER}} .language_shortcode .gt_float_switcher .gt_options a' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->end_controls_section(); 
    $this->start_controls_section('menu_css',
    [ 
        'label' => __('Menu Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
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
            'selector' => '{{WRAPPER}} .navbar_nav > li  ',
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
                '{{WRAPPER}} .navbar_nav > li  ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
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
                '{{WRAPPER}} .navbar_nav > li ' => 'background: {{VALUE}}!important;',
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
                '{{WRAPPER}} .navbar_nav > li.active  , {{WRAPPER}} .navbar_nav > li:hover ' => 'border-color: {{VALUE}}!important;',
            ],
        ]
    );  
    $this->add_control(
        'menu_ac_bg_color',
        [
            'label' => __('Menu Hover/ Active Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .navbar_nav > li.active  , {{WRAPPER}} .navbar_nav > li:hover ' => 'background: {{VALUE}}!important;',
            ],
        ]
    );  
    $this->add_control(
        'hr_one',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'drop_menubot_rad',
        [
            'label' => esc_html__( 'Dropdown Menu Radius', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .navbar_nav li .sub-menu ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'drop_menu_paddings',
        [
            'label' => esc_html__('Dropdown Menu Padding', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .navbar_nav li .sub-menu ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
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
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( 'Dropdown Menu Typography', 'risehand-addons' ),
            'name' => 'drop_menu_typo',
            'selector' => '{{WRAPPER}} .navbar_nav li .sub-menu > li ',
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
        'drop_menubot_rads',
        [
            'label' => esc_html__( 'Dropdown Menu Ttem Radius', 'risehand-addons' ),
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
            'label' => esc_html__('Dropdown Menu Item Padding', 'risehand-addons'),
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
            'label' => esc_html__('Dropdown Menu Item Margin', 'risehand-addons'),
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
            'label' => __('Dropdown Menu Item Hover  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .navbar_nav li .sub-menu > li.active > a , {{WRAPPER}} .navbar_nav li .sub-menu > li > a:hover ' => 'color: {{VALUE}}!important;',
            ],
        ]
    );  
    $this->add_control(
        'drop_menu_ac_bor_color',
        [
            'label' => __('Dropdown Menu Item Hover/ Active Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .navbar_nav li .sub-menu > li.active > a , {{WRAPPER}} .navbar_nav li .sub-menu > li > a:hover' => 'border-color: {{VALUE}}!important;',
            ],
        ]
    );   
    $this->end_controls_section(); 
    $this->start_controls_section('search_css',
    [ 
        'label' => __('Search Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
    $this->add_control(
        'search_icon_color',
         [
            'label' => __('Search Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .search-toggler .risehand-search1 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'sear1',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'search_bg_color',
         [
            'label' => __('Search Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup .popup-inner' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'sear2',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'search_icon_colors',
         [
            'label' => __('Search Popup Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup button i , {{WRAPPER}} .search-popup .sea_close_btn i' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 

    $this->add_control(
        'search_iconbg_color',
         [
            'label' => __('Search Popup Icon Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup button  , {{WRAPPER}} .search-popup .sea_close_btn' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__('Search Input Typography', 'risehand-addons' ),
            'name' => 'inputsearchty',
            'selector' => '{{WRAPPER}} .search-popup input[type=search]  , {{WRAPPER}} .search-popup input[type=search]::placeholder ',
        ]
    );
    $this->add_control(
        'search_icopsr_color',
         [
            'label' => __('Search Input Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup input[type=search]  , {{WRAPPER}} .search-popup input[type=search]::placeholder ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );  
    $this->add_control(
        'search_icobr_color',
         [
            'label' => __('Search Input Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup input[type=search] ' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    );  
    $this->add_control(
        'sear3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__('Title / Tag / Category Typography', 'risehand-addons' ),
            'name' => 'tagcattypo',
            'selector' => '{{WRAPPER}} .search-popup .tag_showcase ul li a, {{WRAPPER}} .search-popup .category_showcase ul li a  ,
            {{WRAPPER}} .search-popup .tag_showcase ul li.title_no_a_18 , {{WRAPPER}} .search-popup .category_showcase ul li.title_no_a_18',
        ]
    );
    $this->add_control(
        'tagtitcolor',
         [
            'label' => __('Tag  Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup .tag_showcase ul li.title_no_a_18' => 'color: {{VALUE}}!important;',
            ],
         ]
    );  
    $this->add_control(
        'tagcolor',
         [
            'label' => __('Tag Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup .tag_showcase ul li a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'catcolor',
         [
            'label' => __('Category Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup .category_showcase ul li a ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'catbgcolor',
         [
            'label' => __('Category Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .search-popup .category_showcase ul li a ' => 'background: {{VALUE}}!important;border-color: {{VALUE}}!important;',
            ],
         ]
    );  
    $this->end_controls_section(); 
    $this->start_controls_section('button_css',
    [ 
        'label' => __('Button Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
    
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Button  Typography', 'risehand-addons' ),
            'name' => 'button_typo_one',
            'selector' => '{{WRAPPER}} .header.style_one  .theme_btn.one ',
        ]
    ); 
    $this->add_control(
        'button_one_color',
         [
            'label' => __('Button  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn.one ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'button_one_bg_color',
         [
            'label' => __('Button  Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn.one ' => 'background-color: {{VALUE}}!important;',
    
            ],
         ]
    ); 
    $this->add_control(
        'button_one_bor_color',
         [
            'label' => __('Button  Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn.one ' => 'border-color: {{VALUE}}!important;'
            ],
         ]
    );
    $this->add_control(
        'button_padding_one',
        [
            'label' => esc_html__( 'Button  Padding', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'button_border_radius_one',
        [
            'label' => esc_html__( 'Button  Radius', 'risehand-addons' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn.one ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}!important;',
            ],
        ]
    );
    $this->add_control(
        'hover_button_one_color',
         [
            'label' => __('Hover Button  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn:hover ' => 'color: {{VALUE}}!important;',
            ],
         ]
    );
    
    $this->add_control(
        'hover_button_one_bg_color',
         [
            'label' => __('Hover Button  Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn:hover ' => 'background-color: {{VALUE}}!important;',
    
            ],
         ]
    ); 
    $this->add_control(
        'hover_button_one_bor_color',
         [
            'label' => __('Hover Button  Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .header.style_one  .theme_btn:hover ' => 'border-color: {{VALUE}}!important;'
            ],
         ]
    );
    $this->end_controls_section();
    $this->start_controls_section('optcss',
    [ 
        'label' => __('Option Panel Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]);  
    $this->add_control(
        'opt_color',
         [
            'label' => __('Option Panel Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .header.style_one .header_main .site-header__sidemenu-nav .risehand-menu-circled ' => 'color: {{VALUE}}!important;',
            ],
         ] 
    );
    $this->add_control(
        'hr_opt',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
      
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Content Typography', 'risehand-addons' ),
            'name' => 'destypo',
            'selector' => '{{WRAPPER}} .side-menu__block .about_company ',
        ]
    ); 
    $this->add_control(
        'descolor',
         [
            'label' => __('Content Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .about_company' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'hr_opt2',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Form Title Typography', 'risehand-addons' ),
            'name' => 'formtitletypo',
            'selector' => '{{WRAPPER}} .side-menu__block .contnet_box .title_no_a_28 ',
        ]
    ); 
    $this->add_control(
        'form_titleclor',
         [
            'label' => __('Form Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box .title_no_a_28 ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'hr_opt3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'form_label_color',
         [
            'label' => __('Form Label Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box label ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Form  Typography', 'risehand-addons' ),
            'name' => 'form_label_typo',
            'selector' => '{{WRAPPER}} .side-menu__block .contnet_box label ,
            {{WRAPPER}} .side-menu__block .contnet_box input , {{WRAPPER}} .side-menu__block .contnet_box select , {{WRAPPER}} .side-menu__block .contnet_box textarea ',
        ]
    ); 
    $this->add_control(
        'form_input_color',
         [
            'label' => __('Form  Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box input , {{WRAPPER}} .side-menu__block .contnet_box input::placeholder , 
                {{WRAPPER}} .side-menu__block .contnet_box select ,
                 {{WRAPPER}} .side-menu__block .contnet_box textarea , {{WRAPPER}} .side-menu__block .contnet_box textarea::placeholder' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'form_inputbr_color',
         [
            'label' => __('Form Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box input , 
                {{WRAPPER}} .side-menu__block .contnet_box select ,
                 {{WRAPPER}} .side-menu__block .contnet_box textarea' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'form_inputbg_color',
         [
            'label' => __('Form Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box input , 
                {{WRAPPER}} .side-menu__block .contnet_box select ,
                 {{WRAPPER}} .side-menu__block .contnet_box textarea' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'hr_opt4',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_control(
        'formbtncolor',
         [
            'label' => __('Form Button Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box .wpcf7-form input[type=submit]' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'formbtnbrcolor',
         [
            'label' => __('Form Button Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box .wpcf7-form input[type=submit]' => 'border-color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'formbtnbgcolor',
         [
            'label' => __('Form Button Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .contnet_box .wpcf7-form input[type=submit]' => 'background: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'hr_op5',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Contact Typography', 'risehand-addons' ),
            'name' => 'contypos',
            'selector' => '{{WRAPPER}} .side-menu__block .side-menu__block-inner .contact_panel .c_pan .a_c ',
        ]
    ); 
    $this->add_control(
        'sidemenuicon',
         [
            'label' => __('Contact Icon Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .side-menu__block-inner .contact_panel .c_pan .a_c i' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'sidemenucont',
         [
            'label' => __('Contact Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .side-menu__block .side-menu__block-inner .contact_panel .c_pan .a_c ' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->add_control(
        'hr_op6',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER,
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Copyright Typography', 'risehand-addons' ),
            'name' => 'coprighttypo',
            'selector' => '{{WRAPPER}} .c_pan.coyrite ',
        ]
    ); 
    $this->add_control(
        'copyrightcolor',
         [
            'label' => __('Copyright Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}}  .c_pan.coyrite' => 'color: {{VALUE}}!important;',
            ],
         ]
    ); 
    $this->end_controls_section();
} 
    
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
$link = '';
$logo_target = '';
$logo_nofollow = '';
if($settings['custom_link_enable'] == 'yes'):
    $link = $settings['logo_link']['url'];
    $logo_target = $settings['logo_link']['is_external'] ? ' target="_blank"' : '';
    $logo_nofollow = $settings['logo_link']['nofollow'] ? ' rel="nofollow"' : '';
else:
    $link = home_url();
endif;
?>
 <header class="header style_one"> <?php if($settings['top_bar_enable'] == true): ?> <div class="header_top <?php if($settings['mobile_top_bar_enable'] == true): ?> no_topbar <?php endif; ?>"> <div class="<?php echo esc_attr($settings['header_layout']); ?>"> <div class="top_inner"> <div class="left_side common_css"> <?php if($settings['addressenable'] == true): ?> <div class="content address"> <i class="risehand-location"></i> <div class="text"> <?php if(!empty($settings['address_title'])): ?> <small><?php echo esc_attr($settings['address_title']); ?> : </small> <?php endif; ?> <?php if(!empty($settings['address'])): ?> <span><?php echo esc_attr($settings['address']); ?></span> <?php endif; ?> </div> </div> <?php endif; ?> <?php if($settings['mailenable'] == true): ?> <div class="content email"> <i class="risehand-mail1"></i> <div class="text"> <?php if(!empty($settings['email_title'])): ?> <small><?php echo esc_attr($settings['email_title']); ?> : </small> <?php endif; ?> <?php if(!empty($settings['email_address'])): ?> <a href="mailto:<?php echo esc_attr($settings['email_address']); ?>"><?php echo esc_attr($settings['email_address']); ?></a> <?php endif; ?> </div> </div> <?php endif; ?> <?php if($settings['phoneenable'] == true): ?> <div class="content phone"> <i class="risehand-phone"></i> <div class="text"> <?php if(!empty($settings['phone_title'])): ?> <small><?php echo esc_attr($settings['phone_title']); ?> : </small> <?php endif; ?> <?php if(!empty($settings['phone_number'])): ?> <a href="tel:<?php echo esc_attr($settings['phone_number']); ?>"><?php echo esc_attr($settings['phone_number']); ?></a> <?php endif; ?> </div> </div> <?php endif; ?> </div> <div class="right_side common_css"> <?php if($settings['top_button_enable'] == true): ?> <div class="content txbutton"> 
    <?php if(!empty($settings['button_one'])):  
    $button_link = '#'; 
    $button_target = ''; 
    $button_nofollow = ''; 
    if (!empty( $settings['button_link'])) { 
        $button_link = $settings['button_link']['url']; 
        $button_target = $settings['button_link']['is_external'] ? ' target="_blank"' : ''; 
        $button_nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : ''; 
        } 
        ?> 
        <a class="text_btn" href="<?php echo esc_url($button_link);?>" 
        <?php echo esc_attr($button_target); ?> <?php echo esc_attr($button_nofollow); ?>> 
        <?php if($settings['button_icontypeone'] == 'fontawesome'): ?> 
            <?php if(!empty($settings['button_iconfontawe'])): ?> 
                <div class="icon"> <?php \Elementor\Icons_Manager::render_icon($settings['button_iconfontawe'], [ 'aria-hidden' => 'false' ]); ?> </div> <?php endif; ?> <?php // none end ?> <?php elseif($settings['button_icontypeone'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($settings['button_icontype'])): ?> <div class="icon"> <i class="<?php echo esc_attr($settings['button_icontype']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <small> <?php echo esc_html($settings['button_one']);?> </small> </a> <?php endif; ?> </div> <?php endif; ?> <?php if($settings['social_media_enable'] == true): ?> <?php if(!empty($settings['social_media_repeater'])): ?> <div class="content media"> <?php foreach($settings['social_media_repeater'] as $key => $media_repearter): ?> <?php if($media_repearter['social_media_icon']): ?> <a href="<?php echo esc_url($media_repearter['socail_media_link']['url']); ?>" target="_blank"> <i class="<?php echo esc_attr($media_repearter['social_media_icon']); ?>"></i> </a> <?php endif; ?> <?php endforeach;?> </div> <?php endif; ?> <?php endif; ?> </div> </div> </div> </div> <?php endif;?> <div class="header_main <?php echo esc_attr($settings['mode']); ?>"> <div class="<?php echo esc_attr($settings['header_layout']); ?>"> <nav class="inner_box"> <div class="lft_content"> <?php if (!empty($settings['logo_default']['url'])): ?> <div class="logo_box"> <a href="<?php echo esc_url($link); ?>" <?php if($settings['custom_link_enable'] == true): echo esc_attr($logo_target); echo esc_attr($logo_nofollow); endif; ?> class="logo navbar_brand"> <img src="<?php echo esc_url($settings['logo_default']['url']); ?>" alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default"> </a> </div> <?php else: ?> <div class="logo_box"> <a href="<?php echo esc_url($logo_else_link); ?>" class="logo navbar_brand"> <img src="<?php echo RISEHAND_ADDONS_URL . 'assets/image/logo-white.png' ?>" alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default"> </a> </div> <?php endif; ?> <?php if($settings['language_enable'] == true): ?> <?php if($settings['language_type'] == 'using_short_code'): ?> <div class="language_shortcode"> <?php echo do_shortcode($settings['language_shortcode']); ?> </div> <?php else: ?> <div class="language_content"> <div class="ldropdown"> <a class="title"> <i class="risehand-globe2"></i> <?php echo esc_attr($settings['lang_title']); ?> <i class="risehand-chevron-down"></i> </a> <?php if(!empty($settings['language_repeater'])): ?> <ul class="dropdown_menu"> <?php foreach($settings['language_repeater'] as $key => $lang_repeater): if(!empty($lang_repeater['language_text'])): $language_link = ""; $language_link_target = ""; $language_link_nofollow = ""; if(!empty($lang_repeater['language_link'])): $language_link = $lang_repeater['language_link']['url']; $language_link_target = $lang_repeater['language_link']['is_external'] ? ' target="_blank"' : ''; $language_link_nofollow = $lang_repeater['language_link']['nofollow'] ? ' rel="nofollow"' : ''; endif; ?> <li> <a href="<?php echo esc_url($language_link); ?>" <?php echo esc_attr($language_link_target); ?> <?php echo esc_attr($language_link_nofollow); ?>> <?php echo esc_attr($lang_repeater['language_text']); ?> </a> </li> <?php endif; ?> <?php endforeach; ?> </ul> <?php endif; ?> </div> </div> <?php endif; ?> <?php endif; ?> <?php if($settings['navigations_pos'] == "left"): ?> <div class="menu_area"> <?php if(!empty($settings['navigations'])): wp_nav_menu(array( 'menu' => $settings['navigations'], 'container' => false, 'menu_class' => 'navbar_nav', 'fallback_cb' => 'risehand_navwalker::fallback', 'walker' => new \risehand_navwalker() )); endif; ?> </div> <?php endif; ?> </div> <?php if($settings['navigations_pos'] == "center"): ?> <div class="menu_area"> <?php if(!empty($settings['navigations'])): wp_nav_menu(array( 'menu' => $settings['navigations'], 'container' => false, 'menu_class' => 'navbar_nav', 'fallback_cb' => 'risehand_navwalker::fallback', 'walker' => new \risehand_navwalker() )); endif; ?> </div> <?php endif; ?> <?php if($settings['language_enable'] == true): ?> <?php if($settings['language_type'] == 'using_short_code'): ?> <div class="language_shortcode d_block_in_small"> <?php echo do_shortcode($settings['language_shortcode']); ?> </div> <?php else: ?> <div class="language_content d_block_in_small"> <div class="ldropdown"> <a class="title"> <i class="risehand-globe2"></i> <?php echo esc_attr($settings['lang_title']); ?> <i class="risehand-chevron-down"></i> </a> <?php if(!empty($settings['language_repeater'])): ?> <ul class="dropdown_menu"> <?php foreach($settings['language_repeater'] as $key => $lang_repeater): if(!empty($lang_repeater['language_text'])): $language_link = ""; $language_link_target = ""; $language_link_nofollow = ""; if(!empty($lang_repeater['language_link'])): $language_link = $lang_repeater['language_link']['url']; $language_link_target = $lang_repeater['language_link']['is_external'] ? ' target="_blank"' : ''; $language_link_nofollow = $lang_repeater['language_link']['nofollow'] ? ' rel="nofollow"' : ''; endif; ?> <li> <a href="<?php echo esc_url($language_link); ?>" <?php echo esc_attr($language_link_target); ?> <?php echo esc_attr($language_link_nofollow); ?>> <?php echo esc_attr($lang_repeater['language_text']); ?> </a> </li> <?php endif; ?> <?php endforeach; ?> </ul> <?php endif; ?> </div> </div> <?php endif; ?> <?php endif; ?> <div class="rgt_content"> <?php if($settings['navigations_pos'] == "right"): ?> <div class="menu_area"> <?php if(!empty($settings['navigations'])): wp_nav_menu(array( 'menu' => $settings['navigations'], 'container' => false, 'menu_class' => 'navbar_nav', 'fallback_cb' => 'risehand_navwalker::fallback', 'walker' => new \risehand_navwalker() )); endif; ?> </div> <?php endif; ?> <div class="button_box_menu"> <div class="navbar_togglers"> <button class="navbar-burger"> <i class="risehand-menu1"></i> </button> </div> </div> <div class="right_content"> <?php if($settings['search_enable'] == true): ?> <div class="search-toggler"><i class="risehand-search1"></i></div> <?php endif;?> <?php if($settings['button_enable'] == true): ?> <div class="rg_con contact_btn"> <?php if(!empty($settings['button_text'])): $mbtn_link = '#'; $mbtn_target = ''; $mbtn_nofollow = ''; if (!empty( $settings['mbutton_link'])) { $mbtn_link = $settings['mbutton_link']['url']; $mbtn_target = $settings['mbutton_link']['is_external'] ? ' target="_blank"' : ''; $$mbtn_nofollow = $settings['mbutton_link']['nofollow'] ? ' rel="nofollow"' : ''; } ?> <a class="theme_btn one" href="<?php echo esc_url($mbtn_link);?>" <?php echo esc_attr($mbtn_target); ?> <?php echo esc_attr($mbtn_nofollow); ?>> <?php if($settings['mbutton_icontype'] == 'fontawesome'): ?> <?php if(!empty($settings['mbutton_iconfontawe'])): ?> <div class="icon"> <i class="<?php echo esc_attr($settings['mbutton_iconfontawe']); ?>"></i> </div> <?php endif; ?> <?php // none end ?> <?php elseif($settings['mbutton_icontype'] == 'none'): ?> <?php // none end ?> <?php else: ?> <?php if(!empty($settings['mbutton_icontypeone'])): ?> <div class="icon"> <i class="<?php echo esc_attr($settings['mbutton_icontypeone']); ?>"></i> </div> <?php endif; ?> <?php endif; ?> <?php echo esc_html($settings['button_text']);?> </a> <?php endif; ?> </div> <?php endif; ?> <?php if($settings['option_panel_enable'] == true): ?> <div class="site-header__sidemenu-nav side-menu__toggler"><i class="risehand-menu-circled"></i></div> <?php endif;?> </div> </div> </nav> </div> </div></header> <?php if($settings['option_panel_enable'] == true): $company_logo_modals = $settings['opt_panel_logo']; $about_company_modal = $settings['about_company_modal']; $form_enable = $settings['form_enable']; $form_title = $settings['form_title']; $contact_panel_enable = $settings['contact_panel_enable']; $mobile_phone_number = $settings['mobile_phone_number']; $mobile_mail_number = $settings['mobile_mail_number']; $working_hours_panels = $settings['working_hours_panels']; $copy_right_enable = $settings['copy_right_enable']; $copy_right_modal = $settings['copy_right_modal']; ?><div class="side-menu__block trans"> <div class="side-menu__block-overlay opt_cursor"></div> <div class="side-menu__block-inner trans scrollbarcolor"> <div class="opt_close_btn d_flex"><i class="risehand-cross1"></i></div> <div class="option_content"> <?php if(!empty($company_logo_modals['url']) || !empty($about_company_modal)): ?> <div class="log_bx"> <?php if(!empty($company_logo_modals['url'])): ?> <a href="<?php echo esc_url(home_url()); ?>" class="logo navbar-brand"> <img src="<?php echo esc_url($company_logo_modals['url']); ?>" alt="<?php echo esc_html(get_bloginfo( 'name' )); ?>" class="logo_default"> </a> <?php endif; ?> <?php if(!empty($about_company_modal)): ?> <div class="about_company pb_25"> <?php echo wp_kses($about_company_modal , $allowed_tags); ?> </div> <?php endif; ?> </div> <?php endif; ?> <div class="contnet_box"> <?php if($form_enable == true): ?> <div class="title_no_a_28 pb_20"> <?php echo wp_kses($form_title , wp_kses_allowed_html('post')); ?></div> <?php if(!empty($settings['form_short_code'])): ?> <div class="form_short pb_25"> <?php echo do_shortcode($settings['form_short_code']); ?> </div> <?php endif; ?> <?php endif; ?> <?php if($contact_panel_enable == true): ?> <div class="contact_panel pb_25"> <?php if(!empty($mobile_phone_number)): ?> <div class="c_pan"> <a class="a_c" href="tel:<?php echo esc_attr($mobile_phone_number); ?>"> <i class="risehand-phone"></i> <?php echo esc_attr($mobile_phone_number); ?> </a> </div> <?php endif; ?> <?php if(!empty($mobile_mail_number)): ?> <div class="c_pan mail"> <a class="a_c" href="mailto:<?php echo esc_attr($mobile_mail_number); ?>"> <i class="risehand-mail"></i> <?php echo esc_attr($mobile_mail_number); ?> </a> </div> <?php endif; ?> <?php if(!empty($working_hours_panels)): ?> <div class="c_pan"> <div class="a_c"> <i class="risehand-clock"></i> <?php echo wp_kses($working_hours_panels , $allowed_tags); ?> </div> </div> <?php endif; ?> </div> <?php endif; ?> <?php if($copy_right_enable == true): ?> <div class="c_pan coyrite"> <?php echo wp_kses($copy_right_modal , wp_kses_allowed_html('post')); ?> </div> <?php endif; ?> </div> </div> </div></div><?php endif; ?><?php if($settings['search_enable'] == true): do_action('risehand_search_popup_output'); endif; ?>
<?php
   }
}