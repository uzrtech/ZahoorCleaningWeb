
<?php 
$show_header_top = clinox_option('show_header_top');
$header_top_info2 = clinox_option('header_top_info_2');
$cta_btn_text2 = clinox_option('header_cta_btn_text2');
$cta_btn_url2 = clinox_option('header_cta_btn_url2');
$enable_header_cart = clinox_option('enable_header_cart');
$enable_header_search = clinox_option('enable_header_search');
$site_mobile_logo_white = clinox_option('mobile_logo_white');
?>

<?php if($show_header_top == true): ?>
<div class="clenix-header-logo-cta">
    <div class="container">
        <div class="clenix-header-logo-cta-content d-flex">
            <div class="brand-logo">
                <?php get_template_part('template-parts/header/header-logo') ?>
            </div>

            <?php if(is_array($header_top_info2)) : ?>
            <div class="header-cta-wrapper d-flex justify-content-between">
                <?php foreach($header_top_info2 as $top_info): ?>
                <div class="header-info-item d-flex align-items-center position-relative">
                    <?php if(!empty($top_info['top_info_icon']['url'])): ?>
                    <div class="hd-item-icon">
                        <img src="<?php echo $top_info['top_info_icon']['url']; ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="hd-item-meta">
                        <label> <?php echo esc_html($top_info['info_title']); ?></label>
                        <span><?php echo esc_html($top_info['text_info']); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php endif; ?>

<div class="header-navigation-content-wrapper">
    <div class="container">
        <div class="header-navigation-content align-items-center d-flex justify-content-between">
            <div class="sticky-brand-logo">
                <?php get_template_part( 'template-parts/header/header-logo' );?>
            </div>
            <div class="mobile-brand-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url($site_mobile_logo_white['url']); ?>" alt="<?php echo esc_attr( get_post_meta( $site_mobile_logo_white['id'], '_wp_attachment_image_alt', true )); ?>">
                </a>
            </div>
            
            <div class="navbar-expand-lg">
                <?php get_template_part( 'template-parts/header/header-menu' );?>
            </div>

            <div class="header-cart-btn-search align-items-center d-flex">
                <?php if($enable_header_search == true): ?>
                <div class="h-search">
                    <button class="search-box-outer"><i class="fas fa-search"></i></button>
                </div>
                <?php endif; ?>


                <?php if($enable_header_cart == true && class_exists( 'woocommerce' )): ?>
                <div class="h-cart-btn d-flex justify-content-center align-items-center">
                    <a href="<?php echo wc_get_cart_url() ?>"><i class="fas fa-shopping-bag"></i></a>
                </div>
                <?php endif; ?>

                <?php if(!empty($cta_btn_text2)): ?>
                <div class="h-cta-btn">
                    <a class="d-flex justify-content-center align-items-center" href="<?php echo esc_url($cta_btn_url2); ?>"><?php echo esc_html($cta_btn_text2); ?></a>
                </div>
                <?php endif; ?>

                <div class="header__bar hamburger_menu">
                    <a href="#!"><i class="far fa-bars"></i></a>
                </div>
            </div>   
        </div>
    </div>
</div>

