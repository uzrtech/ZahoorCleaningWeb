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

class clinox_4_hero_2 extends Widget_Base {

    public function get_name() {
        return '4-hero-2';
    } 

    public function get_title() {
        return   esc_html__('4 Hero 2', 'clinox');
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
                'label' =>   esc_html__('Content', 'clinox'),
            ]
        );

        $this->add_control(
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clinox'),
            ]
        );

        $this->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clinox'),
            ]
        );

        $this->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clinox'),
            ]
        );

        $this->add_control(
            'btn', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button label', 'clinox'),
            ]
        );

        $this->add_control(
            'btnlnk', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button link', 'clinox'),
            ]
        );

        $this->add_control(
            'thmb', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Thumbnail', 'clinox'),
            ]
        );

        $this->add_control(
            'c', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Count label', 'clinox'),
            ]
        );

        $this->add_control(
            'cd', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Count description', 'clinox'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'hero_style',
            [
                'label' => __( 'Hero Style', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'hero_bg_color',
            [
                'label'     => esc_html__( 'Hero Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__two' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->add_control(
            'sub_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Sub Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content-two > span' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__content-two > span',
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
                    '{{WRAPPER}} .hero__content-two h2' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__content-two h2',
            ]
        );
		$this->add_control(
            'content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__content-two p' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__content-two p',
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
		        ],
		    ]
		);

		$this->end_controls_tabs();

        $this->add_control(
            'experince_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Experince', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'experince_bg_color',
		    [
		        'label'     => esc_html__('background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .hero__experince-box' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
		
		$this->add_control(
            'experince_number_color',
            [
                'label'     => esc_html__( 'Experince Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__experince-box h2 span' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'experince_number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__experince-box h2',
            ]
        );
        
        $this->add_control(
            'experince_title_color',
            [
                'label'     => esc_html__( 'Experince Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero__experince-box .experince_title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'experince_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .hero__experince-box .experince_title',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clinox_4_hero_2());