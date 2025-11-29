<?php
	$html = '';
	$first = 0;foreach ($settings['items'] as $a) {
		$first++;
		$delay = $first*200;
	    $html .= '

		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
			<div class="clenix-price-item-3 text-center '.$a['featured'].'">
				<div class="inner-tittle headline pera-content">
					<h3>'.$a['title'].'</h3>
					<span class="cl-price">'.$a['price'].'</span>
					<span class="cl-price-plan">Per Cleaning</span>
				</div>
				<div class="inner-list ul-li-block" data-background="'.$a['img']['url'].'">
					<ul>
						'.$a['desc'].'
					</ul>
				</div>
				<div class="inner-btn d-flex justify-content-center">
					<a class="d-flex align-items-center justify-content-center" '.get_that_link($a['url']).'>'.$settings['btnlabel'].'</a>
				</div>
			</div>
		</div>
		';
	}
?>

<section id="clenix-price-3" class="clenix-price-section-3" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="clenix-section-title-3 text-center headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
			<div class="subtitle text-uppercase">
				<?php echo $settings['pre'];?>
			</div>
			<h2><?php echo $settings['title'];?></h2>
		</div>
		<div class="clenix-price-content-3">
			<div class="row justify-content-center">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	