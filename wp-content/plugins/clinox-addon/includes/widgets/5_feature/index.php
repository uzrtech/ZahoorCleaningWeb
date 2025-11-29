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

class clenfix_5_features extends Widget_Base {

    public function get_name() {
        return '5-feature'; 
    } 

    public function get_title() {
        return   esc_html__('5 Feature', 'clenfix');
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
                'label' =>   esc_html__('Pre', 'clenfix'),
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
            'ft', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Features', 'clenfix'),
            ]
        );



        $this->add_control(
            'btn', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button label', 'clenfix'),
            ]
        );

        $this->add_control(
            'btnlnk', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button link', 'clenfix'),
            ]
        );

        $this->add_control(
            'c', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Contact label', 'clenfix'),
            ]
        );

        $this->add_control(
            'shortcode', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Shortcode', 'clenfix'),
            ]
        );

        $this->add_control(
            'thmb', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Thumbnail', 'clenfix'),
            ]
        );

        $this->add_control(
            'ftc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Feature content', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature_info_style',
            [
                'label' => __( 'Feature Info', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        
		$this->add_control(
			'feature_info_padding',
			[
				'label' => esc_html__( 'Feature Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .feature__info-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
            'feature_info_border_color',
            [
                'label'     => esc_html__( 'Feature Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box' => 'border-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_control(
            'feature_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Feature Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'feature_info_title',
            [
                'label'     => esc_html__( 'Feature Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box > span' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'feature_info_bg_title',
            [
                'label'     => esc_html__( 'Feature Title BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box > span' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'feature_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__info-box > span',
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
                    '{{WRAPPER}} .feature__info-box .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__info-box .title',
            ]
        );
        
		$this->add_control(
			'titele_margin',
			[
				'label' => esc_html__( 'Title Margin', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .feature__info-box .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'feature_info_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Feature Info Box', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'info_icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box-item .icon' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'info_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box-item .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'info_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__info-box-item .content h3',
            ]
        );
        $this->add_control(
            'info_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box-item .content p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'info_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__info-box-item .content p',
            ]
        );

        $this->add_control(
            'info_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature__info-box-item:not(:last-child)' => 'border-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'button_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Button', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
			'button_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .feature__info-box .thm-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'button_typography',
                'label'          => esc_html__( 'Button Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__info-box .thm-btn',
            ]
        );

		
		$this->start_controls_tabs('button_style_tabs');

		//Default style tab start
		$this->start_controls_tab(
		    'btn_style_default',
		    [
		        'label' => esc_html__('Normal', 'clinox'),
		    ]
		);

        $this->add_control(
		    'button_bg_color',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__info-box .thm-btn' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'button_default_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__info-box .thm-btn .btn-wrap span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->end_controls_tab();

		//Hover style tab start
		$this->start_controls_tab(
		    'btn_style_hover',
		    [
		        'label' => esc_html__('Hover', 'clinox'),
		    ]
		);

		$this->add_control(
		    'button_hover_bg',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__info-box .thm-btn:hover' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'button_hover_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__info-box .thm-btn:hover .btn-wrap span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->end_controls_tabs();
        
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_form_style',
            [
                'label' => __( 'Form', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'form_title_color',
            [
                'label'     => esc_html__( 'Form Title Color', 'clinox' ),
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
                    '{{WRAPPER}} .cta__form input' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .cta__form select' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'input_field_bg_color',
            [
                'label'     => esc_html__( 'Input Field BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta__form input' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .cta__form select' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_control(
            'input_field_focus_color',
            [
                'label'     => esc_html__( 'Input Field Focus Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta__form input:focus' => 'border-color: {{VALUE}} ',
                    '{{WRAPPER}} .cta__form select:focus' => 'border-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'input_field_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .cta__form input, .cta__form select',
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

        $this->start_controls_section(
            'feature_content_style',
            [
                'label' => __( 'Content', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'feature_content_color',
		    [
		        'label'     => esc_html__('Content Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__content p' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'feature_content_border_color',
		    [
		        'label'     => esc_html__('Border Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__content p::before' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'feature_content_typography',
                'label'          => esc_html__( 'Content Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__content p',
            ]
        );

        $this->add_control(
            'feature_list_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Feature List', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'feature_list_color',
		    [
		        'label'     => esc_html__('List Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__list li' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'feature_list_icon_color',
		    [
		        'label'     => esc_html__('List Icon Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__list li::before' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'feature_list_typography',
                'label'          => esc_html__( 'List Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__list li',
            ]
        );
        $this->add_control(
            'feature_name_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Name', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'feature_name_color',
		    [
		        'label'     => esc_html__('Name Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__content .name' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'feature_name_typography',
                'label'          => esc_html__( 'Name Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__content .name',
            ]
        );
        $this->add_control(
		    'feature_desig_color',
		    [
		        'label'     => esc_html__('Designation Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__content .name span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'feature_desig_typography',
                'label'          => esc_html__( 'Designation Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__content .name span',
            ]
        );
        
        $this->end_controls_section();

       

    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_features());