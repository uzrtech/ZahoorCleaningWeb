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

class clefix_header_widget_2 extends Widget_Base {

    public function get_name() {
        return 'clenfix-header-2';
    } 

    public function get_title() {
        return   esc_html__('Header 2', 'clenfix');
    }

    public function get_icon() {
        return 'dashicons dashicons-arrow-down';
    }

    public function get_categories() {
        return array('ashelement-addons');
    }

    protected function register_controls() {

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

        $r3 = new \Elementor\Repeater();

        $r3->add_control(
            'img', [
                'type' => Controls_Manager::MEDIA, 
                'default' => [ 
                    'url' => Utils::get_placeholder_image_src(), 
                ],
                'label_block' => true,                
                'label' =>   esc_html__('Image', 'clenfix'), 
            ] 
        ); 

        $r3->add_control(
            'label', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Label', 'clenfix'),
                'label_block' => true,
            ]
        );

        $r3->add_control(
            'desc', [
                'type' => Controls_Manager::TEXT,
                'label' =>   esc_html__('Description', 'clenfix'),
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
			'phone',
			[
				'label' => esc_html__( 'Phone Number', 'clenfix' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '(+123) 5462 3257', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your phone number here', 'clenfix' ),
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_header_widget_2());