<?php
$out = '';
$i = 0;
foreach ($settings['items'] as $item){
  $i++;  
  $delay = $i*200;	
  $out.= '

	<div class="clenix-why-choose-inner-item-3 d-flex align-items-center wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
		<div class="inner-icon">
			'.wp_get_attachment_image($item['img']['id'], 'full').'
		</div>
		<div class="inner-text headline">
			<h3>'.$item['title'].'</h3>
		</div>
	</div>

  '; 
}?> 

<section id="clenix-why-choose-3" class="clenix-why-choose-section-3 position-relative">
	<span class="clenix-wc-sidebg position-absolute">
		<?php echo wp_get_attachment_image($settings['shape']['id'], 'full');?>
	</span>
	<span class="clenix-wc-sidebg2 position-absolute">
		<?php echo wp_get_attachment_image($settings['shape2']['id'], 'full');?>
	</span>
	<div class="container">
		<div class="clenix-why-choose-content-3">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-why-choose-text-wrap-3">
						<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
							<div class="subtitle text-uppercase">
								<?php echo $settings['pre'];?>
							</div>
							<h2><?php echo $settings['title'];?></h2>
							<p><?php echo $settings['desc'];?></p>
						</div>
						<div class="clenix-why-choose-feature-wrap-3 d-flex flex-wrap position-relative">
							<?php echo $out;?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-why-choose-img-3 position-relative">
						<span class="wc-shape1 position-absolute">
							<?php echo wp_get_attachment_image($settings['rshape1']['id'], 'full');?>
						</span>
						<span class="wc-shape2 position-absolute wow fadeInBottom" data-wow-delay="400ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['rshape2']['id'], 'full');?>
						</span>
						<div class="inner-img wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['rimg']['id'], 'full');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>