<?php
//Search Options

CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'Search Page', 'clinox' ),
	'id'     => 'search_page_options',
	'icon'   => 'fa fa-search',
	'fields' => array(

		array(
			'id'       => 'search_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Search Banner', 'clinox' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'clinox' ),
			'text_off' => esc_html__( 'No', 'clinox' ),
			'desc'     => esc_html__( 'Enable or disable search page banner.', 'clinox' ),
		),

		array(
			'id'                    => 'search_banner_background_options',
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
			'dependency'            => array( 'search_banner', '==', true ),
			'output'                => '.clenix-breadcrumb-section.search-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for search page then select search page banner background options from here.', 'clinox' ),
		),

	)
) );