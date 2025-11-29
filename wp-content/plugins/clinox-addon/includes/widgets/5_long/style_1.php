<?php
	$minfo = $services = $abts = '';

	foreach ($settings['services'] as $a) {
	    $minfo.= '
			<div class="service__item">
				<div class="service__icon">
					<i class="'.$a['icon']['value'].'"></i>
				</div>
				'.$a['txt'].'
			</div>
		';
	}

	foreach ($settings['process'] as $a) {
	    $services.= '
			<div class="process__item ul_li">
				<div class="process__icon">
					<div class="icon">
						<i class="'.$a['icon']['value'].'"></i>
					</div>
					<span class="number">'.$a['num'].'</span>
				</div>
				<h3>'.$a['txt'].'</h3>
			</div>
		';
	}

	foreach ($settings['abts'] as $a) {
	    $abts.= '
			<div class="tab-info__item tab-info__item-two d-flex wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
				<div class="icon">
					<i class="'.$a['icon']['value'].'"></i>
					<img src="'.plugins_url('a_shape.svg', __FILE__ ).'" alt="">
				</div>
				<div class="content">
				'.$a['txt'].'
				</div>
			</div>
		';
	}

?>

<div class="clemfox__bg">
	<!-- services start -->
	<div class="service pt-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sec-title sec-title__two mb-55">
						<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
						<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<?php echo $settings['ttl'];?>
						</h2>
					</div>
				</div>
			</div>
			<div class="service__slide">
				<?php echo $minfo;?>
			</div>
		</div>
	</div>
	<!-- services end -->

	<!-- marquee start -->
	<div class="wm-marquee pt-40 pb-55">
		<div class="text-marquee-track">
			<div class="text-marquee-content"><?php echo $settings['mrque'];?></div>
		</div>
	</div>
	<!-- marquee end -->

	<!-- process start -->
	<div class="process">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="sec-title sec-title__two text-center mb-45">
						<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['propre'];?></span>
						<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
							<?php echo $settings['prottl'];?>
						</h2>
					</div>
				</div>
			</div>
			<div class="process__wrap ul_li_between wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms">
				<?php echo $services;?>
			</div>
		</div>
	</div>
	<!-- process end -->

	<!-- about start -->
	<div class="about about__bg-two pt-45 pb-45">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="sec-title sec-title__two mb-50">
						<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['abtpre'];?></span>
						<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<?php echo $settings['abtttl'];?>
						</h2>
					</div>
					<div class="tab-info__wrap">

						<?php echo $abts;?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about__image">
						<img class="img1 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo $settings['img1']['url'];?>" alt="">
						<img class="img2 wow fadeInRight" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['img2']['url'];?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about end -->
</div>
