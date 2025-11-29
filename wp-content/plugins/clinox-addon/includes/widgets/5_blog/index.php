<?php
namespace WebangonAddon\Widgets;
use Elementor\utils;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;

if (!defined('ABSPATH')) 
    exit;  

class clenfix_5_blog extends Widget_Base {

    public function get_name() {
        return '5-blog';
    } 

    public function get_title() {
        return   esc_html__('5 Blog', 'clenfix');
    }

    public function get_icon() {
        return 'dashicons dashicons-arrow-down';
    }

    public function get_categories() {
        return array('ashelement-addons');
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_progress_bar',
            [
                'label' =>   esc_html__('Content', 'clenfix'),
            ]
        );

        $this->add_control(
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Pre title', 'clenfix'),
            ]
        );

        $this->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'clenfix'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,               
            ]           
        );

        $this->add_control(
            'mrq', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Marquee', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Section Title', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .subtitle',
            ]
        );

		$this->add_control(
            'title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .title',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'blog_style',
            [
                'label' => __( 'Blog', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'blog_bg_color',
            [
                'label'     => esc_html__( 'Content Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__content' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'content_padding',
			[
				'label' => esc_html__( 'Content Padding', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .blog__content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->add_control(
            'meta_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Meta', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'meta_color',
            [
                'label'     => esc_html__( 'Meta Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__meta li' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'meta_icon_color',
            [
                'label'     => esc_html__( 'Meta Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__meta li i' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'meta_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .blog__meta li',
            ]
        );
        $this->add_control(
            'b_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'b_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__title' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'b_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .blog__title',
            ]
        );

        $this->add_control(
            'read_more_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Read More', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'read_more_color',
            [
                'label'     => esc_html__( 'Read More Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__btn a' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'read_more_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .blog__btn a',
            ]
        );

        $this->add_control(
            'cat_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Category', 'clinox' ),
                'separator' => 'before',
            ]
        );

        
        $this->add_control(
            'category_color',
            [
                'label'     => esc_html__( 'Category Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog.pt-90 .blog-cat' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'category_bg_color',
            [
                'label'     => esc_html__( 'Category Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog.pt-90 .blog-cat' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'category_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .blog.pt-90 .blog-cat',
            ]
        );

        $this->add_control(
            'blog_nav_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Nav', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'blog_nav_color',
            [
                'label'     => esc_html__( 'Nav Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__slide .blog-arrow' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'blog_nav_hover_color',
            [
                'label'     => esc_html__( 'Nav Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__slide .blog-arrow:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'blog_nav_bg_color',
            [
                'label'     => esc_html__( 'Nav Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__slide .blog-arrow' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'blog_nav_bg_hover_color',
            [
                'label'     => esc_html__( 'Nav Background Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog__slide .blog-arrow:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'marquee_style',
            [
                'label' => __( 'Marquee', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'marquee_color',
            [
                'label'     => esc_html__( 'Marquee Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wm-marquee .text-marquee-content' => '-webkit-text-stroke-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'marqiee_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .wm-marquee',
            ]
        );
        $this->add_control(
			'marquee_height',
			[
				'label' => esc_html__( 'Marquee Height', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 275,
				],
				'selectors' => [
					'{{WRAPPER}} .wm-marquee' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings();
        $cat = $settings['cat_query'];
        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $cat,
                ) ,
            ) ,
        );               
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_blog());