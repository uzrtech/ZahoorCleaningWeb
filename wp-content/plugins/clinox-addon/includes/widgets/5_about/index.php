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

class clenfix_5_about extends Widget_Base {

    public function get_name() {
        return '5-about';
    } 

    public function get_title() {
        return   esc_html__('5 About', 'clenfix');
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
            'thmb', [
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,               
                'label' =>   esc_html__('Thumbnail', 'clenfix'),
            ]
        );

        $this->add_control(
            'cta', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Call to action content', 'clenfix'),
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
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
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
            'info', [
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,               
                'label' =>   esc_html__('Information', 'clenfix'),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'pre', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Pre title', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $this->add_control(
            'itms',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'label' =>   esc_html__('Logo', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->add_control(
            'cd', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Count description', 'clenfix'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'cta_style',
            [
                'label' => __( 'CTA Style', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'cta_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__cta' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'cta_text_color',
            [
                'label'     => esc_html__( 'Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__cta span' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__cta span',
            ]
        );

        $this->add_control(
            'cta_number',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Number', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'cta_number_color',
            [
                'label'     => esc_html__( 'Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__cta h3' => 'color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__cta h3',
            ]
        );

        $this->add_control(
            'link_number',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Link', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'link_color',
            [
                'label'     => esc_html__( 'Link Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__cta .action' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'link_bg_color',
            [
                'label'     => esc_html__( 'Link Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__cta .action' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'Content', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Sub Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_border_color',
            [
                'label'     => esc_html__( 'Sub Title Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .subtitle::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .subtitle',
            ]
        );

		$this->add_control(
            'title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title__two .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title__two .title',
            ]
        );
		$this->add_control(
            'content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
		
		$this->add_control(
            'content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title p' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title p',
            ]
        );

        $this->add_control(
            'list_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Content', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'list_color',
            [
                'label'     => esc_html__( 'List Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__list li' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'list_icon_color',
            [
                'label'     => esc_html__( 'List Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__list li::before' => 'color: {{VALUE}} ',
                ],
            ]
        );
        
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'list_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__list li',
            ]
        );

        $this->add_control(
            'counter_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Counter', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'counter_color',
		    [
		        'label'     => esc_html__('Counter Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .counter__item h3' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'counter_typography',
                'label'          => esc_html__( 'Counter Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .counter__item h3',
            ]
        );
        $this->add_control(
            'counter_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Counter Title', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'counter_title_color',
		    [
		        'label'     => esc_html__('Counter Title Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .counter__item p' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'counter_title_typography',
                'label'          => esc_html__( 'Counter Title Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .counter__item p',
            ]
        );

        $this->add_control(
            'text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Text', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
		    'text_color',
		    [
		        'label'     => esc_html__('Text Color', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .about__text' => 'color: {{VALUE}};',
		        ],
		    ]
		);
        $this->add_control(
		    'text_color_2',
		    [
		        'label'     => esc_html__('Text Color Two', 'clinox'),
		        'type'      => Controls_Manager::COLOR,
		        'selectors' => [
		            '{{WRAPPER}} .about__text span' => 'color: {{VALUE}};',
		        ],
		    ]
		);

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'a_text_typography',
                'label'          => esc_html__( 'Text Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__text',
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_5_about());