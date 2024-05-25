<?php
/*
**==============================   
** Risehand Single Team
**==============================
*/
get_header(); ?>
	<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content/content' , 'volunteer' ); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>