<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( is_page() || is_singular( 'post' ) || clinox_custom_post_types() && get_post_meta( $post->ID, 'clinox_common_meta', true ) ) {
		$common_meta = get_post_meta( $post->ID, 'clinox_common_meta', true );
	} else {
		$common_meta = array();
	}

	if ( is_array( $common_meta ) && array_key_exists( 'header_meta', $common_meta ) && $common_meta['header_meta'] != 'default' ) {
		$selected_header = $common_meta['header_meta'];
	} else {
		$selected_header = clinox_option( 'site_default_header', 'header-style-one' );
	}

	$preloader    = clinox_option( 'enable_preloader', true );
	$header_search = clinox_option('enable_header_search', true);

	wp_head(); ?>
</head> 

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<?php if($preloader == true): ?>
	<div class="preloder_part">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
	<?php endif; ?>

	<?php if($header_search == true ) : 
	clinox_search_form();
	endif; ?>

    <header class="site-header <?php echo esc_attr( $selected_header);?>">
        <?php get_template_part( 'template-parts/header/' . $selected_header . '' ); ?>
    </header>

	<?php get_template_part( 'template-parts/header/header','sidebar');?>


	<div id="content" class="site-content">
