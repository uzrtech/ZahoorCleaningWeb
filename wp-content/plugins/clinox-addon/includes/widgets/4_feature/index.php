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

class clenfix_4_features extends Widget_Base {

    public function get_name() {
        return 'clfx-4-ftr';
    } 

    public function get_title() {
        return   esc_html__('4 Features', 'clenfix');
    }

    public function get_icon() {
        return 'dashicons dashicons-arrow-down';
    }

    public function get_categories() {
        return array('ashelement-addons');
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_topbat',
            [
                'label' =>   esc_html__('Content', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'count', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Counter', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'lbl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Label', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'url', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );        
        $this->add_control(
            'iconbox',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Info box', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'btn', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Button label', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style',
            [
                'label' => __( 'Feature', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
		    'icon_color',
		    [
		        'label'     => esc_html__('Icon Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__item .icon' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
			'icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'clinox' ),
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
					'size' => 70,
				],
				'selectors' => [
					'{{WRAPPER}} .feature__item .icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
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
		        'label'     => esc_html__('Title Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__title' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__title',
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
		        'label'     => esc_html__('Content Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__item p' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__item p',
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
		        'label'     => esc_html__('Link Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__link a' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'link_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__link a',
            ]
        );
        $this->add_control(
            'number_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Number', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
		    'number_color',
		    [
		        'label'     => esc_html__('Number Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__number' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'number_bg_color',
		    [
		        'label'     => esc_html__('Number BG Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__number' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'number_hover_bg_color',
		    [
		        'label'     => esc_html__('Number Hover BG Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .feature__item:hover .feature__number' => 'background-color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .feature__number',
            ]
        );
        
        $this->end_controls_section();

    }

    protected function render() {
        
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/one.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_features());