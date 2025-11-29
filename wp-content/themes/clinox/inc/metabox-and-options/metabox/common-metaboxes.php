<?php
$clinox_common_meta = 'clinox_common_meta';

// Create a metabox
CSF::createMetabox($clinox_common_meta, array(
	'title'     => esc_html__('Settings', 'clinox'),
	'post_type' => array('page', 'post',),
	'data_type' => 'serialize',
));

// Create layout section
CSF::createSection($clinox_common_meta, array(
	'title'  => esc_html__('Header Settings ', 'clinox'),
	'icon'   => 'fa fa-header',
	'fields' => array(

		array(
			'id'      => 'header_meta',
			'type'    => 'select',
			'title'   => esc_html__('Header Style', 'clinox'),
			'options' => array(
				'default'          => esc_html__('Default', 'clinox'),
				'header-style-one' => esc_html__('Header Style One', 'clinox'),
				'header-style-two' => esc_html__('Header Style Two', 'clinox'),
				'header-style-three' => esc_html__('Header Style Three', 'clinox'),
				'header-style-four' => esc_html__('Header Style Four', 'clinox'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select header style', 'clinox'),
		),

		array(
			'id'           => 'header_logo_meta',
			'type'         => 'media',
			'title'        => esc_html__('Header Logo', 'clinox'),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__('Upload Logo', 'clinox'),
			'desc'         => esc_html__('Upload logo image', 'clinox'),

		),

		array(
			'id'          => 'main_menu_meta',
			'type'        => 'select',
			'title'       => esc_html__('Header Menu', 'clinox'),
			'options'     => 'menus',
			'placeholder' => esc_html__('Default', 'clinox'),
			'desc'        => esc_html__('You can select a different menu for this page from here.', 'clinox'),
		),
	)
));

// Create a section
CSF::createSection($clinox_common_meta, array(
	'title'  => esc_html__('Banner Settings', 'clinox'),
	'icon' => 'fa fa-flag-o',
	'fields' => array(
		array(
			'id'       => 'enable_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Banner', 'clinox'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'clinox'),
			'text_off' => esc_html__('No', 'clinox'),
			'desc'     => esc_html__('Enable or disable banner.', 'clinox'),
		),

		array(
			'id'                    => 'banner_background_meta',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'clinox'),
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array('enable_banner', '==', true),
			'output'                => '.clenix-breadcrumb-section.post-banner,.clenix-breadcrumb-section.page-banner',
			'desc'                  => esc_html__('Select banner background color and image', 'clinox'),
		),

		array(
			'id'         => 'custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Custom Title', 'clinox'),
			'dependency' => array('enable_banner', '==', true),
			'desc'       => esc_html__('If you want to use custom title write title here.If you don\'t, leave it empty.', 'clinox')
		),

		array(
			'id'         => 'banner_text_align_meta',
			'type'       => 'select',
			'title'      => esc_html__('Banner Text Align', 'clinox'),
			'options'    => array(
				'default' => esc_html__('Default', 'clinox'),
				'left'    => esc_html__('Left', 'clinox'),
				'center'  => esc_html__('Center', 'clinox'),
				'right'   => esc_html__('Right', 'clinox'),
			),
			'default'    => 'default',
			'dependency' => array('enable_banner', '==', true),
			'desc'       => esc_html__('Select page banner text align.', 'clinox'),
		),

		array(
			'id'          => 'banner_height_meta',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'clinox'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.banner-area.project-banner,.header-style-three .banner-area,.header-style-four .banner-area',
			'output_mode' => 'height',
			'subtitle'    => esc_html__('Select banner min height.', 'clinox'),
			'desc'        => esc_html__('Select banner min height.', 'clinox'),
			'dependency'  => array('enable_banner', '==', true),
		),
	)
));


// Create Footer section
CSF::createSection($clinox_common_meta, array(
	'title'  => esc_html__('Footer Options', 'clinox'),
	'icon' => 'fa fa-wordpress',
	'fields' => array(
		array(
			'id'    => 'footer_mt_opt',
			'type'  => 'select',
			'title' => __('Footer Style','clenfix'),
			'chosen'      => true,
			'options'     => hf_template_select(),
		),

	)
));