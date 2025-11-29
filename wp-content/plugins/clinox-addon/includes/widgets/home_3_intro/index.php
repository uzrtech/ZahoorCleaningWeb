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

class clefix_home3_intro extends Widget_Base {

    public function get_name() {
        return 'clenfix_hom3_intro';
    } 

    public function get_title() {
        return   esc_html__('Intro 3', 'clenfix');
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
            'limg1', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape 1', 'clenfix'),
            ]
        );

        $this->add_control(
            'limg2', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape 2', 'clenfix'),
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
            'rimg1', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape 1', 'clenfix'),
            ]
        );

        $this->add_control(
            'rimg2', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape 2', 'clenfix'),
            ]
        );

        $this->add_control(
            'rimg3', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape 3', 'clenfix'),
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

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

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label' =>   esc_html__('Icon', 'clenfix'),
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
            'btn-label', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Button label', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'btn_link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'label' =>   esc_html__('Link', 'clenfix'),                                   
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'banner_section_style',
            [
                'label' => __( 'Banner Content', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-text-3 .banner-slug' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_scolor',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-text-3 .banner-slug::before' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .banner-text-3 .banner-slug::after' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .banner-text-3 .banner-slug',
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
                    '{{WRAPPER}} .banner-text-3 h1' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .banner-text-3 h1',
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
			'button_width',
			[
				'label' => esc_html__( 'Width', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
					'{{WRAPPER}} .clenix-btn-3 a' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
        $this->add_control(
			'button_hegiht',
			[
				'label' => esc_html__( 'Height', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
					'size' => 60,
				],
				'selectors' => [
					'{{WRAPPER}} .clenix-btn-3 a' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'button_typography',
                'label'          => esc_html__( 'Button Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-btn-3 a',
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
		            '{{WRAPPER}} .clenix-btn-3 a' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
		$this->add_control(
		    'button_default_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-btn-3 a' => 'color: {{VALUE}};',
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
		            '{{WRAPPER}} .clenix-btn-3 a:hover' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

		$this->add_control(
		    'button_hover_text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-btn-3 a:hover' => 'color: {{VALUE}};',
		        ],
		    ]
		);

		$this->end_controls_tabs();
        
        $this->end_controls_section();


        $this->start_controls_section(
            'banner_social_style',
            [
                'label' => __( 'Banner Social', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'social_color',
		    [
		        'label'     => esc_html__('Social Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-banner-section-3 .clenix-banner-social a' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'social_hover_color',
		    [
		        'label'     => esc_html__('Social Hover Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-banner-section-3 .clenix-banner-social a:hover' => 'color: {{VALUE}};',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_home3_intro());