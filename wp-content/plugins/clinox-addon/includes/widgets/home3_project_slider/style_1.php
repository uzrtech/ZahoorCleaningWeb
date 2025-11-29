<?php
	$html = '';
	foreach ($settings['items'] as $a) {

	    $html .= '

			<div class="clenix-slider-item-3">
				<div class="clenix-project-item-3 position-relative">
					<div class="inner-img">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="inner-text headline">
						<span><a '.get_that_link($a['link']).'>'.$a['sub'].'</a></span>
						<h3><a '.get_that_link($a['link']).'>'.$a['title'].'</a></h3>
						<a class="read-more-btn d-flex align-items-center justify-content-center" '.get_that_link($a['link']).'> <i class="fal fa-long-arrow-right"></i></a>
					</div>
				</div>
			</div>
		';
	}
?>

<section id="clenix-project-3" class="clenix-project-section">
	<div class="container">
		<div class="clenix-project-top-content-3 d-flex justify-content-between align-items-center">
			<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
				<div class="subtitle text-uppercase">
					<?php echo $settings['pre'];?>
				</div>
				<h2><?php echo $settings['title'];?></h2>
			</div>
			<div class="clnix-project-title-text-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
				<?php echo $settings['desc'];?>
			</div>
		</div>
		<div class="clenix-project-content-3">
			<div class="clenix-project-slider-3">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	