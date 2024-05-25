<?php  
/*
** ============================== 
** Donation Category
** ============================== 
*/
add_action('init', 'custom_give_taxonomy');
add_action('risehand_get_donation_category' , 'risehand_donation_category');
function custom_give_taxonomy() {
    $labels = array(
        'name' => _x('Give Categories', 'taxonomy general name'),
        'singular_name' => _x('Give Category', 'taxonomy singular name'),
        'search_items' => __('Search Give Categories'),
        'all_items' => __('All Give Categories'),
        'parent_item' => __('Parent Give Category'),
        'parent_item_colon' => __('Parent Give Category:'),
        'edit_item' => __('Edit Give Category'),
        'update_item' => __('Update Give Category'),
        'add_new_item' => __('Add New Give Category'),
        'new_item_name' => __('New Give Category Name'),
        'menu_name' => __('Give Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'give-category'),
    );

    register_taxonomy('give_category', 'give_forms', $args);
}
function risehand_donation_category(){
    $form_id = get_the_ID();
    $categories = wp_get_post_terms($form_id, 'give_forms_category', array('fields' => 'names'));
    // Check if categories exist and are an array
    if (is_array($categories) && !empty($categories)) {
        echo '<p class="give-category font_special">' . esc_html(implode(', ', $categories)) . '</p>';
    }
}
/*
** ============================== 
** Donation Get Fund
** ============================== 
*/
add_action('rishand_get_fund_to_go', 'rishand_fund_to_go'); 
function rishand_fund_to_go(){
    $form_id = get_the_ID();
    // Get the raised amount as a numeric value
    $form_raised = floatval(give_get_meta($form_id, '_give_form_earnings', true)); 
    // Get the goal amount as a numeric value
    $form_goal = floatval(give_get_meta($form_id, '_give_set_goal', true)); 
    // Check if the goal is not set or is zero
    if ($form_goal <= 0) {
        $form_goal = 0; // Set the goal to zero
        $to_go_amount = 0; // Set the "To-Go" amount to zero
    } else {
        // Calculate the "To-Go" amount
        $to_go_amount = max(0, $form_goal - $form_raised);
    } 
    echo give_currency_filter(give_format_amount($to_go_amount));  
}
/*
** ============================== 
** Donation GiveWp Updates
** ============================== 
*/
add_filter('risehand_givewp_updates', 'risehand_givewp_updates', 10, 1);

function risehand_givewp_updates($formid = ''){
    $form = new Give_Donate_Form($formid);
    $goal_format = get_post_meta($formid, '_give_goal_format', true);
    if (function_exists('give_goal_progress_stats')) {
        $donation_progress_find = give_goal_progress_stats($form);
    } 
    if (function_exists('give_human_format_large_amount') && function_exists('give_format_amount')) {
        $find_income = give_human_format_large_amount(give_format_amount($donation_progress_find['raw_actual'], array()), array());
        $find_goal   = give_human_format_large_amount(give_format_amount($donation_progress_find['raw_goal'], array()), array());
    } 
    if (function_exists('give_currency_filter')) {
        $generate_income = give_currency_filter($find_income, array('form_id' => $formid));
        $generate_goal   = give_currency_filter($find_goal, array('form_id' => $formid));
    } 
    if ($goal_format == 'amount' || $goal_format == 'percentage') {
        $result['actual'] = $generate_income;
        $result['goal'] = $generate_goal;
        $result['progress'] = $donation_progress_find['progress'];
    } else {
        $result['actual'] = $donation_progress_find['actual'];
        $result['goal'] = $donation_progress_find['goal'];
        $result['progress'] = $donation_progress_find['progress'];
    }

    return $result;
}
/*
** ============================== 
** Donation Raised Donor Count
** ============================== 
*/
add_filter('risehand_raised_donor_count', 'risehand_raised_donor_count');

function risehand_raised_donor_count($formid = '')
{
    $form = new Give_Donate_Form($formid);
    return apply_filters('give_goal_donations_raised_output', $form->sales, $formid, $form);
}
/*
** ============================== 
** Donation Progress Bar
** ============================== 
*/
if ( ! function_exists( 'risehand_donation_progressbar' ) ) {
    add_action( 'risehand_get_donation_progressbar', 'risehand_donation_progressbar' ); 
    function risehand_donation_progressbar() {
        $formid = get_the_ID();
        $show_goal = give_get_meta( $formid, '_give_goal_option', true );
        $risehand_givewp_updates = apply_filters( 'risehand_givewp_updates', $formid );

        if ( $show_goal != 'disabled' ) { 
            // Clamp progress to a maximum of 100
            $progress = min( $risehand_givewp_updates['progress'], 100 ); 
            ?>
            <div class="donation_progress" data-progress="<?php echo esc_attr( $progress ); ?>">
                <div class="perin trans" style="width: 0%;">
                    <span class="percent trans">0%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar trans <?php if ( $progress >= 95 ) { echo 'bg-success'; } ?>"
                         role="progressbar"
                         style="width: 0%;"
                         aria-valuenow="0"
                         aria-valuemin="0"
                         aria-valuemax="100"
                         data-progress-bar="<?php echo esc_attr( $progress ); ?>">     
                    </div>
                </div>
            </div> 
        <?php }   
    }
}


/*
** ============================== 
** Donation Post Category
** ============================== 
*/
if (!function_exists('risehand_get_donation_categories')):
    function risehand_get_donation_categories() {
        $options = array();
            $taxonomy = 'give_category';
            if (!empty($taxonomy)) {
                $terms = get_terms(
                    array(
                        'parent' => 0,
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                        )
                    );
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            if (isset($term)) {
                                $options[''] = 'Select';
                                if (isset($term->slug) && isset($term->name)) {
                                    $options[$term->slug] = $term->name;
                                }
                            }
                        }
                    }
                }
            return $options;
    }
endif;
