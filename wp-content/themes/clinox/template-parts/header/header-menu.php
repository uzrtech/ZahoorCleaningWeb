<?php
if(is_page() || is_singular('post') || clinox_custom_post_types() && get_post_meta($post->ID, 'clinox_common_meta', true)) {
	$common_meta = get_post_meta($post->ID, 'clinox_common_meta', true);
}else{
	$common_meta = array();
}

if (is_array($common_meta) && array_key_exists('main_menu_meta', $common_meta)) {
	$selected_menu = $common_meta['main_menu_meta'];
} else  {
	$selected_menu = '';
}

?>

<nav class="main-menu__nav collapse navbar-collapse">
	<?php
	wp_nav_menu( array(
		'menu' => $selected_menu,
		'theme_location' => 'main-menu',
		'menu_class'     => '',
		'container'      => '',
		'fallback_cb'    => 'Clinox_Navwalker_Class::fallback',
        'walker'         => new Clinox_Navwalker_Class,
	) );
	?>
</nav><!-- #site-navigation -->