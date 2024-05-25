<?php
add_action( 'vc_before_init', 'vc_progress_v1_vcmap' );
function vc_progress_v1_vcmap() {
 vc_map( array(
  "name" => __( "Progress Bar V1", "risehand-addons" ),
  "base" => "get_progress_bar_init",
  "class" => "",
  "icon" => "icon-risehand-svg", 
  "category" => __( "Risehand Content", "risehand-addons"),
  "params" => array( 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Progress Bar Styles', 'risehand-addons' ),
            'param_name' => 'progress_style',
            'value'      => array(
                esc_html__( 'Style One', 'risehand-addons' )  => 'style_one',
                esc_html__( 'Style Two', 'risehand-addons' )  => 'style_two', 
            ), 
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Heading Tag Type', 'risehand-addons' ),
            'param_name' => 'tag_type',
            'value'      => array(
                esc_html__( 'Div', 'risehand-addons' )  => 'div',
                esc_html__( 'H1', 'risehand-addons' )  => 'h1',
                esc_html__( 'H2', 'risehand-addons' )  => 'h2',
                esc_html__( 'H3', 'risehand-addons' )  => 'h3', 
                esc_html__( 'H4', 'risehand-addons' )  => 'h4',
                esc_html__( 'H5', 'risehand-addons' )  => 'h5', 
                esc_html__( 'H6', 'risehand-addons' )  => 'h6', 
            ),
            'group' => esc_html__('General', 'risehand-addons') ,
        ), 
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Color Type', 'risehand-addons' ),
            'param_name' => 'color_type',
            'value'      => array(
                esc_html__( 'Color One', 'risehand-addons' )  => 'color_one',
                esc_html__( 'Color Two', 'risehand-addons' )  => 'color_two', 
            ), 
            'group' => esc_html__('General', 'risehand-addons') ,
        ),  
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Enter Percentage Number', 'risehand-addons'),
            'description' => esc_html__('Enter Percentage Number like this -> 100', 'risehand-addons'),
            'param_name' => 'percent',  
            'group' => esc_html__('General', 'risehand-addons'), 
        ), 
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Title', 'risehand-addons'),
            'param_name' => 'title', 
            'group' => esc_html__('General', 'risehand-addons'), 
        ), 
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Content', 'risehand-addons'),
            'param_name' => 'pcontent', 
            'group' => esc_html__('General', 'risehand-addons'), 
        ), 

        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Progress Bar Percentage Color', 'risehand-addons'),
            'param_name' => 'percolor',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text Color', 'risehand-addons'),
            'param_name' => 'title_color',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ), 
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Text 2 Color', 'risehand-addons'),
            'param_name' => 'title_two_color',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Progress Bar Active Color', 'risehand-addons'),
            'param_name' => 'progres_active',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ),
        array(
            'type' => 'colorpicker',
            'heading' => esc_html__('Progress Bar Color', 'risehand-addons'),
            'param_name' => 'progresscolor',
            'group' => esc_html__('Styling', 'risehand-addons'), 
        ),
 
)));
}

// shortcode

add_shortcode( 'get_progress_bar_init', 'vc_progress_v1' );
function vc_progress_v1( $atts, $content = null ) {  
$unique_id = uniqid();
$atts = shortcode_atts(
   array(  
        'tag_type' => 'div',
        'progress_style' => 'style_one',
        'color_type' => 'color_one',
        'percent' => '',   
        'title'  => '',
        'pcontent'  => '', 
        'percolor' => '', 
        'title_color' => '', 
        'title_two_color' => '',
        'progres_active' => '',
        'progresscolor' => '',
   ), $atts
);
$allowed_tags = wp_kses_allowed_html('post');
ob_start();
?>   
    <style> 
    <?php if($atts['percolor']): ?>
    .progress_bar_section.unique-id-<?php echo esc_attr($unique_id); ?> .progress small ,  .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .progress_new .progress-value {
        color:<?php echo esc_attr($atts['percolor']); ?>;
    } 
    <?php endif; ?>
    <?php if($atts['title_color']): ?>
    .progress_bar_section.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_20 ,  .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_24 {
        color:<?php echo esc_attr($atts['title_color']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['title_two_color']): ?>
    .progress_bar_section.unique-id-<?php echo esc_attr($unique_id); ?> .title_no_a_20.right ,  .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .desc_p {
        color:<?php echo esc_attr($atts['title_two_color']); ?>!important;
    }
    <?php endif; ?>
    <?php if($atts['progres_active']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?> .progress-bar {
        background-color:<?php echo esc_attr($atts['progres_active']); ?>;
    }
 
    .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .progress_new .ProgressBar-circle, .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .progress_new .ProgressBar-background {
        stroke:<?php echo esc_attr($atts['progres_active']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['progresscolor']): ?>
    .unique-id-<?php echo esc_attr($unique_id); ?>  .progress , .unique-id-<?php echo esc_attr($unique_id); ?> .progress-stacked {
        background:<?php echo esc_attr($atts['progresscolor']); ?>;
    }
    <?php endif; ?>
    <?php if($atts['progresscolor']): ?>
    .progress_bar_section_two.unique-id-<?php echo esc_attr($unique_id); ?> .progress_new .ProgressBar-background {
        stroke:<?php echo esc_attr($atts['progresscolor']); ?>;
    }
    <?php endif; ?>
    </style>
<?php if($atts['progress_style'] == "style_two"): ?> 
    <section class="progress_bar_section_two d_flex unique-id-<?php echo esc_attr($unique_id); ?> <?php echo esc_attr($atts['color_type']) ?>"> 
            <div class="progress_new">
                <div class="ProgressBar ProgressBar--animateText" data-progress="<?php echo esc_attr($atts['percent']); ?>">
                    <svg class="ProgressBar-contentCircle" height="170" width="170">
                        <circle  class="ProgressBar-background" cx="85" cy="85" r="75" />
                        <circle transform="rotate(-90, 85, 85)"   class="ProgressBar-circle" cx="85" cy="85" r="75" />
                    </svg>
                </div>
                <div class="progress-value d_flex title_no_a_26">
                    <?php echo esc_attr($atts['percent']); ?><?php echo esc_html('%' , 'creote-addons'); ?></h2>
                </div>
            </div>
            <?php if(!empty($atts['title']) || !empty($atts['pcontent'])): ?>
            <div class="content_box"> 
                <?php if(!empty($atts['title'])): ?>
                <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_24 mb_0"><?php echo esc_attr($atts['title']); ?></<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['pcontent'])): ?>
                <p class="desc_p mt_10 mb_0"><?php echo esc_attr($atts['pcontent']); ?></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>
    </section>
<?php else: ?>
    <section class="progress_bar_section  unique-id-<?php echo esc_attr($unique_id); ?> <?php echo esc_attr($atts['color_type']) ?>"> 
        <div class="progress"> 
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo esc_attr($atts['percent']); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr($atts['percent']); ?>%"></div>
            <small style="left:<?php echo esc_attr($atts['percent']); ?>%;"><?php echo esc_attr($atts['percent']); ?>%</small>
        </div>
        <?php if(!empty($atts['title']) || !empty($atts['pcontent'])): ?>
            <div class="d_flex align-items-center">
                <?php if(!empty($atts['title'])): ?>
                <<?php echo esc_attr($atts['tag_type']); ?> class="title_no_a_20"><?php echo esc_attr($atts['title']); ?></<?php echo esc_attr($atts['tag_type']); ?>>
                <?php endif; ?>
                <?php if(!empty($atts['pcontent'])): ?>
                <div class="title_no_a_20 right"><?php echo esc_attr($atts['pcontent']); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>

               
<?php
return ob_get_clean();
}