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

class clenfix_4_process extends Widget_Base {

    public function get_name() {
        return '4-process';
    } 

    public function get_title() {
        return   esc_html__('4 Process', 'clenfix');
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
                'label' =>   esc_html__('Steps', 'clenfix'),
            ]
        );

        $this->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $this->add_control(
            'sub', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Sub title', 'clenfix'),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'num', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Counter', 'clenfix'),
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
            'sub', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Sub title', 'clenfix'),
            ]
        );
                
        $this->add_control(
            'itms',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Items', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_info',
            [
                'label' =>   esc_html__('Address', 'clenfix'),
            ]
        );

        $this->add_control(
            'adbg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Address background', 'clenfix'),
            ]
        );

        $e = new \Elementor\Repeater();

        $e->add_control(
            'num', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Info', 'clenfix'),
            ]
        );
                
        $this->add_control(
            'add',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $e->get_controls(),
                'label' =>   esc_html__('Items', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'oh', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Open HourInfo', 'clenfix'),
            ]
        );

        $f = new \Elementor\Repeater();

        $f->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Info', 'clenfix'),
            ]
        );

        $f->add_control(
            'url', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );

        $this->add_control(
            'socials',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $f->get_controls(),
                'label' =>   esc_html__('Social', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_baf',
            [
                'label' =>   esc_html__('Before after', 'clenfix'),
            ]
        );

        $this->add_control(
            'bfimg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Before image', 'clenfix'),
            ]
        );

        $this->add_control(
            'afimg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('After image', 'clenfix'),
            ]
        );

        $this->add_control(
            'cbg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Counter background', 'clenfix'),
            ]
        );

        $this->add_control(
            'vurl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Video url', 'clenfix'),
            ]
        );

        $g = new \Elementor\Repeater();

        $g->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $g->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $g->add_control(
            'sb', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Sub', 'clenfix'),
            ]
        );

        $this->add_control(
            'cunt',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $g->get_controls(),
                'label' =>   esc_html__('Social', 'clenfix'),
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
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_bg_color',
            [
                'label'     => esc_html__( 'Sub Title BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .subtitle',
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
                    '{{WRAPPER}} .sec-title .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .title',
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
            'number_color',
            [
                'label'     => esc_html__( 'Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__single .number' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'number_bg_color',
            [
                'label'     => esc_html__( 'Number BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__single .number' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'number_bg_hover_color',
            [
                'label'     => esc_html__( 'Number Hover BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__single:hover .number' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'number_border_color',
            [
                'label'     => esc_html__( 'Number Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__single .number::before' => 'border-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__single .number',
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
                    '{{WRAPPER}} .add-info__single .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'p_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__single .content h3',
            ]
        );
		$this->add_control(
            'p_content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'p_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__single .content p' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'p_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__single .content p',
            ]
        );
        
        $this->end_controls_section();

        $this->start_controls_section(
            'contact_info_style',
            [
                'label' => __( 'Contact Info', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'c_info_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__item > h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'c_info_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__item > h3',
            ]
        );

        $this->add_control(
            'c_info_content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'c_info_content_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__item > p' => 'color: {{VALUE}} ',
                    '{{WRAPPER}} .add-info__item > a' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'c_info_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__item > p, .add-info__item > a',
            ]
        );
        $this->add_control(
            'c_info_border_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'c_info_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__item' => 'border-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'c_info_margin_padding_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Margin & Padding', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
			'c_info_margin',
			[
				'label' => esc_html__( 'Margin', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .add-info__item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
			'c_info_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .add-info__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_control(
            'c_info_opening_houres',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Opening Houres', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'op_icon_bg_color',
            [
                'label'     => esc_html__( 'Icon BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__opening-hour .icon' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'op_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__opening-hour .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'op_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__opening-hour .content h3',
            ]
        );
        $this->add_control(
            'op_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__opening-hour .content p' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'op_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__opening-hour .content p',
            ]
        );

        $this->add_control(
            'social_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Social', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'social_color',
            [
                'label'     => esc_html__( 'Social Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__social a' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'social_hover_color',
            [
                'label'     => esc_html__( 'Social Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__social a:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'social_bg_color',
            [
                'label'     => esc_html__( 'Social BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__social a' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'social_hover_bg_color',
            [
                'label'     => esc_html__( 'Social Hover BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__social a:hover' => 'background-color: {{VALUE}} ',
                ],
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
                    '{{WRAPPER}} .add-info__counter' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .add-info__counter::before' => 'background-color: {{VALUE}} ',
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
					'{{WRAPPER}} .your-class' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'label'     => esc_html__( 'Video Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__video .popup-video i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'video_bg_color',
            [
                'label'     => esc_html__( 'Video Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__video .popup-video' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .add-info__video .popup-video::before' => 'background-color: {{VALUE}} ',
                    '{{WRAPPER}} .add-info__video .popup-video::after' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'counter_number',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Counter Number', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'counter_number_color',
            [
                'label'     => esc_html__( 'Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__counter .counter__item h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'counter_number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__counter .counter__item h3',
            ]
        );
        $this->add_control(
            'counter_title',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Counter Title', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'counter_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .add-info__counter .counter__item p' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'counter_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .add-info__counter .counter__item p',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_process());