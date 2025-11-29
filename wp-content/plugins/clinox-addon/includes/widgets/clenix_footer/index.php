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

class clefix_footer_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-footer';
    } 

    public function get_title() {
        return   esc_html__('Footer', 'clenfix');
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
                'label' =>   esc_html__('Logo', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [ 
                    'url' => Utils::get_placeholder_image_src(), 
                ],
                'label_block' => true,                
                'label' =>   esc_html__('Logo', 'clenfix'), 
            ] 
        ); 

        $this->add_control(
            'desc', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );

        $this->add_control(
            'copy', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Copyright', 'clenfix'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Image', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );

        $this->add_control(
            'btns',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Buttons', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'link_section',
            [
                'label' => __('Links', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'l1label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r1 = new \Elementor\Repeater();

        $r1->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r1->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'links1',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r1->get_controls(),
                'label' =>   esc_html__('Add links', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'l2label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r2 = new \Elementor\Repeater();

        $r2->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r2->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'links2',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r2->get_controls(),
                'label' =>   esc_html__('Add links', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'newslwteer_section',
            [
                'label' => __('Newsletter', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'l3label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'shortcode', [
                'type' => Controls_Manager::TEXTAREA,
                'label' =>   esc_html__('Shortcode', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r3 = new \Elementor\Repeater();

        $r3->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r3->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'socials',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r3->get_controls(),
                'label' =>   esc_html__('Add links', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section-general-style',
            [
                'label' => __( 'General', 'clenfix' ),
                'tab' => Controls_Manager::TAB_STYLE
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_footer_widget());