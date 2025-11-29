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

class clenfix_4_header extends Widget_Base {

    public function get_name() {
        return 'clfx-4-header';
    } 

    public function get_title() {
        return   esc_html__('Header 4', 'clenfix');
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
                'label' =>   esc_html__('Top bar', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
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
            'iconbox',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Info box', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $r = new \Elementor\Repeater();

        $r->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label' =>   esc_html__('Icon', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r->add_control(
            'link', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'social',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r->get_controls(),
                'label' =>   esc_html__('Social links', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'btnlabel', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Button label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'btnurl', [
                'type' => Controls_Manager::URL,
                'label' =>   esc_html__('Button link', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'phonelbl', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Phone label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'phone', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Phone number', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'logo_section',
            [
                'label' => __('Logo & Iconbox', 'clenfix'),
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
            'tap', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [ 
                    'url' => Utils::get_placeholder_image_src(), 
                ],
                'label_block' => true,                
                'label' =>   esc_html__('Tap icon', 'clenfix'), 
            ] 
        ); 

        $r3 = new \Elementor\Repeater();

        $r3->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [ 
                    'url' => Utils::get_placeholder_image_src(), 
                ],
                'label_block' => true,                
                'label' =>   esc_html__('Icon', 'clenfix'), 
            ] 
        ); 

        $r3->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'infos',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r3->get_controls(),
                'label' =>   esc_html__('Icon box', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'logo_navs',
            [
                'label' => __('Menu', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'menu',
            [
                'label' => __('Menu', 'clenfix'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  king_menu_select_choices(), 
                'multiple' => false,
                'label_block' => true,               
            ]
        );

        $this->add_control(
            'lang',
            [
                'label' => __('Language menu', 'clenfix'),
                'type' => Controls_Manager::SELECT2,
                'options' =>  king_menu_select_choices(), 
                'multiple' => false,
                'label_block' => true,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_offscr',
            [
                'label' => __('Mobile sidebar', 'clenfix'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'abt_ti', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('About title', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'abt_co', [
                'type' => Controls_Manager::TEXTAREA,
                'label' =>   esc_html__('About content', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'inf_ti', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Info title', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r4 = new \Elementor\Repeater();

        $r4->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS, 
                'label_block' => true,                
                'label' =>   esc_html__('Icon', 'clenfix'), 
            ] 
        ); 

        $r4->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $this->add_control(
            'minfos',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r4->get_controls(),
                'label' =>   esc_html__('Icon box', 'clenfix'),
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

        $this->add_control( 
            'style',
            [
                'label' =>   esc_html__('Style', 'clenfix'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'one' => [
                        'title' =>   esc_html__('One', 'clenfix'),
                        'icon' => 'eicon-slideshow',
                    ],
                    'two' => [
                        'title' =>   esc_html__('Two', 'clenfix'),
                        'icon' => 'eicon-image-bold',
                    ]                                                        
                ],
                'default' => 'one',               
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        
        $settings = $this->get_settings();      
        require dirname(__FILE__) .'/'. $settings['style'] .'.php';
    }

    protected function content_template() {

    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_header());