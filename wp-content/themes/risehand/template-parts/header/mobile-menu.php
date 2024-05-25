<?php
/*
** ============================== 
**   risehand Header Mobile Menu
** ==============================
*/
add_action('risehand_get_mobile_menu', 'risehand_mobile_menu'); 
function risehand_mobile_menu(){ 
$allowed_tags = wp_kses_allowed_html('post');
 
?>
<div class="mobile_menu_box">
    <div class="menu-backdrop"></div>
    <nav class="menu-box scrollbarcolor">
        <div class="close-btn"><i class="close risehand-cross-c"></i></div>
          
        <div class="menu-outer">
            <div class="navigation_menu">
                <ul class="navbar_nav">

                </ul>
            </div>
        </div>
      
    </nav>
</div>
<?php }