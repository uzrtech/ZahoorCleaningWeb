<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package clinox
 */

get_header();

$error_banner      = clinox_option('error_banner', true);
$error_banner_title = clinox_option('error_page_title');
$banner_text_align = clinox_option('banner_default_text_align', 'center');
$not_found_text     = clinox_option('not_found_text');
$go_back_home       = clinox_option('go_back_home', true);

?>

<?php if($error_banner == true) : ?>
<section id="clenix-breadcrumb" class="clenix-breadcrumb-section error-page-banner position-relative">
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative text-<?php echo esc_attr( $banner_text_align ); ?>">
            <h2 class="banner-title">
                <?php echo esc_html($error_banner_title); ?>
            </h2>
			<?php echo clinox_the_breadcrumb(); ?>	
		</div>
	</div>
</section>
<?php endif; ?>


    <div id="primary" class="content-area">
        <div class="container not-found-content">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contant-wrapper text-center">
                        <div class="text-404">
                            <h2><?php echo esc_html__('404', 'clinox') ?></h2>
                        </div>
                        <div class="not-found-text-wrapper">
                            <?php
                            echo wp_kses( $not_found_text, array(
                                'a'      => array(
                                    'href'   => array(),
                                    'target' => array()
                                ),
                                'strong' => array(),
                                'small'  => array(),
                                'span'   => array(),
                                'p'   => array(),
                                'h1'   => array(),
                                'h2'   => array(),
                                'h3'   => array(),
                                'h4'   => array(),
                                'h5'   => array(),
                                'h6'   => array(),
                            ) );
                            ?>

                            <?php if ($go_back_home == true) : ?>
								<a class="thm-btn br-0" href="<?php echo esc_url(home_url('/')); ?>">
									<span class="btn-wrap">
										<span><?php echo esc_html__('Go Back Home', 'clinox'); ?></span>
										<span><?php echo esc_html__('Go Back Home', 'clinox'); ?></span>
									</span>
								</a>
                            <?php endif; ?>
							
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php
get_footer();



