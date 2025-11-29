<?php
	$html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '
		<div class="col-lg-3 col-md-6">
			<div class="clenix-fun-fact-item headline pera-content d-flex justify-content-center">
				<div class="inner-text-counter">
					<h3><span class="counter">'.$a['title'].'</span>'.$a['pre'].'</h3>
					<p>'.$a['desc'].'</p>
				</div>
			</div>
		</div>
		';
	}
?>
<section id="clenix-fun-fact" class="clenix-fun-fact-section position-relative">
	<div class="banner-shape position-absolute">
		
	</div>
	<div class="container">
		<div class="clenix-fun-fact-content position-relative">
			<div class="row">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	