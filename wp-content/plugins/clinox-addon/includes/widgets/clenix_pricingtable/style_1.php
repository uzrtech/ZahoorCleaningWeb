<?php
	$html = '';
	$first = 0;foreach ($settings['items'] as $a) {
		$first++;
		$delay = $first*200;
	    $html .= '
		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
			<div class="clenix-pricing-item headline text-center ul-li-block">
				<div class="price-header-icon-value">
					<h3>'.$a['title'].'</h3>
					<div class="price-icon">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<h4>'.$a['price'].'</h4>
				</div>
				<div class="price-feature d-flex justify-content-center">
					<ul>
						'.$a['desc'].'
					</ul>
				</div>
				<div class="price-btn d-flex justify-content-center">
					<a class="d-flex justify-content-center align-items-center '.$a['featured'].'" '.get_that_link($a['url']).'><span>'.$settings['btnlabel'].'</span></a>
				</div>
			</div>
		</div> 
		';
	}
?>

<section id="clenix-pricing-plan" class="clenix-pricing-plan-section">
	<div class="container">
		<div class="clenix-section-title headline text-center pera-content pr-text-in">
			<h3 class="sub-title d-inline-block">
				<span class="pr-text-in_item1">
					<span class="pr-text-in_item2">
						<span class="pr-text-in_item3">
							<?php echo $settings['pre'];?>
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
		<div class="clenix-pricing-plan-content">
			<div class="row justify-content-center">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	