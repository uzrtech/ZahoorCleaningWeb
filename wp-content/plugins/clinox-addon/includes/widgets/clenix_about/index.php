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

class clefix_about_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-about';
    } 

    public function get_title() {
        return   esc_html__('Clenfix about', 'clenfix');
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

        $this->start_controls_tabs('gt');

        $this->start_controls_tab(
            'gt1',
            [
                'label' => esc_html__( 'Left', 'clenfix' ),               
            ]
        );

        $this->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image', 'clenfix'),
            ]
        );

        $this->add_control(
            'leftitle', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'gt2',
            [
                'label' => esc_html__( 'Right', 'clenfix' ),                
            ]
        );

        $this->add_control(
            'sub', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Sub title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );
        $this->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),                                   
            ]
        );

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $repeater1->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image', 'clenfix'),
            ]
        );

        $this->add_control(
            'items',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater1->get_controls(), 
                'prevent_empty' => false,
            ]
        );

        $this->add_control(
            'btn-label', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'btn-link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'label' =>   esc_html__('Link', 'clenfix'),                                   
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'about_section_style',
            [
                'label' => __( 'Style', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->start_controls_tabs(
			'style_tabs'
		);

		$this->start_controls_tab(
			'left_tab',
			[
				'label' => esc_html__( 'Left', 'clinox' ),
			]
		);

        $this->add_control(
            'circle_bg_color',
            [
                'label'     => esc_html__( 'Circle BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-img-wrapper::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_control(
			'experience_hr',
			[
				'label' => esc_html__( 'Experience', 'clinox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'exp_bg_color',
            [
                'label'     => esc_html__( 'Experience BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-img-wrapper .about-exp' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'exp_content_color',
            [
                'label'     => esc_html__( 'Experience Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-img-wrapper .about-exp span' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'exp_content_typography',
                'label' => esc_html__( 'Experience Content Typography', 'clinox' ),
				'selector' => '{{WRAPPER}} .clenix-about-img-wrapper .about-exp',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'exp_number_typography',
                'label' => esc_html__( 'Experience Number Typography', 'clinox' ),
				'selector' => '{{WRAPPER}} .clenix-about-img-wrapper .about-exp h3',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'right_tab',
			[
				'label' => esc_html__( 'Right', 'clinox' ),
			]
		);

		$this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-section-title .sub-title' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'subtitle_typography',
				'selector' => '{{WRAPPER}} .clenix-section-title .sub-title',
			]
		);
        
        $this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pr-text-in.is_shown .pr-text-in_item3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'title_highlight_color',
            [
                'label'     => esc_html__( 'Title Highlight Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-section-title h2 b' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .clenix-section-title h2 b::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .pr-text-in.is_shown .pr-text-in_item3',
			]
		);
        
        $this->add_control(
			'title_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'content_color',
            [
                'label'     => esc_html__( 'Content', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-section-title p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .clenix-section-title p',
			]
		);
        $this->add_control(
			'features_box_options',
			[
				'label' => esc_html__( 'Feature Box', 'clinox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'feat_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-feature-item-wrap::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'feat_box_color',
            [
                'label'     => esc_html__( 'Box Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-feature-item .about-ft-icon' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .about-feature-item:hover .about-ft-icon' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .about-feature-item::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'f_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-feature-item .about-ft-text h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'f_title_hover_color',
            [
                'label'     => esc_html__( 'Title Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-feature-item:hover .about-ft-text h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'f_title_typography',
				'selector' => '{{WRAPPER}} .about-feature-item:hover .about-ft-text h3',
			]
		);

        $this->add_control(
			'buttonh_hr',
			[
				'label' => esc_html__( 'Button', 'clinox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
			'btn_width',
			[
				'label' => esc_html__( 'Button Width', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 200,
				],
				'selectors' => [
					'{{WRAPPER}} .clenix-btn a' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'btn_height',
			[
				'label' => esc_html__( 'Button Height', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 55,
				],
				'selectors' => [
					'{{WRAPPER}} .clenix-btn a' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'selector' => '{{WRAPPER}} .clenix-btn a',
			]
		);

        
        $this->add_control(
            'btn_text_color',
            [
                'label'     => esc_html__( 'Button Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-btn a' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'btn_text_hover_color',
            [
                'label'     => esc_html__( 'Button Text Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-btn a:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label'     => esc_html__( 'Button BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-btn a:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_hover_color',
            [
                'label'     => esc_html__( 'Button BG Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-btn a:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

		$this->end_controls_tab();

		$this->end_controls_tabs();
        
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_about_widget());