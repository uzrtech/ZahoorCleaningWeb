<section id="clenix-banner" data-background="<?php echo $settings['bg']['url'];?>" class="clenix-banner-section position-relative top-position">
	<div class="banner-shape position-absolute">
		<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
	</div>
	<div class="container">
		<div class="banner-content position-relative">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="banner-text-wrapper">
						<div class="clenix-section-title headline pera-content">
							<span class="sub-title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo $settings['pre'];?></span>
							<h1 class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms"><strong class="text-uppercase"><?php echo $settings['title'];?>
							</h1>
							<p class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms"><?php echo $settings['desc'];?></p>
						</div>
						<div class="banner-btn-wrapper d-flex align-items-center wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
							<div class="banner-btn">
								<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btnlink']) ;?>><span><?php echo $settings['btnlabel'];?></span></a>
							</div>
							<div class="banener-cta d-flex align-items-center">
								<i class="fal fa-phone-alt"></i> <a href="tel:<?php echo $settings['phone'];?>"><?php echo $settings['phone'];?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="banner-form-wrapper headline wow fadeInRight" data-wow-delay="800ms" data-wow-duration="1500ms">
						<h3><?php echo $settings['rsub'];?></h3>
						<?php echo do_shortcode('[contact-form-7 id="249" title="Free estimate"]');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>