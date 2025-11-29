<?php
	$nav_iconbox = '';
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
?> 

<header id="clenix-header" class="clenix-header-section  header-style-three">
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
					<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
				</div>
				<div class="mobile-brand-logo">
					<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['logo_mobile']['id'], 'full');?></a>
				</div>
				
				<div class="navbar-expand-lg">
					<nav class="main-menu__nav collapse navbar-collapse">
						<?php
							echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
								'echo' => false,
								'menu' => $settings['menu'],
								'items_wrap' => '<ul id="main-nav" class="nav clearfix">%3$s</ul>' 
								) )
							);
						?>
					</nav>
				</div>
				<div class="header-cart-btn-search align-items-center d-flex">
					<div class="h-search">
						<button class="search-box-outer"><i class="fas fa-search"></i></button>
					</div>
					<?php if ( class_exists( 'WooCommerce' ) ) {?>
						<div class="h-cart-btn d-flex justify-content-center align-items-center">
							<button class="or-canvas-cart-trigger"><i class="fas fa-shopping-bag"></i></button>
						</div>
					<?php }?>
					<div class="h-cta-btn">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btnurl']);?> ><?php echo $settings['btnlabel'];?></a>
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
