
<?php 
$show_header_top = clinox_option('show_header_top');
$header_top_info = clinox_option('header_top_info');
$header_top_info3 = clinox_option('header_top_info_3');
$top_social = clinox_option('header_top_socials');
$cta_btn_text2 = clinox_option('header_cta_btn_text2');
$cta_btn_url2 = clinox_option('header_cta_btn_url2');
$enable_header_cart = clinox_option('enable_header_cart');
$enable_header_search = clinox_option('enable_header_search');
$cta_btn_text3 = clinox_option('header_cta_btn_text3');
$cta_btn_url3 = clinox_option('header_cta_btn_url3');
$site_mobile_logo_white = clinox_option('mobile_logo_white');
?>

<?php if($show_header_top == true): ?>
<div class="clenix-header-top-wrap">
    <div class="container">
        <div class="clenix-header-top-content d-flex align-items-center justify-content-between">
            <div class="top-info ul-li">
                <?php if(is_array($header_top_info)) : ?>
                    <ul>
                        <?php foreach ($header_top_info as $top_info) : ?>
                            <li>
                                <i class="<?php echo esc_attr($top_info['info_icon']);?>"></i>
                                <?php echo wp_kses_post($top_info['info_text']);?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="top-social-btn d-flex align-items-center">
                <?php if(is_array($top_social)) : ?>
                <div class="top-social ul-li">
                    <ul>
                        <?php foreach ($top_social as $socialSite) : ?>
                            <li>
                                <a href="<?php echo esc_url($socialSite['profile_url']);?>">
                                    <i class="<?php echo esc_attr($socialSite['icon']);?>"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif ?>

                <?php if(!empty($cta_btn_text3)): ?>
                <div class="top-btn">
                    <a class="d-flex justify-content-center align-items-center" href="<?php echo esc_url($cta_btn_url3); ?>"><?php echo esc_html($cta_btn_text3); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>		
</div>
<?php endif; ?>

<div class="clenix-header-logo-cta">
    <div class="container">
        <div class="clenix-header-logo-cta-content d-flex">
            <div class="brand-logo">
                <?php get_template_part('template-parts/header/header-logo'); ?>
            </div>
            <div class="header-cta-wrapper d-flex justify-content-between">
                <?php foreach($header_top_info3 as $top_info): ?>
                <div class="header-info-item d-flex align-items-center position-relative">
                    <?php if(!empty($top_info['top_info_icon2']['url'])): ?>
                    <div class="hd-item-icon">
                        <img src="<?php echo $top_info['top_info_icon2']['url']; ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="hd-item-meta">
                        <label> <?php echo esc_html($top_info['info_title2']); ?></label>
                        <span><?php echo esc_html($top_info['text_info2']); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="header-navigation-content-wrapper">
    <div class="container">
        <div class="header-navigation-content align-items-center d-flex justify-content-between">
            <div class="sticky-brand-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url($site_mobile_logo_white['url']); ?>" alt="<?php echo esc_attr( get_post_meta( $site_mobile_logo_white['id'], '_wp_attachment_image_alt', true )); ?>">
                </a>
            </div>
            <div class="navbar-expand-lg">
                <?php get_template_part( 'template-parts/header/header-menu' );?>
            </div>
            <div class="header-cart-btn-search align-items-center d-flex">
                <?php if($enable_header_search == true ) : ?>
                <div class="h-search">
                    <button class="search-box-outer"><i class="far fa-search"></i></button>
                </div>
                <?php endif; ?>
                <div class="header__bar hamburger_menu">
                    <a href="#!"><i class="far fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div> 
</div>