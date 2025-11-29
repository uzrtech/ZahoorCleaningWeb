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

class clefix_promo_widget_2 extends Widget_Base {

    public function get_name() {
        return 'clenfix-prono-2';
    } 

    public function get_title() {
        return   esc_html__('Promo 2', 'clenfix');
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
            'side1', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Slide shape 1', 'clenfix'),
            ] 
        );

        $this->add_control(
            'side2', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Slide shape 2', 'clenfix'),
            ] 
        );

        $this->add_control(
            'star1', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Star shape 1', 'clenfix'),
            ] 
        );

        $this->add_control(
            'star2', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Star shape 2', 'clenfix'),
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
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'btn-label', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Button label', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'btn-link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'label' =>   esc_html__('Button link', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'phone', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Phone no', 'clenfix'),                                   
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_promo_widget_2());