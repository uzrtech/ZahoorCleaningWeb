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

class clenfix_4_testimonial extends Widget_Base {

    public function get_name() {
        return '4-testimonial';
    } 

    public function get_title() {
        return   esc_html__('4 Testimonial', 'clenfix');
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
            'ctlb', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('CTA label', 'clenfix'),
            ]
        );

        $this->add_control(
            'ctbt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button label', 'clenfix'),
            ]
        );

        $this->add_control(
            'cturl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button link', 'clenfix'),
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Avatar img', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'con', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Quote', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'nm', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Name', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'pos', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Position', 'clenfix'),
            ]
        );

        $this->add_control(
            'itms',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Tabs', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'cta_section_style',
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
		            '{{WRAPPER}} .testimonial__cta' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
			'cta_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .testimonial__cta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
            'cta_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
		    'cta_title_color',
		    [
		        'label'     => esc_html__('Title Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .testimonial__cta h3' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'cta_title_highlight_color',
		    [
		        'label'     => esc_html__('Title Highlight Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .testimonial__cta h3 span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'cta_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__cta h3',
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
					'{{WRAPPER}} .thm-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'button_typography',
                'label'          => esc_html__( 'Button Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .thm-btn',
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
		    'button_bg',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .thm-btn' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
		$this->add_control(
		    'button_default_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .thm-btn .btn-wrap span' => 'color: {{VALUE}};',
		            '{{WRAPPER}} .thm-btn__icon i' => 'color: {{VALUE}};',
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
		            '{{WRAPPER}} .thm-btn:hover' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'button_hover_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .thm-btn:hover .btn-wrap span' => 'color: {{VALUE}};',
		            '{{WRAPPER}} .thm-btn__icon:hover i' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->end_controls_tabs();
        
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_style',
            [
                'label' => __( 'Testimonial', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'subtitle_bg_color',
            [
                'label'     => esc_html__( 'Sub Title BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'subtitle_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .subtitle',
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
                    '{{WRAPPER}} .sec-title .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .title',
            ]
        );

        $this->add_control(
            'tm_content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Testimonial', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'tm_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__content' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tm_content_highlight_color',
            [
                'label'     => esc_html__( 'Content Highlight Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__content span' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tm_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__content',
            ]
        );
        $this->add_control(
            'tm_name_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Name', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'tm_name_color',
            [
                'label'     => esc_html__( 'Name Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__info h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tm_name_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__info h3',
            ]
        );
        $this->add_control(
            'tm_desig_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Designation', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'tm_desig_color',
            [
                'label'     => esc_html__( 'Designation Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__info span' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tm_desig_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__info span',
            ]
        );

        $this->add_control(
            'tm_dot_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Slider Dots', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'tm_dot_color',
            [
                'label'     => esc_html__( 'Dot Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__slide .slick-dots li' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tm_dot_active_color',
            [
                'label'     => esc_html__( 'Dot Active Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__slide .slick-dots li.slick-active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tm_dot_active_border_color',
            [
                'label'     => esc_html__( 'Dot Active Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__slide .slick-dots li.slick-active::before' => 'border-color: {{VALUE}}',
                ],
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_testimonial());