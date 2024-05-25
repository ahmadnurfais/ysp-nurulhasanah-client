<?php


add_action( 'vc_before_init', 'vc_fun_facts_v1_vcmap' );
function vc_fun_facts_v1_vcmap() {
 vc_map( array(
  "name" => __( "Fun Facts V1", "risehand-addons" ),
  "base" => "vc_fun_facts_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
    array(
    'type'       => 'dropdown',
    'heading'    => esc_html__( 'Fun Facts Styles', 'risehand-addons' ),
    'param_name' => 'counter_style',
    'value'      => array(
        esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
        esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two',
    ),
    'default' => 'style_one',
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
        'type' => 'dropdown',
        'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
            esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
            esc_html__( 'Icon Image Type', 'risehand-addons' ) => 'icon_image_enable' ,   
            esc_html__( 'Disable Icon', 'risehand-addons' ) => 'none' , 
        ), 
        'param_name' => 'icontype',
        'default' => 'none',
        'description' => esc_html__( 'Select icon library.', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'attach_image',
        'heading' => esc_html__('Icon Image', 'risehand-addons') ,
        'param_name' => 'icon_images',
        'value' => '',
        'dependency'  => array(
            'element' => 'icontype',
            'value'   => 'icon_image_enable',
        ),
        'group' => esc_html__('General', 'risehand-addons') ,
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
        'group' => esc_html__('General', 'risehand-addons') ,
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
        'group' => esc_html__('General', 'risehand-addons') ,
    ),      
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Counter Start', 'risehand-addons') ,
        'param_name' => 'counter_start',
        'value' => esc_html__('4536', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),         
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Fact Symbols', 'risehand-addons') ,
        'param_name' => 'fact_symbols',
        'value' => esc_html__('+', 'risehand-addons') ,
        'description' => __('Enter Your Symbols', 'risehand-addons'),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Fact Heading', 'risehand-addons') ,
        'param_name' => 'fact_heading',
        'value' => esc_html__('Project Completed', 'risehand-addons') ,
        'group' => esc_html__('General', 'risehand-addons') ,
    ),   
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Fact Description', 'risehand-addons') ,
        'param_name' => 'fact_description',
        'value' => esc_html__('Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum.', 'risehand-addons') ,  
        'group' => esc_html__('General', 'risehand-addons') ,
    ),     

    array(
        'type' => 'colorpicker',
        'heading' => __('Count Color', 'risehand-addons'),
        'param_name' => 'cstyle_two',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Title Color', 'risehand-addons'),
        'param_name' => 'cstyle_four',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Content Color', 'risehand-addons'),
        'param_name' => 'cstyle_six',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Icon Color', 'risehand-addons'),
        'param_name' => 'cstyle_seven',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Background Color', 'risehand-addons'),
        'param_name' => 'cstyle_eight',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Border Color', 'risehand-addons'),
        'param_name' => 'cstyle_ninie',
        'group' => esc_html__('Styling', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Hover Border Color', 'risehand-addons'),
        'param_name' => 'cstyle_ten',
        'group' => esc_html__('Styling', 'risehand-addons') , 
        'dependency' => array(
            'element' => 'counter_style',
            'value' => 'style_one',
        ),
    ),
    
)));
}
// shortcode
add_shortcode( 'vc_fun_facts_v1_init', 'vc_fun_facts_v1' );
function vc_fun_facts_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(
        'tag_type' => 'div' ,
        'cstyle_two' => '', 
        'cstyle_four' => '', 
        'cstyle_six' => '',
        'cstyle_seven' => '',
        'cstyle_eight' => '',
        'cstyle_ninie' => '',
        'cstyle_ten' => '',
        'counter_style' => 'style_one',
        'icontype' => 'custom',
        'icon_images' => '',
        'icon_fontawesome' => '',
        'icon_fonts' => 'risehand-sliders',
        'counter_start' => '554',
        'fact_heading' => 'Years of Fundation',
        'fact_description' => '',
        'fact_symbols' => '+',
   ), $atts
); 
$allowed_tags = wp_kses_allowed_html('post');
ob_start();
?> 
<style> 
    <?php if($atts['cstyle_two']): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .coun_ter  {
            color: <?php echo esc_attr($atts['cstyle_two']); ?>!important;
    }
    <?php endif; ?> 
    <?php if($atts['cstyle_four']): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22 ,
    .fun-id-<?php echo esc_attr($unique_id); ?> .title_no_a_22 { 
        color: <?php echo esc_attr($atts['cstyle_four']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_six']): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .desc_p { 
        color: <?php echo esc_attr($atts['cstyle_six']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_seven']): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .icon span,
    .fun-id-<?php echo esc_attr($unique_id); ?> .icon i  {
        color: <?php echo esc_attr($atts['cstyle_seven']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_eight'] && $atts['counter_style'] == "style_one"): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?>  {
        background: <?php echo esc_attr($atts['cstyle_eight']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_eight'] && $atts['counter_style'] == "style_two"): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .icon {
        background: <?php echo esc_attr($atts['cstyle_eight']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_ninie'] && $atts['counter_style'] == "style_one"): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?>  {
        border-color: <?php echo esc_attr($atts['cstyle_ninie']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_ninie'] && $atts['counter_style'] == "style_two"): ?> 
    .fun-id-<?php echo esc_attr($unique_id); ?> .icon {
        border-color: <?php echo esc_attr($atts['cstyle_ninie']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['cstyle_ten']): ?>
    .fun-id-<?php echo esc_attr($unique_id); ?> .fun_inner::before,
    .fun-id-<?php echo esc_attr($unique_id); ?> .fun_inner::after,
    .fun-id-<?php echo esc_attr($unique_id); ?>::before,
    .fun-id-<?php echo esc_attr($unique_id); ?>::after {
        background: <?php echo esc_attr($atts['cstyle_ten']); ?>!important;
    }
    <?php endif; ?>
</style>
        <?php
         $icon_image = wp_get_attachment_image_src( intval(  $atts['icon_images'] ), 'full' );
         $icon_images = $icon_image ? $icon_image[0] : '';
         $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
         $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'icon-image-one';
        if($atts['counter_style'] == 'style_two'): ?>
            <div class="facts_style_two count-box mb_40 d_flex align-item-center fun-id-<?php echo esc_attr($unique_id); ?>"> 
                <div class="icon_box  mt_15 pt_10 <?php if( $atts['icontype'] == 'custom' ): ?> icon_yes <?php endif; ?>">
                    <?php if( $atts['icontype'] == 'icon_image_enable'):
                   
                    if(!empty($icon_images)): ?>
                        <div class="icon d_flex">
                            <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if($atts['icontype'] == 'custom'): ?>
                        <div class="icon d_flex">
                            <span class="<?php echo esc_html( $atts['icon_fonts']); ?> "></span>
                        </div>
                    <?php endif; ?>
                    <?php if($atts['icontype'] == 'fontawesome'): ?>
                        <?php if(!empty($atts['icon_fontawesome'])): ?>
                            <div class="icon d_flex">
                                <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                            </div> 
                        <?php endif; ?>	 
                    <?php endif; ?>	   
                </div>
                  <div class="content_box">
                        <?php if(!empty($atts['counter_start']) || !empty($atts['fact_symbols'])): ?>
                        <div class="coun_ter">
                            <span class="count-text"><?php echo esc_attr( $atts['counter_start']); ?></span>
                            <small><?php echo esc_attr( $atts['fact_symbols']); ?></small>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($atts['fact_heading'])): ?>
                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_22"><?php echo esc_attr( $atts['fact_heading']); ?></<?php echo esc_attr($atts['tag_type']); ?>>
                        <?php endif; ?>
                        <?php if(!empty($atts['fact_description'])): ?>
                            <p class="desc_p mt_15 pb_10"><?php echo esc_attr( $atts['fact_description']); ?></p>
                        <?php endif; ?>
                  </div>  
                
              </div>   
        <?php else: ?>
            <div class="facts_style_one mb_40 count-box fun-id-<?php echo esc_attr($unique_id); ?>"> 
                <div class="fun_inner">
                <?php if(!empty($atts['counter_start']) || !empty($atts['fact_symbols'])): ?>
                        <div class="coun_ter">
                            <span class="count-text"><?php echo esc_attr( $atts['counter_start']); ?></span>
                            <small><?php echo esc_attr( $atts['fact_symbols']); ?></small>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($atts['fact_heading'])): ?>
                            <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_22"><?php echo esc_attr( $atts['fact_heading']); ?></<?php echo esc_attr($atts['tag_type']); ?>>
                        <?php endif; ?>
                        <?php if(!empty($atts['fact_description'])): ?>
                            <p class="desc_p mt_15 pb_10"><?php echo esc_attr( $atts['fact_description']); ?></p>
                        <?php endif; ?>
                      <div class="icon_box  mt_15 pt_10 <?php if( $atts['icontype'] == 'custom' ): ?> icon_yes <?php endif; ?>">
                    <?php if( $atts['icontype'] == 'icon_image_enable'):
                     
                    if(!empty($icon_images)): ?>
                        <div class="icon">
                            <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" />
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if($atts['icontype'] == 'custom'): ?>
                        <div class="icon">
                            <span class="<?php echo esc_html( $atts['icon_fonts']); ?>"></span>
                        </div>
                    <?php endif; ?>
                    <?php if($atts['icontype'] == 'fontawesome'): ?>
                        <?php if(!empty($atts['icon_fontawesome'])): ?>
                            <div class="icon">
                                <i class="<?php echo esc_attr($atts['icon_fontawesome']); ?>"></i>
                            </div> 
                        <?php endif; ?>	 
                    <?php endif; ?>	  
                    </div>   
                    </div>   
            </div>   
        <?php endif; ?>
<?php
return ob_get_clean();
}



