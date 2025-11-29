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

class clenfix_4_about_section_2 extends Widget_Base {

    public function get_name() {
        return '4-about-2';
    } 

    public function get_title() {
        return   esc_html__('4 About 2', 'clenfix');
    }

    public function get_icon() {
        return 'dashicons dashicons-arrow-down';
    }

    public function get_categories() {
        return array('ashelement-addons');
    }

    protected function register_controls() {

        $this->start_controls_section(
            'section_par',
            [
                'label' =>   esc_html__('Images', 'clenfix'),
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

        $this->add_control(
            'abt1', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('About 1', 'clenfix'),
            ]
        );

        $this->add_control(
            'abt2', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('About 2', 'clenfix'),
            ]
        );

        $this->end_controls_section();

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
                'type' => Controls_Manager::TEXTAREA,
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'ttl', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Title', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'desc', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,               
                'label' =>   esc_html__('Description', 'clenfix'),
            ]
        );

        $repeater->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
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

        $this->add_control(
            'expt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Experience Title', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'expd', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Experience Description', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'avtr', [
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'label' =>   esc_html__('Avatar img', 'clenfix'),
            ]
        );

        $this->add_control(
            'avt', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Name', 'clenfix'),                                   
            ]
        );

        $this->add_control(
            'avd', [
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'label' =>   esc_html__('Position', 'clenfix'),                                   
            ]
        );

        $r = new \Elementor\Repeater();



        $r->add_control(
            'url', [
                'type' => Controls_Manager::URL,
                'label_block' => true,               
                'label' =>   esc_html__('Link', 'clenfix'),
            ]
        );

        $r->add_control(
            'icon', [
                'type' => Controls_Manager::ICONS,
                'label_block' => true,               
                'label' =>   esc_html__('Icon', 'clenfix'),
            ]
        );
                
        $this->add_control(
            'social',
            [
                'type' => Controls_Manager::REPEATER,
                'fields' => $r->get_controls(),
                'label' =>   esc_html__('Social icon', 'clenfix'),
                'prevent_empty' => false,               
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_style',
            [
                'label' => __( 'Section Title', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_color',
            [
                'label'     => esc_html__( 'Sub Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'sub_title_bg_color',
            [
                'label'     => esc_html__( 'Sub Title BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sec-title .subtitle' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'sub_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .subtitle',
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
                    '{{WRAPPER}} .sec-title .title' => 'color: {{VALUE}} ',
                ],
            ]
        );
		$this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .sec-title .title',
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

        $this->end_controls_section();

        $this->start_controls_section(
            'info_style',
            [
                'label' => __( 'About Info', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'info_icon_color',
            [
                'label'     => esc_html__( 'Icon Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__info-box .icon' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'info_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .about__info-box .icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'info_title_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Info Title', 'clinox' ),
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
            'info_title_color',
            [
                'label'     => esc_html__( 'Title Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__info-box .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'info_title_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__info-box .content h3',
            ]
        );
        $this->add_control(
            'info_content_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Info Content', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'info_content_color',
            [
                'label'     => esc_html__( 'Content Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__info-box .content p' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'info_content_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__info-box .content p',
            ]
        );
        $this->add_control(
            'info_border_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Info Border', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'info_border_color',
            [
                'label'     => esc_html__( 'Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__info-box:not(:last-child)::before' => 'background-color: {{VALUE}} ',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'experience_style',
            [
                'label' => __( 'Experience', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
    
        $this->add_control(
            'experience_bg_color',
            [
                'label'     => esc_html__( 'Experience BG Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__experince' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
            'experience_border_color',
            [
                'label'     => esc_html__( 'Experience Border Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__experince' => 'border-color: {{VALUE}} ',
                ],
            ]
        );

        $this->add_control(
            'experience_number_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Experience Number', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'experience_number_color',
            [
                'label'     => esc_html__( 'Experience Number Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__experince h2' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'experience_number_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__experince h2',
            ]
        );
        $this->add_control(
            'experience_text_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Experience Text', 'clinox' ),
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'experience_text_color',
            [
                'label'     => esc_html__( 'Experience Text Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__experince' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'experience_text_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__experince',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'author_info_style',
            [
                'label' => __( 'Author Info', 'clinox' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'author_bg_color',
            [
                'label'     => esc_html__( 'Background Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__author' => 'background-color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'author_padding',
			[
				'label' => esc_html__( 'Padding', 'clinox' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .about__author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
            'name_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Author Name', 'clinox' ),
                'separator' => 'before',
            ]
        );
 
        $this->add_control(
            'name_color',
            [
                'label'     => esc_html__( 'Name Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__author .content h3' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'name_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__author .content h3',
            ]
        );
        $this->add_control(
            'desig_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Author Designation', 'clinox' ),
                'separator' => 'before',
            ]
        );
 
        $this->add_control(
            'desig_color',
            [
                'label'     => esc_html__( 'Designation Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__author .content span' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'           => 'desig_typography',
                'label'          => esc_html__( 'Typography', 'clinox' ),
                'selector'       => '{{WRAPPER}} .about__author .content span',
            ]
        );
        $this->add_control(
            'author_social_h',
            [
                'type'      => Controls_Manager::HEADING,
                'label'     => esc_html__( 'Author Social', 'clinox' ),
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'social_color',
            [
                'label'     => esc_html__( 'Social Color', 'clinox' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about__author .author-social a' => 'color: {{VALUE}} ',
                ],
            ]
        );
        $this->add_control(
			'social_font_size',
			[
				'label' => esc_html__( 'Font Size', 'clinox' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 13,
				],
				'selectors' => [
					'{{WRAPPER}} .about__author .author-social a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
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

 $widgets_manager->register_widget_type(new \WebangonAddon\Widgets\clenfix_4_about_section_2());