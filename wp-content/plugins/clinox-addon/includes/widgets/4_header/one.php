<?php
	$social = $topinfo = $minfo = '';

	foreach ($settings['social'] as $a) {
	    $social.= '
			<a '.get_that_link($a['link']).'><i class="'.$a['icon']['value'].'"></i></a>
		';
	}
	foreach ($settings['iconbox'] as $a) {
	    $topinfo.= '
			<li><i class="'.$a['icon']['value'].'"></i> '.$a['txt'].'</li>
		';
	}

	foreach ($settings['minfos'] as $a) {
	    $minfo.= '
			<li>
				<span><i class="'.$a['icon']['value'].'"></i></span>
				<p>'.$a['label'].'</p>
			</li>
		';
	}

?>

<!-- header start --> 
<header class="header">
	<div class="header__top-wrap">
		<div class="container">
			<div class="header__top ul_li_between mt-none-15">
				<div class="header__social mt-15">
					<?php echo $social;?>
				</div>
				<ul class="header__info ul_li mt-15">
					<?php echo $topinfo;?>
					<?php if ($settings['lang']) { ?>
						<li>
							<div class="header__language">
								<ul>
									<li><a href="#!" class="lang-btn"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'usd_flag.png'; ?>" alt=""> English <i class="fa fa-chevron-down"></i></a>
										<?php
											echo str_replace('menu-item-has-children', 'menu-item-has-children', wp_nav_menu( [
												'echo' => false,
												'menu' => $settings['lang'],
												'items_wrap' => '<ul class="lang_sub_list">%3$s</ul>' 
											] )
											);
										?>								
									</li>
								</ul>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div> 
	<div class="header__main-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
		<div class="container">
			<div class="header__main ul_li_between">
				<div class="header__main-left ul_li flex-1">
					<div class="header__bar hamburger_menu">
						<a href="#!"><img src="<?php echo $settings['tap']['url']; ?>" alt=""></a>
					</div>
					<div class="header__logo ml-50">
					<a href="<?php echo home_url('/');?>"><img src="<?php echo $settings['img']['url']; ?>" alt=""></a>
					</div>
				</div>
				<div class="main-menu navbar navbar-expand-lg">
					<nav class="main-menu__nav collapse navbar-collapse">
						<?php
							echo str_replace('menu-item-has-children', 'menu-item-has-children', wp_nav_menu( array(
								'echo' => false,
								'menu' => $settings['menu'],
								'items_wrap' => '<ul>%3$s</ul>' 
								) )
							);
						?>						
                    </nav>
                </div>
				<div class="header__main-right ul_li">
					<?php if ($settings['phone']) { ?>
						<div class="header__cta ul_li">
							<div class="icon">
								<img src="<?php echo plugin_dir_url( __FILE__ ) . 'call.svg'; ?>" alt="">
							</div>
							<div class="content">
								<span><?php echo $settings['phonelbl'];?></span>
								<a href="tel:<?php echo $settings['phone'];?>"><?php echo $settings['phone'];?></a>
							</div>
						</div>
					<?php } ?>
					<div class="header__btn ml-40">
						<a class="thm-btn thm-btn--transparent br-0" href="<?php echo $settings['btnurl']['url'];?>">
							<span class="btn-wrap">
								<span><?php echo $settings['btnlabel'];?></span>
								<span><?php echo $settings['btnlabel'];?></span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header end -->

 <!-- slide bar start -->
 <aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="sidebar-info">
        <div class="sidebar-logo mb-30">
			<a href="<?php echo home_url('/');?>"><img src="<?php echo $settings['img']['url']; ?>" alt=""></a>
        </div>
        <div class="sidebar-content mb-45">
            <h4 class="s-title"><?php echo $settings['abt_ti'];?></h4>
            <?php echo $settings['abt_co'];?>
        </div>
        <div class="contact_list mb-30">
            <h4 class="s-title">Contact us</h4>
            <ul class="sidebar-info-list">
                <?php echo $minfo;?>
            </ul>
        </div>
        <div class="sidebar-social mt-20">
            <?php echo $social;?>
        </div>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
		<?php
			echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
				'echo' => false,
				'menu' => $settings['menu'],
				'items_wrap' => '<ul id="mobile-menu-active">%3$s</ul>' 
				) )
			);
		?>	
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide bar end -->
