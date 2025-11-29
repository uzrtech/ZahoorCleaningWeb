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

class clefix_service_grid_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-service-grid';
    } 

    public function get_title() {
        return   esc_html__('Service grid', 'clenfix');
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

        $repeater1 = new \Elementor\Repeater();       

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

        $repeater1->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'label' =>   esc_html__('Link', 'clenfix'),
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
            'btnlabel', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Button label', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'service_section_style',
            [
                'label' => __( 'Service Style', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->start_controls_tabs(
			'style_tabs'
		);

		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'clinox' ),
			]
		);
        
        $this->add_control(
            'border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2' => 'border-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'icon_bg_color',
            [
                'label'     => esc_html__( 'Icon BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2 .inner-icon' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
			'title_hr',
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
                    '{{WRAPPER}} .clinex-service-item-2 .inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .clinex-service-item-2 .inner-text h3',
			]
		);

        $this->add_control(
			'content_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2 .inner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .clinex-service-item-2 .inner-text p',
			]
		);

        $this->add_control(
			'button_hr',
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
					'size' => 170,
				],
				'selectors' => [
					'{{WRAPPER}} .clinex-service-item-2 .inner-text .read-more' => 'width: {{SIZE}}{{UNIT}};',
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
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .clinex-service-item-2 .inner-text .read-more' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
            'btn_color',
            [
                'label'     => esc_html__( 'Button Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2 .inner-text .read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg_color',
            [
                'label'     => esc_html__( 'Button BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2 .inner-text .read-more' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'btn_typography',
				'selector' => '{{WRAPPER}} .clinex-service-item-2 .inner-text .read-more',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'clinox' ),
			]
		);

		$this->add_control(
            'h_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover' => 'border-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_control(
            'h_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'h_icon_bg_color',
            [
                'label'     => esc_html__( 'Icon BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover .inner-icon' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
			'h_title_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'h_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover .inner-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'h_content_hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

        $this->add_control(
            'h_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover .inner-text p' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'h_button_hr',
			[
				'label' => esc_html__( 'Button', 'clinox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'h_btn_color',
            [
                'label'     => esc_html__( 'Button Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover .inner-text .read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'h_btn_bg_color',
            [
                'label'     => esc_html__( 'Button BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clinex-service-item-2:hover .inner-text .read-more' => 'background-color: {{VALUE}}',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_service_grid_widget());