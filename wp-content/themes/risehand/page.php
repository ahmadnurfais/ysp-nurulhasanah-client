<?php
/*
**==============================   
** Risehand Page
**==============================
*/      
get_header(); ?>
	<div id="primary" class="content-area  <?php risehand_column_for_page(); ?>">
		<main id="main" class="site-main" role="main"> 
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content/content', 'page'); ?>
				<?php
					// ifcomments are open or we have at least one comment, load up the comment template
					if(comments_open() || get_comments_number()) :
						comments_template();
					endif;
				?>
			<?php endwhile; ?> 
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>