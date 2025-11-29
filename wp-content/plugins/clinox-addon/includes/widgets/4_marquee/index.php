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

class clenfix_4_marquee extends Widget_Base {

    public function get_name() {
        return '4-mrque';
    } 

    public function get_title() {
        return   esc_html__('4 Marquee', 'clenfix');
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
            'ttl', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
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
            'marquee_color',
            [
                'label'     => esc_html__( 'Marquee Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wm-marquee .text-marquee-content' => '-webkit-text-stroke-color: {{VALUE}}',
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
        
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_marquee());