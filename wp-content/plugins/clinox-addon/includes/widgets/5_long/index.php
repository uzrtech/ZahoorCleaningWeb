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

class clenfix_5_long extends Widget_Base {

    public function get_name() {
        return '5-long';
    } 

    public function get_title() {
        return   esc_html__('5 Long', 'clenfix');
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
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'txt', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Content', 'clenfix'),
            ]
        );
                
        $this->add_control(
            'services',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Logo', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'mrque', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Marquee content', 'clenfix'),
            ]
        );

        $this->add_control(
            'propre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Process pre title', 'clenfix'),
            ]
        );

        $this->add_control(
            'prottl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Process title', 'clenfix'),
            ]
        );

        $process = new \Elementor\Repeater();

        $process->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $process->add_control(
            'num', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Content', 'clenfix'),
            ]
        );

        $process->add_control(
            'txt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Content', 'clenfix'),
            ]
        );

        $this->add_control(
            'process',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $process->get_controls(),
                'label' =>   esc_html__('Logo', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'abtpre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('About pre title', 'clenfix'),
            ]
        );

        $this->add_control(
            'abtttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('About title', 'clenfix'),
            ]
        );

        $abt = new \Elementor\Repeater();

        $abt->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $abt->add_control(
            'txt', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Content', 'clenfix'),
            ]
        );

        $this->add_control(
            'abts',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $abt->get_controls(),
                'label' =>   esc_html__('About', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'img1', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Image 1', 'clenfix'),
            ]
        );

        $this->add_control(
            'img2', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Image 2', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Service Section Title', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .subtitle',
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
                    '{{WRAPPER}} .sec-title__two .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .title',
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
            'service_style',
            [
                'label' => __( 'Service', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'service_bg_color',
            [
                'label'     => esc_html__( 'Service Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_bg_hover_color',
            [
                'label'     => esc_html__( 'Service Hover Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'service_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .service__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'service_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'clinox' ),
				'selector' => '{{WRAPPER}} .service__item',
			]
		);

        $this->add_control(
            'service_icon_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Icon', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__icon' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'icon_hover_color',
            [
                'label'     => esc_html__( 'Icon Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover .service__icon' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'icon_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .service__icon',
            ]
        );
        
        $this->add_control(
            'service_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'service_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__title' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_title_hover_color',
            [
                'label'     => esc_html__( 'Title Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover .service__title' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .service__title',
            ]
        );

        
        $this->add_control(
            'service_content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'service_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_content_hover_color',
            [
                'label'     => esc_html__( 'Content Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .service__item p',
            ]
        );

        $this->add_control(
            'service_list_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'List', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'service_list_color',
            [
                'label'     => esc_html__( 'List Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__list li' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_list_dot_color',
            [
                'label'     => esc_html__( 'List Dot Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__list li::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_list_hover_color',
            [
                'label'     => esc_html__( 'List Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover .service__list li' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_list_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .service__list li',
            ]
        );

        $this->add_control(
            'service_link_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Link', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'service_link_color',
            [
                'label'     => esc_html__( 'Link Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__link i' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_link_bg_color',
            [
                'label'     => esc_html__( 'Link Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__link' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_link_bg_hover_color',
            [
                'label'     => esc_html__( 'Link Background Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__item:hover .service__link' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'service_nav_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Nav', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'service_nav_color',
            [
                'label'     => esc_html__( 'Nav Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__slide .service-arrow' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_nav_hover_color',
            [
                'label'     => esc_html__( 'Nav Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__slide .service-arrow:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'service_nav_bg_color',
            [
                'label'     => esc_html__( 'Nav Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__slide .service-arrow' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_nav_bg_hover_color',
            [
                'label'     => esc_html__( 'Nav Background Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service__slide .service-arrow:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        
        $this->end_controls_section();


        $this->start_controls_section(
            'marquee_style',
            [
                'label' => __( 'Marquee', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'marquee_height',
			[
				'label' => esc_html__( 'Marquee Height', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 275,
				],
				'selectors' => [
					'{{WRAPPER}} .wm-marquee' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'marqiee_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .wm-marquee',
            ]
        );
        
        $this->end_controls_section();
        
        $this->start_controls_section(
            'process_style',
            [
                'label' => __( 'Process', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'p_sub_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Sub Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'p_sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process .sec-title__two .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'p_sub_title_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process .sec-title__two .subtitle::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'p_sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .process .sec-title__two .subtitle',
            ]
        );

		$this->add_control(
            'p_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'p_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process .sec-title__two .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'p_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .process .sec-title__two .title',
            ]
        );

        $this->add_control(
            'process_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Process', 'clinox' ),
                'separator' => 'before',
            ]
        );

		$this->add_control(
            'process_bg_color',
            [
                'label'     => esc_html__( 'Process Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__wrap' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'process_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .process__wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'process_number_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Process Number', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'process_number_color',
            [
                'label'     => esc_html__( 'Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__icon .number' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'process_number_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__icon .number' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'process_number_bg_hover_color',
            [
                'label'     => esc_html__( 'Background Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__item:hover .process__icon .number' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'process_icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__icon .icon' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'process_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Process Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'process_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .process__item > h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'process_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .process__item > h3',
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'about_style',
            [
                'label' => __( 'About', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'a_sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about .sec-title__two .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'a_sub_title_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about .sec-title__two .subtitle::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'a_sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about .sec-title__two .subtitle',
            ]
        );

		$this->add_control(
            'a_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'a_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about .sec-title__two .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'a_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about .sec-title__two .title',
            ]
        );

        $this->add_control(
            'about_info_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'About Info', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'about_info_icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item-two .icon' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'about_info_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item-two .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'about_info_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-info__item-two .content h3',
            ]
        );
        $this->add_control(
            'about_info_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item-two .content p' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'about_info_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-info__item-two .content p',
            ]
        );
        $this->add_control(
            'about_info_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-info__item-two:not(:last-child)' => 'border-color: {{VALUE}} ',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_long());