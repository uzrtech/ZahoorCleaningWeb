
<header id="clenix-header-2d" class="clenix-header-section header-style-two">
	<div class="clenix-header-content-2">
		<div class="clenix-header-main-menu-2 d-flex justify-content-between align-items-center">
			<div class="brand-logo">
			<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
			</div>
			<div class="main-menu navbar navbar-expand-lg">
				<nav class="main-menu__nav collapse navbar-collapse">
					<?php
						echo str_replace('menu-item-has-children', 'dropdown', wp_nav_menu( array(
							'echo' => false,
							'menu' => $settings['menu'],
							'items_wrap' => '<ul id="main-nav ul_li" class="nav clearfix">%3$s</ul>' 
							) )
						);
					?>
				</nav>
				<div class="header-cta-btn align-items-center d-flex">
					<div class="cta-number"><a href="tel:<?php echo $settings['phone'];?>"><?php echo $settings['phone'];?></a></div>
					<div class="cta-btn">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btnurl']);?> ><?php echo $settings['btnlabel'];?></a>
					</div>
				</div>
			</div>
			<div class="header__bar hamburger_menu">
				<a href="#!"><i class="fas fa-bars"></i></a>
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
