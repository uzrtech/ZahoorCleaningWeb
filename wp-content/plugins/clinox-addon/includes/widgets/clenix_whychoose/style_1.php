<?php
$i = 0;
$out = $num ='';
foreach ($settings['whys'] as $item){
  $i++;  
  $delay = $i*200;
  $out.= '
	<div class="col-md-6 wow fadeInUp" data-wow-delay="'.$delay.'ms" data-wow-duration="1500ms">
		<div class="clenix-why-choose-inner-item">
			<div class="inner-icon position-relative">
				'.wp_get_attachment_image($item['icon']['id'], 'full').'
			</div>
			<div class="inner-text headline">
				<h3>'.$item['title'].'</h3>
			</div>
		</div>
	</div>
  '; 
}

foreach ($settings['progress'] as $item){
	$i++;  
	$delay = $i*200;
	$num.= '
		<div class="skill-set-percent headline">
			<h4>'.$item['title'].'</h4>
			<div class="progress">
				<div class="progress-bar" data-percent="'.$item['num']['size'].'"></div>
			</div>
		</div>
	'; 
  }

?> 

<section id="clenix-why-choose" class="clenix-why-choose-section">
	<div class="container">
		<div class="clenix-why-choose-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-why-choose-text-wrap">
						<div class="clenix-section-title headline pera-content pr-text-in">
							<h3 class="sub-title d-inline-block">
								<span class="pr-text-in_item1">
									<span class="pr-text-in_item2">
										<span class="pr-text-in_item3">
											<?php echo $settings['sub'];?>
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
						<div class="clenix-why-choose-inner-wrapper">
							<div class="row">
								<?php echo $out;?>  
							</div>
						</div>
						<div class="clenix-why-choose-skill-wrap headline pera-content">
							<h3><?php echo $settings['progress_label'];?></h3>
							<div class="skill-progress-bar">
  								<?php echo $num;?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-why-choose-img position-relative">
						<span class="bg-shape position-absolute"></span>
						<div class="why-choose-img1 bg-img-area">
							<?php echo wp_get_attachment_image($settings['img']['id'], 'full');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 