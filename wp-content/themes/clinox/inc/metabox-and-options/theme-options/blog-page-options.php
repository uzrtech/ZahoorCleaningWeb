<?php

// Create blog page options
CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'Blog Page', 'clinox' ),
	'id'     => 'blog_page_options',
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array(

		array(
			'id'       => 'blog_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Blog Banner', 'clinox'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Enable or disable blog page banner.', 'clinox'),
		),

		array(
			'id'                    => 'blog_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'clinox'),
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'dependency'            => array('blog_banner', '==', true),
			'output'                => '.clenix-breadcrumb-section.blog-banner',
			'desc'                  => esc_html__('If you want different banner background settings for blog page then select blog page banner background Options from here.', 'clinox'),
		),

		array(
			'id'         => 'blog_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Title', 'clinox'),
			'desc'       => esc_html__('Type blog banner title here.', 'clinox'),
			'dependency' => array('blog_banner', '==', true),
		),
	)
) );