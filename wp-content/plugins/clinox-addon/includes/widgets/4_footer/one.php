<?php
    $link1 = $link2 = $link3 = $insta = $socials = $foots = '';
	foreach ($settings['icon'] as $a) {
	    $link1 .= '
			<li><i class="'.$a['icon']['value'].'"></i>'.$a['txt'].'</li>
		';
	}

	foreach ($settings['links1'] as $a) {
	    $link2 .= '
			<li><a '.get_that_link($a['link']).'>'.$a['txt'].'</a></li>
		';
	}

	foreach ($settings['links3'] as $a) {
	    $link3 .= '
			<li><a '.get_that_link($a['link']).'>'.$a['txt'].'</a></li>
		';
	}

	foreach ($settings['links4'] as $a) {
	    $foots .= '
			<li><a '.get_that_link($a['link']).'>'.$a['txt'].'</a></li>
		';
	}

	foreach ($settings['insta'] as $a) {
	    $insta.= '
			<a class="thumb" href="'.$a['url'].'"><img src="'.$a['url'].'" alt=""></a>
		';
	}
?>
 
<footer class="footer pt-60" data-background="<?php echo plugins_url( 'footer-noise.png', __FILE__ );?>">
	<div class="container mxw_1350">
		<div class="footer__subscribe-wrap ul_li_between pb-50">
			<div class="footer__subscribe-text">
				<?php echo $settings['substxt'];?>
			</div>
			<?php echo do_shortcode($settings['shortcode']);?>
		</div>
		<div class="row pt-45 pb-65">
			<div class="col-lg-3 col-md-6 footer__col mt-30">
				<div class="footer__widget">
					<?php echo $settings['fdes'];?>
					<ul class="footer__info list-unstyled mt-35">
						<?php echo $link1;?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 footer__col mt-30">
				<div class="footer__widget">
					<h3><?php echo $settings['l2label'];?></h3>
					<ul class="footer__links list-unstyled">
						<?php echo $link2;?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 footer__col mt-30">
				<div class="footer__widget">
					<h3><?php echo $settings['l3label'];?></h3>
					<ul class="footer__links list-unstyled">
						<?php echo $link3;?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 footer__col mt-30">
				<div class="footer__widget">
					<h3><?php echo $settings['l4label'];?></h3>
					<div class="footer__awards">
						<?php echo $settings['l4d'];?>
					</div>
					<div class="footer__instagram d-flex">
						<?php echo $insta;?>
					</div>
					<h4 class="f-text mt-35">
						<img src="<?php echo plugins_url( 'fire.png', __FILE__ );?>" alt="">
						<?php echo $settings['l4d2'];?>
					</h4>
				</div>
			</div>
		</div>
		<div class="footer__bottom ul_li_between pt-15 pb-30">
			<div class="footer__copyright mt-15">
				<?php echo $settings['cpy'];?>
			</div>
			<ul class="footer__nav ul_li mt-15">
				<?php echo  $foots;?>
			</ul>
		</div>
	</div>
</footer>
<style>
.footer.pt-60 .wpcf7 {
    max-width: 514px;
    width: 100%;
}	
</style>