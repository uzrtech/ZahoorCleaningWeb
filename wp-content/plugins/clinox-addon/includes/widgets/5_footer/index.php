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
 
class clenfix_5_footer extends Widget_Base {

    public function get_name() {
        return '5-footer';
    } 

    public function get_title() {
        return   esc_html__('5 Footer', 'clenfix');
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
                'label' =>   esc_html__('Subscribe', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $rx = new \Elementor\Repeater();

        $rx->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );
        $rx->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );
        $rx->add_control(
            'lbl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Label', 'clenfix'),
            ]
        );
        $this->add_control(
            'socials',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $rx->get_controls(),
                'label' =>   esc_html__('Social items', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'link_section',
            [
                'label' => __('About us', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'fdes', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Text', 'clenfix'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Image', 'clenfix'),
            ]
        );
        $repeater->add_control(
            'txt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Text', 'clenfix'),
            ]
        );

        $this->add_control(
            'icon',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Icons', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'mrkt_section',
            [
                'label' => __('Second column', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'l2label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r1 = new \Elementor\Repeater();

        $r1->add_control(
            'txt', [
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

        $this->end_controls_section();

        $this->start_controls_section(
            'section-rtf',
            [
                'label' => __( 'Third column', 'clenfix' ),
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

        $r3 = new \Elementor\Repeater();

        $r3->add_control(
            'txt', [
                'type' => Controls_Manager::TEXT,
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
            'links3',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r3->get_controls(),
                'label' =>   esc_html__('Add links', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section-frtg',
            [
                'label' => __( 'Fourth column', 'clenfix' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'l4label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'l4d', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Description', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'insta', [
                'type' => Controls_Manager::GALLERY,
                'label' =>   esc_html__('Gallery', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'l4d2', [
                'type' => Controls_Manager::TEXTAREA,
                'label' =>   esc_html__('Description', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section-ftr',
            [
                'label' => __( 'Footer', 'clenfix' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'cpy', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Copyright text', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r4 = new \Elementor\Repeater();

        $r4->add_control(
            'txt', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r4->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'links4',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r4->get_controls(),
                'label' =>   esc_html__('Add links', 'clenfix'),
                'prevent_empty' => false,               
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_footer());