<?php
$cta_btn_text = clinox_option('header_cta_btn_text');
$cta_btn_url = clinox_option('header_cta_btn_url');
?>

<div class="header-cta-button">
    <a class="site-btn" href="<?php echo esc_url($cta_btn_url);?>"><?php echo esc_html($cta_btn_text);?></a>
</div>

