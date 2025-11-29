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

class clefix_portfolio_filter_widget extends Widget_Base {

    public function get_name() {
        return 'clenfix-portfolio-filter';
    } 

    public function get_title() {
        return   esc_html__('Portfolio filter', 'clenfix');
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

        $this->start_controls_tabs('tctb');

        $this->start_controls_tab(
            'e1',
            [
                'label' => esc_html__( 'Category', 'clenfix' ),               
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Title', 'clenfix'),
                'label_block' => true,
            ]
        );
        
        $this->add_control(
            'lists',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                     'title' =>   esc_html__( 'All', 'clenfix' ),
                    ]
                ],
                'title_field' => '{{{ title }}}',                 
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'e2',
            [
                'label' => esc_html__( 'Item', 'clenfix' ),                
            ]
        );
 
        $r = new \Elementor\Repeater();

        $r->add_control(
            'title', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Title', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r->add_control(
            'cat',
            [
                'label' =>   esc_html__( 'Select category', 'clenfix' ),
                'type' => Controls_Manager::SELECT2,
                'multiple' => true,
                'label_block' => true,
                'options' => ashelement_portfolio_cat()
                
            ]
        );

        $r->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,               
                'label' =>   esc_html__('Thumbnail', 'clenfix'),
            ]
        );

        $r->add_control(
            'url',
            [
                'label' =>   esc_html__( 'Link', 'clenfix' ),
                'type' =>  Controls_Manager::URL,              
            ]
        );
        
        $this->add_control(
            'itms',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r->get_controls(),
                'prevent_empty' => false,
                'default' => [
                    [
                     'title' =>   esc_html__( 'Hilix Marko Polo', 'clenfix' ),
                    ]
                ],
                'title_field' => '{{{ title }}}',                 
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_portfolio_filter_widget());