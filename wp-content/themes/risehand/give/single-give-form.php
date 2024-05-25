<?php 
$give_single_style = get_risehand_option('give_single_style');
get_header();
?>

<div id="primary" class="content-area service <?php echo risehand_column_for_donation_single(); ?>">
	<main id="main" class="site-main" role="main">
 
		<?php

		/**
		 * Fires in single form template, before the main content.
		 *
		 * Allows you to add elements before the main content.
		 *
		 * @since 1.0
		 */
		//do_action( 'give_before_main_content' );

		while ( have_posts() ) :
		the_post(); 
			get_template_part( 'give/single-give-form/content-single-give' , 'form' );   
		endwhile; // end of the loop.

		/**
		 * Fires in single form template, after the main content.
		 *
		 * Allows you to add elements after the main content.
		 *
		 * @since 1.0
		 */
	//	do_action( 'give_after_main_content' );
		?>

</main>
</div>
<?php
/**
 * Fires in single form template, on the sidebar.
 *
 * Allows you to add elements to the sidebar.
 *
 * @since 1.0
 */ 
 get_sidebar();  
get_footer();
