<?php

$clinox_theme_data = wp_get_theme();

/*
 * Define theme version
 */
define('CLINOX_VERSION', (WP_DEBUG) ? time() : $clinox_theme_data->get('Version'));


/*
 * After setup theme
 */
require_once get_template_directory() . '/inc/theme-setup.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/*
 * Enqueue styles and scripts.
 */
require_once get_template_directory() . '/inc/css-and-js.php';

/*
 * Register widget area
 */
require_once get_template_directory() . '/inc/widget-area-init.php';

/**
 * navwalker file
 */
require_once get_template_directory() . '/inc/class-navwalker.php';


/**
 * Functions which loaded from plugin.
 */
require get_template_directory() . '/inc/plug-dependent.php';

/**
 * Load plugin recommendation.
 */
 
require_once get_template_directory() . '/inc/plugin-recommendations.php';


/*
 * Load default theme options
 */
require_once get_template_directory() . '/inc/metabox-and-options/theme-options/theme-options-default.php';

/*
 * Load meta box and theme options if Codestar framework installed.
 */
if( class_exists( 'CSF' ) ) {
	require_once get_template_directory() . '/inc/metabox-and-options/metabox-and-options.php';
}
