<?php
	$minfo = '';
 foreach ($settings['itms'] as $a) {
		$minfo .='
			<div class="testimonial__item">
				<div class="testimonial__avatar">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
				<div class="testimonial__content">'.$a['con'].'</div>
				<div class="testimonial__info">
					<h3>'.$a['nm'].'</h3>
					<span>'.$a['pos'].'</span>
				</div>
			</div>		
		';
	}


?>


<div class="testimonial pb-180" data-background="<?php echo plugins_url( 'testimonial_bg.jpg', __FILE__ ); ?>">
	<div class="container">
		<div class="testimonial__cta ul_li_between">
			<h3><?php echo $settings['ctlb'];?></h3>
			<a class="thm-btn thm-btn__icon" href="<?php echo $settings['cturl'];?>">
				<span class="btn-wrap">
					<span><?php echo $settings['ctbt'];?></span>
					<span><?php echo $settings['ctbt'];?></span>
				</span>
				<i class="flaticon-right-arrow"></i>
			</a>
			<div class="testimonial__cta-shape">
				<img src="<?php echo plugins_url( 'cta_shape.png', __FILE__ ); ?>" alt="">
			</div>
		</div>
		<div class="testimonial__wrap pt-110">
			<div class="sec-title mb-50 text-center">
				<span class="subtitle"><?php echo $settings['pre'];?></span>
				<h2 class="title"><?php echo $settings['ttl'];?></h2>
			</div>
			<div class="testimonial__slide-wrap">
				<div class="testimonial__quote">
					<span class="quote quote--1"><img src="<?php echo plugins_url( 'quote-1.png', __FILE__ ); ?>" alt=""></span>
					<span class="quote quote--2"><img src="<?php echo plugins_url( 'quote-2.png', __FILE__ ); ?>" alt=""></span>
				</div>
				<div class="testimonial__slide">
					<?php echo $minfo;?>
				</div>
			</div>
		</div>
	</div>
	<div class="testimonial__avatars">
		<img class="avatar1 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'avatar_01.png', __FILE__ ); ?>" alt="">
		<img class="avatar2 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms"  src="<?php echo plugins_url( 'avatar_02.png', __FILE__ ); ?>" alt="">
		<img class="avatar3 wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1500ms"  src="<?php echo plugins_url( 'avatar_03.png', __FILE__ ); ?>" alt="">
		<img class="avatar4 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms"  src="<?php echo plugins_url( 'avatar_04.png', __FILE__ ); ?>" alt="">
	</div>
</div>