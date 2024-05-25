<?php
add_action( 'vc_before_init', 'vc_faqs_v1_vcmap' );
function vc_faqs_v1_vcmap() {
 vc_map( array(
  "name" => __( "Faqs V1", "risehand-addons" ),
  "base" => "vc_faqs_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(  
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Faqs Styles', 'risehand-addons' ),
        'param_name' => 'faq_type',
        'value'      => array(
            esc_html__( 'Style One', 'risehand-addons' )  => 'type_one',
            esc_html__( 'Style Two', 'risehand-addons' )  => 'type_two',
        ),
        'default' => 'type_one',
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Heading Tag Type', 'risehand-addons' ),
        'param_name' => 'tag_type',
        'value'      => array(
            esc_html__( 'Div', 'risehand-addons' )  => 'div',
            esc_html__( 'H1', 'risehand-addons' )  => 'h1',
            esc_html__( 'H2', 'risehand-addons' )  => 'h2',
            esc_html__( 'H3', 'risehand-addons' )  => 'h3', 
            esc_html__( 'H4', 'risehand-addons' )  => 'h4',
            esc_html__( 'H5', 'risehand-addons' )  => 'h5', 
            esc_html__( 'H6', 'risehand-addons' )  => 'h6', 
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Faqs Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'faqs_v1_repeater',
        'params' => array( 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Faqs Heading', 'risehand-addons') ,
                'param_name' => 'faqsheading_text',
                'value' => esc_html__('How do I make a yearly payment?', 'risehand-addons') ,
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Faqs Description', 'risehand-addons') ,
                'param_name' => 'faqsdescription',
                'value' => esc_html__('Serenity Is Multi-Faceted Blockchain Based Ecosystem, Energy Retailer For The People, Focusing On The Promotion Of Sustainable Living, Renewable Energy Production And Smart Energy Grid Utility Services.', 'risehand-addons') ,
            ), 
            array(
                'type'        => 'checkbox',
                'heading'     => esc_html__( 'Faq Active / Deactive', 'risehand-addons' ),
                'param_name'  => 'faqs_active_tbs',
                'value'       => array( esc_html__( 'Yes', 'risehand-addons' ) => 'yes' ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
                'value' => array( 
                    esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
                    esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome', 
                ), 
                'param_name' => 'icontype',
                'default' => 'custom',
                'description' => esc_html__( 'Select icon library.', 'risehand-addons' ), 
            ),  
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__( 'Icon', 'risehand-addons' ),
                'param_name' => 'icon_fontawesome',
                'value' => 'fas fa-adjust',
                // default value to backend editor admin_label
                'settings' => array(
                    'emptyIcon' => false,
                    // default true, display an "EMPTY" icon?
                    'iconsPerPage' => 500,
                    // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
                ),
                'dependency' => array(
                    'element' => 'icontype',
                    'value' => 'fontawesome',
                ),
                'description' => esc_html__( 'Select icon from library.', 'risehand-addons' ), 
            ), 
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Icon', 'risehand-addons') ,
                'param_name' => 'icon_fonts',
                'value'       => get_risehand_icons(), 
                 'dependency' => array(
                    'element' => 'icontype',
                    'value' => 'custom',
                ), 
            ),
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'title_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Content Color', 'risehand-addons'),
        'param_name' => 'content_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Arrow Color', 'risehand-addons'),
        'param_name' => 'arrow_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Background Color', 'risehand-addons'),
        'param_name' => 'background_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Border Color', 'risehand-addons'),
        'param_name' => 'border_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Active/Hover Arrow Color', 'risehand-addons'),
        'param_name' => 'acarrow_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover/Active Title Color', 'risehand-addons'),
        'param_name' => 'hobtiy_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover/Active Background Color', 'risehand-addons'),
        'param_name' => 'hobackground_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Border Hover Color', 'risehand-addons'),
        'param_name' => 'border_hover_color',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
)));
}
// shortcode
add_shortcode( 'vc_faqs_v1_init', 'vc_faqs_v1' );
function vc_faqs_v1( $atts, $content = null ) { 
    $unique_id = uniqid();
 $atts = shortcode_atts(
   array(
        'faq_type' => 'type_one',
        'faqs_v1_repeater' => '',
        'tag_type' => 'div' ,
        'title_color' => '', 
        'content_color' => '',
        'arrow_color' => '',
        'background_color' => '',
        'border_color' => '',
        'acarrow_color' => '',
        'hobtiy_color' => '',
        'hobackground_color' => '',
        'border_hover_color' => '',
   ), $atts
); 
$allowed_tags = wp_kses_allowed_html('post');
$faqs_v1_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['faqs_v1_repeater'] ) : array();
ob_start();
?>    
<style>
    <?php if($atts['title_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .faq_header .question_box .title_no_a_22 {
        color: <?php echo esc_attr($atts['title_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['content_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .answer { 
        color: <?php echo esc_attr($atts['content_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['arrow_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .faq_header .question_box .icon_fq {
        color: <?php echo esc_attr($atts['arrow_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['background_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion-box .accordion {
        background: <?php echo esc_attr($atts['background_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['border_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion-box .accordion { 
        border-color: <?php echo esc_attr($atts['border_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['acarrow_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .faq_header.active .question_box .icon_fq,
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .faq_header:hover .question_box .icon_fq {
        color: <?php echo esc_attr($atts['acarrow_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hobtiy_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion.active-block .title_no_a_22,
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion:hover .title_no_a_22 {
        color: <?php echo esc_attr($atts['hobtiy_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['hobackground_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion.active-block,
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion:hover {
        background: <?php echo esc_attr($atts['hobackground_color']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['border_hover_color']): ?>
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?>  .accordion.active-block,
    .block_faq.faq-id-<?php echo esc_attr($unique_id); ?> .accordion:hover { 
        border-color: <?php echo esc_attr($atts['border_hover_color']); ?>!important;
    }
    <?php endif; ?>
</style>
<section class="block_faq <?php echo esc_attr($atts['faq_type']); ?> faq-id-<?php echo esc_attr($unique_id); ?>"> 
    <div class="accordion-box">
        <?php if(!empty($faqs_v1_repeaters)): foreach($faqs_v1_repeaters as $key => $faqs_block): 
        $faqs_active_tb  = ! empty( $faqs_block['faqs_active_tbs'] ) ? $faqs_block['faqs_active_tbs'] : '';
        ?>
        <div class="accordion trans<?php if($faqs_active_tb == 'yes'): echo esc_attr(' active-block'); endif;?>">
            <div class="question faq_header<?php if($faqs_active_tb == 'yes'): echo  esc_attr(' active'); endif;?>">
                <div class="question_box trans align-items-center d_flex">
                    <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_22 trans">
                        <?php echo wp_kses($faqs_block['faqsheading_text'] , $allowed_tags);?>
                    </<?php echo esc_attr($atts['tag_type']); ?>>
                    <?php if($faqs_block['icontype'] == 'custom'): ?>
                        <div class="icon">
                            <span class="<?php echo esc_html( $faqs_block['icon_fonts']); ?> icon_fq"></span>
                        </div>
                    <?php endif; ?>
                    <?php if($faqs_block['icontype'] == 'fontawesome'): ?>
                        <?php if(!empty($faqs_block['icon_fontawesome'])): ?>
                            <div class="icon">
                                <i class="<?php echo esc_attr($faqs_block['icon_fontawesome']); ?> icon_fq"></i>
                            </div> 
                        <?php endif; ?>	 
                    <?php endif; ?>	  
                    </div>   
                </div>
           
            <div
                class="answer accordion-content <?php if($faqs_active_tb == 'yes'): echo  esc_attr(' current'); endif;?>">
                <?php echo wp_kses($faqs_block['faqsdescription'] , $allowed_tags);?>
            </div>
        </div>
        <?php endforeach; endif;?> 
    </div>
</section>
<?php
return ob_get_clean();
}



