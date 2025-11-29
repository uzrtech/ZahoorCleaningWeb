
<?php 
$sidebar_logo = clinox_option('sidebar_logo');
$sidebar_title = clinox_option('sidebar_title');
$sidebar_content = clinox_option('sidebar_content');
$sidebar_btn_text = clinox_option('sidebar_btn_text');
$sidebar_btn_url = clinox_option('sidebar_btn_url');
$sidebar_contact_title = clinox_option('sidebar_contact_title');
$sidebar_contact_info = clinox_option('sidebar_contact_info');
$sidebar_socials = clinox_option('sidebar_socials');
?>

<!-- slide bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="far fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="sidebar-info">
        <div class="sidebar-logo mb-30">
            <a href="index.html">
                <img src="<?php echo esc_url($sidebar_logo['url']); ?>" alt="logo">
            </a>
        </div>
        <div class="sidebar-content mb-45">
            <?php if(!empty($sidebar_title)): ?>
            <h4 class="s-title"><?php echo esc_html($sidebar_title); ?></h4>
            <?php endif; ?>

            <?php if(!empty($sidebar_content)): ?>
            <p><?php echo esc_html($sidebar_content); ?></p>
            <?php endif; ?>


            <?php if(!empty($sidebar_btn_text)): ?>
            <div class="sidebar__btn">
                <a class="thm-btn br-0" href="<?php echo esc_url($sidebar_btn_url);?>">
                    <span class="btn-wrap">
                        <span><?php echo esc_html($sidebar_btn_text);?></span>
                        <span><?php echo esc_html($sidebar_btn_text);?></span>
                    </span>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <div class="contact_list mb-30">
            <?php if(!empty($sidebar_contact_title)): ?>
            <h4 class="s-title"><?php echo esc_html($sidebar_contact_title); ?></h4>
            <?php endif; ?>

            <?php if(is_array($sidebar_contact_info)) : ?>
            <ul class="sidebar-info-list">
                <?php foreach ($sidebar_contact_info as $top_info) : ?>
                    <li>
                        <i class="<?php echo esc_attr($top_info['info_icon']);?>"></i>
                        <?php echo wp_kses_post($top_info['info_text']);?>
                    </li>
                <?php endforeach;?>
            </ul>
            <?php endif; ?>
        </div>


        <div class="sidebar-social mt-20">
            <?php if(is_array($sidebar_socials)) :
                foreach ($sidebar_socials as $socialSite) : ?>
                    <a href="<?php echo esc_url($socialSite['profile_url']);?>">
                        <i class="<?php echo esc_attr($socialSite['icon']);?>"></i>
                    </a>
                <?php endforeach;
            endif; ?>
            
        </div>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="<?php print esc_url( home_url( '/' ) );?>">
                <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr( 'Search Keywords', 'clinox' );?>">
                <button type="submit"><i class="far fa-search"></i></button>
            </form>
            
        </div>
        <?php
        echo str_replace(['menu-item-has-children', 'submenu'], ['dropdown', 'sub-menu'], wp_nav_menu( [
            'echo' => false,
            'theme_location' => 'main-menu',
            'menu_id'     => 'mobile-menu-active',
            'container'      => '',
            'fallback_cb'    => 'Clinox_Navwalker_Class::fallback',
            'walker'         => new Clinox_Navwalker_Class,
        ] ));
        ?>

        
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide bar end -->