<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '

	<div class="clenix-slider-item-3">
		<div class="clenix-service-item-3 text-center position-relative">
			<div class="inner-img-icon-wrap  position-relative">
				<div class="inner-img  position-relative">
					'.wp_get_attachment_image($item['img']['id'], 'full').'
				</div>
				<div class="inner-icon d-flex justify-content-center align-items-center position-absolute">
					'.wp_get_attachment_image($item['icon']['id'], 'full').'
				</div>
			</div>
			<div class="inner-text headline pera-content">
				<h3><a '.get_that_link($item['link']).'>'.$item['title'].'</a></h3>
				<p>'.$item['desc'].'</p>
			</div>
		</div>
	</div>  
  '; 
}?> 

<section id="clenix-service-3" class="clenix-service-section-3" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="clenix-section-title-3 text-center headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
			<div class="subtitle text-uppercase">
				<?php echo $settings['sub'];?>
			</div>
			<h2><?php echo $settings['title'];?></h2>
		</div>
		<div class="clenix-service-content-3 position-relative">
			<div class="clenix-service-slider-3">
				<?php echo $out;?>
			</div>
			<div class="carousel_nav">
				<button type="button" class="ser3_left_arrow"><i class="fal fa-long-arrow-left"></i></button>
				<button type="button" class="ser3_right_arrow"><i class="fal fa-long-arrow-right"></i></button>
			</div>
		</div>
		<div class="clenix-more-service-btn-3 pera-content text-center">
			<p><?php echo $settings['btnlabel'];?></p>
		</div>
	</div>
</section>	