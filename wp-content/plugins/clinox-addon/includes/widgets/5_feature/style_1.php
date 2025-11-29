<div class="feature pb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="feature__info-box">
								<span><?php echo $settings['pre'];?></span>
								<h3 class="title"><?php echo $settings['ttl'];?></h3>
								<div>
									<?php echo $settings['ft'];?>
								</div>
								<div class="feature__btn mt-40">
									<a class="thm-btn br-0" href="<?php echo $settings['ttl'];?>">
										<span class="btn-wrap">
											<span><?php echo $settings['btn'];?></span>
											<span><?php echo $settings['btn'];?></span>
										</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="cta__wrap cta__two ul_li">
								<div class="cta__info flex-1">
									<h3><?php echo $settings['c'];?></h3>
								</div>
								<?php echo do_shortcode($settings['shortcode']);?>
							</div>
							<div class="feature__content-wrap ul_li pt-20 mt-140">
								<div class="feature__img">
									<img src="<?php echo $settings['thmb']['url'];?>" alt="">
								</div>
								<div class="feature__content">
								<?php echo $settings['ftc'];?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>