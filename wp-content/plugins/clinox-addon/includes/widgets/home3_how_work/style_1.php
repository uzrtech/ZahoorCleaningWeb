<?php
    $i = 0;
	$html = '';
	foreach ($settings['items'] as $a) {
		$i++;  
		$delay = $i*200;		
	    $html .= ' 

		<div class="col-lg-2 col-md-4 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
			<div class="clenix-how-work-item-3 text-center position-relative">
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

<section id="clenix-how-work-3" class="clenix-how-work-section-3" data-background="<?php echo $settings['bg']['url'];?>">
	<div class="container">
		<div class="clenix-section-title-3 text-center headline pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
			<div class="subtitle text-uppercase">
				<?php echo $settings['pre'];?>
			</div>
			<h2><?php echo $settings['title'];?></h2>
		</div>
		<div class="clenix-how-work-content-3 position-relative">
			<span class="line-shape position-absolute">
				<?php echo wp_get_attachment_image($settings['shape']['id'], 'full');?>
			</span>
			<div class="row justify-content-center">
				<?php echo $html;?>
			</div>
		</div>
	</div>
</section>