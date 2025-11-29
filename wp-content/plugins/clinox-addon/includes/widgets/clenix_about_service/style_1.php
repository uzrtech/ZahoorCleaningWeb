<section id="clenix-about-service" class="clenix-about-service-section page-section-padding">
	<div class="container">
		<div class="clenix-about-service-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-about-service-img-wrap position-relative">
						<span class="img-shape position-absolute"></span>
						<div class="clenix-about-service-img">
							<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-about-service-text-wrap">
						<div class="clenix-section-title  headline pera-content">
							<span class="sub-title">
								<?php echo $settings['sub'];?>
							</span>
							<h2>
								<?php echo $settings['title'];?>
							</h2>
						</div>
						<div class="clenix-about-service-text pera-content">
							<?php echo $settings['desc'];?>
							<div class="clenix-btn">
								<a class="d-flex align-items-center justify-content-center" <?php echo get_that_link($settings['btn-link']);?>><span><?php echo $settings['btn-label'];?></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 