<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clinox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clinox' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clinox' ),
		'before_widget' => '<div id="%1$s" class="clenix-side-bar-widget headline %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'clinox_widgets_init' );