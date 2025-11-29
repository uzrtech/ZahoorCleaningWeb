
<?php 
$header_cta_number = clinox_option('header_cta_number');
$cta_btn_text2 = clinox_option('header_cta_btn_text2');
$cta_btn_url2 = clinox_option('header_cta_btn_url2');

?>

<div class="clenix-header-content-2">
    <div class="clenix-header-main-menu-2 d-flex justify-content-between align-items-center">
        <div class="brand-logo">
        <?php get_template_part('template-parts/header/header-logo'); ?>
        </div>

        <div class="main-menu navbar navbar-expand-lg">
        <?php get_template_part( 'template-parts/header/header-menu' );?>
            
            <div class="header-cta-btn align-items-center d-flex">
                <div class="cta-number"><a href="tel:<?php echo esc_html($header_cta_number); ?>"><?php echo esc_html($header_cta_number); ?></a></div>
                <?php if(!empty($cta_btn_text2)): ?>
                <div class="cta-btn">
                    <a class="d-flex justify-content-center align-items-center" href="<?php echo esc_url($cta_btn_url2); ?>"><?php echo esc_html($cta_btn_text2); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="header__bar hamburger_menu">
            <a href="#!"><i class="far fa-bars"></i></a>
        </div>
    </div>
</div>