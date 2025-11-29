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
$enable_banner = clinox_option('blog_banner', true);
$banner_title = clinox_option('blog_title');
$banner_text_align = clinox_option('banner_default_text_align', 'center');

?>


<?php if($enable_banner == true) : ?>
<section id="clenix-breadcrumb" class="clenix-breadcrumb-section blog-banner position-relative">
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative text-<?php echo esc_attr( $banner_text_align ); ?>">
			<h2><?php echo esc_html($banner_title);?></h2>
			<?php echo clinox_the_breadcrumb(); ?>
		</div>
	</div>
</section>
<?php endif; ?>


<?php


if ( is_active_sidebar( 'sidebar-1' ) ) {
    $main = 'col-md-8'; 
    $sidebar = 'col-md-4';
} else {
    $main = 'col-md-12';
    $sidebar = 'col-md-12';
}

?> 

    <section id="clenix-blog-feed" class="clenix-blog-feed-section page-section-padding">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_attr($main);?>">
					<div class="clenix-blog-feed-content">

                    	<?php if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content');
							endwhile;				
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>

					</div>
					<?php clinox_pagination();?>

				</div>
				<div class="<?php echo esc_attr($sidebar);?>"> 
					<div class="clenix-blog-sidebar  top-sticky-sidebar">
						<?php get_template_part( 'layouts/sidebar', 'left' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	

<?php get_footer();?>
