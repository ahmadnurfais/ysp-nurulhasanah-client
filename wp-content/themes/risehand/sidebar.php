<?php
/*
**==============================   
** Risehand Sidebar
**==============================
*/
if( 'no-sidebar' == risehand_get_layout() ) {
	return;
} 
$sidebar = 'sidebar-blog' ;
$side_class_inner = 'blog_siderbar side_bar_default_class';
if( is_page()) {
	$sidebar = 'page-sidebar';
	$choose_sidebar_widgets = get_post_meta(get_the_ID() , 'choose_sidebar_widgets' , true);
	if(get_post_meta(get_the_ID() , 'custom_sidebarwidgets' , true) == true){
		$sidebar = $choose_sidebar_widgets;
	}
	$side_class_inner = 'page_siderbar side_bar_default_class';
} 
elseif (is_singular('service')) {
	$sidebar = 'service-sidebar';
	$side_class_inner = 'service_siderbar side_bar_default_class';
}
elseif (is_singular('portfolio')) {
	$sidebar = 'portfolio-sidebar';
	$side_class_inner = 'portfolio_siderbar side_bar_default_class';
}
elseif (is_post_type_archive('product') || is_tax('product_cat') || is_tax('brand')) {
	$sidebar = 'shop-sidebar';
	$side_class_inner = 'shop_siderbar side_bar_default_class';
} 
elseif (is_singular('product')) {
	$sidebar = 'shop-single-sidebar';
	$side_class_inner = 'shop_siderbar side_bar_default_class';
} 
elseif (is_post_type_archive('give_forms')  || is_singular('give_forms')) {
	$sidebar = 'give-forms-sidebar';
	$side_class_inner = 'give_siderbar side_bar_default_class';
} 
?>
<?php if(is_active_sidebar($sidebar)): ?>
<aside id="secondary" class="widget-area  all_side_bar  col-lg-4 col-md-12 col-sm-12">		
	<div class="<?php echo esc_attr($side_class_inner); ?>">
	<?php dynamic_sidebar( $sidebar ) ?>
	</div>
</aside>
<?php endif; ?>