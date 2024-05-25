<?php
/**
 * Template for displaying archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Risehand
*/ 
get_header();
?> 
<div id="primary" class="content-area <?php risehand_column_for_blog(); ?>">
	<main id="main" class="site-main" role="main">
		<div class="row grid_layout"> 
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php
					if (is_tax('service_category')) {
						do_action('risehand_get_column_start_tag');
						do_action('get_risehand_service_card_1');
						do_action('risehand_get_column_end_tag');
					} elseif (is_tax('portfolio_category')) {
						do_action('risehand_get_column_start_tag');
						do_action('get_risehand_portfolio_card_1');
						do_action('risehand_get_column_end_tag');
					} elseif (is_tax('volunteer_category')) {
						do_action('risehand_get_column_start_tag');
						do_action('get_risehand_volunteer_card_1');
						do_action('risehand_get_column_end_tag');
					} elseif (is_tax('events_location')) {
						do_action('risehand_get_column_start_tag');
						do_action('get_risehand_evend_card_3');
						do_action('risehand_get_column_end_tag');
					}
					elseif (is_tax('give_category')) {
						do_action('risehand_get_column_start_tag');
						?>
						<div class="give_forms_section style_three">
							<?php do_action('get_risehand_donation_card_2'); ?>
						</div>
						<?php
						do_action('risehand_get_column_end_tag');
					} 
					else {
						// If none of the conditions are met, include the default content template
						get_template_part('template-parts/content/content', 'blog');
					}
					?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part('template-parts/content/content', 'none'); ?>
			<?php endif; ?>

		</div><!-- .grid_layout -->

		<div class="row">
			<div class="col-lg-12">
				<?php do_action('risehand_custom_pagination'); ?>
			</div>
		</div><!-- .row -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
