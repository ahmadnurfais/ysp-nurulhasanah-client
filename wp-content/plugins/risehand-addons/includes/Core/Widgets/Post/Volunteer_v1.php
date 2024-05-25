<?php

namespace  Risehandaddons\Core\Widgets\Post;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.

class Volunteer_v1 extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'risehand-volunteer-v1';
    }
    public function get_title()
    {
        return __('Volunteer V1' , 'risehand-addons');
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
        $this->start_controls_section(
            'volunteer_set_content',
            [
                'label' => __('Volunteer Settings', 'risehand-addons')
            ]
        );
        $this->add_control(
            'volunteer_styles',
            [
                'label' => __('Volunteer style', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style_one'  => __('Style One ', 'risehand-addons'),
                    'style_two'  => __('Style Two ', 'risehand-addons'),
                ],
                'default' => 'style_one',
            ]
        );
        $this->add_control(
            'volunteer_column',
            [
                'label' => __('Column', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'col-xl-3 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Four Column', 'risehand-addons' ),
                    'col-xl-4 col-lg-4 col-md-6 col-sm-6'   => esc_html__( 'Three Column', 'risehand-addons' ),
                    'col-xl-6 col-lg-6 col-md-6 col-sm-6'   => esc_html__( 'Two Column', 'risehand-addons' ),
                    'col-xl-12'   => esc_html__( 'One Column', 'risehand-addons' ),
                ],
                'default' => 'col-xl-3 col-lg-4 col-md-6 col-sm-6',
            
            ]
        ); 
        $this->add_control(
            'post_count',
        [
            'label'   => esc_html__( 'Number of volunteer', 'risehand-addons' ),
            'type'    =>  \Elementor\Controls_Manager::NUMBER,
            'default' => 10,
            'min'     => 1,
            'max'     => 100,
            'step'    => 1,
        ]); 
        $this->add_control(
            'query_orderby',
            [
                'label'   => esc_html__( 'Order By', 'risehand-addons' ),
                'type'    =>  \Elementor\Controls_Manager::SELECT,
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
                'type'    =>  \Elementor\Controls_Manager::SELECT,
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
			'options' => risehand_get_volunteer_categories(),
			]
        );
        $this->add_responsive_control(
            'post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $this->add_responsive_control(
            'post_id_not',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
            ]
        );  
        $this->add_control(
            'div1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );
        $this->add_control(
            'pagination_enable',
           [
              'label' => __('Pagination Enable', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::SWITCHER,
               'label_on' => __('Yes', 'risehand-addons'),
               'label_off' => __('No', 'risehand-addons'),
               'return_value' => 'yes',
               'default' => 'yes',
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
                  '{{WRAPPER}} .pagination_blog > .page-numbers' => 'justify-content: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes'
               ],
            ]
        ); 
        $this->add_control(
			'hrp',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'pagination_enable' => 'yes'
                ],
			]
		); 
        $this->add_control(
            'pagcolor',
            [
                'label' => __('Pagination Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagbgcolor',
            [
                'label' => __('Pagination background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagbrcolor',
            [
                'label' => __('Pagination Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li a.page-link , {{WRAPPER}} .pagination li .page-numbers, {{WRAPPER}} .page-numbers li a.page-link,
                {{WRAPPER}}  .page-numbers li .page-numbers' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagacolor',
            [
                'label' => __('Pagination Active Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current, {{WRAPPER}} .page-numbers li span.current, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'apagbgcolor',
            [
                'label' => __('Pagination background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current, {{WRAPPER}} .page-numbers li span.current, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'apagbrcolor',
            [
                'label' => __('Pagination Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li span.current , {{WRAPPER}} .page-numbers li span, {{WRAPPER}} .pagination li span:hover, {{WRAPPER}} .page-numbers li span:hover,
                    {{WRAPPER}} .pagination li:hover a, {{WRAPPER}} .page-numbers li:hover a' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxticoncolor',
            [
                'label' => __('Pagination Next / Prev  Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                    {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next,
                    {{WRAPPER}} .page-numbers li a.prev' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxtpreviconcolor',
            [
                'label' => __('Pagination Next / Prev Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        );
        $this->add_control(
            'pagnxtrcolor',
            [
                'label' => __('Pagination Next / Prev Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->add_control(
            'pagnxtbgcolor',
            [
                'label' => __('Pagination Next / Prev Bg Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pagination li.next_link a, {{WRAPPER}} .pagination li.prev_link a, {{WRAPPER}} .pagination li a.next, {{WRAPPER}} .pagination li a.prev,
                {{WRAPPER}} .page-numbers li.next_link a, {{WRAPPER}} .page-numbers li.prev_link a, {{WRAPPER}} .page-numbers li a.next, {{WRAPPER}} .page-numbers li a.prev' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'pagination_enable' => 'yes',
                ]
            ]
        ); 
        $this->end_controls_section();

        $this->start_controls_section('vol_boxc_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
        );  
        
        $this->add_control(
            'pattern_bg_color',
            [
                'label' => __('Pattern Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .volunteer-style_1 .image-box .spattern_bg ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hopattern_bg_color',
            [
                'label' => __('Hover Pattern Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .volunteer-style_1:hover .image-box .spattern_bg ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
			'style1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'titles_color',
            [
                'label' => __('Title Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .volunteer-style_1 .title_24 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}}  .volunteer-style_1 .title_24 a ',
			]
		); 
        $this->add_control(
			'style2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'job_color',
            [
                'label' => __('Desigination Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .volunteer-style_1 .content_box .font_special ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Desigination Typography', 'risehand-addons' ),
				'name' => 'job_typo',
				'selector' => '{{WRAPPER}}  .volunteer-style_1 .content_box .font_special ',
			]
		); 
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'social_media',
            [
                'label' => __('Social Media Icon Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'social_br_media',
            [
                'label' => __('Social Media Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'social_bg_media',
            [
                'label' => __('Social Media Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hsocial_media',
            [
                'label' => __('Hover Social Media Icon Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hsocial_br_media',
            [
                'label' => __('Hover Social Media Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hsocial_bg_media',
            [
                'label' => __('Hover Social Media Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .social-icons ul li .m_icon:hover ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
    $this->end_controls_section();   
    }
protected function render(){
$settings = $this->get_settings_for_display();
?>
<section class="volunteer_post_section"> <div class="row"> <?php if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $post_in = ''; if(!empty($settings['post_id'])){ $post_in = explode(',', $settings['post_id']); } $post_id_not = ''; if(!empty($settings['post_id_not'])){ $post_id_not = explode(',', $settings['post_id_not']); } $args = array( 'post_type' => 'volunteer', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $settings['post_count'], 'orderby' => $settings['query_orderby'], 'order' => $settings['query_order'], 'post__in' => $post_in, 'post__not_in' => $post_id_not, ); if ($settings['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'volunteer_category', 'field' => 'slug', 'terms' => $settings['query_category'], ), ); } $volunteer_grid_query = new \WP_Query( $args ); ?> <?php while ($volunteer_grid_query->have_posts()) : ?> <?php $volunteer_grid_query->the_post(); ?> <?php global $post; // volunteer card ?> <?php if($settings['volunteer_styles'] == 'style_two'): ?> <div class="<?php echo esc_attr($settings['volunteer_column']); ?>"> <?php do_action('get_risehand_volunteer_card_7'); ?> </div> <?php else: ?> <div class="<?php echo esc_attr($settings['volunteer_column']); ?>"> <?php do_action('get_risehand_volunteer_card_1'); ?> </div> <?php endif; ?> <?php // volunteer card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> </div> <?php if($settings['pagination_enable'] == true):?> <div class="row"> <div class="col-lg-12"> <div class="pagination"> <?php $pagination = 999999999; echo paginate_links( array( 'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ), 'format' => '?paged=%#%', 'current' => max(0, $paged), 'total' => $volunteer_grid_query->max_num_pages, 'prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>', 'type'=>'list', 'add_args' => false ) ); ?> </div> </div> </div> <?php endif; ?> </section>
<?php
    }
}