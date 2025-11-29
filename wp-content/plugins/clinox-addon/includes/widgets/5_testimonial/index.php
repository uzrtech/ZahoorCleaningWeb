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

class clenfix_5_testimonial extends Widget_Base {

    public function get_name() {
        return '5-tstm';
    } 

    public function get_title() {
        return   esc_html__('5 Testimonial', 'clenfix');
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'label' =>   esc_html__('Avatar', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'qt', [
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
                'label' =>   esc_html__('Logo', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial_style',
            [
                'label' => __( 'Testimonial', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'testimonial_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__bg::before' => 'background-color: {{VALUE}} ',
                ],
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
            'testimonial_content_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__slide-wrap--2' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
			'testimonial_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .testimonial__slide-wrap--2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);


        $this->add_control(
            'content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__item-two .testimonial__content' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'content_color2',
            [
                'label'     => esc_html__( 'Content Two Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__content span' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__item-two .testimonial__content',
            ]
        );

        $this->add_control(
            'name_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Name', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__( 'Name Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__item-two .testimonial__info h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'name_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__item-two .testimonial__info h3',
            ]
        );
        $this->add_control(
            'designation_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Designation', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'desig_color',
            [
                'label'     => esc_html__( 'Designation Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial__item-two .testimonial__info span' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'desig_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .testimonial__item-two .testimonial__info span',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_testimonial());