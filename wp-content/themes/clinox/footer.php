<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

 $go_to_top = clinox_option('go_to_top_button', true);

?>			
	</div><!-- #content -->
</div><!-- #page -->



<?php 

global $post;

$option = clinox_option('footer');

if ( is_page() || is_singular( 'post' ) || clinox_custom_post_types() && get_post_meta( $post->ID, 'clinox_common_meta', true ) ) {
	$option_meta = get_post_meta( $post->ID, 'clinox_common_meta', true );
} else {
	$option_meta = array();
}
if ( is_array( $option_meta ) && array_key_exists( 'footer_mt_opt', $option_meta ) ) {
	echo do_shortcode('[INSERT_ELEMENTOR id="'.$option_meta['footer_mt_opt'].'"]');
} else {
	echo do_shortcode('[INSERT_ELEMENTOR id="'.$option.'"]');
}



?>

<?php if($go_to_top == true) : ?>
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
<?php endif;?>

<?php wp_footer();?>
</body>
</html>
