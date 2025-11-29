<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cliox
 */

get_header();

$archive_banner = clinox_option('archive_banner', true);
$search_layout = clinox_option('search_layout', 'right-sidebar');
$banner_text_align = clinox_option('banner_default_text_align', 'center');


if ( is_active_sidebar( 'sidebar-1' ) ) {
    $main = 'col-md-8'; 
    $sidebar = 'col-md-4';
} else {
    $main = 'col-md-12';
    $sidebar = 'col-md-12';
}
?>


<?php if($archive_banner == true) : ?>
<section id="clenix-breadcrumb" class="clenix-breadcrumb-section archive-banner position-relative">
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative text-<?php echo esc_attr( $banner_text_align ); ?>">
            <h2 class="banner-title">
            <?php
                the_archive_title( '<h2 class="banner-title">', '</h2>' );
                ?>
            </h2>
			<?php echo clinox_the_breadcrumb(); ?>	
		</div>
	</div>
</section>
<?php endif; ?>


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

<?php
get_footer();
