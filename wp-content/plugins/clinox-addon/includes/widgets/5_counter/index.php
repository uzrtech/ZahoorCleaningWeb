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

class clenfix_5_counter extends Widget_Base {

    public function get_name() {
        return '5-cunter';
    } 

    public function get_title() {
        return   esc_html__('5 Count', 'clenfix');
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
            'vurl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Video url', 'clenfix'),
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
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'des', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clenfix'),
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
            'counter_style',
            [
                'label' => __( 'Counter', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'counter_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__wrapper' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'counter_bg_2_color',
            [
                'label'     => esc_html__( 'Background Color Two', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__bg::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'counter_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .counter__wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'video_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Video', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'video_color',
            [
                'label'     => esc_html__( 'Video Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popup-video i' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'video_bg_color',
            [
                'label'     => esc_html__( 'Video Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .popup-video' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .popup-video::before' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .popup-video::after' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'video_text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Video Text', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'video_text_color',
            [
                'label'     => esc_html__( 'Video Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__video h3' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'video_text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .counter__video h3',
            ]
        );

        $this->add_control(
            'counter_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Counter', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'count_number_color',
            [
                'label'     => esc_html__( 'Counter Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__item h3' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'count_number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .counter__item h3',
            ]
        );
        $this->add_control(
            'count_text_color',
            [
                'label'     => esc_html__( 'Counter Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter__item p' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'count_text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .counter__item p',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_counter());