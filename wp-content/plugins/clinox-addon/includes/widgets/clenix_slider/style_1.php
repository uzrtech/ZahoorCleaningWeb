<?php
$html = '';
	foreach ($settings['items'] as $a) {  
	    $html .= '
			<div class="clenix-main-slider-item position-relative">
				<span class="shape1 position-absolute">'.wp_get_attachment_image($settings['bn-sh1']['id'], 'full').'</span>
				<span class="shape2 position-absolute">'.wp_get_attachment_image($settings['bn-sh2']['id'], 'full').'</span>
				<span class="shape3 position-absolute">'.wp_get_attachment_image($settings['bn-sh3']['id'], 'full').'</span> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-6"> 
							<div class="slider-main-text headline pera-content"> 
								<span class="slider-slug">'.$a['pre'].'</span>
								<h1>'.$a['title'].'</h1>
								<p>'.$a['desc'].'</p>
								<div class="clenix-btn-2">
									<a class="d-flex align-items-center justify-content-center" '.get_that_link($a['link']).'><span>'.$a['btn'].'</span></a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="slider-main-img-wrap clearfix position-relative">
								<span class="img-star1 position-absolute">'.wp_get_attachment_image($settings['shape1']['id'], 'full').'</span>
								<span class="img-star2 position-absolute">'.wp_get_attachment_image($settings['shape2']['id'], 'full').'</span>
								<div class="inner-img position-relative">
									<span class="img-shape position-absolute"></span>
										'.wp_get_attachment_image($a['img']['id'], 'full').'
								</div>
								<div class="slider-bottom-img ul-li">
									<ul>
										<li>'.wp_get_attachment_image($settings['s-cir1']['id'], 'full').'</li>
										<li>'.wp_get_attachment_image($settings['s-cir2']['id'], 'full').'</li>
										<li>'.wp_get_attachment_image($settings['s-cir3']['id'], 'full').'</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		';
	}
?>

<section id="clenix-slider" class="clenix-slider-section position-relative">
	<div class="carousel_nav">
		<button type="button" class="main_left_arrow"><i class="fal fa-long-arrow-left"></i></button>
		<button type="button" class="main_right_arrow"><i class="fal fa-long-arrow-right"></i></button>
	</div>
	<div class="clenix-slider-content">
		<?php echo $html;?>
	</div>
</section>