<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();

// $enable_banner = clinox_option('enable_banner', true);
// $banner_text_align = clinox_option('banner_default_text_align', 'center');

if ( get_post_meta( $post->ID, 'clinox_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'clinox_common_meta', true );
} else {
	$common_meta = array();
}

if ( array_key_exists( 'enable_banner', $common_meta ) ) {
	$page_banner = $common_meta['enable_banner'];
} else {
	$page_banner = true;
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


<?php if($page_banner == true) : ?>
<section id="clenix-breadcrumb" class="clenix-breadcrumb-section page-banner position-relative">
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative text-<?php echo esc_attr( $banner_text_align ); ?>">

			<h2>
			<?php
                if ( ! empty( $custom_title ) ) {
                    echo esc_html( $custom_title );
                } else {
                    the_title();
                }
				?>
			</h2>
			
			<?php echo clinox_the_breadcrumb(); ?>
		</div>
	</div>
</section>
<?php endif; ?>

    <section class="page-section-padding">
        <div class="container">
            <div class="row">
                <div class="<?php echo esc_attr($main);?>">
                    <div class="blog-details-content">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
                </div>
            </div>
            <div class="<?php echo esc_attr($sidebar);?>">
                <?php get_template_part( 'layouts/sidebar', 'left' ); ?>                        
            </div>            
        </div>
    </section>

<?php get_footer();?>
