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

class clefix_home3_about extends Widget_Base {

    public function get_name() {
        return 'home3-about';
    } 

    public function get_title() {
        return   esc_html__('About 4', 'clenfix');
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
            'bgshape', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape', 'clenfix'),
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
            'img1', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 1', 'clenfix'),
            ]
        );

        $this->add_control(
            'img2', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 2', 'clenfix'),
            ]
        );

        $this->add_control(
            'img3', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 3', 'clenfix'),
            ]
        );

        $this->add_control(
            'img4', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 4', 'clenfix'),
            ]
        );

        $this->add_control(
            'img5', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 5', 'clenfix'),
            ]
        );

        $this->add_control(
            'img6', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image 6', 'clenfix'),
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
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Pre title', 'clenfix'),                                   
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

        $this->add_control(
            'thumbtitle', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Thumbnail title', 'clenfix'),
            ]
        );

        $this->add_control(
            'thumbnail', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Thumbnail', 'clenfix'),
            ]
        );

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'list', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
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
            'btn-link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'label' =>   esc_html__('Link', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'phone-label', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Phone label', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'phone-num', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Phone no', 'clenfix'),                                   
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'about_section_style',
            [
                'label' => __( 'About Content', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-section-title-3 .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_scolor',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-section-title-3 .subtitle::before' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .clenix-section-title-3 .subtitle::after' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-section-title-3 .subtitle',
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
                    '{{WRAPPER}} .clenix-section-title-3 h2' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-section-title-3 h2',
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
                    '{{WRAPPER}} .clenix-section-title-3 p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-section-title-3 p',
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
                    '{{WRAPPER}} .clenix-about-text-wrap-3 h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-about-text-wrap-3 h3',
            ]
        );
        $this->add_control(
            'list_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'List', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'list_color',
            [
                'label'     => esc_html__( 'List Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-feature-list-3 .inner-text li' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'list_icon_color',
            [
                'label'     => esc_html__( 'List Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-feature-list-3 .inner-text li::before' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'list_icon_bg_color',
            [
                'label'     => esc_html__( 'List Icon BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-feature-list-3 .inner-text li::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'list_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-feature-list-3 .inner-text li',
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

		$this->end_controls_tab();
		$this->end_controls_tabs();
        
        $this->add_control(
            'cta_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'CTA', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
		    'cta_icon_color',
		    [
		        'label'     => esc_html__('Icon Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta i' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'cta_icon_bg_color',
		    [
		        'label'     => esc_html__('Icon Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta i' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'cta_label_color',
		    [
		        'label'     => esc_html__('Label Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta .about-cta-text span' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'cta_label_typography',
                'label'          => esc_html__( 'Label Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta .about-cta-text span',
            ]
        );
        $this->add_control(
		    'cta_number_color',
		    [
		        'label'     => esc_html__('Number Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta .about-cta-text a' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'cta_number_typography',
                'label'          => esc_html__( 'Number Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-about-text-wrap-3 .clenix-about-cta-btn-grp .about-cta .about-cta-text a',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_home3_about());