<?php
function clinox_ocdi_import_files() {
	return array(

		array(
			'import_file_name'             => 'Clinox Demo',
			'import_file_url'            => 'https://themexriver.com/wp/clinox/sample-data/contents-demo.xml',		
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'sample-data/widget-settings.wie',
			'import_notice'                => esc_html__( 'Import process may take 3-10 minutes. If you facing any issues please contact our support.', 'ximsa' ),
			'preview_url'                  => 'https://themexriver.com/wp/clinox/',
		),

	);
}
add_filter( 'pt-ocdi/import_files', 'clinox_ocdi_import_files' );

add_action( 'ocdi/before_content_import', 'clinox_before_content_import' );

function clinox_before_content_import( $selected_import ) {

	global $wpdb;

	//delete posts
	$tables = ['commentmeta','comments','postmeta','posts','termmeta','terms','term_relationships','term_taxonomy'];

	foreach ( $tables as $table ) {
		$table  = $wpdb->prefix . $table;
		$wpdb->query( "TRUNCATE TABLE $table" );
	}			
}

function clinox_ocdi_after_import( $selected_import ) {
	// Assign menus to their locations.
    $header_menu = get_term_by( 'name', 'Main menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array( 'main-menu' => $header_menu->term_id ) );

    // Assign front page and posts page (blog page)

	$front_page_id	= get_page_by_title( 'Home' );

    $blog_page_id	= get_page_by_title( 'Blog' );


	$options_data = file_get_contents( trailingslashit( get_template_directory() ) . 'sample-data/theme-option.json' );
    $out = wp_kses_post_deep( json_decode( wp_unslash( trim( $options_data ) ), true ) );
    update_option('clinox_theme_options', $out );


    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
}
add_action( 'pt-ocdi/after_import', 'clinox_ocdi_after_import' );


add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );