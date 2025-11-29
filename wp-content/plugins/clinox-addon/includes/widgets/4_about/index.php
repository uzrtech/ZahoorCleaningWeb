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

class clenfix_4_about_section extends Widget_Base {

    public function get_name() {
        return '4-about';
    } 

    public function get_title() {
        return   esc_html__('4 About', 'clenfix');
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
            'bg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Background', 'clenfix'),
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
            'title', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'btnlabel', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Button label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btnurl', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Button link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'yrlabel', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Year label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'yrdesc', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Year description', 'clenfix'),
                'label_block' => true,
            ]
        );
        
        $this->add_control(
            'thmb', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Thumbnail', 'clenfix'),
            ]
        );


        $this->end_controls_section();


        $this->start_controls_section(
            'hero_style',
            [
                'label' => __( 'Hero', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content > span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'subtitle_bg_color',
            [
                'label'     => esc_html__( 'Sub Title BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content > span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'subtitle_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content > span' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'subtitle_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__content > span',
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
                    '{{WRAPPER}} .hero__content h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__content h2',
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
		    'button_bg_color',
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
        
        $this->end_controls_section();

        $this->start_controls_section(
            'experince_style',
            [
                'label' => __( 'Experince', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'number_color',
		    [
		        'label'     => esc_html__('Number Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .hero__experince-text h2' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__experince-text h2',
            ]
        );

        $this->add_control(
            'experince_text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Experince Text', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'experince_text_color',
		    [
		        'label'     => esc_html__('Experince Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .hero__experince-text' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'experince_text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__experince-text',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_about_section());