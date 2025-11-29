<?php
$i = 0;
$out = '';
foreach ($settings['whys'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
	<div class="clenix-why-choose-inner-item-2 d-flex wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
		<div class="inner-icon position-relative">
			'.wp_get_attachment_image($item['icon']['id'], 'full').'
		</div>
		<div class="inner-text headline pera-content">
			<h3>'.$item['title'].'</h3>
			<p>'.$item['desc'].'</p>
		</div>
	</div>
  '; 
}

?> 

<section id="clenix-why-choose-2" class="clenix-why-choose-section-2">
	<div class="container">
		<div class="clenix-why-choose-content-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-about-img-wrap-2  position-relative">
						<span class="star-vector1 position-absolute">
							<?php echo wp_get_attachment_image($settings['shape1']['id'], 'full');?>
						</span>
						<span class="star-vector2 position-absolute">
							<?php echo wp_get_attachment_image($settings['shape2']['id'], 'full');?>
						</span>
						<div class="clenix-about-img1 position-relative text-left">
							<span class="img-shape position-absolute"></span>
							<?php echo wp_get_attachment_image($settings['img1']['id'], 'full');?>
						</div>
						<div class="clenix-about-img2 position-absolute">
							<span class="img-shape position-absolute"></span>
							<?php echo wp_get_attachment_image($settings['img2']['id'], 'full');?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="why-choose-text-wrap-2">
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
						<div class="clenix-why-choose-feature-2">
							<?php echo $out;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>