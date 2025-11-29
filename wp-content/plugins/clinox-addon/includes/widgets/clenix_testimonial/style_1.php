<?php
    $html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '
		<div class="slider-inner-item">
			<div class="clenix-testimonial-item">
				<div class="inner-img-text-wrap  position-relative">
					<div class="inner-img">
					  '.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="inner-icon-text">
						<div class="inner-icon">
							'.wp_get_attachment_image($settings['icon']['id'], 'full').'
						</div>
						<div class="inner-text headline pera-content">
							<p>'.$a['quote'].'</p>
							<h3>'.$a['name'].'</h3>
							<span>'.$a['pos'].'</span>
						</div>
					</div>
				</div>
			</div>
		</div> 
		';
	}
?>

<section id="clenix-testimonial" class="clenix-testimonial-section">
	<div class="container">
		<div class="clenix-testimonial-top-content d-flex justify-content-between align-items-center">
			<div class="clenix-section-title headline pera-content pr-text-in">
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
			</div>
			<div class="carousel_nav  clearfix">
				<button type="button" class="testi-left_arrow"><i class="fal fa-long-arrow-left"></i></button>
				<button type="button" class="testi-right_arrow"><i class="fal fa-long-arrow-right"></i></button>
			</div>
		</div>
		<div class="clenix-testimonial-content">
			<div class="clenix-testimonial-slider">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	