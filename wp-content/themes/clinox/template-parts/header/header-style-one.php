<?php
$show_header_top = clinox_option('show_header_top');
$header_top_info = clinox_option('header_top_info');
$top_social = clinox_option('header_top_socials');
$cta_title = clinox_option('header_cta_title');
$cta_number = clinox_option('header_cta_number');
$cta_btn_text = clinox_option('header_cta_btn_text');
$cta_btn_url = clinox_option('header_cta_btn_url');
?>

<?php if($show_header_top == true): ?>
<div class="header__top-wrap">
    <div class="container mxw_1700">
        <div class="header__top ul_li_between mt-none-15">
            <div class="header__social mt-15">
                <?php if(is_array($top_social)) :
                    foreach ($top_social as $socialSite) : ?>
                       <a href="<?php echo esc_url($socialSite['profile_url']);?>">
                            <i class="<?php echo esc_attr($socialSite['icon']);?>"></i>
                        </a>
                    <?php endforeach;
                endif; ?>
                
                
            </div>

            <div class="header__top-rgiht ul_li">
                <?php if(is_array($header_top_info)) : ?>
                    <ul class="header__info ul_li mt-15">
                        <?php foreach ($header_top_info as $top_info) : ?>
                            <li>
                                <i class="<?php echo esc_attr($top_info['info_icon']);?>"></i>
                                <?php echo wp_kses_post($top_info['info_text']);?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif; ?>
                
                
                <div class="header__language mt-15">
                    <ul>
                        <li><a href="#!" class="lang-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flag.png" alt=""> English <i class="far fa-chevron-down"></i></a>
                            <ul class="lang_sub_list">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Bangla</a></li> 
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="header__main-wrap">
    <div class="container mxw_1700">
        <div class="header__main ul_li_between">
            <div class="header__main-left ul_li">
                <div class="header__bar hamburger_menu">
                    <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bar-2.svg" alt=""></a>
                </div>
                <div class="header__logo ml-50">
                    <?php get_template_part( 'template-parts/header/header-logo' ); ?>
                </div>
            </div>
            <div class="main-menu navbar navbar-expand-lg">
            <?php get_template_part( 'template-parts/header/header-menu' );?>
            </div>
            <div class="header__main-right ul_li">

                <div class="header__cta ul_li">

                    <?php if(!empty($cta_title && $cta_number)): ?>
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/call.svg" alt="">
                    </div>
                    <?php endif ?>

                    <div class="content">
                        <?php if(!empty($cta_title)): ?>
                        <span><?php echo esc_html($cta_title); ?></span>
                        <?php endif; ?>

                        <?php if(!empty($cta_number)): ?>
                        <a href="tel::<?php echo esc_attr($cta_number); ?>"><?php echo esc_html($cta_number); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            

                <?php if(!empty($cta_btn_text)): ?>
                <div class="header__btn ml-40">
                    <a class="thm-btn thm-btn--transparent" href="<?php echo esc_url($cta_btn_url);?>">
                        <span class="btn-wrap">
                            <span><?php echo esc_html($cta_btn_text);?></span>
                            <span><?php echo esc_html($cta_btn_text);?></span>
                        </span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
