<?php
namespace WebangonAddon\Widgets;
use Elementor\utils;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if (!defined('ABSPATH')) 
    exit;  

class clefix_home3_blog extends Widget_Base {

    public function get_name() {
        return 'clenfix-home3-blog';
    } 

    public function get_title() {
        return   esc_html__('Home3 Blog', 'clenfix');
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
            'title', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Pretitle', 'clenfix'),                                   
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
            'cat_query',
            [
                'label' => __('Category', 'clenfix'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,               
            ]           
        );

        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'clenfix'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
            ]
        );

        $this->add_control(
            'img_size',
            [
                'label' => __('Image size', 'clenfix'),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'options' =>  ae_image_size_choose(), 
                'multiple' => false,                                                
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings(); 
        $per_page = $settings['posts_per_page'];
        $img_size = $settings['img_size'];
        $cat = $settings['cat_query'];
        $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => $per_page,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $cat,
                ) ,
            ) ,
        );

        require dirname(__FILE__) .'/style_1.php';
    }

}

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clefix_home3_blog());