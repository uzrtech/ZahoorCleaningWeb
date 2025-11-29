
<header id="clenix-header-2" class="clenix-header-section header-style-two">
	<div class="clenix-header-content-2">
		<div class="clenix-header-main-menu-2 d-flex justify-content-between align-items-center">
			<div class="brand-logo">
			<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
			</div>
			<div class="header-navigation-content-wrapper d-flex align-items-center">
				<nav class="main-navigation clearfix ul-li">
					<?php
						echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
							'echo' => false,
							'menu' => $settings['menu'],
							'items_wrap' => '<ul id="main-nav" class="nav navbar-nav clearfix">%3$s</ul>' 
							) )
						);
					?>
				</nav>
				<div class="header-cta-btn align-items-center d-flex">
					<div class="cta-number"><a href="+tel:<?php echo $settings['btnlabel'];?>"><?php echo $settings['phone'];?></a></div>
					<div class="cta-btn">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btnurl']);?> ><?php echo $settings['btnlabel'];?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile_menu">
			<div class="mobile_menu_button open_mobile_menu">
				<i class="fas fa-bars"></i>
			</div>
			<div class="mobile_menu_wrap">
				<div class="mobile_menu_overlay open_mobile_menu"></div>
				<div class="mobile_menu_content">
					<div class="mobile_menu_close open_mobile_menu">
						<i class="fas fa-times"></i>
					</div>
					<div class="m-brand-logo">
						<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
					</div>
					<nav class="mobile-main-navigation  clearfix ul-li">
						<?php
							echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
								'echo' => false,
								'menu' => $settings['menu'],
								'items_wrap' => '<ul id="main-nav" class="nav navbar-nav clearfix">%3$s</ul>' 
								) )
							);
						?>
					</nav>
				</div>
			</div>
			<!-- /Mobile-Menu -->
		</div>
	</div>
</header>

 
