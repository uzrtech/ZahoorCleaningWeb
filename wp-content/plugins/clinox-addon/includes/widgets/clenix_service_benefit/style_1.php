<?php
$out = '';
foreach ($settings['items'] as $item){
  $out.= '
  	<li>'.$item['list'].'</li>
  ';  
}
?> 
  
  <section id="clenix-service-benifit" class="clenix-service-benifit-section">
	<div class="container">
		<div class="clenix-service-benifit-content">
			<div class="row">
				<div class="col-lg-6">
					<div class="clenix-service-benifit-text-wrap">
						<div class="clenix-section-title  headline pera-content">
							<span class="sub-title"><?php echo $settings['pre'];?></span>
							<h2><?php echo $settings['title'];?>
							</h2>
							<p><?php echo $settings['desc'];?></p>
						</div>
						<div class="service-benifit-feature ul-li">
							<ul>
								<?php echo $out;?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="clenix-about-service-img-wrap position-relative">
						<span class="img-shape position-absolute"></span>
						<div class="clenix-about-service-img">
							<?php echo wp_get_attachment_image($settings['thumbnail']['id'], 'full');?>
						</div>
						<div class="video-play-btn">
							<a class="video_box d-flex align-items-center justify-content-center" href="<?php echo $settings['video'];?>">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	