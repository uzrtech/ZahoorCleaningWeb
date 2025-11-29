<?php
	$nav_iconbox = $social = $topinfo = '';
	foreach ($settings['infos'] as $a) {
	    $nav_iconbox .= '
			<div class="header-info-item d-flex align-items-center position-relative">
				<div class="hd-item-icon">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
				<div class="hd-item-meta">
					<label>'.$a['label'].'</label>
					<span>'.$a['desc'].'</span>
				</div>
			</div>
		';
	}

	foreach ($settings['social'] as $a) {
	    $social.= '
			<li><a '.get_that_link($a['link']).'><i class="'.$a['icon']['value'].'"></i></a></li>
		';
	}
	foreach ($settings['iconbox'] as $a) {
	    $topinfo.= '
			<li><i class="'.$a['icon']['value'].'"></i> '.$a['txt'].'</li>
		';
	}
?>

<header id="clenix-header" class="clenix-header-section header-style-one">
	<div class="clenix-header-top-wrap">
		<div class="container">
			<div class="clenix-header-top-content d-flex align-items-center justify-content-between">
				<div class="top-info ul-li">
					<ul>
						<?php echo $topinfo;?>
					</ul>
				</div>
				<div class="top-social-btn d-flex align-items-center">
					<div class="top-social ul-li">
						<ul>
							<?php echo $social;?>
						</ul>
					</div>
					<div class="top-btn">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btnurl']);?> ><?php echo $settings['btnlabel'];?></a>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="clenix-header-logo-cta">
		<div class="container">
			<div class="clenix-header-logo-cta-content d-flex">
				<div class="brand-logo">
					<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
				</div>
				<div class="header-cta-wrapper d-flex justify-content-between">
					<?php echo $nav_iconbox;?>
				</div>
			</div>
		</div>
	</div>
	<div class="header-navigation-content-wrapper">
		<div class="container">
			<div class="header-navigation-content align-items-center d-flex justify-content-between">
				<div class="sticky-brand-logo">
				<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img-sticky']['id'], 'full');?></a>
				</div>
				<nav class="main-menu__nav clearfix ul-li">
				<?php
					echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
						'echo' => false,
						'menu' => $settings['menu'],
						'items_wrap' => '<ul id="main-nav" class="nav navbar-nav clearfix">%3$s</ul>' 
						) )
					);
                ?>					
				</nav>
				<div class="header-cart-btn-search align-items-center d-flex">
					<div class="h-search">
						<button class="search-box-outer"><i class="fal fa-search"></i></button>
					</div>
					<div class="header__bar hamburger_menu">
						<a href="#!"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
		</div> 
	</div>
</header>

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
 
<div class="search-popup">
	<button class="close-search style-two"><span class="fal fa-times"></span></button>
	<button class="close-search"><span class="fa fa-arrow-up"></span></button>
	<form method="post" action="<?php echo home_url( '/' );?>">
		<div class="form-group">
			<input type="search" name="search-field" value="" name="s" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
