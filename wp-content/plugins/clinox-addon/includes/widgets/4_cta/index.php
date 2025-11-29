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

class clenfix_4_cta extends Widget_Base {

    public function get_name() {
        return '4-cta';
    } 

    public function get_title() {
        return   esc_html__('4 CTA', 'clenfix');
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
            'title', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Title', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'sub', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Sub title', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'shortcode', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Contact shortcode', 'clenfix'),                                   
            ]
        );
        
        $this->end_controls_section();


        $this->start_controls_section(
            'cta_style',
            [
                'label' => __( 'CTA', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'cta_bg_color',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .cta__wrap' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
        
        $this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'cta_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'clinox' ),
				'selector' => '{{WRAPPER}} .cta__wrap',
			]
		);
        $this->add_control(
			'cta_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cta__wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Text', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'text_color',
            [
                'label'     => esc_html__( 'Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta__info span' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .cta__info span',
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
                    '{{WRAPPER}} .cta__info h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'from_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .cta__info h3',
            ]
        );

        $this->add_control(
            'input_field_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Input Field', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'input_field_color',
            [
                'label'     => esc_html__( 'Input Field Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta .wpcf7-form input' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .cta .wpcf7-form select' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'input_field_bg_color',
            [
                'label'     => esc_html__( 'Input Field BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta .wpcf7-form input' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .cta .wpcf7-form select' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_control(
            'input_field_focus_color',
            [
                'label'     => esc_html__( 'Input Field Focus Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta .wpcf7-form input:focus' => 'border-color: {{VALUE}} ',
                    '{{WRAPPER}} .cta .wpcf7-form select:focus' => 'border-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'input_field_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .cta .wpcf7-form input, .cta .wpcf7-form select',
            ]
        );
        

        $this->add_control(
            'f_button_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Button', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
			'f_button_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .cta__wrap .thm-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'f_button_typography',
                'label'          => esc_html__( 'Button Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .cta__wrap .thm-btn',
            ]
        );

		
		$this->start_controls_tabs('f_button_style_tabs');

		//Default style tab start
		$this->start_controls_tab(
		    'f_btn_style_default',
		    [
		        'label' => esc_html__('Normal', 'clinox'),
		    ]
		);

        $this->add_control(
		    'f_button_bg_color',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .cta__wrap .thm-btn' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'f_button_default_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .cta__wrap .thm-btn .btn-wrap span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->end_controls_tab();

		//Hover style tab start
		$this->start_controls_tab(
		    'f_btn_style_hover',
		    [
		        'label' => esc_html__('Hover', 'clinox'),
		    ]
		);

		$this->add_control(
		    'f_button_hover_bg',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .cta__wrap .thm-btn:hover' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'f_button_hover_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .cta__wrap .thm-btn:hover .btn-wrap span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_cta());