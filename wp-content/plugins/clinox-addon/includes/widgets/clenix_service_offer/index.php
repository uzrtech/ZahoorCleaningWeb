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

class clefix_service_offer_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-service-offer';
    } 

    public function get_title() {
        return   esc_html__('Service offer', 'clenfix');
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
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'num', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Number', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Description', 'clenfix'),
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

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_service_offer_widget());