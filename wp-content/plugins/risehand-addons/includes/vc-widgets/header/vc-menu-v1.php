<?php
add_action( 'vc_before_init', 'vc_menu_v1_vcmap' );
function vc_menu_v1_vcmap() {
 vc_map( array(
  "name" => __( "Menu v1", "risehand-addons" ),
  "base" => "vc_menu_v1_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Header", "risehand-addons"),
  "params" => array(
    
    array(
        'type' => 'dropdown',
        'heading' => esc_html__('Navigation Menu', 'risehand-addons') ,
        'param_name' => 'navigations',
        'value'       => risehand_navmenu(),
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Slider Type', 'risehand-addons' ),
        'value' => array( 
            esc_html__( 'Left', 'risehand-addons' ) => 'flex-start',
            esc_html__( 'Center', 'risehand-addons' )     => 'center' ,
            esc_html__( 'Right', 'risehand-addons' ) => 'flex-end',  
        ), 
        'param_name' => 'navigations_pos', 
        'description' => esc_html__( 'Choose Navigation Menu Position', 'risehand-addons' ),
        'group' => esc_html__('General', 'risehand-addons') , 
    ),
    
    //  mennu css
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Color', 'risehand-addons'),
        'param_name' => 'menu_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
  
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Menu Radius', 'risehand-addons' ),
        'param_name' => 'menubot_rad',
        'group' => esc_html__('General', 'risehand-addons') ,
        'description' => esc_html__('Enter the radius like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Menu Padding', 'risehand-addons'),
        'param_name' => 'menu_padding',
        'group' => esc_html__('General', 'risehand-addons') ,
        'description' => esc_html__('Enter the Padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Menu Margin', 'risehand-addons'),
        'param_name' => 'menu_margin',
        'group' => esc_html__('General', 'risehand-addons') ,
        'description' => esc_html__('Enter the margin like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Background Color', 'risehand-addons'),
        'param_name' => 'menubg_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Hover/ Active Color', 'risehand-addons'),
        'param_name' => 'menu_ac_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Menu Hover/ Active Background Color', 'risehand-addons'),
        'param_name' => 'menu_ac_bg_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ),

    // Dropdown Menu Parameters
    array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Dropdown Menu Radius', 'risehand-addons' ),
        'param_name' => 'drop_menubot_rad',
        'group' => esc_html__('General', 'risehand-addons') ,
        'description' => esc_html__('Enter the Radius like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Dropdown Menu Padding', 'risehand-addons'),
        'param_name' => 'drop_menu_padding',
        'group' => esc_html__('General', 'risehand-addons') ,
        'description' => esc_html__('Enter the Padding like this eg( 0px 0px 0px 0px )', 'risehand-addons'),
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Background Color', 'risehand-addons'),
        'param_name' => 'drop_bg_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ), 
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Menu Color', 'risehand-addons'),
        'param_name' => 'drop_menu_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ),
    array(
        'type' => 'colorpicker',
        'heading' => __('Dropdown Menu Hover Color', 'risehand-addons'),
        'param_name' => 'drop_homenu_color',
        'group' => esc_html__('General', 'risehand-addons') ,
    ),  
     
    
)));
} 
// shortcode 
add_shortcode( 'vc_menu_v1_init', 'vc_menu_v1' );
function vc_menu_v1( $atts, $content = null ) { 
$unique_id = uniqid();
 $atts = shortcode_atts(
   array(    
        'menu_color' => '',  
        'menubot_rad' => '',
        'menu_padding' => '',
        'menu_margin' => '',
        'menubg_color' => '',
        'menu_ac_color' => '', 
        'menu_ac_bg_color' => '', 
        'drop_menubot_rad' => '',
        'drop_menu_padding' => '',
        'drop_bg_color' => '', 
        'drop_menu_color' => '', 
        'drop_menubot_rad' => '',
        'drop_menu_padding' => '',
        'drop_menu_margin' => '',
        'drop_menubg_color' => '',
        'drop_homenu_color' => '',   
        'navigations'  => '', 
        'navigations_pos'  => 'flex-start', 
         
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post'); 
ob_start();
?> 
 <style> 
        <?php if($atts['menu_color']): ?>
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a {
            color: <?php echo esc_attr($atts['menu_color']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menubot_rad']): ?>
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            border-radius: <?php echo esc_attr($atts['menubot_rad']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menu_padding']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            padding: <?php echo esc_attr($atts['menu_padding']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menu_margin']): ?>
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li  { 
            margin: <?php echo esc_attr($atts['menu_margin']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['menubg_color']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li > a { 
            background: <?php echo esc_attr($atts['menubg_color']); ?>!important;
        }
        <?php endif; ?>
        <?php if($atts['menu_ac_color']): ?>
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li.active > a,
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li:hover > a {
            color: <?php echo esc_attr($atts['menu_ac_color']); ?>!important; 
        }
        <?php endif; ?> 
        <?php if($atts['menu_ac_bg_color']): ?>
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li.active > a,
        .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav > li:hover > a { 
            background: <?php echo esc_attr($atts['menu_ac_bg_color']); ?>!important;
        }
        <?php endif; ?> 
        <?php if($atts['drop_menubot_rad']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu {
            border-radius: <?php echo esc_attr($atts['drop_menubot_rad']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_menu_padding']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu { 
            padding: <?php echo esc_attr($atts['drop_menu_padding']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_bg_color']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu { 
            background: <?php echo esc_attr($atts['drop_bg_color']); ?>!important;
        }   
        <?php endif; ?>
        <?php if($atts['drop_menu_color']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav li .sub-menu > li > a {
            color: <?php echo esc_attr($atts['drop_menu_color']); ?>!important; 
        }
        <?php endif; ?>
        <?php if($atts['drop_homenu_color']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav .menu-item .sub-menu li a.nav_link:hover ,
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav .menu-item .sub-menu li.active a.nav_link {
            color: <?php echo esc_attr($atts['drop_homenu_color']); ?>!important; 
        }
        <?php endif; ?>  
        <?php if($atts['navigations_pos']): ?>
            .menu-<?php echo esc_attr($unique_id); ?> .navbar_nav  { 
                justify-content: <?php echo esc_attr($atts['navigations_pos']); ?>!important;
            }
        <?php endif; ?> 
</style>
  
    <div class="custom_menu_area menu_area menu-<?php echo esc_attr($unique_id);?>">
        <div class="button_box_menu">
            <div class="navbar_togglers">
                <button class="navbar-burger">
                    <i class="risehand-menu1"></i>
                </button>
            </div>
        </div>
        <?php if(!empty($atts['navigations'])):
            wp_nav_menu(array(
                'menu' => $atts['navigations'],
                'container' => false,
                'menu_class' => 'navbar_nav',
                'fallback_cb'    => 'risehand_navwalker::fallback',
                'walker' => new \risehand_navwalker()
        )); endif; ?>
    </div>            
             
<?php
return ob_get_clean();
}