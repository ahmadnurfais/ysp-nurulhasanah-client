<?php
/* *
 * *
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * @package risehand WordPress Theme
 * @version 1.0.0
 * *
* */
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
if(!function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
	}
} 
$side_menu_enable = get_risehand_option('side_menu_enable');
?>
<div id="page" class="page_wapper hfeed site">
<div class="top_page_wapper">
<?php //page_wapper?> 
<?php  //preloader?>
	<?php if(get_risehand_option('preloader_enables') == true): do_action('risehand_get_preloaders'); endif;?>
<?php //preloader?>
	<?php  // header ?>
	<?php do_action('risehand_get_header'); ?>  	
	<?php  // header end ?>
	<?php  if($side_menu_enable == true):  risehand_menu_display_arear();  endif;?>
	<?php //page header ?>
		<?php  do_action('risehand_defalut_page_header'); ?>
		<?php  do_action('risehand_defalut_page_header_before'); ?>
			<?php //content ?>
			<div id="wrapper_full" class="content_all_warpper"> 
			<div id="content"
				class="site-content <?php echo get_post_meta(get_the_ID() , 'blog_single_page_header' , true); ?>">
				<?php $container = 'auto-container auto_container';
	                if( is_page_template( 'template-homepage.php' ) || is_page_template( 'template-empty.php' ) || is_page_template( 'template-fullwidth.php' ) || is_singular('header')  || is_singular('footer')  || is_singular('mega_menu') || is_singular('sliders')):
						$container = 'no-container';
					endif;
		        ?>
				<div class="<?php echo esc_attr($container); ?>">
				<?php	$layout_row = risehand_get_layout();
					$row = 'row';
					if( is_page_template( 'template-homepage.php' ) || is_page_template( 'template-empty.php' ) || is_page_template( 'template-fullwidth.php' ) || is_singular('header')  || is_singular('footer')  || is_singular('mega_menu')  || is_singular('sliders') || $layout_row == 'no-sidebar'):
						$row = 'no-row';
					else:
						$row = 'row default_row';
					endif;
				?>
				<div class="<?php echo esc_attr( $row ) ?>">  