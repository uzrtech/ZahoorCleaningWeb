<?php

$html = '';
	foreach ($settings['litems'] as $a) {

	    $html .= '
			<div class="col-lg-4">
				<div class="clenix-service-offer-item d-flex">
					<div class="inner-serial d-flex align-items-center justify-content-center">
						'.$a['num'].'
					</div>
					<div class="inner-text headline pera-content">
						<h3>'.$a['title'].'</h3>
						<p>'.$a['desc'].'</p>
					</div>
				</div>
			</div>
		';
	}

?>

<section id="clenix-service-offer" class="clenix-service-offer-section">
	<div class="container">
		<div class="clenix-section-title text-center headline pera-content">
			<span class="sub-title"><?php echo $settings['pre'];?></span>
			<h2><?php echo $settings['title'];?></h2>
		</div>
		<div class="clenix-service-offer-content">
			<div class="row">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>