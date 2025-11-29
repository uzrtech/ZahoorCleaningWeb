<?php

	$html = '';
	foreach ($settings['items'] as $a) {

	    $html .= '
			<div class="clenix-slider-item-3">
				<div class="clenix-sponsor-img-3">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
			</div>		
		';
	}
?>

<section id="clenix-sponsor-3" class="clenix-sponsor-section-3">
	<div class="container">
		<div class="clenix-sponsor-slider-3">
			<?php echo $html;?>
		</div>
	</div>
</section>	