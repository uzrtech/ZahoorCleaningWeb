<?php
	$minfo = $adinfo = $social = $counter = '';
	$i = 0;
	foreach ($settings['itms'] as $a) {
		$i++;  
		$delay = $i*200;		
	    $minfo.= '
			<div class="col-lg-4">
				<div class="add-info__single d-flex wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
					<span class="number">'.$a['num'].'</span>
					<div class="content">
						<h3>'.$a['ttl'].'</h3>
						<p>'.$a['sub'].'</p>
					</div>
				</div>
			</div>
		';
	}

	foreach ($settings['add'] as $a) {		
	    $adinfo.= '
			<div class="add-info__item">
				'.$a['num'].'
			</div>	
		';
	}

	foreach ($settings['socials'] as $a) {		
	    $social.= '
			<a '.get_that_link($a['url']).'><i class="'.$a['icon']['value'].'"></i></a>
		';
	}

	foreach ($settings['cunt'] as $a) {		
	    $counter.= '
			<div class="counter__item mt-20">
				<h3>'.$a['ttl'].'</h3>
				<p>'.$a['sb'].'</p>
				<img src="'.$a['img']['url'].'" alt="">
			</div>	
		';
	}

?>

<div class="add-info pt-120">
	<div class="container">
		<div class="sec-title text-center mb-60">
			<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['ttl'];?></span>
			<h2 class="title wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
				<?php echo $settings['sub'];?>
			</h2>
		</div>
		<div class="row mb-90">
			<?php echo $minfo;?>
		</div>
		<div class="add-info__wrap">
			<div class="row g-0">
				<div class="col-lg-4">
					<div class="add-info__contact" data-background="<?php echo $settings['adbg']['url'];?>">
						<?php echo $adinfo;?>
						<div class="add-info__opening-hour ul_li">
							<div class="icon">
								<img src="<?php echo plugins_url('oh_icon.svg', __FILE__ );?>" alt="">
							</div>
							<div class="content">
								<?php echo $settings['oh'];?>
							</div>
						</div>
						<div class="add-info__social mt-30 ul_li">
							<?php echo $social;?>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="add-info__right">
						<div  class="twentytwenty-container beforeafter-wrap">
							<div class="arck-before-item before-after-item position-relative">
								<img class="img2" src="<?php echo $settings['bfimg']['url'];?>" alt="">
							</div>
							<div class="arck-after-item before-after-item position-relative">
								<img class="img2" src="<?php echo $settings['afimg']['url'];?>" alt="">
							</div>
						</div>
						<div class="add-info__counter ul_li pos-rel" data-background="assets/img/bg/c_bg.png">
							<div class="add-info__video mt-20">
								<a href="<?php echo $settings['vurl'];?>" class="popup-video popup-video__md"><i class="fas fa-play"></i></a>
							</div>
							<div class="counter__wrap ul_li_between">
								<?php echo $counter; ?>
							</div>
							<div class="add-info__counter-shape">
								<img src="<?php echo plugins_url( 'c_shape.png', __FILE__ ); ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
