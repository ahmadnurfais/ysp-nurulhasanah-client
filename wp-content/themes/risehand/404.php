<?php
/*
**==============================   
** Risehand 404 File
**==============================
*/
get_header(); 
$error_image =  get_risehand_option('404_image');
if(!empty($error_image['url'])):
    $error_image = $error_image['url'];
else:
    $error_image = get_template_directory_uri().'/assets/images/404.svg'; 
endif;
?>
<main class="main page-404">
    <div class="page-content">
        <div class="m-auto text-center">
            <p class="m-auto">
                <img class="m-auto" src="<?php echo esc_url($error_image); ?>" alt="" class="hover-up">
            </p>
            <h1 class="title_no_a_36">
                <?php echo esc_html_e('Page Not Found', 'risehand'); ?>
            </h1>
            <p>
                <?php echo esc_html_e( 'The page you are looking for was moved, removed, renamed or never existed.', 'risehand' ); ?>
            </p>
            <div class="search-form text-center">
                <?php do_action('risehand_custom_search_setup'); ?>
            </div>
            <div class="text-cetner">
                <a class="theme_btn" href="<?php echo esc_url(home_url()); ?>"><i class="fi-rs-home mr-5"></i>
                    <?php esc_html_e('Back to home', 'risehand'); ?></a>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?> 