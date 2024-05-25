<?php

namespace Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Contact_box_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-contact-box-v1';
    } 
    public function get_title()
    {
        return __('Contact Box V1', 'risehand-addons');
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
            'contact_box_styles',
            [
                'label' => __('Contact Box Style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
					'style_one'  => __( 'Style One', 'risehand-addons' ),
                    'style_two' => __( 'Style Two', 'risehand-addons' ), 
				],
                'default' => __('style_one' , 'risehand-addons'),
            ]
        ); 
        $this->add_control(
            'tag_type',
            [
            'label' => __('Heading Tag', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'div' => __( 'Div Tag', 'risehand-addons' ),
                'h1' => __( 'H1 Tag', 'risehand-addons' ),
                'h2' => __( 'H2 Tag', 'risehand-addons' ),
                'h3' => __( 'H3 Tag', 'risehand-addons' ),
                'h4' => __( 'H4 Tag', 'risehand-addons' ),
                'h5' => __( 'H5 Tag', 'risehand-addons' ),
                'h6' => __( 'H6 Tag', 'risehand-addons' ),
            ],
            'default' => 'div' , 
            ]
        ); 
        $this->add_control(
            'icon_enable',
            [
                'label' => esc_html__( 'Icon Enable  / Disable', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'risehand-addons' ),
                'label_off' => esc_html__( 'No', 'risehand-addons' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'contact_box_styles' => 'style_two',
                ]
            ]
        );
        $this->add_control(
            'box_color',
            [
                'label' => __('Contact Box Style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
					'dark'  => __( 'Dark', 'risehand-addons' ),
                    'light' => __( 'Light', 'risehand-addons' ), 
				],
                'default' => 'dark',
                'condition' => [
                    'contact_box_styles' => 'style_two',
                ]
            ]
        );
        $this->add_control(
            'contact_image',
            [
                'label' => __( 'Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'contact_box_styles' => 'style_two',
                ]
            ] 
        );
        $this->add_control(
            'icontype',
            [
                'label' => esc_html__( 'Icon Type', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'custom' => esc_html__( 'Risehand Icons', 'risehand-addons' ),
                    'fontawesomes'  => esc_html__( 'Icon', 'risehand-addons' ), 
                    'icon_image_enable' => esc_html__( 'Image', 'risehand-addons' ),
                    'disable_icon'  => esc_html__( 'Disable', 'risehand-addons' ), 
                ], 
                'default' => 'custom',  
                'condition' => [
                    'contact_box_styles' => 'style_one',
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
                'label' => __('Icons', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'fa-brands',
                ],
                'label_block' => true,
                'condition' => [ 
                    'icontype' => 'fontawesomes' ,
                ]
            ]
        );

        $this->add_control(
            'heading',
            [
                'label' => __('Contact Heading', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('General Enquires', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        ); 
        $this->add_control(
            'address_title',
            [
                'label' => __('Address Title', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Find Us', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'address',
            [
                'label' => __('Address', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('575 Main Street, D-block, 2nd floor, South Africa', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'mail_title',
            [
                'label' => __('Mail Title', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Find Us', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'mail',
            [
                'label' => __('Mail Id', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('sendmail@qetus.com', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'phone_title',
            [
                'label' => __('Phone Title', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Call Us', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        );
        $this->add_control(
            'phone',
            [
                'label' => __('Phone Number', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('+98 060 712 34', 'risehand-addons'),
                'placeholder' => __('Type your text here', 'risehand-addons'),
            ]
        ); 
        $this->end_controls_section();

        $this->start_controls_section('contact_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'box_bg_color',
            [
                'label' => esc_html__( 'Box Background Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one ' => 'background: {{VALUE}}',
                ],
                'condition' => [
                    'contact_box_styles' => 'style_one',
                ]
            ]
        ); 
        $this->add_control(
            'box_br_color',
            [
                'label' => esc_html__( 'Box Border Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one  , {{WRAPPER}} .contact_style_one .common ' => 'border-color: {{VALUE}}',
                ],
                'condition' => [
                    'contact_box_styles' => 'style_one',
                ]
            ]
        ); 
        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one .icon_box i , {{WRAPPER}} .contact_style_one .icon_box span  , 
                    {{WRAPPER}} .contact_style_two .common i   ' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .contact_style_one .icon_box svg path  ' => 'fill: {{VALUE}}',

                ],
            ]
        );
        $this->add_control(
            'pattern_color',
            [
                'label' => esc_html__( 'Pattern Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one .icon_box .spattern_bg ' => 'background: {{VALUE}}',
                ],
                'condition' => [
                    'contact_box_styles' => 'style_one',
                ]
            ]
        ); 
        $this->add_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one .font_special' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'contact_box_styles' => 'style_one',
                ]
            ]
        ); 
        $this->add_group_control( 
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
                'name' => 'title_typography' ,
                'selector' =>  '{{WRAPPER}} .contact_style_one .font_special' ,
                'condition' => [
                    'contact_box_styles' => 'style_one',
                ]
            ]
        );
        $this->add_control(
            'c_title_color',
            [
                'label' => esc_html__( 'Contact Title Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one .common .title_no_a_20 , {{WRAPPER}} .contact_style_two .common .title_no_a_20 ' => 'color: {{VALUE}}',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Contact Title Typography', 'risehand-addons' ),
                'name' => 'c_title_typography' ,
                'selector' =>   '{{WRAPPER}} .contact_style_one .common .title_no_a_20  , {{WRAPPER}} .contact_style_two .common .title_no_a_20 ' ,
          
            ]
        ); 
        $this->add_control(
            'cc_title_color',
            [
                'label' => esc_html__( 'Contact  Color', 'risehand-addons' ),
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact_style_one .common p , {{WRAPPER}} .contact_style_one .common p a ,
                    {{WRAPPER}} .contact_style_two .common p, {{WRAPPER}} .contact_style_two .common p a' => 'color: {{VALUE}}',
                ],
            ]
        ); 
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'label' => esc_html__( 'Contact  Typography', 'risehand-addons' ),
                'name' => 'cc_title_typography' ,
                'selector' =>   '{{WRAPPER}} .contact_style_one .common p , {{WRAPPER}} .contact_style_one .common p a ' ,
          
            ]
        ); 
    $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();  
$allowed_tags = wp_kses_allowed_html('post');
?>
<?php if($settings['contact_box_styles'] == 'style_two'): ?><div class="contact_style_two trans <?php echo esc_attr($settings['box_color']); ?>"><?php $contact_image = '';$alt_contact_image = '';if (!empty($settings['contact_image']['url'])) {$contact_image = $settings['contact_image']['url'];$alt_contact_image =  $settings['contact_image']['alt'];$alt_contact_image = !empty($alt_contact_image) ? $alt_contact_image : 'slider-image-two';}if(!empty($contact_image)): ?><div class="image"> <img src="<?php echo esc_url($contact_image); ?>" class="img-fluid" alt="<?php echo esc_attr($alt_contact_image); ?>" /> </div><?php endif; ?><div class="contnet"> <?php if(!empty($settings['address_title']) || !empty($settings['address'])):?><div class="address d_flex common"><?php if(!empty($settings['icon_enable'])): ?><i class="risehand-map-pin"></i><?php endif; ?><div class="outer"><?php if(!empty($settings['address_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['address_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['address'])):?><p><?php echo wp_kses($settings['address'] , $allowed_tags) ?></p><?php endif; ?></div></div><?php endif; ?><?php if(!empty($settings['mail_title']) || !empty($settings['mail'])):?><div class="mail common d_flex"><?php if(!empty($settings['icon_enable'])): ?><i class="risehand-mail"></i><?php endif; ?><div class="outer"><?php if(!empty($settings['mail_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['mail_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['mail'])):?><p><a href="mailto:<?php echo esc_attr($settings['mail']) ?>"><?php echo esc_attr($settings['mail']) ?></a></p><?php endif; ?></div> </div> <?php endif; ?><?php if(!empty($settings['phone_title']) || !empty($settings['phone'])):?><div class="phone common d_flex"><?php if(!empty($settings['icon_enable'])): ?><i class="risehand-phone"></i><?php endif; ?><div class="outer"><?php if(!empty($settings['phone_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['phone_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['phone'])):?><p><a href="mailto:<?php echo esc_attr($settings['phone']) ?>"><?php echo esc_attr($settings['phone']) ?></a></p><?php endif; ?></div> </div> <?php endif; ?> </div></div><?php else: ?> <div class="contact_style_one trans"><div class="contact_box_inner <?php if(!empty($settings['icon_fonts'])): ?> icon_yes <?php endif; ?>"><?php if($settings['icontype'] != 'disable_icon'): ?><div class="icon_box<?php if( $settings['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"><div class="spattern_bg mask_image" style="mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>); -webkit-mask-image: url(<?php echo  RISEHAND_ADDONS_URL . 'assets/image/slider-2/mask-3.png' ?>);"></div><?php if( $settings['icontype'] == 'icon_image_enable'): $icon_images = '';$alt_icon_images = '';if (!empty($settings['icon_images']['url'])) {$icon_images = $settings['icon_images']['url'];$alt_icon_images =  $settings['icon_images']['alt'];$alt_icon_images = !empty($alt_icon_images) ? $alt_icon_images : 'icon-img';}if(!empty($icon_images)): ?><div class="icon"> <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($alt_icon_images); ?>" /> </div><?php endif; ?><?php endif; ?><?php if($settings['icontype'] == 'custom'): ?><div class="icon"><span class="<?php echo esc_html( $settings['icon_fonts']); ?>"></span></div><?php endif; ?><?php if($settings['icontype'] == 'fontawesomes'): ?><?php if(!empty($settings['icon_fontawesome'])): ?><div class="icon"><?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?></div> <?php endif; ?><?php endif; ?> </div><?php endif; ?> <div class="contnet"><?php if(!empty($settings['heading'])):?><div class="font_special"> <?php echo wp_kses($settings['heading'] , $allowed_tags) ?> </div><?php endif; ?> <?php if(!empty($settings['address_title']) || !empty($settings['address'])):?><div class="address common"><?php if(!empty($settings['address_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['address_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['address'])):?><p><?php echo wp_kses($settings['address'] , $allowed_tags) ?></p><?php endif; ?> </div><?php endif; ?><?php if(!empty($settings['mail_title']) || !empty($settings['mail'])):?><div class="mail common"><?php if(!empty($settings['mail_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['mail_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['mail'])):?><p><a href="mailto:<?php echo esc_attr($settings['mail']) ?>"><?php echo esc_attr($settings['mail']) ?></a></p><?php endif; ?> </div> <?php endif; ?><?php if(!empty($settings['phone_title']) || !empty($settings['phone'])):?><div class="phone common"><?php if(!empty($settings['phone_title'])):?><<?php echo esc_attr($settings['tag_type']); ?> class="title_no_a_20"><?php echo wp_kses($settings['phone_title'] , $allowed_tags) ?></<?php echo esc_attr($settings['tag_type']); ?>><?php endif; ?><?php if(!empty($settings['phone'])):?><p><a href="mailto:<?php echo esc_attr($settings['phone']) ?>"><?php echo esc_attr($settings['phone']) ?></a></p><?php endif; ?> </div> <?php endif; ?> </div></div></div><?php endif; ?>

<?php
}
}