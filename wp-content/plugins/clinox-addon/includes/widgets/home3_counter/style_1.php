<?php
	$html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '

		<div class="col-lg-3 col-md-6">
			<div class="clenix-fun-fact-item-3 headline pera-content d-flex justify-content-center">
				<div class="inner-text-counter">
					<h3><span class="counter">'.$a['title'].'</span>'.$a['pre'].'</h3>
					<p>'.$a['desc'].'</p>
				</div>
			</div>
		</div>

		';
	}
?>

<section id="clenix-fun-fact" class="clenix-fun-fact-section-3 position-relative" data-background="<?php echo $settings['bg']['url'];?>">

	<div class="container">
		<div class="clenix-fun-fact-content position-relative">
			<div class="row">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>