<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
	<div class="slider-inner-item">
		<div class="clinex-service-item-2 text-center">
			<div class="inner-icon d-flex justify-content-center align-items-center">
				'.wp_get_attachment_image($item['icon']['id'], 'full').'
			</div>
			<div class="inner-text headline pera-content">
				<h3><a '.get_that_link($item['link']).'>'.$item['title'].'</a></h3>
				<p>'.$item['desc'].'</p>
				<a class="read-more d-flex justify-content-center align-items-center" '.get_that_link($item['link']).'>'.$settings['btnlabel'].'</a>
			</div>
		</div>
	</div>
  '; 
}
?> 

<section id="clenix-service-2" class="clenix-service-section-2">
	<div class="container">
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
		<div class="clenix-service-content-2">
			<div class="clenix-service-slider-2">
				<?php echo $out;?>
			</div>
		</div>
	</div>
</section>	