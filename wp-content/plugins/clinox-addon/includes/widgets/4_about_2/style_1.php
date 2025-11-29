<?php
	$minfo = $sofo = '';
	$i = 0;
	foreach ($settings['iconbox'] as $a) {
		$i++;  
		$delay = $i*200;		
	    $minfo.= '
			<div class="about__info-box d-flex wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
				<div class="icon">
					<i class="'.$a['icon']['value'].'"></i>
					<img src="'.plugins_url( 'a_shape.svg', __FILE__ ).'" alt="">
				</div>
				<div class="content">
					<h3>'.$a['ttl'].'</h3>
					<p>'.$a['desc'].'</p>
				</div>
			</div>
		';
	}

	foreach ($settings['social'] as $a) {

	    $sofo.= '
			<a '.get_that_link($a['url']).'><i class="'.$a['icon']['value'].'"></i></a>
		';
	}

?>

<div class="about about__bg pt-45 pb-45" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-7">
				<div class="sec-title">
					<span class="subtitle wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
					<h2 class="title mb-15 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms">
						<?php echo $settings['title'];?>
                    </h2>
					<p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1500ms"><?php echo $settings['desc'];?></p>
				</div>
				<div class="about__info ul_li">
					<?php echo $minfo;?>
				</div>
				<div class="ul_li mt-10">
					<div class="about__experince mt-20 mr-60">
						<h2><span class="counter"><?php echo $settings['expt'];?></span></h2>
						<span><?php echo $settings['expd'];?></span>
					</div>
					<div class="about__author d-flex mt-20">
						<div class="avatar">
							<?php echo wp_get_attachment_image($settings['avtr']['id'], 'full');?>
						</div>
						<div class="content">
							<h3><?php echo $settings['avt'];?></h3>
							<span><?php echo $settings['avd'];?></span>
							<div class="author-social">
								<?php echo $sofo;?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-5">
				<div class="about__image">
					<img class="img1 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo $settings['abt2']['url'];?>" alt="">
					<img class="img2 wow fadeInRight" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo $settings['abt1']['url'];?>" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="about__shape">
		<img class="shape1" src="<?php echo plugins_url( 'a_bg_shape_01.png', __FILE__ ); ?>" alt="">
		<img class="shape2" src="<?php echo plugins_url( 'a_bg_shape_02.png', __FILE__ ); ?>" alt="">
	</div>
	<div class="about__icons">
		<img class="icon icon--1" src="<?php echo plugins_url( 'a_shape.png', __FILE__ ); ?>" alt="">
		<img class="icon icon--2" src="<?php echo plugins_url( 'a_shape2.png', __FILE__ ); ?>" alt="">
		<img class="icon icon--3" src="<?php echo plugins_url( 'a_shape3.png', __FILE__ ); ?>" alt="">
		<img class="icon icon--4" src="<?php echo plugins_url( 'a_shape4.png', __FILE__ ); ?>" alt="">
	</div>
</div>