<?php
	$lhtml = $rhtml = '';
	foreach ($settings['litems'] as $a) {

	    $lhtml .= '
			<li>'.$a['list'].'</li>
		';
	}
	foreach ($settings['ritems'] as $a) {

	    $rhtml .= '
			<li>'.$a['list'].'</li>
		';
	}

?>

<section id="clenix-service-feature" class="clenix-service-feature-section">
	<div class="container">
		<div class="clenix-service-feature-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-service-feature-items headline pera-content ul-li-block position-relative" data-background="<?php echo $settings['img']['url'];?>">
						<div class="background_overlay"></div>
						<div class="clenix-service-feature-text position-relative">
							<h3><?php echo $settings['ltitle'];?></h3>
							<p><?php echo $settings['ldesc'];?></p>
							<ul>
								<?php echo $lhtml;?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-service-feature-items headline pera-content ul-li-block position-relative" data-background="<?php echo $settings['img']['url'];?>">
						<div class="background_overlay"></div>
						<div class="clenix-service-feature-text position-relative">
							<h3><?php echo $settings['rtitle'];?></h3>
							<p><?php echo $settings['rdesc'];?></p>
							<ul>
								<?php echo $rhtml;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	