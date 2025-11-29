<?php
//Single Post

CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'Single Post / Post Details', 'clinox' ),
	'id'     => 'single_post_options',
	'icon'   => 'fa fa-pencil',
	'fields' => array(



		array(
			'id'       => 'show_default_title',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Post Title On Banner?', 'clinox'),
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Show post title on single post banner area. Default title is "Blog Details" for all single post.', 'clinox'),
			'default'  => true,
		),


		array(
			'id'         => 'single_post_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Default Title', 'clinox'),
			'desc'       => esc_html__('Default banner title for all single post.', 'clinox'),
			'default'       => esc_html__('Blog Details', 'clinox'),
			'dependency' => array( 'show_default_title', '==', 'false' ),
		),

	)
) );