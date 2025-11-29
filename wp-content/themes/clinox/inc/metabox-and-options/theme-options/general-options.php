<?php

// Create general section
CSF::createSection( $clinox_theme_option, array(
	'title'  => esc_html__( 'General Options', 'clinox' ),
	'id'     => 'general_options',
	'icon'   => 'fa fa-google',
	'fields' => array(

		array(
			'id'     => 'theme_primary_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Primary Color', 'clinox' ),
			'desc'   => esc_html__( 'Only works with the elements which is not related with elementor widget. You can change other colors from individual Elemenotr widget\'settings.', 'clinox' ),
			'output' => array(

				'background-color' => '.thm-btn--transparent:hover,.header-style-two .header-navigation-content-wrapper,.clenix-header-top-wrap,.header-style-three .header-navigation-content,.clenix-blog-feed-item .inner-text .read-more a,.clenix-blog-details-area .inner-text .read-more a,.clenix-blog-feed-item .inner-text .inner-meta-category .blog-cat,.clenix-blog-details-area .inner-text .inner-meta-category .blog-cat',

				'color' => '.main-menu__nav ul li:hover > a,.main-menu__nav ul li.active > a,.main-menu__nav ul li .submenu li:hover > a,.main-menu__nav ul li .submenu li.active > a,.clenix-blog-details-area blockquote::before',

				'border-color' => '.thm-btn--transparent:hover,.clenix-blog-details-area blockquote',
			),
		),

		array(
			'id'                    => 'theme_secondary_color',
			'type'                  => 'color',
			'title'                 => esc_html__( 'Secondary Color', 'clinox' ),
			'desc'                  => esc_html__( 'Only works with the elements which is not related with elementor widget. You can change other colors from individual Elemenotr widget\'settings.', 'clinox' ),

			'output' => array(

				'background-color' => '.dot1,.dot2,.header-cart-btn-search .h-cta-btn a,.header-style-three .clenix-header-top-wrap .top-social-btn .top-btn a,.clenix-header-content-2 .header-cta-btn .cta-btn a',
				'color' => '.header__info > li i,.clenix-header-content-2 .header-cta-btn .cta-number a',

				'border-color' => '',
			),
		),

		array(
			'id'       => 'enable_preloader',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Pre Loader', 'clinox' ),
			'text_on'  => esc_html__( 'Yes', 'clinox' ),
			'text_off' => esc_html__( 'No', 'clinox' ),
			'desc'     => esc_html__( 'Enable or disable Site Preloader.', 'clinox' ),
			'default'  => true
		),
		array(
			'id'       => 'go_to_top_button',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Back To Top', 'clinox' ),
			'text_on'  => esc_html__( 'Yes', 'clinox' ),
			'text_off' => esc_html__( 'No', 'clinox' ),
			'desc'     => esc_html__( 'Enable or disable back to top.', 'clinox' ),
			'default'  => true
		),
	)
) );