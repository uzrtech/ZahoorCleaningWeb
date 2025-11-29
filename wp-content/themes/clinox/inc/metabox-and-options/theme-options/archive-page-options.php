<?php
//Archive Options

CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'Archive Page', 'clinox' ),
	'id'     => 'archive_page_options',
	'icon'   => 'fa fa-file-archive-o',
	'fields' => array(

		array(
			'id'       => 'archive_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Archive Banner', 'clinox' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'clinox' ),
			'text_off' => esc_html__( 'No', 'clinox' ),
			'desc'     => esc_html__( 'Enable or disable archive page banner.', 'clinox' ),
		),

		array(
			'id'                    => 'archive_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'clinox' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array( 'archive_banner', '==', true ),
			'output'                => '.clenix-breadcrumb-section.archive-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for archive page then select archive page banner background Options from here.', 'clinox' ),
		),
	)
) );