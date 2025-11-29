<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();

$enable_banner = clinox_option('blog_banner', true);
$blog_details_title = clinox_option('blog_details_title');
$banner_text_align = clinox_option('banner_default_text_align', 'center');

if ( get_post_meta( $post->ID, 'clinox_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'clinox_common_meta', true );
} else {
	$common_meta = array();
}


if ( array_key_exists( 'enable_banner', $common_meta ) ) {
	$post_banner = $common_meta['enable_banner'];
} else {
	$post_banner = true;
}

if ( array_key_exists( 'custom_title', $common_meta ) ) {
	$custom_title = $common_meta['custom_title'];
} else {
	$custom_title = '';
}

if ( array_key_exists( 'banner_text_align_meta', $common_meta ) && $common_meta['banner_text_align_meta'] != 'default' ) {
	$banner_text_align = $common_meta['banner_text_align_meta'];
} else {
	$banner_text_align = clinox_option( 'banner_default_text_align', 'center' );
}

if ( is_active_sidebar( 'sidebar-1' ) ) {
    $main = 'col-md-8';
    $sidebar = 'col-md-4';
} else {
    $main = 'col-md-12';
    $sidebar = 'col-md-12';
}
 ?>

<?php if($enable_banner == true) : ?>
<section id="clenix-breadcrumb" class="clenix-breadcrumb-section blog-banner position-relative">
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative text-<?php echo esc_attr( $banner_text_align ); ?>">

			<h2>
			<?php
				if ( ! empty( $custom_title ) ) {
					echo esc_html( $custom_title );
				} else {
					$default_title = clinox_option('show_default_title', true);
					if($default_title == true){
						the_title();
					}else{
						$post_banner_title = clinox_option('single_post_banner_title');
						echo esc_html( $post_banner_title );
					}
				}
				?>
			</h2>
			
			<?php echo clinox_the_breadcrumb(); ?>
		</div>
	</div>
</section>
<?php endif; ?>


<section id="clenix-blog-details" class="clenix-blog-details-content page-section-padding">
		<div class="container">
			<div class="clenix-blog-details-content">
				<div class="row">
					<div class="<?php echo esc_attr($main);?>">
                        <?php if ( have_posts() ) :

                            /* Start the Loop */ 
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/singlecontent');

                            endwhile;				

                        endif; ?>
					</div>
					<div class="<?php echo esc_attr($sidebar);?>">
					<div class="clenix-blog-sidebar  top-sticky-sidebar">
						<?php get_template_part( 'layouts/sidebar', 'left' ); ?>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();
