<?php
	$html = '';
	foreach ($settings['items'] as $a) {

	    $html .= '
 
			<div class="col-lg-4 col-md-6">
				<div class="clinex-service-item-2 text-center">
					<div class="inner-icon d-flex justify-content-center align-items-center">
						'.wp_get_attachment_image($a['img']['id'], 'full').'
					</div>
					<div class="inner-text headline pera-content">
						<h3><a '.get_that_link($a['link']).'>'.$a['title'].'</a></h3>
						<p>'.$a['desc'].'</p>
						<a class="read-more d-flex justify-content-center align-items-center" '.get_that_link($a['link']).'>'.$settings['btnlabel'].'</a>
					</div>
				</div>
			</div>			
		';
	}
?>

<section id="clenix-service-feed" class="clenix-service-feed-section">
	<div class="container">
		<div class="clenix-service-feed-content">
			<div class="row">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>