<?php
/*
**==============================   
** Risehand Single Portfolio
**==============================
*/
get_header(); ?>
	<div id="primary" class="content-area  <?php risehand_column_for_portfolio(); ?>">
        <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content/content' , 'portfolio' ); ?> 
            <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>