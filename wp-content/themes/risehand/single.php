<?php
/*
**==============================   
** Risehand Single
**==============================
*/
get_header(); 
if(is_singular('header') || is_singular('footer') || is_singular('mega_menu') || is_singular('sliders')):
?>
<div class="content-area"> 
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content/content', 'blocks' ); ?>
	<?php endwhile; // end of the loop. ?>
</div><!-- #primary --> 
<?php else: ?>
<div id="primary" class="content-area <?php  risehand_column_for_blog(); ?>">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
		    <?php get_template_part( 'template-parts/content/content', 'single' ); ?>
		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
</div> 
<?php endif; ?>
<?php get_footer(); ?>