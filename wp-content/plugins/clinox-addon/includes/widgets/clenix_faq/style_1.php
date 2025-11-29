<?php
	$html = '';
    $id = 'h' . substr( $this->get_id_int(), 0, 3 );
	$first = 0; foreach ($settings['items'] as $a) {

	    $first++;
		$delay = $first*200;
	    if ($first == 1) {
	        $btnclass = '';
	        $contentclass = 'collapse show';
			$expan = 'true';
	    } else {
	        $btnclass = 'collapsed';
	        $contentclass = 'collapse';
			$expan = 'false';
	    }

	    $html .= '
		<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
			<h2 class="accordion-header" id="'.$id.$first.'">
				<button class="accordion-button '.$btnclass.'" type="button" data-bs-toggle="collapse" data-bs-target="#'.$id.$first.'2" aria-expanded="'.$expan.'" aria-controls="collapseOne">
				  '.$a['title'].'
				</button>
			</h2>
			<div id="'.$id.$first.'2" class="accordion-collapse '.$contentclass.'" aria-labelledby="'.$id.$first.'" data-bs-parent="#accordionExample2">
				<div class="accordion-body">
				  '.$a['desc'].'
				</div>
			</div>
		</div>
		';
	}
?>

<section id="clenix-faq" class="clenix-faq-section">
	<div class="container">
		<div class="clearfix-faq-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-faq-img-wrap position-relative">
						<span class="bg-shape position-absolute"></span>
						<div class="faq-img1 bg-img-area">
							<?php echo wp_get_attachment_image($settings['img']['id'], 'full'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-faq-text-wrapper">
						<div class="clenix-section-title headline pera-content pr-text-in">
							<h3 class="sub-title d-inline-block">
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['sub']; ?>
										</span>
									</span>
								</span>
							</h3>
							<h2>
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['title']; ?>
										</span>
									</span>
								</span>
							</h2>
						</div>
						<div class="clenix-faq-accordion">
							<div class="accordion" id="accordionExample2">
								<?php echo $html; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>