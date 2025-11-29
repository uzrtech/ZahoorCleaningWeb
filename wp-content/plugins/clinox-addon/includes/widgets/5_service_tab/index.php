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

class clenfix_5_tab_service extends Widget_Base {

    public function get_name() {
        return '5-tabservice';
    } 

    public function get_title() {
        return   esc_html__('Tab Service', 'clenfix');
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
            'lbl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Label', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icn', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'desc', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Descrition', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'url', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'ttl2', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title two', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icn2', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon two', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'desc2', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Descrition two', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'url2', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link two', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'ttl3', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title three', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icn3', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon three', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'desc3', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Descrition three', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'url3', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link three', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'ttl4', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title four', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icn4', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'label' =>   esc_html__('Icon four', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'desc4', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Descrition four', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'url4', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link four', 'clenfix'),
            ]
        );

        $this->add_control(
            'itms',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Logo', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Section Title', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
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
			'service_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .tab-service__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'service_bg_color',
            [
                'label'     => esc_html__( 'Service Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__item' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'service_border_color',
            [
                'label'     => esc_html__( 'Service Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__item::before' => 'background-color: {{VALUE}}',
                ],
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
                    '{{WRAPPER}} .tab-service__icon' => 'color: {{VALUE}}',
                ],
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
                'label'     => esc_html__( 'Title', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-service__content h3',
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
                'label'     => esc_html__( 'Content', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__content p' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-service__content p',
            ]
        );
        $this->add_control(
            'link_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Link', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'link_color',
            [
                'label'     => esc_html__( 'Link Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__content a' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'link_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-service__content a',
            ]
        );

        $this->add_control(
            'nav_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Nav', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'nav_color',
            [
                'label'     => esc_html__( 'Nav Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__nav .nav-item .nav-link' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'nav_active_bg_color',
            [
                'label'     => esc_html__( 'Nav Active BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__nav .nav-item .nav-link.active' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'nav_active_border_color',
            [
                'label'     => esc_html__( 'Nav Active Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tab-service__nav .nav-item .nav-link.active' => 'border-color: {{VALUE}} ',
                ],
            ]
        );

		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'nav_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .tab-service__nav .nav-item .nav-link',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_tab_service());