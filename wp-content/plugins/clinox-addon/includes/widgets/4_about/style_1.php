<div class="hero hero__height ul_li" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<div class="hero__content text-center">
					<span class="wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
					<h2 class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['title'];?></h2>
					<div class="hero__btn wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms">
						<a class="thm-btn thm-btn__icon" href="<?php echo $settings['btnurl']['url'];?>">
							<span class="btn-wrap">
								<span><?php echo $settings['btnlabel'];?></span>
								<span><?php echo $settings['btnlabel'];?></span>
							</span>
							<i class="fal fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="hero__img wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1500ms">
		<?php echo wp_get_attachment_image($settings['thmb']['id'], 'full');?>
	</div>
	<div class="hero__experince">
		<img src="<?php echo plugins_url( 'shape/exp_shape.png', __FILE__ ); ?>" alt="">
		<div class="hero__experince-text">
			<h2><span class="counter"><?php echo $settings['yrlabel'];?></span></h2>
			<?php echo $settings['yrdesc'];?>
		</div>
	</div>
	
	<div class="hero__shape">
		<img class="shape shape--1 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_01.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--2 wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_02.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--3 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_03.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--4 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_04.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--5 wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_05.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--6 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_06.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--7 wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_07.png', __FILE__ ); ?>" alt="">
		<img class="shape shape--8 wow fadeInRight" data-wow-delay=".7s" data-wow-duration="1500ms" src="<?php echo plugins_url( 'shape/h_08.png', __FILE__ ); ?>" alt="">
	</div>
</div>