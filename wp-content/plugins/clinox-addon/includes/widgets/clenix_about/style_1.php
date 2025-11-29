<?php
$i = 0;
$out = '';
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
  <div class="about-feature-item d-flex align-items-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
	<div class="about-ft-icon d-flex justify-content-center align-items-center">
	  '.wp_get_attachment_image($item['img']['id'], 'full').'
	</div>
	<div class="about-ft-text headline">
		<h3>'.$item['title'].'</h3>
	</div>
  </div>
  '; 
}

$b1url = get_that_link($settings['btn-link']);
$b1lbl = $settings['btn-link']['url'] ? '<a class="d-flex align-items-center justify-content-center" '.$b1url.'><span>'.$settings['btn-label'].'</span></a>' : '';

?> 

<section id="clenix-about" class="clenix-about-section">
		<div class="container">
			<div class="clenix-about-content">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="clenix-about-img-wrapper position-relative">
							<div class="clenix-about-img1">
								<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
							</div>
							<div class="about-exp position-absolute headline d-flex align-items-center justify-content-center">
								<?php echo $settings['leftitle'];?>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clenix-about-text-wrap">
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
								<p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><?php echo $settings['desc'];?></p>
							</div>
							<div class="about-feature-wrapper">
								<div class="about-feature-item-wrap position-relative">
									<?php echo $out;?>
								</div>
								<div class="clenix-btn wow flipInX" data-wow-delay="400ms" data-wow-duration="1500ms">
									<?php echo $b1lbl;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
 