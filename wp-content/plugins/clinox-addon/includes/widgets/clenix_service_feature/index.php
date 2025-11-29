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

class clefix_service_feature_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-service-feature';
    } 

    public function get_title() {
        return   esc_html__('Service feature', 'clenfix');
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
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Overlay image', 'clenfix'),
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
            'ltitle', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $this->add_control(
            'ldesc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'list', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('List', 'clenfix'),
            ]
        );

        $this->add_control(
            'litems',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater1->get_controls(), 
                'prevent_empty' => false,
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
            'rtitle', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $this->add_control(
            'rdesc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'list', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('List', 'clenfix'),
            ]
        );

        $this->add_control(
            'ritems',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater1->get_controls(), 
                'prevent_empty' => false,
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_service_feature_widget());