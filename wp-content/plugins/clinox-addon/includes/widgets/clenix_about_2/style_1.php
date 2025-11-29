<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
  	<li>'.$item['list'].'</li>
  '; 
}
?> 

<section id="clenix-about-2" class="clenix-about-section-2">
	<div class="container">
		<div class="clenix-about-content-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-about-img-wrap-2 d-flex justify-content-end position-relative">
						<span class="star-vector1 position-absolute">
							<?php echo wp_get_attachment_image($settings['shape1']['id'], 'full');?>
						</span>
						<span class="star-vector2 position-absolute">
							<?php echo wp_get_attachment_image($settings['shape2']['id'], 'full');?>
						</span>
						<div class="clenix-about-img1 position-relative text-right">
							<span class="img-shape position-absolute" data-parallax='{"y" : 25}'></span>
							<?php echo wp_get_attachment_image($settings['img1']['id'], 'full');?>
						</div>
						<div class="clenix-about-img2 position-absolute">
							<span class="img-shape position-absolute" data-parallax='{"y" : 15}'></span>
							<?php echo wp_get_attachment_image($settings['img2']['id'], 'full');?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-about-text-wrap-2">
						<div class="clenix-section-title-2  headline pera-content pr-text-in">
							<h3 class="sub-title d-inline-block">
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['pre'];?>
										</span>
									</span>
								</span>
							</h3>
							<h2>
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['title'];?>
										</span>
									</span>
								</span>
							</h2>
							<p><?php echo $settings['desc'];?></p>
						</div>
						<div class="about-feature-item-wrap-2 ul-li-block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<ul>
								<?php echo $out;?>
							</ul>
						</div>
						<div class="about-signature-cta-wrap">
							<div class="about-signature-img d-flex wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<div class="inner-img">
									<?php echo wp_get_attachment_image($settings['thumbnail']['id'], 'full');?>
								</div>
								<div class="inner-text headline  position-relative">
									<h3><?php echo $settings['thumbtitle'];?></h3>
									<span class="sign-img position-absolute"><?php echo wp_get_attachment_image($settings['sign']['id'], 'full');?></span>
								</div>
							</div>
							<div class="about-cta-btn d-flex align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="banner-btn-wrapper d-flex align-items-center">
									<div class="banner-btn">
										<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btn-link']);?>><span><?php echo $settings['btn-label'];?></span></a>
									</div>
									<div class="banener-cta d-flex align-items-center">
										<i class="fal fa-phone-alt"></i> 
										<div class="banener-cta-text">
											<span>Emergency Services</span>
											<a href="tel:<?php echo $settings['phone-num'];?>"><?php echo $settings['phone-num'];?></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>