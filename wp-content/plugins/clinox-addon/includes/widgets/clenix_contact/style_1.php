<?php
	$html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '
			<div class="col-md-6">
				<div class="contact-info-item d-flex">
					<div class="inner-icon">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="inner-text">
						<h4>'.$a['label'].'</h4>
						'.$a['desc'].'
					</div>
				</div>
			</div>
		';
	}
?>

<section id="clenix-contact" class="clenix-contact-section">
	<div class="container">
		<div class="clenix-contact-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-contact-form-wrap">
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
						<?php echo do_shortcode($settings['shortcode']);?>        
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-contact-info-wrap headline">
						<h3><?php echo $settings['rsub'];?></h3>
						<div class="clenix-contact-info"> 
							<div class="row">
								<?php echo $html;?>
							</div>
						</div>
						<div class="contact-map">
							<div id="googleMaps" class="google-map-container">
								<?php echo $settings['map'];?>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>