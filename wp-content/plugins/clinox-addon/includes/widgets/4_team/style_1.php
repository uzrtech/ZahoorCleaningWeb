<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '

			<div class="col-lg-3 col-md-6">
				<div class="team__item">
					<div class="team__img">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="team__info">
						<span class="team__desig">'.$a['pos'].'</span>
						<h3 class="team__name"><a '.get_that_link($a['url']).'>'.$a['name'].'</a></h3>
						<div class="team__info-shape">
							<img class="shape1" src="'.plugins_url( 't_shape1.png', __FILE__ ).'" alt="">
							<img class="shape2" src="'.plugins_url( 't_shape2.png', __FILE__ ).'" alt="">
						</div>
					</div> 
					<div class="team__social-wrap">
						<span class="plus-icon"><i class="fal fa-plus"></i></span>
						<ul class="team__social">
							<li><a href="'.$a['fb'].'"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="'.$a['tw'].'"><i class="fab fa-twitter"></i></a></li>
							<li><a href="'.$a['lk'].'"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="'.$a['yt'].'"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		';
	}

?>

<div class="team pt-240 pb-120" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="row align-items-end mb-15">
			<div class="col-lg-6">
				<div class="sec-title mb-30">
					<span class="subtitle"><?php echo $settings['pre'];?></span>
					<h2 class="title"><?php echo $settings['ttl'];?></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="services-btn mb-30 text-lg-end">
					<a class="thm-btn thm-btn__icon" href="<?php echo $settings['url']['url'];?>">
						<span class="btn-wrap">
							<span><?php echo $settings['btn'];?></span>
							<span><?php echo $settings['btn'];?></span>
						</span>
						<i class="flaticon-right-arrow"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="team__wrap">
			<div class="row g-0">
				<?php echo $minfo;?>
			</div>
		</div>
	</div>
</div>
