<?php
namespace WebangonAddon\Widgets;

use Elementor\utils;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;

if (!defined('ABSPATH')) {
    exit;
}

class clefix_whychoose_widget extends Widget_Base
{
    public function get_name()
    {
        return 'clenfix_whychoose';
    }

    public function get_title()
    {
        return   esc_html__('Clenix whychoose', 'clenfix');
    }

    public function get_icon()
    {
        return 'dashicons dashicons-arrow-down';
    }

    public function get_categories()
    {
        return ['ashelement-addons'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'section_progress_bar',
            [
                'label' => esc_html__('Content', 'clenfix'),
            ]
        );

        $this->start_controls_tabs('gt');

        $this->start_controls_tab(
            'gt1',
            [
                'label' => esc_html__('Left', 'clenfix'),
            ]
        );

        $this->add_control(
            'sub',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => esc_html__('Sub title', 'clenfix'),
            ]
        );

        $this->add_control(
            'title',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater1 = new \Elementor\Repeater();

        $repeater1->add_control(
            'title',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater1->add_control(
            'icon',
            [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' => esc_html__('Icon', 'clenfix'),
            ]
        );

        $this->add_control(
            'whys',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater1->get_controls(),
                'prevent_empty' => false,
                'label' => 'Features'
            ]
        );

        $r2 = new \Elementor\Repeater();

        $r2->add_control(
            'title',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => esc_html__('Title', 'clenfix'),
            ]
        );

        $r2->add_responsive_control(
            'num',
            [
                'label' => esc_html__('Percentage', 'clenfix'),
                'type' => Controls_Manager::SLIDER,
            ]
        );

        $this->add_control(
            'progress',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r2->get_controls(),
                'prevent_empty' => false,
                'label' => 'Progress'
            ]
        );

        $this->add_control(
            'progress_label',
            [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' => esc_html__('Progress label', 'clenfix'),
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'gt2',
            [
                'label' => esc_html__('Right', 'clenfix'),
            ]
        );

        $this->add_control(
            'img',
            [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' => esc_html__('Image', 'clenfix'),
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings();
        require dirname(__FILE__) . '/style_1.php';
    }
}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_whychoose_widget());
