<?php
 // Mode
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
if(!function_exists('wp_body_open')):
    function wp_body_open(){
        do_action('wp_body_open');
    }
endif; 
$maintenance_image =  get_risehand_option('maintenance_image');
$maintenance_title =   get_risehand_option('maintenance_title');
$maintenance_description =  get_risehand_option('maintenance_description');
?>
<div id="page" class="page_wapper maintenance hfeed site"> 

<div class="maintenance-content">
    <?php  
        // Display content when staging site is enabled
        if ($maintenance_image['url']) {
            echo '<img src="' . esc_url($maintenance_image['url']) . '" alt="Custom Image">';
        } 
        ?>
        <div class="box_content">
        <?php
     
        if ($maintenance_title) {
            echo '<h2>' . esc_html($maintenance_title) . '</h2>';
        }else{
            echo '<h2>' . esc_html__('Site Under Maintenance.' , 'risehand') . '</h2>';
        }
        if ($maintenance_description) {
            echo '<p>' . esc_html($maintenance_description) . '</p>';
        }else{
            echo '<p>' . esc_html__('This website is currently undergoing maintenance.' , 'risehand') . '</p>';
        }
   
 ?>
 </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
