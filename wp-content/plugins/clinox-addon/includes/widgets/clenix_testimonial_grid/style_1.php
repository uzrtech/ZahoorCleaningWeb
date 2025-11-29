<?php
    $html = '';
	foreach ($settings['items'] as $a) {
	    $html .= '
			<div class="col-lg-6">
				<div class="clenix-testimonial-item">
					<div class="inner-img-text-wrap  position-relative">
						<div class="inner-img">
							'.wp_get_attachment_image($a['img']['id'], 'full').'
						</div>
						<div class="inner-icon-text">
							<div class="inner-icon">
								'.wp_get_attachment_image($settings['icon']['id'], 'full').'
							</div>
							<div class="inner-text headline pera-content">
								<p>'.$a['quote'].'</p>
								<h3>'.$a['name'].'</h3>
								<span>'.$a['pos'].'</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		';
	}
?>

<section id="clenix-testimonial-feed" class="clenix-testimonial-feed-section page-section-padding">
	<div class="container">
		<div class="row">
			<?php echo $html;?>
		</div>
	</div>
</section>
