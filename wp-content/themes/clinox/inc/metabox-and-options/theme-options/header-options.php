<?php
// Create header Settings section
CSF::createSection( $clinox_theme_option, array(
	'title' => esc_html__( 'Header Settings', 'clinox' ),
	'id'    => 'header_options',
	'icon'  => 'fa fa-header',
) );


CSF::createSection( $clinox_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Options', 'clinox' ),
	'icon'   => 'fa fa-credit-card',
	'fields' => array(

		array(
			'id'       => 'site_default_header',
			'type'     => 'image_select',
			'title'    => esc_html__('Header Style', 'clinox'),
			'options'  => array(
				'header-style-one' => get_theme_file_uri('assets/img/header-1.jpg'),
				'header-style-two' => get_theme_file_uri('assets/img/header-2.jpg'),
				'header-style-three' => get_theme_file_uri('assets/img/header-3.jpg'),
				'header-style-four' => get_theme_file_uri('assets/img/header-4.jpg'),
			),
			'default'  => 'header-style-one',
			'subtitle' => esc_html__('Select site default header style. You can override this settings on individual page / Posts.', 'clinox'),
		),

		array(
			'id' =>'header_default_logo',
			'type'=>'media',
			'title'=>esc_html__( 'Header Logo', 'clinox' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'clinox' ),
			'desc'         => esc_html__( 'Upload logo image', 'clinox' ),
		),
		array(
			'id' =>'mobile_logo_white',
			'type'=>'media',
			'title'=>esc_html__( 'Mobile Logo White', 'clinox' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'clinox' ),
			'desc'         => esc_html__( 'Upload logo image', 'clinox' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-two,header-style-three' ),
		),
		array(
			'id'          => 'logo_maximum_width',
			'type'        => 'slider',
			'title'       => esc_html__( 'Logo Maximum Width', 'clinox' ),
			'min'         => 50,
			'max'         => 500,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.site-branding img',
			'output_mode' => 'max-width',
			'desc'        => esc_html__( 'Logo image maximum width', 'clinox' ),
		),

		array(
			'id'         => 'header_cta_title',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Title', 'clinox' ),
			'default'    => esc_html__( 'Need any help?', 'clinox' ),
			'desc'       => esc_html__( 'Type header CTA Title here', 'clinox' ),
			'dependency' => array( 'site_default_header', '==', 'header-style-one' ),
		),
		array(
			'id'         => 'header_cta_number',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Number', 'clinox' ),
			'default'    => esc_html__( '9159008855', 'clinox' ),
			'desc'       => esc_html__( 'Type header CTA number here', 'clinox' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-one,header-style-four' ),
		),
		array(
			'id'         => 'header_cta_btn_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Text', 'clinox' ),
			'default'    => esc_html__( 'Get Started Free', 'clinox' ),
			'desc'       => esc_html__( 'Type header CTA button text here', 'clinox' ),
			'dependency' => array( 'site_default_header', '==', 'header-style-one' ),
		),

		array(
			'id'         => 'header_cta_btn_url',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Url', 'clinox' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header CTA button URL here', 'clinox' ),
			'dependency' => array( 'site_default_header', '==', 'header-style-one' ),
		),
		array(
			'id'         => 'header_cta_btn_text2',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Text', 'clinox' ),
			'default'    => esc_html__( 'Request a Estimate', 'clinox' ),
			'desc'       => esc_html__( 'Type header CTA button text here', 'clinox' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-two,header-style-four' ),
		),

		array(
			'id'         => 'header_cta_btn_url2',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Url', 'clinox' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header CTA button URL here', 'clinox' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-two,header-style-four' ),
		),
		array(
			'id'         => 'header_cta_btn_text3',
			'type'       => 'text',
			'title'      => esc_html__( 'Header Top CTA Button Text', 'clinox' ),
			'default'    => esc_html__( 'GET A QUOTE', 'clinox' ),
			'desc'       => esc_html__( 'Type header top CTA button text here', 'clinox' ),
			'dependency' => array( 'site_default_header', '==', 'header-style-three' ),
		),

		array(
			'id'         => 'header_cta_btn_url3',
			'type'       => 'text',
			'title'      => esc_html__( 'Header Top CTA Button Url', 'clinox' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header top CTA button URL here', 'clinox' ),
			'dependency' => array( 'site_default_header', '==', 'header-style-three,header-style-four' ),
		),

		array(
			'id'       => 'enable_header_cart',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Header Cart', 'clinox'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Enable / Disable header cart icon.', 'clinox'),
			'dependency' => array( 'site_default_header', '==', 'header-style-two' ),
		),
		array(
			'id'       => 'enable_header_search',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Header Search', 'clinox'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Enable / Disable header search icon.', 'clinox'),
			'dependency' => array( 'site_default_header', 'any', 'header-style-two,header-style-three' ),
		),
	)
) );

CSF::createSection( $clinox_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Top', 'clinox' ),
	'icon'   => 'fas fa-level-up-alt',
	'fields' => array(

		array(
			'id'       => 'show_header_top',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Header Top?', 'clinox'),
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Show header top on header area.', 'clinox'),
			'default'  => true,
		),
		
		array(
			'id'           => 'header_top_info',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Info Text', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit header top info text from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Info" button to add new Information.', 'clinox' ),
			'button_title' => esc_html__( 'Add Info', 'clinox' ),
			'fields'       => array(
				array(
					'id'            => 'info_text',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Text', 'clinox' ),
					'desc'          => esc_html__( 'Type top left text here.', 'clinox' ),
				),

				array(
					'id'    => 'info_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'clinox' ),
					'desc'  => esc_html__( 'Select icon', 'clinox' ),
				),
			),
			'default'      => array(
				array(
					'info_text' => esc_html__( 'Wasington Sundar, (London)', 'clinox' ),
					'info_icon' => 'fas fa-map-marker-alt',
				),
			),
			'dependency' => array( 'show_header_top', '==', 'true' ),
		),
		
		array(
			'id'           => 'header_top_info_2',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Info (Header Two)', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit header top info from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Info" button to add new Information.', 'clinox' ),
			'button_title' => esc_html__( 'Add Info', 'clinox' ),
			'fields'       => array(
				array(
					'id'            => 'info_title',
					'type'          => 'text',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Title', 'clinox' ),
					'desc'          => esc_html__( 'Type title here.', 'clinox' ),
				),
				
				
				array(
					'id'            => 'text_info',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Text', 'clinox' ),
					'desc'          => esc_html__( 'Type info here.', 'clinox' ),
				),
				array(
					'id' 		   =>'top_info_icon',
					'type'		   =>'media',
					'title'        =>esc_html__( 'Icon', 'clinox' ),
					'library'      => 'image',
					'button_title' => esc_html__( 'Upload Icon', 'clinox' ),
					'desc'         => esc_html__( 'Upload Icon image', 'clinox' ),
				),
			),
			'default'      => array(
				array(
					'info_title' => esc_html__( 'Contact us', 'clinox' ),
					'text_info' => esc_html__( '22/2 Melbourne, Australia', 'clinox' ),
				),
			),
			'dependency' => array( 'show_header_top', '==', 'true' ),
		),
		array(
			'id'           => 'header_top_info_3',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Info (Header Three)', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit header top info from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Info" button to add new Information.', 'clinox' ),
			'button_title' => esc_html__( 'Add Info', 'clinox' ),
			'fields'       => array(
				array(
					'id'            => 'info_title2',
					'type'          => 'text',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Title', 'clinox' ),
					'desc'          => esc_html__( 'Type title here.', 'clinox' ),
				),
				
				
				array(
					'id'            => 'text_info2',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Text', 'clinox' ),
					'desc'          => esc_html__( 'Type info here.', 'clinox' ),
				),
				array(
					'id' 		   =>'top_info_icon2',
					'type'		   =>'media',
					'title'        =>esc_html__( 'Icon', 'clinox' ),
					'library'      => 'image',
					'button_title' => esc_html__( 'Upload Icon', 'clinox' ),
					'desc'         => esc_html__( 'Upload Icon image', 'clinox' ),
				),
			),
			'default'      => array(
				array(
					'info_title2' => esc_html__( 'Contact us', 'clinox' ),
					'text_info2' => esc_html__( '22/2 Melbourne, Australia', 'clinox' ),
				),
			),
			'dependency' => array( 'show_header_top', '==', 'true'),
		),
		

		array(
			'id'           => 'header_top_socials',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Social Icons', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit top social icons from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Social Icon" button to add new icons.', 'clinox' ),
			'button_title' => esc_html__( 'Add Social Icon', 'clinox' ),
			'fields'       => array(
				array(
					'id'    => 'icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Site Icon', 'clinox' ),
					'desc'  => esc_html__( 'Select icon', 'clinox' ),
				),

				array(
					'id'    => 'profile_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'clinox' ),
					'desc'  => esc_html__( 'Type social profile link here.', 'clinox' ),
				),
			),

			'default' => array(
				array(
					'icon'        => 'fab fa-twitter',
					'profile_url' => '#',
				),
			),
			'dependency' => array( 'show_header_top', '==', 'true' ),
		),

		
	)
) );
CSF::createSection( $clinox_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Sidebar', 'clinox' ),
	'icon'   => 'fas fa-arrow-to-right',
	'fields' => array(

		array(
			'id' =>'sidebar_logo',
			'type'=>'media',
			'title'=>esc_html__( 'Logo', 'clinox' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'clinox' ),
			'desc'         => esc_html__( 'Upload logo image', 'clinox' ),
		),
	
		array(
			'id'            => 'sidebar_title',
			'type'          => 'text',
			'media_buttons' => false,
			'height'        => '80px',
			'title'         => esc_html__( 'Title', 'clinox' ),
			'desc'          => esc_html__( 'Type sidebar title here.', 'clinox' ),
			'default'       => esc_html__( 'About us', 'clinox' ),
		),
		array(
			'id'            => 'sidebar_content',
			'type'          => 'wp_editor',
			'media_buttons' => false,
			'height'        => '80px',
			'title'         => esc_html__( 'Content', 'clinox' ),
			'desc'          => esc_html__( 'Type sidebar content here.', 'clinox' ),
			'default'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.', 'clinox' ),
		),

		array(
			'id'         => 'sidebar_btn_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Button Text', 'clinox' ),
			'default'    => esc_html__( 'Contact us', 'clinox' ),
			'desc'       => esc_html__( 'Type header sidebar button text here', 'clinox' ),
		),

		array(
			'id'         => 'sidebar_btn_url',
			'type'       => 'text',
			'title'      => esc_html__( 'Button Url', 'clinox' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header sidebar button URL here', 'clinox' ),
		),

		array(
			'id'            => 'sidebar_contact_title',
			'type'          => 'text',
			'media_buttons' => false,
			'height'        => '80px',
			'title'         => esc_html__( 'Contact Title', 'clinox' ),
			'desc'          => esc_html__( 'Type sidebar contact title here.', 'clinox' ),
			'default'       => esc_html__( 'Contact us', 'clinox' ),
		),

		array(
			'id'           => 'sidebar_contact_info',
			'type'         => 'group',
			'title'        => esc_html__( 'Contact Info', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit sidebar info text from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Info" button to add new Information.', 'clinox' ),
			'button_title' => esc_html__( 'Add Info', 'clinox' ),
			'fields'       => array(
				array(
					'id'            => 'info_text',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Text', 'clinox' ),
					'desc'          => esc_html__( 'Type top left text here.', 'clinox' ),
				),

				array(
					'id'    => 'info_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'clinox' ),
					'desc'  => esc_html__( 'Select icon', 'clinox' ),
				),
			),
			'default'      => array(
				array(
					'info_text' => esc_html__( 'Bowery St., New York, NY 10013, USA', 'clinox' ),
					'info_icon' => 'fas fa-map-marker-alt',
				),
			),
		),
		array(
			'id'           => 'sidebar_socials',
			'type'         => 'group',
			'title'        => esc_html__( 'Sidebar Social Icons', 'clinox' ),
			'subtitle'     => esc_html__( 'Add / edit sidebar social icons from here.', 'clinox' ),
			'desc'         => esc_html__( 'Click "Add Social Icon" button to add new icons.', 'clinox' ),
			'button_title' => esc_html__( 'Add Social Icon', 'clinox' ),
			'fields'       => array(
				array(
					'id'    => 'icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Site Icon', 'clinox' ),
					'desc'  => esc_html__( 'Select icon', 'clinox' ),
				),

				array(
					'id'    => 'profile_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'clinox' ),
					'desc'  => esc_html__( 'Type social profile link here.', 'clinox' ),
				),
			),

			'default' => array(
				array(
					'icon'        => 'fab fa-twitter',
					'profile_url' => '#',
				),
			),
		),
		
	)
) );
