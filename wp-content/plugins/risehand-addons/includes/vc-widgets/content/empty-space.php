<?php


add_action( 'vc_before_init', 'vc_emptyspace_vcmap' );
function vc_emptyspace_vcmap() {
 vc_map( array(
  "name" => __( "Empty Space V1", "risehand-addons" ),
  "base" => "vc_emptyspace_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array(  
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Empty Space for Desktop', 'risehand-addons') ,
        'param_name' => 'height',
        'description' => esc_html__('Enter the Height like this eg( 50px)', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons') , 
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__('Empty Space for Tablet', 'risehand-addons') ,
        'param_name' => 'tabheight',
        'description' => esc_html__('Enter the Height like this eg( 50px)', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
     
    ), 
    array(
        'type' => 'textfield',
        'heading' => esc_html__(' Empty Space for Mobile', 'risehand-addons') ,
        'param_name' => 'mobileheight',
        'description' => esc_html__('Enter the Height like this eg( 50px)', 'risehand-addons'),
        'group' => esc_html__('Styling', 'risehand-addons'),
     
    ), 
     
)));
} 
// shortcode 
add_shortcode( 'vc_emptyspace_init', 'vc_emptyspace' );
function vc_emptyspace( $atts, $content = null ) { 
$unique_id = uniqid();
$atts = shortcode_atts(
   array(
      'height' => '50px', 
      'tabheight' => '',
      'mobileheight' => '',  
   ), $atts
); 
//styling 
 
?>
<style type="text/css" data-type="vc_shortcodes-custom">  
    <?php if($atts['height']): ?>
    .risehand_empty_space.unique-id-<?php echo esc_attr($unique_id); ?>  {height:<?php echo esc_attr($atts['height']); ?>;} 
    <?php endif; ?>  
    <?php if($atts['tabheight']): ?>
        @media(max-width:1024px){.risehand_empty_space.unique-id-<?php echo esc_attr($unique_id); ?>  {height:<?php echo esc_attr($atts['tabheight']); ?>;}}
    <?php endif; ?>  
    <?php if($atts['mobileheight']): ?>
        media(max-width:768px){.risehand_empty_space.unique-id-<?php echo esc_attr($unique_id); ?>  {height:<?php echo esc_attr($atts['mobileheight']); ?>;}} 
    <?php endif; ?>  
</style> 
<?php
 
//stylingend 
ob_start();
?> 
  <div class="risehand_empty_space unique-id-<?php echo esc_attr($unique_id); ?>">
  </div>
<?php
return ob_get_clean();
}



