<?php
    $link1 = $link2 = $btns = $socials = '';
	foreach ($settings['links1'] as $a) {
	    $link1 .= '
			<li><a '.get_that_link($a['link']).'>'.$a['label'].'</a></li>
		';
	}

	foreach ($settings['links2'] as $a) {
	    $link2 .= '
			<li><a '.get_that_link($a['link']).'>'.$a['label'].'</a></li>
		';
	}

	foreach ($settings['btns'] as $a) {
	    $btns.= '
			<a '.get_that_link($a['link']).'>'.wp_get_attachment_image($a['img']['id'], 'full').'</a>
		';
	}
	foreach ($settings['socials'] as $a) {
	    $socials.= '
			<a '.get_that_link($a['link']).'><i class="'.$a['icon']['value'].'"></i></a>
		';
	}
?>

<footer id="clenix-footer-1" class="clenix-footer-section-1"> 
	<div class="container">
		<div class="clenix-footer-widget-wrapper">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="clenix-footer-widget headline pera-content ul-li-block">
						<div class="logo-widget">
							<div class="footer-logo">
								<a href="<?php echo home_url('/');?>"><?php echo wp_get_attachment_image($settings['img']['id'], 'full');?></a>
							</div>
							<p><?php echo $settings['desc'];?></p>
							<div class="footer-app-btn">
								<?php echo $btns;?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="clenix-footer-widget headline pera-content ul-li-block">
						<div class="menu-widget">
							<h3 class="widget-title"><?php echo $settings['l1label'];?></h3>
							<ul>
								<?php echo $link1;?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3">
					<div class="clenix-footer-widget headline pera-content ul-li-block">
						<div class="menu-widget">
							<h3 class="widget-title"><?php echo $settings['l2label'];?></h3>
							<ul>
								<?php echo $link2;?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="clenix-footer-widget headline pera-content ul-li-block">
						<div class="newsleter-widget">
							<h3 class="widget-title"><?php echo $settings['l3label'];?></h3>
							<div class="newsleter-form">
								<?php echo do_shortcode($settings['shortcode']);?>
							</div>
							<div class="footer-social ul-li">
								<?php echo $socials;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clenix-copyright-wrap text-center">
			<?php echo $settings['copy'];?>
		</div>
	</div>
</footer>