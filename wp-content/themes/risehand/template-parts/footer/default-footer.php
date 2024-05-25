<?php
/*
** ============================== 
**   risehand footer File
** ==============================
*/
add_action('risehand_get_footer', 'risehand_default_footer');
function risehand_default_footer() {
    if (is_page_template('template-empty.php') || is_404()  || is_singular('sliders') || is_singular('header') || is_singular('footer') || is_singular('mega_menu')) {
        return false;
    } 
    $footer_id = get_risehand_option('footer_custom_style');  
    if (get_post_meta(get_the_ID(), 'custom_footer', true)) {
      $footer_id = get_post_meta(get_the_ID(), 'footer_settings_meta', true);
    } 
    $footer_custom_enables = get_risehand_option('footer_custom_enables');   
    if ($footer_custom_enables == true) {
    ?>
        <div class="footer_area" id="footer_contents">
        <?php  echo do_shortcode('[risehand-footer id="' . $footer_id . '"]'); ?>
        </div>
        <?php
    } 
    else {
    ?> 
        <footer class="footer before_plugin_installation_footer footer_default  footer-bottom text-center">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <?php echo esc_html('© ' . date('Y') . ' Steelthemes. All Right Reserved', 'risehand'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php
    }
}
