<?php

	$html = '';
	foreach ($settings['items'] as $a) {

	    $html .= '
			<div class="slider-inner-item">
				<div class="clenix-sponsor-img">
					'.wp_get_attachment_image($a['img']['id'], 'full').'
				</div>
			</div>
		';
	}
?>

<section id="clenix-sponsor" class="clenix-sponsor-section">
		<div class="container">
			<div class="clenix-sponsor-slider">
				<?php echo $html;?>
			</div>
		</div>
</section>