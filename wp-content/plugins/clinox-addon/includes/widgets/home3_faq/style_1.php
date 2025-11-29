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

<section id="clenix-faq-3" class="clenix-faq-section-3 position-relative">
	<span class="clenix-fq-sidebg position-absolute">
		<?php echo wp_get_attachment_image($settings['shape1']['id'], 'full');?>
	</span>
	<span class="clenix-fq-sidebg2 position-absolute">
		<?php echo wp_get_attachment_image($settings['shape2']['id'], 'full');?>
	</span>
	<div class="container">
		<div class="clenix-faq-content-3">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-faq-img-3 position-relative">
						<span class="wc-shape1 position-absolute">
							<?php echo wp_get_attachment_image($settings['lshape1']['id'], 'full');?>
						</span>
						<span class="wc-shape2 position-absolute wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['lshape2']['id'], 'full');?>
						</span>
						<div class="inner-img wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-faq-text-wrapper-3">
						<div class="clenix-section-title-3 headline pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
							<div class="subtitle text-uppercase">
								<?php echo $settings['sub'];?>
							</div>
							<h2><?php echo $settings['title'];?></h2>
						</div>
						<div class="clenix-faq-accordion-3">
							<div class="accordion" id="accordionExample2">
								<?php echo $html;?>
							</div>             
						</div>
					</div>      
				</div>      
			</div>
		</div>
	</div>
</section>         