<?php
/*
** ============================== 
** risehand Page Content
** ==============================
*/
$clerfix = 'clearfix';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($clerfix); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
		<div class="clearfix"></div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'risehand' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->