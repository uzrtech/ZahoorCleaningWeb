
<section id="clenix-promo-2" class="clenix-promo-section-2 position-relative">
	<div class="side-shape1 position-absolute" data-parallax='{"x" : -50}'>
		<?php echo wp_get_attachment_image($settings['side1']['id'], 'full');?>
	</div>
	<div class="side-shape2 position-absolute" data-parallax='{"x" : 50}'>
		<?php echo wp_get_attachment_image($settings['side2']['id'], 'full');?>
	</div>
	<div class="star-vector1 position-absolute">
		<?php echo wp_get_attachment_image($settings['star1']['id'], 'full');?>
	</div>
	<div class="star-vector2 position-absolute">
		<?php echo wp_get_attachment_image($settings['star2']['id'], 'full');?>
	</div>
	<div class="container">
		<div class="clenix-promo-content-2 position-relative">
			<div class="clenix-section-title-2 text-center headline pera-content pr-text-in">
				<h3 class="sub-title d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
							<?php echo $settings['sub'];?>
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
			</div>
			<div class="banner-btn-wrapper d-flex justify-content-center align-items-center">
				<div class="banner-btn">
					<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btn-link']);?> ><span><?php echo $settings['btn-label'];?></span></a>
				</div>
				<div class="banener-cta d-flex align-items-center">
					<span>or</span> <a href="tel:<?php echo $settings['phone'];?>"> <?php echo $settings['phone'];?></a>
				</div>
			</div>
		</div>
	</div>
</section>	