<?php
/*
**==============================   
** Risehand Single Service
**==============================
*/
get_header(); ?>
	<div id="primary" class="content-area service <?php risehand_column_for_service(); ?>">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content/content' , 'service' ); ?>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
