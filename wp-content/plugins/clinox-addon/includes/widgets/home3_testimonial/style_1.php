<?php
    $html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '

		<div class="clenfix-testimonial-item-3">
			<div class="clenfix-testimonial-item-wrap-3  position-relative">
				<div class="inner-text">
					<div class="inner-top d-flex justify-content-between align-items-center">
						<div class="quote-icon">
							'.wp_get_attachment_image($settings['icon']['id'], 'full').'
						</div>
						<div class="star-icon ul-li">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
							</ul>
						</div>
					</div>
					<div class="inner-decs">
						'.$a['quote'].'
					</div>
				</div>
				<div class="inner-img">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
			</div>
			<div class="inner-author headline">
				<h3>'.$a['name'].'</h3>
				<span>'.$a['pos'].'</span>
			</div>
		</div>	

		';
	}
?> 

<section id="clenix-testimonial-3" class="clenix-testimonial-section-3" data-background="<?php echo $settings['bg']['url'];?>">
		<div class="container">
			<div class="clenix-testimonial-content-3">
				<div class="row">
					<div class="col-lg-6">
						<div class="clenfix-testi-img-wrap-3 position-relative">
							<div class="inner-img wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
								<?php echo wp_get_attachment_image($settings['limg']['id'], 'full');?>
							</div>
							<div class="inner-circle position-absolute">
								<?php echo wp_get_attachment_image($settings['lshape']['id'], 'full');?>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clenix-testimonial-text-wrap-3">
							<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<div class="subtitle text-uppercase">
									<?php echo $settings['pre'];?>
								</div>
								<h2><?php echo $settings['title'];?></h2>
							</div>
							<div class="clenix-testimonial-slider-wrap-3">
								<div class="clenix-testimonial-slider-3">
									<?php echo $html;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	