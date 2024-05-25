<?php
namespace  Risehandaddons\Core\Widgets\Post;
if (!defined('ABSPATH')) {
    exit;
} // If this file is called directly, abort.
class Portfolio_post_v1 extends \Elementor\Widget_Base{
    public function get_name()
    {
        return 'risehand-portfolio-post-v1';
    }
    public function get_title()
    {
        return __('Portfolio Post V1' , 'risehand-addons');
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
            'portfolio_set_content',
            [
                'label' => __('Portfolio Settings', 'risehand-addons')
            ]
        );
        $this->add_control(
            'portfolio_type',
            [
                'label' => __('Portfolio Type', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'filter_type'  => __('Filter Type', 'risehand-addons'),
                    'grid_type' => __('Basic Grid Type', 'risehand-addons'),
                    'masnory_type' => __('Masonry Type', 'risehand-addons'),
                    'grid_type_two' => __('Grid Type Two ', 'risehand-addons'), 
                ],
                'default' => 'filter_type',
            ]
        );
        $this->add_control(
            'portfolio_styles',
            [
                'label' => __('Portfolio style', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'style_one'  => __('Style One ', 'risehand-addons'),
                    'style_two' => __('Style Two ', 'risehand-addons'),
                    'style_three' => __('Style Three ', 'risehand-addons'),
                    'style_four' => __('Style Four ', 'risehand-addons'), 
                ],
                'default' => 'style_one',
                'condition' => [
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
                ],
            ]
        );
        $this->add_control(
            'portfolio_styles_two',
            [
                'label' => __('Portfolio style', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'style_one'  => __('Style One ', 'risehand-addons'),
                    'style_two' => __('Style Two ', 'risehand-addons'),
                    'style_three' => __('Style Three ', 'risehand-addons'), 
                ],
                'default' => 'style_one',
                'condition' => [
                    'portfolio_type' => ['grid_type_two']
                ],
            ]
        );
        $this->add_control(
            'portfolio_column',
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
                'condition' => [
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
                ],
            ]
        );
        $repeater_portfolio = new \Elementor\Repeater();
        $repeater_portfolio->add_control(
        'post_count',
        [ 
            'label'   => esc_html__( 'Number of post', 'risehand-addons' ),
            'type'    =>  \Elementor\Controls_Manager::NUMBER,
            'default' => 9,
            'min'     => 1,
            'max'     => 100,
            'step'    => 1,
        ]); 
        $repeater_portfolio->add_control(
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
        $repeater_portfolio->add_control(
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
        $repeater_portfolio->add_control(
            'post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $repeater_portfolio->add_control(
            'post_not_in',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
            ]
        ); 
        $repeater_portfolio->add_control(
            'query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
            'label_block' => true,
            'multiple' => true,
			'label' => esc_html__('Category', 'risehand-addons'),
			'options' => risehand_get_portfolio_categories(),
			]
        );
        $repeater_portfolio->add_responsive_control(
            'filtertitle',
            [
               'label' => __('Filter Button Title', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXT,
               'default' => __('Risehand', 'risehand-addons'),
               'placeholder' => __('Type your title here', 'risehand-addons'),    
            ]
        );
        $this->add_control(
            'project_filter_repeater',
            [
                'label' => __('Portfolio Content', 'risehand-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater_portfolio->get_controls(),
                'default' => [
                    [
                        'filtertitle' => 'Risehand' , 
                    ],  
                ],
                'title_field' => '{{{ filtertitle }}}',
                'condition' => [
                    'portfolio_type' => ['filter_type']
                ],
            ]
        );
      
        // filter type end
        // Other type Start
        $this->add_control(
        'n_post_count',
        [ 
            'label'   => esc_html__( 'Number of post', 'risehand-addons' ),
            'type'    =>  \Elementor\Controls_Manager::NUMBER,
            'default' => 9,
            'min'     => 1,
            'max'     => 100,
            'step'    => 1,
            'condition' => [
                'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
            ],
        ]); 
        $this->add_control(
            'n_query_orderby',
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
                'condition' => [
                    'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
                ],
            ]
        );
        $this->add_control(
            'n_query_order',
            [
                'label'   => esc_html__( 'Order', 'risehand-addons' ),
                'type'    =>  \Elementor\Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => array(
                    'DESC' => esc_html__( 'DESC', 'risehand-addons' ),
                    'ASC'  => esc_html__( 'ASC', 'risehand-addons' ),
                ),
                'condition' => [
                    'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
                ],
            ]
        );
        $this->add_control(
            'n_query_category', 
			[
            'type' => \Elementor\Controls_Manager::SELECT2,
			'label' => esc_html__('Category', 'risehand-addons'),
            'label_block' => true,
            'multiple' => true,
			'options' => risehand_get_portfolio_categories(),
            'condition' => [
                'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
            ],
			]
        );
        $this->add_control(
            'n_post_id',
            [
               'label' => __('Enter the Post Id to dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 1054 , 103 , 11', 'risehand-addons'),    
               'condition' => [
                'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
            ],
            ]
        ); 
        $this->add_control(
            'not_post_in',
            [
               'label' => __('Enter the Post Id that do not dispay', 'risehand-addons'),
               'type' => \Elementor\Controls_Manager::TEXTAREA,
               'default' => __('', 'risehand-addons'),
               'placeholder' => __('Enter the post id like this -> 154 , 103 , 11', 'risehand-addons'),    
               'condition' => [
                'portfolio_type' => ['grid_type' , 'masnory_type' , 'grid_type_two']
                ],
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
               'condition' => [
                'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
                ],
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
               ],
            ]
        ); 
        $this->add_control(
			'hrp',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
                'condition' => [
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
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
                    'pagination_enable' => 'yes' ,
                    'portfolio_type' => ['filter_type' , 'grid_type' , 'masnory_type']
                ]
            ]
        ); 
        $this->end_controls_section();
        $this->start_controls_section('portfoliofilt_box_css',
        [ 
            'label' => __('Filter Tab Css', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
        );
        $this->add_responsive_control(
            'filter_alignment',
            [
                'label' => esc_html__( 'Filter Alignment', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'start' => [
                        'title' => esc_html__( 'Left', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__( 'Center', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'end' => [
                        'title' => esc_html__( 'Right', 'risehand-addons' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .project_filter  ' => 'justify-content: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'filter_color',
            [
                'label' => __('Filter Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li ' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'filter_bg_color',
            [
                'label' => __('Filter Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li ' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'filter_br_color',
            [
                'label' => __('Filter Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li ' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'afilter_color',
            [
                'label' => __('Active / Hover Filter Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li:hover, {{WRAPPER}} .project_filter li.current ' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'afilter_bg_color',
            [
                'label' => __('Active / Hover Filter Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li:hover, {{WRAPPER}} .project_filter li.current' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'afilter_br_color',
            [
                'label' => __('Active / Hover  Filter Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project_filter li:hover, {{WRAPPER}} .project_filter li.current ' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section('portfolio_box_css',
        [ 
            'label' => __('Custom Css', 'risehand-addons'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
        );  
        $this->add_control(
            'iamge_height',
            [
                'label' => esc_html__( 'Image Height', 'risehand-addons' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 2000,
                'step' => 1,
                'selectors' => [
                    '{{WRAPPER}}  .image-box img ' => 'height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_control(
            'overlay_color',
            [
                'label' => __('Overlay Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}  .image-box .img_link::before ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
			'style0',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'box_bg_colors',
            [
                'label' => __('Box Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}   .content_box_outer .content_box_in ' => 'background: {{VALUE}};',
                ],
                'condition' => [ 
                    'portfolio_type' => ['grid_type' , 'masnory_type' , 'filter_type']
                ]
            ]
        ); 
        $this->add_control(
            'overlay_colors',
            [
                'label' => __('Overlay Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-style_5:after' => 'background: linear-gradient(0deg, {{VALUE}} 6%, rgba(0, 0, 0, 0) 100%);',
                ],
                'condition' => [ 
                    'portfolio_type' => ['grid_type_two']
                ]
            ]
        ); 
        $this->add_control(
            'pabg_colors',
            [
                'label' => __('Pattern Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-style_5 .content_box_outer .spattern_bg' => 'background: {{VALUE}};',
                ],
                'condition' => [ 
                    'portfolio_type' => ['grid_type_two']
                ]
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
                    '{{WRAPPER}}  .content_box_in .title_24 a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Title Typography', 'risehand-addons' ),
				'name' => 'title_typo',
				'selector' => '{{WRAPPER}}  .content_box_in .title_24 a ',
			]
		); 
        $this->add_control(
			'style2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'cat_color',
            [
                'label' => __('Category Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in p a , 
                    {{WRAPPER}}   .content_box_in p ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
                'label' => esc_html__( 'Category Typography', 'risehand-addons' ),
				'name' => 'cat_typo',
				'selector' => '{{WRAPPER}}  .content_box_in p a   ',
			]
		); 
        $this->add_control(
			'style3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER, 
			]
		);
        $this->add_control(
            'link_color',
            [
                'label' => __('Link Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more  , {{WRAPPER}} .content_box_outer .p_rd_more' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'linkbr_color',
            [
                'label' => __('Link Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more   , {{WRAPPER}} .content_box_outer .p_rd_more ' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'linkbg_color',
            [
                'label' => __('Link Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more   , {{WRAPPER}} .content_box_outer .p_rd_more ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlink_color',
            [
                'label' => __('Hover Link Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover  , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlinkbr_color',
            [
                'label' => __('Hover Link Border Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'border-color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'hlinkbg_color',
            [
                'label' => __('Hover Link Background Color', 'risehand-addons'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .content_box_in .p_rd_more:hover , {{WRAPPER}} .content_box_outer .p_rd_more:hover  ' => 'background: {{VALUE}};',
                ],
            ]
        ); 
    $this->end_controls_section();
}
protected function render(){
$settings = $this->get_settings_for_display();
?> 
<section class="portfolio_post_section">
    <?php if($settings['portfolio_type'] == 'grid_type' || $settings['portfolio_type'] == 'masnory_type'): ?>
    <div class="grid_masnory_box<?php if($settings['portfolio_type'] == 'masnory_type'): ?> project_container clearfix<?php endif; ?>">
        <div class="row">
            <?php
            $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : '';
            $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : '';
            $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : '';
            
            if(get_query_var('paged')){
                $paged = get_query_var( 'paged' );
            } elseif ( get_query_var( 'page' ) ) {
                $paged = get_query_var( 'page' );
            } else {
                $paged = 1;
            }

            $n_post_id = '';
            if(!empty($settings['n_post_id'])){
                $n_post_id = explode(',', $settings['n_post_id']);
            }

            $post_not_in = '';
            if(!empty($settings['not_post_in'])){
                $post_not_in = explode(',', $settings['not_post_in']);
            }

            $args = array(
                'post_type' => 'portfolio',
                'ignore_sticky_posts' => true,
                'paged' => $paged,
                'posts_per_page' => $post_count,
                'orderby' => $query_orderby,
                'order' => $query_order,
                'post__in' => $n_post_id,
                'post__not_in' => $post_not_in,
            );

            if ($settings['n_query_category']) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'portfolio_category',
                        'field' => 'slug',
                        'terms' => $settings['n_query_category'],
                    ),
                );
            }

            $portfolio_grid_query = new \WP_Query( $args );
            ?>
            <?php while ($portfolio_grid_query->have_posts()) : ?>
            <?php $portfolio_grid_query->the_post(); ?>
            <?php global $post; // portfolio card ?>
            <?php if($settings['portfolio_styles'] == 'style_two'): ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?>">
                <?php do_action('get_risehand_portfolio_card_2'); ?>
            </div>
            <?php endif; ?>
            <?php elseif($settings['portfolio_styles'] == 'style_three'): ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?>">
                <?php do_action('get_risehand_portfolio_card_3'); ?>
            </div>
            <?php endif; ?>
            <?php elseif($settings['portfolio_styles'] == 'style_four'): ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?>">
                <?php do_action('get_risehand_portfolio_card_4'); ?>
            </div>
            <?php endif; ?>
            <?php else: ?>
            <?php if (has_post_thumbnail()): ?>
            <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?>">
                <?php do_action('get_risehand_portfolio_card_1'); ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <?php // portfolio card end ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <?php if($settings['pagination_enable'] == true):?>
    <div class="row">
        <div class="col-lg-12">
            <div class="pagination <?php echo esc_attr($settings['pagination_alignment']); ?>">
                <?php
                $pagination = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $pagination, '%#%', get_pagenum_link( $pagination ) ),
                    'format' => '?paged=%#%',
                    'current' => max(0, $paged),
                    'total' => $portfolio_grid_query->max_num_pages,
                    'prev_text' => '<i class="fa fa-angle-left"></i>',
                    'next_text' => '<i class="fa fa-angle-right"></i>',
                    'type'=>'list',
                    'add_args' => false
                ) );
                ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php elseif($settings['portfolio_type'] == 'grid_type_two'): ?>
    <div class="portfolio_mousewheel">
        <?php
        $n_post_id = '';
        if(!empty($settings['n_post_id'])){
            $n_post_id = explode(',', $settings['n_post_id']);
        }

        $post_not_in = '';
        if(!empty($settings['not_post_in'])){
            $post_not_in = explode(',', $settings['not_post_in']);
        }

        $post_count = ! empty( $settings['n_post_count'] ) ? $settings['n_post_count'] : '';
        $query_orderby = ! empty( $settings['n_query_orderby'] ) ? $settings['n_query_orderby'] : '';
        $query_order = ! empty( $settings['n_query_order'] ) ? $settings['n_query_order'] : '';

        $args = array(
            'post_type' => 'portfolio',
            'ignore_sticky_posts' => true,
            'posts_per_page' => $post_count,
            'orderby' => $query_orderby,
            'order' => $query_order,
            'post__in' => $n_post_id,
            'post__not_in' => $post_not_in,
        );

        if ($settings['n_query_category']) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'portfolio_category',
                    'field' => 'slug',
                    'terms' => $settings['n_query_category'],
                ),
            );
        }

        $portfolio_grid_query = new \WP_Query( $args );
        ?>
        <?php while ($portfolio_grid_query->have_posts()) : ?>
        <?php $portfolio_grid_query->the_post(); ?>
        <?php global $post; // portfolio card ?>
        <?php if($settings['portfolio_styles_two'] == 'style_two'): ?>
        <?php if (has_post_thumbnail()): ?>
        <div class="portfolio-grid-item">
            <?php do_action('get_risehand_portfolio_card_4'); ?>
        </div>
        <?php endif; ?>
        <?php elseif($settings['portfolio_styles_two'] == 'style_three'): ?>
        <?php if (has_post_thumbnail()): ?>
        <div class="portfolio-grid-item">
            <?php do_action('get_risehand_portfolio_card_3'); ?>
        </div>
        <?php endif; ?>
        <?php else: ?>
        <?php if (has_post_thumbnail()): ?>
        <div class="portfolio-grid-item">
            <?php do_action('get_risehand_portfolio_card_5'); ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php // portfolio card end ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <?php else: ?>
    <div class="fliter_group">
        <ul class="project_filter d_flex clearfix">
            <li data-filter="*" class="current theme_btn"><?php echo esc_html__( 'Show All' , 'risehand-addons'); ?></li>
            <?php if (!empty($settings['project_filter_repeater'])) { foreach($settings['project_filter_repeater'] as $key => $value) { ?>
            <li data-filter=".project_category-<?php echo esc_attr($value['query_category']);?>" class="theme_btn">
                <?php echo esc_attr($value['filtertitle']); ?>
            </li>
            <?php }} ?>
        </ul>
    </div>
    <div class="project_container clearfix">
        <div class="row">
            <?php if (! empty($settings['project_filter_repeater'])): foreach ($settings['project_filter_repeater'] as $key => $value ): $post_count = ! empty( $value['post_count'] ) ? $value['post_count'] : ''; $query_orderby = ! empty( $value['query_orderby'] ) ? $value['query_orderby'] : ''; $query_order = ! empty( $value['query_order'] ) ? $value['query_order'] : ''; if(get_query_var('paged')){ $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); } else { $paged = 1; } $rpost_not_in = ''; if(!empty($value['post_not_in'])){ $rpost_not_in = explode(',', $value['post_not_in']); } $post_id = ''; if(!empty($value['post_id'])){ $post_id = explode(',', $value['post_id']); } $args = array( 'post_type' => 'portfolio', 'ignore_sticky_posts' => true, 'paged' => $paged, 'posts_per_page' => $post_count, 'orderby' => $query_orderby, 'order' => $query_order, 'post__in' => $post_id, 'post__not_in' => $rpost_not_in, ); if ($value['query_category']) { $args['tax_query'] = array( array( 'taxonomy' => 'portfolio_category', 'field' => 'slug', 'terms' => $value['query_category'], ), ); } $portfolio_grid_query = new \WP_Query( $args ); ?> <?php while ($portfolio_grid_query->have_posts()) : ?> <?php $portfolio_grid_query->the_post(); ?> <?php global $post; ?> <?php if($settings['portfolio_styles'] == 'style_two'): ?> <?php if (has_post_thumbnail()): ?> <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?> project_category-<?php echo esc_attr($value['query_category']);?>"> <?php do_action('get_risehand_portfolio_card_2'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_three'): ?> <?php if (has_post_thumbnail()): ?> <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?> project_category-<?php echo esc_attr($value['query_category']);?>"> <?php do_action('get_risehand_portfolio_card_3'); ?> </div> <?php endif; ?> <?php elseif($settings['portfolio_styles'] == 'style_four'): ?> <?php if (has_post_thumbnail()): ?> <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?> project_category-<?php echo esc_attr($value['query_category']);?>"> <?php do_action('get_risehand_portfolio_card_4'); ?> </div> <?php endif; ?> <?php else: ?> <?php if (has_post_thumbnail()): ?> <div class="project-wrapper grid-item mb_40 <?php echo esc_attr($settings['portfolio_column']); ?> project_category-<?php echo esc_attr($value['query_category']);?>"> <?php do_action('get_risehand_portfolio_card_1'); ?> </div> <?php endif; ?> <?php endif; ?> <?php // portfolio card end ?> <?php endwhile; ?> <?php wp_reset_postdata(); ?> <?php endforeach; ?> <?php endif; ?> </div> </div>
    <?php endif; ?>
</section>

<?php
    }
}