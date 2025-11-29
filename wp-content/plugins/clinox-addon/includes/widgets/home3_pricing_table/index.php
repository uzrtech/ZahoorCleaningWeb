<?php
namespace WebangonAddon\Widgets;

use Elementor\utils;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) 
    exit;  

class clefix_home3_pricing extends Widget_Base {

    public function get_name() {
        return 'clenfix-home3-pricing';
    } 

    public function get_title() {
        return   esc_html__('Pricing table 3', 'clenfix');
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

        $repeater1 = new \Elementor\Repeater();       

        $repeater1->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $repeater1->add_control(
            'featured', [
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'active',
                'label' =>   esc_html__('Featured', 'clenfix'),                                   
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
            'price', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Price', 'clenfix'),                                   
            ]
        );

        $repeater1->add_control(
            'duration', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Duration', 'clenfix'),                                   
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
            'url', [
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
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Button label', 'clenfix'),                                   
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_general',
            [
                'label' => __('General', 'news-element'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->end_controls_section();
        
    }

    protected function render() {
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/style_1.php';
    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_home3_pricing());