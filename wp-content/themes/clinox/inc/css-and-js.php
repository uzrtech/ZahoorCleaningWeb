<?php
/**
 * Enqueue scripts and styles.
 */
function clinox_scripts() {

	function clinox_fonts_url() {
		$fonts_url = '';
		$fonts     = []; 
		$subsets   = 'latin,latin-ext';
 
		if ( 'off' !== _x( 'on', 'DM Sans font: on or off', 'clinox' ) ) {
			$fonts[] = 'DM Sans:400,500,700';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}


		return esc_url_raw( $fonts_url );
	}

	wp_enqueue_style( 'clinox-googlefonts', clinox_fonts_url(), array(), null );

	$style = ['bootstrap','fontawesome-all','twenty','animate','video','slick','metisMenu','slick-theme','reset','style','default'];
	foreach($style as $file){ 
		wp_enqueue_style($file, get_template_directory_uri() . '/assets/css/'.$file.'.css');
	}

	wp_enqueue_style('clinox-style', get_stylesheet_uri() );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' ); 
	}
 
	$scripts = ['popper','twenty','jquery-magnific-popup','appear','slick','jquery-counterup','waypoints','backToTop','jquery-filterizr','tilt-jquery','wow','metisMenu','clinox-script','clinox-custom'];

	wp_enqueue_style( 'elementor-icons-flaticon' );
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery','masonry' ));

	foreach($scripts as $file){ 
		wp_enqueue_script($file, get_template_directory_uri() . '/assets/js/'.$file.'.js');
	}

	wp_enqueue_style('dashicons');

}
add_action( 'wp_enqueue_scripts', 'clinox_scripts' );