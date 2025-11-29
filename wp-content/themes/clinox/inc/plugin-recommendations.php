<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'clinox_register_required_plugins' );

function clinox_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => esc_html__('Clinox Addon', 'bizztech'),
			'slug'               => 'clinox-addon',
			'source'             => esc_url( 'https://themexriver.com/wp/clinox/plugins/clinox-addon.zip' ),
			'required'           => true, 
			'external_url'       => esc_url( 'https://themexriver.com/wp/clinox/plugins/clinox-addon.zip' ),
		),

		array(
			'name'               => esc_html__('Codestar Framework', 'bizztech'),
			'slug'               => 'codestar-framework',
			'source'             => esc_url( 'https://themexriver.com/wp/clinox/plugins/codestar-framework.zip' ),
			'required'           => true, 
			'external_url'       => esc_url( 'https://themexriver.com/wp/clinox/plugins/codestar-framework.zip' ),
		),

		array(
			'name' => esc_attr__('One Click Demo Import','clinox'),
			'slug' => 'one-click-demo-import',
			'required' => true,
		),

		array(
			'name' => esc_attr__('Contact Form 7','clinox'), 
			'slug'=> 'contact-form-7', 
			'required' => true, 
		),

		array(
			'name' => esc_attr__('Elementor','clinox'),
			'slug' => 'elementor', 
			'required' => true, 
		),	
		array(
			'name' => esc_attr__('Elementor Header & Footer Builder','clinox'),
			'slug' => 'header-footer-elementor', 
			'required' => true, 
		),	
	);

    $config = array(
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'has_notices' => true, 
        'dismissable' => true,
    );

    tgmpa( $plugins, $config );

}