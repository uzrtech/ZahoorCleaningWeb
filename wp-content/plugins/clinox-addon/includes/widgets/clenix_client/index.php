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

class clefix_client_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-client';
    } 

    public function get_title() {
        return   esc_html__('Client', 'clenfix');
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

        $repeater1 = new \Elementor\Repeater();       

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

        $this->add_control(
            'items',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_client_widget());