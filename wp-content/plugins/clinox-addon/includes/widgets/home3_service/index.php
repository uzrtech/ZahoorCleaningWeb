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

class clefix_home3_service_slider extends Widget_Base {

    public function get_name() {
        return 'clenfix_home3_service';
    } 

    public function get_title() {
        return   esc_html__('Service 3', 'clenfix');
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
            'bg', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Background', 'clenfix'),
            ]
        );

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
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $repeater1->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Image', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'icon', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),                                   
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
            'btnlabel', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Button label', 'clenfix'),                                   
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
        
        $this->end_controls_section();

        $this->start_controls_section(
            'service_style_style',
            [
                'label' => __( 'Service', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'service_bg_color',
            [
                'label'     => esc_html__( 'Service BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-item-3::before' => 'background-color: {{VALUE}} ',
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
            'service_icon_color',
            [
                'label'     => esc_html__( 'Icon Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-item-3 .inner-icon' => 'background-color: {{VALUE}} ',
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
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-item-3 .inner-text h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_title_hover_color',
            [
                'label'     => esc_html__( 'Title Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-item-3 .inner-text h3:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-service-item-3 .inner-text h3',
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
                    '{{WRAPPER}} .clenix-service-item-3 .inner-text p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'service_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .clenix-service-item-3 .inner-text p',
            ]
        );

        $this->add_control(
            'service_nav_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Nav
                ', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'service_nav_color',
            [
                'label'     => esc_html__( 'Nav Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-content-3 .carousel_nav button' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_nav_hover_color',
            [
                'label'     => esc_html__( 'Nav Hover Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-content-3 .carousel_nav button:hover' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_nav_bg_color',
            [
                'label'     => esc_html__( 'Nav BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-content-3 .carousel_nav button' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_nav_bg_hover_color',
            [
                'label'     => esc_html__( 'Nav Hover BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-service-content-3 .carousel_nav button:hover' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'service_text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Service Text ', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'service_text_color',
            [
                'label'     => esc_html__( 'Service Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-more-service-btn-3 p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'service_text_link_color',
            [
                'label'     => esc_html__( 'Service Text Link Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .clenix-more-service-btn-3 p a' => 'color: {{VALUE}} ',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_home3_service_slider());