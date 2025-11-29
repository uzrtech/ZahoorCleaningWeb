<?php
    $i = 0;
	$html = '';
	foreach ($settings['items'] as $a) {
		$i++;  
		$delay = $i*200;		
	    $html .= '
		<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
			<div class="clenix-how-work-item text-center position-relative">
				<span class="serial d-flex justify-content-center align-items-center position-absolute">'.$a['num'].'</span>
				<div class="inner-icon position-relative d-flex justify-content-center align-items-center">
				   '.wp_get_attachment_image($a['icon']['id'], 'full').'
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
<section id="clenix-how-work" class="clenix-how-work-section">
	<div class="container">
		<div class="clenix-section-title-2 text-center headline pera-content pr-text-in">
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
		<div class="clenix-how-work-content position-relative">
			<span class="line-shape position-absolute">
				<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
			</span>
			<div class="row justify-content-center">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>	