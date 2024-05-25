<?php
/*
**==============================   
** Risehand Search File
**==============================
*/
get_header(); ?>
<div id="primary" class="content-area blog_masonry col-lg-8 m-auto"><!-- #primary -->
    <main id="main" class="site-main"><!-- #main --> 
			<div class="row loop-grid"><!---#row---->
				 <?php 	get_template_part('template-parts/content/content', 'search'); ?>
			</div><!-- #row --> 
		</main><!-- #main -->
	</div><!-- #primary --> 
<?php get_footer(); ?>