<?php

namespace  Risehandaddons\Core\Widgets\Post;

if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Donation_post_grid_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-donation-post-grid-v1';
    }

    public function get_title()
    {
        return __('Donation Post Grid V1', 'risehand-addons');
    }

    public function get_icon()
    {
        return 'icon-risehand-svg';
    }

    public function get_categories()
    {
        return ['103'];
    }

    protected function register_controls(){
 
        // style one start
        $this->start_controls_section('donation_g_settings',
        [ 
            'label' => __('Donation Content', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
        ); 
        $this->add_control(
            'donation_styles',
            [
                'label' => __('Donation style', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'   => esc_html__( 'Style One', 'risehand-addons' ),
                    'style_two'   => esc_html__( 'Style Two', 'risehand-addons' ),
                    'style_three'   => esc_html__( 'Style Three', 'risehand-addons' ),  
                ],
                'default' => 'style_one',
            ]
        );  
        $this->add_control(
            'donation_column',
            [
                'label' => __('Donation Column', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'risehand-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'risehand-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'risehand-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'risehand-addons' ),
                ],
                'default' => 'col-xl-4 col-lg-4 col-md-6 col-sm-6',
            ]
        ); 
        
        $this->add_control(
            'post_count',
            [
                'label' => __('Post Count', 'risehand-addons'),
                'type'    => \Elementor\Controls_Manager::NUMBER,
				'default' => 10,
				'min'     => 1,
				'max'     => 100,
				'step'    => 1,
            ]
        );
        $this->add_control(
			'query_orderby',
			[
				'label'   => esc_html__( 'Order By', 'risehand-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'date',
				'options' => array(
					'date'       => esc_html__( 'Date', 'risehand-addons' ),
					'title'      => esc_html__( 'Title', 'risehand-addons' ),
					'menu_order' => esc_html__( 'Menu Order', 'risehand-addons' ),
					'rand'       => esc_html__( 'Random', 'risehand-addons' ),
				),
			]
		);
		$this->add_control(
			'query_order',
			[
				'label'   => esc_html__( 'Order', 'risehand-addons' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => array(
					'DESC' => esc_html__( 'DESC', 'risehand-addons' ),
					'ASC'  => esc_html__( 'ASC', 'risehand-addons' ),
				),
			]
        ); 
        $this->add_control(
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Category', 'risehand-addons'),
			'options' => risehand_get_donation_categories(),
			]
        );
        $this->add_control(
            'post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $this->add_control(
            'post_id_not',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
            ]
        );  
        $this->add_control(
            'excerpt_enable',
            [
                'label' => __('Excerpt Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => true,
                'default' => true,
            ]
        );
        $this->add_control(
            'cat_enable',
            [
                'label' => __('Category Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => true,
                'default' => true,
            ]
        );
        $this->add_control(
            'pagination_enable',
            [
                'label' => __('Pagination Enable / Disable', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Yes', 'risehand-addons'),
                'label_off' => __('No', 'risehand-addons'),
                'return_value' => true,
                'default' => true,
            ]
        );
        $this->add_responsive_control(
            'pagination_alignment',
            [
                'label' => __('Pagination alignments', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                  'left' => [
                    'title' => __( 'Pagination Left', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-left',
                  ],
                  'center' => [
                    'title' => __( 'Pagination Center', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-center',
                  ],
                  'right' => [
                    'title' => __( 'Pagination Right', 'risehand-addons' ),
                    'icon' => 'eicon-text-align-right',
                  ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                  '{{WRAPPER}} .pagination' => 'justify-content: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes'
               ],
            ]
        ); 
        $this->end_controls_section(); 
    
    
        $this->start_controls_section('custom_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' =>\Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_control(
            'bg_color',
             [
                'label' => __('Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section  .do_common_style' => 'background: {{VALUE}};',
                ], 
             ]
        ); 
        $this->add_control(
            'br_color',
             [
                'label' => __('Border Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails > div::before' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails' => 'border-color: {{VALUE}};',
                ], 
             ]
        ); 
        $this->add_control(
            'style1s',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'cat_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .do_common_style .catdo a',
			]
		); 
        $this->add_control(
            'catcolor_color',
             [
                'label' => __('Category Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .catdo a' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'catcolobg_color',
             [
                'label' => __('Category Bg Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style  .catdo a' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => ['style_one' , 'style_two'],
                ]
             ]
        );
        $this->add_control(
            'style1',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .title_24 a',
			]
		); 
        $this->add_control(
            'title_color',
             [
                'label' => __('Title Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .title_24 a' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'style2',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Description Typography', 'risehand-addons' ),
				'name' => 'desc_typo',
				'selector' => '{{WRAPPER}} .give_forms_section .desc_p ',
			]
		); 
        $this->add_control(
            'desc_color',
             [
                'label' => __('Description Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .desc_p ' => 'color: {{VALUE}};',
                ], 
             ]
        );
        $this->add_control(
            'style3',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'progress_bar_box_bg_color',
             [
                'label' => __('Progress Bar Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises' => 'background: {{VALUE}};',
                ],  
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'progress_bar_bg_color',
             [
                'label' => __('Progress Bar Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .donation_progress .progress' => 'background: {{VALUE}};',
                ], 
             ]
        );
        
        $this->add_control(
            'active_progress_bar_bg_color',
             [
                'label' => __('Progress Bar Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .donation_progress .progress .progress-bar' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .donation_progress .perin .percent::before' => 'border-color: {{VALUE}};',
                    
                ], 
                
             ]
        );

        $this->add_control(
            'percentage_color',
             [
                'label' => __('Progress Percentage Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .donation_progress .perin .percent' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'percentage_content_color',
             [
                'label' => __('Progress Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises .goals_details div' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'percentage_content_price_color',
             [
                'label' => __('Progress  Price Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .donation_raises .goals_details span' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        );
        $this->add_control(
            'style4',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
                    'condition' => [
                        'donation_styles' => 'style_one',
                    ]
            ]
        );

        $this->add_control(
            'hprogress_bar_box_bg_color',
             [
                'label' => __('Hover Progress Bar Box Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hprogress_bar_bg_color',
             [
                'label' => __('Hover Progress Bar Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises  .progress' => 'background: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        
        $this->add_control(
            'hactive_progress_bar_bg_color',
             [
                'label' => __('Hover Progress Bar Active Background Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises .progress .progress-bar' => 'background: {{VALUE}};',
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises .perin .percent::before' => 'border-color: {{VALUE}};',
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );

        $this->add_control(
            'hpercentage_color',
             [
                'label' => __('Hover Progress Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .content .donation_raises  .perin .percent' => 'color: {{VALUE}};', 
                    
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hpercentage_content_color',
             [
                'label' => __('Hover Progress Content Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover .content .donation_raises .goals_details div' => 'color: {{VALUE}}!important;', 
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'hpercentage_content_price_color',
             [
                'label' => __('Hover Progress  Price Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style:hover  .donation_raises .goals_details span' => 'color: {{VALUE}};', 
                ], 
                'condition' => [
                    'donation_styles' => 'style_one',
                ]
             ]
        );
        $this->add_control(
            'style6',
            [
                    'type' => \Elementor\Controls_Manager::DIVIDER, 
            ]
        );
        $this->add_control(
            'price_label_color',
             [
                'label' => __('Price Label Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style   .goals_details .text ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
        $this->add_control(
            'price_color',
             [
                'label' => __('Price  Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style   .goals_details .result ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
        $this->add_control(
            'price_goal_color',
             [
                'label' => __('Price Goal Color', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .give_forms_section .do_common_style .content .depth_content .goalsdetails small.result ' => 'color: {{VALUE}};', 
                    
                ], 
             ]
        ); 
    $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
$allowed_tags = wp_kses_allowed_html('post'); 
?> 
  <section class="give_forms_section <?php echo esc_attr($settings['donation_styles']); ?><?php if($settings['cat_enable'] == "yes"): ?> cat_enable<?php endif; ?><?php if($settings['excerpt_enable'] == "yes"): ?> excerpt_enable<?php endif; ?>"> <div class="row"> <?php if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'give_forms', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $settings['post_count'], 'orderby' => $settings['query_orderby'], 'order' => $settings['query_order'], 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'give_category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $donation_grid_query = new \WP_Query( $args ); ?> <?php while ($donation_grid_query->have_posts()) : ?> <?php $donation_grid_query->the_post(); ?> <?php global $post; ?> <?php // Donation card ?> <?php if($settings['donation_styles'] == 'style_two'): ?> <div class="<?php echo esc_attr($settings['donation_column']); ?>"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php // Donation style end?> <?php // Donation card ?> <?php elseif($settings['donation_styles'] == 'style_three'): ?> <div class="<?php echo esc_attr($settings['donation_column']); ?>"> <?php do_action('get_risehand_donation_card_2'); ?> </div> <?php // Donation style end?> <?php else: ?> <?php // Donation card ?> <div class="<?php echo esc_attr($settings['donation_column']); ?>"> <?php do_action('get_risehand_donation_card_1'); ?> </div> <?php // Donation style ?> <?php endif; ?> <?php // Donation card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php if($settings['pagination_enable'] == true):?> <div class="row"> <div class="col-lg-12"> <div class="pagination"> <?php $pagination = 999999999; echo paginate_links( array( 'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ), 'format' => '?paged=%#%', 'current' => max(0, $paged), 'total' => $donation_grid_query->max_num_pages, 'prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>', 'type'=>'list', 'add_args' => false ) ); ?> </div> </div> </div> <?php endif; ?> </section>
<?php 
}
}