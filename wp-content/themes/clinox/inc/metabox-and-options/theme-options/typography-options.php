<?php
// Create typography section
CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'Typography', 'clinox' ),
	'id'     => 'typography_options',
	'icon'   => 'fa fa-text-width',
	'fields' => array(

		array(
			'id'             => 'body_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Body Font', 'clinox' ),
			'desc'           => esc_html__( 'Select body typography.', 'clinox' ),
			'output'         => 'body',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'DM Sans',
				'type'         => 'google',
				'unit'         => 'px',
				'font-weight'  => '400',
				'extra-styles' => array('400','600'),
			),
		),

		array(
			'id'             => 'heading_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Font', 'clinox' ),
			'desc'           => esc_html__( 'Select heading typography.', 'clinox' ),
			'output'         => 'h1,h2,h3,h4,h5,h6',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'DM Sans',
				'type'         => 'google',
				'unit'         => 'px',
				'font-weight'  => '500',
				'letter-spacing' => '1',
				'extra-styles' => array('500'),
			),
		),
	)
) );