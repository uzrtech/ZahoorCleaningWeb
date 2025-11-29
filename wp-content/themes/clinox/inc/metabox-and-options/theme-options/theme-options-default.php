<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function clinox_default_theme_options() {
	return array(
		'copyright_text' => wp_kses(
			__( '&copy; clinox 2022 | All Right Reserved', 'clinox' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
			)
		),

		'footer_info_left_text' => wp_kses(
			__( 'clinox | Developed by: <a target="_blank" href="https://xpressrow.com">XpressRow</a>', 'clinox' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
			)
		),

		'not_found_text' => wp_kses(
			__( '<h2>Page not found</h2><p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>', 'clinox' ),
			array(
				'a'      => array(
					'href'   => array(),
					'target' => array()
				),
				'strong' => array(),
				'small'  => array(),
				'span'   => array(),
				'p'      => array(),
				'h1'     => array(),
				'h2'     => array(),
				'h3'     => array(),
				'h4'     => array(),
				'h5'     => array(),
				'h6'     => array(),
			)
		),

		'blog_title'       => esc_html__( 'Blog', 'clinox' ),
		'error_page_title' => esc_html__( 'Error 404', 'clinox' ),
	);
}

//Get theme options
if ( ! function_exists( 'clinox_option' ) ) {
	function clinox_option( $option = '', $default = null ) {
		$defaults = clinox_default_theme_options();
		$options  = get_option( 'clinox_theme_options' );
		$default  = ( ! isset( $default ) && isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : $default;

		return ( isset( $options[ $option ] ) ) ? $options[ $option ] : $default;
	}
}