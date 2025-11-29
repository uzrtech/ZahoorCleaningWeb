
<section id="clenix-promo" class="clenix-promo-section position-relative">
		<div class="banner-shape position-absolute">
		</div>
		<div class="container">
			<div class="clenix-promo-content position-relative">
				<div class="clenix-section-title headline pera-content pr-text-in">
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
				<div class="banner-btn-wrapper d-flex align-items-center">
					<div class="banner-btn">
						<a class="d-flex justify-content-center align-items-center" <?php echo get_that_link($settings['btn-link']);?>> <span><?php echo $settings['btn-label'];?> </span></a>
					</div>
					<div class="banener-cta d-flex align-items-center">
						<span>or</span> <a href="tel:<?php echo $settings['phone'];?>"> <?php echo $settings['phone'];?></a>
					</div>
				</div>
			</div>
		</div>
</section>	