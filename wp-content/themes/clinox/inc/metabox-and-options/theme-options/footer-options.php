<?php
// Create Footer section

CSF::createSection( $clinox_theme_option, array(
	'title' => esc_html__( 'Footer Settings', 'clinox' ),
	'id'    => 'footer_settings',
	'icon'  => 'fa fa-credit-card',
	'fields' => array(
		array(
			'id'    => 'footer',
			'type'  => 'select',
			'title' => __('Footer Style','clinox'),
			'options'     => hf_template_select(),
			'subtitle' => esc_html__('Select site default footer style. You can override this settings on individual page / Posts.', 'clinox'),
		),
	)
) );




























