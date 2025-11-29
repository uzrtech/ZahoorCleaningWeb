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

class clenfix_4_tab_info extends Widget_Base {

    public function get_name() {
        return '4-tabinfo';
    } 

    public function get_title() {
        return   esc_html__('4 Tab Info', 'clenfix');
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
            'url', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Video url', 'clenfix'),
            ]
        );

        $this->add_control(
            'bg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Shape image', 'clenfix'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'mt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Tab title', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Pre', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'tt', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'des', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );
        $repeater->add_control(
            't1', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('First title', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'd1', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('First description', 'clenfix'),
            ]
        );
        $repeater->add_control(
            't2', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Second title', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'd2', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Second description', 'clenfix'),
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
            'tab_info_style',
            [
                'label' => __( 'Tab Info', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'tab_info_bg_color',
		    [
		        'label'     => esc_html__('Background Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .tab-info' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);

        
        $this->add_control(
            'subtitle_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Sub Title', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'subtitle_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__white .subtitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'subtitle_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__white .subtitle' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'subtitle_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__white .subtitle',
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
                    '{{WRAPPER}} .sec-title__white .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__white .title',
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
                    '{{WRAPPER}} .sec-title__white p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__white p',
            ]
        );

        $this->add_control(
            'tab_info_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Tab Info', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'tab_info_icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tab_info_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item .content h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tab_info_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-info__item .content h3',
            ]
        );
        
        $this->add_control(
            'tab_info_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item .content p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tab_info_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-info__item .content p',
            ]
        );
        $this->add_control(
            'tab_info_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item:not(:last-child)' => 'border-color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
			'margin_bottom',
			[
				'label' => esc_html__( 'Margin Bottom', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 35,
				],
				'selectors' => [
					'{{WRAPPER}} .tab-info__item:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
        );
        $this->add_control(
			'padding_bottom',
			[
				'label' => esc_html__( 'Padding Bottom', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 35,
				],
				'selectors' => [
					'{{WRAPPER}} .tab-info__item:not(:last-child)' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
        );

        $this->add_control(
            'tab_info_nav_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Tab Nav', 'clinox' ),
                'separator' => 'before',
            ]
        );

        
        $this->add_control(
            'tab_nav_color',
            [
                'label'     => esc_html__( 'Nav Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__nav .nav-item .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tab_nav_active_color',
            [
                'label'     => esc_html__( 'Nav Active Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__nav .nav-item .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tab_nav_bg_color',
            [
                'label'     => esc_html__( 'Nav Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__nav' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'tab_nav_active_bg_color',
            [
                'label'     => esc_html__( 'Nav Active Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__nav .nav-item .nav-link.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'tab_nav_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-info__nav .nav-item .nav-link',
            ]
        );

        $this->add_control(
			'nav_left',
			[
				'label' => esc_html__( 'Nav Left', 'clinox' ),
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
					'size' => -160,
				],
				'selectors' => [
					'{{WRAPPER}} .tab-info__nav' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
        );
        $this->add_control(
			'nav_top',
			[
				'label' => esc_html__( 'Nav Top', 'clinox' ),
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
					'unit' => '%',
					'size' => 46,
				],
				'selectors' => [
					'{{WRAPPER}} .tab-info__nav' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
        );
        
        $this->end_controls_section();


        $this->start_controls_section(
            'video_style',
            [
                'label' => __( 'Video', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'video_bg_color',
            [
                'label'     => esc_html__( 'Video Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__bg .popup-video' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .popup-video::before' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .popup-video::after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'video_color',
            [
                'label'     => esc_html__( 'Video Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__bg .popup-video i' => 'color: {{VALUE}}',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_tab_info());