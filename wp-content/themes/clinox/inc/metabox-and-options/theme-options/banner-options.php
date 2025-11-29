<?php

// Create banner options
CSF::createSection($clinox_theme_option, array(
	'title'  => esc_html__('Banner Options', 'clinox'),
	'id'     => 'banner_default_options',
	'icon'   => 'fa fa-flag-o',
	'fields' => array(

		array(
			'id'                    => 'banner_default_background',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'clinox' ),
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.clenix-breadcrumb-section',
			'desc'                  => esc_html__( 'Select banner background color and image. You can change this settings on individual page / post.', 'clinox' ),
		),

		array(
			'id'         => 'banner_default_text_align',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Text Align', 'clinox' ),
			'options'    => array(
				'start'   => esc_html__( 'Left', 'clinox' ),
				'center' => esc_html__( 'Center', 'clinox' ),
				'end'  => esc_html__( 'Right', 'clinox' ),
			),
			'default'    => 'start',
			'desc'       => esc_html__( 'Select banner text align. You can change this settings on individual page / post.', 'clinox' ),
		),

		array(
			'id'          => 'banner_default_height',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'clinox'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.clenix-breadcrumb-section',
			'output_mode' => 'height',
			'desc'        => esc_html__('Select banner height. You can change this settings on individual page / post.', 'clinox'),
		),
	)
));