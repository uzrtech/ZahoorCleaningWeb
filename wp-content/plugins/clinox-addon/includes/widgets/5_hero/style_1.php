<div class="hero__two" data-background="<?php echo plugins_url('hero_bg-2.png', __FILE__ );?>">
	<div class="container">
		<div class="row align-items-center mt-none-30">
			<div class="col-lg-6 mt-30">
				<div class="hero__content hero__content-two">
					<span class="wow fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
						<h2 class="wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1500ms"><?php echo $settings['ttl'];?></h2>
					<p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1500ms"><?php echo $settings['desc'];?></p>
					<div class="hero__btn wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1500ms">
						<a class="thm-btn br-0" href="<?php echo $settings['btnlnk'];?>">
							<span class="btn-wrap">
								<span><?php echo $settings['btn'];?></span>
								<span><?php echo $settings['btn'];?></span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-30">
				<div class="hero__right pos-rel">
					<div class="hero__image text-end wow fadeInRight" data-wow-delay="0s" data-wow-duration="1500ms">
						<img src="<?php echo $settings['thmb']['url'];?>" alt="">
					</div>
					<div class="hero__experince-box wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1500ms">
						<div>
							<h2><span class="counter"><?php echo $settings['c'];?></span></h2>
							<span class="experince_title"><?php echo $settings['cd'];?></span>
						</div>
					</div>
					<div class="hero__line-shape wow fadeInRight" data-wow-delay=".6s" data-wow-duration="1500ms">
						<img src="<?php echo plugins_url('h_shape.png', __FILE__ );?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hero__text-box">
		<img src="<?php echo plugins_url('h_text.png', __FILE__ );?>" alt="">
		<img src="<?php echo plugins_url('h_icon.png', __FILE__ );?>" alt="">
	</div>
	
	<div class="hero__shape-icons">
		<img class="icon icon--1" src="<?php echo plugins_url('h_icon1.png', __FILE__ );?>" alt="">
		<img class="icon icon--2 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1500ms" src="<?php echo plugins_url('h_icon2.png', __FILE__ );?>" alt="">
		<img class="icon icon--3 wow fadeInRight" data-wow-delay=".4s" data-wow-duration="1500ms" src="<?php echo plugins_url('h_icon3.png', __FILE__ );?>" alt="">
		<img class="icon icon--4 wow fadeInLeft" data-wow-delay=".6s" data-wow-duration="1500ms" src="<?php echo plugins_url('h_icon4.png', __FILE__ );?>" alt="">
	</div>
</div>
