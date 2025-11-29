<?php
	$minfo = '';

	foreach ($settings['itms'] as $a) {
	    $minfo.= '
			<div class="counter__item">
				<h3>'.$a['pre'].'</h3>
				<p>'.$a['ttl'].'</p>
				<img src="'.plugins_url('world.png', __FILE__ ).'" alt="">
			</div>	
		';
	}

?>

<div class="about">
	<div class="container">
		<div class="row align-items-center mt-none-30">
			<div class="col-lg-6 mt-30">
				<div class="about__img mr-65 pos-rel">
					<img class="wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['thmb']['url'];?>" alt="">
					<div class="about__cta ul_li wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<img src="<?php echo plugins_url('call.svg', __FILE__ );?>" alt="">
						<?php echo $settings['cta'];?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-30">
				<div class="about__content">
					<div class="sec-title sec-title__two mb-35">
						<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
						<h2 class="title mb-25 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<?php echo $settings['ttl'];?>
						</h2>
						<p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms"><?php echo $settings['desc'];?></p>
					</div>
					<ul class="about__list list-unstyled mb-40 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1500ms">
					<?php echo $settings['info'];?>
					</ul>
					<div class="counter__wrap ul_li_between mb-40 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1500ms">
						<?php echo $minfo;?>
					</div>
					<div class="about__text wow fadeInUp" data-wow-delay="1s" data-wow-duration="1500ms"><img src="<?php echo plugins_url('fire.png', __FILE__ );?>" alt="">We provide fast <span>on-cleaning</span> services.</div>
				</div>
			</div>
		</div>
	</div>
</div>