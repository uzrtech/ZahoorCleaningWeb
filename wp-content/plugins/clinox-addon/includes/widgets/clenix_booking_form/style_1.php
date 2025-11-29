<?php
$out = '';
foreach ($settings['litems'] as $item){
  $out.= '
	<div class="col-lg-4 col-md-6">
		<div class="booking-cta-item d-flex">
			<div class="inner-icon">
				'.wp_get_attachment_image($item['img']['id'], 'full').'
			</div>
			<div class="inner-text headline">
				<h4>'.$item['title'].'</h4>
				'.$item['desc'].'
			</div>
		</div>
	</div>
  '; 
}
?> 

<section id="clenix-booking-form" class="clenix-booking-form-section page-section-padding">
	<div class="container">
		<div class="booking-form-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="booking-form-img">
						<div class="clenix-faq-img-wrap position-relative">
							<span class="bg-shape position-absolute"></span>
							<div class="faq-img1 bg-img-area">
								<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-contact-form-wrap">
						<div class="clenix-section-title headline pera-content">
							<span class="sub-title"><?php echo $settings['sub'];?></span>
							<h2><?php echo $settings['title'];?></h2>
						</div>
						<?php echo do_shortcode($settings['shortcode']);?>
					</div>
				</div>
			</div>
			<div class="booking-form-cta-content">
				<div class="clenix-section-title text-center headline pera-content">
					<span class="sub-title"><?php echo $settings['bsub'];?></span>
					<h2><?php echo $settings['btitle'];?></h2>
				</div>
				<div class="row justify-content-center">
					<?php echo $out;?>
				</div>
			</div>
		</div>
	</div>
</section>	