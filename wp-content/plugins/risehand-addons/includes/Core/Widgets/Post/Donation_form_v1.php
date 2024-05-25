<?php

namespace  Risehandaddons\Core\Widgets\Post;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Donation_form_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-donation-form-v1';
    }

    public function get_title()
    {
        return __('Donation Form V1', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['103'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('donation_form_settings',
        [ 
            'label' => __('Donation Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        ); 
        $this->add_control(
            'donation_form_style',
            [
                'label' => __('Donation Form style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'risehand-addons' ),
                    'style_two'   => esc_html__( 'Style Two', 'risehand-addons' ),
                    'style_three'   => esc_html__( 'Style Three', 'risehand-addons' ),  
                ],
                'default' => 'style_one',
            ]
        ); 
        $this->add_control(
            'image_zero',
            [
                'label' => __( 'Image', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'donation_form_style' => 'style_two'
                ],
            ] 
        ); 
        $this->add_control(
            'title',
            [
               'label' => __('Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Raise Your Hand To The Poor Children Education For Better Future Life', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),   
               'condition' => [
                    'donation_form_style' => 'style_two'
                ], 
            ]
        );
        $this->add_control(
            'description',
            [
               'label' => __('Description', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('There is no better way than to donate your time to the education of impoverished children. Many children NGOs are also providing tuition for them where you can volunteer or donate money.', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),   
               'condition' => [
                    'donation_form_style' => 'style_two'
                ], 
            ]
        );
        $this->add_control(
			'content',
			[
				'label' => esc_html__( 'Html Content', 'risehand-addons' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'risehand-addons' ),
				'placeholder' => esc_html__( 'Type your description here', 'risehand-addons' ),
                'condition' => [
                    'donation_form_style' => 'style_three'
                ], 
			]
		);
        $this->add_control(
            'disable_break',
           [
              'label' => __('Break Word Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
               'condition' => [
                    'donation_form_style' => 'style_three'
                ], 
           ]
        ); 
        $this->add_control(
            'form_id', 
			[
            'type' => \Elementor\Controls_Manager::SELECT,
			'label' => esc_html__('Select Donations Forms', 'risehand-addons'),
			'options' => risehand_common_query('give_forms'),
			]
        ); 
        $this->add_control(
            'title_enable',
           [
              'label' => __('Title  Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
               'condition' => [
                'donation_form_style' => 'style_one'
                ], 
           ]
        );
        $this->add_control(
            'show_goal',
           [
              'label' => __('Show Goal Enable / Disable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
           ]
        );
        $this->add_control(
            'show_content',
            [
                'label' => __('Show Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'above'   => esc_html__( 'Above', 'risehand-addons' ),
                    'below'   => esc_html__( 'Below', 'risehand-addons' ),
                    'none'   => esc_html__( 'None', 'risehand-addons' ),  
                ],
                'default' => 'below',
                'condition' => [
                    'donation_form_style' => 'style_one'
                ], 
            ]
        );
        $this->add_control(
            'display_style',
            [
                'label' => __('Display style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'modal'   => esc_html__( 'Modal', 'risehand-addons' ),
                    'button'   => esc_html__( 'Button', 'risehand-addons' ),
                    'reveal'   => esc_html__( 'Reveal', 'risehand-addons' ),  
                    'none' => esc_html__( 'None', 'risehand-addons' ),  
                ],
                'default' => 'reveal',  
            ]
        ); 
        
        $this->end_controls_section();
        $this->start_controls_section('dontation_form_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'bgcolos',
             [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_two , {{WRAPPER}} .give_forms_section_three ' => 'background: {{VALUE}};', 
                ],
                'condition' => [
                    'donation_form_style' =>  ['style_two' , 'style_three']
                ], 
             ]
        );   
        $this->add_control(
			'stylezero',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-form-title  , {{WRAPPER}} .give_forms_section_two .title_no_a_30 ' => 'color: {{VALUE}};', 
                ],
                'condition' => [
                    'donation_form_style' => ['style_one' , 'style_two']
                ], 
             ]
        );   
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'ctit_typo',
				'selector' => '{{WRAPPER}} .give-form-title , {{WRAPPER}} .give_forms_section_two .title_no_a_30',
                'condition' => [
                    'donation_form_style' => ['style_one' , 'style_two']
                ], 
			]
		); 
        $this->add_control(
            'd_color',
             [
                'label' => __('Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_two .desc_p , {{WRAPPER}} .give_forms_section_three .description_box 
                    , {{WRAPPER}} .give_forms_section_three .description_box p , {{WRAPPER}} .give_forms_section_three .description_box h1
                    , {{WRAPPER}} .give_forms_section_three .description_box h2  , {{WRAPPER}} .give_forms_section_three .description_box h3
                    , {{WRAPPER}} .give_forms_section_three .description_box h4  , {{WRAPPER}} .give_forms_section_three .description_box h5
                    , {{WRAPPER}} .give_forms_section_three .description_box h6  , {{WRAPPER}} .give_forms_section_three .description_box ul li 
                    , {{WRAPPER}} .give_forms_section_three .description_box a ' => 'color: {{VALUE}};', 
                ],
                'condition' => [
                    'donation_form_style' => ['style_three' , 'style_two']
                ], 
             ]
        );   
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Content Typography', 'risehand-addons' ),
				'name' => 'd_typo',
				'selector' => '{{WRAPPER}} .give_forms_section_two .desc_p , {{WRAPPER}} .give_forms_section_three .description_box 
                , {{WRAPPER}} .give_forms_section_three .description_box p , {{WRAPPER}} .give_forms_section_three .description_box h1
                , {{WRAPPER}} .give_forms_section_three .description_box h2  , {{WRAPPER}} .give_forms_section_three .description_box h3
                , {{WRAPPER}} .give_forms_section_three .description_box h4  , {{WRAPPER}} .give_forms_section_three .description_box h5
                , {{WRAPPER}} .give_forms_section_three .description_box h6  , {{WRAPPER}} .give_forms_section_three .description_box ul li 
                , {{WRAPPER}} .give_forms_section_three .description_box a',
                'condition' => [
                    'donation_form_style' => ['style_three' , 'style_two']
                ], 
			]
		);  
        $this->add_control(
			'stylez2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
                'condition' => [
                    'donation_form_style' => ['style_three' , 'style_two']
                ], 
			]
		); 
        $this->add_control(
            'br_color',
             [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_three .form ' => 'border-color: {{VALUE}};', 
                ],
                'condition' => [
                    'donation_form_style' => ['style_three']
                ], 
             ]
        );  
        $this->add_control(
			'style1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'progress_color',
             [
                'label' => __('Progress Bar bg Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-goal-progress .give-progress-bar ' => 'background: {{VALUE}};', 
                ],
             ]
        ); 
        $this->add_control(
            'progress_a_color',
             [
                'label' => __('Progress Bar bg AActive Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-goal-progress .give-progress-bar span ' => 'background: linear-gradient(180deg, {{VALUE}} 0%, {{VALUE}} 100%), linear-gradient(180deg, #fff 0%, #ccc 100%)!important;', 
                ],
             ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Progress Bar Typography', 'risehand-addons' ),
				'name' => 'ctit_typos',
				'selector' => '{{WRAPPER}} .give-goal-progress .income , {{WRAPPER}} .give-goal-progress .goal-text , {{WRAPPER}} .give-goal-progress .raised',
			]
		); 
        $this->add_control(
            'progress_color1',
             [
                'label' => __('Progress Color 1', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-goal-progress .income  ' => 'color:  {{VALUE}};', 
                ],
             ]
        ); 
        $this->add_control(
            'progress_color2',
             [
                'label' => __('Progress Color 2', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-goal-progress .goal-text ' => 'color:  {{VALUE}};', 
                ],
             ]
        ); 
        $this->add_control(
            'progress_color13',
             [
                'label' => __('Progress Color 3', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-goal-progress .raised ' => 'color:  {{VALUE}};', 
                ],
             ]
        ); 
        $this->add_control(
			'style2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'give_notice_border_iconcolor',
             [
                'label' => __('Notice Warning Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_warning:before  ' => 'background:  {{VALUE}};', 
                    '{{WRAPPER}} .give_warning  ' => 'border-color:  {{VALUE}};', 
                ],
             ]
        ); 
        $this->add_control(
            'give_notice_bgclor',
             [
                'label' => __('Notice Warning Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_warning  ' => 'background:  {{VALUE}};',  
                ],
             ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Notice Bar Typography', 'risehand-addons' ),
				'name' => 'notivetypos',
				'selector' => '{{WRAPPER}} .give_warning',
			]
		); 
        $this->add_control(
            'give_notice_clor',
             [
                'label' => __('Notice Warning Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_warning p  , {{WRAPPER}} .give_warning p  strong ' => 'color:  {{VALUE}};',  
                ],
             ]
        );
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Form Typography', 'risehand-addons' ),
				'name' => 'notivetypo',
				'selector' => '{{WRAPPER}} .give_warning',
			]
		); 
        $this->add_control(
            'give_imput_color',
             [
                'label' => __('Form Input  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} form[id*=give-form] .give-donation-amount #give-amount, 
                    {{WRAPPER}}  form[id*=give-form] .give-donation-amount #give-amount-text ,
                    {{WRAPPER}} .give-donation-amount .give-currency-symbol  ' => 'color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'give_imputbr_color',
             [
                'label' => __('Form Input Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} form[id*=give-form] .give-donation-amount #give-amount, 
                    {{WRAPPER}}  form[id*=give-form] .give-donation-amount #give-amount-text ,
                    {{WRAPPER}} .give-donation-amount .give-currency-symbol ' => 'border-color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'give_imputbg_color',
             [
                'label' => __('Form Input Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} form[id*=give-form] .give-donation-amount #give-amount, 
                    {{WRAPPER}}  form[id*=give-form] .give-donation-amount #give-amount-text ,
                    {{WRAPPER}} .give-donation-amount .give-currency-symbol  ' => 'background:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
			'style4',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Price Button Typography', 'risehand-addons' ),
				'name' => 'pribtntypo',
				'selector' => '{{WRAPPER}} .give-donation-levels-wrap button.give-donation-level-btn',
			]
		); 
        $this->add_control(
            'pribtntypocolor',
             [
                'label' => __('Price Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-donation-level-btn  ' => 'color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'pribtnbgc',
             [
                'label' => __('Price Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-donation-level-btn ' => 'border-color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'pribtnbor',
             [
                'label' => __('Price Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-donation-level-btn  ' => 'background:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'apribtntypocolor',
             [
                'label' => __('Active Price Button Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-btn-level-0  ' => 'color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'apribtnbgc',
             [
                'label' => __('Active Price Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-btn-level-0 ' => 'border-color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'apribtnbor',
             [
                'label' => __('Active Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give-donation-levels-wrap button.give-btn-level-0  ' => 'background:  {{VALUE}}!important;',  
                ],
             ]
        );
        
       
        $this->add_control(
			'style6',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
                'condition' => [
                    'display_style' => 'reveal'
                ], 
			]
		); 
        $this->add_control(
            'revalonecolor',
             [
                'label' => __('Form Reveal Tile / Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_one legend  ' => 'color:  {{VALUE}}!important;',  
                ],
                'condition' => [
                    'display_style' => 'reveal'
                ], 
             ]
        );
        $this->add_control(
            'revaltwocolor',
             [
                'label' => __('Form Reveal Label Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_one label , {{WRAPPER}} .give-donation-submit .give-donation-total-label  ,
                    {{WRAPPER}} .give-donation-submit .give-final-total-amount , {{WRAPPER}} .give-tooltip ' => 'color:  {{VALUE}}!important;',  
                ],
                'condition' => [
                    'display_style' => 'reveal'
                ], 
             ]
        );
        $this->add_control(
            'revalthreecolor',
             [
                'label' => __('Input Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #give_purchase_form_wrap input , {{WRAPPER}} #give_purchase_form_wrap .give-payment-mode-label ,
                    #give_purchase_form_wrap legend , #give-payment-mode-select legend , {{WRAPPER}} #give-payment-mode-select input[type=radio] ' => 'border-color:  {{VALUE}}!important;',  
                ],
                'condition' => [
                    'display_style' => 'reveal'
                ], 
             ]
        );
        $this->add_control(
            'revalfourcolor',
             [
                'label' => __('Input Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section_one #give_purchase_form_wrap input , {{WRAPPER}} .give_forms_section_one #give-payment-mode-select input[type=radio]  ' => 'background:  {{VALUE}}!important;',  
                ],
                'condition' => [
                    'display_style' => 'reveal'
                ], 
             ]
        );
        $this->add_control(
            'revalfivescolor',
             [
                'label' => __('Input  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  form.give-form .form-row input , {{WRAPPER}} form.give-form .form-row input::placeholder  ' => 'color:  {{VALUE}}!important;',  
                ],
                'condition' => [
                    'display_style' => 'reveal'
                ], 
             ]
        ); 
        $this->add_control(
			'style5',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		); 
        $this->add_control(
            'givebtncolor',
             [
                'label' => __('Button  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  #give_purchase_form_wrap .give-btn ,
                    {{WRAPPER}}   .give-btn ' => 'color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'givebtnbrcolor',
             [
                'label' => __('Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  #give_purchase_form_wrap .give-btn ,
                    {{WRAPPER}}    .give-btn ' => 'border-color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'givebtnbgcolor',
             [
                'label' => __('Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}   #give_purchase_form_wrap .give-btn ,
                    {{WRAPPER}}   .give-btn  ' => 'background:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'hgivebtncolor',
             [
                'label' => __('Hover Button  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  #give_purchase_form_wrap .give-btn:hover ,
                    {{WRAPPER}}   .give-btn:hover  ' => 'color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'hgivebtnbrcolor',
             [
                'label' => __('Hover Button Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}   #give_purchase_form_wrap .give-btn:hover ,
                    {{WRAPPER}}    .give-btn:hover ' => 'border-color:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->add_control(
            'hgivebtnbgcolor',
             [
                'label' => __('Hover Button Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}   #give_purchase_form_wrap .give-btn:hover  ,
                    {{WRAPPER}}  .give-btn:hover ' => 'background:  {{VALUE}}!important;',  
                ],
             ]
        );
        $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post');
$form_id = "";
if(!empty($settings['form_id'])){
    $form_id = $settings['form_id'];
}
$show_goal  = "false";
if($settings['show_goal'] == true){
    $show_goal  =  "true"; 
}
$display_style  = isset($settings['display_style']) ? $settings['display_style'] : '';
$disable_break  = isset($settings['disable_break']) ? $settings['disable_break'] : '';
$image_zeros = '';
$alt_image_zeros = '';
if (!empty($settings['image_zero']['url'])) {
    $image_zeros = $settings['image_zero']['url'];
    $alt_image_zeros = get_post_meta($settings['image_zero'], '_wp_attachment_image_alt', true);
    $alt_image_zeros = !empty($alt_image_zeros) ? $alt_image_zeros : 'slider-image-one';
}
?>   
<?php if($settings['donation_form_style'] == "style_two"): ?> <section class="give_forms_section_two d_flex"> <?php if(!empty($image_zeros)): ?> <div class="image img_obj_fit_center"> <img src="<?php echo esc_url($image_zeros); ?>" class="img" alt="<?php echo esc_attr($alt_image_zeros); ?>" data-swiper-parallax-x="-160%" data-swiper-parallax-opacity="0" /> </div> <?php endif; ?> <div class="form_box"> <?php if(!empty($settings['title'])): ?> <div class="title title_no_a_30 mb_15"><?php echo esc_attr($settings['title']); ?></div> <?php endif; ?> <?php if(!empty($settings['title'])): ?> <p class="desc_p mb_30"><?php echo esc_attr($settings['description']); ?></p> <?php endif; ?> <div class="form"> <?php $settings_form = array( 'id' => $form_id, 'show_title' => false, 'show_content' => 'none', 'display_style' => 'modal', 'show_goal' => $show_goal, 'continue_button_title' => '' ); echo give_get_donation_form( $settings_form ); ?> </div> </div> </section> <?php elseif($settings['donation_form_style'] == "style_three"): ?> <section class="give_forms_section_three <?php if($disable_break == true): ?> disable_bwords<?php endif; ?>"> <div class="form_box"> <?php if(!empty($settings['content'])):?> <div class="description_box"> <?php echo $settings['content']; ?> </div> <?php endif; ?> <div class="form"> <?php $settings_form = array( 'id' => $form_id, 'show_title' => false, 'show_content' => 'none', 'display_style' => 'modal', 'show_goal' => $show_goal, 'continue_button_title' => '' ); echo give_get_donation_form( $settings_form ); wp_reset_postdata(); return; ?> </div> </div> </section> <?php else: ?> <section class="give_forms_section_one"> <?php $title_enable = false; if($settings['title_enable'] == true){ $title_enable = true; } $show_content = isset($settings['show_content']) ? $settings['show_content'] : ''; $settings_form = array( 'id' => $form_id, 'show_title' => $title_enable, 'show_goal' => $show_goal, 'show_content' => $show_content, 'display_style' => $display_style, 'continue_button_title' => '' ); echo give_get_donation_form( $settings_form ); ?> </section> <?php endif; ?>
<?php 
}
}