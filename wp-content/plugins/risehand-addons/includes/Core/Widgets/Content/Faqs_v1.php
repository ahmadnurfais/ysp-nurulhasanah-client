<?php
   
namespace  Risehandaddons\Core\Widgets\Content;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

   class Faqs_v1 extends \Elementor\Widget_Base
   {
   
       public function get_name()
       {
           return 'risehand-faqs-v1';
       }
   
       public function get_title()
       {
           return __('Faqs V1', 'risehand-addons');
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
            $this->start_controls_section('faq_settings',
            [ 
               'label' => __('Faq Settings', 'risehand-addons')
            ]
            ); 
            $this->add_control(
                'faq_type',
                [
                    'label' => __('Faqs Type', 'risehand-addons'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => [
                        'type_one'  => __( 'Type One', 'risehand-addons' ),
                        'type_two' => __( 'Type Two', 'risehand-addons' ),
                    ],
                    'default' => __('type_one' , 'risehand-addons'),
                ]
            ); 
            $repeater = new \Elementor\Repeater(); 
            $repeater->add_control(
                'icontype',
                [
                    'label' => __('Faqs Type', 'risehand-addons'),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'options' => [
                        'custom'  => __( 'Risehand Custom Icons', 'risehand-addons' ),
                        'fontawesome' => __( 'Font Awesome 5', 'risehand-addons' ),
                    ],
                    'default' => __('custom' , 'risehand-addons'),
                ]
            ); 
            $repeater->add_control(
               'icon_fonts',
               [
                   'label' => __('Faqs Icon', 'risehand-addons'),
                   'type' => \Elementor\Controls_Manager::ICON,
                   'options' => get_risehand_icons(),
                   'default' => __('risehand-chevron-right' , 'risehand-addons'),
                   'condition' => [ 
                    'icontype' => ['custom'],
                    ]
               ]
            ); 
            $repeater->add_control(
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
                        'icontype' => ['fontawesome'],
                    ]
                ]
            );
    
            $repeater->add_control(
               'faqsheading_text',
               [
                   'label' => __('Faqs Heading', 'risehand-addons'),
                   'type' => \Elementor\Controls_Manager::TEXTAREA,
                   'default' => __('How do I make a yearly payment? ', 'risehand-addons'),
                   'placeholder' => __('How do I make a yearly payment?', 'risehand-addons'),
               ]
            ); 
            $repeater->add_control(
               'faqsdescription',
               [
                   'label' => __('Faqs Description', 'risehand-addons'),
                   'type' => \Elementor\Controls_Manager::TEXTAREA,
                   'default' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                   'placeholder' => __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
               ]
            ); 
            $repeater->add_control(
             'hrfourre',
                [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
                    
                ]
            ); 
            $repeater->add_control(
             'faqs_active_tbs',
                [
                'label' => __('Faq Active / Deactive', 'risehand-addons'),
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => __('Yes', 'risehand-addons'),
                    'label_off' => __('No', 'risehand-addons'),
                    'return_value' => 'yes',
                    'default' => 'no',
                ]
            ); 
           $this->add_control(
               'faqs_v1_repeater',
               [
                   'label' => __('Faqs Box Content', 'risehand-addons'),
                   'type' => \Elementor\Controls_Manager::REPEATER,
                   'fields' => $repeater->get_controls(),
                   'default' => [
                       [
                        'faq_icons' =>  __('risehand-chevron-right', 'risehand-addons'),
                        'faqsheading_text' =>  __('How do I make a yearly payment?', 'risehand-addons'),
                        'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.'),
                        'faqs_active_tbs' => 'yes',
                        ],
                       [
                        'faq_icons' =>  __('risehand-chevron-right', 'risehand-addons'),
                        'faqsheading_text' =>  __('How this technology works?', 'risehand-addons'),
                        'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                        'faqs_active_tbs' => 'no',
                        ],
                        [
                        'faq_icons' =>  __('risehand-chevron-right', 'risehand-addons'),
                        'faqsheading_text' =>  __('What is the comunity benefit?', 'risehand-addons'),
                        'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                        'faqs_active_tbs' => 'no',
                        ],
                        [
                        'faq_icons' =>  __('risehand-chevron-right', 'risehand-addons'),
                        'faqsheading_text' =>  __('What is the comunity benefit?', 'risehand-addons'),
                        'faqsdescription' =>  __('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons'),
                        'faqs_active_tbs' => 'no',
                        ],
                   ],
                   'title_field' => '{{{ faqsheading_text }}}',
   	
               ]
           );
    
    $this->end_controls_section();

    
    $this->start_controls_section('faqscss',
    [ 
        'label' => __('Custom Css', 'risehand-addons'),
        'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
    ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Title Typography', 'risehand-addons' ),
            'name' => 'titletypo',
            'selector' => '{{WRAPPER}} .block_faq .faq_header .question_box .title_no_a_22', 
        ]
    );
    $this->add_control(
        'title_color',
         [
            'label' => __('Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .faq_header .question_box .title_no_a_22 ' => 'color: {{VALUE}};',
            ],
         ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'label' => esc_html__( ' Description Typography', 'risehand-addons' ),
            'name' => 'desctypo',
            'selector' => '{{WRAPPER}} .block_faq   .answer',
       
        ]
    );
    $this->add_control(
        'content_color',
         [
            'label' => __('Content Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .answer' => 'color: {{VALUE}};',
            ],
         ]
    );

    $this->add_control(
        'arrow_color',
         [
            'label' => __('Arrow Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .faq_header .question_box .icon_fq ' => 'color: {{VALUE}};',
            ],
         ]
    ); 
    $this->add_control(
        'background_color',
         [
            'label' => __('Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion-box .accordion' => 'background: {{VALUE}};',
            ], 
         ]
    );
    $this->add_control(
        'border_color',
         [
            'label' => __('Border Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion-box .accordion' => 'border-color: {{VALUE}}',
            ],
         ]
    );
    $this->add_control(
        'chr3',
        [
            'type' => \Elementor\Controls_Manager::DIVIDER, 
            'condition' => [
                'subscribe_style_two' => 'style_one',
            ],
        ]
    );
    $this->add_control(
        'acarrow_color',
         [
            'label' => __('Active / Hover Arrow Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion-box .faq_header.active .question_box .icon_fq , {{WRAPPER}} .block_faq .faq_header:hover .question_box .icon_fq ' => 'color: {{VALUE}};',
            ],
         ]
    );
    $this->add_control(
        'hobtiy_color',
         [
            'label' => __('Hover / Active Title Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion.active-block .title_no_a_22  , {{WRAPPER}} .block_faq .accordion:hover .title_no_a_22' => 'color: {{VALUE}};',
            ], 
         ]
    );
  
    $this->add_control(
        'hobackground_color',
         [
            'label' => __('Hover / Active Background Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion.active-block , {{WRAPPER}} .block_faq .accordion:hover ' => 'background: {{VALUE}};',
            ], 
         ]
    );
    $this->add_control(
        'border_hover_color',
         [
            'label' => __('Border Hover Color', 'risehand-addons'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .block_faq .accordion.active-block , {{WRAPPER}} .block_faq .accordion:hover' => 'border-color: {{VALUE}}',
            ], 
         ]
    );    
   
$this->end_controls_section();

}
    protected function render(){
    $settings = $this->get_settings_for_display();
    $allowed_tags = wp_kses_allowed_html('post');
    ?> 
<section class="block_faq <?php echo esc_attr($settings['faq_type']); ?>"> <div class="accordion-box"> <?php if(!empty($settings['faqs_v1_repeater'])): foreach($settings['faqs_v1_repeater'] as $key => $faqs_block):  $faqs_active_tb  = ! empty( $faqs_block['faqs_active_tbs'] ) ? $faqs_block['faqs_active_tbs'] : ''; ?><div class="accordion trans<?php if($faqs_active_tb == 'yes'): echo esc_attr(' active-block'); endif;?>"><div class="question faq_header<?php if($faqs_active_tb == 'yes'): echo  esc_attr(' active'); endif;?>"><div class="question_box trans align-items-center d_flex"><div class="title_no_a_22 trans"><?php echo wp_kses($faqs_block['faqsheading_text'] , $allowed_tags);?></div><?php if($faqs_block['icontype'] == 'custom'): ?><div class="icon"><span class="<?php echo esc_html( $faqs_block['icon_fonts']); ?> icon_fq"></span></div><?php endif; ?><?php if($faqs_block['icontype'] == 'fontawesome'): ?><?php if(!empty($faqs_block['icon_fontawesome'])): ?><div class="icon"><?php \Elementor\Icons_Manager::render_icon($settings['icon_fontawesome'], [ 'aria-hidden' => 'false' ]); ?></div><?php endif; ?><?php endif; ?></div> </div><div class="answer accordion-content <?php if($faqs_active_tb == 'yes'): echo  esc_attr(' current'); endif;?>"><?php echo wp_kses($faqs_block['faqsdescription'] , $allowed_tags);?></div></div><?php endforeach; endif;?> </div></section>

<?php
}
}
 