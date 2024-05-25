<?php 
add_action( 'vc_before_init', 'vc_tab_v1_vcmap' );
function vc_tab_v1_vcmap() {
 vc_map( array(
  "name" => __( "Tab V1", "risehand-addons" ),
  "base" => "vc_tab_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
   
    array(
        'type' => 'param_group',
        'heading' => esc_html__('Tab  Content', 'risehand-addons') ,
        'value' => '',
        'param_name' => 'tabs_content_v1_repeater',
        'params' => array( 
            array(
                'type'       => 'dropdown',
                'heading'    => esc_html__( 'Alignment', 'risehand-addons' ),
                'param_name' => 'tab_alignment',
                'value'      => array( 
                    esc_html__( 'Alignment Left', 'risehand-addons' )  => 'align_left',
                    esc_html__( 'Alignment Right', 'risehand-addons' )  => 'align_right', 
                ), 
            ),  
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Tab Id', 'risehand-addons') ,
                'param_name' => 'tab_id',
                'value' => esc_html__('tabone', 'risehand-addons') ,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Tab Title', 'risehand-addons') ,
                'param_name' => 'tab_title',
                'value' => esc_html__('01. Affordable', 'risehand-addons') ,
            ), 
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image', 'risehand-addons') ,
                'param_name' => 'tab_image',
                'value' => '',
            ), 
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Title', 'risehand-addons') ,
                'param_name' => 'con_title',
                'value' => esc_html__('Affordable & Flexible', 'risehand-addons') ,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Description', 'risehand-addons') ,
                'param_name' => 'con_des',
                'value' => esc_html__('Must explain too you how all this mistaken idea of denouncing pleasures
                praising pain was born and we will give you complete account of the system
                the actual teachings of the great explorer.', 'risehand-addons') ,
            ),  
            array(
                'type' => 'param_group',
                'heading' => esc_html__('List  Repeater', 'risehand-addons') ,
                'value' => '',
                'param_name' => 'list_repeater',
                'params' => array( 
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__( 'List Types', 'risehand-addons' ),
                        'param_name' => 'list_type',
                        'value'      => array( 
                            esc_html__( 'Dots', 'risehand-addons' )  => 'dots',
                            esc_html__( 'Icons', 'risehand-addons' )  => 'icons',
                            esc_html__( 'Numbers', 'risehand-addons' )  => 'numbers',
                        ),
                        'default' => 'dots', 
                    ),  
                    array(
                        'type' => 'dropdown',
                        'heading' => esc_html__( 'Icon library', 'risehand-addons' ),
                        'value' => array( 
                            esc_html__( 'Choose Icon Type', 'risehand-addons' ) => 'icon_types',
                            esc_html__( 'Risehand Custom Icons', 'risehand-addons' ) => 'custom',
                            esc_html__( 'Font Awesome 5', 'risehand-addons' ) => 'fontawesome',
                            esc_html__( 'Icon Image Type', 'risehand-addons' ) => 'icon_image_enable' , 
                            esc_html__( 'Disable Icon', 'risehand-addons' ) => 'disable_icon' , 
                        ), 
                        'param_name' => 'icontype',
                        'default' => 'custom',
                        'description' => esc_html__( 'Select icon library.', 'risehand-addons' ), 
                        'dependency'  => array(
                            'element' => 'list_type',
                            'value'   => 'icons',
                        ), 
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
                   
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('List items', 'risehand-addons') ,
                        'param_name' => 'list_items',
                        'value' => esc_html__('Cost-Effective Services', 'risehand-addons') ,
                    ), 
                ), 
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Button Text', 'risehand-addons') ,
                'param_name' => 'button_text',
            ),
            array(
                'heading'    => esc_html__( 'URL (Link)', 'risehand-addons' ),
                'type'       => 'vc_link',
                'param_name' => 'button_link',
            ),
        ),
        'group' => esc_html__('General', 'risehand-addons') , 
    ), 
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Tab Content Alignment', 'risehand-addons'),
        'value' => array( 
            esc_html__( 'Alignment Left', 'risehand-addons' ) => 'flex-start',
            esc_html__( 'Alignment Center', 'risehand-addons' ) => 'center',
            esc_html__( 'Alignment Right', 'risehand-addons' ) => 'flex-end', 
        ), 
        'param_name' => 'tabbtnalignment', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Tab Image Border Radius', 'risehand-addons'),
        'param_name' => 'image_css',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Object Fit', 'risehand-addons'),
        'value' => array( 
            esc_html__( 'Object Fit Contain', 'risehand-addons' ) => 'contain',
            esc_html__( 'Object Fit Cover', 'risehand-addons' ) => 'cover',  
        ), 
        'param_name' => 'objectfit', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Tab Color', 'risehand-addons'),
        'param_name' => 'tcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Tab Background Color', 'risehand-addons'),
        'param_name' => 'tbgcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Tab Border Color', 'risehand-addons'),
        'param_name' => 'tbrcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
   
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Tab Color', 'risehand-addons'),
        'param_name' => 'thcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Tab Background Color', 'risehand-addons'),
        'param_name' => 'thbgcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Tab Border Color', 'risehand-addons'),
        'param_name' => 'thbrcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Title Color', 'risehand-addons'),
        'param_name' => 'contenttcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Content Color', 'risehand-addons'),
        'param_name' => 'contentcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),  
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('List Color', 'risehand-addons'),
        'param_name' => 'list_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Dot / Icon Color', 'risehand-addons'),
        'param_name' => 'dot_icon_color',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Color', 'risehand-addons'),
        'param_name' => 'btncolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Button Border Radius', 'risehand-addons'),
        'param_name' => 'button_border_radius', 
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Button Padding', 'risehand-addons'),
        'param_name' => 'button_padding_radius',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Background Color', 'risehand-addons'),
        'param_name' => 'btnbgcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Button Border Color', 'risehand-addons'),
        'param_name' => 'btnbrcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Color', 'risehand-addons'),
        'param_name' => 'hoverbtncolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Border Color', 'risehand-addons'),
        'param_name' => 'hoverbtnbrcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
    array(
        'type' => 'colorpicker',
        'heading' => esc_html__('Hover Button Background Color', 'risehand-addons'),
        'param_name' => 'hoverbtnbgcolor',
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ),
)));
} 
// shortcode 
add_shortcode( 'vc_tab_v1_init', 'vc_tab_v1' );
function vc_tab_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array( 
      'tabs_content_v1_repeater'  => '',  
      'tabbtnalignment' => 'flex-start',
      'image_css' => '',
      'objectfit' => 'contain',
      'tcolor' => '',
      'tbgcolor' => '',
      'tbrcolor' => '', 
      'thcolor' => '',
      'thbgcolor' => '',
      'thbrcolor' => '', 
      'contenttcolor' => '',
      'contentcolor' => '', 
      'list_color' => '',
      'dot_icon_color' => '',
      'btncolor' => '',
      'border' => '',
      'button_border_radius' => '',
      'button_padding_radius' => '',
      'btnbgcolor' => '',
      'btnbrcolor' => '',
      'hoverbtncolor' => '',
      'hoverbtnbrcolor' => '',
      'hoverbtnbgcolor' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
 
$tabs_content_v1_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $atts['tabs_content_v1_repeater'] ) : array();
 
ob_start();
?>
<style>
    <?php if($atts['tabbtnalignment']): ?>
    .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns {
        justify-content: <?php  echo esc_attr($atts['tabbtnalignment']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['image_css']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .tab_content .d_flex .image-box img {
        border-radius: <?php  echo esc_attr($atts['image_css']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['objectfit']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .tab_content .d_flex .image-box img { 
        object-fit: <?php  echo esc_attr($atts['objectfit']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['tcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a {
        color: <?php  echo esc_attr($atts['tcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['tbgcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a {
        background: <?php  echo esc_attr($atts['tbgcolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['tbrcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a {
        border-color: <?php  echo esc_attr($atts['tbrcolor']); ?>!important;
        }
    <?php endif; ?>
    <?php if($atts['thcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a:hover,
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a.active {
        color: <?php  echo esc_attr($atts['thcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['thbgcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a:hover,
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a.active { 
        background: <?php  echo esc_attr($atts['thbgcolor']); ?>!important; 
     }
    <?php endif; ?>
    <?php if($atts['thbrcolor']): ?>
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a:hover,
     .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .showcase_tabs_btns li a.active { 
        border-color: <?php  echo esc_attr($atts['thbrcolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['contenttcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .s_tab .title_no_a_36 {
        color: <?php  echo esc_attr($atts['contenttcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['contentcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .s_tab .content p {
        color: <?php  echo esc_attr($atts['contentcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['list_color']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .list_items .title_no_a_18 {
        color: <?php  echo esc_attr($atts['list_color']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['dot_icon_color']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .list_items::marker,
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .list_items_box li.icons i,
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .list_items_box li.icons span {
        color: <?php  echo esc_attr($atts['dot_icon_color']); ?>!important;
    } 
    .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .list_items_box li.icons svg path {
        fill: <?php  echo esc_attr($atts['dot_icon_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['btncolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn {
        color: <?php  echo esc_attr($atts['btncolor']); ?>!important;  
    }
    <?php endif; ?>
    <?php if($atts['button_border_radius']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn { 
        border-radius:<?php  echo esc_attr($atts['button_border_radius']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['button_padding_radius']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn { 
        padding:<?php  echo esc_attr($atts['button_padding_radius']); ?>; 
    }
    <?php endif; ?>
    <?php if($atts['btnbgcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn { 
        background: <?php  echo esc_attr($atts['btnbgcolor']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['btnbrcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn { 
        border-color: <?php  echo esc_attr($atts['btnbrcolor']); ?>!important;
    }
    <?php endif; ?>
     
    <?php if($atts['hoverbtncolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn:hover {
        color: <?php  echo esc_attr($atts['hoverbtncolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['hoverbtnbrcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn:hover { 
        border-color: <?php  echo esc_attr($atts['hoverbtnbrcolor']); ?>!important; 
    }
    <?php endif; ?>
    <?php if($atts['hoverbtnbgcolor']): ?>
        .risehand_tab.unique-id-<?php echo esc_attr($unique_id); ?> .s_tabs_content .theme_btn:hover { 
        background: <?php  echo esc_attr($atts['hoverbtnbgcolor']); ?>!important;
    }
    <?php endif; ?>
</style>
<section class="risehand_tab unique-id-<?php echo esc_attr($unique_id); ?>">
<div class="tab_over_all_box"> 
                <div class="tabs_header clearfix">
                    <ul class="showcase_tabs_btns mb_20 clearfix">
                        <?php  if(!empty($tabs_content_v1_repeaters)): foreach($tabs_content_v1_repeaters as $key => $tabs_block_one):?>
                            <li class="nav-item">
                                <a class="s_tab_btn theme_btn <?php if($key == 0) echo 'active';?>" data-tab="#tab<?php echo esc_attr($tabs_block_one['tab_id']); ?>"> 
                                    <?php if(!empty($tabs_block_one['tab_title'])): ?> <?php echo esc_html($tabs_block_one['tab_title']); ?><?php endif;?> <i class="risehand-chevrons-right"></i>
                                </a>
                            </li>
                    <?php endforeach; endif;?>
                    </ul> 
                </div>
                  <div class="s_tab_wrapper">
                     <div class="s_tabs_content">
                     <?php  if(!empty($tabs_content_v1_repeaters)): foreach($tabs_content_v1_repeaters as $key => $tabs_block_one): 
                        $tab_image_o  = ! empty( $tabs_block_one['tab_image'] ) ? $tabs_block_one['tab_image'] : ''; 
                        $tab_images_one = wp_get_attachment_image_src( intval( $tab_image_o ), 'full' );
                        $tab_image_bg  = $tab_images_one ? $tab_images_one[0] : '';
                        $list_repeaters = function_exists( 'vc_param_group_parse_atts' ) ? vc_param_group_parse_atts( $tabs_block_one['list_repeater'] ) : array();
                        $tab_alignment =  isset($tabs_block_one['tab_alignment']) ? $tabs_block_one['tab_alignment'] : '';
                        ?>
                        <div class="s_tab fade <?php if($key == 0) echo 'active-tab show';?>" id="tab<?php echo esc_attr($tabs_block_one['tab_id']); ?>">
                            <div class="tab_content one <?php echo esc_attr($tab_alignment); ?>">
                                <div class="d_flex align-items-center">
                                    <?php if(!empty($tab_image_bg)):
                                        $tab_image_alt = get_post_meta($tabs_block_one['tab_image'], '_wp_attachment_image_alt', true);
                                        $tab_image_alt = !empty($tab_image_alt) ? $tab_image_alt : 'risehand-addons';
                                        ?>
                                        <div class="image-box">
                                            <img src="<?php echo esc_url($tab_image_bg); ?>" class="img-fluid" alt="<?php echo esc_attr($tab_image_alt); ?>" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="content"> 
                                        <?php if(!empty($tabs_block_one['con_title'])): ?> 
                                            <div class="title_no_a_36 mb_20"><?php echo esc_html($tabs_block_one['con_title']); ?></div>
                                        <?php endif;?>
                                        <?php if(!empty($tabs_block_one['con_des'])): ?>
                                            <p class="mb_20"><?php echo esc_html($tabs_block_one['con_des']); ?></p>
                                        <?php endif;?>
                                        <?php if(!empty($list_repeaters)): ?>
                                            <ul class="list_items_box">
                                                <?php foreach($list_repeaters as $key => $list_repeater): ?>
                                                    <li class="list_items trans <?php if(!empty($list_repeater['list_type'])): echo esc_attr($list_repeater['list_type']); endif; ?>">
                                                        <div class="l_box d_flex align-items-center "> 
                                                         <?php  if($list_repeater['list_type'] == 'icons'): ?> 
                                                            <div class="icon_box<?php if( $list_repeater['icontype'] == 'icon_fonts' ): ?> icon_yes<?php endif; ?>"> 
                                                                <?php if( $list_repeater['icontype'] == 'icon_image_enable'):
                                                                    $icon_image = wp_get_attachment_image_src( intval(  $list_repeater['icon_images'] ), 'full' );
                                                                    $icon_images = $icon_image ? $icon_image[0] : '';
                                                                    $icon_images_alt = get_post_meta($atts['icon_images'], '_wp_attachment_image_alt', true);
                                                                    $icon_images_alt = !empty($icon_images_alt) ? $icon_images_alt : 'risehand-addons';
                                                                    if(!empty($icon_images)): ?> 
                                                                        <img src="<?php echo esc_url($icon_images); ?>" class="img-fluid svg_image" alt="<?php echo esc_attr($icon_images_alt); ?>" /> 
                                                                    <?php endif; ?> 
                                                                <?php elseif(!empty($list_repeater['icontype'])  == 'custom'): ?> 
                                                                    <span class="<?php echo esc_html( $list_repeater['icon_fonts']); ?>"></span>  
                                                                <?php elseif(!empty($list_repeater['icontype']) == 'fontawesome'): ?>
                                                                    <?php if(!empty($list_repeater['icon_fontawesome'])): ?> 
                                                                        <i class="<?php echo esc_attr($list_repeater['icon_fontawesome']); ?>"></i> 
                                                                    <?php endif; ?>	 
                                                                <?php else: ?>
                                                                <?php endif; ?>	   
                                                            </div>
                                                            <?php elseif($list_repeater['list_type'] == 'numbers'): ?> 
                                                            <?php else: ?> 
                                                            <?php endif; ?>	  
                                                            <div class="title_no_a_18"><?php echo esc_html($list_repeater['list_items']); ?> </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                             </ul>
                                        <?php endif; ?>
                                        <?php if(!empty($tabs_block_one['button_text'])): ?> 
                                        <div class="pt_15"> 
                                            <?php 
                                            $button_link_href = '';
                                            $button_link_target = '';
                                            if ( ! empty( $tabs_block_one['button_link'] ) ) {
                                            $link            = vc_build_link( $tabs_block_one['button_link'] );
                                            $button_link_href           = $link['url'];
                                            $button_link_target = $link['target'];
                                            } 
                                            ?>
                                            <a href="<?php echo esc_url($button_link_href); ?>" <?php if(!empty($button_link_target)):?> target="<?php echo esc_attr($button_link_target); ?>" <?php endif; ?> class="theme_btn">
                                            <?php echo esc_html($tabs_block_one['button_text']);?> <i class="risehand-chevrons-right1"></i>
                                            </a> 
                                        </div>
                                        <?php endif;?> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                        <?php endforeach; endif; ?>
                  </div>
                </div> 
                </div>   
    </section>    
<?php
return ob_get_clean();
}



